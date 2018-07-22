<?php

class layout_Login_html_9da82bab2fbdf71e528f369d937679359fb50b2d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="typo3-login">
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
$output117 = '';

$output117 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
								<div class="t3js-login-error" id="t3-login-error">
									<div class="alert alert-danger">
										<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments127 = array();
$arguments127['key'] = NULL;
$arguments127['id'] = NULL;
$arguments127['default'] = NULL;
$arguments127['htmlEscape'] = NULL;
$arguments127['arguments'] = NULL;
$arguments127['extensionName'] = NULL;
$arguments127['key'] = 'login.error.message';

$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext)]);

$output126 .= '</strong>
										<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments129 = array();
$arguments129['key'] = NULL;
$arguments129['id'] = NULL;
$arguments129['default'] = NULL;
$arguments129['htmlEscape'] = NULL;
$arguments129['arguments'] = NULL;
$arguments129['extensionName'] = NULL;
$arguments129['key'] = 'login.error.description';

$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext)]);

$output126 .= '</p>
									</div>
								</div>
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
);$array123['0'] = $renderingContext->getVariableProvider()->getByPath('hasLoginError', $array124);

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
							<noscript>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments131 = array();
$arguments131['message'] = NULL;
$arguments131['title'] = NULL;
$arguments131['state'] = -2;
$arguments131['iconName'] = NULL;
$arguments131['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['key'] = NULL;
$arguments133['id'] = NULL;
$arguments133['default'] = NULL;
$arguments133['htmlEscape'] = NULL;
$arguments133['arguments'] = NULL;
$arguments133['extensionName'] = NULL;
$arguments133['key'] = 'login.error.javascript';
$arguments131['message'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);
$arguments131['state'] = 2;
$renderChildrenClosure132 = ($arguments131['message'] !== null) ? function() use ($arguments131) { return $arguments131['message']; } : $renderChildrenClosure132;
$output120 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output120 .= '
							</noscript>
							<div class="hidden t3js-login-error-nocookies">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments135 = array();
$arguments135['message'] = NULL;
$arguments135['title'] = NULL;
$arguments135['state'] = -2;
$arguments135['iconName'] = NULL;
$arguments135['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments137 = array();
$arguments137['key'] = NULL;
$arguments137['id'] = NULL;
$arguments137['default'] = NULL;
$arguments137['htmlEscape'] = NULL;
$arguments137['arguments'] = NULL;
$arguments137['extensionName'] = NULL;
$arguments137['key'] = 'login.error.cookies';
$arguments135['message'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);
$arguments135['state'] = 2;
$renderChildrenClosure136 = ($arguments135['message'] !== null) ? function() use ($arguments135) { return $arguments135['message']; } : $renderChildrenClosure136;
$output120 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output120 .= '
							</div>
							<div class="typo3-login-form t3js-login-formfields">
								<form action="?loginProvider=';
$array139 = array (
);
$output120 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('loginProviderIdentifier', $array139)]);

$output120 .= '" method="post" name="loginform" id="typo3-login-form">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['additionalAttributes'] = NULL;
$arguments140['data'] = NULL;
$arguments140['name'] = NULL;
$arguments140['value'] = NULL;
$arguments140['property'] = NULL;
$arguments140['class'] = NULL;
$arguments140['dir'] = NULL;
$arguments140['id'] = NULL;
$arguments140['lang'] = NULL;
$arguments140['style'] = NULL;
$arguments140['title'] = NULL;
$arguments140['accesskey'] = NULL;
$arguments140['tabindex'] = NULL;
$arguments140['onclick'] = NULL;
$arguments140['name'] = 'login_status';
$arguments140['value'] = 'login';

