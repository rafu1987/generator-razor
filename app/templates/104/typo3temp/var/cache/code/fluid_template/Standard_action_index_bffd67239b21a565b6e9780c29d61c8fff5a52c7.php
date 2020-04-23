<?php

class Standard_action_index_bffd67239b21a565b6e9780c29d61c8fff5a52c7 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * section Navigation
 */
public function section_cf03cf2e9cdf95a20af09137dfb9071db0c31bf2(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
        <ul
            class="modulemenu-group-container"
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array10 = array();
$array11 = array (
);$array10['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('parent', $array11)]);

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression12(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)
					),
					$renderingContext
				);
$output13 = '';

$output13 .= 'aria-visible="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('parent.collapsed', $array17);

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$arguments14['then'] = 'false';
$arguments14['else'] = 'true';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '"';
$arguments8['then'] = $output13;

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$arguments19['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('parent', $array22)]);

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$arguments24['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array26 = array();
$array27 = array (
);$array26['0'] = $renderingContext->getVariableProvider()->getByPath('parent.collapsed', $array27);

$expression28 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments24['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression28(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)
					),
					$renderingContext
				);
$arguments24['then'] = 'style="display: none"';
$arguments19['then'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output7 .= '
        >
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
                <li
                    data-level="';
$array33 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('currentLevel', $array33)]);

$output32 .= '"
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['then'] = NULL;
$arguments34['else'] = NULL;
$arguments34['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.children', $array37)]);
$array36['1'] = ' && ';
$array38 = array (
);$array36['2'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('currentLevel', $array38)]);
$array36['3'] = ' == 1';

$expression39 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) == 1));};
$arguments34['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression39(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array36)
					),
					$renderingContext
				);
$output40 = '';

$output40 .= 'class="modulemenu-group modulemenu-group-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['then'] = NULL;
$arguments41['else'] = NULL;
$arguments41['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array43 = array();
$array44 = array (
);$array43['0'] = $renderingContext->getVariableProvider()->getByPath('module.collapsed', $array44);

$expression45 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments41['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression45(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array43)
					),
					$renderingContext
				);
$arguments41['then'] = 'collapsed';
$arguments41['else'] = 'expanded';

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output40 .= '"';
$arguments34['then'] = $output40;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output32 .= '
                >
                    <button
                        title="';
$array46 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.description', $array46)]);

$output32 .= '"
                        class="modulemenu-action t3js-modulemenu-action"
                        role="menuitem"
                        id="';
$array47 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.name', $array47)]);

$output32 .= '"
                        data-modulename="';
$array48 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.name', $array48)]);

$output32 .= '"
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['then'] = NULL;
$arguments49['else'] = NULL;
$arguments49['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array51 = array();
$array52 = array (
);$array51['0'] = $renderingContext->getVariableProvider()->getByPath('module.link', $array52);

$expression53 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments49['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression53(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);
$output54 = '';

$output54 .= 'data-link="';
$array55 = array (
);
$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.link', $array55)]);

$output54 .= '"';
$arguments49['then'] = $output54;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output32 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['then'] = NULL;
$arguments56['else'] = NULL;
$arguments56['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array58 = array();
$array59 = array (
);$array58['0'] = $renderingContext->getVariableProvider()->getByPath('module.navigationComponentId', $array59);

$expression60 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments56['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression60(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array58)
					),
					$renderingContext
				);
$output61 = '';

$output61 .= 'data-navigationcomponentid="';
$array62 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.navigationComponentId', $array62)]);

$output61 .= '"';
$arguments56['then'] = $output61;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output32 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['then'] = NULL;
$arguments63['else'] = NULL;
$arguments63['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array65 = array();
$array66 = array (
);$array65['0'] = $renderingContext->getVariableProvider()->getByPath('module.navigationFrameScript', $array66);

$expression67 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments63['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression67(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array65)
					),
					$renderingContext
				);
$output68 = '';

$output68 .= 'data-navigationframescript="';
$array69 = array (
);
$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.navigationFrameScript', $array69)]);

$output68 .= '"';
$arguments63['then'] = $output68;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output32 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$arguments70['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array72 = array();
$array73 = array (
);$array72['0'] = $renderingContext->getVariableProvider()->getByPath('module.navigationFrameScriptParameters', $array73);

$expression74 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments70['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression74(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array72)
					),
					$renderingContext
				);
$output75 = '';

$output75 .= 'data-navigationframescriptparameters="';
$array76 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.navigationFrameScriptParameters', $array76)]);

$output75 .= '"';
$arguments70['then'] = $output75;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output32 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['then'] = NULL;
$arguments77['else'] = NULL;
$arguments77['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.children', $array80)]);
$array79['1'] = ' && ';
$array81 = array (
);$array79['2'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('currentLevel', $array81)]);
$array79['3'] = ' == 1';

