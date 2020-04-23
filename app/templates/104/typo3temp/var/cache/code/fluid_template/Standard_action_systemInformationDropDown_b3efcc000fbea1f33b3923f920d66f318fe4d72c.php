<?php

class Standard_action_systemInformationDropDown_b3efcc000fbea1f33b3923f920d66f318fe4d72c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<span class="systeminformationtoolbaritem-container t3js-systeminformation-container" data-count="';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('count', $array1)]);

$output0 .= '"
            data-severityclass="';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('severityBadgeClass', $array2)]);

$output0 .= '"></span>

<h3 class="dropdown-headline">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['key'] = NULL;
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['languageKey'] = NULL;
$arguments3['alternativeLanguageKeys'] = NULL;
$arguments3['key'] = 'systemmessage.header';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '
</h3>
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
    <p class="dropdown-text typo3-module-menu-item submodule mod-tools_toolsenvironment" data-modulename="tools_toolsenvironment">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['key'] = NULL;
$arguments14['id'] = NULL;
$arguments14['default'] = NULL;
$arguments14['arguments'] = NULL;
$arguments14['extensionName'] = NULL;
$arguments14['languageKey'] = NULL;
$arguments14['alternativeLanguageKeys'] = NULL;
$arguments14['key'] = 'systemmessage.intro';
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('environmentToolUrl', $array17);
$arguments14['arguments'] = $array16;

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
        ';
return $output13;
};
$arguments11 = array();
$arguments11['value'] = NULL;

$output10 .= isset($arguments11['value']) ? $arguments11['value'] : $renderChildrenClosure12();

$output10 .= '
    </p>
';
return $output10;
};
$arguments5 = array();
$arguments5['then'] = NULL;
$arguments5['else'] = NULL;
$arguments5['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['0'] = $renderingContext->getVariableProvider()->getByPath('environmentToolUrl', $array8);

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)
					),
					$renderingContext
				);
$arguments5['__thenClosure'] = $renderChildrenClosure6;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
    <hr>
    <div class="dropdown-table">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
            <div class="dropdown-table-row">
                <div class="dropdown-table-column dropdown-table-column-top dropdown-table-icon">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['identifier'] = NULL;
$arguments44['size'] = 'small';
$arguments44['overlay'] = NULL;
$arguments44['state'] = 'default';
$arguments44['alternativeMarkupIdentifier'] = NULL;
$array46 = array (
);$arguments44['identifier'] = $renderingContext->getVariableProvider()->getByPath('info.iconIdentifier', $array46);
$arguments44['size'] = 'small';
$arguments44['alternativeMarkupIdentifier'] = 'inline';

$output43 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output43 .= '
                        ';
return $output43;
};
$arguments41 = array();

$output40 .= '';

$output40 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$array51 = array (
);return $renderingContext->getVariableProvider()->getByPath('info.icon', $array51);
};
$arguments49 = array();
$arguments49['value'] = NULL;
return isset($arguments49['value']) ? $arguments49['value'] : $renderChildrenClosure50();
};
$arguments47 = array();
$arguments47['if'] = NULL;

$output40 .= '';

$output40 .= '
                    ';
return $output40;
};
$arguments28 = array();
$arguments28['then'] = NULL;
$arguments28['else'] = NULL;
$arguments28['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['0'] = $renderingContext->getVariableProvider()->getByPath('info.iconIdentifier', $array38);

$expression39 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments28['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression39(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments28['__thenClosure'] = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['identifier'] = NULL;
$arguments31['size'] = 'small';
$arguments31['overlay'] = NULL;
$arguments31['state'] = 'default';
$arguments31['alternativeMarkupIdentifier'] = NULL;
$array33 = array (
);$arguments31['identifier'] = $renderingContext->getVariableProvider()->getByPath('info.iconIdentifier', $array33);
$arguments31['size'] = 'small';
$arguments31['alternativeMarkupIdentifier'] = 'inline';

$output30 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
                        ';
return $output30;
};
$arguments28['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$array36 = array (
);return $renderingContext->getVariableProvider()->getByPath('info.icon', $array36);
};
$arguments34 = array();
$arguments34['value'] = NULL;
return isset($arguments34['value']) ? $arguments34['value'] : $renderChildrenClosure35();
};

$output27 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '
                </div>
                <div class="dropdown-table-column dropdown-table-column-top dropdown-table-title">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['key'] = NULL;