$output120 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output120 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['additionalAttributes'] = NULL;
$arguments142['data'] = NULL;
$arguments142['name'] = NULL;
$arguments142['value'] = NULL;
$arguments142['property'] = NULL;
$arguments142['class'] = NULL;
$arguments142['dir'] = NULL;
$arguments142['id'] = NULL;
$arguments142['lang'] = NULL;
$arguments142['style'] = NULL;
$arguments142['title'] = NULL;
$arguments142['accesskey'] = NULL;
$arguments142['tabindex'] = NULL;
$arguments142['onclick'] = NULL;
$arguments142['name'] = 'userident';
$arguments142['id'] = 't3-field-userident';
$arguments142['class'] = 't3js-login-userident-field';
$arguments142['value'] = '';

$output120 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output120 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments144 = array();
$arguments144['additionalAttributes'] = NULL;
$arguments144['data'] = NULL;
$arguments144['name'] = NULL;
$arguments144['value'] = NULL;
$arguments144['property'] = NULL;
$arguments144['class'] = NULL;
$arguments144['dir'] = NULL;
$arguments144['id'] = NULL;
$arguments144['lang'] = NULL;
$arguments144['style'] = NULL;
$arguments144['title'] = NULL;
$arguments144['accesskey'] = NULL;
$arguments144['tabindex'] = NULL;
$arguments144['onclick'] = NULL;
$arguments144['name'] = 'redirect_url';
$array146 = array (
);$arguments144['value'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array146);

$output120 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output120 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments147 = array();
$arguments147['additionalAttributes'] = NULL;
$arguments147['data'] = NULL;
$arguments147['name'] = NULL;
$arguments147['value'] = NULL;
$arguments147['property'] = NULL;
$arguments147['class'] = NULL;
$arguments147['dir'] = NULL;
$arguments147['id'] = NULL;
$arguments147['lang'] = NULL;
$arguments147['style'] = NULL;
$arguments147['title'] = NULL;
$arguments147['accesskey'] = NULL;
$arguments147['tabindex'] = NULL;
$arguments147['onclick'] = NULL;
$arguments147['name'] = 'loginRefresh';
$array149 = array (
);$arguments147['value'] = $renderingContext->getVariableProvider()->getByPath('loginRefresh', $array149);

$output120 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output120 .= '

									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['section'] = NULL;
$arguments150['partial'] = NULL;
$arguments150['delegate'] = NULL;
$arguments150['renderable'] = NULL;
$arguments150['arguments'] = array (
);
$arguments150['optional'] = false;
$arguments150['default'] = NULL;
$arguments150['contentAs'] = NULL;
$arguments150['partial'] = 'Login/InterfaceSelector';
$arguments150['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output120 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output120 .= '

									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['section'] = NULL;
$arguments153['partial'] = NULL;
$arguments153['delegate'] = NULL;
$arguments153['renderable'] = NULL;
$arguments153['arguments'] = array (
);
$arguments153['optional'] = false;
$arguments153['default'] = NULL;
$arguments153['contentAs'] = NULL;
$arguments153['section'] = 'loginFormFields';

$output120 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output120 .= '

									<div class="form-group" id="t3-login-submit-section">
										<button class="btn btn-block btn-login t3js-login-submit" id="t3-login-submit" type="submit" name="commandLI" data-loading-text="<i class=\'fa fa-circle-o-notch fa-spin\'></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments155 = array();
$arguments155['key'] = NULL;
$arguments155['id'] = NULL;
$arguments155['default'] = NULL;
$arguments155['htmlEscape'] = NULL;
$arguments155['arguments'] = NULL;
$arguments155['extensionName'] = NULL;
$arguments155['key'] = 'login.process';

$output120 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext)]);

$output120 .= '" autocomplete="off">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments157 = array();
$arguments157['key'] = NULL;
$arguments157['id'] = NULL;
$arguments157['default'] = NULL;
$arguments157['htmlEscape'] = NULL;
$arguments157['arguments'] = NULL;
$arguments157['extensionName'] = NULL;
$arguments157['key'] = 'login.submit';

$output120 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext)]);

$output120 .= '
										</button>
									</div>
									<ul class="list-unstyled typo3-login-links">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$output162 = '';

