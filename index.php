<?php

require_once 'vendor/autoload.php';
require_once 'GramaticaLexer.php';
require_once 'GramaticaParser.php';
require_once 'Interprete.php';

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\InputStream;

// ── API AJAX ──────────────────────────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['codigo'])) {
    $entrada = $_POST['codigo'] ?? '';

    try {
        $input  = InputStream::fromString($entrada);
        $lexer  = new GramaticaLexer($input);
        $tokens = new CommonTokenStream($lexer);
        $parser = new GramaticaParser($tokens);
        $parser->removeErrorListeners();
        $tree   = $parser->inicio();

        $interprete = new Interprete();
        $interprete->visit($tree);

        $manejadorErrores = $interprete->obtenerManejadorErrores();
        $tablaSimbolos    = $interprete->obtenerTablaSimbolos();

        header('Content-Type: application/json; charset=utf-8');
        echo json_encode([
            'exito'          => !$manejadorErrores->hayErrores(),
            'salida'         => $interprete->obtenerSalida(),
            'reporteErrores' => $manejadorErrores->generarReporteHTML(),
            'reporteSimbolos'=> $tablaSimbolos->generarReporteHTML(),
        ]);
    } catch (Throwable $e) {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode([
            'exito'          => false,
            'salida'         => '',
            'reporteErrores' => '<p style="color:red">' . htmlspecialchars($e->getMessage()) . '</p>',
            'reporteSimbolos'=> '',
        ]);
    }
    exit;
}

