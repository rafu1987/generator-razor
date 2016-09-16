<?php
class FluidCache_Standalone_layout_Login_a5a1271eb372292d357b1cba6d7fbedcb2fea939 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="typo3-login">
	<div class="typo3-login-container">
		<div class="typo3-login-wrap">
			<div class="panel panel-lg panel-login">
				<div class="panel-body">
					<div class="typo3-login-logo">
						<img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = $currentVariableContainer->getOrNull('logo');
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = NULL;
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() {return NULL;};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1['encoding'] !== NULL ? $arguments1['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1['doubleEncode']));

$output0 .= '" class="typo3-login-image" alt="" />
					</div>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $currentVariableContainer->getOrNull('formType'), 'LoginForm');
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments7 = array();
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments10 = array();
// Rendering Boolean node
$arguments10['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('hasLoginError'));
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output12 = '';

$output12 .= '
								<div class="t3js-login-error" id="t3-login-error">
									<div class="alert alert-danger">
										<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments13 = array();
$arguments13['key'] = 'login.error.message';
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['htmlEscape'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$renderChildrenClosure14 = function() {return NULL;};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '</strong>
										<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments15 = array();
$arguments15['key'] = 'login.error.description';
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['htmlEscape'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$renderChildrenClosure16 = function() {return NULL;};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output12 .= '</p>
									</div>
								</div>
							';
return $output12;
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
							<noscript>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments17 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments18 = array();
$arguments18['key'] = 'login.error.javascript';
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['htmlEscape'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$renderChildrenClosure19 = function() {return NULL;};
$arguments17['message'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);
$arguments17['state'] = '2';
$arguments17['title'] = NULL;
$arguments17['iconName'] = NULL;
$arguments17['disableIcon'] = false;
$renderChildrenClosure20 = function() {return NULL;};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments17, $renderChildrenClosure20, $renderingContext);

$output9 .= '
							</noscript>
							<div class="hidden t3js-login-error-nocookies">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments21 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments22 = array();
$arguments22['key'] = 'login.error.cookies';
$arguments22['id'] = NULL;
$arguments22['default'] = NULL;
$arguments22['htmlEscape'] = NULL;
$arguments22['arguments'] = NULL;
$arguments22['extensionName'] = NULL;
$renderChildrenClosure23 = function() {return NULL;};
$arguments21['message'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);
$arguments21['state'] = '2';
$arguments21['title'] = NULL;
$arguments21['iconName'] = NULL;
$arguments21['disableIcon'] = false;
$renderChildrenClosure24 = function() {return NULL;};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments21, $renderChildrenClosure24, $renderingContext);

$output9 .= '
							</div>
							<div class="typo3-login-form t3js-login-formfields">
								<form action="?loginProvider=';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments25 = array();
$arguments25['value'] = $currentVariableContainer->getOrNull('loginProviderIdentifier');
$arguments25['keepQuotes'] = false;
$arguments25['encoding'] = NULL;
$arguments25['doubleEncode'] = true;
$renderChildrenClosure26 = function() {return NULL;};
$value27 = ($arguments25['value'] !== NULL ? $arguments25['value'] : $renderChildrenClosure26());

$output9 .= (!is_string($value27) ? $value27 : htmlspecialchars($value27, ($arguments25['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments25['encoding'] !== NULL ? $arguments25['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments25['doubleEncode']));

$output9 .= '" method="post" name="loginform" id="typo3-login-form">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments28 = array();
$arguments28['name'] = 'login_status';
$arguments28['value'] = 'login';
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
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
$renderChildrenClosure29 = function() {return NULL;};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper30->setArguments($arguments28);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output9 .= $viewHelper30->initializeArgumentsAndRender();

$output9 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments31 = array();
$arguments31['name'] = 'userident';
$arguments31['id'] = 't3-field-userident';
$arguments31['class'] = 't3js-login-userident-field';
$arguments31['value'] = '';
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['property'] = NULL;
$arguments31['dir'] = NULL;
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

$output9 .= $viewHelper33->initializeArgumentsAndRender();

$output9 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments34 = array();
$arguments34['name'] = 'redirect_url';
$arguments34['value'] = $currentVariableContainer->getOrNull('redirectUrl');
$arguments34['additionalAttributes'] = NULL;
$arguments34['data'] = NULL;
$arguments34['property'] = NULL;
$arguments34['class'] = NULL;
$arguments34['dir'] = NULL;
$arguments34['id'] = NULL;
$arguments34['lang'] = NULL;
$arguments34['style'] = NULL;
$arguments34['title'] = NULL;
$arguments34['accesskey'] = NULL;
$arguments34['tabindex'] = NULL;
$arguments34['onclick'] = NULL;
$renderChildrenClosure35 = function() {return NULL;};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper36->setArguments($arguments34);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output9 .= $viewHelper36->initializeArgumentsAndRender();

$output9 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments37 = array();
$arguments37['name'] = 'loginRefresh';
$arguments37['value'] = $currentVariableContainer->getOrNull('loginRefresh');
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['property'] = NULL;
$arguments37['class'] = NULL;
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$renderChildrenClosure38 = function() {return NULL;};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper39->setArguments($arguments37);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure38);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output9 .= $viewHelper39->initializeArgumentsAndRender();

$output9 .= '

									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments40 = array();
$arguments40['partial'] = 'Login/InterfaceSelector';
$arguments40['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments40['section'] = NULL;
$arguments40['optional'] = false;
$renderChildrenClosure41 = function() {return NULL;};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output9 .= '

									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments42 = array();
$arguments42['section'] = 'loginFormFields';
$arguments42['partial'] = NULL;
$arguments42['arguments'] = array (
);
$arguments42['optional'] = false;
$renderChildrenClosure43 = function() {return NULL;};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output9 .= '

									<div class="form-group" id="t3-login-submit-section">
										<button class="btn btn-block btn-login t3js-login-submit" id="t3-login-submit" type="submit" name="commandLI" data-loading-text="<i class=\'fa fa-circle-o-notch fa-spin\'></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments44 = array();
$arguments44['key'] = 'login.process';
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['htmlEscape'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$renderChildrenClosure45 = function() {return NULL;};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output9 .= '" autocomplete="off">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments46 = array();
$arguments46['key'] = 'login.submit';
$arguments46['id'] = NULL;
$arguments46['default'] = NULL;
$arguments46['htmlEscape'] = NULL;
$arguments46['arguments'] = NULL;
$arguments46['extensionName'] = NULL;
$renderChildrenClosure47 = function() {return NULL;};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output9 .= '
										</button>
									</div>
									<ul class="list-unstyled typo3-login-links">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments48 = array();
$arguments48['each'] = $currentVariableContainer->getOrNull('loginProviders');
$arguments48['as'] = 'provider';
$arguments48['key'] = 'providerKey';
$arguments48['reverse'] = false;
$arguments48['iteration'] = NULL;
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output50 = '';

$output50 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments51 = array();
// Rendering Boolean node
$arguments51['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('provider'), 'label', $renderingContext));
$arguments51['then'] = NULL;
$arguments51['else'] = NULL;
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output53 = '';

$output53 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments54 = array();
// Rendering Boolean node
$arguments54['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('!=', $currentVariableContainer->getOrNull('loginProviderIdentifier'), $currentVariableContainer->getOrNull('providerKey'));
$arguments54['then'] = NULL;
$arguments54['else'] = NULL;
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output56 = '';

$output56 .= '
													<li class="t3js-loginprovider-switch" data-providerkey="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments57 = array();
$arguments57['value'] = $currentVariableContainer->getOrNull('providerKey');
$arguments57['keepQuotes'] = false;
$arguments57['encoding'] = NULL;
$arguments57['doubleEncode'] = true;
$renderChildrenClosure58 = function() {return NULL;};
$value59 = ($arguments57['value'] !== NULL ? $arguments57['value'] : $renderChildrenClosure58());

$output56 .= (!is_string($value59) ? $value59 : htmlspecialchars($value59, ($arguments57['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments57['encoding'] !== NULL ? $arguments57['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments57['doubleEncode']));

$output56 .= '"><a href="?loginProvider=';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments60 = array();
$arguments60['value'] = $currentVariableContainer->getOrNull('providerKey');
$arguments60['keepQuotes'] = false;
$arguments60['encoding'] = NULL;
$arguments60['doubleEncode'] = true;
$renderChildrenClosure61 = function() {return NULL;};
$value62 = ($arguments60['value'] !== NULL ? $arguments60['value'] : $renderChildrenClosure61());

$output56 .= (!is_string($value62) ? $value62 : htmlspecialchars($value62, ($arguments60['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments60['encoding'] !== NULL ? $arguments60['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments60['doubleEncode']));

$output56 .= '"><i class="fa fa-fw ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments63 = array();
$arguments63['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('provider'), 'icon-class', $renderingContext);
$arguments63['keepQuotes'] = false;
$arguments63['encoding'] = NULL;
$arguments63['doubleEncode'] = true;
$renderChildrenClosure64 = function() {return NULL;};
$value65 = ($arguments63['value'] !== NULL ? $arguments63['value'] : $renderChildrenClosure64());

$output56 .= (!is_string($value65) ? $value65 : htmlspecialchars($value65, ($arguments63['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments63['encoding'] !== NULL ? $arguments63['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments63['doubleEncode']));

$output56 .= '"></i> <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments66 = array();
$arguments66['key'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('provider'), 'label', $renderingContext);
$arguments66['id'] = NULL;
$arguments66['default'] = NULL;
$arguments66['htmlEscape'] = NULL;
$arguments66['arguments'] = NULL;
$arguments66['extensionName'] = NULL;
$renderChildrenClosure67 = function() {return NULL;};

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output56 .= '</span></a></li>
												';
return $output56;
};

$output53 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
											';
return $output53;
};

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
										';
return $output50;
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output9 .= '
									</ul>
								</form>
							</div>
						';
return $output9;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments68 = array();
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output70 = '';

$output70 .= '
							<form action="../../../../../../index.php" method="post" name="loginform">
								<input type="hidden" name="login_status" value="logout" />
								<div class="t3-login-box-body">
									<div class="t3-login-logout-form">
										<div class="t3-login-username">
											<div class="t3-login-label t3-username">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments71 = array();
$arguments71['key'] = 'login.username';
$arguments71['id'] = NULL;
$arguments71['default'] = NULL;
$arguments71['htmlEscape'] = NULL;
$arguments71['arguments'] = NULL;
$arguments71['extensionName'] = NULL;
$renderChildrenClosure72 = function() {return NULL;};

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
											</div>
											<div class="t3-username-current">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments73 = array();
$arguments73['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('backendUser'), 'username', $renderingContext);
$arguments73['keepQuotes'] = false;
$arguments73['encoding'] = NULL;
$arguments73['doubleEncode'] = true;
$renderChildrenClosure74 = function() {return NULL;};
$value75 = ($arguments73['value'] !== NULL ? $arguments73['value'] : $renderChildrenClosure74());

$output70 .= (!is_string($value75) ? $value75 : htmlspecialchars($value75, ($arguments73['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments73['encoding'] !== NULL ? $arguments73['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments73['doubleEncode']));

$output70 .= '
											</div>
										</div>
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments76 = array();
// Rendering Boolean node
$arguments76['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('showInterfaceSelector'));
$arguments76['then'] = NULL;
$arguments76['else'] = NULL;
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output78 = '';

$output78 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments79 = array();
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output81 = '';

$output81 .= '
												<div class="t3-login-interface">
													<div class="t3-login-label t3-interface-selector">
														';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments82 = array();
$arguments82['key'] = 'login.interface';
$arguments82['id'] = NULL;
$arguments82['default'] = NULL;
$arguments82['htmlEscape'] = NULL;
$arguments82['arguments'] = NULL;
$arguments82['extensionName'] = NULL;
$renderChildrenClosure83 = function() {return NULL;};

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
													</div>
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments84 = array();
$arguments84['name'] = 'users';
$arguments84['options'] = $currentVariableContainer->getOrNull('interfaces');
$arguments84['optionValueField'] = 'jumpScript';
$arguments84['optionLabelField'] = 'label';
$arguments84['additionalAttributes'] = NULL;
$arguments84['data'] = NULL;
$arguments84['value'] = NULL;
$arguments84['property'] = NULL;
$arguments84['class'] = NULL;
$arguments84['dir'] = NULL;
$arguments84['id'] = NULL;
$arguments84['lang'] = NULL;
$arguments84['style'] = NULL;
$arguments84['title'] = NULL;
$arguments84['accesskey'] = NULL;
$arguments84['tabindex'] = NULL;
$arguments84['onclick'] = NULL;
$arguments84['size'] = NULL;
$arguments84['disabled'] = NULL;
$arguments84['sortByOptionLabel'] = false;
$arguments84['selectAllByDefault'] = false;
$arguments84['errorClass'] = 'f3-form-error';
$arguments84['prependOptionLabel'] = NULL;
$arguments84['prependOptionValue'] = NULL;
$arguments84['multiple'] = false;
$renderChildrenClosure85 = function() {return NULL;};
$viewHelper86 = $self->getViewHelper('$viewHelper86', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper86->setArguments($arguments84);
$viewHelper86->setRenderingContext($renderingContext);
$viewHelper86->setRenderChildrenClosure($renderChildrenClosure85);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output81 .= $viewHelper86->initializeArgumentsAndRender();

$output81 .= '
												</div>
											';
return $output81;
};

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments87 = array();
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output89 = '';

$output89 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments90 = array();
// Rendering Boolean node
$arguments90['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('interface'));
$arguments90['then'] = NULL;
$arguments90['else'] = NULL;
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output92 = '';

$output92 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments93 = array();
$arguments93['name'] = 'interface';
$arguments93['value'] = $currentVariableContainer->getOrNull('interface');
$arguments93['additionalAttributes'] = NULL;
$arguments93['data'] = NULL;
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
$renderChildrenClosure94 = function() {return NULL;};
$viewHelper95 = $self->getViewHelper('$viewHelper95', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper95->setArguments($arguments93);
$viewHelper95->setRenderingContext($renderingContext);
$viewHelper95->setRenderChildrenClosure($renderChildrenClosure94);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output92 .= $viewHelper95->initializeArgumentsAndRender();

$output92 .= '
												';
return $output92;
};

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
											';
return $output89;
};

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output78 .= '
										';
return $output78;
};
$arguments76['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output96 = '';

$output96 .= '
												<div class="t3-login-interface">
													<div class="t3-login-label t3-interface-selector">
														';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments97 = array();
$arguments97['key'] = 'login.interface';
$arguments97['id'] = NULL;
$arguments97['default'] = NULL;
$arguments97['htmlEscape'] = NULL;
$arguments97['arguments'] = NULL;
$arguments97['extensionName'] = NULL;
$renderChildrenClosure98 = function() {return NULL;};

$output96 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '
													</div>
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments99 = array();
$arguments99['name'] = 'users';
$arguments99['options'] = $currentVariableContainer->getOrNull('interfaces');
$arguments99['optionValueField'] = 'jumpScript';
$arguments99['optionLabelField'] = 'label';
$arguments99['additionalAttributes'] = NULL;
$arguments99['data'] = NULL;
$arguments99['value'] = NULL;
$arguments99['property'] = NULL;
$arguments99['class'] = NULL;
$arguments99['dir'] = NULL;
$arguments99['id'] = NULL;
$arguments99['lang'] = NULL;
$arguments99['style'] = NULL;
$arguments99['title'] = NULL;
$arguments99['accesskey'] = NULL;
$arguments99['tabindex'] = NULL;
$arguments99['onclick'] = NULL;
$arguments99['size'] = NULL;
$arguments99['disabled'] = NULL;
$arguments99['sortByOptionLabel'] = false;
$arguments99['selectAllByDefault'] = false;
$arguments99['errorClass'] = 'f3-form-error';
$arguments99['prependOptionLabel'] = NULL;
$arguments99['prependOptionValue'] = NULL;
$arguments99['multiple'] = false;
$renderChildrenClosure100 = function() {return NULL;};
$viewHelper101 = $self->getViewHelper('$viewHelper101', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper101->setArguments($arguments99);
$viewHelper101->setRenderingContext($renderingContext);
$viewHelper101->setRenderChildrenClosure($renderChildrenClosure100);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output96 .= $viewHelper101->initializeArgumentsAndRender();

$output96 .= '
												</div>
											';
return $output96;
};
$arguments76['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output102 = '';

$output102 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments103 = array();
// Rendering Boolean node
$arguments103['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('interface'));
$arguments103['then'] = NULL;
$arguments103['else'] = NULL;
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output105 = '';

$output105 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments106 = array();
$arguments106['name'] = 'interface';
$arguments106['value'] = $currentVariableContainer->getOrNull('interface');
$arguments106['additionalAttributes'] = NULL;
$arguments106['data'] = NULL;
$arguments106['property'] = NULL;
$arguments106['class'] = NULL;
$arguments106['dir'] = NULL;
$arguments106['id'] = NULL;
$arguments106['lang'] = NULL;
$arguments106['style'] = NULL;
$arguments106['title'] = NULL;
$arguments106['accesskey'] = NULL;
$arguments106['tabindex'] = NULL;
$arguments106['onclick'] = NULL;
$renderChildrenClosure107 = function() {return NULL;};
$viewHelper108 = $self->getViewHelper('$viewHelper108', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper108->setArguments($arguments106);
$viewHelper108->setRenderingContext($renderingContext);
$viewHelper108->setRenderChildrenClosure($renderChildrenClosure107);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output105 .= $viewHelper108->initializeArgumentsAndRender();

$output105 .= '
												';
return $output105;
};

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output102 .= '
											';
return $output102;
};

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output70 .= '
										<input type="hidden" name="p_field" value="" />
										<input class="btn btn-block btn-lg" type="submit" name="commandLO" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments109 = array();
$arguments109['key'] = 'login.submit';
$arguments109['id'] = NULL;
$arguments109['default'] = NULL;
$arguments109['htmlEscape'] = NULL;
$arguments109['arguments'] = NULL;
$arguments109['extensionName'] = NULL;
$renderChildrenClosure110 = function() {return NULL;};

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output70 .= '" id="t3-login-submit" />
									</div>
								</div>
							</form>
						';
return $output70;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output6 .= '
					';
return $output6;
};
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output111 = '';

$output111 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments112 = array();
// Rendering Boolean node
$arguments112['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('hasLoginError'));
$arguments112['then'] = NULL;
$arguments112['else'] = NULL;
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output114 = '';

$output114 .= '
								<div class="t3js-login-error" id="t3-login-error">
									<div class="alert alert-danger">
										<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments115 = array();
$arguments115['key'] = 'login.error.message';
$arguments115['id'] = NULL;
$arguments115['default'] = NULL;
$arguments115['htmlEscape'] = NULL;
$arguments115['arguments'] = NULL;
$arguments115['extensionName'] = NULL;
$renderChildrenClosure116 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output114 .= '</strong>
										<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments117 = array();
$arguments117['key'] = 'login.error.description';
$arguments117['id'] = NULL;
$arguments117['default'] = NULL;
$arguments117['htmlEscape'] = NULL;
$arguments117['arguments'] = NULL;
$arguments117['extensionName'] = NULL;
$renderChildrenClosure118 = function() {return NULL;};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output114 .= '</p>
									</div>
								</div>
							';
return $output114;
};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output111 .= '
							<noscript>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments119 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments120 = array();
$arguments120['key'] = 'login.error.javascript';
$arguments120['id'] = NULL;
$arguments120['default'] = NULL;
$arguments120['htmlEscape'] = NULL;
$arguments120['arguments'] = NULL;
$arguments120['extensionName'] = NULL;
$renderChildrenClosure121 = function() {return NULL;};
$arguments119['message'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);
$arguments119['state'] = '2';
$arguments119['title'] = NULL;
$arguments119['iconName'] = NULL;
$arguments119['disableIcon'] = false;
$renderChildrenClosure122 = function() {return NULL;};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments119, $renderChildrenClosure122, $renderingContext);

$output111 .= '
							</noscript>
							<div class="hidden t3js-login-error-nocookies">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments123 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments124 = array();
$arguments124['key'] = 'login.error.cookies';
$arguments124['id'] = NULL;
$arguments124['default'] = NULL;
$arguments124['htmlEscape'] = NULL;
$arguments124['arguments'] = NULL;
$arguments124['extensionName'] = NULL;
$renderChildrenClosure125 = function() {return NULL;};
$arguments123['message'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);
$arguments123['state'] = '2';
$arguments123['title'] = NULL;
$arguments123['iconName'] = NULL;
$arguments123['disableIcon'] = false;
$renderChildrenClosure126 = function() {return NULL;};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments123, $renderChildrenClosure126, $renderingContext);

$output111 .= '
							</div>
							<div class="typo3-login-form t3js-login-formfields">
								<form action="?loginProvider=';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments127 = array();
$arguments127['value'] = $currentVariableContainer->getOrNull('loginProviderIdentifier');
$arguments127['keepQuotes'] = false;
$arguments127['encoding'] = NULL;
$arguments127['doubleEncode'] = true;
$renderChildrenClosure128 = function() {return NULL;};
$value129 = ($arguments127['value'] !== NULL ? $arguments127['value'] : $renderChildrenClosure128());

$output111 .= (!is_string($value129) ? $value129 : htmlspecialchars($value129, ($arguments127['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments127['encoding'] !== NULL ? $arguments127['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments127['doubleEncode']));

$output111 .= '" method="post" name="loginform" id="typo3-login-form">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments130 = array();
$arguments130['name'] = 'login_status';
$arguments130['value'] = 'login';
$arguments130['additionalAttributes'] = NULL;
$arguments130['data'] = NULL;
$arguments130['property'] = NULL;
$arguments130['class'] = NULL;
$arguments130['dir'] = NULL;
$arguments130['id'] = NULL;
$arguments130['lang'] = NULL;
$arguments130['style'] = NULL;
$arguments130['title'] = NULL;
$arguments130['accesskey'] = NULL;
$arguments130['tabindex'] = NULL;
$arguments130['onclick'] = NULL;
$renderChildrenClosure131 = function() {return NULL;};
$viewHelper132 = $self->getViewHelper('$viewHelper132', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper132->setArguments($arguments130);
$viewHelper132->setRenderingContext($renderingContext);
$viewHelper132->setRenderChildrenClosure($renderChildrenClosure131);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output111 .= $viewHelper132->initializeArgumentsAndRender();

$output111 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments133 = array();
$arguments133['name'] = 'userident';
$arguments133['id'] = 't3-field-userident';
$arguments133['class'] = 't3js-login-userident-field';
$arguments133['value'] = '';
$arguments133['additionalAttributes'] = NULL;
$arguments133['data'] = NULL;
$arguments133['property'] = NULL;
$arguments133['dir'] = NULL;
$arguments133['lang'] = NULL;
$arguments133['style'] = NULL;
$arguments133['title'] = NULL;
$arguments133['accesskey'] = NULL;
$arguments133['tabindex'] = NULL;
$arguments133['onclick'] = NULL;
$renderChildrenClosure134 = function() {return NULL;};
$viewHelper135 = $self->getViewHelper('$viewHelper135', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper135->setArguments($arguments133);
$viewHelper135->setRenderingContext($renderingContext);
$viewHelper135->setRenderChildrenClosure($renderChildrenClosure134);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output111 .= $viewHelper135->initializeArgumentsAndRender();

$output111 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments136 = array();
$arguments136['name'] = 'redirect_url';
$arguments136['value'] = $currentVariableContainer->getOrNull('redirectUrl');
$arguments136['additionalAttributes'] = NULL;
$arguments136['data'] = NULL;
$arguments136['property'] = NULL;
$arguments136['class'] = NULL;
$arguments136['dir'] = NULL;
$arguments136['id'] = NULL;
$arguments136['lang'] = NULL;
$arguments136['style'] = NULL;
$arguments136['title'] = NULL;
$arguments136['accesskey'] = NULL;
$arguments136['tabindex'] = NULL;
$arguments136['onclick'] = NULL;
$renderChildrenClosure137 = function() {return NULL;};
$viewHelper138 = $self->getViewHelper('$viewHelper138', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper138->setArguments($arguments136);
$viewHelper138->setRenderingContext($renderingContext);
$viewHelper138->setRenderChildrenClosure($renderChildrenClosure137);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output111 .= $viewHelper138->initializeArgumentsAndRender();

$output111 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments139 = array();
$arguments139['name'] = 'loginRefresh';
$arguments139['value'] = $currentVariableContainer->getOrNull('loginRefresh');
$arguments139['additionalAttributes'] = NULL;
$arguments139['data'] = NULL;
$arguments139['property'] = NULL;
$arguments139['class'] = NULL;
$arguments139['dir'] = NULL;
$arguments139['id'] = NULL;
$arguments139['lang'] = NULL;
$arguments139['style'] = NULL;
$arguments139['title'] = NULL;
$arguments139['accesskey'] = NULL;
$arguments139['tabindex'] = NULL;
$arguments139['onclick'] = NULL;
$renderChildrenClosure140 = function() {return NULL;};
$viewHelper141 = $self->getViewHelper('$viewHelper141', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper141->setArguments($arguments139);
$viewHelper141->setRenderingContext($renderingContext);
$viewHelper141->setRenderChildrenClosure($renderChildrenClosure140);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output111 .= $viewHelper141->initializeArgumentsAndRender();

$output111 .= '

									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments142 = array();
$arguments142['partial'] = 'Login/InterfaceSelector';
$arguments142['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments142['section'] = NULL;
$arguments142['optional'] = false;
$renderChildrenClosure143 = function() {return NULL;};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output111 .= '

									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments144 = array();
$arguments144['section'] = 'loginFormFields';
$arguments144['partial'] = NULL;
$arguments144['arguments'] = array (
);
$arguments144['optional'] = false;
$renderChildrenClosure145 = function() {return NULL;};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output111 .= '

									<div class="form-group" id="t3-login-submit-section">
										<button class="btn btn-block btn-login t3js-login-submit" id="t3-login-submit" type="submit" name="commandLI" data-loading-text="<i class=\'fa fa-circle-o-notch fa-spin\'></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments146 = array();
$arguments146['key'] = 'login.process';
$arguments146['id'] = NULL;
$arguments146['default'] = NULL;
$arguments146['htmlEscape'] = NULL;
$arguments146['arguments'] = NULL;
$arguments146['extensionName'] = NULL;
$renderChildrenClosure147 = function() {return NULL;};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output111 .= '" autocomplete="off">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments148 = array();
$arguments148['key'] = 'login.submit';
$arguments148['id'] = NULL;
$arguments148['default'] = NULL;
$arguments148['htmlEscape'] = NULL;
$arguments148['arguments'] = NULL;
$arguments148['extensionName'] = NULL;
$renderChildrenClosure149 = function() {return NULL;};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output111 .= '
										</button>
									</div>
									<ul class="list-unstyled typo3-login-links">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments150 = array();
$arguments150['each'] = $currentVariableContainer->getOrNull('loginProviders');
$arguments150['as'] = 'provider';
$arguments150['key'] = 'providerKey';
$arguments150['reverse'] = false;
$arguments150['iteration'] = NULL;
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output152 = '';

$output152 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments153 = array();
// Rendering Boolean node
$arguments153['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('provider'), 'label', $renderingContext));
$arguments153['then'] = NULL;
$arguments153['else'] = NULL;
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output155 = '';

$output155 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments156 = array();
// Rendering Boolean node
$arguments156['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('!=', $currentVariableContainer->getOrNull('loginProviderIdentifier'), $currentVariableContainer->getOrNull('providerKey'));
$arguments156['then'] = NULL;
$arguments156['else'] = NULL;
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output158 = '';

$output158 .= '
													<li class="t3js-loginprovider-switch" data-providerkey="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments159 = array();
$arguments159['value'] = $currentVariableContainer->getOrNull('providerKey');
$arguments159['keepQuotes'] = false;
$arguments159['encoding'] = NULL;
$arguments159['doubleEncode'] = true;
$renderChildrenClosure160 = function() {return NULL;};
$value161 = ($arguments159['value'] !== NULL ? $arguments159['value'] : $renderChildrenClosure160());

$output158 .= (!is_string($value161) ? $value161 : htmlspecialchars($value161, ($arguments159['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments159['encoding'] !== NULL ? $arguments159['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments159['doubleEncode']));

$output158 .= '"><a href="?loginProvider=';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments162 = array();
$arguments162['value'] = $currentVariableContainer->getOrNull('providerKey');
$arguments162['keepQuotes'] = false;
$arguments162['encoding'] = NULL;
$arguments162['doubleEncode'] = true;
$renderChildrenClosure163 = function() {return NULL;};
$value164 = ($arguments162['value'] !== NULL ? $arguments162['value'] : $renderChildrenClosure163());

$output158 .= (!is_string($value164) ? $value164 : htmlspecialchars($value164, ($arguments162['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments162['encoding'] !== NULL ? $arguments162['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments162['doubleEncode']));

$output158 .= '"><i class="fa fa-fw ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments165 = array();
$arguments165['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('provider'), 'icon-class', $renderingContext);
$arguments165['keepQuotes'] = false;
$arguments165['encoding'] = NULL;
$arguments165['doubleEncode'] = true;
$renderChildrenClosure166 = function() {return NULL;};
$value167 = ($arguments165['value'] !== NULL ? $arguments165['value'] : $renderChildrenClosure166());

$output158 .= (!is_string($value167) ? $value167 : htmlspecialchars($value167, ($arguments165['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments165['encoding'] !== NULL ? $arguments165['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments165['doubleEncode']));

$output158 .= '"></i> <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments168 = array();
$arguments168['key'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('provider'), 'label', $renderingContext);
$arguments168['id'] = NULL;
$arguments168['default'] = NULL;
$arguments168['htmlEscape'] = NULL;
$arguments168['arguments'] = NULL;
$arguments168['extensionName'] = NULL;
$renderChildrenClosure169 = function() {return NULL;};

$output158 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output158 .= '</span></a></li>
												';
return $output158;
};

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output155 .= '
											';
return $output155;
};

$output152 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= '
										';
return $output152;
};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output111 .= '
									</ul>
								</form>
							</div>
						';
return $output111;
};
$arguments4['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output170 = '';

$output170 .= '
							<form action="../../../../../../index.php" method="post" name="loginform">
								<input type="hidden" name="login_status" value="logout" />
								<div class="t3-login-box-body">
									<div class="t3-login-logout-form">
										<div class="t3-login-username">
											<div class="t3-login-label t3-username">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments171 = array();
$arguments171['key'] = 'login.username';
$arguments171['id'] = NULL;
$arguments171['default'] = NULL;
$arguments171['htmlEscape'] = NULL;
$arguments171['arguments'] = NULL;
$arguments171['extensionName'] = NULL;
$renderChildrenClosure172 = function() {return NULL;};

$output170 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output170 .= '
											</div>
											<div class="t3-username-current">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments173 = array();
$arguments173['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('backendUser'), 'username', $renderingContext);
$arguments173['keepQuotes'] = false;
$arguments173['encoding'] = NULL;
$arguments173['doubleEncode'] = true;
$renderChildrenClosure174 = function() {return NULL;};
$value175 = ($arguments173['value'] !== NULL ? $arguments173['value'] : $renderChildrenClosure174());

$output170 .= (!is_string($value175) ? $value175 : htmlspecialchars($value175, ($arguments173['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments173['encoding'] !== NULL ? $arguments173['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments173['doubleEncode']));

$output170 .= '
											</div>
										</div>
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments176 = array();
// Rendering Boolean node
$arguments176['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('showInterfaceSelector'));
$arguments176['then'] = NULL;
$arguments176['else'] = NULL;
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output178 = '';

$output178 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments179 = array();
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output181 = '';

$output181 .= '
												<div class="t3-login-interface">
													<div class="t3-login-label t3-interface-selector">
														';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments182 = array();
$arguments182['key'] = 'login.interface';
$arguments182['id'] = NULL;
$arguments182['default'] = NULL;
$arguments182['htmlEscape'] = NULL;
$arguments182['arguments'] = NULL;
$arguments182['extensionName'] = NULL;
$renderChildrenClosure183 = function() {return NULL;};

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output181 .= '
													</div>
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments184 = array();
$arguments184['name'] = 'users';
$arguments184['options'] = $currentVariableContainer->getOrNull('interfaces');
$arguments184['optionValueField'] = 'jumpScript';
$arguments184['optionLabelField'] = 'label';
$arguments184['additionalAttributes'] = NULL;
$arguments184['data'] = NULL;
$arguments184['value'] = NULL;
$arguments184['property'] = NULL;
$arguments184['class'] = NULL;
$arguments184['dir'] = NULL;
$arguments184['id'] = NULL;
$arguments184['lang'] = NULL;
$arguments184['style'] = NULL;
$arguments184['title'] = NULL;
$arguments184['accesskey'] = NULL;
$arguments184['tabindex'] = NULL;
$arguments184['onclick'] = NULL;
$arguments184['size'] = NULL;
$arguments184['disabled'] = NULL;
$arguments184['sortByOptionLabel'] = false;
$arguments184['selectAllByDefault'] = false;
$arguments184['errorClass'] = 'f3-form-error';
$arguments184['prependOptionLabel'] = NULL;
$arguments184['prependOptionValue'] = NULL;
$arguments184['multiple'] = false;
$renderChildrenClosure185 = function() {return NULL;};
$viewHelper186 = $self->getViewHelper('$viewHelper186', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper186->setArguments($arguments184);
$viewHelper186->setRenderingContext($renderingContext);
$viewHelper186->setRenderChildrenClosure($renderChildrenClosure185);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output181 .= $viewHelper186->initializeArgumentsAndRender();

$output181 .= '
												</div>
											';
return $output181;
};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output178 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments187 = array();
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output189 = '';

$output189 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments190 = array();
// Rendering Boolean node
$arguments190['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('interface'));
$arguments190['then'] = NULL;
$arguments190['else'] = NULL;
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output192 = '';

$output192 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments193 = array();
$arguments193['name'] = 'interface';
$arguments193['value'] = $currentVariableContainer->getOrNull('interface');
$arguments193['additionalAttributes'] = NULL;
$arguments193['data'] = NULL;
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
$renderChildrenClosure194 = function() {return NULL;};
$viewHelper195 = $self->getViewHelper('$viewHelper195', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper195->setArguments($arguments193);
$viewHelper195->setRenderingContext($renderingContext);
$viewHelper195->setRenderChildrenClosure($renderChildrenClosure194);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output192 .= $viewHelper195->initializeArgumentsAndRender();

$output192 .= '
												';
return $output192;
};

$output189 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output189 .= '
											';
return $output189;
};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output178 .= '
										';
return $output178;
};
$arguments176['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output196 = '';

$output196 .= '
												<div class="t3-login-interface">
													<div class="t3-login-label t3-interface-selector">
														';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments197 = array();
$arguments197['key'] = 'login.interface';
$arguments197['id'] = NULL;
$arguments197['default'] = NULL;
$arguments197['htmlEscape'] = NULL;
$arguments197['arguments'] = NULL;
$arguments197['extensionName'] = NULL;
$renderChildrenClosure198 = function() {return NULL;};

$output196 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output196 .= '
													</div>
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments199 = array();
$arguments199['name'] = 'users';
$arguments199['options'] = $currentVariableContainer->getOrNull('interfaces');
$arguments199['optionValueField'] = 'jumpScript';
$arguments199['optionLabelField'] = 'label';
$arguments199['additionalAttributes'] = NULL;
$arguments199['data'] = NULL;
$arguments199['value'] = NULL;
$arguments199['property'] = NULL;
$arguments199['class'] = NULL;
$arguments199['dir'] = NULL;
$arguments199['id'] = NULL;
$arguments199['lang'] = NULL;
$arguments199['style'] = NULL;
$arguments199['title'] = NULL;
$arguments199['accesskey'] = NULL;
$arguments199['tabindex'] = NULL;
$arguments199['onclick'] = NULL;
$arguments199['size'] = NULL;
$arguments199['disabled'] = NULL;
$arguments199['sortByOptionLabel'] = false;
$arguments199['selectAllByDefault'] = false;
$arguments199['errorClass'] = 'f3-form-error';
$arguments199['prependOptionLabel'] = NULL;
$arguments199['prependOptionValue'] = NULL;
$arguments199['multiple'] = false;
$renderChildrenClosure200 = function() {return NULL;};
$viewHelper201 = $self->getViewHelper('$viewHelper201', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper201->setArguments($arguments199);
$viewHelper201->setRenderingContext($renderingContext);
$viewHelper201->setRenderChildrenClosure($renderChildrenClosure200);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output196 .= $viewHelper201->initializeArgumentsAndRender();

$output196 .= '
												</div>
											';
return $output196;
};
$arguments176['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output202 = '';

$output202 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments203 = array();
// Rendering Boolean node
$arguments203['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('interface'));
$arguments203['then'] = NULL;
$arguments203['else'] = NULL;
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output205 = '';

$output205 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments206 = array();
$arguments206['name'] = 'interface';
$arguments206['value'] = $currentVariableContainer->getOrNull('interface');
$arguments206['additionalAttributes'] = NULL;
$arguments206['data'] = NULL;
$arguments206['property'] = NULL;
$arguments206['class'] = NULL;
$arguments206['dir'] = NULL;
$arguments206['id'] = NULL;
$arguments206['lang'] = NULL;
$arguments206['style'] = NULL;
$arguments206['title'] = NULL;
$arguments206['accesskey'] = NULL;
$arguments206['tabindex'] = NULL;
$arguments206['onclick'] = NULL;
$renderChildrenClosure207 = function() {return NULL;};
$viewHelper208 = $self->getViewHelper('$viewHelper208', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper208->setArguments($arguments206);
$viewHelper208->setRenderingContext($renderingContext);
$viewHelper208->setRenderChildrenClosure($renderChildrenClosure207);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output205 .= $viewHelper208->initializeArgumentsAndRender();

$output205 .= '
												';
return $output205;
};

$output202 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output202 .= '
											';
return $output202;
};

$output170 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output170 .= '
										<input type="hidden" name="p_field" value="" />
										<input class="btn btn-block btn-lg" type="submit" name="commandLO" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments209 = array();
$arguments209['key'] = 'login.submit';
$arguments209['id'] = NULL;
$arguments209['default'] = NULL;
$arguments209['htmlEscape'] = NULL;
$arguments209['arguments'] = NULL;
$arguments209['extensionName'] = NULL;
$renderChildrenClosure210 = function() {return NULL;};

$output170 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);

$output170 .= '" id="t3-login-submit" />
									</div>
								</div>
							</form>
						';
return $output170;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
				</div>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments211 = array();
$arguments211['partial'] = 'LoginNews';
$arguments211['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments211['section'] = NULL;
$arguments211['optional'] = false;
$renderChildrenClosure212 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output0 .= '
				<div class="panel-footer">
					<div class="login-copyright-wrap">
						<a href="#loginCopyright" class="typo3-login-copyright-link collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="loginCopyright">
							<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments213 = array();
$arguments213['key'] = 'login.copyrightLink';
$arguments213['id'] = NULL;
$arguments213['default'] = NULL;
$arguments213['htmlEscape'] = NULL;
$arguments213['arguments'] = NULL;
$arguments213['extensionName'] = NULL;
$renderChildrenClosure214 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output0 .= '</span>
							<img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments215 = array();
$arguments215['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('images'), 'typo3', $renderingContext);
$arguments215['keepQuotes'] = false;
$arguments215['encoding'] = NULL;
$arguments215['doubleEncode'] = true;
$renderChildrenClosure216 = function() {return NULL;};
$value217 = ($arguments215['value'] !== NULL ? $arguments215['value'] : $renderChildrenClosure216());

$output0 .= (!is_string($value217) ? $value217 : htmlspecialchars($value217, ($arguments215['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments215['encoding'] !== NULL ? $arguments215['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments215['doubleEncode']));

$output0 .= '" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments218 = array();
$arguments218['key'] = 'login.typo3Logo';
$arguments218['id'] = NULL;
$arguments218['default'] = NULL;
$arguments218['htmlEscape'] = NULL;
$arguments218['arguments'] = NULL;
$arguments218['extensionName'] = NULL;
$renderChildrenClosure219 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output0 .= '" width="70" height="20" />
						</a>
						<div id="loginCopyright" class="collapse">
							<div class="typo3-login-copyright-text">
								<p>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments220 = array();
$arguments220['value'] = NULL;
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('copyright');
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output0 .= '
								</p>
								<ul class="list-unstyled">
									<li><a href="https://typo3.org" target="_blank" class="t3-login-link-typo3"><i class="fa fa-external-link"></i> TYPO3.org</a></li>
									<li><a href="https://typo3.org/donate/online-donation/" target="_blank" class="t3-login-link-donate"><i class="fa fa-external-link"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments222 = array();
$arguments222['key'] = 'login.donate';
$arguments222['id'] = NULL;
$arguments222['default'] = NULL;
$arguments222['htmlEscape'] = NULL;
$arguments222['arguments'] = NULL;
$arguments222['extensionName'] = NULL;
$renderChildrenClosure223 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

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
#1474035265    68376     