$expression82 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) == 1));};
$arguments77['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression82(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)
					),
					$renderingContext
				);
$output83 = '';

$output83 .= 'aria-haspopup="true" aria-expanded="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['then'] = NULL;
$arguments84['else'] = NULL;
$arguments84['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array86 = array();
$array87 = array (
);$array86['0'] = $renderingContext->getVariableProvider()->getByPath('module.collapsed', $array87);

$expression88 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments84['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression88(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array86)
					),
					$renderingContext
				);
$arguments84['then'] = 'false';
$arguments84['else'] = 'true';

$output83 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output83 .= '"';
$arguments77['then'] = $output83;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output32 .= '
                    >
                        <span class="modulemenu-icon" aria-hidden="true">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$array91 = array (
);return $renderingContext->getVariableProvider()->getByPath('module.icon', $array91);
};
$arguments89 = array();
$arguments89['value'] = NULL;

$output32 .= isset($arguments89['value']) ? $arguments89['value'] : $renderChildrenClosure90();

$output32 .= '</span>
                        <span class="modulemenu-name">';
$array92 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.title', $array92)]);

$output32 .= '</span>
                        <span class="modulemenu-indicator" aria-hidden="true"></span>
                    </button>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['section'] = NULL;
$arguments93['partial'] = NULL;
$arguments93['delegate'] = NULL;
$arguments93['renderable'] = NULL;
$arguments93['arguments'] = array (
);
$arguments93['optional'] = false;
$arguments93['default'] = NULL;
$arguments93['contentAs'] = NULL;
$arguments93['debug'] = true;
$arguments93['section'] = 'Navigation';
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['modules'] = $renderingContext->getVariableProvider()->getByPath('module.children', $array96);
$array97 = array (
);$array95['parent'] = $renderingContext->getVariableProvider()->getByPath('module', $array97);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string98 = '{currentLevel + 1}';
$array99 = array (
  0 => '{currentLevel + 1}',
  1 => '{currentLevel + 1}',
);
$array95['currentLevel'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string98, $array99);
$arguments93['arguments'] = $array95;

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output32 .= '
                </li>
            ';
return $output32;
};
$arguments29 = array();
$arguments29['each'] = NULL;
$arguments29['as'] = NULL;
$arguments29['key'] = NULL;
$arguments29['reverse'] = false;
$arguments29['iteration'] = NULL;
$array31 = array (
);$arguments29['each'] = $renderingContext->getVariableProvider()->getByPath('modules', $array31);
$arguments29['as'] = 'module';

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output7 .= '
        </ul>
    ';
return $output7;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('modules', $array4);
$array3['1'] = ' && ';
$array5 = array (
);$array3['2'] = $renderingContext->getVariableProvider()->getByPath('currentLevel', $array5);
$array3['3'] = ' <= 2';

$expression6 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) <= 2));};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output100 = '';

$output100 .= '<div
    class="modulemenu t3js-modulemenu"
    role="menubar"
    data-role="modulemenu"
    id="modulemenu"
>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['section'] = NULL;
$arguments101['partial'] = NULL;
$arguments101['delegate'] = NULL;
$arguments101['renderable'] = NULL;
$arguments101['arguments'] = array (
);
$arguments101['optional'] = false;
$arguments101['default'] = NULL;
$arguments101['contentAs'] = NULL;
$arguments101['debug'] = true;
$arguments101['section'] = 'Navigation';
// Rendering Array
$array103 = array();
$array104 = array (
);$array103['modules'] = $renderingContext->getVariableProvider()->getByPath('modules', $array104);
$array103['currentLevel'] = 1;
$arguments101['arguments'] = $array103;