// ── FRONTEND HTML ─────────────────────────────────────────────────────────────
$codigoEjemplo = <<<'GOLAMPI'
func main() {
    fmt.Println("¡Hola, Golampi!")
    var x int32 = 10
    var y int32 = 20
    fmt.Println("Suma:", x + y)
}
GOLAMPI;
?><!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Golampi Interpreter — 202307499</title>
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --bg:       #1e1e2e;
    --surface:  #181825;
    --panel:    #11111b;
    --border:   #313244;
    --accent:   #89b4fa;
    --green:    #a6e3a1;
    --red:      #f38ba8;
    --yellow:   #f9e2af;
    --text:     #cdd6f4;
    --subtext:  #6c7086;
    --btn-h:    #1e1e2e;
    --radius:   8px;
    --font-mono: 'JetBrains Mono', 'Fira Code', 'Cascadia Code', monospace;
    --font-ui:   'Segoe UI', system-ui, sans-serif;
  }

  html, body { height: 100%; background: var(--bg); color: var(--text); font-family: var(--font-ui); font-size: 14px; }

  /* ── HEADER ── */
  header {
    display: flex; align-items: center; justify-content: space-between;
    padding: 10px 20px;
    background: var(--surface);
    border-bottom: 1px solid var(--border);
    gap: 12px;
    flex-wrap: wrap;
  }
  .brand { display: flex; align-items: center; gap: 10px; }
  .brand svg { width: 28px; height: 28px; }
  .brand h1 { font-size: 1.2rem; color: var(--accent); letter-spacing: .5px; }
  .brand span { font-size: .75rem; color: var(--subtext); }

  .toolbar { display: flex; gap: 8px; flex-wrap: wrap; }

  button {
    display: inline-flex; align-items: center; gap: 6px;
    padding: 7px 14px;
    border: 1px solid var(--border);
    border-radius: var(--radius);
    background: var(--surface);
    color: var(--text);
    font-size: .82rem;
    font-family: var(--font-ui);
    cursor: pointer;
    transition: background .15s, border-color .15s;
  }
  button:hover { background: var(--btn-h); border-color: var(--accent); }
  button.primary { background: var(--accent); color: var(--panel); border-color: var(--accent); font-weight: 600; }
  button.primary:hover { opacity: .9; }
  button svg { width: 15px; height: 15px; }

  /* ── LAYOUT ── */
  .workspace {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 1fr;
    gap: 0;
    height: calc(100vh - 57px);
  }

  .pane {
    display: flex; flex-direction: column;
    border-right: 1px solid var(--border);
    overflow: hidden;
  }
  .pane:last-child { border-right: none; }

  .pane-header {
    display: flex; align-items: center; justify-content: space-between;
    padding: 8px 14px;
    background: var(--surface);
    border-bottom: 1px solid var(--border);
    font-size: .78rem; color: var(--subtext); letter-spacing: .4px; text-transform: uppercase;
    flex-shrink: 0;
  }
  .pane-header .pane-actions { display: flex; gap: 6px; }

  /* ── EDITOR ── */
  .editor-wrap { flex: 1; display: flex; overflow: hidden; }

  #lineNums {
    padding: 10px 8px;
    background: var(--panel);
    color: var(--subtext);
    font: 13px/1.6 var(--font-mono);
    text-align: right;
    user-select: none;
    overflow: hidden;
    min-width: 42px;
    flex-shrink: 0;
    white-space: pre;
    border-right: 1px solid var(--border);
  }

  #editor {
    flex: 1;
    padding: 10px 14px;
    background: var(--panel);
    color: var(--text);
    font: 13px/1.6 var(--font-mono);
    border: none; outline: none; resize: none;
    tab-size: 4;
    white-space: pre;
    overflow: auto;
    caret-color: var(--accent);
  }

  /* ── OUTPUT TABS ── */
  .output-pane { background: var(--panel); }

  .tabs { display: flex; border-bottom: 1px solid var(--border); background: var(--surface); flex-shrink: 0; }
  .tab {
    padding: 8px 18px;
    font-size: .8rem; cursor: pointer; color: var(--subtext);
    border-bottom: 2px solid transparent;
    transition: color .15s, border-color .15s;
  }
  .tab.active { color: var(--accent); border-bottom-color: var(--accent); }
  .tab:hover:not(.active) { color: var(--text); }

  .tab-content { display: none; flex: 1; overflow: auto; padding: 14px; }
  .tab-content.active { display: block; }

  #consola {
    font: 13px/1.6 var(--font-mono);
    white-space: pre-wrap;
    word-break: break-word;
    color: var(--green);
  }

  /* ── TABLA / ERRORES ── */
  table { width: 100%; border-collapse: collapse; font-size: .8rem; }
  th { background: var(--surface); color: var(--subtext); font-weight: 600; text-align: left; padding: 7px 10px; border-bottom: 1px solid var(--border); }
  td { padding: 6px 10px; border-bottom: 1px solid var(--border); color: var(--text); }
  tr:hover td { background: rgba(137,180,250,.05); }
  .err-tipo { color: var(--red); font-weight: 600; }
  .err-desc { color: var(--text); }
  .err-linea { color: var(--yellow); }

  #spinnerOverlay {
    display: none; position: fixed; inset: 0;
    background: rgba(0,0,0,.45);
    align-items: center; justify-content: center; z-index: 99;
  }
  #spinnerOverlay.show { display: flex; }
  .spinner {
    width: 40px; height: 40px;
    border: 4px solid var(--border);
    border-top-color: var(--accent);
    border-radius: 50%;
    animation: spin .7s linear infinite;
  }
  @keyframes spin { to { transform: rotate(360deg); } }

  .status-bar {
    padding: 4px 14px;
    font-size: .73rem; color: var(--subtext);
    background: var(--surface);
    border-top: 1px solid var(--border);
    display: flex; gap: 16px; flex-shrink: 0;
  }
  .status-ok  { color: var(--green); }
  .status-err { color: var(--red); }

  /* scrollbar */
  ::-webkit-scrollbar { width: 6px; height: 6px; }
  ::-webkit-scrollbar-track { background: transparent; }
  ::-webkit-scrollbar-thumb { background: var(--border); border-radius: 3px; }

  @media (max-width: 768px) {
    .workspace { grid-template-columns: 1fr; grid-template-rows: 50vh 50vh; }
  }
</style>
</head>
<body>

<!-- ── SPINNER ──────────────────────────────────── -->
<div id="spinnerOverlay"><div class="spinner"></div></div>

<!-- ── HEADER ──────────────────────────────────── -->
<header>
  <div class="brand">
    <svg viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>
    </svg>
    <div>
      <h1>Golampi Interpreter</h1>
      <span>Compiladores 2 — 202307499</span>
    </div>
  </div>
  <div class="toolbar">
    <button onclick="nuevoArchivo()" title="Nuevo archivo">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
      Nuevo
    </button>
    <button onclick="cargarArchivo()" title="Cargar archivo .golampi">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
      Cargar
    </button>
    <button onclick="guardarArchivo()" title="Guardar código">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/><polyline points="17 21 17 13 7 13 7 21"/><polyline points="7 3 7 8 15 8"/></svg>
      Guardar
    </button>
    <button class="primary" onclick="ejecutar()" title="Ejecutar (Ctrl+Enter)">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="5 3 19 12 5 21 5 3"/></svg>
      Ejecutar
    </button>
    <button onclick="limpiarConsola()" title="Limpiar consola">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14H6L5 6"/><path d="M10 11v6"/><path d="M14 11v6"/><path d="M9 6V4h6v2"/></svg>
      Limpiar
    </button>
  </div>