$output162 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
$output168 = '';

$output168 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$output175 = '';

$output175 .= '
													<li class="t3js-loginprovider-switch" data-providerkey="';
$array176 = array (
);
$output175 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('providerKey', $array176)]);

$output175 .= '"><a href="?loginProvider=';
$array177 = array (
);
$output175 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('providerKey', $array177)]);

$output175 .= '"><i class="fa fa-fw ';
$array178 = array (
);
$output175 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('provider.icon-class', $array178)]);

$output175 .= '"></i> <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments179 = array();
$arguments179['key'] = NULL;
$arguments179['id'] = NULL;
$arguments179['default'] = NULL;
$arguments179['htmlEscape'] = NULL;
$arguments179['arguments'] = NULL;
$arguments179['extensionName'] = NULL;
$array181 = array (
);$arguments179['key'] = $renderingContext->getVariableProvider()->getByPath('provider.label', $array181);

$output175 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext)]);

$output175 .= '</span></a></li>
												';
return $output175;
};
$arguments169 = array();
$arguments169['then'] = NULL;
$arguments169['else'] = NULL;
$arguments169['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array171 = array();
$array172 = array (
);$array171['0'] = $renderingContext->getVariableProvider()->getByPath('loginProviderIdentifier', $array172);
$array171['1'] = ' != ';
$array173 = array (
);$array171['2'] = $renderingContext->getVariableProvider()->getByPath('providerKey', $array173);

$expression174 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments169['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression174(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array171)
					),
					$renderingContext
				);
$arguments169['__thenClosure'] = $renderChildrenClosure170;

$output168 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output168 .= '
											';
return $output168;
};
$arguments163 = array();
$arguments163['then'] = NULL;
$arguments163['else'] = NULL;
$arguments163['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array165 = array();
$array166 = array (
);$array165['0'] = $renderingContext->getVariableProvider()->getByPath('provider.label', $array166);

$expression167 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments163['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression167(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array165)
					),
					$renderingContext
				);
$arguments163['__thenClosure'] = $renderChildrenClosure164;

$output162 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output162 .= '
										';
return $output162;
};
$arguments159 = array();
$arguments159['each'] = NULL;
$arguments159['as'] = NULL;
$arguments159['key'] = NULL;
$arguments159['reverse'] = false;
$arguments159['iteration'] = NULL;
$array161 = array (
);$arguments159['each'] = $renderingContext->getVariableProvider()->getByPath('loginProviders', $array161);
$arguments159['as'] = 'provider';
$arguments159['key'] = 'providerKey';

$output120 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output120 .= '
									</ul>
								</form>
							</div>
						';
return $output120;
};
$arguments118 = array();

$output117 .= '';

$output117 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$output184 = '';

$output184 .= '
							<form action="../../../../../../index.php" method="post" name="loginform">
								<input type="hidden" name="login_status" value="logout" />
								<div class="t3-login-box-body">
									<div class="t3-login-logout-form">
										<div class="t3-login-username">
											<div class="t3-login-label t3-username">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments185 = array();
$arguments185['key'] = NULL;
$arguments185['id'] = NULL;
$arguments185['default'] = NULL;
$arguments185['htmlEscape'] = NULL;
$arguments185['arguments'] = NULL;
$arguments185['extensionName'] = NULL;
$arguments185['key'] = 'login.username';

$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext)]);

$output184 .= '
											</div>
											<div class="t3-username-current">
												';
$array187 = array (
);
$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.username', $array187)]);

$output184 .= '
											</div>
										</div>
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$output209 = '';

$output209 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
$output212 = '';

$output212 .= '
												<div class="t3-login-interface">
													<div class="t3-login-label t3-interface-selector">
														';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments213 = array();
