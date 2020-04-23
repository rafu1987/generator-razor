<?php

class Standard_action_userToolbarItemDropDown_f82c5bb754d05d96deb10ac978aca0b7f2380bc8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
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
<h3 class="dropdown-headline">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.user';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
</h3>
<hr>
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
    <ul class="modulemenu-group-container">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
            <li>
                <button
                    title="';
$array13 = array (
);
$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.description', $array13)]);

$output12 .= '"
                    class="modulemenu-action t3js-modulemenu-action"
                    role="menuitem"
                    id="';
$array14 = array (
);
$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.name', $array14)]);

$output12 .= '"
                    data-modulename="';
$array15 = array (
);
$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.name', $array15)]);

$output12 .= '"
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['then'] = NULL;
$arguments16['else'] = NULL;
$arguments16['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['0'] = $renderingContext->getVariableProvider()->getByPath('module.link', $array19);

$expression20 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments16['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression20(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)
					),
					$renderingContext
				);
$output21 = '';

$output21 .= 'data-link="';
$array22 = array (
);
$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.link', $array22)]);

$output21 .= '"';
$arguments16['then'] = $output21;

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output12 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['then'] = NULL;
$arguments23['else'] = NULL;
$arguments23['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array25 = array();
$array26 = array (
);$array25['0'] = $renderingContext->getVariableProvider()->getByPath('module.navigationComponentId', $array26);

$expression27 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments23['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression27(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array25)
					),
					$renderingContext
				);
$output28 = '';

$output28 .= 'data-navigationcomponentid="';
$array29 = array (
);
$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.navigationComponentId', $array29)]);

$output28 .= '"';
$arguments23['then'] = $output28;

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output12 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['then'] = NULL;
$arguments30['else'] = NULL;
$arguments30['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array32 = array();
$array33 = array (
);$array32['0'] = $renderingContext->getVariableProvider()->getByPath('module.navigationFrameScript', $array33);

$expression34 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments30['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression34(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array32)
					),
					$renderingContext
				);
$output35 = '';

$output35 .= 'data-navigationframescript="';
$array36 = array (
);
$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.navigationFrameScript', $array36)]);

$output35 .= '"';
$arguments30['then'] = $output35;

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output12 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['then'] = NULL;
$arguments37['else'] = NULL;
$arguments37['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array39 = array();
$array40 = array (
);$array39['0'] = $renderingContext->getVariableProvider()->getByPath('module.navigationFrameScriptParameters', $array40);

$expression41 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments37['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression41(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)
					),
					$renderingContext
				);
$output42 = '';

$output42 .= 'data-navigationframescriptparameters="';
$array43 = array (
);
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.navigationFrameScriptParameters', $array43)]);

$output42 .= '"';
$arguments37['then'] = $output42;

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output12 .= '
                >
                    <span class="modulemenu-icon" aria-hidden="true">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$array46 = array (
);return $renderingContext->getVariableProvider()->getByPath('module.icon', $array46);
};
$arguments44 = array();
$arguments44['value'] = NULL;

$output12 .= isset($arguments44['value']) ? $arguments44['value'] : $renderChildrenClosure45();

$output12 .= '</span>
                    <span class="modulemenu-name">';
$array47 = array (
);
$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.title', $array47)]);

$output12 .= '</span>
                    <span class="modulemenu-indicator" aria-hidden="true"></span>
                </button>
            </li>
        ';
return $output12;
};
$arguments9 = array();
$arguments9['each'] = NULL;
$arguments9['as'] = NULL;
$arguments9['key'] = NULL;
$arguments9['reverse'] = false;
$arguments9['iteration'] = NULL;
$array11 = array (
);$arguments9['each'] = $renderingContext->getVariableProvider()->getByPath('modules', $array11);
$arguments9['as'] = 'module';

$output8 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
    </ul>
    <hr>
';
return $output8;
};
$arguments3 = array();
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array5 = array();
$array6 = array (
);$array5['0'] = $renderingContext->getVariableProvider()->getByPath('modules', $array6);

$expression7 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression7(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)
					),
					$renderingContext
				);
$arguments3['__thenClosure'] = $renderChildrenClosure4;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
    <h3 class="dropdown-headline">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['key'] = NULL;
$arguments56['id'] = NULL;
$arguments56['default'] = NULL;
$arguments56['arguments'] = NULL;
$arguments56['extensionName'] = NULL;
$arguments56['languageKey'] = NULL;
$arguments56['alternativeLanguageKeys'] = NULL;
$arguments56['key'] = 'usermodule.su.list';

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output55 .= '</h3>
    <div class="dropdown-table">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
            <div class="dropdown-table-row">
                <div class="dropdown-table-column dropdown-table-icon">
                    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['backendUser'] = 0;
$arguments62['size'] = 32;
$arguments62['showIcon'] = false;
$array64 = array (
);$arguments62['backendUser'] = $renderingContext->getVariableProvider()->getByPath('user.uid', $array64);
$arguments62['size'] = 32;

$output61 .= TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
                </div>
                <div class="dropdown-table-column dropdown-table-title">
                    <a href="';
$array65 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.switchUserLink', $array65)]);

$output61 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['key'] = NULL;
$arguments66['id'] = NULL;
$arguments66['default'] = NULL;
$arguments66['arguments'] = NULL;
$arguments66['extensionName'] = NULL;
$arguments66['languageKey'] = NULL;
$arguments66['alternativeLanguageKeys'] = NULL;
$arguments66['key'] = 'usermodule.su.tooltip';
// Rendering Array
$array68 = array();
$array69 = array (
);$array68['0'] = $renderingContext->getVariableProvider()->getByPath('user.username', $array69);
$arguments66['arguments'] = $array68;

$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext)]);

$output61 .= '">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
                                ';