$output100 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output100 .= '
</div>
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
        <ul
            class="modulemenu-group-container"
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['then'] = NULL;
$arguments115['else'] = NULL;
$arguments115['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array117 = array();
$array118 = array (
);$array117['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('parent', $array118)]);

$expression119 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments115['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression119(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array117)
					),
					$renderingContext
				);
$output120 = '';

$output120 .= 'aria-visible="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments121 = array();
$arguments121['then'] = NULL;
$arguments121['else'] = NULL;
$arguments121['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array123 = array();
$array124 = array (
);$array123['0'] = $renderingContext->getVariableProvider()->getByPath('parent.collapsed', $array124);

$expression125 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments121['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression125(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array123)
					),
					$renderingContext
				);
$arguments121['then'] = 'false';
$arguments121['else'] = 'true';

$output120 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output120 .= '"';
$arguments115['then'] = $output120;

$output114 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output114 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['then'] = NULL;
$arguments126['else'] = NULL;
$arguments126['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array128 = array();
$array129 = array (
);$array128['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('parent', $array129)]);

$expression130 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments126['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression130(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array128)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments131 = array();
$arguments131['then'] = NULL;
$arguments131['else'] = NULL;
$arguments131['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array133 = array();
$array134 = array (
);$array133['0'] = $renderingContext->getVariableProvider()->getByPath('parent.collapsed', $array134);

$expression135 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments131['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression135(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array133)
					),
					$renderingContext
				);
$arguments131['then'] = 'style="display: none"';
$arguments126['then'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output114 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output114 .= '
        >
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
                <li
                    data-level="';
$array140 = array (
);
$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('currentLevel', $array140)]);

$output139 .= '"
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments141 = array();
$arguments141['then'] = NULL;
$arguments141['else'] = NULL;
$arguments141['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array143 = array();
$array144 = array (
);$array143['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.children', $array144)]);
$array143['1'] = ' && ';
$array145 = array (
);$array143['2'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('currentLevel', $array145)]);
$array143['3'] = ' == 1';

$expression146 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) == 1));};
$arguments141['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression146(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array143)
					),
					$renderingContext
				);
$output147 = '';

$output147 .= 'class="modulemenu-group modulemenu-group-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments148 = array();
$arguments148['then'] = NULL;
$arguments148['else'] = NULL;
$arguments148['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array150 = array();
$array151 = array (
);$array150['0'] = $renderingContext->getVariableProvider()->getByPath('module.collapsed', $array151);

$expression152 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments148['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression152(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array150)
					),
					$renderingContext
				);
$arguments148['then'] = 'collapsed';
$arguments148['else'] = 'expanded';

$output147 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output147 .= '"';
$arguments141['then'] = $output147;

$output139 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output139 .= '
                >
                    <button
                        title="';
$array153 = array (
);
$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.description', $array153)]);

$output139 .= '"
                        class="modulemenu-action t3js-modulemenu-action"
                        role="menuitem"
                        id="';
$array154 = array (
);
$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.name', $array154)]);

$output139 .= '"
                        data-modulename="';
$array155 = array (
);
$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.name', $array155)]);

$output139 .= '"
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['then'] = NULL;
$arguments156['else'] = NULL;
$arguments156['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array158 = array();
$array159 = array (
);$array158['0'] = $renderingContext->getVariableProvider()->getByPath('module.link', $array159);

$expression160 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments156['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression160(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array158)
					),
					$renderingContext
				);
$output161 = '';

$output161 .= 'data-link="';
$array162 = array (
);
$output161 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.link', $array162)]);

$output161 .= '"';
$arguments156['then'] = $output161;

$output139 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output139 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments163 = array();
$arguments163['then'] = NULL;
$arguments163['else'] = NULL;
$arguments163['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array165 = array();
$array166 = array (
);$array165['0'] = $renderingContext->getVariableProvider()->getByPath('module.navigationComponentId', $array166);

$expression167 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments163['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression167(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array165)
					),
					$renderingContext
				);
$output168 = '';

$output168 .= 'data-navigationcomponentid="';
$array169 = array (
);
$output168 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.navigationComponentId', $array169)]);

$output168 .= '"';
$arguments163['then'] = $output168;

$output139 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output139 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments170 = array();
$arguments170['then'] = NULL;
$arguments170['else'] = NULL;
$arguments170['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array172 = array();
$array173 = array (
);$array172['0'] = $renderingContext->getVariableProvider()->getByPath('module.navigationFrameScript', $array173);

$expression174 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments170['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression174(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array172)
					),
					$renderingContext
				);
$output175 = '';

$output175 .= 'data-navigationframescript="';
$array176 = array (
);
$output175 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.navigationFrameScript', $array176)]);

$output175 .= '"';
$arguments170['then'] = $output175;

