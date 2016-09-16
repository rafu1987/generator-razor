<?php
class FluidCache_Install_BackendModule_action_showEnableInstallToolButton_5e50fed771ba8679b44577a946540c6d23d94a60 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return 'BackendModule';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments1 = array();
$arguments1['action'] = 'enableInstallTool';
$arguments1['method'] = 'post';
$arguments1['id'] = 't3-install-form-unlock';
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['controller'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['pluginName'] = NULL;
$arguments1['pageUid'] = NULL;
$arguments1['object'] = NULL;
$arguments1['pageType'] = 0;
$arguments1['noCache'] = false;
$arguments1['noCacheHash'] = false;
$arguments1['section'] = '';
$arguments1['format'] = '';
$arguments1['additionalParams'] = array (
);
$arguments1['absolute'] = false;
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['fieldNamePrefix'] = NULL;
$arguments1['actionUri'] = NULL;
$arguments1['objectName'] = NULL;
$arguments1['hiddenFieldClassName'] = NULL;
$arguments1['enctype'] = NULL;
$arguments1['name'] = NULL;
$arguments1['onreset'] = NULL;
$arguments1['onsubmit'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments4 = array();
$arguments4['name'] = 'installToolEnableToken';
$arguments4['value'] = $currentVariableContainer->getOrNull('installToolEnableToken');
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['property'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output3 .= $viewHelper6->initializeArgumentsAndRender();

$output3 .= '
		<div id="container">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments7 = array();
$arguments7['state'] = '-1';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments8 = array();
$arguments8['key'] = 'LLL:EXT:install/Resources/Private/Language/BackendModule.xlf:confirmUnlockInstallToolTitle';
$arguments8['id'] = NULL;
$arguments8['default'] = NULL;
$arguments8['htmlEscape'] = NULL;
$arguments8['arguments'] = NULL;
$arguments8['extensionName'] = NULL;
$renderChildrenClosure9 = function() {return NULL;};
$arguments7['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);
$arguments7['message'] = NULL;
$arguments7['iconName'] = NULL;
$arguments7['disableIcon'] = false;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output11 = '';

$output11 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments12 = array();
$arguments12['key'] = 'LLL:EXT:install/Resources/Private/Language/BackendModule.xlf:confirmUnlockInstallToolMessage';
$arguments12['id'] = NULL;
$arguments12['default'] = NULL;
$arguments12['htmlEscape'] = NULL;
$arguments12['arguments'] = NULL;
$arguments12['extensionName'] = NULL;
$renderChildrenClosure13 = function() {return NULL;};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
				<button class="btn btn-info" value="enableInstallTool">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments14 = array();
$arguments14['key'] = 'LLL:EXT:install/Resources/Private/Language/BackendModule.xlf:confirmUnlockInstallToolButton';
$arguments14['id'] = NULL;
$arguments14['default'] = NULL;
$arguments14['htmlEscape'] = NULL;
$arguments14['arguments'] = NULL;
$arguments14['extensionName'] = NULL;
$renderChildrenClosure15 = function() {return NULL;};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output11 .= '
				</button>
			';
return $output11;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments7, $renderChildrenClosure10, $renderingContext);

$output3 .= '
		</div>
	';
return $output3;
};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper16->setArguments($arguments1);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper16->initializeArgumentsAndRender();

$output0 .= '
';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output17 = '';

$output17 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments18 = array();
$arguments18['name'] = 'BackendModule';
$renderChildrenClosure19 = function() {return NULL;};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper20->setArguments($arguments18);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output17 .= $viewHelper20->initializeArgumentsAndRender();

$output17 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments21 = array();
$arguments21['name'] = 'Content';
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output23 = '';

$output23 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments24 = array();
$arguments24['action'] = 'enableInstallTool';
$arguments24['method'] = 'post';
$arguments24['id'] = 't3-install-form-unlock';
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['arguments'] = array (
);
$arguments24['controller'] = NULL;
$arguments24['extensionName'] = NULL;
$arguments24['pluginName'] = NULL;
$arguments24['pageUid'] = NULL;
$arguments24['object'] = NULL;
$arguments24['pageType'] = 0;
$arguments24['noCache'] = false;
$arguments24['noCacheHash'] = false;
$arguments24['section'] = '';
$arguments24['format'] = '';
$arguments24['additionalParams'] = array (
);
$arguments24['absolute'] = false;
$arguments24['addQueryString'] = false;
$arguments24['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments24['fieldNamePrefix'] = NULL;
$arguments24['actionUri'] = NULL;
$arguments24['objectName'] = NULL;
$arguments24['hiddenFieldClassName'] = NULL;
$arguments24['enctype'] = NULL;
$arguments24['name'] = NULL;
$arguments24['onreset'] = NULL;
$arguments24['onsubmit'] = NULL;
$arguments24['class'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output26 = '';

$output26 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments27 = array();
$arguments27['name'] = 'installToolEnableToken';
$arguments27['value'] = $currentVariableContainer->getOrNull('installToolEnableToken');
$arguments27['additionalAttributes'] = NULL;
$arguments27['data'] = NULL;
$arguments27['property'] = NULL;
$arguments27['class'] = NULL;
$arguments27['dir'] = NULL;
$arguments27['id'] = NULL;
$arguments27['lang'] = NULL;
$arguments27['style'] = NULL;
$arguments27['title'] = NULL;
$arguments27['accesskey'] = NULL;
$arguments27['tabindex'] = NULL;
$arguments27['onclick'] = NULL;
$renderChildrenClosure28 = function() {return NULL;};
$viewHelper29 = $self->getViewHelper('$viewHelper29', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper29->setArguments($arguments27);
$viewHelper29->setRenderingContext($renderingContext);
$viewHelper29->setRenderChildrenClosure($renderChildrenClosure28);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output26 .= $viewHelper29->initializeArgumentsAndRender();

$output26 .= '
		<div id="container">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments30 = array();
$arguments30['state'] = '-1';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments31 = array();
$arguments31['key'] = 'LLL:EXT:install/Resources/Private/Language/BackendModule.xlf:confirmUnlockInstallToolTitle';
$arguments31['id'] = NULL;
$arguments31['default'] = NULL;
$arguments31['htmlEscape'] = NULL;
$arguments31['arguments'] = NULL;
$arguments31['extensionName'] = NULL;
$renderChildrenClosure32 = function() {return NULL;};
$arguments30['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);
$arguments30['message'] = NULL;
$arguments30['iconName'] = NULL;
$arguments30['disableIcon'] = false;
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output34 = '';

$output34 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments35 = array();
$arguments35['key'] = 'LLL:EXT:install/Resources/Private/Language/BackendModule.xlf:confirmUnlockInstallToolMessage';
$arguments35['id'] = NULL;
$arguments35['default'] = NULL;
$arguments35['htmlEscape'] = NULL;
$arguments35['arguments'] = NULL;
$arguments35['extensionName'] = NULL;
$renderChildrenClosure36 = function() {return NULL;};

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
				<button class="btn btn-info" value="enableInstallTool">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments37 = array();
$arguments37['key'] = 'LLL:EXT:install/Resources/Private/Language/BackendModule.xlf:confirmUnlockInstallToolButton';
$arguments37['id'] = NULL;
$arguments37['default'] = NULL;
$arguments37['htmlEscape'] = NULL;
$arguments37['arguments'] = NULL;
$arguments37['extensionName'] = NULL;
$renderChildrenClosure38 = function() {return NULL;};

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output34 .= '
				</button>
			';
return $output34;
};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments30, $renderChildrenClosure33, $renderingContext);

$output26 .= '
		</div>
	';
return $output26;
};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper39->setArguments($arguments24);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output23 .= $viewHelper39->initializeArgumentsAndRender();

$output23 .= '
';
return $output23;
};

$output17 .= '';

$output17 .= '
';


return $output17;
}


}
#1474035306    13270     