</header>

<!-- ── WORKSPACE ──────────────────────────────── -->
<div class="workspace">

  <!-- EDITOR -->
  <div class="pane">
    <div class="pane-header">
      <span>📄 Editor</span>
      <div class="pane-actions">
        <button onclick="guardarArchivo()" style="padding:4px 10px;font-size:.75rem">⬇ Guardar</button>
      </div>
    </div>
    <div class="editor-wrap">
      <div id="lineNums">1</div>
      <textarea id="editor" spellcheck="false" autocomplete="off" autocorrect="off" autocapitalize="off"
        placeholder="// Escribe tu código Golampi aquí…"><?= htmlspecialchars($codigoEjemplo) ?></textarea>
    </div>
    <div class="status-bar">
      <span id="statusLineas">Líneas: —</span>
      <span id="statusCursor">Ln 1, Col 1</span>
    </div>
  </div>

  <!-- OUTPUT -->
  <div class="pane output-pane">
    <div class="pane-header">
      <span>⚡ Salida</span>
      <div class="pane-actions">
        <button onclick="descargar('consola')"  style="padding:4px 10px;font-size:.75rem">⬇ Resultado</button>
        <button onclick="descargar('errores')"  style="padding:4px 10px;font-size:.75rem">⬇ Errores</button>
        <button onclick="descargar('simbolos')" style="padding:4px 10px;font-size:.75rem">⬇ Símbolos</button>
      </div>
    </div>

    <div class="tabs">
      <div class="tab active" onclick="abrirTab('consola', this)">Consola</div>
      <div class="tab" onclick="abrirTab('errores', this)">Errores <span id="badgeErr"></span></div>
      <div class="tab" onclick="abrirTab('simbolos', this)">Tabla de Símbolos</div>
    </div>

    <div id="consola-tab" class="tab-content active">
      <div id="consola">// Ejecuta tu programa para ver la salida aquí.</div>
    </div>
    <div id="errores-tab" class="tab-content">
      <div id="errores"><p style="color:var(--subtext)">Sin errores.</p></div>
    </div>
    <div id="simbolos-tab" class="tab-content">
      <div id="simbolos"><p style="color:var(--subtext)">Ejecuta el programa para ver la tabla de símbolos.</p></div>
    </div>

    <div class="status-bar">
      <span id="statusEjecucion">— Sin ejecutar</span>
      <span id="statusTiempo"></span>
    </div>
  </div>
</div>

<input type="file" id="fileInput" accept=".golampi,.go,.txt" style="display:none">

<script>
// ── Estado global ──────────────────────────────
const editor   = document.getElementById('editor');
const lineNums = document.getElementById('lineNums');
let ultimaSalida  = '';
let ultimaErrHTML = '';
let ultimaSimHTML = '';

// ── Numeración de líneas ───────────────────────
function actualizarNums() {
  const lineas = editor.value.split('\n').length;
  document.getElementById('statusLineas').textContent = 'Líneas: ' + lineas;
  lineNums.textContent = Array.from({length: lineas}, (_, i) => i + 1).join('\n');
  lineNums.scrollTop = editor.scrollTop;
}
editor.addEventListener('input', actualizarNums);
editor.addEventListener('scroll', () => { lineNums.scrollTop = editor.scrollTop; });
editor.addEventListener('keydown', e => {
  if (e.key === 'Tab') {
    e.preventDefault();
    const s = editor.selectionStart;
    editor.value = editor.value.slice(0, s) + '    ' + editor.value.slice(editor.selectionEnd);
    editor.selectionStart = editor.selectionEnd = s + 4;
    actualizarNums();
  }
  if ((e.ctrlKey || e.metaKey) && e.key === 'Enter') { e.preventDefault(); ejecutar(); }
});
editor.addEventListener('click',   actualizarCursor);
editor.addEventListener('keyup',   actualizarCursor);
function actualizarCursor() {
  const txt = editor.value.slice(0, editor.selectionStart);
  const ln  = txt.split('\n').length;
  const col = txt.split('\n').pop().length + 1;
  document.getElementById('statusCursor').textContent = `Ln ${ln}, Col ${col}`;
}

// ── Tabs ───────────────────────────────────────
function abrirTab(nombre, el) {
  document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
  document.querySelectorAll('.tab-content').forEach(t => t.classList.remove('active'));
  el.classList.add('active');
  document.getElementById(nombre + '-tab').classList.add('active');
}