$arguments52['id'] = NULL;
$arguments52['default'] = NULL;
$arguments52['arguments'] = NULL;
$arguments52['extensionName'] = NULL;
$arguments52['languageKey'] = NULL;
$arguments52['alternativeLanguageKeys'] = NULL;
$array54 = array (
);$arguments52['key'] = $renderingContext->getVariableProvider()->getByPath('info.title', $array54);
$array55 = array (
);$arguments52['default'] = $renderingContext->getVariableProvider()->getByPath('info.title', $array55);

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext)]);

$output27 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= ' (';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$array65 = array (
);return $renderingContext->getVariableProvider()->getByPath('info.titleAddition', $array65);
};
$arguments62 = array();
$arguments62['value'] = NULL;
$arguments62['keepQuotes'] = false;
$arguments62['encoding'] = 'UTF-8';
$arguments62['doubleEncode'] = true;
$value64 = ($arguments62['value'] !== NULL ? $arguments62['value'] : $renderChildrenClosure63());

$output61 .= !is_string($value64) && !(is_object($value64) && method_exists($value64, '__toString')) ? $value64 : htmlspecialchars($value64, ($arguments62['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments62['encoding'], $arguments62['doubleEncode']);

$output61 .= ')';
return $output61;
};
$arguments56 = array();
$arguments56['then'] = NULL;
$arguments56['else'] = NULL;
$arguments56['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array58 = array();
$array59 = array (
);$array58['0'] = $renderingContext->getVariableProvider()->getByPath('info.titleAddition', $array59);

$expression60 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments56['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression60(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array58)
					),
					$renderingContext
				);
$arguments56['__thenClosure'] = $renderChildrenClosure57;

$output27 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output27 .= '
                </div>
                <div
                    class="dropdown-table-column dropdown-table-column-top dropdown-table-value ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['then'] = NULL;
$arguments66['else'] = NULL;
$arguments66['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array68 = array();
$array69 = array (
);$array68['0'] = $renderingContext->getVariableProvider()->getByPath('info.status', $array69);

$expression70 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments66['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression70(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)
					),
					$renderingContext
				);
$output71 = '';

$output71 .= 'text-';
$array72 = array (
);
$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('info.status', $array72)]);
$arguments66['then'] = $output71;

$output27 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output27 .= '">
                    ';
$array73 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('info.value', $array73)]);

$output27 .= '
                </div>
            </div>
        ';
return $output27;
};
$arguments24 = array();
$arguments24['each'] = NULL;
$arguments24['as'] = NULL;
$arguments24['key'] = NULL;
$arguments24['reverse'] = false;
$arguments24['iteration'] = NULL;
$array26 = array (
);$arguments24['each'] = $renderingContext->getVariableProvider()->getByPath('systemInformation', $array26);
$arguments24['as'] = 'info';

$output23 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
    </div>
';
return $output23;
};
$arguments18 = array();
$arguments18['then'] = NULL;
$arguments18['else'] = NULL;
$arguments18['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array20 = array();
$array21 = array (
);$array20['0'] = $renderingContext->getVariableProvider()->getByPath('systemInformation', $array21);

$expression22 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments18['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression22(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)
					),
					$renderingContext
				);
$arguments18['__thenClosure'] = $renderChildrenClosure19;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output0 .= '

<hr>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output130 = '';

$output130 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
                    <p id="systeminformation_';
$array161 = array (
);
$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module', $array161)]);

$output160 .= '"
                        class="dropdown-text t3js-systeminformation-module typo3-module-menu-item submodule mod-';
$array162 = array (
);
$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module', $array162)]);

$output160 .= '"
                        data-modulename="';
$array163 = array (
);
$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module', $array163)]);

$output160 .= '" data-moduleparams="';
$array164 = array (
);
$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.params', $array164)]);

$output160 .= '">
                        <span class="text-';
$array165 = array (
);
$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.status', $array165)]);

$output160 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
$array168 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array168);
};
$arguments166 = array();
$arguments166['value'] = NULL;

$output160 .= isset($arguments166['value']) ? $arguments166['value'] : $renderChildrenClosure167();

$output160 .= '</span>
                    </p>
                ';
return $output160;
};
$arguments158 = array();

$output157 .= '';

$output157 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$output171 = '';

$output171 .= '
                    <p class="dropdown-text text-';
