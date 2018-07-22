<?php

class partial_DocHeader_55d3e2f8d1ed5cf806a3c427155329a5dc303b3b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<div class="module-loading-indicator"></div>
<div class="module-docheader t3js-module-docheader">
	<div class="module-docheader-bar module-docheader-bar-navigation t3js-module-docheader-bar t3js-module-docheader-bar-navigation row">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
						<div class="module-docheader-bar-column-left col-xs-12 col-sm-4 col-md-3">
							<div class="form-inline row">
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
									<div class="form-group form-group-sm col-xs-6">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['section'] = NULL;
$arguments92['partial'] = NULL;
$arguments92['delegate'] = NULL;
$arguments92['renderable'] = NULL;
$arguments92['arguments'] = array (
);
$arguments92['optional'] = false;
$arguments92['default'] = NULL;
$arguments92['contentAs'] = NULL;
$arguments92['partial'] = 'Menus/SelectBoxJumpMenu';
// Rendering Array
$array94 = array();
$array95 = array (
);$array94['menu'] = $renderingContext->getVariableProvider()->getByPath('menu', $array95);
$arguments92['arguments'] = $array94;

$output91 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output91 .= '
									</div>
								';
return $output91;
};
$arguments88 = array();
$arguments88['each'] = NULL;
$arguments88['as'] = NULL;
$arguments88['key'] = NULL;
$arguments88['reverse'] = false;
$arguments88['iteration'] = NULL;
$array90 = array (
);$arguments88['each'] = $renderingContext->getVariableProvider()->getByPath('docHeader.menus', $array90);
$arguments88['as'] = 'menu';

$output87 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '
							</div>
						</div>
						<div class="module-docheader-bar-column-right col-xs-12 col-sm-8 col-md-9 text-right">
					';
return $output87;
};
$arguments85 = array();

$output84 .= '';

$output84 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
						<div class="module-docheader-bar-column-left col-xs-12 col-sm-3">
							<div class="form-inline">
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output102 = '';

$output102 .= '
									<div class="form-group form-group-sm">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments103 = array();
$arguments103['section'] = NULL;
$arguments103['partial'] = NULL;
$arguments103['delegate'] = NULL;
$arguments103['renderable'] = NULL;
$arguments103['arguments'] = array (
);
$arguments103['optional'] = false;
$arguments103['default'] = NULL;
$arguments103['contentAs'] = NULL;
$arguments103['partial'] = 'Menus/SelectBoxJumpMenu';
// Rendering Array
$array105 = array();
$array106 = array (
);$array105['menu'] = $renderingContext->getVariableProvider()->getByPath('menu', $array106);
$arguments103['arguments'] = $array105;

$output102 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output102 .= '
									</div>
								';
return $output102;
};
$arguments99 = array();
$arguments99['each'] = NULL;
$arguments99['as'] = NULL;
$arguments99['key'] = NULL;
$arguments99['reverse'] = false;
$arguments99['iteration'] = NULL;
$array101 = array (
);$arguments99['each'] = $renderingContext->getVariableProvider()->getByPath('docHeader.menus', $array101);
$arguments99['as'] = 'menu';

$output98 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output98 .= '
							</div>
						</div>
						<div class="module-docheader-bar-column-right col-xs-12 col-sm-9 text-right">
					';
return $output98;
};
$arguments96 = array();
$arguments96['if'] = NULL;

$output84 .= '';

$output84 .= '
				';
return $output84;
};
$arguments59 = array();
$arguments59['then'] = NULL;
$arguments59['else'] = NULL;
$arguments59['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array79 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$array82 = array (
);return $renderingContext->getVariableProvider()->getByPath('docHeader.menus', $array82);
};
$arguments80 = array();
$arguments80['subject'] = NULL;
$renderChildrenClosure81 = ($arguments80['subject'] !== null) ? function() use ($arguments80) { return $arguments80['subject']; } : $renderChildrenClosure81;$array79['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);
$array79['1'] = ' > 1';

$expression83 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments59['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression83(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)
					),
					$renderingContext
				);
$arguments59['__thenClosure'] = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
						<div class="module-docheader-bar-column-left col-xs-12 col-sm-4 col-md-3">
							<div class="form-inline row">
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
									<div class="form-group form-group-sm col-xs-6">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['section'] = NULL;
