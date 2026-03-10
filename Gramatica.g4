grammar Gramatica;

// ================================================================
// REGLAS DEL PARSER
// ================================================================

// -------------------------------------------------------------
// Punto de inicio y declaraciones de nivel superior
// -------------------------------------------------------------

inicio
    : declaracionNivelSuperior* EOF
    ;

declaracionNivelSuperior
    : declaracionFuncion      # DeclFunction
    | declaracionVariable     # DeclGlobalVar
    | declaracionConstante    # DeclGlobalConst
    | declaracionStruct       # DeclStruct
    ;

// -------------------------------------------------------------
// Declaración de funciones
// -------------------------------------------------------------

declaracionFuncion
    : KW_FUNC ID LPAREN listaParametros? RPAREN tiposRetorno? bloque
    ;

tiposRetorno
    : tipo
    | LPAREN tipo (COMMA tipo)* RPAREN
    ;

listaParametros
    : parametro (COMMA parametro)*
    ;

parametro
    : ID tipo
    ;

// -------------------------------------------------------------
// Declaración de structs
// -------------------------------------------------------------

declaracionStruct
    : KW_TYPE ID KW_STRUCT LBRACE (ID tipo SEMICOLON)* RBRACE
    ;

// -------------------------------------------------------------
// Bloques y sentencias
// -------------------------------------------------------------

bloque
    : LBRACE sentencia* RBRACE
    ;

sentencia
    : declaracionVariable SEMICOLON?    # StmtVar
    | declaracionConstante SEMICOLON?   # StmtConst
    | asignacion SEMICOLON?             # StmtAssign
    | declaracionCorta SEMICOLON?       # StmtShortDecl
    | sentenciaPrint SEMICOLON?         # StmtPrint
    | sentenciaIf                       # StmtIf
    | sentenciaSwitch                   # StmtSwitch   
    | sentenciaFor                      # StmtFor      
    | sentenciaBreak SEMICOLON?         # StmtBreak    
    | sentenciaContinue SEMICOLON?      # StmtContinue 
    | bloque                            # StmtBlock
    | sentenciaReturn SEMICOLON?        # StmtReturn
    | asignacionArreglo SEMICOLON?      # StmtArrayAssign
    | expresion SEMICOLON?              # StmtExpr  
    | asignacionStruct SEMICOLON?       # StmtStructAssign
    | SEMICOLON                         # StmtEmpty
    | '*' + ID '=' expresion ';'        # StmtPtrAssign 
    ;

// -------------------------------------------------------------
// Declaraciones de variables y constantes
// -------------------------------------------------------------

declaracionVariable
    : KW_VAR ID (COMMA ID)* tipo (ASSIGN listaExpresiones)?
    ;

declaracionConstante
    : KW_CONST ID tipo ASSIGN expresion
    ;

declaracionCorta
    : ID (COMMA ID)* DECLARE_ASSIGN listaExpresiones
    ;

// -------------------------------------------------------------
// Asignaciones
// -------------------------------------------------------------

asignacion
    : ID (COMMA ID)* ASSIGN listaExpresiones                                      # AssignSimple
    | ID op=(PLUS_ASSIGN | MINUS_ASSIGN | MUL_ASSIGN | DIV_ASSIGN | MOD_ASSIGN) expresion # AssignCompound
    | ID PLUS_PLUS                                                                 # AssignInc
    | ID MINUS_MINUS                                                               # AssignDec
    ;

asignacionArreglo
    : ID (LBRACKET expresion RBRACKET)+ ASSIGN expresion
    ;
    
asignacionStruct
    : expresion DOT ID ASSIGN expresion
    ;

// -------------------------------------------------------------
// Sentencias de control de flujo
// -------------------------------------------------------------

sentenciaIf
    : KW_IF expresion bloque (KW_ELSE (sentenciaIf | bloque))?
    ;

sentenciaFor
    : KW_FOR (
        expresion
        | declaracionVariable SEMICOLON expresion SEMICOLON asignacion
        | declaracionCorta SEMICOLON expresion SEMICOLON asignacion
      )? bloque
    ;

sentenciaSwitch
    : KW_SWITCH expresion LBRACE bloqueSwitch RBRACE
    ;

bloqueSwitch
    : sentenciaCase* sentenciaDefault?
    ;

sentenciaCase
    : KW_CASE listaExpresiones COLON sentencia*
    ;

sentenciaDefault
    : KW_DEFAULT COLON sentencia*
    ;

// -------------------------------------------------------------
// Sentencias de transferencia
// -------------------------------------------------------------

sentenciaBreak 
    : KW_BREAK
    ;

sentenciaContinue 
    : KW_CONTINUE
    ;

sentenciaReturn
    : KW_RETURN listaExpresiones?
    ;

sentenciaPrint
    : (KW_PRINT | KW_PRINTLN) LPAREN listaExpresiones? RPAREN
    ;

// -------------------------------------------------------------
// Expresiones
// -------------------------------------------------------------

