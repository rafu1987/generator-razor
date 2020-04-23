<?php

class layout_Login_html_498e2df9f3fd11df149382839c7dd460fe450a6f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="typo3-login">
    <div class="typo3-login-inner">
        <div class="typo3-login-container">
            <div class="typo3-login-wrap">
                <div class="panel panel-lg panel-login">
                    <div class="panel-body">
                        <div class="typo3-login-logo">
                            <img src="';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logo', $array1)]);

$output0 .= '" class="typo3-login-image" alt="" />
                        </div>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
                                    <div class="t3js-login-error" id="t3-login-error">
                                        <div class="alert alert-danger">
                                            <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['key'] = NULL;
$arguments145['id'] = NULL;
$arguments145['default'] = NULL;
$arguments145['arguments'] = NULL;
$arguments145['extensionName'] = NULL;
$arguments145['languageKey'] = NULL;
$arguments145['alternativeLanguageKeys'] = NULL;
$arguments145['key'] = 'login.error.message';

$output144 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext)]);

$output144 .= '</strong>
                                            <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments147 = array();
$arguments147['key'] = NULL;
$arguments147['id'] = NULL;
$arguments147['default'] = NULL;
$arguments147['arguments'] = NULL;
$arguments147['extensionName'] = NULL;
$arguments147['languageKey'] = NULL;
$arguments147['alternativeLanguageKeys'] = NULL;
$arguments147['key'] = 'login.error.description';

$output144 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext)]);

$output144 .= '</p>
                                        </div>
                                    </div>
                                ';
return $output144;
};
$arguments139 = array();
$arguments139['then'] = NULL;
$arguments139['else'] = NULL;
$arguments139['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array141 = array();
$array142 = array (
);$array141['0'] = $renderingContext->getVariableProvider()->getByPath('hasLoginError', $array142);

$expression143 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments139['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression143(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array141)
					),
					$renderingContext
				);
$arguments139['__thenClosure'] = $renderChildrenClosure140;

$output138 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output138 .= '
                                <noscript>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments149 = array();
$arguments149['message'] = NULL;
$arguments149['title'] = NULL;
$arguments149['state'] = -2;
$arguments149['iconName'] = NULL;
$arguments149['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments151 = array();
$arguments151['key'] = NULL;
$arguments151['id'] = NULL;
$arguments151['default'] = NULL;
$arguments151['arguments'] = NULL;
$arguments151['extensionName'] = NULL;
$arguments151['languageKey'] = NULL;
$arguments151['alternativeLanguageKeys'] = NULL;
$arguments151['key'] = 'login.error.javascript';
$arguments149['message'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);
$arguments149['state'] = 2;
$renderChildrenClosure150 = ($arguments149['message'] !== null) ? function() use ($arguments149) { return $arguments149['message']; } : $renderChildrenClosure150;
$output138 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output138 .= '
                                </noscript>
                                <div class="hidden t3js-login-error-nocookies">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['message'] = NULL;
$arguments153['title'] = NULL;
$arguments153['state'] = -2;
$arguments153['iconName'] = NULL;
$arguments153['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments155 = array();
$arguments155['key'] = NULL;
$arguments155['id'] = NULL;
$arguments155['default'] = NULL;
$arguments155['arguments'] = NULL;
$arguments155['extensionName'] = NULL;
$arguments155['languageKey'] = NULL;
$arguments155['alternativeLanguageKeys'] = NULL;
$arguments155['key'] = 'login.error.cookies';
$arguments153['message'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);
$arguments153['state'] = 2;
$renderChildrenClosure154 = ($arguments153['message'] !== null) ? function() use ($arguments153) { return $arguments153['message']; } : $renderChildrenClosure154;
$output138 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output138 .= '
                                </div>
                                <div class="typo3-login-form t3js-login-formfields">
                                    <form action="?loginProvider=';
$array157 = array (
);
$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('loginProviderIdentifier', $array157)]);

$output138 .= '" method="post" name="loginform" id="typo3-login-form">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['additionalAttributes'] = NULL;
$arguments158['data'] = NULL;
$arguments158['name'] = NULL;
$arguments158['value'] = NULL;
$arguments158['property'] = NULL;
$arguments158['class'] = NULL;
$arguments158['dir'] = NULL;
$arguments158['id'] = NULL;
$arguments158['lang'] = NULL;
$arguments158['style'] = NULL;
$arguments158['title'] = NULL;
$arguments158['accesskey'] = NULL;
$arguments158['tabindex'] = NULL;
$arguments158['onclick'] = NULL;
$arguments158['name'] = 'login_status';
$arguments158['value'] = 'login';

$output138 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output138 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments160 = array();
$arguments160['additionalAttributes'] = NULL;
$arguments160['data'] = NULL;
$arguments160['name'] = NULL;
$arguments160['value'] = NULL;
$arguments160['property'] = NULL;
$arguments160['class'] = NULL;
$arguments160['dir'] = NULL;
$arguments160['id'] = NULL;
$arguments160['lang'] = NULL;
$arguments160['style'] = NULL;
$arguments160['title'] = NULL;
$arguments160['accesskey'] = NULL;
$arguments160['tabindex'] = NULL;
$arguments160['onclick'] = NULL;
$arguments160['name'] = 'userident';
$arguments160['id'] = 't3-field-userident';
$arguments160['class'] = 't3js-login-userident-field';
$arguments160['value'] = '';

$output138 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);