$array172 = array (
);
$output171 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.status', $array172)]);

$output171 .= '">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$array175 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array175);
};
$arguments173 = array();
$arguments173['value'] = NULL;

$output171 .= isset($arguments173['value']) ? $arguments173['value'] : $renderChildrenClosure174();

$output171 .= '
                    </p>
                ';
return $output171;
};
$arguments169 = array();
$arguments169['if'] = NULL;

$output157 .= '';

$output157 .= '
            ';
return $output157;
};
$arguments138 = array();
$arguments138['then'] = NULL;
$arguments138['else'] = NULL;
$arguments138['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array154 = array();
$array155 = array (
);$array154['0'] = $renderingContext->getVariableProvider()->getByPath('message.module', $array155);

$expression156 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments138['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression156(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array154)
					),
					$renderingContext
				);
$arguments138['__thenClosure'] = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
                    <p id="systeminformation_';
$array141 = array (
);
$output140 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module', $array141)]);

$output140 .= '"
                        class="dropdown-text t3js-systeminformation-module typo3-module-menu-item submodule mod-';
$array142 = array (
);
$output140 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module', $array142)]);

$output140 .= '"
                        data-modulename="';
$array143 = array (
);
$output140 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module', $array143)]);

$output140 .= '" data-moduleparams="';
$array144 = array (
);
$output140 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.params', $array144)]);

$output140 .= '">
                        <span class="text-';
$array145 = array (
);
$output140 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.status', $array145)]);

$output140 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$array148 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array148);
};
$arguments146 = array();
$arguments146['value'] = NULL;

$output140 .= isset($arguments146['value']) ? $arguments146['value'] : $renderChildrenClosure147();

$output140 .= '</span>
                    </p>
                ';
return $output140;
};
$arguments138['__elseClosures'][] = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
                    <p class="dropdown-text text-';
$array150 = array (
);
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.status', $array150)]);

$output149 .= '">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$array153 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array153);
};
$arguments151 = array();
$arguments151['value'] = NULL;

$output149 .= isset($arguments151['value']) ? $arguments151['value'] : $renderChildrenClosure152();

$output149 .= '
                    </p>
                ';
return $output149;
};

$output137 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output137 .= '
        ';
return $output137;
};
$arguments134 = array();
$arguments134['each'] = NULL;
$arguments134['as'] = NULL;
$arguments134['key'] = NULL;
$arguments134['reverse'] = false;
$arguments134['iteration'] = NULL;
$array136 = array (
);$arguments134['each'] = $renderingContext->getVariableProvider()->getByPath('messages', $array136);
$arguments134['as'] = 'message';

$output133 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output133 .= '
    ';
return $output133;
};
$arguments131 = array();

$output130 .= '';

$output130 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output178 = '';

$output178 .= '
        <p class="dropdown-text text-success">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['key'] = NULL;
$arguments182['id'] = NULL;
$arguments182['default'] = NULL;
$arguments182['arguments'] = NULL;
$arguments182['extensionName'] = NULL;
$arguments182['languageKey'] = NULL;
$arguments182['alternativeLanguageKeys'] = NULL;
$arguments182['key'] = 'systemmessage.allgood';

$output181 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext)]);

$output181 .= '
            ';
return $output181;
};
$arguments179 = array();
$arguments179['value'] = NULL;
$renderChildrenClosure180 = ($arguments179['value'] !== null) ? function() use ($arguments179) { return $arguments179['value']; } : $renderChildrenClosure180;
$output178 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output178 .= '
        </p>
    ';
return $output178;
};
$arguments176 = array();
$arguments176['if'] = NULL;

$output130 .= '';

$output130 .= '
';
return $output130;
};
$arguments74 = array();
$arguments74['then'] = NULL;
$arguments74['else'] = NULL;
$arguments74['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array125 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$array128 = array (
);return $renderingContext->getVariableProvider()->getByPath('messages', $array128);
};
$arguments126 = array();
$arguments126['subject'] = NULL;
$renderChildrenClosure127 = ($arguments126['subject'] !== null) ? function() use ($arguments126) { return $arguments126['subject']; } : $renderChildrenClosure127;$array125['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);
$array125['1'] = ' > 0';

$expression129 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments74['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression129(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array125)
					),
					$renderingContext
				);
$arguments74['__thenClosure'] = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
                    <p id="systeminformation_';
