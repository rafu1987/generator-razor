<?php
class FluidCache_Aboutmodules_Modules_action_index_e2e426b2cd5d91744a56764d8105903ad72304c7 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
	<div class="typo3-aboutmodules-inner-docbody">
		<h1>TYPO3 CMS ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = $currentVariableContainer->getOrNull('TYPO3Version');
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = NULL;
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() {return NULL;};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1['encoding'] !== NULL ? $arguments1['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1['doubleEncode']));

$output0 .= '<br />
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments4 = array();
$arguments4['key'] = 'LLL:EXT:lang/locallang_alt_intro.xlf:introtext';
$arguments4['id'] = NULL;
$arguments4['default'] = NULL;
$arguments4['htmlEscape'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$renderChildrenClosure5 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
		</h1>

		<p class="lead">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments6 = array();
$arguments6['key'] = 'LLL:EXT:lang/locallang_alt_intro.xlf:introtext2';
$arguments6['id'] = NULL;
$arguments6['default'] = NULL;
$arguments6['htmlEscape'] = NULL;
$arguments6['arguments'] = NULL;
$arguments6['extensionName'] = NULL;
$renderChildrenClosure7 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
		</p>

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments8 = array();
// Rendering Boolean node
$arguments8['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('warningMessages'));
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output10 = '';

$output10 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments11 = array();
$arguments11['title'] = $currentVariableContainer->getOrNull('warningTitle');
$arguments11['state'] = '2';
$arguments11['message'] = NULL;
$arguments11['iconName'] = NULL;
$arguments11['disableIcon'] = false;
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments13 = array();
$arguments13['value'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('warningMessages');
};
return TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);
};

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
		';
return $output10;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments15 = array();
$arguments15['each'] = $currentVariableContainer->getOrNull('modules');
$arguments15['as'] = 'mainModule';
$arguments15['key'] = '';
$arguments15['reverse'] = false;
$arguments15['iteration'] = NULL;
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output17 = '';

$output17 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments18 = array();
// Rendering Boolean node
$arguments18['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainModule'), 'subModules', $renderingContext));
$arguments18['then'] = NULL;
$arguments18['else'] = NULL;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output20 = '';

$output20 .= '
				<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments21 = array();
$arguments21['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainModule'), 'label', $renderingContext);
$arguments21['keepQuotes'] = false;
$arguments21['encoding'] = NULL;
$arguments21['doubleEncode'] = true;
$renderChildrenClosure22 = function() {return NULL;};
$value23 = ($arguments21['value'] !== NULL ? $arguments21['value'] : $renderChildrenClosure22());

$output20 .= (!is_string($value23) ? $value23 : htmlspecialchars($value23, ($arguments21['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments21['encoding'] !== NULL ? $arguments21['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments21['doubleEncode']));

$output20 .= '</h2>
				<div class="container-fuid">
					<div class="row">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments24 = array();
$arguments24['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainModule'), 'subModules', $renderingContext);
$arguments24['as'] = 'subModule';
$arguments24['iteration'] = 'subModuleIterator';
$arguments24['key'] = '';
$arguments24['reverse'] = false;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output26 = '';

$output26 .= '
							<div class="col-xs-12 col-sm-6">
								<div class="submodule media clearfix">
									<a
										href="#"
										onclick="top.goToModule(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments27 = array();
$arguments27['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainModule'), 'name', $renderingContext);
$arguments27['keepQuotes'] = false;
$arguments27['encoding'] = NULL;
$arguments27['doubleEncode'] = true;
$renderChildrenClosure28 = function() {return NULL;};
$value29 = ($arguments27['value'] !== NULL ? $arguments27['value'] : $renderChildrenClosure28());