$output138 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments162 = array();
$arguments162['additionalAttributes'] = NULL;
$arguments162['data'] = NULL;
$arguments162['name'] = NULL;
$arguments162['value'] = NULL;
$arguments162['property'] = NULL;
$arguments162['class'] = NULL;
$arguments162['dir'] = NULL;
$arguments162['id'] = NULL;
$arguments162['lang'] = NULL;
$arguments162['style'] = NULL;
$arguments162['title'] = NULL;
$arguments162['accesskey'] = NULL;
$arguments162['tabindex'] = NULL;
$arguments162['onclick'] = NULL;
$arguments162['name'] = 'redirect_url';
$array164 = array (
);$arguments162['value'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array164);

$output138 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output138 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments165 = array();
$arguments165['additionalAttributes'] = NULL;
$arguments165['data'] = NULL;
$arguments165['name'] = NULL;
$arguments165['value'] = NULL;
$arguments165['property'] = NULL;
$arguments165['class'] = NULL;
$arguments165['dir'] = NULL;
$arguments165['id'] = NULL;
$arguments165['lang'] = NULL;
$arguments165['style'] = NULL;
$arguments165['title'] = NULL;
$arguments165['accesskey'] = NULL;
$arguments165['tabindex'] = NULL;
$arguments165['onclick'] = NULL;
$arguments165['name'] = 'loginRefresh';
$array167 = array (
);$arguments165['value'] = $renderingContext->getVariableProvider()->getByPath('loginRefresh', $array167);

$output138 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output138 .= '

                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments168 = array();
$arguments168['section'] = NULL;
$arguments168['partial'] = NULL;
$arguments168['delegate'] = NULL;
$arguments168['renderable'] = NULL;
$arguments168['arguments'] = array (
);
$arguments168['optional'] = false;
$arguments168['default'] = NULL;
$arguments168['contentAs'] = NULL;
$arguments168['debug'] = true;
$arguments168['partial'] = 'Login/InterfaceSelector';
$arguments168['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output138 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output138 .= '

                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments171 = array();
$arguments171['section'] = NULL;
$arguments171['partial'] = NULL;
$arguments171['delegate'] = NULL;
$arguments171['renderable'] = NULL;
$arguments171['arguments'] = array (
);
$arguments171['optional'] = false;
$arguments171['default'] = NULL;
$arguments171['contentAs'] = NULL;
$arguments171['debug'] = true;
$arguments171['section'] = 'loginFormFields';

$output138 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output138 .= '

                                        <div class="form-group" id="t3-login-submit-section">
                                            <button class="btn btn-block btn-login t3js-login-submit" id="t3-login-submit" type="submit" name="commandLI" data-loading-text="<i class=\'fa fa-circle-o-notch fa-spin\'></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments173 = array();
$arguments173['key'] = NULL;
$arguments173['id'] = NULL;
$arguments173['default'] = NULL;
$arguments173['arguments'] = NULL;
$arguments173['extensionName'] = NULL;
$arguments173['languageKey'] = NULL;
$arguments173['alternativeLanguageKeys'] = NULL;
$arguments173['key'] = 'login.process';

$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext)]);

$output138 .= '" autocomplete="off">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments175 = array();
$arguments175['key'] = NULL;
$arguments175['id'] = NULL;
$arguments175['default'] = NULL;
$arguments175['arguments'] = NULL;
$arguments175['extensionName'] = NULL;
$arguments175['languageKey'] = NULL;
$arguments175['alternativeLanguageKeys'] = NULL;
$arguments175['key'] = 'login.submit';

$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext)]);

$output138 .= '
                                            </button>
                                        </div>
                                        <ul class="list-unstyled typo3-login-links">
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$output180 = '';

$output180 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
$output186 = '';

$output186 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$output193 = '';

$output193 .= '
                                                        <li class="t3js-loginprovider-switch" data-providerkey="';
$array194 = array (
);
$output193 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('providerKey', $array194)]);

$output193 .= '"><a href="?loginProvider=';
$array195 = array (
);
$output193 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('providerKey', $array195)]);

$output193 .= '"><i class="fa fa-fw ';
$array196 = array (
);
$output193 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('provider.icon-class', $array196)]);

$output193 .= '"></i> <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['key'] = NULL;
$arguments197['id'] = NULL;
$arguments197['default'] = NULL;
$arguments197['arguments'] = NULL;
$arguments197['extensionName'] = NULL;
$arguments197['languageKey'] = NULL;
$arguments197['alternativeLanguageKeys'] = NULL;
$array199 = array (
);$arguments197['key'] = $renderingContext->getVariableProvider()->getByPath('provider.label', $array199);

$output193 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext)]);

$output193 .= '</span></a></li>
                                                    ';
return $output193;
};
$arguments187 = array();
$arguments187['then'] = NULL;
$arguments187['else'] = NULL;
$arguments187['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array189 = array();
$array190 = array (
);$array189['0'] = $renderingContext->getVariableProvider()->getByPath('loginProviderIdentifier', $array190);
$array189['1'] = ' != ';
$array191 = array (
);$array189['2'] = $renderingContext->getVariableProvider()->getByPath('providerKey', $array191);

$expression192 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments187['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression192(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array189)
					),
					$renderingContext
				);
$arguments187['__thenClosure'] = $renderChildrenClosure188;

$output186 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output186 .= '
                                                ';
return $output186;
};
$arguments181 = array();
$arguments181['then'] = NULL;
$arguments181['else'] = NULL;
$arguments181['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array183 = array();
$array184 = array (
);$array183['0'] = $renderingContext->getVariableProvider()->getByPath('provider.label', $array184);

$expression185 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments181['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression185(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array183)
					),
					$renderingContext
				);
$arguments181['__thenClosure'] = $renderChildrenClosure182;

$output180 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output180 .= '
                                            ';
return $output180;
};
$arguments177 = array();
$arguments177['each'] = NULL;
$arguments177['as'] = NULL;
$arguments177['key'] = NULL;
$arguments177['reverse'] = false;
$arguments177['iteration'] = NULL;
$array179 = array (
);$arguments177['each'] = $renderingContext->getVariableProvider()->getByPath('loginProviders', $array179);
$arguments177['as'] = 'provider';
$arguments177['key'] = 'providerKey';

