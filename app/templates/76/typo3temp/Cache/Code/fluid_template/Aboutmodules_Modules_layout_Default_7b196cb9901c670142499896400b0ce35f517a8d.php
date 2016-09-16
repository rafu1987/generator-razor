<?php
class FluidCache_Aboutmodules_Modules_layout_Default_7b196cb9901c670142499896400b0ce35f517a8d extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$arguments1 = array();
// Rendering Array
$array2 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments3 = array();
$arguments3['path'] = 'Css/styles.css';
$arguments3['extensionName'] = NULL;
$arguments3['absolute'] = false;
$renderChildrenClosure4 = function() {return NULL;};
$array2['0'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);
$arguments1['includeCssFiles'] = $array2;
$arguments1['pageTitle'] = '';
$arguments1['loadExtJs'] = false;
$arguments1['loadExtJsTheme'] = true;
$arguments1['enableExtJsDebug'] = false;
$arguments1['loadJQuery'] = false;
$arguments1['includeJsFiles'] = NULL;
$arguments1['addJsInlineLabels'] = NULL;
$arguments1['includeRequireJsModules'] = NULL;
$arguments1['jQueryNamespace'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper');
$viewHelper6->setArguments($arguments1);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper

$output0 .= $viewHelper6->initializeArgumentsAndRender();

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments7 = array();
$arguments7['section'] = 'Content';
$arguments7['partial'] = NULL;
$arguments7['arguments'] = array (
);
$arguments7['optional'] = false;
$renderChildrenClosure8 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);


return $output0;
}


}
#1474035301    2646      