$output26 .= (!is_string($value29) ? $value29 : htmlspecialchars($value29, ($arguments27['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments27['encoding'] !== NULL ? $arguments27['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments27['doubleEncode']));

$output26 .= '_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments30 = array();
$arguments30['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subModule'), 'name', $renderingContext);
$arguments30['keepQuotes'] = false;
$arguments30['encoding'] = NULL;
$arguments30['doubleEncode'] = true;
$renderChildrenClosure31 = function() {return NULL;};
$value32 = ($arguments30['value'] !== NULL ? $arguments30['value'] : $renderChildrenClosure31());

$output26 .= (!is_string($value32) ? $value32 : htmlspecialchars($value32, ($arguments30['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments30['encoding'] !== NULL ? $arguments30['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments30['doubleEncode']));

$output26 .= '\'); return false;"
										title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments33 = array();
$arguments33['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subModule'), 'shortDescription', $renderingContext);
$arguments33['keepQuotes'] = false;
$arguments33['encoding'] = NULL;
$arguments33['doubleEncode'] = true;
$renderChildrenClosure34 = function() {return NULL;};
$value35 = ($arguments33['value'] !== NULL ? $arguments33['value'] : $renderChildrenClosure34());

$output26 .= (!is_string($value35) ? $value35 : htmlspecialchars($value35, ($arguments33['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments33['encoding'] !== NULL ? $arguments33['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments33['doubleEncode']));

$output26 .= '"
										class="pull-left"
									>
										<span class="typo3-app-icon">
											<span>
												<span>
													<img src="../';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments36 = array();
$arguments36['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subModule'), 'icon', $renderingContext);
$arguments36['keepQuotes'] = false;
$arguments36['encoding'] = NULL;
$arguments36['doubleEncode'] = true;
$renderChildrenClosure37 = function() {return NULL;};
$value38 = ($arguments36['value'] !== NULL ? $arguments36['value'] : $renderChildrenClosure37());

$output26 .= (!is_string($value38) ? $value38 : htmlspecialchars($value38, ($arguments36['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments36['encoding'] !== NULL ? $arguments36['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments36['doubleEncode']));

$output26 .= '" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments39 = array();
$arguments39['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subModule'), 'label', $renderingContext);
$arguments39['keepQuotes'] = false;
$arguments39['encoding'] = NULL;
$arguments39['doubleEncode'] = true;
$renderChildrenClosure40 = function() {return NULL;};
$value41 = ($arguments39['value'] !== NULL ? $arguments39['value'] : $renderChildrenClosure40());

$output26 .= (!is_string($value41) ? $value41 : htmlspecialchars($value41, ($arguments39['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments39['encoding'] !== NULL ? $arguments39['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments39['doubleEncode']));

$output26 .= '" class="media-object" />
												</span>
											</span>
										</span>
									</a>

									<div class="media-body">
										<strong>
											<a
												href="#"
												onclick="top.goToModule(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments42 = array();
$arguments42['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainModule'), 'name', $renderingContext);
$arguments42['keepQuotes'] = false;
$arguments42['encoding'] = NULL;
$arguments42['doubleEncode'] = true;
$renderChildrenClosure43 = function() {return NULL;};
$value44 = ($arguments42['value'] !== NULL ? $arguments42['value'] : $renderChildrenClosure43());

$output26 .= (!is_string($value44) ? $value44 : htmlspecialchars($value44, ($arguments42['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments42['encoding'] !== NULL ? $arguments42['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments42['doubleEncode']));

$output26 .= '_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments45 = array();
$arguments45['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subModule'), 'name', $renderingContext);
$arguments45['keepQuotes'] = false;
$arguments45['encoding'] = NULL;
$arguments45['doubleEncode'] = true;
$renderChildrenClosure46 = function() {return NULL;};
$value47 = ($arguments45['value'] !== NULL ? $arguments45['value'] : $renderChildrenClosure46());

$output26 .= (!is_string($value47) ? $value47 : htmlspecialchars($value47, ($arguments45['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments45['encoding'] !== NULL ? $arguments45['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments45['doubleEncode']));

$output26 .= '\'); return false;"
												title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments48 = array();
$arguments48['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subModule'), 'shortDescription', $renderingContext);
$arguments48['keepQuotes'] = false;
$arguments48['encoding'] = NULL;
$arguments48['doubleEncode'] = true;
$renderChildrenClosure49 = function() {return NULL;};
$value50 = ($arguments48['value'] !== NULL ? $arguments48['value'] : $renderChildrenClosure49());

$output26 .= (!is_string($value50) ? $value50 : htmlspecialchars($value50, ($arguments48['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments48['encoding'] !== NULL ? $arguments48['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments48['doubleEncode']));

$output26 .= '"
												>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments51 = array();
$arguments51['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subModule'), 'label', $renderingContext);
$arguments51['keepQuotes'] = false;
$arguments51['encoding'] = NULL;
$arguments51['doubleEncode'] = true;
$renderChildrenClosure52 = function() {return NULL;};
$value53 = ($arguments51['value'] !== NULL ? $arguments51['value'] : $renderChildrenClosure52());

$output26 .= (!is_string($value53) ? $value53 : htmlspecialchars($value53, ($arguments51['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments51['encoding'] !== NULL ? $arguments51['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments51['doubleEncode']));

$output26 .= '</a>
										</strong><br>

										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments54 = array();
// Rendering Boolean node
$arguments54['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subModule'), 'shortDescription', $renderingContext));
$arguments54['then'] = NULL;
$arguments54['else'] = NULL;
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output56 = '';

$output56 .= '
											<small class="text-muted">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments57 = array();
$arguments57['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subModule'), 'shortDescription', $renderingContext);
$arguments57['keepQuotes'] = false;
$arguments57['encoding'] = NULL;
$arguments57['doubleEncode'] = true;
$renderChildrenClosure58 = function() {return NULL;};
$value59 = ($arguments57['value'] !== NULL ? $arguments57['value'] : $renderChildrenClosure58());

$output56 .= (!is_string($value59) ? $value59 : htmlspecialchars($value59, ($arguments57['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments57['encoding'] !== NULL ? $arguments57['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments57['doubleEncode']));

$output56 .= '</small><br>
										';
return $output56;
};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output26 .= '

										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments60 = array();
$arguments60['value'] = NULL;
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subModule'), 'longDescription', $renderingContext);
};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output26 .= '
									</div>
								</div>
							</div>

							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments62 = array();
// Rendering Boolean node
$arguments62['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subModuleIterator'), 'isEven', $renderingContext));
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output64 = '';

$output64 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments65 = array();
// Rendering Boolean node
$arguments65['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subModuleIterator'), 'isLast', $renderingContext), 0);
$arguments65['then'] = NULL;
$arguments65['else'] = NULL;
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
									</div><div class="row">
								';
};

$output64 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output64 .= '
							';
return $output64;
};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output26 .= '
						';
return $output26;
};

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output20 .= '
					</div>
				</div>
			';