$output138 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output138 .= '
                                        </ul>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
$output205 = '';

$output205 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments206 = array();
$arguments206['section'] = NULL;
$arguments206['partial'] = NULL;
$arguments206['delegate'] = NULL;
$arguments206['renderable'] = NULL;
$arguments206['arguments'] = array (
);
$arguments206['optional'] = false;
$arguments206['default'] = NULL;
$arguments206['contentAs'] = NULL;
$arguments206['debug'] = true;
$arguments206['section'] = 'ResetPassword';
$arguments206['arguments'] = $renderingContext->getVariableProvider()->getAll();
// Rendering Boolean node
// Rendering Array
$array209 = array();
$array209['0'] = 'true';

$expression210 = function($context) {return TRUE;};
$arguments206['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression210(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array209)
					),
					$renderingContext
				);

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output205 .= '
                                        ';
return $output205;
};
$arguments200 = array();
$arguments200['then'] = NULL;
$arguments200['else'] = NULL;
$arguments200['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array202 = array();
$array203 = array (
);$array202['0'] = $renderingContext->getVariableProvider()->getByPath('enablePasswordReset', $array203);

$expression204 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments200['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression204(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array202)
					),
					$renderingContext
				);
$arguments200['__thenClosure'] = $renderChildrenClosure201;

$output138 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

$output138 .= '
                                    </form>
                                </div>
                            ';
return $output138;
};
$arguments136 = array();

$output135 .= '';

$output135 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['section'] = NULL;
$arguments217['partial'] = NULL;
$arguments217['delegate'] = NULL;
$arguments217['renderable'] = NULL;
$arguments217['arguments'] = array (
);
$arguments217['optional'] = false;
$arguments217['default'] = NULL;
$arguments217['contentAs'] = NULL;
$arguments217['debug'] = true;
$arguments217['section'] = 'ResetPassword';
$arguments217['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output216 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output216 .= '
                            ';
return $output216;
};
$arguments211 = array();
$arguments211['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array213 = array();
$array214 = array (
);$array213['0'] = $renderingContext->getVariableProvider()->getByPath('enablePasswordReset', $array214);

$expression215 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments211['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression215(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array213)
					),
					$renderingContext
				);

$output135 .= '';

$output135 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
$output222 = '';

$output222 .= '
                                <form action="index.php" method="post" name="loginform">
                                    <input type="hidden" name="login_status" value="logout" />
                                    <div class="t3-login-box-body">
                                        <div class="t3-login-logout-form">
                                            <div class="t3-login-username">
                                                <div class="t3-login-label t3-username">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments223 = array();
$arguments223['key'] = NULL;
$arguments223['id'] = NULL;
$arguments223['default'] = NULL;
$arguments223['arguments'] = NULL;
$arguments223['extensionName'] = NULL;
$arguments223['languageKey'] = NULL;
$arguments223['alternativeLanguageKeys'] = NULL;
$arguments223['key'] = 'login.username';

$output222 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext)]);

$output222 .= '
                                                </div>
                                                <div class="t3-username-current">
                                                    ';
$array225 = array (
);
$output222 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.username', $array225)]);

$output222 .= '
                                                </div>
                                            </div>
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$output247 = '';

$output247 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
$output250 = '';

$output250 .= '
                                                    <div class="t3-login-interface">
                                                        <div class="t3-login-label t3-interface-selector">
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments251 = array();
$arguments251['key'] = NULL;
$arguments251['id'] = NULL;
$arguments251['default'] = NULL;
$arguments251['arguments'] = NULL;
$arguments251['extensionName'] = NULL;
$arguments251['languageKey'] = NULL;
$arguments251['alternativeLanguageKeys'] = NULL;
$arguments251['key'] = 'login.interface';

$output250 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext)]);

$output250 .= '
                                                        </div>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments253 = array();
$arguments253['additionalAttributes'] = NULL;
$arguments253['data'] = NULL;
$arguments253['name'] = NULL;
$arguments253['value'] = NULL;
$arguments253['property'] = NULL;
$arguments253['class'] = NULL;
$arguments253['dir'] = NULL;
$arguments253['id'] = NULL;
$arguments253['lang'] = NULL;
$arguments253['style'] = NULL;
$arguments253['title'] = NULL;
$arguments253['accesskey'] = NULL;
$arguments253['tabindex'] = NULL;
$arguments253['onclick'] = NULL;
$arguments253['size'] = NULL;
$arguments253['disabled'] = NULL;
$arguments253['options'] = NULL;
$arguments253['optionsAfterContent'] = false;
$arguments253['optionValueField'] = NULL;
$arguments253['optionLabelField'] = NULL;
$arguments253['sortByOptionLabel'] = false;
$arguments253['selectAllByDefault'] = false;
$arguments253['errorClass'] = 'f3-form-error';
$arguments253['prependOptionLabel'] = NULL;
$arguments253['prependOptionValue'] = NULL;
$arguments253['multiple'] = false;
$arguments253['required'] = false;
$arguments253['name'] = 'users';
$array255 = array (
);$arguments253['options'] = $renderingContext->getVariableProvider()->getByPath('interfaces', $array255);
$arguments253['optionValueField'] = 'jumpScript';
$arguments253['optionLabelField'] = 'label';

$output250 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output250 .= '
                                                    </div>
                                                ';
return $output250;
};
$arguments248 = array();

$output247 .= '';

$output247 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
$output258 = '';

$output258 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
$output264 = '';

