<?php
class FluidCache_Standalone_template_file_UserPassLoginForm_4eaaf282c1845d480c84b5f2adc1fcb2f8ea2ed1 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return 'Login';
}
public function hasLayout() {
return TRUE;
}

/**
 * section loginFormFields
 */
public function section_d125784443bed2140f366503ba88a5689028c882(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
	<div class="form-group t3js-login-username-section" id="t3-login-username-section">
		<div class="form-control-wrap">
			<div class="form-control-holder">
				<input type="text" id="t3-username" name="username" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = $currentVariableContainer->getOrNull('presetUsername');
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = NULL;
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() {return NULL;};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1['encoding'] !== NULL ? $arguments1['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1['doubleEncode']));

$output0 .= '" placeholder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments4 = array();
$arguments4['key'] = 'login.username';
$arguments4['id'] = NULL;
$arguments4['default'] = NULL;
$arguments4['htmlEscape'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '" class="form-control input-login t3js-clearable t3js-login-username-field" autofocus="autofocus" required="required" />
				<div class="form-notice-capslock hidden t3js-login-alert-capslock">
					<img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments6 = array();
$arguments6['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('images'), 'capslock', $renderingContext);
$arguments6['keepQuotes'] = false;
$arguments6['encoding'] = NULL;
$arguments6['doubleEncode'] = true;
$renderChildrenClosure7 = function() {return NULL;};
$value8 = ($arguments6['value'] !== NULL ? $arguments6['value'] : $renderChildrenClosure7());

$output0 .= (!is_string($value8) ? $value8 : htmlspecialchars($value8, ($arguments6['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments6['encoding'] !== NULL ? $arguments6['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments6['doubleEncode']));

$output0 .= '" width="14" height="14" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments9 = array();
$arguments9['key'] = 'login.error.capslock';
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['htmlEscape'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$renderChildrenClosure10 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments11 = array();
$arguments11['key'] = 'login.error.capslock';
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['htmlEscape'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$renderChildrenClosure12 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output0 .= '" />
				</div>
			</div>
		</div>
	</div>
	<div class="form-group t3js-login-password-section" id="t3-login-password-section">
		<div class="form-control-wrap">
			<div class="form-control-holder">
				<input type="password" id="t3-password" name="p_field" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments13 = array();
$arguments13['value'] = $currentVariableContainer->getOrNull('presetPassword');
$arguments13['keepQuotes'] = false;
$arguments13['encoding'] = NULL;
$arguments13['doubleEncode'] = true;
$renderChildrenClosure14 = function() {return NULL;};
$value15 = ($arguments13['value'] !== NULL ? $arguments13['value'] : $renderChildrenClosure14());

$output0 .= (!is_string($value15) ? $value15 : htmlspecialchars($value15, ($arguments13['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments13['encoding'] !== NULL ? $arguments13['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments13['doubleEncode']));

$output0 .= '" placeholder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments16 = array();
$arguments16['key'] = 'login.password';
$arguments16['id'] = NULL;
$arguments16['default'] = NULL;
$arguments16['htmlEscape'] = NULL;
$arguments16['arguments'] = NULL;
$arguments16['extensionName'] = NULL;
$renderChildrenClosure17 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output0 .= '" class="form-control input-login t3js-clearable t3js-login-password-field" required="required" data-rsa-encryption="t3-field-userident" />
				<div class="form-notice-capslock hidden t3js-login-alert-capslock">
					<img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments18 = array();
$arguments18['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('images'), 'capslock', $renderingContext);
$arguments18['keepQuotes'] = false;
$arguments18['encoding'] = NULL;
$arguments18['doubleEncode'] = true;
$renderChildrenClosure19 = function() {return NULL;};
$value20 = ($arguments18['value'] !== NULL ? $arguments18['value'] : $renderChildrenClosure19());

$output0 .= (!is_string($value20) ? $value20 : htmlspecialchars($value20, ($arguments18['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments18['encoding'] !== NULL ? $arguments18['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments18['doubleEncode']));

$output0 .= '" width="14" height="14" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments21 = array();
$arguments21['key'] = 'login.error.capslock';
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['htmlEscape'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$renderChildrenClosure22 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output0 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments23 = array();
$arguments23['key'] = 'login.error.capslock';
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['htmlEscape'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$renderChildrenClosure24 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output0 .= '" />
				</div>
			</div>
		</div>
	</div>
';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output25 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments26 = array();
$arguments26['name'] = 'Login';
$renderChildrenClosure27 = function() {return NULL;};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper28->setArguments($arguments26);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output25 .= $viewHelper28->initializeArgumentsAndRender();

$output25 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments29 = array();
$arguments29['name'] = 'loginFormFields';
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
	<div class="form-group t3js-login-username-section" id="t3-login-username-section">
		<div class="form-control-wrap">
			<div class="form-control-holder">
				<input type="text" id="t3-username" name="username" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments32 = array();
$arguments32['value'] = $currentVariableContainer->getOrNull('presetUsername');
$arguments32['keepQuotes'] = false;
$arguments32['encoding'] = NULL;
$arguments32['doubleEncode'] = true;
$renderChildrenClosure33 = function() {return NULL;};
$value34 = ($arguments32['value'] !== NULL ? $arguments32['value'] : $renderChildrenClosure33());

$output31 .= (!is_string($value34) ? $value34 : htmlspecialchars($value34, ($arguments32['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments32['encoding'] !== NULL ? $arguments32['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments32['doubleEncode']));

$output31 .= '" placeholder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments35 = array();
$arguments35['key'] = 'login.username';
$arguments35['id'] = NULL;
$arguments35['default'] = NULL;
$arguments35['htmlEscape'] = NULL;
$arguments35['arguments'] = NULL;
$arguments35['extensionName'] = NULL;
$renderChildrenClosure36 = function() {return NULL;};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output31 .= '" class="form-control input-login t3js-clearable t3js-login-username-field" autofocus="autofocus" required="required" />
				<div class="form-notice-capslock hidden t3js-login-alert-capslock">
					<img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments37 = array();
$arguments37['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('images'), 'capslock', $renderingContext);
$arguments37['keepQuotes'] = false;
$arguments37['encoding'] = NULL;
$arguments37['doubleEncode'] = true;
$renderChildrenClosure38 = function() {return NULL;};
$value39 = ($arguments37['value'] !== NULL ? $arguments37['value'] : $renderChildrenClosure38());

$output31 .= (!is_string($value39) ? $value39 : htmlspecialchars($value39, ($arguments37['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments37['encoding'] !== NULL ? $arguments37['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments37['doubleEncode']));

$output31 .= '" width="14" height="14" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments40 = array();
$arguments40['key'] = 'login.error.capslock';
$arguments40['id'] = NULL;
$arguments40['default'] = NULL;
$arguments40['htmlEscape'] = NULL;
$arguments40['arguments'] = NULL;
$arguments40['extensionName'] = NULL;
$renderChildrenClosure41 = function() {return NULL;};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output31 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments42 = array();
$arguments42['key'] = 'login.error.capslock';
$arguments42['id'] = NULL;
$arguments42['default'] = NULL;
$arguments42['htmlEscape'] = NULL;
$arguments42['arguments'] = NULL;
$arguments42['extensionName'] = NULL;
$renderChildrenClosure43 = function() {return NULL;};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output31 .= '" />
				</div>
			</div>
		</div>
	</div>
	<div class="form-group t3js-login-password-section" id="t3-login-password-section">
		<div class="form-control-wrap">
			<div class="form-control-holder">
				<input type="password" id="t3-password" name="p_field" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments44 = array();
$arguments44['value'] = $currentVariableContainer->getOrNull('presetPassword');
$arguments44['keepQuotes'] = false;
$arguments44['encoding'] = NULL;
$arguments44['doubleEncode'] = true;
$renderChildrenClosure45 = function() {return NULL;};
$value46 = ($arguments44['value'] !== NULL ? $arguments44['value'] : $renderChildrenClosure45());

$output31 .= (!is_string($value46) ? $value46 : htmlspecialchars($value46, ($arguments44['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments44['encoding'] !== NULL ? $arguments44['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments44['doubleEncode']));

$output31 .= '" placeholder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments47 = array();
$arguments47['key'] = 'login.password';
$arguments47['id'] = NULL;
$arguments47['default'] = NULL;
$arguments47['htmlEscape'] = NULL;
$arguments47['arguments'] = NULL;
$arguments47['extensionName'] = NULL;
$renderChildrenClosure48 = function() {return NULL;};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output31 .= '" class="form-control input-login t3js-clearable t3js-login-password-field" required="required" data-rsa-encryption="t3-field-userident" />
				<div class="form-notice-capslock hidden t3js-login-alert-capslock">
					<img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments49 = array();
$arguments49['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('images'), 'capslock', $renderingContext);
$arguments49['keepQuotes'] = false;
$arguments49['encoding'] = NULL;
$arguments49['doubleEncode'] = true;
$renderChildrenClosure50 = function() {return NULL;};
$value51 = ($arguments49['value'] !== NULL ? $arguments49['value'] : $renderChildrenClosure50());

$output31 .= (!is_string($value51) ? $value51 : htmlspecialchars($value51, ($arguments49['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments49['encoding'] !== NULL ? $arguments49['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments49['doubleEncode']));

$output31 .= '" width="14" height="14" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments52 = array();
$arguments52['key'] = 'login.error.capslock';
$arguments52['id'] = NULL;
$arguments52['default'] = NULL;
$arguments52['htmlEscape'] = NULL;
$arguments52['arguments'] = NULL;
$arguments52['extensionName'] = NULL;
$renderChildrenClosure53 = function() {return NULL;};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output31 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments54 = array();
$arguments54['key'] = 'login.error.capslock';
$arguments54['id'] = NULL;
$arguments54['default'] = NULL;
$arguments54['htmlEscape'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$renderChildrenClosure55 = function() {return NULL;};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output31 .= '" />
				</div>
			</div>
		</div>
	</div>
';
return $output31;
};

$output25 .= '';

$output25 .= '
';


return $output25;
}


}
#1474035265    17022     