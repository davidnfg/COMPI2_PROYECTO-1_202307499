#!/usr/bin/env bash

HOST="localhost"
PORT="8080"
DIR="$(cd "$(dirname "$0")" && pwd)"

# Matar cualquier instancia previa en el mismo puerto
fuser -k "${PORT}/tcp" 2>/dev/null

echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "  Golampi Interpreter"
echo "  http://${HOST}:${PORT}"
echo "  Ctrl+C para detener"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"

# Abrir el navegador después de 1 segundo (en background)
(sleep 1 && xdg-open "http://${HOST}:${PORT}" 2>/dev/null) &

# Iniciar el servidor PHP (bloqueante)
php -S "${HOST}:${PORT}" -t "${DIR}" 2>&1