$arguments213['key'] = NULL;
$arguments213['id'] = NULL;
$arguments213['default'] = NULL;
$arguments213['htmlEscape'] = NULL;
$arguments213['arguments'] = NULL;
$arguments213['extensionName'] = NULL;
$arguments213['key'] = 'login.interface';

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext)]);

$output212 .= '
													</div>
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['additionalAttributes'] = NULL;
$arguments215['data'] = NULL;
$arguments215['name'] = NULL;
$arguments215['value'] = NULL;
$arguments215['property'] = NULL;
$arguments215['class'] = NULL;
$arguments215['dir'] = NULL;
$arguments215['id'] = NULL;
$arguments215['lang'] = NULL;
$arguments215['style'] = NULL;
$arguments215['title'] = NULL;
$arguments215['accesskey'] = NULL;
$arguments215['tabindex'] = NULL;
$arguments215['onclick'] = NULL;
$arguments215['size'] = NULL;
$arguments215['disabled'] = NULL;
$arguments215['options'] = NULL;
$arguments215['optionsAfterContent'] = false;
$arguments215['optionValueField'] = NULL;
$arguments215['optionLabelField'] = NULL;
$arguments215['sortByOptionLabel'] = false;
$arguments215['selectAllByDefault'] = false;
$arguments215['errorClass'] = 'f3-form-error';
$arguments215['prependOptionLabel'] = NULL;
$arguments215['prependOptionValue'] = NULL;
$arguments215['multiple'] = false;
$arguments215['name'] = 'users';
$array217 = array (
);$arguments215['options'] = $renderingContext->getVariableProvider()->getByPath('interfaces', $array217);
$arguments215['optionValueField'] = 'jumpScript';
$arguments215['optionLabelField'] = 'label';

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output212 .= '
												</div>
											';
return $output212;
};
$arguments210 = array();

$output209 .= '';

$output209 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
$output220 = '';

$output220 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
$output226 = '';

$output226 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['additionalAttributes'] = NULL;
$arguments227['data'] = NULL;
$arguments227['name'] = NULL;
$arguments227['value'] = NULL;
$arguments227['property'] = NULL;
$arguments227['class'] = NULL;
$arguments227['dir'] = NULL;
$arguments227['id'] = NULL;
$arguments227['lang'] = NULL;
$arguments227['style'] = NULL;
$arguments227['title'] = NULL;
$arguments227['accesskey'] = NULL;
$arguments227['tabindex'] = NULL;
$arguments227['onclick'] = NULL;
$arguments227['name'] = 'interface';
$array229 = array (
);$arguments227['value'] = $renderingContext->getVariableProvider()->getByPath('interface', $array229);

$output226 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output226 .= '
												';
return $output226;
};
$arguments221 = array();
$arguments221['then'] = NULL;
$arguments221['else'] = NULL;
$arguments221['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array223 = array();
$array224 = array (
);$array223['0'] = $renderingContext->getVariableProvider()->getByPath('interface', $array224);

$expression225 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments221['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression225(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array223)
					),
					$renderingContext
				);
$arguments221['__thenClosure'] = $renderChildrenClosure222;

$output220 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output220 .= '
											';
return $output220;
};
$arguments218 = array();
$arguments218['if'] = NULL;

$output209 .= '';

$output209 .= '
										';
return $output209;
};
$arguments188 = array();
$arguments188['then'] = NULL;
$arguments188['else'] = NULL;
$arguments188['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array206 = array();
$array207 = array (
);$array206['0'] = $renderingContext->getVariableProvider()->getByPath('showInterfaceSelector', $array207);

$expression208 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments188['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression208(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array206)
					),
					$renderingContext
				);
$arguments188['__thenClosure'] = function() use ($renderingContext, $self) {
$output190 = '';

$output190 .= '
												<div class="t3-login-interface">
													<div class="t3-login-label t3-interface-selector">
														';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['key'] = NULL;
$arguments191['id'] = NULL;
$arguments191['default'] = NULL;
$arguments191['htmlEscape'] = NULL;
$arguments191['arguments'] = NULL;
$arguments191['extensionName'] = NULL;
$arguments191['key'] = 'login.interface';

$output190 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext)]);

