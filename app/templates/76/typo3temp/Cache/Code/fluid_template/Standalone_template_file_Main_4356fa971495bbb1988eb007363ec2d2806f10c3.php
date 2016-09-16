<?php
class FluidCache_Standalone_template_file_Main_4356fa971495bbb1988eb007363ec2d2806f10c3 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="typo3-topbar-container" role="navigation" id="typo3-top-container">
	<div class="typo3-topbar-site">
		<a class="typo3-topbar-site-logo" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = $currentVariableContainer->getOrNull('logoLink');
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = NULL;
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() {return NULL;};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1['encoding'] !== NULL ? $arguments1['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1['doubleEncode']));

$output0 .= '" target="_blank">
			<img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments4 = array();
$arguments4['value'] = $currentVariableContainer->getOrNull('logoUrl');
$arguments4['keepQuotes'] = false;
$arguments4['encoding'] = NULL;
$arguments4['doubleEncode'] = true;
$renderChildrenClosure5 = function() {return NULL;};
$value6 = ($arguments4['value'] !== NULL ? $arguments4['value'] : $renderChildrenClosure5());

$output0 .= (!is_string($value6) ? $value6 : htmlspecialchars($value6, ($arguments4['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments4['encoding'] !== NULL ? $arguments4['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments4['doubleEncode']));

$output0 .= '" width="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = $currentVariableContainer->getOrNull('logoWidth');
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = NULL;
$arguments7['doubleEncode'] = true;
$renderChildrenClosure8 = function() {return NULL;};
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output0 .= (!is_string($value9) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments7['encoding'] !== NULL ? $arguments7['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments7['doubleEncode']));

$output0 .= '" height="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = $currentVariableContainer->getOrNull('logoHeight');
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = NULL;
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() {return NULL;};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());

$output0 .= (!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments10['encoding'] !== NULL ? $arguments10['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments10['doubleEncode']));

$output0 .= '" title="TYPO3 Content Management System" alt="" />
		</a>
		<span class="typo3-topbar-site-name">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments13 = array();
$arguments13['value'] = $currentVariableContainer->getOrNull('siteName');
$arguments13['keepQuotes'] = false;
$arguments13['encoding'] = NULL;
$arguments13['doubleEncode'] = true;
$renderChildrenClosure14 = function() {return NULL;};
$value15 = ($arguments13['value'] !== NULL ? $arguments13['value'] : $renderChildrenClosure14());

$output0 .= (!is_string($value15) ? $value15 : htmlspecialchars($value15, ($arguments13['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments13['encoding'] !== NULL ? $arguments13['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments13['doubleEncode']));

$output0 .= ' [';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments16 = array();
$arguments16['value'] = $currentVariableContainer->getOrNull('applicationVersion');
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = NULL;
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = function() {return NULL;};
$value18 = ($arguments16['value'] !== NULL ? $arguments16['value'] : $renderChildrenClosure17());

$output0 .= (!is_string($value18) ? $value18 : htmlspecialchars($value18, ($arguments16['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments16['encoding'] !== NULL ? $arguments16['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments16['doubleEncode']));

$output0 .= ']</span>
	</div>
	<div class="typo3-topbar-navigation" id="typo3-topbar-navigation">
		<ul class="typo3-topbar-navigation-items" data-typo3-role="typo3-module-menu">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments19 = array();
$arguments19['value'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('toolbar');
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output0 .= '
		</ul>
	</div>
</div>
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments21 = array();
$arguments21['value'] = NULL;
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('moduleMenu');
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output0 .= '
';


return $output0;
}


}
#1474035299    6900      