return $output20;
};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
		';
return $output17;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '

		<p class="end-text text-info">
			<em>
				(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments67 = array();
$arguments67['key'] = 'LLL:EXT:lang/locallang_alt_intro.xlf:endText';
$arguments67['id'] = NULL;
$arguments67['default'] = NULL;
$arguments67['htmlEscape'] = NULL;
$arguments67['arguments'] = NULL;
$arguments67['extensionName'] = NULL;
$renderChildrenClosure68 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output0 .= ')
			</em>
		</p>

		<p>
			<small>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments69 = array();
$arguments69['value'] = NULL;
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('copyRightNotice');
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output0 .= '
			</small>
		</p>

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

$output71 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments72 = array();
$arguments72['name'] = 'Default';
$renderChildrenClosure73 = function() {return NULL;};
$viewHelper74 = $self->getViewHelper('$viewHelper74', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper74->setArguments($arguments72);
$viewHelper74->setRenderingContext($renderingContext);
$viewHelper74->setRenderChildrenClosure($renderChildrenClosure73);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output71 .= $viewHelper74->initializeArgumentsAndRender();

$output71 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments75 = array();
$arguments75['name'] = 'Content';
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output77 = '';

$output77 .= '
	<div class="typo3-aboutmodules-inner-docbody">
		<h1>TYPO3 CMS ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments78 = array();
$arguments78['value'] = $currentVariableContainer->getOrNull('TYPO3Version');
$arguments78['keepQuotes'] = false;
$arguments78['encoding'] = NULL;
$arguments78['doubleEncode'] = true;
$renderChildrenClosure79 = function() {return NULL;};
$value80 = ($arguments78['value'] !== NULL ? $arguments78['value'] : $renderChildrenClosure79());

$output77 .= (!is_string($value80) ? $value80 : htmlspecialchars($value80, ($arguments78['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments78['encoding'] !== NULL ? $arguments78['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments78['doubleEncode']));

$output77 .= '<br />
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments81 = array();
$arguments81['key'] = 'LLL:EXT:lang/locallang_alt_intro.xlf:introtext';
$arguments81['id'] = NULL;
$arguments81['default'] = NULL;
$arguments81['htmlEscape'] = NULL;
$arguments81['arguments'] = NULL;
$arguments81['extensionName'] = NULL;
$renderChildrenClosure82 = function() {return NULL;};

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output77 .= '
		</h1>

		<p class="lead">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments83 = array();
$arguments83['key'] = 'LLL:EXT:lang/locallang_alt_intro.xlf:introtext2';
$arguments83['id'] = NULL;
$arguments83['default'] = NULL;
$arguments83['htmlEscape'] = NULL;
$arguments83['arguments'] = NULL;
$arguments83['extensionName'] = NULL;
$renderChildrenClosure84 = function() {return NULL;};

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output77 .= '
		</p>

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments85 = array();
// Rendering Boolean node
$arguments85['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('warningMessages'));
$arguments85['then'] = NULL;
$arguments85['else'] = NULL;
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output87 = '';

$output87 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$arguments88 = array();
$arguments88['title'] = $currentVariableContainer->getOrNull('warningTitle');
$arguments88['state'] = '2';
$arguments88['message'] = NULL;
$arguments88['iconName'] = NULL;
$arguments88['disableIcon'] = false;
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments90 = array();
$arguments90['value'] = NULL;
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('warningMessages');
};
return TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);
};

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '
		';
return $output87;
};

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output77 .= '

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments92 = array();
$arguments92['each'] = $currentVariableContainer->getOrNull('modules');
$arguments92['as'] = 'mainModule';
$arguments92['key'] = '';
$arguments92['reverse'] = false;
$arguments92['iteration'] = NULL;
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output94 = '';

$output94 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments95 = array();
// Rendering Boolean node
$arguments95['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainModule'), 'subModules', $renderingContext));
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output97 = '';