$output264 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments265 = array();
$arguments265['additionalAttributes'] = NULL;
$arguments265['data'] = NULL;
$arguments265['name'] = NULL;
$arguments265['value'] = NULL;
$arguments265['property'] = NULL;
$arguments265['class'] = NULL;
$arguments265['dir'] = NULL;
$arguments265['id'] = NULL;
$arguments265['lang'] = NULL;
$arguments265['style'] = NULL;
$arguments265['title'] = NULL;
$arguments265['accesskey'] = NULL;
$arguments265['tabindex'] = NULL;
$arguments265['onclick'] = NULL;
$arguments265['name'] = 'interface';
$array267 = array (
);$arguments265['value'] = $renderingContext->getVariableProvider()->getByPath('interface', $array267);

$output264 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext);

$output264 .= '
                                                    ';
return $output264;
};
$arguments259 = array();
$arguments259['then'] = NULL;
$arguments259['else'] = NULL;
$arguments259['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array261 = array();
$array262 = array (
);$array261['0'] = $renderingContext->getVariableProvider()->getByPath('interface', $array262);

$expression263 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments259['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression263(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array261)
					),
					$renderingContext
				);
$arguments259['__thenClosure'] = $renderChildrenClosure260;

$output258 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output258 .= '
                                                ';
return $output258;
};
$arguments256 = array();
$arguments256['if'] = NULL;

$output247 .= '';

$output247 .= '
                                            ';
return $output247;
};
$arguments226 = array();
$arguments226['then'] = NULL;
$arguments226['else'] = NULL;
$arguments226['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array244 = array();
$array245 = array (
);$array244['0'] = $renderingContext->getVariableProvider()->getByPath('showInterfaceSelector', $array245);

$expression246 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments226['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression246(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array244)
					),
					$renderingContext
				);
$arguments226['__thenClosure'] = function() use ($renderingContext, $self) {
$output228 = '';

$output228 .= '
                                                    <div class="t3-login-interface">
                                                        <div class="t3-login-label t3-interface-selector">
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['key'] = NULL;
$arguments229['id'] = NULL;
$arguments229['default'] = NULL;
$arguments229['arguments'] = NULL;
$arguments229['extensionName'] = NULL;
$arguments229['languageKey'] = NULL;
$arguments229['alternativeLanguageKeys'] = NULL;
$arguments229['key'] = 'login.interface';

$output228 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext)]);

$output228 .= '
                                                        </div>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['additionalAttributes'] = NULL;
$arguments231['data'] = NULL;
$arguments231['name'] = NULL;
$arguments231['value'] = NULL;
$arguments231['property'] = NULL;
$arguments231['class'] = NULL;
$arguments231['dir'] = NULL;
$arguments231['id'] = NULL;
$arguments231['lang'] = NULL;
$arguments231['style'] = NULL;
$arguments231['title'] = NULL;
$arguments231['accesskey'] = NULL;
$arguments231['tabindex'] = NULL;
$arguments231['onclick'] = NULL;
$arguments231['size'] = NULL;
$arguments231['disabled'] = NULL;
$arguments231['options'] = NULL;
$arguments231['optionsAfterContent'] = false;
$arguments231['optionValueField'] = NULL;
$arguments231['optionLabelField'] = NULL;
$arguments231['sortByOptionLabel'] = false;
$arguments231['selectAllByDefault'] = false;
$arguments231['errorClass'] = 'f3-form-error';
$arguments231['prependOptionLabel'] = NULL;
$arguments231['prependOptionValue'] = NULL;
$arguments231['multiple'] = false;
$arguments231['required'] = false;
$arguments231['name'] = 'users';
$array233 = array (
);$arguments231['options'] = $renderingContext->getVariableProvider()->getByPath('interfaces', $array233);
$arguments231['optionValueField'] = 'jumpScript';
$arguments231['optionLabelField'] = 'label';

$output228 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output228 .= '
                                                    </div>
                                                ';
return $output228;
};
$arguments226['__elseClosures'][] = function() use ($renderingContext, $self) {
$output234 = '';

$output234 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$output240 = '';

$output240 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['additionalAttributes'] = NULL;
$arguments241['data'] = NULL;
$arguments241['name'] = NULL;
$arguments241['value'] = NULL;
$arguments241['property'] = NULL;
$arguments241['class'] = NULL;
$arguments241['dir'] = NULL;
$arguments241['id'] = NULL;
$arguments241['lang'] = NULL;
$arguments241['style'] = NULL;
$arguments241['title'] = NULL;
$arguments241['accesskey'] = NULL;
$arguments241['tabindex'] = NULL;
$arguments241['onclick'] = NULL;
$arguments241['name'] = 'interface';
$array243 = array (
);$arguments241['value'] = $renderingContext->getVariableProvider()->getByPath('interface', $array243);

$output240 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output240 .= '
                                                    ';
return $output240;
};
$arguments235 = array();
$arguments235['then'] = NULL;
$arguments235['else'] = NULL;
$arguments235['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array237 = array();
$array238 = array (
);$array237['0'] = $renderingContext->getVariableProvider()->getByPath('interface', $array238);

$expression239 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments235['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression239(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array237)
					),
					$renderingContext
				);
$arguments235['__thenClosure'] = $renderChildrenClosure236;

$output234 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output234 .= '
                                                ';
return $output234;
};

$output222 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output222 .= '
                                            <input type="hidden" name="p_field" value="" />
                                            <input class="btn btn-block btn-lg" type="submit" name="commandLO" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments268 = array();
$arguments268['key'] = NULL;
$arguments268['id'] = NULL;
$arguments268['default'] = NULL;
$arguments268['arguments'] = NULL;
$arguments268['extensionName'] = NULL;
$arguments268['languageKey'] = NULL;
$arguments268['alternativeLanguageKeys'] = NULL;
$arguments268['key'] = 'login.submit';