$output190 .= '
													</div>
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['additionalAttributes'] = NULL;
$arguments193['data'] = NULL;
$arguments193['name'] = NULL;
$arguments193['value'] = NULL;
$arguments193['property'] = NULL;
$arguments193['class'] = NULL;
$arguments193['dir'] = NULL;
$arguments193['id'] = NULL;
$arguments193['lang'] = NULL;
$arguments193['style'] = NULL;
$arguments193['title'] = NULL;
$arguments193['accesskey'] = NULL;
$arguments193['tabindex'] = NULL;
$arguments193['onclick'] = NULL;
$arguments193['size'] = NULL;
$arguments193['disabled'] = NULL;
$arguments193['options'] = NULL;
$arguments193['optionsAfterContent'] = false;
$arguments193['optionValueField'] = NULL;
$arguments193['optionLabelField'] = NULL;
$arguments193['sortByOptionLabel'] = false;
$arguments193['selectAllByDefault'] = false;
$arguments193['errorClass'] = 'f3-form-error';
$arguments193['prependOptionLabel'] = NULL;
$arguments193['prependOptionValue'] = NULL;
$arguments193['multiple'] = false;
$arguments193['name'] = 'users';
$array195 = array (
);$arguments193['options'] = $renderingContext->getVariableProvider()->getByPath('interfaces', $array195);
$arguments193['optionValueField'] = 'jumpScript';
$arguments193['optionLabelField'] = 'label';

$output190 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output190 .= '
												</div>
											';
return $output190;
};
$arguments188['__elseClosures'][] = function() use ($renderingContext, $self) {
$output196 = '';

$output196 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
$output202 = '';

$output202 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments203 = array();
$arguments203['additionalAttributes'] = NULL;
$arguments203['data'] = NULL;
$arguments203['name'] = NULL;
$arguments203['value'] = NULL;
$arguments203['property'] = NULL;
$arguments203['class'] = NULL;
$arguments203['dir'] = NULL;
$arguments203['id'] = NULL;
$arguments203['lang'] = NULL;
$arguments203['style'] = NULL;
$arguments203['title'] = NULL;
$arguments203['accesskey'] = NULL;
$arguments203['tabindex'] = NULL;
$arguments203['onclick'] = NULL;
$arguments203['name'] = 'interface';
$array205 = array (
);$arguments203['value'] = $renderingContext->getVariableProvider()->getByPath('interface', $array205);

$output202 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output202 .= '
												';
return $output202;
};
$arguments197 = array();
$arguments197['then'] = NULL;
$arguments197['else'] = NULL;
$arguments197['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array199 = array();
$array200 = array (
);$array199['0'] = $renderingContext->getVariableProvider()->getByPath('interface', $array200);

$expression201 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments197['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression201(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array199)
					),
					$renderingContext
				);
$arguments197['__thenClosure'] = $renderChildrenClosure198;

$output196 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output196 .= '
											';
return $output196;
};

$output184 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output184 .= '
										<input type="hidden" name="p_field" value="" />
										<input class="btn btn-block btn-lg" type="submit" name="commandLO" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments230 = array();
$arguments230['key'] = NULL;
$arguments230['id'] = NULL;
$arguments230['default'] = NULL;
$arguments230['htmlEscape'] = NULL;
$arguments230['arguments'] = NULL;
$arguments230['extensionName'] = NULL;
$arguments230['key'] = 'login.submit';

$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext)]);

$output184 .= '" id="t3-login-submit" />
									</div>
								</div>
							</form>
						';
return $output184;
};
$arguments182 = array();
$arguments182['if'] = NULL;

$output117 .= '';

$output117 .= '
					';
