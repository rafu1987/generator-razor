<?php
class FluidCache_Standalone_template_file_SystemInformation_fbb5f00c52d7b0d97ae55abaef2bafc07ec338f8 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<ul class="dropdown-list" data-count="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = $currentVariableContainer->getOrNull('count');
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = NULL;
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() {return NULL;};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1['encoding'] !== NULL ? $arguments1['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1['doubleEncode']));

$output0 .= '" data-severityclass="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments4 = array();
$arguments4['value'] = $currentVariableContainer->getOrNull('severityBadgeClass');
$arguments4['keepQuotes'] = false;
$arguments4['encoding'] = NULL;
$arguments4['doubleEncode'] = true;
$renderChildrenClosure5 = function() {return NULL;};
$value6 = ($arguments4['value'] !== NULL ? $arguments4['value'] : $renderChildrenClosure5());

$output0 .= (!is_string($value6) ? $value6 : htmlspecialchars($value6, ($arguments4['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments4['encoding'] !== NULL ? $arguments4['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments4['doubleEncode']));

$output0 .= '">
	<li class="dropdown-header">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments7 = array();
$arguments7['key'] = 'systemmessage.header';
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '</li>
	<li id="systeminformation_installtool" class="dropdown-intro typo3-module-menu-item submodule mod-system_InstallInstall" data-modulename="system_InstallInstall">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments9 = array();
$arguments9['key'] = 'systemmessage.intro';
// Rendering Array
$array10 = array();
$array10['0'] = $currentVariableContainer->getOrNull('installToolUrl');
$arguments9['arguments'] = $array10;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['htmlEscape'] = NULL;
$arguments9['extensionName'] = NULL;
$renderChildrenClosure11 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure11, $renderingContext);

$output0 .= '
	</li>
	<li>
		<dl class="dl-horizontal">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments12 = array();
$arguments12['each'] = $currentVariableContainer->getOrNull('systemInformation');
$arguments12['as'] = 'info';
$arguments12['key'] = '';
$arguments12['reverse'] = false;
$arguments12['iteration'] = NULL;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output14 = '';

$output14 .= '
				<dt title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments15 = array();
$arguments15['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('info'), 'title', $renderingContext);
$arguments15['keepQuotes'] = false;
$arguments15['encoding'] = NULL;
$arguments15['doubleEncode'] = true;
$renderChildrenClosure16 = function() {return NULL;};
$value17 = ($arguments15['value'] !== NULL ? $arguments15['value'] : $renderChildrenClosure16());

$output14 .= (!is_string($value17) ? $value17 : htmlspecialchars($value17, ($arguments15['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments15['encoding'] !== NULL ? $arguments15['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments15['doubleEncode']));

$output14 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments18 = array();
$arguments18['value'] = NULL;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('info'), 'icon', $renderingContext);
};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output14 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments20 = array();
$arguments20['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('info'), 'title', $renderingContext);
$arguments20['keepQuotes'] = false;
$arguments20['encoding'] = NULL;
$arguments20['doubleEncode'] = true;
$renderChildrenClosure21 = function() {return NULL;};
$value22 = ($arguments20['value'] !== NULL ? $arguments20['value'] : $renderChildrenClosure21());

$output14 .= (!is_string($value22) ? $value22 : htmlspecialchars($value22, ($arguments20['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments20['encoding'] !== NULL ? $arguments20['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments20['doubleEncode']));

$output14 .= '</dt>
				<dd>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments23 = array();
// Rendering Boolean node
$arguments23['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('info'), 'status', $renderingContext));
$arguments23['then'] = NULL;
$arguments23['else'] = NULL;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output25 = '';

$output25 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments26 = array();
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output28 = '';

$output28 .= '
						<span class="text-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments29 = array();
$arguments29['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('info'), 'status', $renderingContext);
$arguments29['keepQuotes'] = false;
$arguments29['encoding'] = NULL;
$arguments29['doubleEncode'] = true;
$renderChildrenClosure30 = function() {return NULL;};
$value31 = ($arguments29['value'] !== NULL ? $arguments29['value'] : $renderChildrenClosure30());

$output28 .= (!is_string($value31) ? $value31 : htmlspecialchars($value31, ($arguments29['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments29['encoding'] !== NULL ? $arguments29['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments29['doubleEncode']));

$output28 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments32 = array();
$arguments32['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('info'), 'value', $renderingContext);
$arguments32['keepQuotes'] = false;
$arguments32['encoding'] = NULL;
$arguments32['doubleEncode'] = true;
$renderChildrenClosure33 = function() {return NULL;};
$value34 = ($arguments32['value'] !== NULL ? $arguments32['value'] : $renderChildrenClosure33());

$output28 .= (!is_string($value34) ? $value34 : htmlspecialchars($value34, ($arguments32['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments32['encoding'] !== NULL ? $arguments32['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments32['doubleEncode']));

$output28 .= '</span>
					';
return $output28;
};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments35 = array();
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output37 = '';

$output37 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments38 = array();
$arguments38['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('info'), 'value', $renderingContext);
$arguments38['keepQuotes'] = false;
$arguments38['encoding'] = NULL;
$arguments38['doubleEncode'] = true;
$renderChildrenClosure39 = function() {return NULL;};
$value40 = ($arguments38['value'] !== NULL ? $arguments38['value'] : $renderChildrenClosure39());

$output37 .= (!is_string($value40) ? $value40 : htmlspecialchars($value40, ($arguments38['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments38['encoding'] !== NULL ? $arguments38['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments38['doubleEncode']));

$output37 .= '
					';
return $output37;
};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output25 .= '
				';
return $output25;
};
$arguments23['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output41 = '';

$output41 .= '
						<span class="text-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments42 = array();
$arguments42['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('info'), 'status', $renderingContext);
$arguments42['keepQuotes'] = false;
$arguments42['encoding'] = NULL;
$arguments42['doubleEncode'] = true;
$renderChildrenClosure43 = function() {return NULL;};
$value44 = ($arguments42['value'] !== NULL ? $arguments42['value'] : $renderChildrenClosure43());

$output41 .= (!is_string($value44) ? $value44 : htmlspecialchars($value44, ($arguments42['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments42['encoding'] !== NULL ? $arguments42['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments42['doubleEncode']));

$output41 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments45 = array();
$arguments45['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('info'), 'value', $renderingContext);
$arguments45['keepQuotes'] = false;
$arguments45['encoding'] = NULL;
$arguments45['doubleEncode'] = true;
$renderChildrenClosure46 = function() {return NULL;};
$value47 = ($arguments45['value'] !== NULL ? $arguments45['value'] : $renderChildrenClosure46());

$output41 .= (!is_string($value47) ? $value47 : htmlspecialchars($value47, ($arguments45['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments45['encoding'] !== NULL ? $arguments45['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments45['doubleEncode']));

$output41 .= '</span>
					';
return $output41;
};
$arguments23['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output48 = '';

$output48 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments49 = array();
$arguments49['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('info'), 'value', $renderingContext);
$arguments49['keepQuotes'] = false;
$arguments49['encoding'] = NULL;
$arguments49['doubleEncode'] = true;
$renderChildrenClosure50 = function() {return NULL;};
$value51 = ($arguments49['value'] !== NULL ? $arguments49['value'] : $renderChildrenClosure50());

$output48 .= (!is_string($value51) ? $value51 : htmlspecialchars($value51, ($arguments49['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments49['encoding'] !== NULL ? $arguments49['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments49['doubleEncode']));

$output48 .= '
					';
return $output48;
};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output14 .= '</dd>
			';
return $output14;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output0 .= '
		</dl>
	</li>
	<li class="divider"></li>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments52 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments53 = array();
$arguments53['subject'] = NULL;
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('messages');
};
$arguments52['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext), 0);
$arguments52['then'] = NULL;
$arguments52['else'] = NULL;
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output56 = '';

$output56 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments57 = array();
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output59 = '';

$output59 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments60 = array();
$arguments60['each'] = $currentVariableContainer->getOrNull('messages');
$arguments60['as'] = 'message';
$arguments60['key'] = '';
$arguments60['reverse'] = false;
$arguments60['iteration'] = NULL;
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output62 = '';

$output62 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments63 = array();
// Rendering Boolean node
$arguments63['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'module', $renderingContext));
$arguments63['then'] = NULL;
$arguments63['else'] = NULL;
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output65 = '';

$output65 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments66 = array();
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output68 = '';

$output68 .= '
						<li id="systeminformation_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments69 = array();
$arguments69['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'module', $renderingContext);
$arguments69['keepQuotes'] = false;
$arguments69['encoding'] = NULL;
$arguments69['doubleEncode'] = true;
$renderChildrenClosure70 = function() {return NULL;};
$value71 = ($arguments69['value'] !== NULL ? $arguments69['value'] : $renderChildrenClosure70());

$output68 .= (!is_string($value71) ? $value71 : htmlspecialchars($value71, ($arguments69['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments69['encoding'] !== NULL ? $arguments69['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments69['doubleEncode']));

$output68 .= '" class="t3js-systeminformation-module dropdown-intro typo3-module-menu-item submodule mod-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments72 = array();
$arguments72['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'module', $renderingContext);
$arguments72['keepQuotes'] = false;
$arguments72['encoding'] = NULL;
$arguments72['doubleEncode'] = true;
$renderChildrenClosure73 = function() {return NULL;};
$value74 = ($arguments72['value'] !== NULL ? $arguments72['value'] : $renderChildrenClosure73());

$output68 .= (!is_string($value74) ? $value74 : htmlspecialchars($value74, ($arguments72['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments72['encoding'] !== NULL ? $arguments72['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments72['doubleEncode']));

$output68 .= '" data-modulename="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments75 = array();
$arguments75['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'module', $renderingContext);
$arguments75['keepQuotes'] = false;
$arguments75['encoding'] = NULL;
$arguments75['doubleEncode'] = true;
$renderChildrenClosure76 = function() {return NULL;};
$value77 = ($arguments75['value'] !== NULL ? $arguments75['value'] : $renderChildrenClosure76());

$output68 .= (!is_string($value77) ? $value77 : htmlspecialchars($value77, ($arguments75['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments75['encoding'] !== NULL ? $arguments75['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments75['doubleEncode']));

$output68 .= '">
							<span class="text-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments78 = array();
$arguments78['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'status', $renderingContext);
$arguments78['keepQuotes'] = false;
$arguments78['encoding'] = NULL;
$arguments78['doubleEncode'] = true;
$renderChildrenClosure79 = function() {return NULL;};
$value80 = ($arguments78['value'] !== NULL ? $arguments78['value'] : $renderChildrenClosure79());

$output68 .= (!is_string($value80) ? $value80 : htmlspecialchars($value80, ($arguments78['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments78['encoding'] !== NULL ? $arguments78['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments78['doubleEncode']));

$output68 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments81 = array();
$arguments81['value'] = NULL;
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'text', $renderingContext);
};

$output68 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output68 .= '</span>
						</li>
					';
return $output68;
};

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments83 = array();
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output85 = '';

$output85 .= '
						<li>
							<span class="text-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments86 = array();
$arguments86['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'status', $renderingContext);
$arguments86['keepQuotes'] = false;
$arguments86['encoding'] = NULL;
$arguments86['doubleEncode'] = true;
$renderChildrenClosure87 = function() {return NULL;};
$value88 = ($arguments86['value'] !== NULL ? $arguments86['value'] : $renderChildrenClosure87());

$output85 .= (!is_string($value88) ? $value88 : htmlspecialchars($value88, ($arguments86['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments86['encoding'] !== NULL ? $arguments86['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments86['doubleEncode']));

$output85 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments89 = array();
$arguments89['value'] = NULL;
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'text', $renderingContext);
};

$output85 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output85 .= '</span>
						</li>
					';
return $output85;
};

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output65 .= '
				';
return $output65;
};
$arguments63['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output91 = '';

$output91 .= '
						<li id="systeminformation_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments92 = array();
$arguments92['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'module', $renderingContext);
$arguments92['keepQuotes'] = false;
$arguments92['encoding'] = NULL;
$arguments92['doubleEncode'] = true;
$renderChildrenClosure93 = function() {return NULL;};
$value94 = ($arguments92['value'] !== NULL ? $arguments92['value'] : $renderChildrenClosure93());

$output91 .= (!is_string($value94) ? $value94 : htmlspecialchars($value94, ($arguments92['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments92['encoding'] !== NULL ? $arguments92['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments92['doubleEncode']));

$output91 .= '" class="t3js-systeminformation-module dropdown-intro typo3-module-menu-item submodule mod-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments95 = array();
$arguments95['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'module', $renderingContext);
$arguments95['keepQuotes'] = false;
$arguments95['encoding'] = NULL;
$arguments95['doubleEncode'] = true;
$renderChildrenClosure96 = function() {return NULL;};
$value97 = ($arguments95['value'] !== NULL ? $arguments95['value'] : $renderChildrenClosure96());

$output91 .= (!is_string($value97) ? $value97 : htmlspecialchars($value97, ($arguments95['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments95['encoding'] !== NULL ? $arguments95['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments95['doubleEncode']));

$output91 .= '" data-modulename="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments98 = array();
$arguments98['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'module', $renderingContext);
$arguments98['keepQuotes'] = false;
$arguments98['encoding'] = NULL;
$arguments98['doubleEncode'] = true;
$renderChildrenClosure99 = function() {return NULL;};
$value100 = ($arguments98['value'] !== NULL ? $arguments98['value'] : $renderChildrenClosure99());

$output91 .= (!is_string($value100) ? $value100 : htmlspecialchars($value100, ($arguments98['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments98['encoding'] !== NULL ? $arguments98['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments98['doubleEncode']));

$output91 .= '">
							<span class="text-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments101 = array();
$arguments101['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'status', $renderingContext);
$arguments101['keepQuotes'] = false;
$arguments101['encoding'] = NULL;
$arguments101['doubleEncode'] = true;
$renderChildrenClosure102 = function() {return NULL;};
$value103 = ($arguments101['value'] !== NULL ? $arguments101['value'] : $renderChildrenClosure102());

$output91 .= (!is_string($value103) ? $value103 : htmlspecialchars($value103, ($arguments101['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments101['encoding'] !== NULL ? $arguments101['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments101['doubleEncode']));

$output91 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments104 = array();
$arguments104['value'] = NULL;
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'text', $renderingContext);
};

$output91 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output91 .= '</span>
						</li>
					';
return $output91;
};
$arguments63['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output106 = '';

$output106 .= '
						<li>
							<span class="text-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments107 = array();
$arguments107['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'status', $renderingContext);
$arguments107['keepQuotes'] = false;
$arguments107['encoding'] = NULL;
$arguments107['doubleEncode'] = true;
$renderChildrenClosure108 = function() {return NULL;};
$value109 = ($arguments107['value'] !== NULL ? $arguments107['value'] : $renderChildrenClosure108());

$output106 .= (!is_string($value109) ? $value109 : htmlspecialchars($value109, ($arguments107['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments107['encoding'] !== NULL ? $arguments107['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments107['doubleEncode']));

$output106 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments110 = array();
$arguments110['value'] = NULL;
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'text', $renderingContext);
};

$output106 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output106 .= '</span>
						</li>
					';
return $output106;
};

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output62 .= '
			';
return $output62;
};

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '
		';
return $output59;
};

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments112 = array();
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output114 = '';

$output114 .= '
			<li><span class="text-success">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$arguments115 = array();
$arguments115['value'] = NULL;
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments117 = array();
$arguments117['key'] = 'systemmessage.allgood';
$arguments117['id'] = NULL;
$arguments117['default'] = NULL;
$arguments117['htmlEscape'] = NULL;
$arguments117['arguments'] = NULL;
$arguments117['extensionName'] = NULL;
$renderChildrenClosure118 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);
};

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output114 .= '</span></li>
		';
return $output114;
};

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output56 .= '
	';
return $output56;
};
$arguments52['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output119 = '';

$output119 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments120 = array();
$arguments120['each'] = $currentVariableContainer->getOrNull('messages');
$arguments120['as'] = 'message';
$arguments120['key'] = '';
$arguments120['reverse'] = false;
$arguments120['iteration'] = NULL;
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output122 = '';

$output122 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments123 = array();
// Rendering Boolean node
$arguments123['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'module', $renderingContext));
$arguments123['then'] = NULL;
$arguments123['else'] = NULL;
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output125 = '';

$output125 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments126 = array();
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output128 = '';

$output128 .= '
						<li id="systeminformation_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments129 = array();
$arguments129['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'module', $renderingContext);
$arguments129['keepQuotes'] = false;
$arguments129['encoding'] = NULL;
$arguments129['doubleEncode'] = true;
$renderChildrenClosure130 = function() {return NULL;};
$value131 = ($arguments129['value'] !== NULL ? $arguments129['value'] : $renderChildrenClosure130());

$output128 .= (!is_string($value131) ? $value131 : htmlspecialchars($value131, ($arguments129['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments129['encoding'] !== NULL ? $arguments129['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments129['doubleEncode']));

$output128 .= '" class="t3js-systeminformation-module dropdown-intro typo3-module-menu-item submodule mod-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments132 = array();
$arguments132['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'module', $renderingContext);
$arguments132['keepQuotes'] = false;
$arguments132['encoding'] = NULL;
$arguments132['doubleEncode'] = true;
$renderChildrenClosure133 = function() {return NULL;};
$value134 = ($arguments132['value'] !== NULL ? $arguments132['value'] : $renderChildrenClosure133());

$output128 .= (!is_string($value134) ? $value134 : htmlspecialchars($value134, ($arguments132['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments132['encoding'] !== NULL ? $arguments132['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments132['doubleEncode']));

$output128 .= '" data-modulename="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments135 = array();
$arguments135['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'module', $renderingContext);
$arguments135['keepQuotes'] = false;
$arguments135['encoding'] = NULL;
$arguments135['doubleEncode'] = true;
$renderChildrenClosure136 = function() {return NULL;};
$value137 = ($arguments135['value'] !== NULL ? $arguments135['value'] : $renderChildrenClosure136());

$output128 .= (!is_string($value137) ? $value137 : htmlspecialchars($value137, ($arguments135['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments135['encoding'] !== NULL ? $arguments135['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments135['doubleEncode']));

$output128 .= '">
							<span class="text-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments138 = array();
$arguments138['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'status', $renderingContext);
$arguments138['keepQuotes'] = false;
$arguments138['encoding'] = NULL;
$arguments138['doubleEncode'] = true;
$renderChildrenClosure139 = function() {return NULL;};
$value140 = ($arguments138['value'] !== NULL ? $arguments138['value'] : $renderChildrenClosure139());

$output128 .= (!is_string($value140) ? $value140 : htmlspecialchars($value140, ($arguments138['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments138['encoding'] !== NULL ? $arguments138['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments138['doubleEncode']));

$output128 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments141 = array();
$arguments141['value'] = NULL;
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'text', $renderingContext);
};

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output128 .= '</span>
						</li>
					';
return $output128;
};

$output125 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output125 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments143 = array();
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output145 = '';

$output145 .= '
						<li>
							<span class="text-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments146 = array();
$arguments146['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'status', $renderingContext);
$arguments146['keepQuotes'] = false;
$arguments146['encoding'] = NULL;
$arguments146['doubleEncode'] = true;
$renderChildrenClosure147 = function() {return NULL;};
$value148 = ($arguments146['value'] !== NULL ? $arguments146['value'] : $renderChildrenClosure147());

$output145 .= (!is_string($value148) ? $value148 : htmlspecialchars($value148, ($arguments146['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments146['encoding'] !== NULL ? $arguments146['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments146['doubleEncode']));

$output145 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments149 = array();
$arguments149['value'] = NULL;
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'text', $renderingContext);
};

$output145 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output145 .= '</span>
						</li>
					';
return $output145;
};

$output125 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output125 .= '
				';
return $output125;
};
$arguments123['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output151 = '';

$output151 .= '
						<li id="systeminformation_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments152 = array();
$arguments152['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'module', $renderingContext);
$arguments152['keepQuotes'] = false;
$arguments152['encoding'] = NULL;
$arguments152['doubleEncode'] = true;
$renderChildrenClosure153 = function() {return NULL;};
$value154 = ($arguments152['value'] !== NULL ? $arguments152['value'] : $renderChildrenClosure153());

$output151 .= (!is_string($value154) ? $value154 : htmlspecialchars($value154, ($arguments152['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments152['encoding'] !== NULL ? $arguments152['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments152['doubleEncode']));

$output151 .= '" class="t3js-systeminformation-module dropdown-intro typo3-module-menu-item submodule mod-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments155 = array();
$arguments155['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'module', $renderingContext);
$arguments155['keepQuotes'] = false;
$arguments155['encoding'] = NULL;
$arguments155['doubleEncode'] = true;
$renderChildrenClosure156 = function() {return NULL;};
$value157 = ($arguments155['value'] !== NULL ? $arguments155['value'] : $renderChildrenClosure156());

$output151 .= (!is_string($value157) ? $value157 : htmlspecialchars($value157, ($arguments155['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments155['encoding'] !== NULL ? $arguments155['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments155['doubleEncode']));

$output151 .= '" data-modulename="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments158 = array();
$arguments158['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'module', $renderingContext);
$arguments158['keepQuotes'] = false;
$arguments158['encoding'] = NULL;
$arguments158['doubleEncode'] = true;
$renderChildrenClosure159 = function() {return NULL;};
$value160 = ($arguments158['value'] !== NULL ? $arguments158['value'] : $renderChildrenClosure159());

$output151 .= (!is_string($value160) ? $value160 : htmlspecialchars($value160, ($arguments158['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments158['encoding'] !== NULL ? $arguments158['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments158['doubleEncode']));

$output151 .= '">
							<span class="text-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments161 = array();
$arguments161['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'status', $renderingContext);
$arguments161['keepQuotes'] = false;
$arguments161['encoding'] = NULL;
$arguments161['doubleEncode'] = true;
$renderChildrenClosure162 = function() {return NULL;};
$value163 = ($arguments161['value'] !== NULL ? $arguments161['value'] : $renderChildrenClosure162());

$output151 .= (!is_string($value163) ? $value163 : htmlspecialchars($value163, ($arguments161['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments161['encoding'] !== NULL ? $arguments161['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments161['doubleEncode']));

$output151 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments164 = array();
$arguments164['value'] = NULL;
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'text', $renderingContext);
};

$output151 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output151 .= '</span>
						</li>
					';
return $output151;
};
$arguments123['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output166 = '';

$output166 .= '
						<li>
							<span class="text-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments167 = array();
$arguments167['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'status', $renderingContext);
$arguments167['keepQuotes'] = false;
$arguments167['encoding'] = NULL;
$arguments167['doubleEncode'] = true;
$renderChildrenClosure168 = function() {return NULL;};
$value169 = ($arguments167['value'] !== NULL ? $arguments167['value'] : $renderChildrenClosure168());

$output166 .= (!is_string($value169) ? $value169 : htmlspecialchars($value169, ($arguments167['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments167['encoding'] !== NULL ? $arguments167['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments167['doubleEncode']));

$output166 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments170 = array();
$arguments170['value'] = NULL;
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'text', $renderingContext);
};

$output166 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output166 .= '</span>
						</li>
					';
return $output166;
};

$output122 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output122 .= '
			';
return $output122;
};

$output119 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output119 .= '
		';
return $output119;
};
$arguments52['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output172 = '';

$output172 .= '
			<li><span class="text-success">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$arguments173 = array();
$arguments173['value'] = NULL;
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments175 = array();
$arguments175['key'] = 'systemmessage.allgood';
$arguments175['id'] = NULL;
$arguments175['default'] = NULL;
$arguments175['htmlEscape'] = NULL;
$arguments175['arguments'] = NULL;
$arguments175['extensionName'] = NULL;
$renderChildrenClosure176 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);
};

$output172 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output172 .= '</span></li>
		';
return $output172;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments52, $renderChildrenClosure55, $renderingContext);

$output0 .= '
</ul>';


return $output0;
}


}
#1474035299    47975     