$output222 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext)]);

$output222 .= '" id="t3-login-submit" />
                                        </div>
                                    </div>
                                </form>
                            ';
return $output222;
};
$arguments220 = array();
$arguments220['if'] = NULL;

$output135 .= '';

$output135 .= '
                        ';
return $output135;
};
$arguments2 = array();
$arguments2['then'] = NULL;
$arguments2['else'] = NULL;
$arguments2['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array132 = array();
$array133 = array (
);$array132['0'] = $renderingContext->getVariableProvider()->getByPath('formType', $array133);
$array132['1'] = ' == \'LoginForm\'';

$expression134 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'LoginForm');};
$arguments2['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression134(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array132)
					),
					$renderingContext
				);
$arguments2['__thenClosure'] = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                                    <div class="t3js-login-error" id="t3-login-error">
                                        <div class="alert alert-danger">
                                            <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['languageKey'] = NULL;
$arguments11['alternativeLanguageKeys'] = NULL;
$arguments11['key'] = 'login.error.message';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output10 .= '</strong>
                                            <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['key'] = NULL;
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['languageKey'] = NULL;
$arguments13['alternativeLanguageKeys'] = NULL;
$arguments13['key'] = 'login.error.description';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output10 .= '</p>
                                        </div>
                                    </div>
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
);$array7['0'] = $renderingContext->getVariableProvider()->getByPath('hasLoginError', $array8);

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)
					),
					$renderingContext
				);
$arguments5['__thenClosure'] = $renderChildrenClosure6;

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
                                <noscript>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['message'] = NULL;
$arguments15['title'] = NULL;
$arguments15['state'] = -2;
$arguments15['iconName'] = NULL;
$arguments15['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['languageKey'] = NULL;
$arguments17['alternativeLanguageKeys'] = NULL;
$arguments17['key'] = 'login.error.javascript';
$arguments15['message'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);
$arguments15['state'] = 2;
$renderChildrenClosure16 = ($arguments15['message'] !== null) ? function() use ($arguments15) { return $arguments15['message']; } : $renderChildrenClosure16;
$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output4 .= '
                                </noscript>
                                <div class="hidden t3js-login-error-nocookies">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['message'] = NULL;
$arguments19['title'] = NULL;
$arguments19['state'] = -2;
$arguments19['iconName'] = NULL;
$arguments19['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['key'] = NULL;
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['languageKey'] = NULL;
$arguments21['alternativeLanguageKeys'] = NULL;
$arguments21['key'] = 'login.error.cookies';
$arguments19['message'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);
$arguments19['state'] = 2;
$renderChildrenClosure20 = ($arguments19['message'] !== null) ? function() use ($arguments19) { return $arguments19['message']; } : $renderChildrenClosure20;
$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output4 .= '
                                </div>
                                <div class="typo3-login-form t3js-login-formfields">
                                    <form action="?loginProvider=';
$array23 = array (
);
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('loginProviderIdentifier', $array23)]);

$output4 .= '" method="post" name="loginform" id="typo3-login-form">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['name'] = NULL;
$arguments24['value'] = NULL;
$arguments24['property'] = NULL;
$arguments24['class'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$arguments24['name'] = 'login_status';
$arguments24['value'] = 'login';

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output4 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['additionalAttributes'] = NULL;
$arguments26['data'] = NULL;
$arguments26['name'] = NULL;
$arguments26['value'] = NULL;
$arguments26['property'] = NULL;
$arguments26['class'] = NULL;
$arguments26['dir'] = NULL;
$arguments26['id'] = NULL;
$arguments26['lang'] = NULL;
$arguments26['style'] = NULL;
$arguments26['title'] = NULL;
$arguments26['accesskey'] = NULL;
$arguments26['tabindex'] = NULL;
$arguments26['onclick'] = NULL;
$arguments26['name'] = 'userident';
$arguments26['id'] = 't3-field-userident';
$arguments26['class'] = 't3js-login-userident-field';
$arguments26['value'] = '';

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output4 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['name'] = NULL;
$arguments28['value'] = NULL;
$arguments28['property'] = NULL;
$arguments28['class'] = NULL;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$arguments28['name'] = 'redirect_url';
$array30 = array (
);$arguments28['value'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array30);

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output4 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['name'] = NULL;
$arguments31['value'] = NULL;
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
$arguments31['name'] = 'loginRefresh';
$array33 = array (
);$arguments31['value'] = $renderingContext->getVariableProvider()->getByPath('loginRefresh', $array33);

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output4 .= '

                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['section'] = NULL;
$arguments34['partial'] = NULL;
$arguments34['delegate'] = NULL;
$arguments34['renderable'] = NULL;
$arguments34['arguments'] = array (
);
$arguments34['optional'] = false;
$arguments34['default'] = NULL;
$arguments34['contentAs'] = NULL;
$arguments34['debug'] = true;
$arguments34['partial'] = 'Login/InterfaceSelector';
$arguments34['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output4 .= '

                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
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
$arguments37['debug'] = true;
$arguments37['section'] = 'loginFormFields';

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output4 .= '

                                        <div class="form-group" id="t3-login-submit-section">
                                            <button class="btn btn-block btn-login t3js-login-submit" id="t3-login-submit" type="submit" name="commandLI" data-loading-text="<i class=\'fa fa-circle-o-notch fa-spin\'></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['key'] = NULL;
$arguments39['id'] = NULL;
$arguments39['default'] = NULL;
$arguments39['arguments'] = NULL;
$arguments39['extensionName'] = NULL;
$arguments39['languageKey'] = NULL;
$arguments39['alternativeLanguageKeys'] = NULL;
$arguments39['key'] = 'login.process';

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext)]);

