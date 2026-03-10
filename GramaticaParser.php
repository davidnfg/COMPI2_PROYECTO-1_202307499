<?php

/*
 * Generated from Gramatica.g4 by ANTLR 4.13.1
 */

namespace {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class GramaticaParser extends Parser
	{
		public const T__0 = 1, KW_FUNC = 2, KW_VAR = 3, KW_CONST = 4, KW_IF = 5, 
               KW_ELSE = 6, KW_SWITCH = 7, KW_CASE = 8, KW_DEFAULT = 9, 
               KW_FOR = 10, KW_BREAK = 11, KW_CONTINUE = 12, KW_RETURN = 13, 
               KW_NIL = 14, KW_PRINT = 15, KW_PRINTLN = 16, KW_STRUCT = 17, 
               KW_TYPE = 18, TYPE_INT = 19, TYPE_FLOAT = 20, TYPE_BOOL = 21, 
               TYPE_RUNE = 22, TYPE_STRING = 23, TRUE = 24, FALSE = 25, 
               DECLARE_ASSIGN = 26, PLUS_ASSIGN = 27, MINUS_ASSIGN = 28, 
               MUL_ASSIGN = 29, DIV_ASSIGN = 30, MOD_ASSIGN = 31, ASSIGN = 32, 
               PLUS = 33, MINUS = 34, MUL = 35, DIV = 36, MOD = 37, EQUALS = 38, 
               NOT_EQUALS = 39, LESS_EQUAL = 40, GREATER_EQUAL = 41, LESS_THAN = 42, 
               GREATER_THAN = 43, AND = 44, OR = 45, NOT = 46, LPAREN = 47, 
               RPAREN = 48, LBRACE = 49, RBRACE = 50, LBRACKET = 51, RBRACKET = 52, 
               COMMA = 53, SEMICOLON = 54, COLON = 55, DOT = 56, ID = 57, 
               DECIMAL_LITERAL = 58, FLOAT_LITERAL = 59, STRING_LITERAL = 60, 
               RUNE_LITERAL = 61, COMMENT_SINGLE = 62, COMMENT_MULTI = 63, 
               WS = 64, ERR_CHAR = 65;

		public const RULE_inicio = 0, RULE_declaracionNivelSuperior = 1, RULE_declaracionFuncion = 2, 
               RULE_tiposRetorno = 3, RULE_listaParametros = 4, RULE_parametro = 5, 
               RULE_declaracionStruct = 6, RULE_bloque = 7, RULE_sentencia = 8, 
               RULE_declaracionVariable = 9, RULE_declaracionConstante = 10, 
               RULE_declaracionCorta = 11, RULE_asignacion = 12, RULE_asignacionArreglo = 13, 
               RULE_asignacionStruct = 14, RULE_sentenciaIf = 15, RULE_sentenciaFor = 16, 
               RULE_sentenciaSwitch = 17, RULE_bloqueSwitch = 18, RULE_sentenciaCase = 19, 
               RULE_sentenciaDefault = 20, RULE_sentenciaBreak = 21, RULE_sentenciaContinue = 22, 
               RULE_sentenciaReturn = 23, RULE_sentenciaPrint = 24, RULE_expresion = 25, 
               RULE_listaExpresiones = 26, RULE_tipo = 27, RULE_literal = 28, 
               RULE_literalArreglo = 29;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'inicio', 'declaracionNivelSuperior', 'declaracionFuncion', 'tiposRetorno', 
			'listaParametros', 'parametro', 'declaracionStruct', 'bloque', 'sentencia', 
			'declaracionVariable', 'declaracionConstante', 'declaracionCorta', 'asignacion', 
			'asignacionArreglo', 'asignacionStruct', 'sentenciaIf', 'sentenciaFor', 
			'sentenciaSwitch', 'bloqueSwitch', 'sentenciaCase', 'sentenciaDefault', 
			'sentenciaBreak', 'sentenciaContinue', 'sentenciaReturn', 'sentenciaPrint', 
			'expresion', 'listaExpresiones', 'tipo', 'literal', 'literalArreglo'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'&'", "'func'", "'var'", "'const'", "'if'", "'else'", "'switch'", 
		    "'case'", "'default'", "'for'", "'break'", "'continue'", "'return'", 
		    "'nil'", "'print'", "'println'", "'struct'", "'type'", "'int32'", 
		    "'float32'", "'bool'", "'rune'", "'string'", "'true'", "'false'", 
		    "':='", "'+='", "'-='", "'*='", "'/='", "'%='", "'='", "'+'", "'-'", 
		    "'*'", "'/'", "'%'", "'=='", "'!='", "'<='", "'>='", "'<'", "'>'", 
		    "'&&'", "'||'", "'!'", "'('", "')'", "'{'", "'}'", "'['", "']'", "','", 
		    "';'", "':'", "'.'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, "KW_FUNC", "KW_VAR", "KW_CONST", "KW_IF", "KW_ELSE", "KW_SWITCH", 
		    "KW_CASE", "KW_DEFAULT", "KW_FOR", "KW_BREAK", "KW_CONTINUE", "KW_RETURN", 
		    "KW_NIL", "KW_PRINT", "KW_PRINTLN", "KW_STRUCT", "KW_TYPE", "TYPE_INT", 
		    "TYPE_FLOAT", "TYPE_BOOL", "TYPE_RUNE", "TYPE_STRING", "TRUE", "FALSE", 
		    "DECLARE_ASSIGN", "PLUS_ASSIGN", "MINUS_ASSIGN", "MUL_ASSIGN", "DIV_ASSIGN", 
		    "MOD_ASSIGN", "ASSIGN", "PLUS", "MINUS", "MUL", "DIV", "MOD", "EQUALS", 
		    "NOT_EQUALS", "LESS_EQUAL", "GREATER_EQUAL", "LESS_THAN", "GREATER_THAN", 
		    "AND", "OR", "NOT", "LPAREN", "RPAREN", "LBRACE", "RBRACE", "LBRACKET", 
		    "RBRACKET", "COMMA", "SEMICOLON", "COLON", "DOT", "ID", "DECIMAL_LITERAL", 
		    "FLOAT_LITERAL", "STRING_LITERAL", "RUNE_LITERAL", "COMMENT_SINGLE", 
		    "COMMENT_MULTI", "WS", "ERR_CHAR"
		];

