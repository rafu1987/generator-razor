<?php
class FluidCache_Standalone_template_file_Module_a1ae598125223668435d8473c0128c7f28f024e2 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="module" data-module-id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = $currentVariableContainer->getOrNull('moduleId');
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = NULL;
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() {return NULL;};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1['encoding'] !== NULL ? $arguments1['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1['doubleEncode']));

$output0 .= '" data-module-name="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments4 = array();
$arguments4['value'] = $currentVariableContainer->getOrNull('moduleName');
$arguments4['keepQuotes'] = false;
$arguments4['encoding'] = NULL;
$arguments4['doubleEncode'] = true;
$renderChildrenClosure5 = function() {return NULL;};
$value6 = ($arguments4['value'] !== NULL ? $arguments4['value'] : $renderChildrenClosure5());

$output0 .= (!is_string($value6) ? $value6 : htmlspecialchars($value6, ($arguments4['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments4['encoding'] !== NULL ? $arguments4['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments4['doubleEncode']));

$output0 .= '">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments7 = array();
// Rendering Boolean node
$arguments7['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('formTag'));
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments10 = array();
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output12 = '';

$output12 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments13 = array();
$arguments13['value'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('formTag');
};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
		';
return $output12;
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
	';
return $output9;
};
$arguments7['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output15 = '';

$output15 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments16 = array();
$arguments16['value'] = NULL;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('formTag');
};

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
		';
return $output15;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments18 = array();
// Rendering Boolean node
$arguments18['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('docHeader'), 'enabled', $renderingContext));
$arguments18['then'] = NULL;
$arguments18['else'] = NULL;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output20 = '';

$output20 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments21 = array();
$arguments21['partial'] = 'DocHeader';
// Rendering Array
$array22 = array();
$array22['docHeader'] = $currentVariableContainer->getOrNull('docHeader');
$arguments21['arguments'] = $array22;
$arguments21['section'] = NULL;
$arguments21['optional'] = false;
$renderChildrenClosure23 = function() {return NULL;};

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments21, $renderChildrenClosure23, $renderingContext);

$output20 .= '
	';
return $output20;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output0 .= '
	<div class="module-body t3js-module-body">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments24 = array();
$arguments24['as'] = 'flashMessages';
$arguments24['queueIdentifier'] = $currentVariableContainer->getOrNull('flashMessageQueueIdentifier');
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['renderMode'] = NULL;
$arguments24['class'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments27 = array();
$arguments27['each'] = $currentVariableContainer->getOrNull('flashMessages');
$arguments27['as'] = 'flashMessage';
$arguments27['key'] = '';
$arguments27['reverse'] = false;
$arguments27['iteration'] = NULL;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output29 = '';

$output29 .= '
				<div class="alert ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments30 = array();
$arguments30['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flashMessage'), 'class', $renderingContext);
$arguments30['keepQuotes'] = false;
$arguments30['encoding'] = NULL;
$arguments30['doubleEncode'] = true;
$renderChildrenClosure31 = function() {return NULL;};
$value32 = ($arguments30['value'] !== NULL ? $arguments30['value'] : $renderChildrenClosure31());

$output29 .= (!is_string($value32) ? $value32 : htmlspecialchars($value32, ($arguments30['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments30['encoding'] !== NULL ? $arguments30['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments30['doubleEncode']));

$output29 .= '">
					<div class="media">
						<div class="media-left">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments33 = array();
$arguments33['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flashMessage'), 'iconName', $renderingContext);
$arguments33['keepQuotes'] = false;
$arguments33['encoding'] = NULL;
$arguments33['doubleEncode'] = true;
$renderChildrenClosure34 = function() {return NULL;};
$value35 = ($arguments33['value'] !== NULL ? $arguments33['value'] : $renderChildrenClosure34());

$output29 .= (!is_string($value35) ? $value35 : htmlspecialchars($value35, ($arguments33['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments33['encoding'] !== NULL ? $arguments33['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments33['doubleEncode']));

$output29 .= ' fa-stack-1x"></i>
							</span>
						</div>
						<div class="media-body">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments36 = array();
// Rendering Boolean node
$arguments36['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flashMessage'), 'title', $renderingContext));
$arguments36['then'] = NULL;
$arguments36['else'] = NULL;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output38 = '';

$output38 .= '
								<h4 class="alert-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments39 = array();
$arguments39['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flashMessage'), 'title', $renderingContext);
$arguments39['keepQuotes'] = false;
$arguments39['encoding'] = NULL;
$arguments39['doubleEncode'] = true;
$renderChildrenClosure40 = function() {return NULL;};
$value41 = ($arguments39['value'] !== NULL ? $arguments39['value'] : $renderChildrenClosure40());

$output38 .= (!is_string($value41) ? $value41 : htmlspecialchars($value41, ($arguments39['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments39['encoding'] !== NULL ? $arguments39['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments39['doubleEncode']));

$output38 .= '</h4>
							';
return $output38;
};

$output29 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output29 .= '
							<div class="alert-message">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments42 = array();
$arguments42['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flashMessage'), 'message', $renderingContext);
$arguments42['keepQuotes'] = false;
$arguments42['encoding'] = NULL;
$arguments42['doubleEncode'] = true;
$renderChildrenClosure43 = function() {return NULL;};
$value44 = ($arguments42['value'] !== NULL ? $arguments42['value'] : $renderChildrenClosure43());

$output29 .= (!is_string($value44) ? $value44 : htmlspecialchars($value44, ($arguments42['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments42['encoding'] !== NULL ? $arguments42['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments42['doubleEncode']));

$output29 .= '</div>
						</div>
					</div>
				</div>
			';
return $output29;
};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '
		';
return $output26;
};
$viewHelper45 = $self->getViewHelper('$viewHelper45', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper45->setArguments($arguments24);
$viewHelper45->setRenderingContext($renderingContext);
$viewHelper45->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output0 .= $viewHelper45->initializeArgumentsAndRender();

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments46 = array();
$arguments46['value'] = NULL;
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('content');
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output0 .= '
	</div>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments48 = array();
// Rendering Boolean node
$arguments48['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('formTag'));
$arguments48['then'] = NULL;
$arguments48['else'] = NULL;
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output50 = '';

$output50 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments51 = array();
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			</form>
		';
};

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
	';
return $output50;
};
$arguments48['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			</form>
		';
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output0 .= '
</div>';


return $output0;
}


}
#1474035301    14539     