$output4 .= '" autocomplete="off">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['key'] = NULL;
$arguments41['id'] = NULL;
$arguments41['default'] = NULL;
$arguments41['arguments'] = NULL;
$arguments41['extensionName'] = NULL;
$arguments41['languageKey'] = NULL;
$arguments41['alternativeLanguageKeys'] = NULL;
$arguments41['key'] = 'login.submit';

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output4 .= '
                                            </button>
                                        </div>
                                        <ul class="list-unstyled typo3-login-links">
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
                                                        <li class="t3js-loginprovider-switch" data-providerkey="';
$array60 = array (
);
$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('providerKey', $array60)]);

$output59 .= '"><a href="?loginProvider=';
$array61 = array (
);
$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('providerKey', $array61)]);

$output59 .= '"><i class="fa fa-fw ';
$array62 = array (
);
$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('provider.icon-class', $array62)]);

$output59 .= '"></i> <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['key'] = NULL;
$arguments63['id'] = NULL;
$arguments63['default'] = NULL;
$arguments63['arguments'] = NULL;
$arguments63['extensionName'] = NULL;
$arguments63['languageKey'] = NULL;
$arguments63['alternativeLanguageKeys'] = NULL;
$array65 = array (
);$arguments63['key'] = $renderingContext->getVariableProvider()->getByPath('provider.label', $array65);

$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);

$output59 .= '</span></a></li>
                                                    ';
return $output59;
};
$arguments53 = array();
$arguments53['then'] = NULL;
$arguments53['else'] = NULL;
$arguments53['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array55 = array();
$array56 = array (
);$array55['0'] = $renderingContext->getVariableProvider()->getByPath('loginProviderIdentifier', $array56);
$array55['1'] = ' != ';
$array57 = array (
);$array55['2'] = $renderingContext->getVariableProvider()->getByPath('providerKey', $array57);

$expression58 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments53['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression58(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)
					),
					$renderingContext
				);
$arguments53['__thenClosure'] = $renderChildrenClosure54;

$output52 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
                                                ';
return $output52;
};
$arguments47 = array();
$arguments47['then'] = NULL;
$arguments47['else'] = NULL;
$arguments47['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['0'] = $renderingContext->getVariableProvider()->getByPath('provider.label', $array50);

$expression51 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments47['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression51(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)
					),
					$renderingContext
				);
$arguments47['__thenClosure'] = $renderChildrenClosure48;

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
                                            ';
return $output46;
};
$arguments43 = array();
$arguments43['each'] = NULL;
$arguments43['as'] = NULL;
$arguments43['key'] = NULL;
$arguments43['reverse'] = false;
$arguments43['iteration'] = NULL;
$array45 = array (
);$arguments43['each'] = $renderingContext->getVariableProvider()->getByPath('loginProviders', $array45);
$arguments43['as'] = 'provider';
$arguments43['key'] = 'providerKey';

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output4 .= '
                                        </ul>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['section'] = NULL;
$arguments72['partial'] = NULL;
$arguments72['delegate'] = NULL;
$arguments72['renderable'] = NULL;
$arguments72['arguments'] = array (
);
$arguments72['optional'] = false;
$arguments72['default'] = NULL;
$arguments72['contentAs'] = NULL;
$arguments72['debug'] = true;
$arguments72['section'] = 'ResetPassword';
$arguments72['arguments'] = $renderingContext->getVariableProvider()->getAll();
// Rendering Boolean node
// Rendering Array
$array75 = array();
$array75['0'] = 'true';

$expression76 = function($context) {return TRUE;};
$arguments72['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression76(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array75)
					),
					$renderingContext
				);

$output71 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output71 .= '
                                        ';
return $output71;
};
$arguments66 = array();
$arguments66['then'] = NULL;
$arguments66['else'] = NULL;
$arguments66['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array68 = array();
$array69 = array (
);$array68['0'] = $renderingContext->getVariableProvider()->getByPath('enablePasswordReset', $array69);

$expression70 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments66['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression70(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)
					),
					$renderingContext
				);
$arguments66['__thenClosure'] = $renderChildrenClosure67;

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output4 .= '
                                    </form>
                                </div>
                            ';
return $output4;
};
$arguments2['__elseClosures'][] = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['section'] = NULL;
$arguments78['partial'] = NULL;
$arguments78['delegate'] = NULL;
$arguments78['renderable'] = NULL;
$arguments78['arguments'] = array (
);
$arguments78['optional'] = false;
$arguments78['default'] = NULL;
$arguments78['contentAs'] = NULL;
$arguments78['debug'] = true;
$arguments78['section'] = 'ResetPassword';
$arguments78['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '
                            ';
return $output77;
};
$arguments2['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['0'] = $renderingContext->getVariableProvider()->getByPath('enablePasswordReset', $array82);

$expression83 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression83(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array81)
					),
					$renderingContext
				);
};
$arguments2['__elseClosures'][] = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
                                <form action="index.php" method="post" name="loginform">
                                    <input type="hidden" name="login_status" value="logout" />
                                    <div class="t3-login-box-body">
                                        <div class="t3-login-logout-form">
                                            <div class="t3-login-username">
                                                <div class="t3-login-label t3-username">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['key'] = NULL;
$arguments85['id'] = NULL;
$arguments85['default'] = NULL;
$arguments85['arguments'] = NULL;
$arguments85['extensionName'] = NULL;
$arguments85['languageKey'] = NULL;
$arguments85['alternativeLanguageKeys'] = NULL;
$arguments85['key'] = 'login.username';

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext)]);

$output84 .= '
                                                </div>
                                                <div class="t3-username-current">
                                                    ';
$array87 = array (
);
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.username', $array87)]);