$output97 .= '
				<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments98 = array();
$arguments98['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainModule'), 'label', $renderingContext);
$arguments98['keepQuotes'] = false;
$arguments98['encoding'] = NULL;
$arguments98['doubleEncode'] = true;
$renderChildrenClosure99 = function() {return NULL;};
$value100 = ($arguments98['value'] !== NULL ? $arguments98['value'] : $renderChildrenClosure99());

$output97 .= (!is_string($value100) ? $value100 : htmlspecialchars($value100, ($arguments98['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments98['encoding'] !== NULL ? $arguments98['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments98['doubleEncode']));

$output97 .= '</h2>
				<div class="container-fuid">
					<div class="row">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments101 = array();
$arguments101['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainModule'), 'subModules', $renderingContext);
$arguments101['as'] = 'subModule';
$arguments101['iteration'] = 'subModuleIterator';
$arguments101['key'] = '';
$arguments101['reverse'] = false;
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output103 = '';

$output103 .= '
							<div class="col-xs-12 col-sm-6">
								<div class="submodule media clearfix">
									<a
										href="#"
										onclick="top.goToModule(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments104 = array();
$arguments104['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainModule'), 'name', $renderingContext);
$arguments104['keepQuotes'] = false;
$arguments104['encoding'] = NULL;
$arguments104['doubleEncode'] = true;
$renderChildrenClosure105 = function() {return NULL;};
$value106 = ($arguments104['value'] !== NULL ? $arguments104['value'] : $renderChildrenClosure105());