		private const SERIALIZED_ATN =
			[4, 1, 65, 429, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 2, 
		    24, 7, 24, 2, 25, 7, 25, 2, 26, 7, 26, 2, 27, 7, 27, 2, 28, 7, 28, 
		    2, 29, 7, 29, 1, 0, 5, 0, 62, 8, 0, 10, 0, 12, 0, 65, 9, 0, 1, 0, 
		    1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 73, 8, 1, 1, 2, 1, 2, 1, 2, 1, 
		    2, 3, 2, 79, 8, 2, 1, 2, 1, 2, 3, 2, 83, 8, 2, 1, 2, 1, 2, 1, 3, 1, 
		    3, 1, 3, 1, 3, 1, 3, 5, 3, 92, 8, 3, 10, 3, 12, 3, 95, 9, 3, 1, 3, 
		    1, 3, 3, 3, 99, 8, 3, 1, 4, 1, 4, 1, 4, 5, 4, 104, 8, 4, 10, 4, 12, 
		    4, 107, 9, 4, 1, 5, 1, 5, 1, 5, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 
		    1, 6, 1, 6, 5, 6, 120, 8, 6, 10, 6, 12, 6, 123, 9, 6, 1, 6, 1, 6, 
		    1, 7, 1, 7, 5, 7, 129, 8, 7, 10, 7, 12, 7, 132, 9, 7, 1, 7, 1, 7, 
		    1, 8, 1, 8, 3, 8, 138, 8, 8, 1, 8, 1, 8, 3, 8, 142, 8, 8, 1, 8, 1, 
		    8, 3, 8, 146, 8, 8, 1, 8, 1, 8, 3, 8, 150, 8, 8, 1, 8, 1, 8, 3, 8, 
		    154, 8, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 3, 8, 161, 8, 8, 1, 8, 1, 
		    8, 3, 8, 165, 8, 8, 1, 8, 1, 8, 1, 8, 3, 8, 170, 8, 8, 1, 8, 1, 8, 
		    3, 8, 174, 8, 8, 1, 8, 1, 8, 3, 8, 178, 8, 8, 1, 8, 1, 8, 3, 8, 182, 
		    8, 8, 1, 8, 1, 8, 4, 8, 186, 8, 8, 11, 8, 12, 8, 187, 1, 8, 1, 8, 
		    1, 8, 1, 8, 1, 8, 3, 8, 195, 8, 8, 1, 9, 1, 9, 1, 9, 1, 9, 5, 9, 201, 
		    8, 9, 10, 9, 12, 9, 204, 9, 9, 1, 9, 1, 9, 1, 9, 3, 9, 209, 8, 9, 
		    1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 11, 1, 11, 1, 11, 5, 
		    11, 220, 8, 11, 10, 11, 12, 11, 223, 9, 11, 1, 11, 1, 11, 1, 11, 1, 
		    12, 1, 12, 1, 12, 5, 12, 231, 8, 12, 10, 12, 12, 12, 234, 9, 12, 1, 
		    12, 1, 12, 1, 12, 1, 12, 1, 12, 3, 12, 241, 8, 12, 1, 13, 1, 13, 1, 
		    13, 1, 13, 1, 13, 4, 13, 248, 8, 13, 11, 13, 12, 13, 249, 1, 13, 1, 
		    13, 1, 13, 1, 14, 1, 14, 1, 14, 1, 14, 1, 14, 1, 14, 1, 15, 1, 15, 
		    1, 15, 1, 15, 1, 15, 1, 15, 3, 15, 267, 8, 15, 3, 15, 269, 8, 15, 
		    1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 
		    16, 1, 16, 1, 16, 1, 16, 1, 16, 3, 16, 285, 8, 16, 1, 16, 1, 16, 1, 
		    17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 18, 5, 18, 296, 8, 18, 10, 
		    18, 12, 18, 299, 9, 18, 1, 18, 3, 18, 302, 8, 18, 1, 19, 1, 19, 1, 
		    19, 1, 19, 5, 19, 308, 8, 19, 10, 19, 12, 19, 311, 9, 19, 1, 20, 1, 
		    20, 1, 20, 5, 20, 316, 8, 20, 10, 20, 12, 20, 319, 9, 20, 1, 21, 1, 
		    21, 1, 22, 1, 22, 1, 23, 1, 23, 3, 23, 327, 8, 23, 1, 24, 1, 24, 1, 
		    24, 3, 24, 332, 8, 24, 1, 24, 1, 24, 1, 25, 1, 25, 1, 25, 1, 25, 1, 
		    25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 3, 25, 348, 8, 
		    25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 3, 25, 
		    358, 8, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 
		    1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 
		    25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 
		    1, 25, 1, 25, 3, 25, 389, 8, 25, 1, 25, 5, 25, 392, 8, 25, 10, 25, 
		    12, 25, 395, 9, 25, 1, 26, 1, 26, 1, 26, 5, 26, 400, 8, 26, 10, 26, 
		    12, 26, 403, 9, 26, 1, 27, 1, 27, 1, 27, 1, 27, 1, 27, 1, 27, 1, 27, 
		    1, 27, 1, 27, 1, 27, 1, 27, 1, 27, 1, 27, 3, 27, 418, 8, 27, 1, 28, 
		    1, 28, 1, 29, 1, 29, 1, 29, 3, 29, 425, 8, 29, 1, 29, 1, 29, 1, 29, 
		    0, 1, 50, 30, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 
		    30, 32, 34, 36, 38, 40, 42, 44, 46, 48, 50, 52, 54, 56, 58, 0, 7, 
		    1, 0, 27, 31, 1, 0, 15, 16, 1, 0, 35, 37, 1, 0, 33, 34, 1, 0, 40, 
		    43, 1, 0, 38, 39, 2, 0, 24, 25, 58, 61, 482, 0, 63, 1, 0, 0, 0, 2, 
		    72, 1, 0, 0, 0, 4, 74, 1, 0, 0, 0, 6, 98, 1, 0, 0, 0, 8, 100, 1, 0, 
		    0, 0, 10, 108, 1, 0, 0, 0, 12, 111, 1, 0, 0, 0, 14, 126, 1, 0, 0, 
		    0, 16, 194, 1, 0, 0, 0, 18, 196, 1, 0, 0, 0, 20, 210, 1, 0, 0, 0, 
		    22, 216, 1, 0, 0, 0, 24, 240, 1, 0, 0, 0, 26, 242, 1, 0, 0, 0, 28, 
		    254, 1, 0, 0, 0, 30, 260, 1, 0, 0, 0, 32, 270, 1, 0, 0, 0, 34, 288, 
		    1, 0, 0, 0, 36, 297, 1, 0, 0, 0, 38, 303, 1, 0, 0, 0, 40, 312, 1, 
		    0, 0, 0, 42, 320, 1, 0, 0, 0, 44, 322, 1, 0, 0, 0, 46, 324, 1, 0, 
		    0, 0, 48, 328, 1, 0, 0, 0, 50, 357, 1, 0, 0, 0, 52, 396, 1, 0, 0, 
		    0, 54, 417, 1, 0, 0, 0, 56, 419, 1, 0, 0, 0, 58, 421, 1, 0, 0, 0, 
		    60, 62, 3, 2, 1, 0, 61, 60, 1, 0, 0, 0, 62, 65, 1, 0, 0, 0, 63, 61, 
		    1, 0, 0, 0, 63, 64, 1, 0, 0, 0, 64, 66, 1, 0, 0, 0, 65, 63, 1, 0, 
		    0, 0, 66, 67, 5, 0, 0, 1, 67, 1, 1, 0, 0, 0, 68, 73, 3, 4, 2, 0, 69, 
		    73, 3, 18, 9, 0, 70, 73, 3, 20, 10, 0, 71, 73, 3, 12, 6, 0, 72, 68, 
		    1, 0, 0, 0, 72, 69, 1, 0, 0, 0, 72, 70, 1, 0, 0, 0, 72, 71, 1, 0, 
		    0, 0, 73, 3, 1, 0, 0, 0, 74, 75, 5, 2, 0, 0, 75, 76, 5, 57, 0, 0, 
		    76, 78, 5, 47, 0, 0, 77, 79, 3, 8, 4, 0, 78, 77, 1, 0, 0, 0, 78, 79, 
		    1, 0, 0, 0, 79, 80, 1, 0, 0, 0, 80, 82, 5, 48, 0, 0, 81, 83, 3, 6, 
		    3, 0, 82, 81, 1, 0, 0, 0, 82, 83, 1, 0, 0, 0, 83, 84, 1, 0, 0, 0, 
		    84, 85, 3, 14, 7, 0, 85, 5, 1, 0, 0, 0, 86, 99, 3, 54, 27, 0, 87, 
		    88, 5, 47, 0, 0, 88, 93, 3, 54, 27, 0, 89, 90, 5, 53, 0, 0, 90, 92, 
		    3, 54, 27, 0, 91, 89, 1, 0, 0, 0, 92, 95, 1, 0, 0, 0, 93, 91, 1, 0, 
		    0, 0, 93, 94, 1, 0, 0, 0, 94, 96, 1, 0, 0, 0, 95, 93, 1, 0, 0, 0, 
		    96, 97, 5, 48, 0, 0, 97, 99, 1, 0, 0, 0, 98, 86, 1, 0, 0, 0, 98, 87, 
		    1, 0, 0, 0, 99, 7, 1, 0, 0, 0, 100, 105, 3, 10, 5, 0, 101, 102, 5, 
		    53, 0, 0, 102, 104, 3, 10, 5, 0, 103, 101, 1, 0, 0, 0, 104, 107, 1, 
		    0, 0, 0, 105, 103, 1, 0, 0, 0, 105, 106, 1, 0, 0, 0, 106, 9, 1, 0, 
		    0, 0, 107, 105, 1, 0, 0, 0, 108, 109, 5, 57, 0, 0, 109, 110, 3, 54, 
		    27, 0, 110, 11, 1, 0, 0, 0, 111, 112, 5, 18, 0, 0, 112, 113, 5, 57, 
		    0, 0, 113, 114, 5, 17, 0, 0, 114, 121, 5, 49, 0, 0, 115, 116, 5, 57, 
		    0, 0, 116, 117, 3, 54, 27, 0, 117, 118, 5, 54, 0, 0, 118, 120, 1, 
		    0, 0, 0, 119, 115, 1, 0, 0, 0, 120, 123, 1, 0, 0, 0, 121, 119, 1, 
		    0, 0, 0, 121, 122, 1, 0, 0, 0, 122, 124, 1, 0, 0, 0, 123, 121, 1, 
		    0, 0, 0, 124, 125, 5, 50, 0, 0, 125, 13, 1, 0, 0, 0, 126, 130, 5, 
		    49, 0, 0, 127, 129, 3, 16, 8, 0, 128, 127, 1, 0, 0, 0, 129, 132, 1, 
		    0, 0, 0, 130, 128, 1, 0, 0, 0, 130, 131, 1, 0, 0, 0, 131, 133, 1, 
		    0, 0, 0, 132, 130, 1, 0, 0, 0, 133, 134, 5, 50, 0, 0, 134, 15, 1, 
		    0, 0, 0, 135, 137, 3, 18, 9, 0, 136, 138, 5, 54, 0, 0, 137, 136, 1, 
		    0, 0, 0, 137, 138, 1, 0, 0, 0, 138, 195, 1, 0, 0, 0, 139, 141, 3, 
		    20, 10, 0, 140, 142, 5, 54, 0, 0, 141, 140, 1, 0, 0, 0, 141, 142, 
		    1, 0, 0, 0, 142, 195, 1, 0, 0, 0, 143, 145, 3, 24, 12, 0, 144, 146, 
		    5, 54, 0, 0, 145, 144, 1, 0, 0, 0, 145, 146, 1, 0, 0, 0, 146, 195, 
		    1, 0, 0, 0, 147, 149, 3, 22, 11, 0, 148, 150, 5, 54, 0, 0, 149, 148, 
		    1, 0, 0, 0, 149, 150, 1, 0, 0, 0, 150, 195, 1, 0, 0, 0, 151, 153, 
		    3, 48, 24, 0, 152, 154, 5, 54, 0, 0, 153, 152, 1, 0, 0, 0, 153, 154, 
		    1, 0, 0, 0, 154, 195, 1, 0, 0, 0, 155, 195, 3, 30, 15, 0, 156, 195, 
		    3, 34, 17, 0, 157, 195, 3, 32, 16, 0, 158, 160, 3, 42, 21, 0, 159, 
		    161, 5, 54, 0, 0, 160, 159, 1, 0, 0, 0, 160, 161, 1, 0, 0, 0, 161, 
		    195, 1, 0, 0, 0, 162, 164, 3, 44, 22, 0, 163, 165, 5, 54, 0, 0, 164, 
		    163, 1, 0, 0, 0, 164, 165, 1, 0, 0, 0, 165, 195, 1, 0, 0, 0, 166, 
		    195, 3, 14, 7, 0, 167, 169, 3, 46, 23, 0, 168, 170, 5, 54, 0, 0, 169, 
		    168, 1, 0, 0, 0, 169, 170, 1, 0, 0, 0, 170, 195, 1, 0, 0, 0, 171, 
		    173, 3, 26, 13, 0, 172, 174, 5, 54, 0, 0, 173, 172, 1, 0, 0, 0, 173, 
		    174, 1, 0, 0, 0, 174, 195, 1, 0, 0, 0, 175, 177, 3, 50, 25, 0, 176, 
		    178, 5, 54, 0, 0, 177, 176, 1, 0, 0, 0, 177, 178, 1, 0, 0, 0, 178, 
		    195, 1, 0, 0, 0, 179, 181, 3, 28, 14, 0, 180, 182, 5, 54, 0, 0, 181, 
		    180, 1, 0, 0, 0, 181, 182, 1, 0, 0, 0, 182, 195, 1, 0, 0, 0, 183, 
		    195, 5, 54, 0, 0, 184, 186, 5, 35, 0, 0, 185, 184, 1, 0, 0, 0, 186, 
		    187, 1, 0, 0, 0, 187, 185, 1, 0, 0, 0, 187, 188, 1, 0, 0, 0, 188, 
		    189, 1, 0, 0, 0, 189, 190, 5, 57, 0, 0, 190, 191, 5, 32, 0, 0, 191, 
		    192, 3, 50, 25, 0, 192, 193, 5, 54, 0, 0, 193, 195, 1, 0, 0, 0, 194, 
		    135, 1, 0, 0, 0, 194, 139, 1, 0, 0, 0, 194, 143, 1, 0, 0, 0, 194, 
		    147, 1, 0, 0, 0, 194, 151, 1, 0, 0, 0, 194, 155, 1, 0, 0, 0, 194, 
		    156, 1, 0, 0, 0, 194, 157, 1, 0, 0, 0, 194, 158, 1, 0, 0, 0, 194, 
		    162, 1, 0, 0, 0, 194, 166, 1, 0, 0, 0, 194, 167, 1, 0, 0, 0, 194, 
		    171, 1, 0, 0, 0, 194, 175, 1, 0, 0, 0, 194, 179, 1, 0, 0, 0, 194, 
		    183, 1, 0, 0, 0, 194, 185, 1, 0, 0, 0, 195, 17, 1, 0, 0, 0, 196, 197, 
		    5, 3, 0, 0, 197, 202, 5, 57, 0, 0, 198, 199, 5, 53, 0, 0, 199, 201, 
		    5, 57, 0, 0, 200, 198, 1, 0, 0, 0, 201, 204, 1, 0, 0, 0, 202, 200, 
		    1, 0, 0, 0, 202, 203, 1, 0, 0, 0, 203, 205, 1, 0, 0, 0, 204, 202, 
		    1, 0, 0, 0, 205, 208, 3, 54, 27, 0, 206, 207, 5, 32, 0, 0, 207, 209, 
		    3, 52, 26, 0, 208, 206, 1, 0, 0, 0, 208, 209, 1, 0, 0, 0, 209, 19, 
		    1, 0, 0, 0, 210, 211, 5, 4, 0, 0, 211, 212, 5, 57, 0, 0, 212, 213, 
		    3, 54, 27, 0, 213, 214, 5, 32, 0, 0, 214, 215, 3, 50, 25, 0, 215, 
		    21, 1, 0, 0, 0, 216, 221, 5, 57, 0, 0, 217, 218, 5, 53, 0, 0, 218, 
		    220, 5, 57, 0, 0, 219, 217, 1, 0, 0, 0, 220, 223, 1, 0, 0, 0, 221, 
		    219, 1, 0, 0, 0, 221, 222, 1, 0, 0, 0, 222, 224, 1, 0, 0, 0, 223, 
		    221, 1, 0, 0, 0, 224, 225, 5, 26, 0, 0, 225, 226, 3, 52, 26, 0, 226, 
		    23, 1, 0, 0, 0, 227, 232, 5, 57, 0, 0, 228, 229, 5, 53, 0, 0, 229, 
		    231, 5, 57, 0, 0, 230, 228, 1, 0, 0, 0, 231, 234, 1, 0, 0, 0, 232, 
		    230, 1, 0, 0, 0, 232, 233, 1, 0, 0, 0, 233, 235, 1, 0, 0, 0, 234, 
		    232, 1, 0, 0, 0, 235, 236, 5, 32, 0, 0, 236, 241, 3, 52, 26, 0, 237, 
		    238, 5, 57, 0, 0, 238, 239, 7, 0, 0, 0, 239, 241, 3, 50, 25, 0, 240, 
		    227, 1, 0, 0, 0, 240, 237, 1, 0, 0, 0, 241, 25, 1, 0, 0, 0, 242, 247, 
		    5, 57, 0, 0, 243, 244, 5, 51, 0, 0, 244, 245, 3, 50, 25, 0, 245, 246, 
		    5, 52, 0, 0, 246, 248, 1, 0, 0, 0, 247, 243, 1, 0, 0, 0, 248, 249, 
		    1, 0, 0, 0, 249, 247, 1, 0, 0, 0, 249, 250, 1, 0, 0, 0, 250, 251, 
		    1, 0, 0, 0, 251, 252, 5, 32, 0, 0, 252, 253, 3, 50, 25, 0, 253, 27, 
		    1, 0, 0, 0, 254, 255, 3, 50, 25, 0, 255, 256, 5, 56, 0, 0, 256, 257, 
		    5, 57, 0, 0, 257, 258, 5, 32, 0, 0, 258, 259, 3, 50, 25, 0, 259, 29, 
		    1, 0, 0, 0, 260, 261, 5, 5, 0, 0, 261, 262, 3, 50, 25, 0, 262, 268, 
		    3, 14, 7, 0, 263, 266, 5, 6, 0, 0, 264, 267, 3, 30, 15, 0, 265, 267, 
		    3, 14, 7, 0, 266, 264, 1, 0, 0, 0, 266, 265, 1, 0, 0, 0, 267, 269, 
		    1, 0, 0, 0, 268, 263, 1, 0, 0, 0, 268, 269, 1, 0, 0, 0, 269, 31, 1, 
		    0, 0, 0, 270, 284, 5, 10, 0, 0, 271, 285, 3, 50, 25, 0, 272, 273, 
		    3, 18, 9, 0, 273, 274, 5, 54, 0, 0, 274, 275, 3, 50, 25, 0, 275, 276, 
		    5, 54, 0, 0, 276, 277, 3, 24, 12, 0, 277, 285, 1, 0, 0, 0, 278, 279, 
		    3, 22, 11, 0, 279, 280, 5, 54, 0, 0, 280, 281, 3, 50, 25, 0, 281, 
		    282, 5, 54, 0, 0, 282, 283, 3, 24, 12, 0, 283, 285, 1, 0, 0, 0, 284, 
		    271, 1, 0, 0, 0, 284, 272, 1, 0, 0, 0, 284, 278, 1, 0, 0, 0, 284, 
		    285, 1, 0, 0, 0, 285, 286, 1, 0, 0, 0, 286, 287, 3, 14, 7, 0, 287, 
		    33, 1, 0, 0, 0, 288, 289, 5, 7, 0, 0, 289, 290, 3, 50, 25, 0, 290, 
		    291, 5, 49, 0, 0, 291, 292, 3, 36, 18, 0, 292, 293, 5, 50, 0, 0, 293, 
		    35, 1, 0, 0, 0, 294, 296, 3, 38, 19, 0, 295, 294, 1, 0, 0, 0, 296, 
		    299, 1, 0, 0, 0, 297, 295, 1, 0, 0, 0, 297, 298, 1, 0, 0, 0, 298, 
		    301, 1, 0, 0, 0, 299, 297, 1, 0, 0, 0, 300, 302, 3, 40, 20, 0, 301, 
		    300, 1, 0, 0, 0, 301, 302, 1, 0, 0, 0, 302, 37, 1, 0, 0, 0, 303, 304, 
		    5, 8, 0, 0, 304, 305, 3, 52, 26, 0, 305, 309, 5, 55, 0, 0, 306, 308, 
		    3, 16, 8, 0, 307, 306, 1, 0, 0, 0, 308, 311, 1, 0, 0, 0, 309, 307, 
		    1, 0, 0, 0, 309, 310, 1, 0, 0, 0, 310, 39, 1, 0, 0, 0, 311, 309, 1, 
		    0, 0, 0, 312, 313, 5, 9, 0, 0, 313, 317, 5, 55, 0, 0, 314, 316, 3, 
		    16, 8, 0, 315, 314, 1, 0, 0, 0, 316, 319, 1, 0, 0, 0, 317, 315, 1, 
		    0, 0, 0, 317, 318, 1, 0, 0, 0, 318, 41, 1, 0, 0, 0, 319, 317, 1, 0, 
		    0, 0, 320, 321, 5, 11, 0, 0, 321, 43, 1, 0, 0, 0, 322, 323, 5, 12, 
		    0, 0, 323, 45, 1, 0, 0, 0, 324, 326, 5, 13, 0, 0, 325, 327, 3, 52, 
		    26, 0, 326, 325, 1, 0, 0, 0, 326, 327, 1, 0, 0, 0, 327, 47, 1, 0, 
		    0, 0, 328, 329, 7, 1, 0, 0, 329, 331, 5, 47, 0, 0, 330, 332, 3, 52, 
		    26, 0, 331, 330, 1, 0, 0, 0, 331, 332, 1, 0, 0, 0, 332, 333, 1, 0, 
		    0, 0, 333, 334, 5, 48, 0, 0, 334, 49, 1, 0, 0, 0, 335, 336, 6, 25, 
		    -1, 0, 336, 337, 5, 47, 0, 0, 337, 338, 3, 50, 25, 0, 338, 339, 5, 
		    48, 0, 0, 339, 358, 1, 0, 0, 0, 340, 341, 5, 46, 0, 0, 341, 358, 3, 
		    50, 25, 17, 342, 343, 5, 34, 0, 0, 343, 358, 3, 50, 25, 16, 344, 345, 
		    5, 57, 0, 0, 345, 347, 5, 49, 0, 0, 346, 348, 3, 52, 26, 0, 347, 346, 
		    1, 0, 0, 0, 347, 348, 1, 0, 0, 0, 348, 349, 1, 0, 0, 0, 349, 358, 
		    5, 50, 0, 0, 350, 358, 3, 58, 29, 0, 351, 352, 5, 1, 0, 0, 352, 358, 
		    5, 57, 0, 0, 353, 354, 5, 35, 0, 0, 354, 358, 3, 50, 25, 12, 355, 
		    358, 5, 57, 0, 0, 356, 358, 3, 56, 28, 0, 357, 335, 1, 0, 0, 0, 357, 
		    340, 1, 0, 0, 0, 357, 342, 1, 0, 0, 0, 357, 344, 1, 0, 0, 0, 357, 
		    350, 1, 0, 0, 0, 357, 351, 1, 0, 0, 0, 357, 353, 1, 0, 0, 0, 357, 
		    355, 1, 0, 0, 0, 357, 356, 1, 0, 0, 0, 358, 393, 1, 0, 0, 0, 359, 
		    360, 10, 8, 0, 0, 360, 361, 7, 2, 0, 0, 361, 392, 3, 50, 25, 9, 362, 
		    363, 10, 7, 0, 0, 363, 364, 7, 3, 0, 0, 364, 392, 3, 50, 25, 8, 365, 
		    366, 10, 6, 0, 0, 366, 367, 7, 4, 0, 0, 367, 392, 3, 50, 25, 7, 368, 
		    369, 10, 5, 0, 0, 369, 370, 7, 5, 0, 0, 370, 392, 3, 50, 25, 6, 371, 
		    372, 10, 4, 0, 0, 372, 373, 5, 44, 0, 0, 373, 392, 3, 50, 25, 5, 374, 
		    375, 10, 3, 0, 0, 375, 376, 5, 45, 0, 0, 376, 392, 3, 50, 25, 4, 377, 
		    378, 10, 11, 0, 0, 378, 379, 5, 56, 0, 0, 379, 392, 5, 57, 0, 0, 380, 
		    381, 10, 10, 0, 0, 381, 382, 5, 51, 0, 0, 382, 383, 3, 50, 25, 0, 
		    383, 384, 5, 52, 0, 0, 384, 392, 1, 0, 0, 0, 385, 386, 10, 9, 0, 0, 
		    386, 388, 5, 47, 0, 0, 387, 389, 3, 52, 26, 0, 388, 387, 1, 0, 0, 
		    0, 388, 389, 1, 0, 0, 0, 389, 390, 1, 0, 0, 0, 390, 392, 5, 48, 0, 
		    0, 391, 359, 1, 0, 0, 0, 391, 362, 1, 0, 0, 0, 391, 365, 1, 0, 0, 
		    0, 391, 368, 1, 0, 0, 0, 391, 371, 1, 0, 0, 0, 391, 374, 1, 0, 0, 
		    0, 391, 377, 1, 0, 0, 0, 391, 380, 1, 0, 0, 0, 391, 385, 1, 0, 0, 
		    0, 392, 395, 1, 0, 0, 0, 393, 391, 1, 0, 0, 0, 393, 394, 1, 0, 0, 
		    0, 394, 51, 1, 0, 0, 0, 395, 393, 1, 0, 0, 0, 396, 401, 3, 50, 25, 
		    0, 397, 398, 5, 53, 0, 0, 398, 400, 3, 50, 25, 0, 399, 397, 1, 0, 
		    0, 0, 400, 403, 1, 0, 0, 0, 401, 399, 1, 0, 0, 0, 401, 402, 1, 0, 
		    0, 0, 402, 53, 1, 0, 0, 0, 403, 401, 1, 0, 0, 0, 404, 418, 5, 19, 
		    0, 0, 405, 418, 5, 20, 0, 0, 406, 418, 5, 21, 0, 0, 407, 418, 5, 22, 
		    0, 0, 408, 418, 5, 23, 0, 0, 409, 410, 5, 35, 0, 0, 410, 418, 3, 54, 
		    27, 0, 411, 412, 5, 51, 0, 0, 412, 413, 3, 50, 25, 0, 413, 414, 5, 
		    52, 0, 0, 414, 415, 3, 54, 27, 0, 415, 418, 1, 0, 0, 0, 416, 418, 
		    5, 57, 0, 0, 417, 404, 1, 0, 0, 0, 417, 405, 1, 0, 0, 0, 417, 406, 
		    1, 0, 0, 0, 417, 407, 1, 0, 0, 0, 417, 408, 1, 0, 0, 0, 417, 409, 
		    1, 0, 0, 0, 417, 411, 1, 0, 0, 0, 417, 416, 1, 0, 0, 0, 418, 55, 1, 
		    0, 0, 0, 419, 420, 7, 6, 0, 0, 420, 57, 1, 0, 0, 0, 421, 422, 3, 54, 
		    27, 0, 422, 424, 5, 49, 0, 0, 423, 425, 3, 52, 26, 0, 424, 423, 1, 
		    0, 0, 0, 424, 425, 1, 0, 0, 0, 425, 426, 1, 0, 0, 0, 426, 427, 5, 
		    50, 0, 0, 427, 59, 1, 0, 0, 0, 45, 63, 72, 78, 82, 93, 98, 105, 121, 
		    130, 137, 141, 145, 149, 153, 160, 164, 169, 173, 177, 181, 187, 194, 
		    202, 208, 221, 232, 240, 249, 266, 268, 284, 297, 301, 309, 317, 326, 
		    331, 347, 357, 388, 391, 393, 401, 417, 424];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize(): void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.13.1', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName(): string
		{
			return "Gramatica.g4";
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function inicio(): Context\InicioContext
		{
		    $localContext = new Context\InicioContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_inicio);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(63);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 262172) !== 0)) {
		        	$this->setState(60);
		        	$this->declaracionNivelSuperior();
		        	$this->setState(65);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(66);
		        $this->match(self::EOF);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function declaracionNivelSuperior(): Context\DeclaracionNivelSuperiorContext
		{
		    $localContext = new Context\DeclaracionNivelSuperiorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_declaracionNivelSuperior);

		    try {
		        $this->setState(72);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::KW_FUNC:
		            	$localContext = new Context\DeclFunctionContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(68);
		            	$this->declaracionFuncion();
		            	break;

		            case self::KW_VAR:
		            	$localContext = new Context\DeclGlobalVarContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(69);
		            	$this->declaracionVariable();
		            	break;

		            case self::KW_CONST:
		            	$localContext = new Context\DeclGlobalConstContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(70);
		            	$this->declaracionConstante();
		            	break;

		            case self::KW_TYPE:
		            	$localContext = new Context\DeclStructContext($localContext);
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(71);
		            	$this->declaracionStruct();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function declaracionFuncion(): Context\DeclaracionFuncionContext
		{
		    $localContext = new Context\DeclaracionFuncionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_declaracionFuncion);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(74);
		        $this->match(self::KW_FUNC);
		        $this->setState(75);
		        $this->match(self::ID);
		        $this->setState(76);
		        $this->match(self::LPAREN);
		        $this->setState(78);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ID) {
		        	$this->setState(77);
		        	$this->listaParametros();
		        }
		        $this->setState(80);
		        $this->match(self::RPAREN);
		        $this->setState(82);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 146507759753887744) !== 0)) {
		        	$this->setState(81);
		        	$this->tiposRetorno();
		        }
		        $this->setState(84);
		        $this->bloque();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function tiposRetorno(): Context\TiposRetornoContext
		{
		    $localContext = new Context\TiposRetornoContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_tiposRetorno);

		    try {
		        $this->setState(98);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::TYPE_INT:
		            case self::TYPE_FLOAT:
		            case self::TYPE_BOOL:
		            case self::TYPE_RUNE:
		            case self::TYPE_STRING:
		            case self::MUL:
		            case self::LBRACKET:
		            case self::ID:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(86);
		            	$this->tipo();
		            	break;

		            case self::LPAREN:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(87);
		            	$this->match(self::LPAREN);
		            	$this->setState(88);
		            	$this->tipo();
		            	$this->setState(93);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while ($_la === self::COMMA) {
		            		$this->setState(89);
		            		$this->match(self::COMMA);
		            		$this->setState(90);
		            		$this->tipo();
		            		$this->setState(95);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	$this->setState(96);
		            	$this->match(self::RPAREN);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function listaParametros(): Context\ListaParametrosContext
		{
		    $localContext = new Context\ListaParametrosContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_listaParametros);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(100);
		        $this->parametro();
		        $this->setState(105);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(101);
		        	$this->match(self::COMMA);
		        	$this->setState(102);
		        	$this->parametro();
		        	$this->setState(107);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function parametro(): Context\ParametroContext
		{
		    $localContext = new Context\ParametroContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_parametro);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(108);
		        $this->match(self::ID);
		        $this->setState(109);
		        $this->tipo();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function declaracionStruct(): Context\DeclaracionStructContext
		{
		    $localContext = new Context\DeclaracionStructContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_declaracionStruct);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(111);
		        $this->match(self::KW_TYPE);
		        $this->setState(112);
		        $this->match(self::ID);
		        $this->setState(113);
		        $this->match(self::KW_STRUCT);
		        $this->setState(114);
		        $this->match(self::LBRACE);
		        $this->setState(121);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::ID) {
		        	$this->setState(115);
		        	$this->match(self::ID);
		        	$this->setState(116);
		        	$this->tipo();
		        	$this->setState(117);
		        	$this->match(self::SEMICOLON);
		        	$this->setState(123);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(124);
		        $this->match(self::RBRACE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function bloque(): Context\BloqueContext
		{
		    $localContext = new Context\BloqueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_bloque);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(126);
		        $this->match(self::LBRACE);
		        $this->setState(130);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4488611136466959546) !== 0)) {
		        	$this->setState(127);
		        	$this->sentencia();
		        	$this->setState(132);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(133);
		        $this->match(self::RBRACE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sentencia(): Context\SentenciaContext
		{
		    $localContext = new Context\SentenciaContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_sentencia);

		    try {
		        $this->setState(194);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 21, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\StmtVarContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(135);
		        	    $this->declaracionVariable();
		        	    $this->setState(137);
		        	    $this->errorHandler->sync($this);

		        	    switch ($this->getInterpreter()->adaptivePredict($this->input, 9, $this->ctx)) {
		        	        case 1:
		        	    	    $this->setState(136);
		        	    	    $this->match(self::SEMICOLON);
		        	    	break;
		        	    }
		        	break;

		        	case 2:
		        	    $localContext = new Context\StmtConstContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(139);
		        	    $this->declaracionConstante();
		        	    $this->setState(141);
		        	    $this->errorHandler->sync($this);

		        	    switch ($this->getInterpreter()->adaptivePredict($this->input, 10, $this->ctx)) {
		        	        case 1:
		        	    	    $this->setState(140);
		        	    	    $this->match(self::SEMICOLON);
		        	    	break;
		        	    }
		        	break;

		        	case 3:
		        	    $localContext = new Context\StmtAssignContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(143);
		        	    $this->asignacion();
		        	    $this->setState(145);
		        	    $this->errorHandler->sync($this);

		        	    switch ($this->getInterpreter()->adaptivePredict($this->input, 11, $this->ctx)) {
		        	        case 1:
		        	    	    $this->setState(144);
		        	    	    $this->match(self::SEMICOLON);
		        	    	break;
		        	    }
		        	break;

		        	case 4:
		        	    $localContext = new Context\StmtShortDeclContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(147);
		        	    $this->declaracionCorta();
		        	    $this->setState(149);
		        	    $this->errorHandler->sync($this);

		        	    switch ($this->getInterpreter()->adaptivePredict($this->input, 12, $this->ctx)) {
		        	        case 1:
		        	    	    $this->setState(148);
		        	    	    $this->match(self::SEMICOLON);
		        	    	break;
		        	    }
		        	break;

		        	case 5:
		        	    $localContext = new Context\StmtPrintContext($localContext);
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(151);
		        	    $this->sentenciaPrint();
		        	    $this->setState(153);
		        	    $this->errorHandler->sync($this);

		        	    switch ($this->getInterpreter()->adaptivePredict($this->input, 13, $this->ctx)) {
		        	        case 1:
		        	    	    $this->setState(152);
		        	    	    $this->match(self::SEMICOLON);
		        	    	break;
		        	    }
		        	break;

		        	case 6:
		        	    $localContext = new Context\StmtIfContext($localContext);
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(155);
		        	    $this->sentenciaIf();
		        	break;

		        	case 7:
		        	    $localContext = new Context\StmtSwitchContext($localContext);
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(156);
		        	    $this->sentenciaSwitch();
		        	break;

		        	case 8:
		        	    $localContext = new Context\StmtForContext($localContext);
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(157);
		        	    $this->sentenciaFor();
		        	break;

		        	case 9:
		        	    $localContext = new Context\StmtBreakContext($localContext);
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(158);
		        	    $this->sentenciaBreak();
		        	    $this->setState(160);
		        	    $this->errorHandler->sync($this);

		        	    switch ($this->getInterpreter()->adaptivePredict($this->input, 14, $this->ctx)) {
		        	        case 1:
		        	    	    $this->setState(159);
		        	    	    $this->match(self::SEMICOLON);
		        	    	break;
		        	    }
		        	break;

		        	case 10:
		        	    $localContext = new Context\StmtContinueContext($localContext);
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(162);
		        	    $this->sentenciaContinue();
		        	    $this->setState(164);
		        	    $this->errorHandler->sync($this);

		        	    switch ($this->getInterpreter()->adaptivePredict($this->input, 15, $this->ctx)) {
		        	        case 1:
		        	    	    $this->setState(163);
		        	    	    $this->match(self::SEMICOLON);
		        	    	break;
		        	    }
		        	break;

		        	case 11:
		        	    $localContext = new Context\StmtBlockContext($localContext);
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(166);
		        	    $this->bloque();
		        	break;

		        	case 12:
		        	    $localContext = new Context\StmtReturnContext($localContext);
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(167);
		        	    $this->sentenciaReturn();
		        	    $this->setState(169);
		        	    $this->errorHandler->sync($this);

		        	    switch ($this->getInterpreter()->adaptivePredict($this->input, 16, $this->ctx)) {
		        	        case 1:
		        	    	    $this->setState(168);
		        	    	    $this->match(self::SEMICOLON);
		        	    	break;
		        	    }
		        	break;

		        	case 13:
		        	    $localContext = new Context\StmtArrayAssignContext($localContext);
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(171);
		        	    $this->asignacionArreglo();
		        	    $this->setState(173);
		        	    $this->errorHandler->sync($this);

		        	    switch ($this->getInterpreter()->adaptivePredict($this->input, 17, $this->ctx)) {
		        	        case 1:
		        	    	    $this->setState(172);
		        	    	    $this->match(self::SEMICOLON);
		        	    	break;
		        	    }
		        	break;

		        	case 14:
		        	    $localContext = new Context\StmtExprContext($localContext);
		        	    $this->enterOuterAlt($localContext, 14);
		        	    $this->setState(175);
		        	    $this->recursiveExpresion(0);
		        	    $this->setState(177);
		        	    $this->errorHandler->sync($this);

		        	    switch ($this->getInterpreter()->adaptivePredict($this->input, 18, $this->ctx)) {
		        	        case 1:
		        	    	    $this->setState(176);
		        	    	    $this->match(self::SEMICOLON);
		        	    	break;
		        	    }
		        	break;

		        	case 15:
		        	    $localContext = new Context\StmtStructAssignContext($localContext);
		        	    $this->enterOuterAlt($localContext, 15);
		        	    $this->setState(179);
		        	    $this->asignacionStruct();
		        	    $this->setState(181);
		        	    $this->errorHandler->sync($this);

		        	    switch ($this->getInterpreter()->adaptivePredict($this->input, 19, $this->ctx)) {
		        	        case 1:
		        	    	    $this->setState(180);
		        	    	    $this->match(self::SEMICOLON);
		        	    	break;
		        	    }
		        	break;

		        	case 16:
		        	    $localContext = new Context\StmtEmptyContext($localContext);
		        	    $this->enterOuterAlt($localContext, 16);
		        	    $this->setState(183);
		        	    $this->match(self::SEMICOLON);
		        	break;

		        	case 17:
		        	    $localContext = new Context\StmtPtrAssignContext($localContext);
		        	    $this->enterOuterAlt($localContext, 17);
		        	    $this->setState(185); 
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    do {
		        	    	$this->setState(184);
		        	    	$this->match(self::MUL);
		        	    	$this->setState(187); 
		        	    	$this->errorHandler->sync($this);
		        	    	$_la = $this->input->LA(1);
		        	    } while ($_la === self::MUL);
		        	    $this->setState(189);
		        	    $this->match(self::ID);
		        	    $this->setState(190);
		        	    $this->match(self::ASSIGN);
		        	    $this->setState(191);
		        	    $this->recursiveExpresion(0);
		        	    $this->setState(192);
		        	    $this->match(self::SEMICOLON);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function declaracionVariable(): Context\DeclaracionVariableContext
		{
		    $localContext = new Context\DeclaracionVariableContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_declaracionVariable);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(196);
		        $this->match(self::KW_VAR);
		        $this->setState(197);
		        $this->match(self::ID);
		        $this->setState(202);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(198);
		        	$this->match(self::COMMA);
		        	$this->setState(199);
		        	$this->match(self::ID);
		        	$this->setState(204);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(205);
		        $this->tipo();
		        $this->setState(208);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ASSIGN) {
		        	$this->setState(206);
		        	$this->match(self::ASSIGN);
		        	$this->setState(207);
		        	$this->listaExpresiones();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function declaracionConstante(): Context\DeclaracionConstanteContext
		{
		    $localContext = new Context\DeclaracionConstanteContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_declaracionConstante);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(210);
		        $this->match(self::KW_CONST);
		        $this->setState(211);
		        $this->match(self::ID);
		        $this->setState(212);
		        $this->tipo();
		        $this->setState(213);
		        $this->match(self::ASSIGN);
		        $this->setState(214);
		        $this->recursiveExpresion(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function declaracionCorta(): Context\DeclaracionCortaContext
		{
		    $localContext = new Context\DeclaracionCortaContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_declaracionCorta);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(216);
		        $this->match(self::ID);
		        $this->setState(221);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(217);
		        	$this->match(self::COMMA);
		        	$this->setState(218);
		        	$this->match(self::ID);
		        	$this->setState(223);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(224);
		        $this->match(self::DECLARE_ASSIGN);
		        $this->setState(225);
		        $this->listaExpresiones();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function asignacion(): Context\AsignacionContext
		{
		    $localContext = new Context\AsignacionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_asignacion);

		    try {
		        $this->setState(240);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 26, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\AssignSimpleContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(227);
		        	    $this->match(self::ID);
		        	    $this->setState(232);
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    while ($_la === self::COMMA) {
		        	    	$this->setState(228);
		        	    	$this->match(self::COMMA);
		        	    	$this->setState(229);
		        	    	$this->match(self::ID);
		        	    	$this->setState(234);
		        	    	$this->errorHandler->sync($this);
		        	    	$_la = $this->input->LA(1);
		        	    }
		        	    $this->setState(235);
		        	    $this->match(self::ASSIGN);
		        	    $this->setState(236);
		        	    $this->listaExpresiones();
		        	break;

		        	case 2:
		        	    $localContext = new Context\AssignCompoundContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(237);
		        	    $this->match(self::ID);
		        	    $this->setState(238);

		        	    $localContext->op = $this->input->LT(1);
		        	    $_la = $this->input->LA(1);

		        	    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4160749568) !== 0))) {
		        	    	    $localContext->op = $this->errorHandler->recoverInline($this);
		        	    } else {
		        	    	if ($this->input->LA(1) === Token::EOF) {
		        	    	    $this->matchedEOF = true;
		        	        }

		        	    	$this->errorHandler->reportMatch($this);
		        	    	$this->consume();
		        	    }
		        	    $this->setState(239);
		        	    $this->recursiveExpresion(0);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function asignacionArreglo(): Context\AsignacionArregloContext
		{
		    $localContext = new Context\AsignacionArregloContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_asignacionArreglo);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(242);
		        $this->match(self::ID);
		        $this->setState(247); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(243);
		        	$this->match(self::LBRACKET);
		        	$this->setState(244);
		        	$this->recursiveExpresion(0);
		        	$this->setState(245);
		        	$this->match(self::RBRACKET);
		        	$this->setState(249); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::LBRACKET);
		        $this->setState(251);
		        $this->match(self::ASSIGN);
		        $this->setState(252);
		        $this->recursiveExpresion(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function asignacionStruct(): Context\AsignacionStructContext
		{
		    $localContext = new Context\AsignacionStructContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_asignacionStruct);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(254);
		        $this->recursiveExpresion(0);
		        $this->setState(255);
		        $this->match(self::DOT);
		        $this->setState(256);
		        $this->match(self::ID);
		        $this->setState(257);
		        $this->match(self::ASSIGN);
		        $this->setState(258);
		        $this->recursiveExpresion(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sentenciaIf(): Context\SentenciaIfContext
		{
		    $localContext = new Context\SentenciaIfContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_sentenciaIf);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(260);
		        $this->match(self::KW_IF);
		        $this->setState(261);
		        $this->recursiveExpresion(0);
		        $this->setState(262);
		        $this->bloque();
		        $this->setState(268);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::KW_ELSE) {
		        	$this->setState(263);
		        	$this->match(self::KW_ELSE);
		        	$this->setState(266);
		        	$this->errorHandler->sync($this);

		        	switch ($this->input->LA(1)) {
		        	    case self::KW_IF:
		        	    	$this->setState(264);
		        	    	$this->sentenciaIf();
		        	    	break;

		        	    case self::LBRACE:
		        	    	$this->setState(265);
		        	    	$this->bloque();
		        	    	break;

		        	default:
		        		throw new NoViableAltException($this);
		        	}
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sentenciaFor(): Context\SentenciaForContext
		{
		    $localContext = new Context\SentenciaForContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_sentenciaFor);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(270);
		        $this->match(self::KW_FOR);
		        $this->setState(284);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 30, $this->ctx)) {
		            case 1:
		        	    $this->setState(271);
		        	    $this->recursiveExpresion(0);
		        	break;

		            case 2:
		        	    $this->setState(272);
		        	    $this->declaracionVariable();
		        	    $this->setState(273);
		        	    $this->match(self::SEMICOLON);
		        	    $this->setState(274);
		        	    $this->recursiveExpresion(0);
		        	    $this->setState(275);
		        	    $this->match(self::SEMICOLON);
		        	    $this->setState(276);
		        	    $this->asignacion();
		        	break;

		            case 3:
		        	    $this->setState(278);
		        	    $this->declaracionCorta();
		        	    $this->setState(279);
		        	    $this->match(self::SEMICOLON);
		        	    $this->setState(280);
		        	    $this->recursiveExpresion(0);
		        	    $this->setState(281);
		        	    $this->match(self::SEMICOLON);
		        	    $this->setState(282);
		        	    $this->asignacion();
		        	break;
		        }
		        $this->setState(286);
		        $this->bloque();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sentenciaSwitch(): Context\SentenciaSwitchContext
		{
		    $localContext = new Context\SentenciaSwitchContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_sentenciaSwitch);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(288);
		        $this->match(self::KW_SWITCH);
		        $this->setState(289);
		        $this->recursiveExpresion(0);
		        $this->setState(290);
		        $this->match(self::LBRACE);
		        $this->setState(291);
		        $this->bloqueSwitch();
		        $this->setState(292);
		        $this->match(self::RBRACE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function bloqueSwitch(): Context\BloqueSwitchContext
		{
		    $localContext = new Context\BloqueSwitchContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_bloqueSwitch);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(297);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::KW_CASE) {
		        	$this->setState(294);
		        	$this->sentenciaCase();
		        	$this->setState(299);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(301);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::KW_DEFAULT) {
		        	$this->setState(300);
		        	$this->sentenciaDefault();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sentenciaCase(): Context\SentenciaCaseContext
		{
		    $localContext = new Context\SentenciaCaseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 38, self::RULE_sentenciaCase);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(303);
		        $this->match(self::KW_CASE);
		        $this->setState(304);
		        $this->listaExpresiones();
		        $this->setState(305);
		        $this->match(self::COLON);
		        $this->setState(309);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4488611136466959546) !== 0)) {
		        	$this->setState(306);
		        	$this->sentencia();
		        	$this->setState(311);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sentenciaDefault(): Context\SentenciaDefaultContext
		{
		    $localContext = new Context\SentenciaDefaultContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 40, self::RULE_sentenciaDefault);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(312);
		        $this->match(self::KW_DEFAULT);
		        $this->setState(313);
		        $this->match(self::COLON);
		        $this->setState(317);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4488611136466959546) !== 0)) {
		        	$this->setState(314);
		        	$this->sentencia();
		        	$this->setState(319);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sentenciaBreak(): Context\SentenciaBreakContext
		{
		    $localContext = new Context\SentenciaBreakContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 42, self::RULE_sentenciaBreak);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(320);
		        $this->match(self::KW_BREAK);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sentenciaContinue(): Context\SentenciaContinueContext
		{
		    $localContext = new Context\SentenciaContinueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 44, self::RULE_sentenciaContinue);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(322);
		        $this->match(self::KW_CONTINUE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sentenciaReturn(): Context\SentenciaReturnContext
		{
		    $localContext = new Context\SentenciaReturnContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 46, self::RULE_sentenciaReturn);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(324);
		        $this->match(self::KW_RETURN);
		        $this->setState(326);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 35, $this->ctx)) {
		            case 1:
		        	    $this->setState(325);
		        	    $this->listaExpresiones();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sentenciaPrint(): Context\SentenciaPrintContext
		{
		    $localContext = new Context\SentenciaPrintContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 48, self::RULE_sentenciaPrint);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(328);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::KW_PRINT || $_la === self::KW_PRINTLN)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		        $this->setState(329);
		        $this->match(self::LPAREN);
		        $this->setState(331);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4470033788003942402) !== 0)) {
		        	$this->setState(330);
		        	$this->listaExpresiones();
		        }
		        $this->setState(333);
		        $this->match(self::RPAREN);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expresion(): Context\ExpresionContext
		{
			return $this->recursiveExpresion(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveExpresion(int $precedence): Context\ExpresionContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\ExpresionContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 50;
			$this->enterRecursionRule($localContext, 50, self::RULE_expresion, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(357);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 38, $this->ctx)) {
					case 1:
					    $localContext = new Context\ExprParenthesisContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;

					    $this->setState(336);
					    $this->match(self::LPAREN);
					    $this->setState(337);
					    $this->recursiveExpresion(0);
					    $this->setState(338);
					    $this->match(self::RPAREN);
					break;

					case 2:
					    $localContext = new Context\ExprNotContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(340);
					    $this->match(self::NOT);
					    $this->setState(341);
					    $this->recursiveExpresion(17);
					break;

					case 3:
					    $localContext = new Context\ExprNegateContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(342);
					    $this->match(self::MINUS);
					    $this->setState(343);
					    $this->recursiveExpresion(16);
					break;

					case 4:
					    $localContext = new Context\ExprStructLitContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(344);
					    $this->match(self::ID);
					    $this->setState(345);
					    $this->match(self::LBRACE);
					    $this->setState(347);
					    $this->errorHandler->sync($this);
					    $_la = $this->input->LA(1);

					    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4470033788003942402) !== 0)) {
					    	$this->setState(346);
					    	$this->listaExpresiones();
					    }
					    $this->setState(349);
					    $this->match(self::RBRACE);
					break;

					case 5:
					    $localContext = new Context\ExprArrayLitContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(350);
					    $this->literalArreglo();
					break;

					case 6:
					    $localContext = new Context\ExprAddrContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(351);
					    $this->match(self::T__0);
					    $this->setState(352);
					    $this->match(self::ID);
					break;

					case 7:
					    $localContext = new Context\ExprDerefContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(353);
					    $this->match(self::MUL);
					    $this->setState(354);
					    $this->recursiveExpresion(12);
					break;

					case 8:
					    $localContext = new Context\ExprIdContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(355);
					    $this->match(self::ID);
					break;

					case 9:
					    $localContext = new Context\ExprLiteralContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(356);
					    $this->literal();
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(393);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 41, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(391);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 40, $this->ctx)) {
							case 1:
							    $localContext = new Context\ExprMulDivContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(359);

							    if (!($this->precpred($this->ctx, 8))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 8)");
							    }
							    $this->setState(360);

							    $_la = $this->input->LA(1);

							    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 240518168576) !== 0))) {
							    $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(361);
							    $this->recursiveExpresion(9);
							break;

							case 2:
							    $localContext = new Context\ExprAddSubContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(362);

							    if (!($this->precpred($this->ctx, 7))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 7)");
							    }
							    $this->setState(363);

							    $_la = $this->input->LA(1);

							    if (!($_la === self::PLUS || $_la === self::MINUS)) {
							    $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(364);
							    $this->recursiveExpresion(8);
							break;

							case 3:
							    $localContext = new Context\ExprRelationalContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(365);

							    if (!($this->precpred($this->ctx, 6))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 6)");
							    }
							    $this->setState(366);

							    $_la = $this->input->LA(1);

							    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 16492674416640) !== 0))) {
							    $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(367);
							    $this->recursiveExpresion(7);
							break;

							case 4:
							    $localContext = new Context\ExprEqualityContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(368);

							    if (!($this->precpred($this->ctx, 5))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 5)");
							    }
							    $this->setState(369);

							    $_la = $this->input->LA(1);

							    if (!($_la === self::EQUALS || $_la === self::NOT_EQUALS)) {
							    $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(370);
							    $this->recursiveExpresion(6);
							break;

							case 5:
							    $localContext = new Context\ExprAndContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(371);

							    if (!($this->precpred($this->ctx, 4))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 4)");
							    }
							    $this->setState(372);
							    $this->match(self::AND);
							    $this->setState(373);
							    $this->recursiveExpresion(5);
							break;

							case 6:
							    $localContext = new Context\ExprOrContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(374);

							    if (!($this->precpred($this->ctx, 3))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 3)");
							    }
							    $this->setState(375);
							    $this->match(self::OR);
							    $this->setState(376);
							    $this->recursiveExpresion(4);
							break;

							case 7:
							    $localContext = new Context\ExprStructAccessContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(377);

							    if (!($this->precpred($this->ctx, 11))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 11)");
							    }
							    $this->setState(378);
							    $this->match(self::DOT);
							    $this->setState(379);
							    $this->match(self::ID);
							break;

							case 8:
							    $localContext = new Context\ExprArrayAccessContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(380);

							    if (!($this->precpred($this->ctx, 10))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 10)");
							    }
							    $this->setState(381);
							    $this->match(self::LBRACKET);
							    $this->setState(382);
							    $this->recursiveExpresion(0);
							    $this->setState(383);
							    $this->match(self::RBRACKET);
							break;

							case 9:
							    $localContext = new Context\ExprCallContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(385);

							    if (!($this->precpred($this->ctx, 9))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 9)");
							    }
							    $this->setState(386);
							    $this->match(self::LPAREN);
							    $this->setState(388);
							    $this->errorHandler->sync($this);
							    $_la = $this->input->LA(1);

							    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4470033788003942402) !== 0)) {
							    	$this->setState(387);
							    	$this->listaExpresiones();
							    }
							    $this->setState(390);
							    $this->match(self::RPAREN);
							break;
						} 
					}

					$this->setState(395);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 41, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function listaExpresiones(): Context\ListaExpresionesContext
		{
		    $localContext = new Context\ListaExpresionesContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 52, self::RULE_listaExpresiones);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(396);
		        $this->recursiveExpresion(0);
		        $this->setState(401);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(397);
		        	$this->match(self::COMMA);
		        	$this->setState(398);
		        	$this->recursiveExpresion(0);
		        	$this->setState(403);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function tipo(): Context\TipoContext
		{
		    $localContext = new Context\TipoContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 54, self::RULE_tipo);

		    try {
		        $this->setState(417);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::TYPE_INT:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(404);
		            	$this->match(self::TYPE_INT);
		            	break;

		            case self::TYPE_FLOAT:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(405);
		            	$this->match(self::TYPE_FLOAT);
		            	break;

		            case self::TYPE_BOOL:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(406);
		            	$this->match(self::TYPE_BOOL);
		            	break;

		            case self::TYPE_RUNE:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(407);
		            	$this->match(self::TYPE_RUNE);
		            	break;

		            case self::TYPE_STRING:
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(408);
		            	$this->match(self::TYPE_STRING);
		            	break;

		            case self::MUL:
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(409);
		            	$this->match(self::MUL);
		            	$this->setState(410);
		            	$this->tipo();
		            	break;

		            case self::LBRACKET:
		            	$this->enterOuterAlt($localContext, 7);
		            	$this->setState(411);
		            	$this->match(self::LBRACKET);
		            	$this->setState(412);
		            	$this->recursiveExpresion(0);
		            	$this->setState(413);
		            	$this->match(self::RBRACKET);
		            	$this->setState(414);
		            	$this->tipo();
		            	break;

		            case self::ID:
		            	$this->enterOuterAlt($localContext, 8);
		            	$this->setState(416);
		            	$this->match(self::ID);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function literal(): Context\LiteralContext
		{
		    $localContext = new Context\LiteralContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 56, self::RULE_literal);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(419);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4323455642326007808) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function literalArreglo(): Context\LiteralArregloContext
		{
		    $localContext = new Context\LiteralArregloContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 58, self::RULE_literalArreglo);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(421);
		        $this->tipo();
		        $this->setState(422);
		        $this->match(self::LBRACE);
		        $this->setState(424);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4470033788003942402) !== 0)) {
		        	$this->setState(423);
		        	$this->listaExpresiones();
		        }
		        $this->setState(426);
		        $this->match(self::RBRACE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex): bool
		{
			switch ($ruleIndex) {
					case 25:
						return $this->sempredExpresion($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredExpresion(?Context\ExpresionContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 8);

			    case 1:
			        return $this->precpred($this->ctx, 7);

			    case 2:
			        return $this->precpred($this->ctx, 6);

			    case 3:
			        return $this->precpred($this->ctx, 5);

			    case 4:
			        return $this->precpred($this->ctx, 4);

			    case 5:
			        return $this->precpred($this->ctx, 3);

			    case 6:
			        return $this->precpred($this->ctx, 11);

			    case 7:
			        return $this->precpred($this->ctx, 10);

			    case 8:
			        return $this->precpred($this->ctx, 9);
			}

			return true;
		}
	}
}