expresion
    : LPAREN expresion RPAREN                                         # ExprParenthesis
    | NOT expresion                                                   # ExprNot
    | MINUS expresion                                                 # ExprNegate
    | ID LBRACE listaExpresiones? RBRACE                              # ExprStructLit
    | literalArreglo                                                  # ExprArrayLit 
    | '&' ID                                                          # ExprAddr 
    | '*' expresion                                                   # ExprDeref 

    | expresion DOT ID                                                # ExprStructAccess
    
    | expresion LBRACKET expresion RBRACKET                           # ExprArrayAccess 
    | expresion LPAREN listaExpresiones? RPAREN                       # ExprCall
    
    | expresion (MUL | DIV | MOD) expresion                           # ExprMulDiv
    | expresion (PLUS | MINUS) expresion                              # ExprAddSub
    
    | expresion (LESS_THAN | GREATER_THAN | LESS_EQUAL | GREATER_EQUAL) expresion # ExprRelational
    | expresion (EQUALS | NOT_EQUALS) expresion                       # ExprEquality
    
    | expresion AND expresion                                         # ExprAnd
    | expresion OR expresion                                          # ExprOr
    
    | LBRACE listaExpresiones? RBRACE                                 # ExprArrayInline
    | ID                                                              # ExprId
    | literal                                                         # ExprLiteral
    | KW_NIL                                                          # ExprNil
    ;

listaExpresiones
    : expresion (COMMA expresion)*
    ;

// -------------------------------------------------------------
// Tipos y literales
// -------------------------------------------------------------

tipo
    : TYPE_INT
    | TYPE_FLOAT
    | TYPE_BOOL
    | TYPE_RUNE
    | TYPE_STRING
    | '*' tipo  
    | LBRACKET expresion RBRACKET tipo
    | ID
    ;

literal
    : DECIMAL_LITERAL
    | FLOAT_LITERAL
    | STRING_LITERAL
    | RUNE_LITERAL
    | TRUE
    | FALSE
    ;

literalArreglo
    : tipo LBRACE listaExpresiones? RBRACE
    ;


// ================================================================
// REGLAS DEL LEXER (TOKENS)
// ================================================================

// -------------------------------------------------------------
// Palabras reservadas
// -------------------------------------------------------------

KW_FUNC     : 'func';
KW_VAR      : 'var';
KW_CONST    : 'const';
KW_IF       : 'if';
KW_ELSE     : 'else';
KW_SWITCH   : 'switch';
KW_CASE     : 'case';
KW_DEFAULT  : 'default';
KW_FOR      : 'for';
KW_BREAK    : 'break';
KW_CONTINUE : 'continue';
KW_RETURN   : 'return';
KW_NIL      : 'nil';
KW_PRINT    : 'print';    
KW_PRINTLN  : 'println';  
KW_STRUCT   : 'struct';
KW_TYPE     : 'type';

// -------------------------------------------------------------
// Tipos de datos
// -------------------------------------------------------------

TYPE_INT    : 'int32';
TYPE_FLOAT  : 'float32';
TYPE_BOOL   : 'bool';
TYPE_RUNE   : 'rune';
TYPE_STRING : 'string';

// -------------------------------------------------------------
// Valores literales booleanos
// -------------------------------------------------------------

TRUE        : 'true';
FALSE       : 'false';

// -------------------------------------------------------------
// Operadores de asignación
// -------------------------------------------------------------

DECLARE_ASSIGN : ':=';
PLUS_PLUS      : '++';
MINUS_MINUS    : '--';
PLUS_ASSIGN    : '+=';
MINUS_ASSIGN   : '-=';
MUL_ASSIGN     : '*=';
DIV_ASSIGN     : '/=';
MOD_ASSIGN     : '%=';
ASSIGN         : '=';

// -------------------------------------------------------------
// Operadores aritméticos
// -------------------------------------------------------------

PLUS        : '+';
MINUS       : '-';
MUL         : '*';
DIV         : '/';
MOD         : '%';

// -------------------------------------------------------------
// Operadores relacionales
// -------------------------------------------------------------

EQUALS      : '==';
NOT_EQUALS  : '!=';
LESS_EQUAL  : '<=';
GREATER_EQUAL: '>=';
LESS_THAN   : '<';
GREATER_THAN: '>';

// -------------------------------------------------------------
// Operadores lógicos
// -------------------------------------------------------------

AND         : '&&';
OR          : '||';
NOT         : '!';

// -------------------------------------------------------------
// Símbolos de puntuación y delimitadores
// -------------------------------------------------------------

LPAREN      : '(';
RPAREN      : ')';
LBRACE      : '{';
RBRACE      : '}';
LBRACKET    : '[';
RBRACKET    : ']';
COMMA       : ',';
SEMICOLON   : ';';
COLON       : ':';
DOT         : '.';

// -------------------------------------------------------------
// Identificadores
// -------------------------------------------------------------

ID          : [a-zA-Z_] [a-zA-Z0-9_]*;

// -------------------------------------------------------------
// Literales numéricos
// -------------------------------------------------------------

DECIMAL_LITERAL : [0-9]+;

FLOAT_LITERAL   : [0-9]+ '.' [0-9]+
                | '.' [0-9]+
                ;

// -------------------------------------------------------------
// Literales de texto
// -------------------------------------------------------------

STRING_LITERAL  : '"' (~["\r\n\\] | '\\' .)* '"';

RUNE_LITERAL    : '\'' (~['\r\n\\] | '\\' .) '\'';

// -------------------------------------------------------------
// Comentarios y espacios en blanco
// -------------------------------------------------------------

COMMENT_SINGLE  : '//' ~[\r\n]* -> skip;
COMMENT_MULTI   : '/*' .*? '*/' -> skip;
WS              : [ \t\r\n]+ -> skip;

// -------------------------------------------------------------
// Caracteres de error
// -------------------------------------------------------------

ERR_CHAR        : .;