$array104 = array (
);
$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module', $array104)]);

$output103 .= '"
                        class="dropdown-text t3js-systeminformation-module typo3-module-menu-item submodule mod-';
$array105 = array (
);
$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module', $array105)]);

$output103 .= '"
                        data-modulename="';
$array106 = array (
);
$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module', $array106)]);

$output103 .= '" data-moduleparams="';
$array107 = array (
);
$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.params', $array107)]);

$output103 .= '">
                        <span class="text-';
$array108 = array (
);
$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.status', $array108)]);

$output103 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$array111 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array111);
};
$arguments109 = array();
$arguments109['value'] = NULL;

$output103 .= isset($arguments109['value']) ? $arguments109['value'] : $renderChildrenClosure110();

$output103 .= '</span>
                    </p>
                ';
return $output103;
};
$arguments101 = array();

$output100 .= '';

$output100 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
                    <p class="dropdown-text text-';
$array115 = array (
);
$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.status', $array115)]);

$output114 .= '">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$array118 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array118);
};
$arguments116 = array();
$arguments116['value'] = NULL;

$output114 .= isset($arguments116['value']) ? $arguments116['value'] : $renderChildrenClosure117();

$output114 .= '
                    </p>
                ';
return $output114;
};
$arguments112 = array();
$arguments112['if'] = NULL;

$output100 .= '';

$output100 .= '
            ';
return $output100;
};
$arguments81 = array();
$arguments81['then'] = NULL;
$arguments81['else'] = NULL;
$arguments81['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['0'] = $renderingContext->getVariableProvider()->getByPath('message.module', $array98);

$expression99 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments81['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression99(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)
					),
					$renderingContext
				);
$arguments81['__thenClosure'] = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
                    <p id="systeminformation_';
$array84 = array (
);
$output83 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module', $array84)]);

$output83 .= '"
                        class="dropdown-text t3js-systeminformation-module typo3-module-menu-item submodule mod-';
$array85 = array (
);
$output83 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module', $array85)]);

$output83 .= '"
                        data-modulename="';
$array86 = array (
);
$output83 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module', $array86)]);

$output83 .= '" data-moduleparams="';
$array87 = array (
);
$output83 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.params', $array87)]);

$output83 .= '">
                        <span class="text-';
$array88 = array (
);
$output83 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.status', $array88)]);

$output83 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$array91 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array91);
};
$arguments89 = array();
$arguments89['value'] = NULL;

$output83 .= isset($arguments89['value']) ? $arguments89['value'] : $renderChildrenClosure90();

$output83 .= '</span>
                    </p>
                ';
return $output83;
};
$arguments81['__elseClosures'][] = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
                    <p class="dropdown-text text-';
$array93 = array (
);
$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.status', $array93)]);

$output92 .= '">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$array96 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array96);
};
$arguments94 = array();
$arguments94['value'] = NULL;

$output92 .= isset($arguments94['value']) ? $arguments94['value'] : $renderChildrenClosure95();

$output92 .= '
                    </p>
                ';
return $output92;
};

$output80 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output80 .= '
        ';
return $output80;
};
$arguments77 = array();
$arguments77['each'] = NULL;
$arguments77['as'] = NULL;
$arguments77['key'] = NULL;
$arguments77['reverse'] = false;
$arguments77['iteration'] = NULL;
$array79 = array (
);$arguments77['each'] = $renderingContext->getVariableProvider()->getByPath('messages', $array79);
$arguments77['as'] = 'message';

$output76 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= '
    ';
return $output76;
};
$arguments74['__elseClosures'][] = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
        <p class="dropdown-text text-success">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments123 = array();
$arguments123['key'] = NULL;
$arguments123['id'] = NULL;
$arguments123['default'] = NULL;
$arguments123['arguments'] = NULL;
$arguments123['extensionName'] = NULL;
$arguments123['languageKey'] = NULL;
$arguments123['alternativeLanguageKeys'] = NULL;
$arguments123['key'] = 'systemmessage.allgood';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext)]);

$output122 .= '
            ';
return $output122;
};
$arguments120 = array();
$arguments120['value'] = NULL;
$renderChildrenClosure121 = ($arguments120['value'] !== null) ? function() use ($arguments120) { return $arguments120['value']; } : $renderChildrenClosure121;
$output119 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output119 .= '
        </p>
    ';
return $output119;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#