$array83 = array (
);
$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.realName', $array83)]);

$output82 .= '
                            ';
return $output82;
};
$arguments80 = array();

$output79 .= '';

$output79 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
                                ';
$array87 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.username', $array87)]);

$output86 .= '
                            ';
return $output86;
};
$arguments84 = array();
$arguments84['if'] = NULL;

$output79 .= '';

$output79 .= '
                        ';
return $output79;
};
$arguments70 = array();
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$arguments70['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array76 = array();
$array77 = array (
);$array76['0'] = $renderingContext->getVariableProvider()->getByPath('user.realName', $array77);

$expression78 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments70['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression78(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array76)
					),
					$renderingContext
				);
$arguments70['__thenClosure'] = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
                                ';
$array73 = array (
);
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.realName', $array73)]);

$output72 .= '
                            ';
return $output72;
};
$arguments70['__elseClosures'][] = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
                                ';
$array75 = array (
);
$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user.username', $array75)]);

$output74 .= '
                            ';
return $output74;
};

$output61 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output61 .= '
                    </a>
                </div>
            </div>
        ';
return $output61;
};
$arguments58 = array();
$arguments58['each'] = NULL;
$arguments58['as'] = NULL;
$arguments58['key'] = NULL;
$arguments58['reverse'] = false;
$arguments58['iteration'] = NULL;
$array60 = array (
);$arguments58['each'] = $renderingContext->getVariableProvider()->getByPath('recentUsers', $array60);
$arguments58['as'] = 'user';

$output55 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output55 .= '
    </div>
    <hr>
';
return $output55;
};
$arguments48 = array();
$arguments48['then'] = NULL;
$arguments48['else'] = NULL;
$arguments48['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array50 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['subject'] = NULL;
$array53 = array (
);$arguments51['subject'] = $renderingContext->getVariableProvider()->getByPath('recentUsers', $array53);
$renderChildrenClosure52 = ($arguments51['subject'] !== null) ? function() use ($arguments51) { return $arguments51['subject']; } : $renderChildrenClosure52;$array50['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);
$array50['1'] = ' > 0';

$expression54 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments48['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression54(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array50)
					),
					$renderingContext
				);
$arguments48['__thenClosure'] = $renderChildrenClosure49;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output0 .= '
<a href="';
$array88 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoutUrl', $array88)]);

$output0 .= '" class="btn btn-danger pull-left" target="_top">
    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['identifier'] = NULL;
$arguments89['size'] = 'small';
$arguments89['overlay'] = NULL;
$arguments89['state'] = 'default';
$arguments89['alternativeMarkupIdentifier'] = NULL;
$arguments89['identifier'] = 'actions-logout';
$arguments89['size'] = 'small';
$arguments89['alternativeMarkupIdentifier'] = 'inline';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments112 = array();
$arguments112['key'] = NULL;
$arguments112['id'] = NULL;
$arguments112['default'] = NULL;
$arguments112['arguments'] = NULL;
$arguments112['extensionName'] = NULL;
$arguments112['languageKey'] = NULL;
$arguments112['alternativeLanguageKeys'] = NULL;
$arguments112['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:buttons.exit';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);
};
$arguments110 = array();
$arguments110['value'] = NULL;

$output109 .= isset($arguments110['value']) ? $arguments110['value'] : $renderChildrenClosure111();

$output109 .= '
        ';
return $output109;
};
$arguments107 = array();

$output106 .= '';

$output106 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['key'] = NULL;
$arguments119['id'] = NULL;
$arguments119['default'] = NULL;
$arguments119['arguments'] = NULL;
$arguments119['extensionName'] = NULL;
$arguments119['languageKey'] = NULL;
$arguments119['alternativeLanguageKeys'] = NULL;
$arguments119['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:buttons.logout';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);
};
$arguments117 = array();
$arguments117['value'] = NULL;

$output116 .= isset($arguments117['value']) ? $arguments117['value'] : $renderChildrenClosure118();

$output116 .= '
        ';
return $output116;
};
$arguments114 = array();
$arguments114['if'] = NULL;

$output106 .= '';

$output106 .= '
    ';
return $output106;
};
$arguments91 = array();
$arguments91['then'] = NULL;
$arguments91['else'] = NULL;
$arguments91['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array103 = array();
$array104 = array (
);$array103['0'] = $renderingContext->getVariableProvider()->getByPath('switchUserMode', $array104);

$expression105 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments91['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression105(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array103)
					),
					$renderingContext
				);
$arguments91['__thenClosure'] = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments96 = array();
$arguments96['key'] = NULL;
$arguments96['id'] = NULL;
$arguments96['default'] = NULL;
$arguments96['arguments'] = NULL;
$arguments96['extensionName'] = NULL;
$arguments96['languageKey'] = NULL;
$arguments96['alternativeLanguageKeys'] = NULL;
$arguments96['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:buttons.exit';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);
};
$arguments94 = array();
$arguments94['value'] = NULL;

$output93 .= isset($arguments94['value']) ? $arguments94['value'] : $renderChildrenClosure95();

$output93 .= '
        ';
return $output93;
};
$arguments91['__elseClosures'][] = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['key'] = NULL;
$arguments101['id'] = NULL;
$arguments101['default'] = NULL;
$arguments101['arguments'] = NULL;
$arguments101['extensionName'] = NULL;
$arguments101['languageKey'] = NULL;
$arguments101['alternativeLanguageKeys'] = NULL;
$arguments101['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:buttons.logout';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);
};
$arguments99 = array();
$arguments99['value'] = NULL;

$output98 .= isset($arguments99['value']) ? $arguments99['value'] : $renderChildrenClosure100();

$output98 .= '
        ';
return $output98;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output0 .= '
</a>

';

return $output0;
}


}
#