<?php

/*
 * Generated from Gramatica.g4 by ANTLR 4.13.1
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see GramaticaParser}.
 */
interface GramaticaListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::inicio()}.
	 * @param $context The parse tree.
	 */
	public function enterInicio(Context\InicioContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::inicio()}.
	 * @param $context The parse tree.
	 */
	public function exitInicio(Context\InicioContext $context): void;
	/**
	 * Enter a parse tree produced by the `DeclFunction`
	 * labeled alternative in {@see GramaticaParser::declaracionNivelSuperior()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclFunction(Context\DeclFunctionContext $context): void;
	/**
	 * Exit a parse tree produced by the `DeclFunction` labeled alternative
	 * in {@see GramaticaParser::declaracionNivelSuperior()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclFunction(Context\DeclFunctionContext $context): void;
	/**
	 * Enter a parse tree produced by the `DeclGlobalVar`
	 * labeled alternative in {@see GramaticaParser::declaracionNivelSuperior()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclGlobalVar(Context\DeclGlobalVarContext $context): void;
	/**
	 * Exit a parse tree produced by the `DeclGlobalVar` labeled alternative
	 * in {@see GramaticaParser::declaracionNivelSuperior()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclGlobalVar(Context\DeclGlobalVarContext $context): void;
	/**
	 * Enter a parse tree produced by the `DeclGlobalConst`
	 * labeled alternative in {@see GramaticaParser::declaracionNivelSuperior()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclGlobalConst(Context\DeclGlobalConstContext $context): void;
	/**
	 * Exit a parse tree produced by the `DeclGlobalConst` labeled alternative
	 * in {@see GramaticaParser::declaracionNivelSuperior()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclGlobalConst(Context\DeclGlobalConstContext $context): void;
	/**
	 * Enter a parse tree produced by the `DeclStruct`
	 * labeled alternative in {@see GramaticaParser::declaracionNivelSuperior()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclStruct(Context\DeclStructContext $context): void;
	/**
	 * Exit a parse tree produced by the `DeclStruct` labeled alternative
	 * in {@see GramaticaParser::declaracionNivelSuperior()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclStruct(Context\DeclStructContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::declaracionFuncion()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclaracionFuncion(Context\DeclaracionFuncionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::declaracionFuncion()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclaracionFuncion(Context\DeclaracionFuncionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::tiposRetorno()}.
	 * @param $context The parse tree.
	 */
	public function enterTiposRetorno(Context\TiposRetornoContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::tiposRetorno()}.
	 * @param $context The parse tree.
	 */
	public function exitTiposRetorno(Context\TiposRetornoContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::listaParametros()}.
	 * @param $context The parse tree.
	 */
	public function enterListaParametros(Context\ListaParametrosContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::listaParametros()}.
	 * @param $context The parse tree.
	 */
	public function exitListaParametros(Context\ListaParametrosContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::parametro()}.
	 * @param $context The parse tree.
	 */
	public function enterParametro(Context\ParametroContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::parametro()}.
	 * @param $context The parse tree.
	 */
	public function exitParametro(Context\ParametroContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::declaracionStruct()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclaracionStruct(Context\DeclaracionStructContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::declaracionStruct()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclaracionStruct(Context\DeclaracionStructContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::bloque()}.
	 * @param $context The parse tree.
	 */
	public function enterBloque(Context\BloqueContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::bloque()}.
	 * @param $context The parse tree.
	 */
	public function exitBloque(Context\BloqueContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtVar`
	 * labeled alternative in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtVar(Context\StmtVarContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtVar` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtVar(Context\StmtVarContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtConst`
	 * labeled alternative in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtConst(Context\StmtConstContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtConst` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtConst(Context\StmtConstContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtAssign`
	 * labeled alternative in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtAssign(Context\StmtAssignContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtAssign` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtAssign(Context\StmtAssignContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtShortDecl`
	 * labeled alternative in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtShortDecl(Context\StmtShortDeclContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtShortDecl` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtShortDecl(Context\StmtShortDeclContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtPrint`
	 * labeled alternative in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtPrint(Context\StmtPrintContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtPrint` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtPrint(Context\StmtPrintContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtIf`
	 * labeled alternative in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtIf(Context\StmtIfContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtIf` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtIf(Context\StmtIfContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtSwitch`
	 * labeled alternative in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtSwitch(Context\StmtSwitchContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtSwitch` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtSwitch(Context\StmtSwitchContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtFor`
	 * labeled alternative in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtFor(Context\StmtForContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtFor` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtFor(Context\StmtForContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtBreak`
	 * labeled alternative in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtBreak(Context\StmtBreakContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtBreak` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtBreak(Context\StmtBreakContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtContinue`
	 * labeled alternative in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtContinue(Context\StmtContinueContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtContinue` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtContinue(Context\StmtContinueContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtBlock`
	 * labeled alternative in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtBlock(Context\StmtBlockContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtBlock` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtBlock(Context\StmtBlockContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtReturn`
	 * labeled alternative in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtReturn(Context\StmtReturnContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtReturn` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtReturn(Context\StmtReturnContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtArrayAssign`
	 * labeled alternative in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtArrayAssign(Context\StmtArrayAssignContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtArrayAssign` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtArrayAssign(Context\StmtArrayAssignContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtExpr`
	 * labeled alternative in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtExpr(Context\StmtExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtExpr` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtExpr(Context\StmtExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtStructAssign`
	 * labeled alternative in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtStructAssign(Context\StmtStructAssignContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtStructAssign` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtStructAssign(Context\StmtStructAssignContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtEmpty`
	 * labeled alternative in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtEmpty(Context\StmtEmptyContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtEmpty` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtEmpty(Context\StmtEmptyContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtPtrAssign`
	 * labeled alternative in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtPtrAssign(Context\StmtPtrAssignContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtPtrAssign` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtPtrAssign(Context\StmtPtrAssignContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::declaracionVariable()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclaracionVariable(Context\DeclaracionVariableContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::declaracionVariable()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclaracionVariable(Context\DeclaracionVariableContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::declaracionConstante()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclaracionConstante(Context\DeclaracionConstanteContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::declaracionConstante()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclaracionConstante(Context\DeclaracionConstanteContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::declaracionCorta()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclaracionCorta(Context\DeclaracionCortaContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::declaracionCorta()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclaracionCorta(Context\DeclaracionCortaContext $context): void;
	/**
	 * Enter a parse tree produced by the `AssignSimple`
	 * labeled alternative in {@see GramaticaParser::asignacion()}.
	 * @param $context The parse tree.
	 */
	public function enterAssignSimple(Context\AssignSimpleContext $context): void;
	/**
	 * Exit a parse tree produced by the `AssignSimple` labeled alternative
	 * in {@see GramaticaParser::asignacion()}.
	 * @param $context The parse tree.
	 */
	public function exitAssignSimple(Context\AssignSimpleContext $context): void;
	/**
	 * Enter a parse tree produced by the `AssignCompound`
	 * labeled alternative in {@see GramaticaParser::asignacion()}.
	 * @param $context The parse tree.
	 */
	public function enterAssignCompound(Context\AssignCompoundContext $context): void;
	/**
	 * Exit a parse tree produced by the `AssignCompound` labeled alternative
	 * in {@see GramaticaParser::asignacion()}.
	 * @param $context The parse tree.
	 */
	public function exitAssignCompound(Context\AssignCompoundContext $context): void;
	/**
	 * Enter a parse tree produced by the `AssignInc`
	 * labeled alternative in {@see GramaticaParser::asignacion()}.
	 * @param $context The parse tree.
	 */
	public function enterAssignInc(Context\AssignIncContext $context): void;
	/**
	 * Exit a parse tree produced by the `AssignInc` labeled alternative
	 * in {@see GramaticaParser::asignacion()}.
	 * @param $context The parse tree.
	 */
	public function exitAssignInc(Context\AssignIncContext $context): void;
	/**
	 * Enter a parse tree produced by the `AssignDec`
	 * labeled alternative in {@see GramaticaParser::asignacion()}.
	 * @param $context The parse tree.
	 */
	public function enterAssignDec(Context\AssignDecContext $context): void;
	/**
	 * Exit a parse tree produced by the `AssignDec` labeled alternative
	 * in {@see GramaticaParser::asignacion()}.
	 * @param $context The parse tree.
	 */
	public function exitAssignDec(Context\AssignDecContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::asignacionArreglo()}.
	 * @param $context The parse tree.
	 */
	public function enterAsignacionArreglo(Context\AsignacionArregloContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::asignacionArreglo()}.
	 * @param $context The parse tree.
	 */
	public function exitAsignacionArreglo(Context\AsignacionArregloContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::asignacionStruct()}.
	 * @param $context The parse tree.
	 */
	public function enterAsignacionStruct(Context\AsignacionStructContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::asignacionStruct()}.
	 * @param $context The parse tree.
	 */
	public function exitAsignacionStruct(Context\AsignacionStructContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::sentenciaIf()}.
	 * @param $context The parse tree.
	 */
	public function enterSentenciaIf(Context\SentenciaIfContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::sentenciaIf()}.
	 * @param $context The parse tree.
	 */
	public function exitSentenciaIf(Context\SentenciaIfContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::sentenciaFor()}.
	 * @param $context The parse tree.
	 */
	public function enterSentenciaFor(Context\SentenciaForContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::sentenciaFor()}.
	 * @param $context The parse tree.
	 */
	public function exitSentenciaFor(Context\SentenciaForContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::sentenciaSwitch()}.
	 * @param $context The parse tree.
	 */
	public function enterSentenciaSwitch(Context\SentenciaSwitchContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::sentenciaSwitch()}.
	 * @param $context The parse tree.
	 */
	public function exitSentenciaSwitch(Context\SentenciaSwitchContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::bloqueSwitch()}.
	 * @param $context The parse tree.
	 */
	public function enterBloqueSwitch(Context\BloqueSwitchContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::bloqueSwitch()}.
	 * @param $context The parse tree.
	 */
	public function exitBloqueSwitch(Context\BloqueSwitchContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::sentenciaCase()}.
	 * @param $context The parse tree.
	 */
	public function enterSentenciaCase(Context\SentenciaCaseContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::sentenciaCase()}.
	 * @param $context The parse tree.
	 */
	public function exitSentenciaCase(Context\SentenciaCaseContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::sentenciaDefault()}.
	 * @param $context The parse tree.
	 */
	public function enterSentenciaDefault(Context\SentenciaDefaultContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::sentenciaDefault()}.
	 * @param $context The parse tree.
	 */
	public function exitSentenciaDefault(Context\SentenciaDefaultContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::sentenciaBreak()}.
	 * @param $context The parse tree.
	 */
	public function enterSentenciaBreak(Context\SentenciaBreakContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::sentenciaBreak()}.
	 * @param $context The parse tree.
	 */
	public function exitSentenciaBreak(Context\SentenciaBreakContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::sentenciaContinue()}.
	 * @param $context The parse tree.
	 */
	public function enterSentenciaContinue(Context\SentenciaContinueContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::sentenciaContinue()}.
	 * @param $context The parse tree.
	 */
	public function exitSentenciaContinue(Context\SentenciaContinueContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::sentenciaReturn()}.
	 * @param $context The parse tree.
	 */
	public function enterSentenciaReturn(Context\SentenciaReturnContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::sentenciaReturn()}.
	 * @param $context The parse tree.
	 */
	public function exitSentenciaReturn(Context\SentenciaReturnContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::sentenciaPrint()}.
	 * @param $context The parse tree.
	 */
	public function enterSentenciaPrint(Context\SentenciaPrintContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::sentenciaPrint()}.
	 * @param $context The parse tree.
	 */
	public function exitSentenciaPrint(Context\SentenciaPrintContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprArrayInline`
	 * labeled alternative in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterExprArrayInline(Context\ExprArrayInlineContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprArrayInline` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitExprArrayInline(Context\ExprArrayInlineContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprAddr`
	 * labeled alternative in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterExprAddr(Context\ExprAddrContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprAddr` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitExprAddr(Context\ExprAddrContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprArrayLit`
	 * labeled alternative in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterExprArrayLit(Context\ExprArrayLitContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprArrayLit` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitExprArrayLit(Context\ExprArrayLitContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprStructLit`
	 * labeled alternative in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterExprStructLit(Context\ExprStructLitContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprStructLit` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitExprStructLit(Context\ExprStructLitContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprParenthesis`
	 * labeled alternative in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterExprParenthesis(Context\ExprParenthesisContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprParenthesis` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitExprParenthesis(Context\ExprParenthesisContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprNot`
	 * labeled alternative in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterExprNot(Context\ExprNotContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprNot` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitExprNot(Context\ExprNotContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprRelational`
	 * labeled alternative in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterExprRelational(Context\ExprRelationalContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprRelational` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitExprRelational(Context\ExprRelationalContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprNil`
	 * labeled alternative in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterExprNil(Context\ExprNilContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprNil` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitExprNil(Context\ExprNilContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprAddSub`
	 * labeled alternative in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterExprAddSub(Context\ExprAddSubContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprAddSub` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitExprAddSub(Context\ExprAddSubContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprAnd`
	 * labeled alternative in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterExprAnd(Context\ExprAndContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprAnd` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitExprAnd(Context\ExprAndContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprArrayAccess`
	 * labeled alternative in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterExprArrayAccess(Context\ExprArrayAccessContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprArrayAccess` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitExprArrayAccess(Context\ExprArrayAccessContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprCall`
	 * labeled alternative in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterExprCall(Context\ExprCallContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprCall` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitExprCall(Context\ExprCallContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprDeref`
	 * labeled alternative in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterExprDeref(Context\ExprDerefContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprDeref` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitExprDeref(Context\ExprDerefContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprMulDiv`
	 * labeled alternative in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterExprMulDiv(Context\ExprMulDivContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprMulDiv` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitExprMulDiv(Context\ExprMulDivContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprNegate`
	 * labeled alternative in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterExprNegate(Context\ExprNegateContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprNegate` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitExprNegate(Context\ExprNegateContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprOr`
	 * labeled alternative in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterExprOr(Context\ExprOrContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprOr` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitExprOr(Context\ExprOrContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprLiteral`
	 * labeled alternative in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterExprLiteral(Context\ExprLiteralContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprLiteral` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitExprLiteral(Context\ExprLiteralContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprStructAccess`
	 * labeled alternative in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterExprStructAccess(Context\ExprStructAccessContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprStructAccess` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitExprStructAccess(Context\ExprStructAccessContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprEquality`
	 * labeled alternative in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterExprEquality(Context\ExprEqualityContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprEquality` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitExprEquality(Context\ExprEqualityContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprId`
	 * labeled alternative in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterExprId(Context\ExprIdContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprId` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitExprId(Context\ExprIdContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::listaExpresiones()}.
	 * @param $context The parse tree.
	 */
	public function enterListaExpresiones(Context\ListaExpresionesContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::listaExpresiones()}.
	 * @param $context The parse tree.
	 */
	public function exitListaExpresiones(Context\ListaExpresionesContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::tipo()}.
	 * @param $context The parse tree.
	 */
	public function enterTipo(Context\TipoContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::tipo()}.
	 * @param $context The parse tree.
	 */
	public function exitTipo(Context\TipoContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function enterLiteral(Context\LiteralContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function exitLiteral(Context\LiteralContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GramaticaParser::literalArreglo()}.
	 * @param $context The parse tree.
	 */
	public function enterLiteralArreglo(Context\LiteralArregloContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GramaticaParser::literalArreglo()}.
	 * @param $context The parse tree.
	 */
	public function exitLiteralArreglo(Context\LiteralArregloContext $context): void;
}