return $output117;
};
$arguments2 = array();
$arguments2['then'] = NULL;
$arguments2['else'] = NULL;
$arguments2['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array114 = array();
$array115 = array (
);$array114['0'] = $renderingContext->getVariableProvider()->getByPath('formType', $array115);
$array114['1'] = ' == \'LoginForm\'';

$expression116 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'LoginForm');};
$arguments2['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression116(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array114)
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
$arguments11['htmlEscape'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
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
$arguments13['htmlEscape'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
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
$arguments17['htmlEscape'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
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
$arguments21['htmlEscape'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
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
$arguments34['partial'] = 'Login/InterfaceSelector';
$arguments34['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output4 .= '

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
$arguments37['section'] = 'loginFormFields';

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

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
$arguments39['htmlEscape'] = NULL;
$arguments39['arguments'] = NULL;
$arguments39['extensionName'] = NULL;
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
$arguments41['htmlEscape'] = NULL;
$arguments41['arguments'] = NULL;
$arguments41['extensionName'] = NULL;
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
$arguments63['htmlEscape'] = NULL;
$arguments63['arguments'] = NULL;
$arguments63['extensionName'] = NULL;
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
								</form>
							</div>
						';
return $output4;
};
$arguments2['__elseClosures'][] = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
							<form action="../../../../../../index.php" method="post" name="loginform">
								<input type="hidden" name="login_status" value="logout" />
								<div class="t3-login-box-body">
									<div class="t3-login-logout-form">
										<div class="t3-login-username">
											<div class="t3-login-label t3-username">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['key'] = NULL;
$arguments67['id'] = NULL;
$arguments67['default'] = NULL;
$arguments67['htmlEscape'] = NULL;
$arguments67['arguments'] = NULL;
$arguments67['extensionName'] = NULL;
$arguments67['key'] = 'login.username';

$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);

$output66 .= '
											</div>
											<div class="t3-username-current">
												';
$array69 = array (
);
$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.username', $array69)]);

$output66 .= '
											</div>
										</div>
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
												<div class="t3-login-interface">
													<div class="t3-login-label t3-interface-selector">
														';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['key'] = NULL;
$arguments95['id'] = NULL;
$arguments95['default'] = NULL;
$arguments95['htmlEscape'] = NULL;
$arguments95['arguments'] = NULL;
$arguments95['extensionName'] = NULL;
$arguments95['key'] = 'login.interface';

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext)]);

$output94 .= '
													</div>
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['additionalAttributes'] = NULL;
$arguments97['data'] = NULL;
$arguments97['name'] = NULL;
$arguments97['value'] = NULL;
$arguments97['property'] = NULL;
$arguments97['class'] = NULL;
$arguments97['dir'] = NULL;
$arguments97['id'] = NULL;
$arguments97['lang'] = NULL;
$arguments97['style'] = NULL;
$arguments97['title'] = NULL;
$arguments97['accesskey'] = NULL;
$arguments97['tabindex'] = NULL;
$arguments97['onclick'] = NULL;
$arguments97['size'] = NULL;
$arguments97['disabled'] = NULL;
$arguments97['options'] = NULL;
$arguments97['optionsAfterContent'] = false;
$arguments97['optionValueField'] = NULL;
$arguments97['optionLabelField'] = NULL;
$arguments97['sortByOptionLabel'] = false;
$arguments97['selectAllByDefault'] = false;
$arguments97['errorClass'] = 'f3-form-error';
$arguments97['prependOptionLabel'] = NULL;
$arguments97['prependOptionValue'] = NULL;
$arguments97['multiple'] = false;
$arguments97['name'] = 'users';
$array99 = array (
);$arguments97['options'] = $renderingContext->getVariableProvider()->getByPath('interfaces', $array99);
$arguments97['optionValueField'] = 'jumpScript';
$arguments97['optionLabelField'] = 'label';

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output94 .= '
												</div>
											';
return $output94;
};
$arguments92 = array();

$output91 .= '';

$output91 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output102 = '';