// ── Ejecutar ───────────────────────────────────
async function ejecutar() {
  const codigo = editor.value.trim();
  if (!codigo) return;

  document.getElementById('spinnerOverlay').classList.add('show');
  const t0 = performance.now();

  try {
    const fd = new FormData();
    fd.append('codigo', codigo);

    const res  = await fetch('index.php', { method: 'POST', body: fd });
    const data = await res.json();
    const ms   = Math.round(performance.now() - t0);

    // Consola
    ultimaSalida = data.salida || '';
    document.getElementById('consola').textContent = ultimaSalida || '(sin salida)';

    // Errores
    ultimaErrHTML = data.reporteErrores || '';
    document.getElementById('errores').innerHTML = ultimaErrHTML || '<p style="color:var(--green)">✔ Sin errores.</p>';

    // Símbolos
    ultimaSimHTML = data.reporteSimbolos || '';
    document.getElementById('simbolos').innerHTML = ultimaSimHTML || '<p style="color:var(--subtext)">Sin símbolos.</p>';

    // Badge errores
    const hayErr = ultimaErrHTML.includes('<tr');
    document.getElementById('badgeErr').textContent = hayErr ? '⚠' : '';
    document.getElementById('badgeErr').style.color = 'var(--red)';

    // Status
    const st = document.getElementById('statusEjecucion');
    if (data.exito) {
      st.className = 'status-ok';
      st.textContent = '✔ Ejecución exitosa';
    } else {
      st.className = 'status-err';
      st.textContent = '✖ Errores detectados';
    }
    document.getElementById('statusTiempo').textContent = `${ms} ms`;

    // Ir a consola
    abrirTab('consola', document.querySelector('.tab'));

  } catch (err) {
    document.getElementById('consola').textContent = 'Error de red: ' + err.message;
  } finally {
    document.getElementById('spinnerOverlay').classList.remove('show');
  }
}

// ── Nuevo ──────────────────────────────────────
function nuevoArchivo() {
  if (editor.value && !confirm('¿Descartar el código actual?')) return;
  editor.value = '';
  actualizarNums();
  limpiarConsola();
}

// ── Cargar ─────────────────────────────────────
function cargarArchivo() {
  document.getElementById('fileInput').click();
}
document.getElementById('fileInput').addEventListener('change', function() {
  const file = this.files[0];
  if (!file) return;
  const reader = new FileReader();
  reader.onload = e => {
    editor.value = e.target.result;
    actualizarNums();
    this.value = '';
  };
  reader.readAsText(file);
});

// ── Guardar ────────────────────────────────────
function guardarArchivo() {
  const blob = new Blob([editor.value], { type: 'text/plain' });
  const a = document.createElement('a');
  a.href = URL.createObjectURL(blob);
  a.download = 'programa.golampi';
  a.click();
}

// ── Limpiar consola ────────────────────────────
function limpiarConsola() {
  editor.value = '';
  actualizarNums();
  document.getElementById('consola').textContent = '// Consola limpia.';
  document.getElementById('errores').innerHTML   = '<p style="color:var(--subtext)">Sin errores.</p>';
  document.getElementById('simbolos').innerHTML  = '<p style="color:var(--subtext)">Ejecuta el programa para ver la tabla de símbolos.</p>';
  document.getElementById('statusEjecucion').textContent = '— Sin ejecutar';
  document.getElementById('statusEjecucion').className = '';
  document.getElementById('statusTiempo').textContent = '';
  document.getElementById('badgeErr').textContent = '';
  ultimaSalida = ultimaErrHTML = ultimaSimHTML = '';
}

// ── Descargar outputs ──────────────────────────
function descargar(tipo) {
  let contenido = '', nombre = '';
  if (tipo === 'consola') {
    contenido = ultimaSalida; nombre = 'salida.txt';
  } else if (tipo === 'errores') {
    // Convertir HTML a texto plano
    const tmp = document.createElement('div');
    tmp.innerHTML = ultimaErrHTML;
    contenido = tmp.innerText; nombre = 'errores.txt';
  } else {
    const tmp = document.createElement('div');
    tmp.innerHTML = ultimaSimHTML;
    contenido = tmp.innerText; nombre = 'simbolos.txt';
  }
  if (!contenido.trim()) { alert('No hay contenido para descargar.'); return; }
  const blob = new Blob([contenido], { type: 'text/plain' });
  const a = document.createElement('a');
  a.href = URL.createObjectURL(blob);
  a.download = nombre;
  a.click();
}

// ── Init ───────────────────────────────────────
actualizarNums();
</script>
</body>
</html>