$arguments66['partial'] = NULL;
$arguments66['delegate'] = NULL;
$arguments66['renderable'] = NULL;
$arguments66['arguments'] = array (
);
$arguments66['optional'] = false;
$arguments66['default'] = NULL;
$arguments66['contentAs'] = NULL;
$arguments66['partial'] = 'Menus/SelectBoxJumpMenu';
// Rendering Array
$array68 = array();
$array69 = array (
);$array68['menu'] = $renderingContext->getVariableProvider()->getByPath('menu', $array69);
$arguments66['arguments'] = $array68;

$output65 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
									</div>
								';
return $output65;
};
$arguments62 = array();
$arguments62['each'] = NULL;
$arguments62['as'] = NULL;
$arguments62['key'] = NULL;
$arguments62['reverse'] = false;
$arguments62['iteration'] = NULL;
$array64 = array (
);$arguments62['each'] = $renderingContext->getVariableProvider()->getByPath('docHeader.menus', $array64);
$arguments62['as'] = 'menu';

$output61 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
							</div>
						</div>
						<div class="module-docheader-bar-column-right col-xs-12 col-sm-8 col-md-9 text-right">
					';
return $output61;
};
$arguments59['__elseClosures'][] = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
						<div class="module-docheader-bar-column-left col-xs-12 col-sm-3">
							<div class="form-inline">
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
									<div class="form-group form-group-sm">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['section'] = NULL;
$arguments75['partial'] = NULL;
$arguments75['delegate'] = NULL;
$arguments75['renderable'] = NULL;
$arguments75['arguments'] = array (
);
$arguments75['optional'] = false;
$arguments75['default'] = NULL;
$arguments75['contentAs'] = NULL;
$arguments75['partial'] = 'Menus/SelectBoxJumpMenu';
// Rendering Array
$array77 = array();
$array78 = array (
);$array77['menu'] = $renderingContext->getVariableProvider()->getByPath('menu', $array78);
$arguments75['arguments'] = $array77;

$output74 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
									</div>
								';
return $output74;
};
$arguments71 = array();
$arguments71['each'] = NULL;
$arguments71['as'] = NULL;
$arguments71['key'] = NULL;
$arguments71['reverse'] = false;
$arguments71['iteration'] = NULL;
$array73 = array (
);$arguments71['each'] = $renderingContext->getVariableProvider()->getByPath('docHeader.menus', $array73);
$arguments71['as'] = 'menu';

$output70 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
							</div>
						</div>
						<div class="module-docheader-bar-column-right col-xs-12 col-sm-9 text-right">
					';
return $output70;
};

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '
			';
return $output58;
};
$arguments56 = array();

$output55 .= '';

$output55 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return '
				<div class="module-docheader-bar-column-left col-xs-12 text-right">
			';
};
$arguments107 = array();
$arguments107['if'] = NULL;

$output55 .= '';

$output55 .= '
		';
return $output55;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array52 = array();
$array53 = array (
);$array52['0'] = $renderingContext->getVariableProvider()->getByPath('docHeader.menus', $array53);

$expression54 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression54(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
						<div class="module-docheader-bar-column-left col-xs-12 col-sm-4 col-md-3">
							<div class="form-inline row">
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
									<div class="form-group form-group-sm col-xs-6">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['section'] = NULL;
$arguments37['partial'] = NULL;
$arguments37['delegate'] = NULL;
$arguments37['renderable'] = NULL;
$arguments37['arguments'] = array (
);
$arguments37['optional'] = false;
$arguments37['default'] = NULL;
$arguments37['contentAs'] = NULL;
$arguments37['partial'] = 'Menus/SelectBoxJumpMenu';
// Rendering Array
$array39 = array();
$array40 = array (
);$array39['menu'] = $renderingContext->getVariableProvider()->getByPath('menu', $array40);
$arguments37['arguments'] = $array39;

$output36 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
									</div>
								';
return $output36;
};
$arguments33 = array();
$arguments33['each'] = NULL;
$arguments33['as'] = NULL;
$arguments33['key'] = NULL;
$arguments33['reverse'] = false;
$arguments33['iteration'] = NULL;
$array35 = array (
);$arguments33['each'] = $renderingContext->getVariableProvider()->getByPath('docHeader.menus', $array35);
$arguments33['as'] = 'menu';

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
							</div>
						</div>
						<div class="module-docheader-bar-column-right col-xs-12 col-sm-8 col-md-9 text-right">
					';
