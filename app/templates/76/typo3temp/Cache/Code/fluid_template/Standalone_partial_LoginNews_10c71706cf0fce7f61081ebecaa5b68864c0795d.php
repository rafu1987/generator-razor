<?php
class FluidCache_Standalone_partial_LoginNews_10c71706cf0fce7f61081ebecaa5b68864c0795d extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('loginNewsItems'));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
	<div class="panel-carousel carousel slide t3js-login-news-carousel" id="loginNews" data-interval="0" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments4 = array();
$arguments4['each'] = $currentVariableContainer->getOrNull('loginNewsItems');
$arguments4['as'] = 'item';
$arguments4['iteration'] = 'loginNewsIterator';
$arguments4['key'] = '';
$arguments4['reverse'] = false;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
				<div class="item';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments7 = array();
// Rendering Boolean node
$arguments7['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('loginNewsIterator'), 'isFirst', $renderingContext));
$arguments7['then'] = ' active';
$arguments7['else'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '">
					<h3 class="typo3-login-news-heading">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments9 = array();
$arguments9['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'header', $renderingContext);
$arguments9['keepQuotes'] = false;
$arguments9['encoding'] = NULL;
$arguments9['doubleEncode'] = true;
$renderChildrenClosure10 = function() {return NULL;};
$value11 = ($arguments9['value'] !== NULL ? $arguments9['value'] : $renderChildrenClosure10());

$output6 .= (!is_string($value11) ? $value11 : htmlspecialchars($value11, ($arguments9['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments9['encoding'] !== NULL ? $arguments9['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments9['doubleEncode']));

$output6 .= '</h3>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments12 = array();
$arguments12['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'content', $renderingContext);
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output6 .= '
					<span class="text-muted">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments14 = array();
$arguments14['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'date', $renderingContext);
$arguments14['keepQuotes'] = false;
$arguments14['encoding'] = NULL;
$arguments14['doubleEncode'] = true;
$renderChildrenClosure15 = function() {return NULL;};
$value16 = ($arguments14['value'] !== NULL ? $arguments14['value'] : $renderChildrenClosure15());

$output6 .= (!is_string($value16) ? $value16 : htmlspecialchars($value16, ($arguments14['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments14['encoding'] !== NULL ? $arguments14['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments14['doubleEncode']));

$output6 .= '</span>
				</div>
			';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
		</div>
		<a class="left typo3-login-carousel-control" href="#loginNews" role="button" data-slide="prev">
			<i class="fa fa-angle-left"></i>
			<span class="sr-only">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments17 = array();
$arguments17['key'] = 'login.news.previous';
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['htmlEscape'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$renderChildrenClosure18 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output3 .= '</span>
		</a>
		<a class="right typo3-login-carousel-control" href="#loginNews" role="button" data-slide="next">
			<i class="fa fa-angle-right"></i>
			<span class="sr-only">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments19 = array();
$arguments19['key'] = 'login.news.next';
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['htmlEscape'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$renderChildrenClosure20 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output3 .= '</span>
		</a>
	</div>
';
return $output3;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';


return $output0;
}


}
#1474035265    6804      