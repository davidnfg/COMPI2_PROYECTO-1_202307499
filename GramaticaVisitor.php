<?php

/*
 * Generated from Gramatica.g4 by ANTLR 4.13.1
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see GramaticaParser}.
 */
interface GramaticaVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@see GramaticaParser::inicio()}.
	 *
	 * @param Context\InicioContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInicio(Context\InicioContext $context);

	/**
	 * Visit a parse tree produced by the `DeclFunction` labeled alternative
	 * in {@see GramaticaParser::declaracionNivelSuperior()}.
	 *
	 * @param Context\DeclFunctionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDeclFunction(Context\DeclFunctionContext $context);

	/**
	 * Visit a parse tree produced by the `DeclGlobalVar` labeled alternative
	 * in {@see GramaticaParser::declaracionNivelSuperior()}.
	 *
	 * @param Context\DeclGlobalVarContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDeclGlobalVar(Context\DeclGlobalVarContext $context);

	/**
	 * Visit a parse tree produced by the `DeclGlobalConst` labeled alternative
	 * in {@see GramaticaParser::declaracionNivelSuperior()}.
	 *
	 * @param Context\DeclGlobalConstContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDeclGlobalConst(Context\DeclGlobalConstContext $context);

	/**
	 * Visit a parse tree produced by the `DeclStruct` labeled alternative
	 * in {@see GramaticaParser::declaracionNivelSuperior()}.
	 *
	 * @param Context\DeclStructContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDeclStruct(Context\DeclStructContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::declaracionFuncion()}.
	 *
	 * @param Context\DeclaracionFuncionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDeclaracionFuncion(Context\DeclaracionFuncionContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::tiposRetorno()}.
	 *
	 * @param Context\TiposRetornoContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTiposRetorno(Context\TiposRetornoContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::listaParametros()}.
	 *
	 * @param Context\ListaParametrosContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitListaParametros(Context\ListaParametrosContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::parametro()}.
	 *
	 * @param Context\ParametroContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParametro(Context\ParametroContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::declaracionStruct()}.
	 *
	 * @param Context\DeclaracionStructContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDeclaracionStruct(Context\DeclaracionStructContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::bloque()}.
	 *
	 * @param Context\BloqueContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBloque(Context\BloqueContext $context);

	/**
	 * Visit a parse tree produced by the `StmtVar` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 *
	 * @param Context\StmtVarContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmtVar(Context\StmtVarContext $context);

	/**
	 * Visit a parse tree produced by the `StmtConst` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 *
	 * @param Context\StmtConstContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmtConst(Context\StmtConstContext $context);

	/**
	 * Visit a parse tree produced by the `StmtAssign` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 *
	 * @param Context\StmtAssignContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmtAssign(Context\StmtAssignContext $context);

	/**
	 * Visit a parse tree produced by the `StmtShortDecl` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 *
	 * @param Context\StmtShortDeclContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmtShortDecl(Context\StmtShortDeclContext $context);

	/**
	 * Visit a parse tree produced by the `StmtPrint` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 *
	 * @param Context\StmtPrintContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmtPrint(Context\StmtPrintContext $context);

	/**
	 * Visit a parse tree produced by the `StmtIf` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 *
	 * @param Context\StmtIfContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmtIf(Context\StmtIfContext $context);

	/**
	 * Visit a parse tree produced by the `StmtSwitch` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 *
	 * @param Context\StmtSwitchContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmtSwitch(Context\StmtSwitchContext $context);

	/**
	 * Visit a parse tree produced by the `StmtFor` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 *
	 * @param Context\StmtForContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmtFor(Context\StmtForContext $context);

	/**
	 * Visit a parse tree produced by the `StmtBreak` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 *
	 * @param Context\StmtBreakContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmtBreak(Context\StmtBreakContext $context);

	/**
	 * Visit a parse tree produced by the `StmtContinue` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 *
	 * @param Context\StmtContinueContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmtContinue(Context\StmtContinueContext $context);

	/**
	 * Visit a parse tree produced by the `StmtBlock` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 *
	 * @param Context\StmtBlockContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmtBlock(Context\StmtBlockContext $context);

	/**
	 * Visit a parse tree produced by the `StmtReturn` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 *
	 * @param Context\StmtReturnContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmtReturn(Context\StmtReturnContext $context);

	/**
	 * Visit a parse tree produced by the `StmtArrayAssign` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 *
	 * @param Context\StmtArrayAssignContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmtArrayAssign(Context\StmtArrayAssignContext $context);

	/**
	 * Visit a parse tree produced by the `StmtExpr` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 *
	 * @param Context\StmtExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmtExpr(Context\StmtExprContext $context);

	/**
	 * Visit a parse tree produced by the `StmtStructAssign` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 *
	 * @param Context\StmtStructAssignContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmtStructAssign(Context\StmtStructAssignContext $context);

	/**
	 * Visit a parse tree produced by the `StmtEmpty` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 *
	 * @param Context\StmtEmptyContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmtEmpty(Context\StmtEmptyContext $context);

	/**
	 * Visit a parse tree produced by the `StmtPtrAssign` labeled alternative
	 * in {@see GramaticaParser::sentencia()}.
	 *
	 * @param Context\StmtPtrAssignContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmtPtrAssign(Context\StmtPtrAssignContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::declaracionVariable()}.
	 *
	 * @param Context\DeclaracionVariableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDeclaracionVariable(Context\DeclaracionVariableContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::declaracionConstante()}.
	 *
	 * @param Context\DeclaracionConstanteContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDeclaracionConstante(Context\DeclaracionConstanteContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::declaracionCorta()}.
	 *
	 * @param Context\DeclaracionCortaContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDeclaracionCorta(Context\DeclaracionCortaContext $context);

	/**
	 * Visit a parse tree produced by the `AssignSimple` labeled alternative
	 * in {@see GramaticaParser::asignacion()}.
	 *
	 * @param Context\AssignSimpleContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAssignSimple(Context\AssignSimpleContext $context);

	/**
	 * Visit a parse tree produced by the `AssignCompound` labeled alternative
	 * in {@see GramaticaParser::asignacion()}.
	 *
	 * @param Context\AssignCompoundContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAssignCompound(Context\AssignCompoundContext $context);

	/**
	 * Visit a parse tree produced by the `AssignInc` labeled alternative
	 * in {@see GramaticaParser::asignacion()}.
	 *
	 * @param Context\AssignIncContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAssignInc(Context\AssignIncContext $context);

	/**
	 * Visit a parse tree produced by the `AssignDec` labeled alternative
	 * in {@see GramaticaParser::asignacion()}.
	 *
	 * @param Context\AssignDecContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAssignDec(Context\AssignDecContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::asignacionArreglo()}.
	 *
	 * @param Context\AsignacionArregloContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAsignacionArreglo(Context\AsignacionArregloContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::asignacionStruct()}.
	 *
	 * @param Context\AsignacionStructContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAsignacionStruct(Context\AsignacionStructContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::sentenciaIf()}.
	 *
	 * @param Context\SentenciaIfContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSentenciaIf(Context\SentenciaIfContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::sentenciaFor()}.
	 *
	 * @param Context\SentenciaForContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSentenciaFor(Context\SentenciaForContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::sentenciaSwitch()}.
	 *
	 * @param Context\SentenciaSwitchContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSentenciaSwitch(Context\SentenciaSwitchContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::bloqueSwitch()}.
	 *
	 * @param Context\BloqueSwitchContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBloqueSwitch(Context\BloqueSwitchContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::sentenciaCase()}.
	 *
	 * @param Context\SentenciaCaseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSentenciaCase(Context\SentenciaCaseContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::sentenciaDefault()}.
	 *
	 * @param Context\SentenciaDefaultContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSentenciaDefault(Context\SentenciaDefaultContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::sentenciaBreak()}.
	 *
	 * @param Context\SentenciaBreakContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSentenciaBreak(Context\SentenciaBreakContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::sentenciaContinue()}.
	 *
	 * @param Context\SentenciaContinueContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSentenciaContinue(Context\SentenciaContinueContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::sentenciaReturn()}.
	 *
	 * @param Context\SentenciaReturnContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSentenciaReturn(Context\SentenciaReturnContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::sentenciaPrint()}.
	 *
	 * @param Context\SentenciaPrintContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSentenciaPrint(Context\SentenciaPrintContext $context);

	/**
	 * Visit a parse tree produced by the `ExprArrayInline` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 *
	 * @param Context\ExprArrayInlineContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprArrayInline(Context\ExprArrayInlineContext $context);

	/**
	 * Visit a parse tree produced by the `ExprAddr` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 *
	 * @param Context\ExprAddrContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprAddr(Context\ExprAddrContext $context);

	/**
	 * Visit a parse tree produced by the `ExprArrayLit` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 *
	 * @param Context\ExprArrayLitContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprArrayLit(Context\ExprArrayLitContext $context);

	/**
	 * Visit a parse tree produced by the `ExprStructLit` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 *
	 * @param Context\ExprStructLitContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprStructLit(Context\ExprStructLitContext $context);

	/**
	 * Visit a parse tree produced by the `ExprParenthesis` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 *
	 * @param Context\ExprParenthesisContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprParenthesis(Context\ExprParenthesisContext $context);

	/**
	 * Visit a parse tree produced by the `ExprNot` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 *
	 * @param Context\ExprNotContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprNot(Context\ExprNotContext $context);

	/**
	 * Visit a parse tree produced by the `ExprRelational` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 *
	 * @param Context\ExprRelationalContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprRelational(Context\ExprRelationalContext $context);

	/**
	 * Visit a parse tree produced by the `ExprNil` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 *
	 * @param Context\ExprNilContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprNil(Context\ExprNilContext $context);

	/**
	 * Visit a parse tree produced by the `ExprAddSub` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 *
	 * @param Context\ExprAddSubContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprAddSub(Context\ExprAddSubContext $context);

	/**
	 * Visit a parse tree produced by the `ExprAnd` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 *
	 * @param Context\ExprAndContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprAnd(Context\ExprAndContext $context);

	/**
	 * Visit a parse tree produced by the `ExprArrayAccess` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 *
	 * @param Context\ExprArrayAccessContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprArrayAccess(Context\ExprArrayAccessContext $context);

	/**
	 * Visit a parse tree produced by the `ExprCall` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 *
	 * @param Context\ExprCallContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprCall(Context\ExprCallContext $context);

	/**
	 * Visit a parse tree produced by the `ExprDeref` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 *
	 * @param Context\ExprDerefContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprDeref(Context\ExprDerefContext $context);

	/**
	 * Visit a parse tree produced by the `ExprMulDiv` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 *
	 * @param Context\ExprMulDivContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprMulDiv(Context\ExprMulDivContext $context);

	/**
	 * Visit a parse tree produced by the `ExprNegate` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 *
	 * @param Context\ExprNegateContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprNegate(Context\ExprNegateContext $context);

	/**
	 * Visit a parse tree produced by the `ExprOr` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 *
	 * @param Context\ExprOrContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprOr(Context\ExprOrContext $context);

	/**
	 * Visit a parse tree produced by the `ExprLiteral` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 *
	 * @param Context\ExprLiteralContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprLiteral(Context\ExprLiteralContext $context);

	/**
	 * Visit a parse tree produced by the `ExprStructAccess` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 *
	 * @param Context\ExprStructAccessContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprStructAccess(Context\ExprStructAccessContext $context);

	/**
	 * Visit a parse tree produced by the `ExprEquality` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 *
	 * @param Context\ExprEqualityContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprEquality(Context\ExprEqualityContext $context);

	/**
	 * Visit a parse tree produced by the `ExprId` labeled alternative
	 * in {@see GramaticaParser::expresion()}.
	 *
	 * @param Context\ExprIdContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprId(Context\ExprIdContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::listaExpresiones()}.
	 *
	 * @param Context\ListaExpresionesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitListaExpresiones(Context\ListaExpresionesContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::tipo()}.
	 *
	 * @param Context\TipoContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTipo(Context\TipoContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::literal()}.
	 *
	 * @param Context\LiteralContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLiteral(Context\LiteralContext $context);

	/**
	 * Visit a parse tree produced by {@see GramaticaParser::literalArreglo()}.
	 *
	 * @param Context\LiteralArregloContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLiteralArreglo(Context\LiteralArregloContext $context);
}