return $output32;
};
$arguments30 = array();

$output29 .= '';

$output29 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
						<div class="module-docheader-bar-column-left col-xs-12 col-sm-3">
							<div class="form-inline">
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
									<div class="form-group form-group-sm">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['section'] = NULL;
$arguments48['partial'] = NULL;
$arguments48['delegate'] = NULL;
$arguments48['renderable'] = NULL;
$arguments48['arguments'] = array (
);
$arguments48['optional'] = false;
$arguments48['default'] = NULL;
$arguments48['contentAs'] = NULL;
$arguments48['partial'] = 'Menus/SelectBoxJumpMenu';
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['menu'] = $renderingContext->getVariableProvider()->getByPath('menu', $array51);
$arguments48['arguments'] = $array50;

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
									</div>
								';
return $output47;
};
$arguments44 = array();
$arguments44['each'] = NULL;
$arguments44['as'] = NULL;
$arguments44['key'] = NULL;
$arguments44['reverse'] = false;
$arguments44['iteration'] = NULL;
$array46 = array (
);$arguments44['each'] = $renderingContext->getVariableProvider()->getByPath('docHeader.menus', $array46);
$arguments44['as'] = 'menu';

$output43 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output43 .= '
							</div>
						</div>
						<div class="module-docheader-bar-column-right col-xs-12 col-sm-9 text-right">
					';
return $output43;
};
$arguments41 = array();
$arguments41['if'] = NULL;

$output29 .= '';

$output29 .= '
				';
return $output29;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array24 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$array27 = array (
);return $renderingContext->getVariableProvider()->getByPath('docHeader.menus', $array27);
};
$arguments25 = array();
$arguments25['subject'] = NULL;
$renderChildrenClosure26 = ($arguments25['subject'] !== null) ? function() use ($arguments25) { return $arguments25['subject']; } : $renderChildrenClosure26;$array24['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);
$array24['1'] = ' > 1';

$expression28 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression28(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
						<div class="module-docheader-bar-column-left col-xs-12 col-sm-4 col-md-3">
							<div class="form-inline row">
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
									<div class="form-group form-group-sm col-xs-6">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['section'] = NULL;
$arguments11['partial'] = NULL;
$arguments11['delegate'] = NULL;
$arguments11['renderable'] = NULL;
$arguments11['arguments'] = array (
);
$arguments11['optional'] = false;
$arguments11['default'] = NULL;
$arguments11['contentAs'] = NULL;
$arguments11['partial'] = 'Menus/SelectBoxJumpMenu';
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['menu'] = $renderingContext->getVariableProvider()->getByPath('menu', $array14);
$arguments11['arguments'] = $array13;

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
									</div>
								';
return $output10;
};
$arguments7 = array();
$arguments7['each'] = NULL;
$arguments7['as'] = NULL;
$arguments7['key'] = NULL;
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$array9 = array (
);$arguments7['each'] = $renderingContext->getVariableProvider()->getByPath('docHeader.menus', $array9);
$arguments7['as'] = 'menu';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
							</div>
						</div>
						<div class="module-docheader-bar-column-right col-xs-12 col-sm-8 col-md-9 text-right">
					';
return $output6;
};
$arguments4['__elseClosures'][] = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
						<div class="module-docheader-bar-column-left col-xs-12 col-sm-3">
							<div class="form-inline">
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
									<div class="form-group form-group-sm">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['section'] = NULL;
$arguments20['partial'] = NULL;
$arguments20['delegate'] = NULL;
$arguments20['renderable'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['optional'] = false;
$arguments20['default'] = NULL;
$arguments20['contentAs'] = NULL;
$arguments20['partial'] = 'Menus/SelectBoxJumpMenu';
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['menu'] = $renderingContext->getVariableProvider()->getByPath('menu', $array23);
$arguments20['arguments'] = $array22;

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
									</div>
								';
return $output19;
};
$arguments16 = array();
$arguments16['each'] = NULL;
$arguments16['as'] = NULL;
$arguments16['key'] = NULL;
$arguments16['reverse'] = false;
$arguments16['iteration'] = NULL;
$array18 = array (
);$arguments16['each'] = $renderingContext->getVariableProvider()->getByPath('docHeader.menus', $array18);
$arguments16['as'] = 'menu';

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
							</div>
						</div>
						<div class="module-docheader-bar-column-right col-xs-12 col-sm-9 text-right">
					';