$output84 .= '
                                                </div>
                                            </div>
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
                                                    <div class="t3-login-interface">
                                                        <div class="t3-login-label t3-interface-selector">
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments113 = array();
$arguments113['key'] = NULL;
$arguments113['id'] = NULL;
$arguments113['default'] = NULL;
$arguments113['arguments'] = NULL;
$arguments113['extensionName'] = NULL;
$arguments113['languageKey'] = NULL;
$arguments113['alternativeLanguageKeys'] = NULL;
$arguments113['key'] = 'login.interface';

$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext)]);

$output112 .= '
                                                        </div>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['additionalAttributes'] = NULL;
$arguments115['data'] = NULL;
$arguments115['name'] = NULL;
$arguments115['value'] = NULL;
$arguments115['property'] = NULL;
$arguments115['class'] = NULL;
$arguments115['dir'] = NULL;
$arguments115['id'] = NULL;
$arguments115['lang'] = NULL;
$arguments115['style'] = NULL;
$arguments115['title'] = NULL;
$arguments115['accesskey'] = NULL;
$arguments115['tabindex'] = NULL;
$arguments115['onclick'] = NULL;
$arguments115['size'] = NULL;
$arguments115['disabled'] = NULL;
$arguments115['options'] = NULL;
$arguments115['optionsAfterContent'] = false;
$arguments115['optionValueField'] = NULL;
$arguments115['optionLabelField'] = NULL;
$arguments115['sortByOptionLabel'] = false;
$arguments115['selectAllByDefault'] = false;
$arguments115['errorClass'] = 'f3-form-error';
$arguments115['prependOptionLabel'] = NULL;
$arguments115['prependOptionValue'] = NULL;
$arguments115['multiple'] = false;
$arguments115['required'] = false;
$arguments115['name'] = 'users';
$array117 = array (
);$arguments115['options'] = $renderingContext->getVariableProvider()->getByPath('interfaces', $array117);
$arguments115['optionValueField'] = 'jumpScript';
$arguments115['optionLabelField'] = 'label';

$output112 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output112 .= '
                                                    </div>
                                                ';
return $output112;
};
$arguments110 = array();

$output109 .= '';

$output109 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments127 = array();
$arguments127['additionalAttributes'] = NULL;
$arguments127['data'] = NULL;
$arguments127['name'] = NULL;
$arguments127['value'] = NULL;
$arguments127['property'] = NULL;
$arguments127['class'] = NULL;
$arguments127['dir'] = NULL;
$arguments127['id'] = NULL;
$arguments127['lang'] = NULL;
$arguments127['style'] = NULL;
$arguments127['title'] = NULL;
$arguments127['accesskey'] = NULL;
$arguments127['tabindex'] = NULL;
$arguments127['onclick'] = NULL;
$arguments127['name'] = 'interface';
$array129 = array (
);$arguments127['value'] = $renderingContext->getVariableProvider()->getByPath('interface', $array129);

$output126 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output126 .= '
                                                    ';
return $output126;
};
$arguments121 = array();
$arguments121['then'] = NULL;
$arguments121['else'] = NULL;
$arguments121['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array123 = array();
$array124 = array (
);$array123['0'] = $renderingContext->getVariableProvider()->getByPath('interface', $array124);

$expression125 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments121['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression125(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array123)
					),
					$renderingContext
				);
$arguments121['__thenClosure'] = $renderChildrenClosure122;

$output120 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output120 .= '
                                                ';
return $output120;
};
$arguments118 = array();
$arguments118['if'] = NULL;

$output109 .= '';

$output109 .= '
                                            ';
return $output109;
};
$arguments88 = array();
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$arguments88['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array106 = array();
$array107 = array (
);$array106['0'] = $renderingContext->getVariableProvider()->getByPath('showInterfaceSelector', $array107);

$expression108 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments88['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression108(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array106)
					),
					$renderingContext
				);
$arguments88['__thenClosure'] = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
                                                    <div class="t3-login-interface">
                                                        <div class="t3-login-label t3-interface-selector">
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['key'] = NULL;
$arguments91['id'] = NULL;
$arguments91['default'] = NULL;
$arguments91['arguments'] = NULL;
$arguments91['extensionName'] = NULL;
$arguments91['languageKey'] = NULL;
$arguments91['alternativeLanguageKeys'] = NULL;
$arguments91['key'] = 'login.interface';

$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext)]);

$output90 .= '
                                                        </div>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['additionalAttributes'] = NULL;
$arguments93['data'] = NULL;
$arguments93['name'] = NULL;
$arguments93['value'] = NULL;
$arguments93['property'] = NULL;
$arguments93['class'] = NULL;
$arguments93['dir'] = NULL;
$arguments93['id'] = NULL;
$arguments93['lang'] = NULL;
$arguments93['style'] = NULL;
$arguments93['title'] = NULL;
$arguments93['accesskey'] = NULL;
$arguments93['tabindex'] = NULL;
$arguments93['onclick'] = NULL;
$arguments93['size'] = NULL;
$arguments93['disabled'] = NULL;
$arguments93['options'] = NULL;
$arguments93['optionsAfterContent'] = false;
$arguments93['optionValueField'] = NULL;
$arguments93['optionLabelField'] = NULL;
$arguments93['sortByOptionLabel'] = false;
$arguments93['selectAllByDefault'] = false;
$arguments93['errorClass'] = 'f3-form-error';
$arguments93['prependOptionLabel'] = NULL;
$arguments93['prependOptionValue'] = NULL;
$arguments93['multiple'] = false;
$arguments93['required'] = false;
$arguments93['name'] = 'users';
$array95 = array (
);$arguments93['options'] = $renderingContext->getVariableProvider()->getByPath('interfaces', $array95);
$arguments93['optionValueField'] = 'jumpScript';
$arguments93['optionLabelField'] = 'label';