$output139 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output139 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments177 = array();
$arguments177['then'] = NULL;
$arguments177['else'] = NULL;
$arguments177['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array179 = array();
$array180 = array (
);$array179['0'] = $renderingContext->getVariableProvider()->getByPath('module.navigationFrameScriptParameters', $array180);

$expression181 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments177['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression181(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array179)
					),
					$renderingContext
				);
$output182 = '';

$output182 .= 'data-navigationframescriptparameters="';
$array183 = array (
);
$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.navigationFrameScriptParameters', $array183)]);

$output182 .= '"';
$arguments177['then'] = $output182;

$output139 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output139 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments184 = array();
$arguments184['then'] = NULL;
$arguments184['else'] = NULL;
$arguments184['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array186 = array();
$array187 = array (
);$array186['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.children', $array187)]);
$array186['1'] = ' && ';
$array188 = array (
);$array186['2'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('currentLevel', $array188)]);
$array186['3'] = ' == 1';

$expression189 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) == 1));};
$arguments184['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression189(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array186)
					),
					$renderingContext
				);
$output190 = '';

$output190 .= 'aria-haspopup="true" aria-expanded="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['then'] = NULL;
$arguments191['else'] = NULL;
$arguments191['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array193 = array();
$array194 = array (
);$array193['0'] = $renderingContext->getVariableProvider()->getByPath('module.collapsed', $array194);

$expression195 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments191['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression195(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array193)
					),
					$renderingContext
				);
$arguments191['then'] = 'false';
$arguments191['else'] = 'true';

$output190 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output190 .= '"';
$arguments184['then'] = $output190;

$output139 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output139 .= '
                    >
                        <span class="modulemenu-icon" aria-hidden="true">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
$array198 = array (
);return $renderingContext->getVariableProvider()->getByPath('module.icon', $array198);
};
$arguments196 = array();
$arguments196['value'] = NULL;

$output139 .= isset($arguments196['value']) ? $arguments196['value'] : $renderChildrenClosure197();

$output139 .= '</span>
                        <span class="modulemenu-name">';
$array199 = array (
);
$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.title', $array199)]);

$output139 .= '</span>
                        <span class="modulemenu-indicator" aria-hidden="true"></span>
                    </button>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments200 = array();
$arguments200['section'] = NULL;
$arguments200['partial'] = NULL;
$arguments200['delegate'] = NULL;
$arguments200['renderable'] = NULL;
$arguments200['arguments'] = array (
);
$arguments200['optional'] = false;
$arguments200['default'] = NULL;
$arguments200['contentAs'] = NULL;
$arguments200['debug'] = true;
$arguments200['section'] = 'Navigation';
// Rendering Array
$array202 = array();
$array203 = array (
);$array202['modules'] = $renderingContext->getVariableProvider()->getByPath('module.children', $array203);
$array204 = array (
);$array202['parent'] = $renderingContext->getVariableProvider()->getByPath('module', $array204);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string205 = '{currentLevel + 1}';
$array206 = array (
  0 => '{currentLevel + 1}',
  1 => '{currentLevel + 1}',
);
$array202['currentLevel'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string205, $array206);
$arguments200['arguments'] = $array202;

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

$output139 .= '
                </li>
            ';
return $output139;
};
$arguments136 = array();
$arguments136['each'] = NULL;
$arguments136['as'] = NULL;
$arguments136['key'] = NULL;
$arguments136['reverse'] = false;
$arguments136['iteration'] = NULL;
$array138 = array (
);$arguments136['each'] = $renderingContext->getVariableProvider()->getByPath('modules', $array138);
$arguments136['as'] = 'module';

$output114 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output114 .= '
        </ul>
    ';
return $output114;
};
$arguments108 = array();
$arguments108['then'] = NULL;
$arguments108['else'] = NULL;
$arguments108['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array110 = array();
$array111 = array (
);$array110['0'] = $renderingContext->getVariableProvider()->getByPath('modules', $array111);
$array110['1'] = ' && ';
$array112 = array (
);$array110['2'] = $renderingContext->getVariableProvider()->getByPath('currentLevel', $array112);
$array110['3'] = ' <= 2';

$expression113 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) <= 2));};
$arguments108['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression113(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array110)
					),
					$renderingContext
				);
$arguments108['__thenClosure'] = $renderChildrenClosure109;

$output107 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output107 .= '
';
return $output107;
};
$arguments105 = array();
$arguments105['name'] = NULL;
$arguments105['name'] = 'Navigation';

$output100 .= NULL;

$output100 .= '
';

return $output100;
}


}
#