<?php
class FluidCache_Standalone_partial_ButtonBar_cee7ca40619f7eb08f967107859c8002493feefc extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="btn-toolbar" role="toolbar" aria-label="">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments1 = array();
$arguments1['each'] = $currentVariableContainer->getOrNull('buttons');
$arguments1['as'] = 'buttonGroup';
$arguments1['key'] = '';
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments5 = array();
$arguments5['subject'] = NULL;
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('buttonGroup');
};
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext), 1);
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output8 = '';

$output8 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments9 = array();
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output11 = '';

$output11 .= '
				<div class="btn-group" role="group" aria-label="">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments12 = array();
$arguments12['each'] = $currentVariableContainer->getOrNull('buttonGroup');
$arguments12['as'] = 'button';
$arguments12['key'] = '';
$arguments12['reverse'] = false;
$arguments12['iteration'] = NULL;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output14 = '';

$output14 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments15 = array();
$arguments15['value'] = NULL;
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('button');
};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
					';
return $output14;
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
				</div>
			';
return $output11;
};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments17 = array();
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output19 = '';

$output19 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments20 = array();
$arguments20['value'] = NULL;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('buttonGroup'), '0', $renderingContext);
};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
			';
return $output19;
};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output8 .= '
		';
return $output8;
};
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output22 = '';

$output22 .= '
				<div class="btn-group" role="group" aria-label="">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments23 = array();
$arguments23['each'] = $currentVariableContainer->getOrNull('buttonGroup');
$arguments23['as'] = 'button';
$arguments23['key'] = '';
$arguments23['reverse'] = false;
$arguments23['iteration'] = NULL;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output25 = '';

$output25 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments26 = array();
$arguments26['value'] = NULL;
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('button');
};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
					';
return $output25;
};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
				</div>
			';
return $output22;
};
$arguments4['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output28 = '';

$output28 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments29 = array();
$arguments29['value'] = NULL;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('buttonGroup'), '0', $renderingContext);
};

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
			';
return $output28;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure7, $renderingContext);

$output3 .= '
	';
return $output3;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
</div>
';


return $output0;
}


}
#1474035301    7562      