namespace Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use GramaticaParser;
	use GramaticaVisitor;
	use GramaticaListener;

	class InicioContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_inicio;
	    }

	    public function EOF(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::EOF, 0);
	    }

	    /**
	     * @return array<DeclaracionNivelSuperiorContext>|DeclaracionNivelSuperiorContext|null
	     */
	    public function declaracionNivelSuperior(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(DeclaracionNivelSuperiorContext::class);
	    	}

	        return $this->getTypedRuleContext(DeclaracionNivelSuperiorContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterInicio($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitInicio($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitInicio($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DeclaracionNivelSuperiorContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_declaracionNivelSuperior;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class DeclGlobalVarContext extends DeclaracionNivelSuperiorContext
	{
		public function __construct(DeclaracionNivelSuperiorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function declaracionVariable(): ?DeclaracionVariableContext
	    {
	    	return $this->getTypedRuleContext(DeclaracionVariableContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterDeclGlobalVar($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitDeclGlobalVar($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitDeclGlobalVar($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class DeclFunctionContext extends DeclaracionNivelSuperiorContext
	{
		public function __construct(DeclaracionNivelSuperiorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function declaracionFuncion(): ?DeclaracionFuncionContext
	    {
	    	return $this->getTypedRuleContext(DeclaracionFuncionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterDeclFunction($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitDeclFunction($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitDeclFunction($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class DeclGlobalConstContext extends DeclaracionNivelSuperiorContext
	{
		public function __construct(DeclaracionNivelSuperiorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function declaracionConstante(): ?DeclaracionConstanteContext
	    {
	    	return $this->getTypedRuleContext(DeclaracionConstanteContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterDeclGlobalConst($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitDeclGlobalConst($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitDeclGlobalConst($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class DeclStructContext extends DeclaracionNivelSuperiorContext
	{
		public function __construct(DeclaracionNivelSuperiorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function declaracionStruct(): ?DeclaracionStructContext
	    {
	    	return $this->getTypedRuleContext(DeclaracionStructContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterDeclStruct($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitDeclStruct($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitDeclStruct($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DeclaracionFuncionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_declaracionFuncion;
	    }

	    public function KW_FUNC(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::KW_FUNC, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::ID, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::LPAREN, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::RPAREN, 0);
	    }

	    public function bloque(): ?BloqueContext
	    {
	    	return $this->getTypedRuleContext(BloqueContext::class, 0);
	    }

	    public function listaParametros(): ?ListaParametrosContext
	    {
	    	return $this->getTypedRuleContext(ListaParametrosContext::class, 0);
	    }

	    public function tiposRetorno(): ?TiposRetornoContext
	    {
	    	return $this->getTypedRuleContext(TiposRetornoContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterDeclaracionFuncion($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitDeclaracionFuncion($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitDeclaracionFuncion($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TiposRetornoContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_tiposRetorno;
	    }

	    /**
	     * @return array<TipoContext>|TipoContext|null
	     */
	    public function tipo(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(TipoContext::class);
	    	}

	        return $this->getTypedRuleContext(TipoContext::class, $index);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::LPAREN, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::RPAREN, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GramaticaParser::COMMA);
	    	}

	        return $this->getToken(GramaticaParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterTiposRetorno($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitTiposRetorno($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitTiposRetorno($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ListaParametrosContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_listaParametros;
	    }

	    /**
	     * @return array<ParametroContext>|ParametroContext|null
	     */
	    public function parametro(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ParametroContext::class);
	    	}

	        return $this->getTypedRuleContext(ParametroContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GramaticaParser::COMMA);
	    	}

	        return $this->getToken(GramaticaParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterListaParametros($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitListaParametros($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitListaParametros($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParametroContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_parametro;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::ID, 0);
	    }

	    public function tipo(): ?TipoContext
	    {
	    	return $this->getTypedRuleContext(TipoContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterParametro($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitParametro($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitParametro($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DeclaracionStructContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_declaracionStruct;
	    }

	    public function KW_TYPE(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::KW_TYPE, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function ID(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GramaticaParser::ID);
	    	}

	        return $this->getToken(GramaticaParser::ID, $index);
	    }

	    public function KW_STRUCT(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::KW_STRUCT, 0);
	    }

	    public function LBRACE(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::LBRACE, 0);
	    }

	    public function RBRACE(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::RBRACE, 0);
	    }

	    /**
	     * @return array<TipoContext>|TipoContext|null
	     */
	    public function tipo(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(TipoContext::class);
	    	}

	        return $this->getTypedRuleContext(TipoContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function SEMICOLON(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GramaticaParser::SEMICOLON);
	    	}

	        return $this->getToken(GramaticaParser::SEMICOLON, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterDeclaracionStruct($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitDeclaracionStruct($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitDeclaracionStruct($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BloqueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_bloque;
	    }

	    public function LBRACE(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::LBRACE, 0);
	    }

	    public function RBRACE(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::RBRACE, 0);
	    }

	    /**
	     * @return array<SentenciaContext>|SentenciaContext|null
	     */
	    public function sentencia(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(SentenciaContext::class);
	    	}

	        return $this->getTypedRuleContext(SentenciaContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterBloque($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitBloque($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitBloque($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SentenciaContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_sentencia;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class StmtReturnContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function sentenciaReturn(): ?SentenciaReturnContext
	    {
	    	return $this->getTypedRuleContext(SentenciaReturnContext::class, 0);
	    }

	    public function SEMICOLON(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::SEMICOLON, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterStmtReturn($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitStmtReturn($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitStmtReturn($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StmtContinueContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function sentenciaContinue(): ?SentenciaContinueContext
	    {
	    	return $this->getTypedRuleContext(SentenciaContinueContext::class, 0);
	    }

	    public function SEMICOLON(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::SEMICOLON, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterStmtContinue($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitStmtContinue($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitStmtContinue($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StmtBlockContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function bloque(): ?BloqueContext
	    {
	    	return $this->getTypedRuleContext(BloqueContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterStmtBlock($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitStmtBlock($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitStmtBlock($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StmtArrayAssignContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function asignacionArreglo(): ?AsignacionArregloContext
	    {
	    	return $this->getTypedRuleContext(AsignacionArregloContext::class, 0);
	    }

	    public function SEMICOLON(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::SEMICOLON, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterStmtArrayAssign($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitStmtArrayAssign($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitStmtArrayAssign($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StmtExprContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

	    public function SEMICOLON(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::SEMICOLON, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterStmtExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitStmtExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitStmtExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StmtPrintContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function sentenciaPrint(): ?SentenciaPrintContext
	    {
	    	return $this->getTypedRuleContext(SentenciaPrintContext::class, 0);
	    }

	    public function SEMICOLON(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::SEMICOLON, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterStmtPrint($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitStmtPrint($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitStmtPrint($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StmtForContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function sentenciaFor(): ?SentenciaForContext
	    {
	    	return $this->getTypedRuleContext(SentenciaForContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterStmtFor($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitStmtFor($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitStmtFor($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StmtAssignContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function asignacion(): ?AsignacionContext
	    {
	    	return $this->getTypedRuleContext(AsignacionContext::class, 0);
	    }

	    public function SEMICOLON(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::SEMICOLON, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterStmtAssign($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitStmtAssign($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitStmtAssign($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StmtConstContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function declaracionConstante(): ?DeclaracionConstanteContext
	    {
	    	return $this->getTypedRuleContext(DeclaracionConstanteContext::class, 0);
	    }

	    public function SEMICOLON(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::SEMICOLON, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterStmtConst($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitStmtConst($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitStmtConst($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StmtVarContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function declaracionVariable(): ?DeclaracionVariableContext
	    {
	    	return $this->getTypedRuleContext(DeclaracionVariableContext::class, 0);
	    }

	    public function SEMICOLON(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::SEMICOLON, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterStmtVar($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitStmtVar($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitStmtVar($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StmtShortDeclContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function declaracionCorta(): ?DeclaracionCortaContext
	    {
	    	return $this->getTypedRuleContext(DeclaracionCortaContext::class, 0);
	    }

	    public function SEMICOLON(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::SEMICOLON, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterStmtShortDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitStmtShortDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitStmtShortDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StmtEmptyContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function SEMICOLON(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::SEMICOLON, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterStmtEmpty($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitStmtEmpty($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitStmtEmpty($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StmtSwitchContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function sentenciaSwitch(): ?SentenciaSwitchContext
	    {
	    	return $this->getTypedRuleContext(SentenciaSwitchContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterStmtSwitch($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitStmtSwitch($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitStmtSwitch($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StmtStructAssignContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function asignacionStruct(): ?AsignacionStructContext
	    {
	    	return $this->getTypedRuleContext(AsignacionStructContext::class, 0);
	    }

	    public function SEMICOLON(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::SEMICOLON, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterStmtStructAssign($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitStmtStructAssign($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitStmtStructAssign($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StmtIfContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function sentenciaIf(): ?SentenciaIfContext
	    {
	    	return $this->getTypedRuleContext(SentenciaIfContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterStmtIf($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitStmtIf($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitStmtIf($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StmtPtrAssignContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::ID, 0);
	    }

	    public function ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::ASSIGN, 0);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

	    public function SEMICOLON(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::SEMICOLON, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function MUL(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GramaticaParser::MUL);
	    	}

	        return $this->getToken(GramaticaParser::MUL, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterStmtPtrAssign($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitStmtPtrAssign($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitStmtPtrAssign($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StmtBreakContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function sentenciaBreak(): ?SentenciaBreakContext
	    {
	    	return $this->getTypedRuleContext(SentenciaBreakContext::class, 0);
	    }

	    public function SEMICOLON(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::SEMICOLON, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterStmtBreak($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitStmtBreak($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitStmtBreak($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DeclaracionVariableContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_declaracionVariable;
	    }

	    public function KW_VAR(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::KW_VAR, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function ID(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GramaticaParser::ID);
	    	}

	        return $this->getToken(GramaticaParser::ID, $index);
	    }

	    public function tipo(): ?TipoContext
	    {
	    	return $this->getTypedRuleContext(TipoContext::class, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GramaticaParser::COMMA);
	    	}

	        return $this->getToken(GramaticaParser::COMMA, $index);
	    }

	    public function ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::ASSIGN, 0);
	    }

	    public function listaExpresiones(): ?ListaExpresionesContext
	    {
	    	return $this->getTypedRuleContext(ListaExpresionesContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterDeclaracionVariable($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitDeclaracionVariable($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitDeclaracionVariable($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DeclaracionConstanteContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_declaracionConstante;
	    }

	    public function KW_CONST(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::KW_CONST, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::ID, 0);
	    }

	    public function tipo(): ?TipoContext
	    {
	    	return $this->getTypedRuleContext(TipoContext::class, 0);
	    }

	    public function ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::ASSIGN, 0);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterDeclaracionConstante($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitDeclaracionConstante($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitDeclaracionConstante($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DeclaracionCortaContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_declaracionCorta;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function ID(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GramaticaParser::ID);
	    	}

	        return $this->getToken(GramaticaParser::ID, $index);
	    }

	    public function DECLARE_ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::DECLARE_ASSIGN, 0);
	    }

	    public function listaExpresiones(): ?ListaExpresionesContext
	    {
	    	return $this->getTypedRuleContext(ListaExpresionesContext::class, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GramaticaParser::COMMA);
	    	}

	        return $this->getToken(GramaticaParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterDeclaracionCorta($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitDeclaracionCorta($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitDeclaracionCorta($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AsignacionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_asignacion;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class AssignCompoundContext extends AsignacionContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(AsignacionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::ID, 0);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

	    public function PLUS_ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::PLUS_ASSIGN, 0);
	    }

	    public function MINUS_ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::MINUS_ASSIGN, 0);
	    }

	    public function MUL_ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::MUL_ASSIGN, 0);
	    }

	    public function DIV_ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::DIV_ASSIGN, 0);
	    }

	    public function MOD_ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::MOD_ASSIGN, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterAssignCompound($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitAssignCompound($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitAssignCompound($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class AssignSimpleContext extends AsignacionContext
	{
		public function __construct(AsignacionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function ID(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GramaticaParser::ID);
	    	}

	        return $this->getToken(GramaticaParser::ID, $index);
	    }

	    public function ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::ASSIGN, 0);
	    }

	    public function listaExpresiones(): ?ListaExpresionesContext
	    {
	    	return $this->getTypedRuleContext(ListaExpresionesContext::class, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GramaticaParser::COMMA);
	    	}

	        return $this->getToken(GramaticaParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterAssignSimple($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitAssignSimple($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitAssignSimple($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AsignacionArregloContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_asignacionArreglo;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::ID, 0);
	    }

	    public function ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::ASSIGN, 0);
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function LBRACKET(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GramaticaParser::LBRACKET);
	    	}

	        return $this->getToken(GramaticaParser::LBRACKET, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function RBRACKET(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GramaticaParser::RBRACKET);
	    	}

	        return $this->getToken(GramaticaParser::RBRACKET, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterAsignacionArreglo($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitAsignacionArreglo($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitAsignacionArreglo($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AsignacionStructContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_asignacionStruct;
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

	    public function DOT(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::DOT, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::ID, 0);
	    }

	    public function ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::ASSIGN, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterAsignacionStruct($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitAsignacionStruct($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitAsignacionStruct($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SentenciaIfContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_sentenciaIf;
	    }

	    public function KW_IF(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::KW_IF, 0);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

	    /**
	     * @return array<BloqueContext>|BloqueContext|null
	     */
	    public function bloque(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(BloqueContext::class);
	    	}

	        return $this->getTypedRuleContext(BloqueContext::class, $index);
	    }

	    public function KW_ELSE(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::KW_ELSE, 0);
	    }

	    public function sentenciaIf(): ?SentenciaIfContext
	    {
	    	return $this->getTypedRuleContext(SentenciaIfContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterSentenciaIf($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitSentenciaIf($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitSentenciaIf($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SentenciaForContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_sentenciaFor;
	    }

	    public function KW_FOR(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::KW_FOR, 0);
	    }

	    public function bloque(): ?BloqueContext
	    {
	    	return $this->getTypedRuleContext(BloqueContext::class, 0);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

	    public function declaracionVariable(): ?DeclaracionVariableContext
	    {
	    	return $this->getTypedRuleContext(DeclaracionVariableContext::class, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function SEMICOLON(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GramaticaParser::SEMICOLON);
	    	}

	        return $this->getToken(GramaticaParser::SEMICOLON, $index);
	    }

	    public function asignacion(): ?AsignacionContext
	    {
	    	return $this->getTypedRuleContext(AsignacionContext::class, 0);
	    }

	    public function declaracionCorta(): ?DeclaracionCortaContext
	    {
	    	return $this->getTypedRuleContext(DeclaracionCortaContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterSentenciaFor($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitSentenciaFor($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitSentenciaFor($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SentenciaSwitchContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_sentenciaSwitch;
	    }

	    public function KW_SWITCH(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::KW_SWITCH, 0);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

	    public function LBRACE(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::LBRACE, 0);
	    }

	    public function bloqueSwitch(): ?BloqueSwitchContext
	    {
	    	return $this->getTypedRuleContext(BloqueSwitchContext::class, 0);
	    }

	    public function RBRACE(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::RBRACE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterSentenciaSwitch($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitSentenciaSwitch($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitSentenciaSwitch($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BloqueSwitchContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_bloqueSwitch;
	    }

	    /**
	     * @return array<SentenciaCaseContext>|SentenciaCaseContext|null
	     */
	    public function sentenciaCase(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(SentenciaCaseContext::class);
	    	}

	        return $this->getTypedRuleContext(SentenciaCaseContext::class, $index);
	    }

	    public function sentenciaDefault(): ?SentenciaDefaultContext
	    {
	    	return $this->getTypedRuleContext(SentenciaDefaultContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterBloqueSwitch($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitBloqueSwitch($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitBloqueSwitch($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SentenciaCaseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_sentenciaCase;
	    }

	    public function KW_CASE(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::KW_CASE, 0);
	    }

	    public function listaExpresiones(): ?ListaExpresionesContext
	    {
	    	return $this->getTypedRuleContext(ListaExpresionesContext::class, 0);
	    }

	    public function COLON(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::COLON, 0);
	    }

	    /**
	     * @return array<SentenciaContext>|SentenciaContext|null
	     */
	    public function sentencia(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(SentenciaContext::class);
	    	}

	        return $this->getTypedRuleContext(SentenciaContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterSentenciaCase($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitSentenciaCase($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitSentenciaCase($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SentenciaDefaultContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_sentenciaDefault;
	    }

	    public function KW_DEFAULT(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::KW_DEFAULT, 0);
	    }

	    public function COLON(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::COLON, 0);
	    }

	    /**
	     * @return array<SentenciaContext>|SentenciaContext|null
	     */
	    public function sentencia(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(SentenciaContext::class);
	    	}

	        return $this->getTypedRuleContext(SentenciaContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterSentenciaDefault($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitSentenciaDefault($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitSentenciaDefault($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SentenciaBreakContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_sentenciaBreak;
	    }

	    public function KW_BREAK(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::KW_BREAK, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterSentenciaBreak($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitSentenciaBreak($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitSentenciaBreak($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SentenciaContinueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_sentenciaContinue;
	    }

	    public function KW_CONTINUE(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::KW_CONTINUE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterSentenciaContinue($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitSentenciaContinue($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitSentenciaContinue($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SentenciaReturnContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_sentenciaReturn;
	    }

	    public function KW_RETURN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::KW_RETURN, 0);
	    }

	    public function listaExpresiones(): ?ListaExpresionesContext
	    {
	    	return $this->getTypedRuleContext(ListaExpresionesContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterSentenciaReturn($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitSentenciaReturn($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitSentenciaReturn($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SentenciaPrintContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_sentenciaPrint;
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::LPAREN, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::RPAREN, 0);
	    }

	    public function KW_PRINT(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::KW_PRINT, 0);
	    }

	    public function KW_PRINTLN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::KW_PRINTLN, 0);
	    }

	    public function listaExpresiones(): ?ListaExpresionesContext
	    {
	    	return $this->getTypedRuleContext(ListaExpresionesContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterSentenciaPrint($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitSentenciaPrint($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitSentenciaPrint($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExpresionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_expresion;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ExprAddrContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterExprAddr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitExprAddr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitExprAddr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ExprArrayLitContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function literalArreglo(): ?LiteralArregloContext
	    {
	    	return $this->getTypedRuleContext(LiteralArregloContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterExprArrayLit($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitExprArrayLit($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitExprArrayLit($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ExprStructLitContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::ID, 0);
	    }

	    public function LBRACE(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::LBRACE, 0);
	    }

	    public function RBRACE(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::RBRACE, 0);
	    }

	    public function listaExpresiones(): ?ListaExpresionesContext
	    {
	    	return $this->getTypedRuleContext(ListaExpresionesContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterExprStructLit($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitExprStructLit($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitExprStructLit($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ExprParenthesisContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::LPAREN, 0);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::RPAREN, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterExprParenthesis($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitExprParenthesis($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitExprParenthesis($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ExprNotContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function NOT(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::NOT, 0);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterExprNot($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitExprNot($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitExprNot($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ExprRelationalContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

	    public function LESS_THAN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::LESS_THAN, 0);
	    }

	    public function GREATER_THAN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::GREATER_THAN, 0);
	    }

	    public function LESS_EQUAL(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::LESS_EQUAL, 0);
	    }

	    public function GREATER_EQUAL(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::GREATER_EQUAL, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterExprRelational($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitExprRelational($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitExprRelational($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ExprAddSubContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

	    public function PLUS(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::PLUS, 0);
	    }

	    public function MINUS(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::MINUS, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterExprAddSub($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitExprAddSub($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitExprAddSub($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ExprAndContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

	    public function AND(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::AND, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterExprAnd($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitExprAnd($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitExprAnd($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ExprArrayAccessContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

	    public function LBRACKET(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::LBRACKET, 0);
	    }

	    public function RBRACKET(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::RBRACKET, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterExprArrayAccess($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitExprArrayAccess($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitExprArrayAccess($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ExprCallContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::LPAREN, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::RPAREN, 0);
	    }

	    public function listaExpresiones(): ?ListaExpresionesContext
	    {
	    	return $this->getTypedRuleContext(ListaExpresionesContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterExprCall($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitExprCall($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitExprCall($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ExprDerefContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function MUL(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::MUL, 0);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterExprDeref($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitExprDeref($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitExprDeref($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ExprMulDivContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

	    public function MUL(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::MUL, 0);
	    }

	    public function DIV(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::DIV, 0);
	    }

	    public function MOD(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::MOD, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterExprMulDiv($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitExprMulDiv($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitExprMulDiv($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ExprNegateContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function MINUS(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::MINUS, 0);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterExprNegate($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitExprNegate($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitExprNegate($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ExprOrContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

	    public function OR(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::OR, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterExprOr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitExprOr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitExprOr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ExprLiteralContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function literal(): ?LiteralContext
	    {
	    	return $this->getTypedRuleContext(LiteralContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterExprLiteral($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitExprLiteral($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitExprLiteral($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ExprStructAccessContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

	    public function DOT(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::DOT, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterExprStructAccess($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitExprStructAccess($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitExprStructAccess($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ExprEqualityContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

	    public function EQUALS(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::EQUALS, 0);
	    }

	    public function NOT_EQUALS(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::NOT_EQUALS, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterExprEquality($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitExprEquality($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitExprEquality($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ExprIdContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterExprId($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitExprId($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitExprId($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ListaExpresionesContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_listaExpresiones;
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GramaticaParser::COMMA);
	    	}

	        return $this->getToken(GramaticaParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterListaExpresiones($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitListaExpresiones($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitListaExpresiones($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TipoContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_tipo;
	    }

	    public function TYPE_INT(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::TYPE_INT, 0);
	    }

	    public function TYPE_FLOAT(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::TYPE_FLOAT, 0);
	    }

	    public function TYPE_BOOL(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::TYPE_BOOL, 0);
	    }

	    public function TYPE_RUNE(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::TYPE_RUNE, 0);
	    }

	    public function TYPE_STRING(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::TYPE_STRING, 0);
	    }

	    public function MUL(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::MUL, 0);
	    }

	    public function tipo(): ?TipoContext
	    {
	    	return $this->getTypedRuleContext(TipoContext::class, 0);
	    }

	    public function LBRACKET(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::LBRACKET, 0);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

	    public function RBRACKET(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::RBRACKET, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterTipo($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitTipo($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitTipo($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LiteralContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_literal;
	    }

	    public function DECIMAL_LITERAL(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::DECIMAL_LITERAL, 0);
	    }

	    public function FLOAT_LITERAL(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::FLOAT_LITERAL, 0);
	    }

	    public function STRING_LITERAL(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::STRING_LITERAL, 0);
	    }

	    public function RUNE_LITERAL(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::RUNE_LITERAL, 0);
	    }

	    public function TRUE(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::TRUE, 0);
	    }

	    public function FALSE(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::FALSE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterLiteral($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitLiteral($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitLiteral($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LiteralArregloContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GramaticaParser::RULE_literalArreglo;
	    }

	    public function tipo(): ?TipoContext
	    {
	    	return $this->getTypedRuleContext(TipoContext::class, 0);
	    }

	    public function LBRACE(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::LBRACE, 0);
	    }

	    public function RBRACE(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::RBRACE, 0);
	    }

	    public function listaExpresiones(): ?ListaExpresionesContext
	    {
	    	return $this->getTypedRuleContext(ListaExpresionesContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterLiteralArreglo($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitLiteralArreglo($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitLiteralArreglo($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}