return $output15;
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
			';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
				<div class="module-docheader-bar-column-left col-xs-12 text-right">
			';
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
				<span class="typo3-docheader-pagePath">
				 	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['key'] = NULL;
$arguments115['id'] = NULL;
$arguments115['default'] = NULL;
$arguments115['htmlEscape'] = NULL;
$arguments115['arguments'] = NULL;
$arguments115['extensionName'] = NULL;
$arguments115['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.path';

$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext)]);

$output114 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$array119 = array (
);return $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.path', $array119);
};
$arguments117 = array();
$arguments117['value'] = NULL;

$output114 .= isset($arguments117['value']) ? $arguments117['value'] : $renderChildrenClosure118();

$output114 .= '
				</span>
				<strong>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
						';
$array123 = array (
);
$output122 .= $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformationIcon', $array123);

$output122 .= ' ';
$array124 = array (
);
$output122 .= $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformationTitle', $array124);

$output122 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output130 = '';

$output130 .= '[';
$array131 = array (
);
$output130 .= $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformationUid', $array131);

$output130 .= ']';
return $output130;
};
$arguments125 = array();
$arguments125['then'] = NULL;
$arguments125['else'] = NULL;
$arguments125['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array127 = array();
$array128 = array (
);$array127['0'] = $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformationUid', $array128);

$expression129 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments125['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression129(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array127)
					),
					$renderingContext
				);
$arguments125['__thenClosure'] = $renderChildrenClosure126;

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output122 .= '
					';
return $output122;
};
$arguments120 = array();
$arguments120['value'] = NULL;

$output114 .= isset($arguments120['value']) ? $arguments120['value'] : $renderChildrenClosure121();

$output114 .= '
				</strong>
				';
$array132 = array (
);
$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformationAdditionalInfo', $array132)]);

$output114 .= '
			';
return $output114;
};
$arguments109 = array();
$arguments109['then'] = NULL;
$arguments109['else'] = NULL;
$arguments109['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array111 = array();
$array112 = array (
);$array111['0'] = $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformation', $array112);

$expression113 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments109['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression113(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array111)
					),
					$renderingContext
				);
$arguments109['__thenClosure'] = $renderChildrenClosure110;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output0 .= '
		</div>
	</div>
	<div class="module-docheader-bar module-docheader-bar-buttons t3js-module-docheader-bar t3js-module-docheader-bar-buttons">
		<div class="module-docheader-bar-column-left">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['section'] = NULL;
$arguments133['partial'] = NULL;
$arguments133['delegate'] = NULL;
$arguments133['renderable'] = NULL;
$arguments133['arguments'] = array (
);
$arguments133['optional'] = false;
$arguments133['default'] = NULL;
$arguments133['contentAs'] = NULL;
$arguments133['partial'] = 'ButtonBar';
// Rendering Array
$array135 = array();
$array136 = array (
);$array135['buttons'] = $renderingContext->getVariableProvider()->getByPath('docHeader.buttons.left', $array136);
$arguments133['arguments'] = $array135;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output0 .= '
		</div>
		<div class="module-docheader-bar-column-right">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments137 = array();
$arguments137['section'] = NULL;
$arguments137['partial'] = NULL;
$arguments137['delegate'] = NULL;
$arguments137['renderable'] = NULL;
$arguments137['arguments'] = array (
);
$arguments137['optional'] = false;
$arguments137['default'] = NULL;
$arguments137['contentAs'] = NULL;
$arguments137['partial'] = 'ButtonBar';
// Rendering Array
$array139 = array();
$array140 = array (
);$array139['buttons'] = $renderingContext->getVariableProvider()->getByPath('docHeader.buttons.right', $array140);
$arguments137['arguments'] = $array139;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output0 .= '
		</div>
	</div>
</div>
';

return $output0;
}


}
#