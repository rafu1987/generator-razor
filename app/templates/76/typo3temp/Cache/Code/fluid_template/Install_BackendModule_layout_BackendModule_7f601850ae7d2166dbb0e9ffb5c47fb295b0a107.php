<?php
class FluidCache_Install_BackendModule_layout_BackendModule_7f601850ae7d2166dbb0e9ffb5c47fb295b0a107 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments1 = array();
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
	This layout is for the \'backend module\' that only shows the \'Unlock the Install Tool\' message
	and then redirects to the step installation / install tool
';
};

$output0 .= '';

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Install\ViewHelpers\Be\ContainerViewHelper
$arguments3 = array();
$arguments3['pageTitle'] = 'Install tool';
// Rendering Array
$array4 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments5 = array();
$arguments5['path'] = 'Css/BackendModule/ShowEnableInstallToolButton.css';
$arguments5['extensionName'] = NULL;
$arguments5['absolute'] = false;
$renderChildrenClosure6 = function() {return NULL;};
$array4['0'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);
$arguments3['addCssFiles'] = $array4;
$arguments3['addJsFiles'] = NULL;
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output8 = '';

$output8 .= '

	<div id="typo3-docheader">
		<div class="typo3-docheader-functions"></div>
		<div class="typo3-docheader-buttons"></div>
	</div>
	<div id="typo3-docbody">
		<div id="typo3-inner-docbody">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments9 = array();
$arguments9['section'] = 'Content';
$arguments9['partial'] = NULL;
$arguments9['arguments'] = array (
);
$arguments9['optional'] = false;
$renderChildrenClosure10 = function() {return NULL;};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
		</div>
	</div>
';
return $output8;
};
$viewHelper11 = $self->getViewHelper('$viewHelper11', $renderingContext, 'TYPO3\CMS\Install\ViewHelpers\Be\ContainerViewHelper');
$viewHelper11->setArguments($arguments3);
$viewHelper11->setRenderingContext($renderingContext);
$viewHelper11->setRenderChildrenClosure($renderChildrenClosure7);
// End of ViewHelper TYPO3\CMS\Install\ViewHelpers\Be\ContainerViewHelper

$output0 .= $viewHelper11->initializeArgumentsAndRender();

$output0 .= '
';


return $output0;
}


}
#1474035306    3270      