$output90 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output90 .= '
                                                    </div>
                                                ';
return $output90;
};
$arguments88['__elseClosures'][] = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output102 = '';

$output102 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments103 = array();
$arguments103['additionalAttributes'] = NULL;
$arguments103['data'] = NULL;
$arguments103['name'] = NULL;
$arguments103['value'] = NULL;
$arguments103['property'] = NULL;
$arguments103['class'] = NULL;
$arguments103['dir'] = NULL;
$arguments103['id'] = NULL;
$arguments103['lang'] = NULL;
$arguments103['style'] = NULL;
$arguments103['title'] = NULL;
$arguments103['accesskey'] = NULL;
$arguments103['tabindex'] = NULL;
$arguments103['onclick'] = NULL;
$arguments103['name'] = 'interface';
$array105 = array (
);$arguments103['value'] = $renderingContext->getVariableProvider()->getByPath('interface', $array105);

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output102 .= '
                                                    ';
return $output102;
};
$arguments97 = array();
$arguments97['then'] = NULL;
$arguments97['else'] = NULL;
$arguments97['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array99 = array();
$array100 = array (
);$array99['0'] = $renderingContext->getVariableProvider()->getByPath('interface', $array100);

$expression101 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments97['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression101(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array99)
					),
					$renderingContext
				);
$arguments97['__thenClosure'] = $renderChildrenClosure98;

$output96 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '
                                                ';
return $output96;
};

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output84 .= '
                                            <input type="hidden" name="p_field" value="" />
                                            <input class="btn btn-block btn-lg" type="submit" name="commandLO" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments130 = array();
$arguments130['key'] = NULL;
$arguments130['id'] = NULL;
$arguments130['default'] = NULL;
$arguments130['arguments'] = NULL;
$arguments130['extensionName'] = NULL;
$arguments130['languageKey'] = NULL;
$arguments130['alternativeLanguageKeys'] = NULL;
$arguments130['key'] = 'login.submit';

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext)]);

$output84 .= '" id="t3-login-submit" />
                                        </div>
                                    </div>
                                </form>
                            ';
return $output84;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '
                    </div>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments270 = array();
$arguments270['section'] = NULL;
$arguments270['partial'] = NULL;
$arguments270['delegate'] = NULL;
$arguments270['renderable'] = NULL;
$arguments270['arguments'] = array (
);
$arguments270['optional'] = false;
$arguments270['default'] = NULL;
$arguments270['contentAs'] = NULL;
$arguments270['debug'] = true;
$arguments270['partial'] = 'LoginNews';
$arguments270['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext);

$output0 .= '
                    <div class="panel-footer">
                        <div class="typo3-login-copyright-wrap">
                            <a href="#loginCopyright" class="typo3-login-copyright-link collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="loginCopyright">
                                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments273 = array();
$arguments273['key'] = NULL;
$arguments273['id'] = NULL;
$arguments273['default'] = NULL;
$arguments273['arguments'] = NULL;
$arguments273['extensionName'] = NULL;
$arguments273['languageKey'] = NULL;
$arguments273['alternativeLanguageKeys'] = NULL;
$arguments273['key'] = 'login.copyrightLink';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext)]);

$output0 .= '</span>
                                <img src="';
$array275 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('images.typo3', $array275)]);

$output0 .= '" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments276 = array();
$arguments276['key'] = NULL;
$arguments276['id'] = NULL;
$arguments276['default'] = NULL;
$arguments276['arguments'] = NULL;
$arguments276['extensionName'] = NULL;
$arguments276['languageKey'] = NULL;
$arguments276['alternativeLanguageKeys'] = NULL;
$arguments276['key'] = 'login.typo3Logo';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext)]);

$output0 .= '" width="70" height="20" />
                            </a>
                            <div id="loginCopyright" class="collapse">
                                <div class="typo3-login-copyright-text">
                                    <p>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
$array280 = array (
);return $renderingContext->getVariableProvider()->getByPath('copyright', $array280);
};
$arguments278 = array();
$arguments278['value'] = NULL;

$output0 .= isset($arguments278['value']) ? $arguments278['value'] : $renderChildrenClosure279();

$output0 .= '
                                    </p>
                                    <ul class="list-unstyled">
                                        <li><a href="https://typo3.org" target="_blank" rel="noreferrer" class="t3-login-link-typo3"><i class="fa fa-external-link"></i> TYPO3.org</a></li>
                                        <li><a href="https://typo3.org/donate/online-donation/" target="_blank" rel="noreferrer" class="t3-login-link-donate"><i class="fa fa-external-link"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments281 = array();
$arguments281['key'] = NULL;
$arguments281['id'] = NULL;
$arguments281['default'] = NULL;
$arguments281['arguments'] = NULL;
$arguments281['extensionName'] = NULL;
$arguments281['languageKey'] = NULL;
$arguments281['alternativeLanguageKeys'] = NULL;
$arguments281['key'] = 'login.donate';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext)]);

$output0 .= '</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$output288 = '';

$output288 .= '
            <div class="typo3-login-footnote">
                <p>';
$array289 = array (
);
$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('loginFootnote', $array289)]);

$output288 .= '</p>
            </div>
        ';
return $output288;
};
$arguments283 = array();
$arguments283['then'] = NULL;
$arguments283['else'] = NULL;
$arguments283['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array285 = array();
$array286 = array (
);$array285['0'] = $renderingContext->getVariableProvider()->getByPath('loginFootnote', $array286);

$expression287 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments283['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression287(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array285)
					),
					$renderingContext
				);
$arguments283['__thenClosure'] = $renderChildrenClosure284;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);

$output0 .= '
    </div>
</div>
';

return $output0;
}


}
#