$output102 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['additionalAttributes'] = NULL;
$arguments109['data'] = NULL;
$arguments109['name'] = NULL;
$arguments109['value'] = NULL;
$arguments109['property'] = NULL;
$arguments109['class'] = NULL;
$arguments109['dir'] = NULL;
$arguments109['id'] = NULL;
$arguments109['lang'] = NULL;
$arguments109['style'] = NULL;
$arguments109['title'] = NULL;
$arguments109['accesskey'] = NULL;
$arguments109['tabindex'] = NULL;
$arguments109['onclick'] = NULL;
$arguments109['name'] = 'interface';
$array111 = array (
);$arguments109['value'] = $renderingContext->getVariableProvider()->getByPath('interface', $array111);

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= '
												';
return $output108;
};
$arguments103 = array();
$arguments103['then'] = NULL;
$arguments103['else'] = NULL;
$arguments103['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array105 = array();
$array106 = array (
);$array105['0'] = $renderingContext->getVariableProvider()->getByPath('interface', $array106);

$expression107 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments103['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression107(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array105)
					),
					$renderingContext
				);
$arguments103['__thenClosure'] = $renderChildrenClosure104;

$output102 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output102 .= '
											';
return $output102;
};
$arguments100 = array();
$arguments100['if'] = NULL;

$output91 .= '';

$output91 .= '
										';
return $output91;
};
$arguments70 = array();
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$arguments70['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array88 = array();
$array89 = array (
);$array88['0'] = $renderingContext->getVariableProvider()->getByPath('showInterfaceSelector', $array89);

$expression90 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments70['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression90(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array88)
					),
					$renderingContext
				);
$arguments70['__thenClosure'] = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
												<div class="t3-login-interface">
													<div class="t3-login-label t3-interface-selector">
														';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['key'] = NULL;
$arguments73['id'] = NULL;
$arguments73['default'] = NULL;
$arguments73['htmlEscape'] = NULL;
$arguments73['arguments'] = NULL;
$arguments73['extensionName'] = NULL;
$arguments73['key'] = 'login.interface';

$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext)]);

$output72 .= '
													</div>
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['additionalAttributes'] = NULL;
$arguments75['data'] = NULL;
$arguments75['name'] = NULL;
$arguments75['value'] = NULL;
$arguments75['property'] = NULL;
$arguments75['class'] = NULL;
$arguments75['dir'] = NULL;
$arguments75['id'] = NULL;
$arguments75['lang'] = NULL;
$arguments75['style'] = NULL;
$arguments75['title'] = NULL;
$arguments75['accesskey'] = NULL;
$arguments75['tabindex'] = NULL;
$arguments75['onclick'] = NULL;
$arguments75['size'] = NULL;
$arguments75['disabled'] = NULL;
$arguments75['options'] = NULL;
$arguments75['optionsAfterContent'] = false;
$arguments75['optionValueField'] = NULL;
$arguments75['optionLabelField'] = NULL;
$arguments75['sortByOptionLabel'] = false;
$arguments75['selectAllByDefault'] = false;
$arguments75['errorClass'] = 'f3-form-error';
$arguments75['prependOptionLabel'] = NULL;
$arguments75['prependOptionValue'] = NULL;
$arguments75['multiple'] = false;
$arguments75['name'] = 'users';
$array77 = array (
);$arguments75['options'] = $renderingContext->getVariableProvider()->getByPath('interfaces', $array77);
$arguments75['optionValueField'] = 'jumpScript';
$arguments75['optionLabelField'] = 'label';

$output72 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output72 .= '
												</div>
											';
return $output72;
};
$arguments70['__elseClosures'][] = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['additionalAttributes'] = NULL;
$arguments85['data'] = NULL;
$arguments85['name'] = NULL;
$arguments85['value'] = NULL;
$arguments85['property'] = NULL;
$arguments85['class'] = NULL;
$arguments85['dir'] = NULL;
$arguments85['id'] = NULL;
$arguments85['lang'] = NULL;
$arguments85['style'] = NULL;
$arguments85['title'] = NULL;
$arguments85['accesskey'] = NULL;
$arguments85['tabindex'] = NULL;
$arguments85['onclick'] = NULL;
$arguments85['name'] = 'interface';
$array87 = array (
);$arguments85['value'] = $renderingContext->getVariableProvider()->getByPath('interface', $array87);

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '
												';
