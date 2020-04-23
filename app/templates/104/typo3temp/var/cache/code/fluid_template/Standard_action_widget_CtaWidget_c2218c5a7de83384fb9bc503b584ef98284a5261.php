<?php

class Standard_action_widget_CtaWidget_c2218c5a7de83384fb9bc503b584ef98284a5261 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Widget/Widget';
}
public function hasLayout() {
return TRUE;
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
 * section main
 */
public function section_b28b7af69320201d1cf206ebf28373980add1451(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['key'] = NULL;
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['languageKey'] = NULL;
$arguments7['alternativeLanguageKeys'] = NULL;
$array9 = array (
);$arguments7['id'] = $renderingContext->getVariableProvider()->getByPath('text', $array9);
$array10 = array (
);$arguments7['default'] = $renderingContext->getVariableProvider()->getByPath('text', $array10);

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output6 .= '
    ';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('text', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
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
 * section footer
 */
public function section_d7eb6b340a11a367a1bec55e4a421d949214759f(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output11 = '';

$output11 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
        <a href="';
$array18 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('button.link', $array18)]);

$output17 .= '" target="';
$array19 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('button.target', $array19)]);

$output17 .= '" class="widget-cta">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['key'] = NULL;
$arguments20['id'] = NULL;
$arguments20['default'] = NULL;
$arguments20['arguments'] = NULL;
$arguments20['extensionName'] = NULL;
$arguments20['languageKey'] = NULL;
$arguments20['alternativeLanguageKeys'] = NULL;
$array22 = array (
);$arguments20['id'] = $renderingContext->getVariableProvider()->getByPath('button.title', $array22);
$array23 = array (
);$arguments20['default'] = $renderingContext->getVariableProvider()->getByPath('button.title', $array23);

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output17 .= '</a>
    ';
return $output17;
};
$arguments12 = array();
$arguments12['then'] = NULL;
$arguments12['else'] = NULL;
$arguments12['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array14 = array();
$array15 = array (
);$array14['0'] = $renderingContext->getVariableProvider()->getByPath('button', $array15);

$expression16 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments12['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression16(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)
					),
					$renderingContext
				);
$arguments12['__thenClosure'] = $renderChildrenClosure13;

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
';

return $output11;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output24 = '';

$output24 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['name'] = NULL;
$arguments25['name'] = 'Widget/Widget';

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output24 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['key'] = NULL;
$arguments36['id'] = NULL;
$arguments36['default'] = NULL;
$arguments36['arguments'] = NULL;
$arguments36['extensionName'] = NULL;
$arguments36['languageKey'] = NULL;
$arguments36['alternativeLanguageKeys'] = NULL;
$array38 = array (
);$arguments36['id'] = $renderingContext->getVariableProvider()->getByPath('text', $array38);
$array39 = array (
);$arguments36['default'] = $renderingContext->getVariableProvider()->getByPath('text', $array39);

$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext)]);

$output35 .= '
    ';
return $output35;
};
$arguments30 = array();
$arguments30['then'] = NULL;
$arguments30['else'] = NULL;
$arguments30['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array32 = array();
$array33 = array (
);$array32['0'] = $renderingContext->getVariableProvider()->getByPath('text', $array33);

$expression34 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments30['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression34(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array32)
					),
					$renderingContext
				);
$arguments30['__thenClosure'] = $renderChildrenClosure31;

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '

';
return $output29;
};
$arguments27 = array();
$arguments27['name'] = NULL;
$arguments27['name'] = 'main';

$output24 .= NULL;

$output24 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
        <a href="';
$array49 = array (
);
$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('button.link', $array49)]);

$output48 .= '" target="';
$array50 = array (
);
$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('button.target', $array50)]);

$output48 .= '" class="widget-cta">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['key'] = NULL;
$arguments51['id'] = NULL;
$arguments51['default'] = NULL;
$arguments51['arguments'] = NULL;
$arguments51['extensionName'] = NULL;
$arguments51['languageKey'] = NULL;
$arguments51['alternativeLanguageKeys'] = NULL;
$array53 = array (
);$arguments51['id'] = $renderingContext->getVariableProvider()->getByPath('button.title', $array53);
$array54 = array (
);$arguments51['default'] = $renderingContext->getVariableProvider()->getByPath('button.title', $array54);

$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

$output48 .= '</a>
    ';
return $output48;
};
$arguments43 = array();
$arguments43['then'] = NULL;
$arguments43['else'] = NULL;
$arguments43['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array45 = array();
$array46 = array (
);$array45['0'] = $renderingContext->getVariableProvider()->getByPath('button', $array46);

$expression47 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments43['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression47(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array45)
					),
					$renderingContext
				);
$arguments43['__thenClosure'] = $renderChildrenClosure44;

$output42 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
';
return $output42;
};
$arguments40 = array();
$arguments40['name'] = NULL;
$arguments40['name'] = 'footer';

$output24 .= NULL;

$output24 .= '

';

return $output24;
}


}
#