<?php
class FluidCache_Standalone_partial_DocHeader_c8f1256065ad5d8f7a95e0b45606e4ad728aa542 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="module-loading-indicator"></div>
<div class="module-docheader t3js-module-docheader">
	<div class="module-docheader-bar module-docheader-bar-navigation t3js-module-docheader-bar t3js-module-docheader-bar-navigation">
		<div class="module-docheader-bar-column-left">
			<div class="form-inline">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments1 = array();
$arguments1['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('docHeader'), 'menus', $renderingContext);
$arguments1['as'] = 'menu';
$arguments1['key'] = '';
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
					<div class="form-group form-group-sm">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments4 = array();
$arguments4['partial'] = 'Menus/SelectBoxJumpMenu';
// Rendering Array
$array5 = array();
$array5['menu'] = $currentVariableContainer->getOrNull('menu');
$arguments4['arguments'] = $array5;
$arguments4['section'] = NULL;
$arguments4['optional'] = false;
$renderChildrenClosure6 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure6, $renderingContext);

$output3 .= '
					</div>
				';
return $output3;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
			</div>
		</div>
		<div class="module-docheader-bar-column-right">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments7 = array();
// Rendering Boolean node
$arguments7['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('docHeader'), 'metaInformation.recordInformation', $renderingContext));
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
				<span class="typo3-docheader-pagePath">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments10 = array();
$arguments10['key'] = 'LLL:EXT:lang/locallang_core.xlf:labels.path';
$arguments10['id'] = NULL;
$arguments10['default'] = NULL;
$arguments10['htmlEscape'] = NULL;
$arguments10['arguments'] = NULL;
$arguments10['extensionName'] = NULL;
$renderChildrenClosure11 = function() {return NULL;};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments12 = array();
$arguments12['value'] = NULL;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('docHeader'), 'metaInformation.path', $renderingContext);
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output9 .= '</span> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments14 = array();
$arguments14['value'] = NULL;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('docHeader'), 'metaInformation.recordInformation', $renderingContext);
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output9 .= '
			';
return $output9;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
		</div>
	</div>
	<div class="module-docheader-bar module-docheader-bar-buttons t3js-module-docheader-bar t3js-module-docheader-bar-buttons">
		<div class="module-docheader-bar-column-left">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments16 = array();
$arguments16['partial'] = 'ButtonBar';
// Rendering Array
$array17 = array();
$array17['buttons'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('docHeader'), 'buttons.left', $renderingContext);
$arguments16['arguments'] = $array17;
$arguments16['section'] = NULL;
$arguments16['optional'] = false;
$renderChildrenClosure18 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments16, $renderChildrenClosure18, $renderingContext);

$output0 .= '
		</div>
		<div class="module-docheader-bar-column-right">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments19 = array();
$arguments19['partial'] = 'ButtonBar';
// Rendering Array
$array20 = array();
$array20['buttons'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('docHeader'), 'buttons.right', $renderingContext);
$arguments19['arguments'] = $array20;
$arguments19['section'] = NULL;
$arguments19['optional'] = false;
$renderChildrenClosure21 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure21, $renderingContext);

$output0 .= '
		</div>
	</div>
</div>';


return $output0;
}


}
#1474035301    6787      