return $output84;
};
$arguments79 = array();
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$arguments79['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['0'] = $renderingContext->getVariableProvider()->getByPath('interface', $array82);

$expression83 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments79['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression83(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array81)
					),
					$renderingContext
				);
$arguments79['__thenClosure'] = $renderChildrenClosure80;

$output78 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
											';
return $output78;
};

$output66 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output66 .= '
										<input type="hidden" name="p_field" value="" />
										<input class="btn btn-block btn-lg" type="submit" name="commandLO" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments112 = array();
$arguments112['key'] = NULL;
$arguments112['id'] = NULL;
$arguments112['default'] = NULL;
$arguments112['htmlEscape'] = NULL;
$arguments112['arguments'] = NULL;
$arguments112['extensionName'] = NULL;
$arguments112['key'] = 'login.submit';

$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext)]);

$output66 .= '" id="t3-login-submit" />
									</div>
								</div>
							</form>
						';
return $output66;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '
				</div>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments232 = array();
$arguments232['section'] = NULL;
$arguments232['partial'] = NULL;
$arguments232['delegate'] = NULL;
$arguments232['renderable'] = NULL;
$arguments232['arguments'] = array (
);
$arguments232['optional'] = false;
$arguments232['default'] = NULL;
$arguments232['contentAs'] = NULL;
$arguments232['partial'] = 'LoginNews';
$arguments232['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext);

$output0 .= '
				<div class="panel-footer">
					<div class="login-copyright-wrap">
						<a href="#loginCopyright" class="typo3-login-copyright-link collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="loginCopyright">
							<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments235 = array();
$arguments235['key'] = NULL;
$arguments235['id'] = NULL;
$arguments235['default'] = NULL;
$arguments235['htmlEscape'] = NULL;
$arguments235['arguments'] = NULL;
$arguments235['extensionName'] = NULL;
$arguments235['key'] = 'login.copyrightLink';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext)]);

$output0 .= '</span>
							<img src="';
$array237 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('images.typo3', $array237)]);

$output0 .= '" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments238 = array();
$arguments238['key'] = NULL;
$arguments238['id'] = NULL;
$arguments238['default'] = NULL;
$arguments238['htmlEscape'] = NULL;
$arguments238['arguments'] = NULL;
$arguments238['extensionName'] = NULL;
$arguments238['key'] = 'login.typo3Logo';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext)]);

$output0 .= '" width="70" height="20" />
						</a>
						<div id="loginCopyright" class="collapse">
							<div class="typo3-login-copyright-text">
								<p>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
$array242 = array (
);return $renderingContext->getVariableProvider()->getByPath('copyright', $array242);
};
$arguments240 = array();
$arguments240['value'] = NULL;

$output0 .= isset($arguments240['value']) ? $arguments240['value'] : $renderChildrenClosure241();

$output0 .= '
								</p>
								<ul class="list-unstyled">
									<li><a href="https://typo3.org" target="_blank" class="t3-login-link-typo3"><i class="fa fa-external-link"></i> TYPO3.org</a></li>
									<li><a href="https://typo3.org/donate/online-donation/" target="_blank" class="t3-login-link-donate"><i class="fa fa-external-link"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['key'] = NULL;
$arguments243['id'] = NULL;
$arguments243['default'] = NULL;
$arguments243['htmlEscape'] = NULL;
$arguments243['arguments'] = NULL;
$arguments243['extensionName'] = NULL;
$arguments243['key'] = 'login.donate';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext)]);

$output0 .= '</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
';

return $output0;
}


}
#