$output103 .= (!is_string($value106) ? $value106 : htmlspecialchars($value106, ($arguments104['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments104['encoding'] !== NULL ? $arguments104['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments104['doubleEncode']));

$output103 .= '_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments107 = array();
$arguments107['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subModule'), 'name', $renderingContext);
$arguments107['keepQuotes'] = false;
$arguments107['encoding'] = NULL;
$arguments107['doubleEncode'] = true;
$renderChildrenClosure108 = function() {return NULL;};
$value109 = ($arguments107['value'] !== NULL ? $arguments107['value'] : $renderChildrenClosure108());

$output103 .= (!is_string($value109) ? $value109 : htmlspecialchars($value109, ($arguments107['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments107['encoding'] !== NULL ? $arguments107['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments107['doubleEncode']));

$output103 .= '\'); return false;"
										title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments110 = array();
$arguments110['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subModule'), 'shortDescription', $renderingContext);
$arguments110['keepQuotes'] = false;
$arguments110['encoding'] = NULL;
$arguments110['doubleEncode'] = true;
$renderChildrenClosure111 = function() {return NULL;};
$value112 = ($arguments110['value'] !== NULL ? $arguments110['value'] : $renderChildrenClosure111());

$output103 .= (!is_string($value112) ? $value112 : htmlspecialchars($value112, ($arguments110['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments110['encoding'] !== NULL ? $arguments110['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments110['doubleEncode']));

$output103 .= '"
										class="pull-left"
									>
										<span class="typo3-app-icon">
											<span>
												<span>
													<img src="../';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments113 = array();
$arguments113['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subModule'), 'icon', $renderingContext);
$arguments113['keepQuotes'] = false;
$arguments113['encoding'] = NULL;
$arguments113['doubleEncode'] = true;
$renderChildrenClosure114 = function() {return NULL;};
$value115 = ($arguments113['value'] !== NULL ? $arguments113['value'] : $renderChildrenClosure114());

$output103 .= (!is_string($value115) ? $value115 : htmlspecialchars($value115, ($arguments113['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments113['encoding'] !== NULL ? $arguments113['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments113['doubleEncode']));

$output103 .= '" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments116 = array();
$arguments116['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subModule'), 'label', $renderingContext);
$arguments116['keepQuotes'] = false;
$arguments116['encoding'] = NULL;
$arguments116['doubleEncode'] = true;
$renderChildrenClosure117 = function() {return NULL;};
$value118 = ($arguments116['value'] !== NULL ? $arguments116['value'] : $renderChildrenClosure117());

$output103 .= (!is_string($value118) ? $value118 : htmlspecialchars($value118, ($arguments116['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments116['encoding'] !== NULL ? $arguments116['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments116['doubleEncode']));

$output103 .= '" class="media-object" />
												</span>
											</span>
										</span>
									</a>

									<div class="media-body">
										<strong>
											<a
												href="#"
												onclick="top.goToModule(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments119 = array();
$arguments119['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('mainModule'), 'name', $renderingContext);
$arguments119['keepQuotes'] = false;
$arguments119['encoding'] = NULL;
$arguments119['doubleEncode'] = true;
$renderChildrenClosure120 = function() {return NULL;};
$value121 = ($arguments119['value'] !== NULL ? $arguments119['value'] : $renderChildrenClosure120());

$output103 .= (!is_string($value121) ? $value121 : htmlspecialchars($value121, ($arguments119['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments119['encoding'] !== NULL ? $arguments119['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments119['doubleEncode']));

$output103 .= '_';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments122 = array();
$arguments122['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subModule'), 'name', $renderingContext);
$arguments122['keepQuotes'] = false;
$arguments122['encoding'] = NULL;
$arguments122['doubleEncode'] = true;
$renderChildrenClosure123 = function() {return NULL;};
$value124 = ($arguments122['value'] !== NULL ? $arguments122['value'] : $renderChildrenClosure123());

$output103 .= (!is_string($value124) ? $value124 : htmlspecialchars($value124, ($arguments122['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments122['encoding'] !== NULL ? $arguments122['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments122['doubleEncode']));

$output103 .= '\'); return false;"
												title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments125 = array();
$arguments125['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subModule'), 'shortDescription', $renderingContext);
$arguments125['keepQuotes'] = false;
$arguments125['encoding'] = NULL;
$arguments125['doubleEncode'] = true;
$renderChildrenClosure126 = function() {return NULL;};
$value127 = ($arguments125['value'] !== NULL ? $arguments125['value'] : $renderChildrenClosure126());

$output103 .= (!is_string($value127) ? $value127 : htmlspecialchars($value127, ($arguments125['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments125['encoding'] !== NULL ? $arguments125['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments125['doubleEncode']));

$output103 .= '"
												>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments128 = array();
$arguments128['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subModule'), 'label', $renderingContext);
$arguments128['keepQuotes'] = false;
$arguments128['encoding'] = NULL;
$arguments128['doubleEncode'] = true;
$renderChildrenClosure129 = function() {return NULL;};
$value130 = ($arguments128['value'] !== NULL ? $arguments128['value'] : $renderChildrenClosure129());

$output103 .= (!is_string($value130) ? $value130 : htmlspecialchars($value130, ($arguments128['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments128['encoding'] !== NULL ? $arguments128['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments128['doubleEncode']));

$output103 .= '</a>
										</strong><br>

										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments131 = array();
// Rendering Boolean node
$arguments131['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subModule'), 'shortDescription', $renderingContext));
$arguments131['then'] = NULL;
$arguments131['else'] = NULL;
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output133 = '';

$output133 .= '
											<small class="text-muted">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments134 = array();
$arguments134['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subModule'), 'shortDescription', $renderingContext);
$arguments134['keepQuotes'] = false;
$arguments134['encoding'] = NULL;
$arguments134['doubleEncode'] = true;
$renderChildrenClosure135 = function() {return NULL;};
$value136 = ($arguments134['value'] !== NULL ? $arguments134['value'] : $renderChildrenClosure135());

$output133 .= (!is_string($value136) ? $value136 : htmlspecialchars($value136, ($arguments134['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments134['encoding'] !== NULL ? $arguments134['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments134['doubleEncode']));

$output133 .= '</small><br>
										';
return $output133;
};

$output103 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output103 .= '

										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments137 = array();
$arguments137['value'] = NULL;
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subModule'), 'longDescription', $renderingContext);
};

$output103 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output103 .= '
									</div>
								</div>
							</div>

							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments139 = array();
// Rendering Boolean node
$arguments139['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subModuleIterator'), 'isEven', $renderingContext));
$arguments139['then'] = NULL;
$arguments139['else'] = NULL;
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output141 = '';

$output141 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments142 = array();
// Rendering Boolean node
$arguments142['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subModuleIterator'), 'isLast', $renderingContext), 0);
$arguments142['then'] = NULL;
$arguments142['else'] = NULL;
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
									</div><div class="row">
								';
};

$output141 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output141 .= '
							';
return $output141;
};

$output103 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output103 .= '
						';
return $output103;
};

$output97 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output97 .= '
					</div>
				</div>
			';
return $output97;
};

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
		';
return $output94;
};

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output77 .= '

		<p class="end-text text-info">
			<em>
				(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments144 = array();
$arguments144['key'] = 'LLL:EXT:lang/locallang_alt_intro.xlf:endText';
$arguments144['id'] = NULL;
$arguments144['default'] = NULL;
$arguments144['htmlEscape'] = NULL;
$arguments144['arguments'] = NULL;
$arguments144['extensionName'] = NULL;
$renderChildrenClosure145 = function() {return NULL;};

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output77 .= ')
			</em>
		</p>

		<p>
			<small>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments146 = array();
$arguments146['value'] = NULL;
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('copyRightNotice');
};

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output77 .= '
			</small>
		</p>

	</div>
';
return $output77;
};

$output71 .= '';

$output71 .= '
';


return $output71;
}


}
#1474035301    43798     