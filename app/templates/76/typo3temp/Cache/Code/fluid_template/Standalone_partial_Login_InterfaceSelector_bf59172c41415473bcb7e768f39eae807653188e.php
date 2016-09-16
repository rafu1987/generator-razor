<?php
class FluidCache_Standalone_partial_Login_InterfaceSelector_bf59172c41415473bcb7e768f39eae807653188e extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('showInterfaceSelector'));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments4 = array();
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
		<div class="form-group t3js-login-interface-section" id="t3-login-interface-section">
			<div class="form-control-wrap">
				<div class="form-control-holder">
					<label for="t3-interfaces">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments7 = array();
$arguments7['key'] = 'login.interface';
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '</label>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments9 = array();
$arguments9['id'] = 't3-interfaces';
$arguments9['class'] = 'form-control';
$arguments9['name'] = 'interface';
$arguments9['options'] = $currentVariableContainer->getOrNull('interfaces');
$arguments9['optionValueField'] = 'interface';
$arguments9['optionLabelField'] = 'label';
$arguments9['additionalAttributes'] = NULL;
$arguments9['data'] = NULL;
$arguments9['value'] = NULL;
$arguments9['property'] = NULL;
$arguments9['dir'] = NULL;
$arguments9['lang'] = NULL;
$arguments9['style'] = NULL;
$arguments9['title'] = NULL;
$arguments9['accesskey'] = NULL;
$arguments9['tabindex'] = NULL;
$arguments9['onclick'] = NULL;
$arguments9['size'] = NULL;
$arguments9['disabled'] = NULL;
$arguments9['sortByOptionLabel'] = false;
$arguments9['selectAllByDefault'] = false;
$arguments9['errorClass'] = 'f3-form-error';
$arguments9['prependOptionLabel'] = NULL;
$arguments9['prependOptionValue'] = NULL;
$arguments9['multiple'] = false;
$renderChildrenClosure10 = function() {return NULL;};
$viewHelper11 = $self->getViewHelper('$viewHelper11', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper11->setArguments($arguments9);
$viewHelper11->setRenderingContext($renderingContext);
$viewHelper11->setRenderChildrenClosure($renderChildrenClosure10);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output6 .= $viewHelper11->initializeArgumentsAndRender();

$output6 .= '
				</div>
			</div>
		</div>
	';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments12 = array();
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output14 = '';

$output14 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments15 = array();
// Rendering Boolean node
$arguments15['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('interface'));
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output17 = '';

$output17 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments18 = array();
$arguments18['name'] = 'interface';
$arguments18['value'] = $currentVariableContainer->getOrNull('interface');
$arguments18['additionalAttributes'] = NULL;
$arguments18['data'] = NULL;
$arguments18['property'] = NULL;
$arguments18['class'] = NULL;
$arguments18['dir'] = NULL;
$arguments18['id'] = NULL;
$arguments18['lang'] = NULL;
$arguments18['style'] = NULL;
$arguments18['title'] = NULL;
$arguments18['accesskey'] = NULL;
$arguments18['tabindex'] = NULL;
$arguments18['onclick'] = NULL;
$renderChildrenClosure19 = function() {return NULL;};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper20->setArguments($arguments18);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output17 .= $viewHelper20->initializeArgumentsAndRender();

$output17 .= '
		';
return $output17;
};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
	';
return $output14;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output3 .= '
';
return $output3;
};
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output21 = '';

$output21 .= '
		<div class="form-group t3js-login-interface-section" id="t3-login-interface-section">
			<div class="form-control-wrap">
				<div class="form-control-holder">
					<label for="t3-interfaces">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments22 = array();
$arguments22['key'] = 'login.interface';
$arguments22['id'] = NULL;
$arguments22['default'] = NULL;
$arguments22['htmlEscape'] = NULL;
$arguments22['arguments'] = NULL;
$arguments22['extensionName'] = NULL;
$renderChildrenClosure23 = function() {return NULL;};

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '</label>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments24 = array();
$arguments24['id'] = 't3-interfaces';
$arguments24['class'] = 'form-control';
$arguments24['name'] = 'interface';
$arguments24['options'] = $currentVariableContainer->getOrNull('interfaces');
$arguments24['optionValueField'] = 'interface';
$arguments24['optionLabelField'] = 'label';
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['value'] = NULL;
$arguments24['property'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$arguments24['size'] = NULL;
$arguments24['disabled'] = NULL;
$arguments24['sortByOptionLabel'] = false;
$arguments24['selectAllByDefault'] = false;
$arguments24['errorClass'] = 'f3-form-error';
$arguments24['prependOptionLabel'] = NULL;
$arguments24['prependOptionValue'] = NULL;
$arguments24['multiple'] = false;
$renderChildrenClosure25 = function() {return NULL;};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper26->setArguments($arguments24);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output21 .= $viewHelper26->initializeArgumentsAndRender();

$output21 .= '
				</div>
			</div>
		</div>
	';
return $output21;
};
$arguments1['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output27 = '';

$output27 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments28 = array();
// Rendering Boolean node
$arguments28['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('interface'));
$arguments28['then'] = NULL;
$arguments28['else'] = NULL;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output30 = '';

$output30 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments31 = array();
$arguments31['name'] = 'interface';
$arguments31['value'] = $currentVariableContainer->getOrNull('interface');
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['property'] = NULL;
$arguments31['class'] = NULL;
$arguments31['dir'] = NULL;
$arguments31['id'] = NULL;
$arguments31['lang'] = NULL;
$arguments31['style'] = NULL;
$arguments31['title'] = NULL;
$arguments31['accesskey'] = NULL;
$arguments31['tabindex'] = NULL;
$arguments31['onclick'] = NULL;
$renderChildrenClosure32 = function() {return NULL;};
$viewHelper33 = $self->getViewHelper('$viewHelper33', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper33->setArguments($arguments31);
$viewHelper33->setRenderingContext($renderingContext);
$viewHelper33->setRenderChildrenClosure($renderChildrenClosure32);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output30 .= $viewHelper33->initializeArgumentsAndRender();

$output30 .= '
		';
return $output30;
};

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '
	';
return $output27;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';


return $output0;
}


}
#1474035265    10894     