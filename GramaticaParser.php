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
               DECLARE_ASSIGN = 26, PLUS_PLUS = 27, MINUS_MINUS = 28, PLUS_ASSIGN = 29, 
               MINUS_ASSIGN = 30, MUL_ASSIGN = 31, DIV_ASSIGN = 32, MOD_ASSIGN = 33, 
               ASSIGN = 34, PLUS = 35, MINUS = 36, MUL = 37, DIV = 38, MOD = 39, 
               EQUALS = 40, NOT_EQUALS = 41, LESS_EQUAL = 42, GREATER_EQUAL = 43, 
               LESS_THAN = 44, GREATER_THAN = 45, AND = 46, OR = 47, NOT = 48, 
               LPAREN = 49, RPAREN = 50, LBRACE = 51, RBRACE = 52, LBRACKET = 53, 
               RBRACKET = 54, COMMA = 55, SEMICOLON = 56, COLON = 57, DOT = 58, 
               ID = 59, DECIMAL_LITERAL = 60, FLOAT_LITERAL = 61, STRING_LITERAL = 62, 
               RUNE_LITERAL = 63, COMMENT_SINGLE = 64, COMMENT_MULTI = 65, 
               WS = 66, ERR_CHAR = 67;

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
		    "':='", "'++'", "'--'", "'+='", "'-='", "'*='", "'/='", "'%='", "'='", 
		    "'+'", "'-'", "'*'", "'/'", "'%'", "'=='", "'!='", "'<='", "'>='", 
		    "'<'", "'>'", "'&&'", "'||'", "'!'", "'('", "')'", "'{'", "'}'", "'['", 
		    "']'", "','", "';'", "':'", "'.'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, "KW_FUNC", "KW_VAR", "KW_CONST", "KW_IF", "KW_ELSE", "KW_SWITCH", 
		    "KW_CASE", "KW_DEFAULT", "KW_FOR", "KW_BREAK", "KW_CONTINUE", "KW_RETURN", 
		    "KW_NIL", "KW_PRINT", "KW_PRINTLN", "KW_STRUCT", "KW_TYPE", "TYPE_INT", 
		    "TYPE_FLOAT", "TYPE_BOOL", "TYPE_RUNE", "TYPE_STRING", "TRUE", "FALSE", 
		    "DECLARE_ASSIGN", "PLUS_PLUS", "MINUS_MINUS", "PLUS_ASSIGN", "MINUS_ASSIGN", 
		    "MUL_ASSIGN", "DIV_ASSIGN", "MOD_ASSIGN", "ASSIGN", "PLUS", "MINUS", 
		    "MUL", "DIV", "MOD", "EQUALS", "NOT_EQUALS", "LESS_EQUAL", "GREATER_EQUAL", 
		    "LESS_THAN", "GREATER_THAN", "AND", "OR", "NOT", "LPAREN", "RPAREN", 
		    "LBRACE", "RBRACE", "LBRACKET", "RBRACKET", "COMMA", "SEMICOLON", 
		    "COLON", "DOT", "ID", "DECIMAL_LITERAL", "FLOAT_LITERAL", "STRING_LITERAL", 
		    "RUNE_LITERAL", "COMMENT_SINGLE", "COMMENT_MULTI", "WS", "ERR_CHAR"
		];

		private const SERIALIZED_ATN =
			[4, 1, 67, 439, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
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
		    12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 3, 12, 
		    245, 8, 12, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 4, 13, 252, 8, 13, 
		    11, 13, 12, 13, 253, 1, 13, 1, 13, 1, 13, 1, 14, 1, 14, 1, 14, 1, 
		    14, 1, 14, 1, 14, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 3, 15, 
		    271, 8, 15, 3, 15, 273, 8, 15, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 
		    1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 3, 
		    16, 289, 8, 16, 1, 16, 1, 16, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 
		    17, 1, 18, 5, 18, 300, 8, 18, 10, 18, 12, 18, 303, 9, 18, 1, 18, 3, 
		    18, 306, 8, 18, 1, 19, 1, 19, 1, 19, 1, 19, 5, 19, 312, 8, 19, 10, 
		    19, 12, 19, 315, 9, 19, 1, 20, 1, 20, 1, 20, 5, 20, 320, 8, 20, 10, 
		    20, 12, 20, 323, 9, 20, 1, 21, 1, 21, 1, 22, 1, 22, 1, 23, 1, 23, 
		    3, 23, 331, 8, 23, 1, 24, 1, 24, 1, 24, 3, 24, 336, 8, 24, 1, 24, 
		    1, 24, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 
		    25, 1, 25, 1, 25, 1, 25, 3, 25, 352, 8, 25, 1, 25, 1, 25, 1, 25, 1, 
		    25, 1, 25, 1, 25, 1, 25, 1, 25, 3, 25, 362, 8, 25, 1, 25, 1, 25, 1, 
		    25, 1, 25, 3, 25, 368, 8, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 
		    25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 
		    1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 
		    25, 1, 25, 1, 25, 1, 25, 1, 25, 3, 25, 399, 8, 25, 1, 25, 5, 25, 402, 
		    8, 25, 10, 25, 12, 25, 405, 9, 25, 1, 26, 1, 26, 1, 26, 5, 26, 410, 
		    8, 26, 10, 26, 12, 26, 413, 9, 26, 1, 27, 1, 27, 1, 27, 1, 27, 1, 
		    27, 1, 27, 1, 27, 1, 27, 1, 27, 1, 27, 1, 27, 1, 27, 1, 27, 3, 27, 
		    428, 8, 27, 1, 28, 1, 28, 1, 29, 1, 29, 1, 29, 3, 29, 435, 8, 29, 
		    1, 29, 1, 29, 1, 29, 0, 1, 50, 30, 0, 2, 4, 6, 8, 10, 12, 14, 16, 
		    18, 20, 22, 24, 26, 28, 30, 32, 34, 36, 38, 40, 42, 44, 46, 48, 50, 
		    52, 54, 56, 58, 0, 7, 1, 0, 29, 33, 1, 0, 15, 16, 1, 0, 37, 39, 1, 
		    0, 35, 36, 1, 0, 42, 45, 1, 0, 40, 41, 2, 0, 24, 25, 60, 63, 497, 
		    0, 63, 1, 0, 0, 0, 2, 72, 1, 0, 0, 0, 4, 74, 1, 0, 0, 0, 6, 98, 1, 
		    0, 0, 0, 8, 100, 1, 0, 0, 0, 10, 108, 1, 0, 0, 0, 12, 111, 1, 0, 0, 
		    0, 14, 126, 1, 0, 0, 0, 16, 194, 1, 0, 0, 0, 18, 196, 1, 0, 0, 0, 
		    20, 210, 1, 0, 0, 0, 22, 216, 1, 0, 0, 0, 24, 244, 1, 0, 0, 0, 26, 
		    246, 1, 0, 0, 0, 28, 258, 1, 0, 0, 0, 30, 264, 1, 0, 0, 0, 32, 274, 
		    1, 0, 0, 0, 34, 292, 1, 0, 0, 0, 36, 301, 1, 0, 0, 0, 38, 307, 1, 
		    0, 0, 0, 40, 316, 1, 0, 0, 0, 42, 324, 1, 0, 0, 0, 44, 326, 1, 0, 
		    0, 0, 46, 328, 1, 0, 0, 0, 48, 332, 1, 0, 0, 0, 50, 367, 1, 0, 0, 
		    0, 52, 406, 1, 0, 0, 0, 54, 427, 1, 0, 0, 0, 56, 429, 1, 0, 0, 0, 
		    58, 431, 1, 0, 0, 0, 60, 62, 3, 2, 1, 0, 61, 60, 1, 0, 0, 0, 62, 65, 
		    1, 0, 0, 0, 63, 61, 1, 0, 0, 0, 63, 64, 1, 0, 0, 0, 64, 66, 1, 0, 
		    0, 0, 65, 63, 1, 0, 0, 0, 66, 67, 5, 0, 0, 1, 67, 1, 1, 0, 0, 0, 68, 
		    73, 3, 4, 2, 0, 69, 73, 3, 18, 9, 0, 70, 73, 3, 20, 10, 0, 71, 73, 
		    3, 12, 6, 0, 72, 68, 1, 0, 0, 0, 72, 69, 1, 0, 0, 0, 72, 70, 1, 0, 
		    0, 0, 72, 71, 1, 0, 0, 0, 73, 3, 1, 0, 0, 0, 74, 75, 5, 2, 0, 0, 75, 
		    76, 5, 59, 0, 0, 76, 78, 5, 49, 0, 0, 77, 79, 3, 8, 4, 0, 78, 77, 
		    1, 0, 0, 0, 78, 79, 1, 0, 0, 0, 79, 80, 1, 0, 0, 0, 80, 82, 5, 50, 
		    0, 0, 81, 83, 3, 6, 3, 0, 82, 81, 1, 0, 0, 0, 82, 83, 1, 0, 0, 0, 
		    83, 84, 1, 0, 0, 0, 84, 85, 3, 14, 7, 0, 85, 5, 1, 0, 0, 0, 86, 99, 
		    3, 54, 27, 0, 87, 88, 5, 49, 0, 0, 88, 93, 3, 54, 27, 0, 89, 90, 5, 
		    55, 0, 0, 90, 92, 3, 54, 27, 0, 91, 89, 1, 0, 0, 0, 92, 95, 1, 0, 
		    0, 0, 93, 91, 1, 0, 0, 0, 93, 94, 1, 0, 0, 0, 94, 96, 1, 0, 0, 0, 
		    95, 93, 1, 0, 0, 0, 96, 97, 5, 50, 0, 0, 97, 99, 1, 0, 0, 0, 98, 86, 
		    1, 0, 0, 0, 98, 87, 1, 0, 0, 0, 99, 7, 1, 0, 0, 0, 100, 105, 3, 10, 
		    5, 0, 101, 102, 5, 55, 0, 0, 102, 104, 3, 10, 5, 0, 103, 101, 1, 0, 
		    0, 0, 104, 107, 1, 0, 0, 0, 105, 103, 1, 0, 0, 0, 105, 106, 1, 0, 
		    0, 0, 106, 9, 1, 0, 0, 0, 107, 105, 1, 0, 0, 0, 108, 109, 5, 59, 0, 
		    0, 109, 110, 3, 54, 27, 0, 110, 11, 1, 0, 0, 0, 111, 112, 5, 18, 0, 
		    0, 112, 113, 5, 59, 0, 0, 113, 114, 5, 17, 0, 0, 114, 121, 5, 51, 
		    0, 0, 115, 116, 5, 59, 0, 0, 116, 117, 3, 54, 27, 0, 117, 118, 5, 
		    56, 0, 0, 118, 120, 1, 0, 0, 0, 119, 115, 1, 0, 0, 0, 120, 123, 1, 
		    0, 0, 0, 121, 119, 1, 0, 0, 0, 121, 122, 1, 0, 0, 0, 122, 124, 1, 
		    0, 0, 0, 123, 121, 1, 0, 0, 0, 124, 125, 5, 52, 0, 0, 125, 13, 1, 
		    0, 0, 0, 126, 130, 5, 51, 0, 0, 127, 129, 3, 16, 8, 0, 128, 127, 1, 
		    0, 0, 0, 129, 132, 1, 0, 0, 0, 130, 128, 1, 0, 0, 0, 130, 131, 1, 
		    0, 0, 0, 131, 133, 1, 0, 0, 0, 132, 130, 1, 0, 0, 0, 133, 134, 5, 
		    52, 0, 0, 134, 15, 1, 0, 0, 0, 135, 137, 3, 18, 9, 0, 136, 138, 5, 
		    56, 0, 0, 137, 136, 1, 0, 0, 0, 137, 138, 1, 0, 0, 0, 138, 195, 1, 
		    0, 0, 0, 139, 141, 3, 20, 10, 0, 140, 142, 5, 56, 0, 0, 141, 140, 
		    1, 0, 0, 0, 141, 142, 1, 0, 0, 0, 142, 195, 1, 0, 0, 0, 143, 145, 
		    3, 24, 12, 0, 144, 146, 5, 56, 0, 0, 145, 144, 1, 0, 0, 0, 145, 146, 
		    1, 0, 0, 0, 146, 195, 1, 0, 0, 0, 147, 149, 3, 22, 11, 0, 148, 150, 
		    5, 56, 0, 0, 149, 148, 1, 0, 0, 0, 149, 150, 1, 0, 0, 0, 150, 195, 
		    1, 0, 0, 0, 151, 153, 3, 48, 24, 0, 152, 154, 5, 56, 0, 0, 153, 152, 
		    1, 0, 0, 0, 153, 154, 1, 0, 0, 0, 154, 195, 1, 0, 0, 0, 155, 195, 
		    3, 30, 15, 0, 156, 195, 3, 34, 17, 0, 157, 195, 3, 32, 16, 0, 158, 
		    160, 3, 42, 21, 0, 159, 161, 5, 56, 0, 0, 160, 159, 1, 0, 0, 0, 160, 
		    161, 1, 0, 0, 0, 161, 195, 1, 0, 0, 0, 162, 164, 3, 44, 22, 0, 163, 
		    165, 5, 56, 0, 0, 164, 163, 1, 0, 0, 0, 164, 165, 1, 0, 0, 0, 165, 
		    195, 1, 0, 0, 0, 166, 195, 3, 14, 7, 0, 167, 169, 3, 46, 23, 0, 168, 
		    170, 5, 56, 0, 0, 169, 168, 1, 0, 0, 0, 169, 170, 1, 0, 0, 0, 170, 
		    195, 1, 0, 0, 0, 171, 173, 3, 26, 13, 0, 172, 174, 5, 56, 0, 0, 173, 
		    172, 1, 0, 0, 0, 173, 174, 1, 0, 0, 0, 174, 195, 1, 0, 0, 0, 175, 
		    177, 3, 50, 25, 0, 176, 178, 5, 56, 0, 0, 177, 176, 1, 0, 0, 0, 177, 
		    178, 1, 0, 0, 0, 178, 195, 1, 0, 0, 0, 179, 181, 3, 28, 14, 0, 180, 
		    182, 5, 56, 0, 0, 181, 180, 1, 0, 0, 0, 181, 182, 1, 0, 0, 0, 182, 
		    195, 1, 0, 0, 0, 183, 195, 5, 56, 0, 0, 184, 186, 5, 37, 0, 0, 185, 
		    184, 1, 0, 0, 0, 186, 187, 1, 0, 0, 0, 187, 185, 1, 0, 0, 0, 187, 
		    188, 1, 0, 0, 0, 188, 189, 1, 0, 0, 0, 189, 190, 5, 59, 0, 0, 190, 
		    191, 5, 34, 0, 0, 191, 192, 3, 50, 25, 0, 192, 193, 5, 56, 0, 0, 193, 
		    195, 1, 0, 0, 0, 194, 135, 1, 0, 0, 0, 194, 139, 1, 0, 0, 0, 194, 
		    143, 1, 0, 0, 0, 194, 147, 1, 0, 0, 0, 194, 151, 1, 0, 0, 0, 194, 
		    155, 1, 0, 0, 0, 194, 156, 1, 0, 0, 0, 194, 157, 1, 0, 0, 0, 194, 
		    158, 1, 0, 0, 0, 194, 162, 1, 0, 0, 0, 194, 166, 1, 0, 0, 0, 194, 
		    167, 1, 0, 0, 0, 194, 171, 1, 0, 0, 0, 194, 175, 1, 0, 0, 0, 194, 
		    179, 1, 0, 0, 0, 194, 183, 1, 0, 0, 0, 194, 185, 1, 0, 0, 0, 195, 
		    17, 1, 0, 0, 0, 196, 197, 5, 3, 0, 0, 197, 202, 5, 59, 0, 0, 198, 
		    199, 5, 55, 0, 0, 199, 201, 5, 59, 0, 0, 200, 198, 1, 0, 0, 0, 201, 
		    204, 1, 0, 0, 0, 202, 200, 1, 0, 0, 0, 202, 203, 1, 0, 0, 0, 203, 
		    205, 1, 0, 0, 0, 204, 202, 1, 0, 0, 0, 205, 208, 3, 54, 27, 0, 206, 
		    207, 5, 34, 0, 0, 207, 209, 3, 52, 26, 0, 208, 206, 1, 0, 0, 0, 208, 
		    209, 1, 0, 0, 0, 209, 19, 1, 0, 0, 0, 210, 211, 5, 4, 0, 0, 211, 212, 
		    5, 59, 0, 0, 212, 213, 3, 54, 27, 0, 213, 214, 5, 34, 0, 0, 214, 215, 
		    3, 50, 25, 0, 215, 21, 1, 0, 0, 0, 216, 221, 5, 59, 0, 0, 217, 218, 
		    5, 55, 0, 0, 218, 220, 5, 59, 0, 0, 219, 217, 1, 0, 0, 0, 220, 223, 
		    1, 0, 0, 0, 221, 219, 1, 0, 0, 0, 221, 222, 1, 0, 0, 0, 222, 224, 
		    1, 0, 0, 0, 223, 221, 1, 0, 0, 0, 224, 225, 5, 26, 0, 0, 225, 226, 
		    3, 52, 26, 0, 226, 23, 1, 0, 0, 0, 227, 232, 5, 59, 0, 0, 228, 229, 
		    5, 55, 0, 0, 229, 231, 5, 59, 0, 0, 230, 228, 1, 0, 0, 0, 231, 234, 
		    1, 0, 0, 0, 232, 230, 1, 0, 0, 0, 232, 233, 1, 0, 0, 0, 233, 235, 
		    1, 0, 0, 0, 234, 232, 1, 0, 0, 0, 235, 236, 5, 34, 0, 0, 236, 245, 
		    3, 52, 26, 0, 237, 238, 5, 59, 0, 0, 238, 239, 7, 0, 0, 0, 239, 245, 
		    3, 50, 25, 0, 240, 241, 5, 59, 0, 0, 241, 245, 5, 27, 0, 0, 242, 243, 
		    5, 59, 0, 0, 243, 245, 5, 28, 0, 0, 244, 227, 1, 0, 0, 0, 244, 237, 
		    1, 0, 0, 0, 244, 240, 1, 0, 0, 0, 244, 242, 1, 0, 0, 0, 245, 25, 1, 
		    0, 0, 0, 246, 251, 5, 59, 0, 0, 247, 248, 5, 53, 0, 0, 248, 249, 3, 
		    50, 25, 0, 249, 250, 5, 54, 0, 0, 250, 252, 1, 0, 0, 0, 251, 247, 
		    1, 0, 0, 0, 252, 253, 1, 0, 0, 0, 253, 251, 1, 0, 0, 0, 253, 254, 
		    1, 0, 0, 0, 254, 255, 1, 0, 0, 0, 255, 256, 5, 34, 0, 0, 256, 257, 
		    3, 50, 25, 0, 257, 27, 1, 0, 0, 0, 258, 259, 3, 50, 25, 0, 259, 260, 
		    5, 58, 0, 0, 260, 261, 5, 59, 0, 0, 261, 262, 5, 34, 0, 0, 262, 263, 
		    3, 50, 25, 0, 263, 29, 1, 0, 0, 0, 264, 265, 5, 5, 0, 0, 265, 266, 
		    3, 50, 25, 0, 266, 272, 3, 14, 7, 0, 267, 270, 5, 6, 0, 0, 268, 271, 
		    3, 30, 15, 0, 269, 271, 3, 14, 7, 0, 270, 268, 1, 0, 0, 0, 270, 269, 
		    1, 0, 0, 0, 271, 273, 1, 0, 0, 0, 272, 267, 1, 0, 0, 0, 272, 273, 
		    1, 0, 0, 0, 273, 31, 1, 0, 0, 0, 274, 288, 5, 10, 0, 0, 275, 289, 
		    3, 50, 25, 0, 276, 277, 3, 18, 9, 0, 277, 278, 5, 56, 0, 0, 278, 279, 
		    3, 50, 25, 0, 279, 280, 5, 56, 0, 0, 280, 281, 3, 24, 12, 0, 281, 
		    289, 1, 0, 0, 0, 282, 283, 3, 22, 11, 0, 283, 284, 5, 56, 0, 0, 284, 
		    285, 3, 50, 25, 0, 285, 286, 5, 56, 0, 0, 286, 287, 3, 24, 12, 0, 
		    287, 289, 1, 0, 0, 0, 288, 275, 1, 0, 0, 0, 288, 276, 1, 0, 0, 0, 
		    288, 282, 1, 0, 0, 0, 288, 289, 1, 0, 0, 0, 289, 290, 1, 0, 0, 0, 
		    290, 291, 3, 14, 7, 0, 291, 33, 1, 0, 0, 0, 292, 293, 5, 7, 0, 0, 
		    293, 294, 3, 50, 25, 0, 294, 295, 5, 51, 0, 0, 295, 296, 3, 36, 18, 
		    0, 296, 297, 5, 52, 0, 0, 297, 35, 1, 0, 0, 0, 298, 300, 3, 38, 19, 
		    0, 299, 298, 1, 0, 0, 0, 300, 303, 1, 0, 0, 0, 301, 299, 1, 0, 0, 
		    0, 301, 302, 1, 0, 0, 0, 302, 305, 1, 0, 0, 0, 303, 301, 1, 0, 0, 
		    0, 304, 306, 3, 40, 20, 0, 305, 304, 1, 0, 0, 0, 305, 306, 1, 0, 0, 
		    0, 306, 37, 1, 0, 0, 0, 307, 308, 5, 8, 0, 0, 308, 309, 3, 52, 26, 
		    0, 309, 313, 5, 57, 0, 0, 310, 312, 3, 16, 8, 0, 311, 310, 1, 0, 0, 
		    0, 312, 315, 1, 0, 0, 0, 313, 311, 1, 0, 0, 0, 313, 314, 1, 0, 0, 
		    0, 314, 39, 1, 0, 0, 0, 315, 313, 1, 0, 0, 0, 316, 317, 5, 9, 0, 0, 
		    317, 321, 5, 57, 0, 0, 318, 320, 3, 16, 8, 0, 319, 318, 1, 0, 0, 0, 
		    320, 323, 1, 0, 0, 0, 321, 319, 1, 0, 0, 0, 321, 322, 1, 0, 0, 0, 
		    322, 41, 1, 0, 0, 0, 323, 321, 1, 0, 0, 0, 324, 325, 5, 11, 0, 0, 
		    325, 43, 1, 0, 0, 0, 326, 327, 5, 12, 0, 0, 327, 45, 1, 0, 0, 0, 328, 
		    330, 5, 13, 0, 0, 329, 331, 3, 52, 26, 0, 330, 329, 1, 0, 0, 0, 330, 
		    331, 1, 0, 0, 0, 331, 47, 1, 0, 0, 0, 332, 333, 7, 1, 0, 0, 333, 335, 
		    5, 49, 0, 0, 334, 336, 3, 52, 26, 0, 335, 334, 1, 0, 0, 0, 335, 336, 
		    1, 0, 0, 0, 336, 337, 1, 0, 0, 0, 337, 338, 5, 50, 0, 0, 338, 49, 
		    1, 0, 0, 0, 339, 340, 6, 25, -1, 0, 340, 341, 5, 49, 0, 0, 341, 342, 
		    3, 50, 25, 0, 342, 343, 5, 50, 0, 0, 343, 368, 1, 0, 0, 0, 344, 345, 
		    5, 48, 0, 0, 345, 368, 3, 50, 25, 19, 346, 347, 5, 36, 0, 0, 347, 
		    368, 3, 50, 25, 18, 348, 349, 5, 59, 0, 0, 349, 351, 5, 51, 0, 0, 
		    350, 352, 3, 52, 26, 0, 351, 350, 1, 0, 0, 0, 351, 352, 1, 0, 0, 0, 
		    352, 353, 1, 0, 0, 0, 353, 368, 5, 52, 0, 0, 354, 368, 3, 58, 29, 
		    0, 355, 356, 5, 1, 0, 0, 356, 368, 5, 59, 0, 0, 357, 358, 5, 37, 0, 
		    0, 358, 368, 3, 50, 25, 14, 359, 361, 5, 51, 0, 0, 360, 362, 3, 52, 
		    26, 0, 361, 360, 1, 0, 0, 0, 361, 362, 1, 0, 0, 0, 362, 363, 1, 0, 
		    0, 0, 363, 368, 5, 52, 0, 0, 364, 368, 5, 59, 0, 0, 365, 368, 3, 56, 
		    28, 0, 366, 368, 5, 14, 0, 0, 367, 339, 1, 0, 0, 0, 367, 344, 1, 0, 
		    0, 0, 367, 346, 1, 0, 0, 0, 367, 348, 1, 0, 0, 0, 367, 354, 1, 0, 
		    0, 0, 367, 355, 1, 0, 0, 0, 367, 357, 1, 0, 0, 0, 367, 359, 1, 0, 
		    0, 0, 367, 364, 1, 0, 0, 0, 367, 365, 1, 0, 0, 0, 367, 366, 1, 0, 
		    0, 0, 368, 403, 1, 0, 0, 0, 369, 370, 10, 10, 0, 0, 370, 371, 7, 2, 
		    0, 0, 371, 402, 3, 50, 25, 11, 372, 373, 10, 9, 0, 0, 373, 374, 7, 
		    3, 0, 0, 374, 402, 3, 50, 25, 10, 375, 376, 10, 8, 0, 0, 376, 377, 
		    7, 4, 0, 0, 377, 402, 3, 50, 25, 9, 378, 379, 10, 7, 0, 0, 379, 380, 
		    7, 5, 0, 0, 380, 402, 3, 50, 25, 8, 381, 382, 10, 6, 0, 0, 382, 383, 
		    5, 46, 0, 0, 383, 402, 3, 50, 25, 7, 384, 385, 10, 5, 0, 0, 385, 386, 
		    5, 47, 0, 0, 386, 402, 3, 50, 25, 6, 387, 388, 10, 13, 0, 0, 388, 
		    389, 5, 58, 0, 0, 389, 402, 5, 59, 0, 0, 390, 391, 10, 12, 0, 0, 391, 
		    392, 5, 53, 0, 0, 392, 393, 3, 50, 25, 0, 393, 394, 5, 54, 0, 0, 394, 
		    402, 1, 0, 0, 0, 395, 396, 10, 11, 0, 0, 396, 398, 5, 49, 0, 0, 397, 
		    399, 3, 52, 26, 0, 398, 397, 1, 0, 0, 0, 398, 399, 1, 0, 0, 0, 399, 
		    400, 1, 0, 0, 0, 400, 402, 5, 50, 0, 0, 401, 369, 1, 0, 0, 0, 401, 
		    372, 1, 0, 0, 0, 401, 375, 1, 0, 0, 0, 401, 378, 1, 0, 0, 0, 401, 
		    381, 1, 0, 0, 0, 401, 384, 1, 0, 0, 0, 401, 387, 1, 0, 0, 0, 401, 
		    390, 1, 0, 0, 0, 401, 395, 1, 0, 0, 0, 402, 405, 1, 0, 0, 0, 403, 
		    401, 1, 0, 0, 0, 403, 404, 1, 0, 0, 0, 404, 51, 1, 0, 0, 0, 405, 403, 
		    1, 0, 0, 0, 406, 411, 3, 50, 25, 0, 407, 408, 5, 55, 0, 0, 408, 410, 
		    3, 50, 25, 0, 409, 407, 1, 0, 0, 0, 410, 413, 1, 0, 0, 0, 411, 409, 
		    1, 0, 0, 0, 411, 412, 1, 0, 0, 0, 412, 53, 1, 0, 0, 0, 413, 411, 1, 
		    0, 0, 0, 414, 428, 5, 19, 0, 0, 415, 428, 5, 20, 0, 0, 416, 428, 5, 
		    21, 0, 0, 417, 428, 5, 22, 0, 0, 418, 428, 5, 23, 0, 0, 419, 420, 
		    5, 37, 0, 0, 420, 428, 3, 54, 27, 0, 421, 422, 5, 53, 0, 0, 422, 423, 
		    3, 50, 25, 0, 423, 424, 5, 54, 0, 0, 424, 425, 3, 54, 27, 0, 425, 
		    428, 1, 0, 0, 0, 426, 428, 5, 59, 0, 0, 427, 414, 1, 0, 0, 0, 427, 
		    415, 1, 0, 0, 0, 427, 416, 1, 0, 0, 0, 427, 417, 1, 0, 0, 0, 427, 
		    418, 1, 0, 0, 0, 427, 419, 1, 0, 0, 0, 427, 421, 1, 0, 0, 0, 427, 
		    426, 1, 0, 0, 0, 428, 55, 1, 0, 0, 0, 429, 430, 7, 6, 0, 0, 430, 57, 
		    1, 0, 0, 0, 431, 432, 3, 54, 27, 0, 432, 434, 5, 51, 0, 0, 433, 435, 
		    3, 52, 26, 0, 434, 433, 1, 0, 0, 0, 434, 435, 1, 0, 0, 0, 435, 436, 
		    1, 0, 0, 0, 436, 437, 5, 52, 0, 0, 437, 59, 1, 0, 0, 0, 46, 63, 72, 
		    78, 82, 93, 98, 105, 121, 130, 137, 141, 145, 149, 153, 160, 164, 
		    169, 173, 177, 181, 187, 194, 202, 208, 221, 232, 244, 253, 270, 272, 
		    288, 301, 305, 313, 321, 330, 335, 351, 361, 367, 398, 401, 403, 411, 
		    427, 434];
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

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 586031038966792192) !== 0)) {
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
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & -492299528041792326) !== 0)) {
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
		        $this->setState(244);
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

		        	    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 16642998272) !== 0))) {
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

		        	case 3:
		        	    $localContext = new Context\AssignIncContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(240);
		        	    $this->match(self::ID);
		        	    $this->setState(241);
		        	    $this->match(self::PLUS_PLUS);
		        	break;

		        	case 4:
		        	    $localContext = new Context\AssignDecContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(242);
		        	    $this->match(self::ID);
		        	    $this->setState(243);
		        	    $this->match(self::MINUS_MINUS);
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
		        $this->setState(246);
		        $this->match(self::ID);
		        $this->setState(251); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(247);
		        	$this->match(self::LBRACKET);
		        	$this->setState(248);
		        	$this->recursiveExpresion(0);
		        	$this->setState(249);
		        	$this->match(self::RBRACKET);
		        	$this->setState(253); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::LBRACKET);
		        $this->setState(255);
		        $this->match(self::ASSIGN);
		        $this->setState(256);
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
		        $this->setState(258);
		        $this->recursiveExpresion(0);
		        $this->setState(259);
		        $this->match(self::DOT);
		        $this->setState(260);
		        $this->match(self::ID);
		        $this->setState(261);
		        $this->match(self::ASSIGN);
		        $this->setState(262);
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
		        $this->setState(264);
		        $this->match(self::KW_IF);
		        $this->setState(265);
		        $this->recursiveExpresion(0);
		        $this->setState(266);
		        $this->bloque();
		        $this->setState(272);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::KW_ELSE) {
		        	$this->setState(267);
		        	$this->match(self::KW_ELSE);
		        	$this->setState(270);
		        	$this->errorHandler->sync($this);

		        	switch ($this->input->LA(1)) {
		        	    case self::KW_IF:
		        	    	$this->setState(268);
		        	    	$this->sentenciaIf();
		        	    	break;

		        	    case self::LBRACE:
		        	    	$this->setState(269);
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
		        $this->setState(274);
		        $this->match(self::KW_FOR);
		        $this->setState(288);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 30, $this->ctx)) {
		            case 1:
		        	    $this->setState(275);
		        	    $this->recursiveExpresion(0);
		        	break;

		            case 2:
		        	    $this->setState(276);
		        	    $this->declaracionVariable();
		        	    $this->setState(277);
		        	    $this->match(self::SEMICOLON);
		        	    $this->setState(278);
		        	    $this->recursiveExpresion(0);
		        	    $this->setState(279);
		        	    $this->match(self::SEMICOLON);
		        	    $this->setState(280);
		        	    $this->asignacion();
		        	break;

		            case 3:
		        	    $this->setState(282);
		        	    $this->declaracionCorta();
		        	    $this->setState(283);
		        	    $this->match(self::SEMICOLON);
		        	    $this->setState(284);
		        	    $this->recursiveExpresion(0);
		        	    $this->setState(285);
		        	    $this->match(self::SEMICOLON);
		        	    $this->setState(286);
		        	    $this->asignacion();
		        	break;
		        }
		        $this->setState(290);
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
		        $this->setState(292);
		        $this->match(self::KW_SWITCH);
		        $this->setState(293);
		        $this->recursiveExpresion(0);
		        $this->setState(294);
		        $this->match(self::LBRACE);
		        $this->setState(295);
		        $this->bloqueSwitch();
		        $this->setState(296);
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
		        $this->setState(301);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::KW_CASE) {
		        	$this->setState(298);
		        	$this->sentenciaCase();
		        	$this->setState(303);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(305);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::KW_DEFAULT) {
		        	$this->setState(304);
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
		        $this->setState(307);
		        $this->match(self::KW_CASE);
		        $this->setState(308);
		        $this->listaExpresiones();
		        $this->setState(309);
		        $this->match(self::COLON);
		        $this->setState(313);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & -492299528041792326) !== 0)) {
		        	$this->setState(310);
		        	$this->sentencia();
		        	$this->setState(315);
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
		        $this->setState(316);
		        $this->match(self::KW_DEFAULT);
		        $this->setState(317);
		        $this->match(self::COLON);
		        $this->setState(321);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & -492299528041792326) !== 0)) {
		        	$this->setState(318);
		        	$this->sentencia();
		        	$this->setState(323);
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
		        $this->setState(324);
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
		        $this->setState(326);
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
		        $this->setState(328);
		        $this->match(self::KW_RETURN);
		        $this->setState(330);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 35, $this->ctx)) {
		            case 1:
		        	    $this->setState(329);
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
		        $this->setState(332);

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
		        $this->setState(333);
		        $this->match(self::LPAREN);
		        $this->setState(335);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & -564357122079834110) !== 0)) {
		        	$this->setState(334);
		        	$this->listaExpresiones();
		        }
		        $this->setState(337);
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
				$this->setState(367);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 39, $this->ctx)) {
					case 1:
					    $localContext = new Context\ExprParenthesisContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;

					    $this->setState(340);
					    $this->match(self::LPAREN);
					    $this->setState(341);
					    $this->recursiveExpresion(0);
					    $this->setState(342);
					    $this->match(self::RPAREN);
					break;

					case 2:
					    $localContext = new Context\ExprNotContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(344);
					    $this->match(self::NOT);
					    $this->setState(345);
					    $this->recursiveExpresion(19);
					break;

					case 3:
					    $localContext = new Context\ExprNegateContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(346);
					    $this->match(self::MINUS);
					    $this->setState(347);
					    $this->recursiveExpresion(18);
					break;

					case 4:
					    $localContext = new Context\ExprStructLitContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(348);
					    $this->match(self::ID);
					    $this->setState(349);
					    $this->match(self::LBRACE);
					    $this->setState(351);
					    $this->errorHandler->sync($this);
					    $_la = $this->input->LA(1);

					    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & -564357122079834110) !== 0)) {
					    	$this->setState(350);
					    	$this->listaExpresiones();
					    }
					    $this->setState(353);
					    $this->match(self::RBRACE);
					break;

					case 5:
					    $localContext = new Context\ExprArrayLitContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(354);
					    $this->literalArreglo();
					break;

					case 6:
					    $localContext = new Context\ExprAddrContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(355);
					    $this->match(self::T__0);
					    $this->setState(356);
					    $this->match(self::ID);
					break;

					case 7:
					    $localContext = new Context\ExprDerefContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(357);
					    $this->match(self::MUL);
					    $this->setState(358);
					    $this->recursiveExpresion(14);
					break;

					case 8:
					    $localContext = new Context\ExprArrayInlineContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(359);
					    $this->match(self::LBRACE);
					    $this->setState(361);
					    $this->errorHandler->sync($this);
					    $_la = $this->input->LA(1);

					    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & -564357122079834110) !== 0)) {
					    	$this->setState(360);
					    	$this->listaExpresiones();
					    }
					    $this->setState(363);
					    $this->match(self::RBRACE);
					break;

					case 9:
					    $localContext = new Context\ExprIdContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(364);
					    $this->match(self::ID);
					break;

					case 10:
					    $localContext = new Context\ExprLiteralContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(365);
					    $this->literal();
					break;

					case 11:
					    $localContext = new Context\ExprNilContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(366);
					    $this->match(self::KW_NIL);
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(403);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 42, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(401);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 41, $this->ctx)) {
							case 1:
							    $localContext = new Context\ExprMulDivContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(369);

							    if (!($this->precpred($this->ctx, 10))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 10)");
							    }
							    $this->setState(370);

							    $_la = $this->input->LA(1);

							    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 962072674304) !== 0))) {
							    $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(371);
							    $this->recursiveExpresion(11);
							break;

							case 2:
							    $localContext = new Context\ExprAddSubContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(372);

							    if (!($this->precpred($this->ctx, 9))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 9)");
							    }
							    $this->setState(373);

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
							    $this->setState(374);
							    $this->recursiveExpresion(10);
							break;

							case 3:
							    $localContext = new Context\ExprRelationalContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(375);

							    if (!($this->precpred($this->ctx, 8))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 8)");
							    }
							    $this->setState(376);

							    $_la = $this->input->LA(1);

							    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 65970697666560) !== 0))) {
							    $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(377);
							    $this->recursiveExpresion(9);
							break;

							case 4:
							    $localContext = new Context\ExprEqualityContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(378);

							    if (!($this->precpred($this->ctx, 7))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 7)");
							    }
							    $this->setState(379);

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
							    $this->setState(380);
							    $this->recursiveExpresion(8);
							break;

							case 5:
							    $localContext = new Context\ExprAndContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(381);

							    if (!($this->precpred($this->ctx, 6))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 6)");
							    }
							    $this->setState(382);
							    $this->match(self::AND);
							    $this->setState(383);
							    $this->recursiveExpresion(7);
							break;

							case 6:
							    $localContext = new Context\ExprOrContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(384);

							    if (!($this->precpred($this->ctx, 5))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 5)");
							    }
							    $this->setState(385);
							    $this->match(self::OR);
							    $this->setState(386);
							    $this->recursiveExpresion(6);
							break;

							case 7:
							    $localContext = new Context\ExprStructAccessContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(387);

							    if (!($this->precpred($this->ctx, 13))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 13)");
							    }
							    $this->setState(388);
							    $this->match(self::DOT);
							    $this->setState(389);
							    $this->match(self::ID);
							break;

							case 8:
							    $localContext = new Context\ExprArrayAccessContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(390);

							    if (!($this->precpred($this->ctx, 12))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 12)");
							    }
							    $this->setState(391);
							    $this->match(self::LBRACKET);
							    $this->setState(392);
							    $this->recursiveExpresion(0);
							    $this->setState(393);
							    $this->match(self::RBRACKET);
							break;

							case 9:
							    $localContext = new Context\ExprCallContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(395);

							    if (!($this->precpred($this->ctx, 11))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 11)");
							    }
							    $this->setState(396);
							    $this->match(self::LPAREN);
							    $this->setState(398);
							    $this->errorHandler->sync($this);
							    $_la = $this->input->LA(1);

							    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & -564357122079834110) !== 0)) {
							    	$this->setState(397);
							    	$this->listaExpresiones();
							    }
							    $this->setState(400);
							    $this->match(self::RPAREN);
							break;
						} 
					}

					$this->setState(405);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 42, $this->ctx);
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
		        $this->setState(406);
		        $this->recursiveExpresion(0);
		        $this->setState(411);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(407);
		        	$this->match(self::COMMA);
		        	$this->setState(408);
		        	$this->recursiveExpresion(0);
		        	$this->setState(413);
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
		        $this->setState(427);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::TYPE_INT:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(414);
		            	$this->match(self::TYPE_INT);
		            	break;

		            case self::TYPE_FLOAT:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(415);
		            	$this->match(self::TYPE_FLOAT);
		            	break;

		            case self::TYPE_BOOL:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(416);
		            	$this->match(self::TYPE_BOOL);
		            	break;

		            case self::TYPE_RUNE:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(417);
		            	$this->match(self::TYPE_RUNE);
		            	break;

		            case self::TYPE_STRING:
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(418);
		            	$this->match(self::TYPE_STRING);
		            	break;

		            case self::MUL:
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(419);
		            	$this->match(self::MUL);
		            	$this->setState(420);
		            	$this->tipo();
		            	break;

		            case self::LBRACKET:
		            	$this->enterOuterAlt($localContext, 7);
		            	$this->setState(421);
		            	$this->match(self::LBRACKET);
		            	$this->setState(422);
		            	$this->recursiveExpresion(0);
		            	$this->setState(423);
		            	$this->match(self::RBRACKET);
		            	$this->setState(424);
		            	$this->tipo();
		            	break;

		            case self::ID:
		            	$this->enterOuterAlt($localContext, 8);
		            	$this->setState(426);
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
		        $this->setState(429);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & -1152921504556515328) !== 0))) {
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
		        $this->setState(431);
		        $this->tipo();
		        $this->setState(432);
		        $this->match(self::LBRACE);
		        $this->setState(434);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & -564357122079834110) !== 0)) {
		        	$this->setState(433);
		        	$this->listaExpresiones();
		        }
		        $this->setState(436);
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
			        return $this->precpred($this->ctx, 10);

			    case 1:
			        return $this->precpred($this->ctx, 9);

			    case 2:
			        return $this->precpred($this->ctx, 8);

			    case 3:
			        return $this->precpred($this->ctx, 7);

			    case 4:
			        return $this->precpred($this->ctx, 6);

			    case 5:
			        return $this->precpred($this->ctx, 5);

			    case 6:
			        return $this->precpred($this->ctx, 13);

			    case 7:
			        return $this->precpred($this->ctx, 12);

			    case 8:
			        return $this->precpred($this->ctx, 11);
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

	class AssignIncContext extends AsignacionContext
	{
		public function __construct(AsignacionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::ID, 0);
	    }

	    public function PLUS_PLUS(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::PLUS_PLUS, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterAssignInc($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitAssignInc($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitAssignInc($this);
		    }

			return $visitor->visitChildren($this);
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

	class AssignDecContext extends AsignacionContext
	{
		public function __construct(AsignacionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::ID, 0);
	    }

	    public function MINUS_MINUS(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::MINUS_MINUS, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterAssignDec($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitAssignDec($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitAssignDec($this);
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

	class ExprArrayInlineContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
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
			    $listener->enterExprArrayInline($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitExprArrayInline($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitExprArrayInline($this);
		    }

			return $visitor->visitChildren($this);
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

	class ExprNilContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function KW_NIL(): ?TerminalNode
	    {
	        return $this->getToken(GramaticaParser::KW_NIL, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->enterExprNil($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GramaticaListener) {
			    $listener->exitExprNil($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GramaticaVisitor) {
			    return $visitor->visitExprNil($this);
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