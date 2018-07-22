<?php

class List_action_index_a61bab1cc67b67a93ee9d7df1a596fc4b50715fe extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'main';
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
  'em' => 
  array (
    0 => 'TYPO3\\CMS\\Extensionmanager\\ViewHelpers',
  ),
));
}

/**
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['key'] = 'installedExtensions';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h1>
';

return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output3 = '';

$output3 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['section'] = NULL;
$arguments4['partial'] = NULL;
$arguments4['delegate'] = NULL;
$arguments4['renderable'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['optional'] = false;
$arguments4['default'] = NULL;
$arguments4['contentAs'] = NULL;
$arguments4['partial'] = 'List/UploadForm';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '

	<form class="form-inline">
		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['name'] = NULL;
$arguments6['value'] = NULL;
$arguments6['property'] = NULL;
$arguments6['autofocus'] = NULL;
$arguments6['disabled'] = NULL;
$arguments6['maxlength'] = NULL;
$arguments6['readonly'] = NULL;
$arguments6['size'] = NULL;
$arguments6['placeholder'] = NULL;
$arguments6['pattern'] = NULL;
$arguments6['errorClass'] = 'f3-form-error';
$arguments6['class'] = NULL;
$arguments6['dir'] = NULL;
$arguments6['id'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$arguments6['required'] = false;
$arguments6['type'] = 'text';
$arguments6['name'] = 'Tx_Extensionmanager_extensionkey';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['key'] = NULL;
$arguments8['id'] = NULL;
$arguments8['default'] = NULL;
$arguments8['htmlEscape'] = NULL;
$arguments8['arguments'] = NULL;
$arguments8['extensionName'] = NULL;
$arguments8['key'] = 'extensionList.search';
$arguments6['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);
$arguments6['id'] = 'Tx_Extensionmanager_extensionkey';
$array10 = array (
);$arguments6['value'] = $renderingContext->getVariableProvider()->getByPath('search', $array10);
$arguments6['class'] = 'form-control';

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
		</div>
	</form>
	<br>
	<div class="table-fit">
		<table id="typo3-extension-list" class="table table-striped table-hover typo3-extension-list">
		<thead>
			<tr>
				<th title="';
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
$arguments11['key'] = 'extensionList.header.title.update';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output3 .= '">';
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
$arguments13['key'] = 'extensionList.header.update';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output3 .= '</th>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['key'] = NULL;
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['htmlEscape'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['key'] = 'extensionList.header.title.activate';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output3 .= '">';
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
$arguments17['key'] = 'extensionList.header.activate';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['htmlEscape'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['key'] = 'extensionList.header.extensionName';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output3 .= '</th>
				<th>';
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
$arguments21['key'] = 'extensionList.header.extensionKey';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['key'] = NULL;
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['htmlEscape'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['key'] = 'extensionList.header.extensionVersion';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['key'] = NULL;
$arguments25['id'] = NULL;
$arguments25['default'] = NULL;
$arguments25['htmlEscape'] = NULL;
$arguments25['arguments'] = NULL;
$arguments25['extensionName'] = NULL;
$arguments25['key'] = 'extensionList.header.extensionState';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['key'] = NULL;
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['htmlEscape'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$arguments27['key'] = 'extensionList.header.extensionType';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['key'] = NULL;
$arguments29['id'] = NULL;
$arguments29['default'] = NULL;
$arguments29['htmlEscape'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['key'] = 'extensionList.header.extensionActions';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output3 .= '</th>
			</tr>
		</thead>
		<tbody>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
						<tr id="';
$array68 = array (
);
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array68)]);

$output67 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['then'] = NULL;
$arguments69['else'] = NULL;
$arguments69['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array71 = array();
$array72 = array (
);$array71['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array72)]);
$array71['1'] = ' == -1';

$expression73 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments69['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression73(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)
					),
					$renderingContext
				);
$arguments69['then'] = 'insecure';

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['then'] = NULL;
$arguments74['else'] = NULL;
$arguments74['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array76 = array();
$array77 = array (
);$array76['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array77)]);
$array76['1'] = ' == -2';

$expression78 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -2);};
$arguments74['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression78(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array76)
					),
					$renderingContext
				);
$arguments74['then'] = 'outdated';

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output67 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$arguments79['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.installed', $array82)]);

$expression83 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments79['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression83(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array81)
					),
					$renderingContext
				);
$arguments79['then'] = '';
$arguments79['else'] = 'inactive';

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output67 .= '">
					';
return $output67;
};
$arguments65 = array();

$output64 .= '';

$output64 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
						<tr id="';
$array87 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array87)]);

$output86 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$arguments88['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.installed', $array91)]);

$expression92 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments88['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression92(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)
					),
					$renderingContext
				);
$arguments88['then'] = '';
$arguments88['else'] = 'inactive';

$output86 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output86 .= '">
					';
return $output86;
};
$arguments84 = array();
$arguments84['if'] = NULL;

$output64 .= '';

$output64 .= '
				';
return $output64;
};
$arguments35 = array();
$arguments35['then'] = NULL;
$arguments35['else'] = NULL;
$arguments35['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array61 = array();
$array62 = array (
);$array61['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject', $array62);

$expression63 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments35['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression63(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array61)
					),
					$renderingContext
				);
$arguments35['__thenClosure'] = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
						<tr id="';
$array38 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array38)]);

$output37 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$arguments39['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array42)]);
$array41['1'] = ' == -1';

$expression43 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments39['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);
$arguments39['then'] = 'insecure';

$output37 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['then'] = NULL;
$arguments44['else'] = NULL;
$arguments44['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array47)]);
$array46['1'] = ' == -2';

$expression48 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -2);};
$arguments44['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression48(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
$arguments44['then'] = 'outdated';

$output37 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output37 .= ' ';
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
);$array51['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.installed', $array52)]);

$expression53 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments49['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression53(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);
$arguments49['then'] = '';
$arguments49['else'] = 'inactive';

$output37 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output37 .= '">
					';
return $output37;
};
$arguments35['__elseClosures'][] = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
						<tr id="';
$array55 = array (
);
$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array55)]);

$output54 .= '" class="';
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
);$array58['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.installed', $array59)]);

$expression60 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments56['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression60(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array58)
					),
					$renderingContext
				);
$arguments56['then'] = '';
$arguments56['else'] = 'inactive';

$output54 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output54 .= '">
					';
return $output54;
};

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output124 = '';

$output124 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['key'] = NULL;
$arguments128['id'] = NULL;
$arguments128['default'] = NULL;
$arguments128['htmlEscape'] = NULL;
$arguments128['arguments'] = NULL;
$arguments128['extensionName'] = NULL;
$arguments128['key'] = 'extensionList.updateDisabled';

$output127 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext)]);

$output127 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments130 = array();
$arguments130['identifier'] = NULL;
$arguments130['size'] = 'small';
$arguments130['overlay'] = NULL;
$arguments130['state'] = 'default';
$arguments130['alternativeMarkupIdentifier'] = NULL;
$arguments130['identifier'] = 'actions-system-extension-update';

$output127 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output127 .= '
								</span>
							';
return $output127;
};
$arguments125 = array();

$output124 .= '';

$output124 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output146 = '';

$output146 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments147 = array();
$arguments147['identifier'] = NULL;
$arguments147['size'] = 'small';
$arguments147['overlay'] = NULL;
$arguments147['state'] = 'default';
$arguments147['alternativeMarkupIdentifier'] = NULL;
$arguments147['identifier'] = 'actions-system-extension-update';

$output146 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output146 .= '
									';
return $output146;
};
$arguments135 = array();
$arguments135['action'] = NULL;
$arguments135['arguments'] = array (
);
$arguments135['controller'] = NULL;
$arguments135['extensionName'] = NULL;
$arguments135['pluginName'] = NULL;
$arguments135['pageUid'] = NULL;
$arguments135['pageType'] = 0;
$arguments135['noCache'] = false;
$arguments135['noCacheHash'] = false;
$arguments135['section'] = '';
$arguments135['format'] = '';
$arguments135['linkAccessRestrictedPages'] = false;
$arguments135['additionalParams'] = array (
);
$arguments135['absolute'] = false;
$arguments135['addQueryString'] = false;
$arguments135['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments135['addQueryStringMethod'] = NULL;
$arguments135['additionalAttributes'] = NULL;
$arguments135['data'] = NULL;
$arguments135['class'] = NULL;
$arguments135['dir'] = NULL;
$arguments135['id'] = NULL;
$arguments135['lang'] = NULL;
$arguments135['style'] = NULL;
$arguments135['title'] = NULL;
$arguments135['accesskey'] = NULL;
$arguments135['tabindex'] = NULL;
$arguments135['onclick'] = NULL;
$arguments135['name'] = NULL;
$arguments135['rel'] = NULL;
$arguments135['rev'] = NULL;
$arguments135['target'] = NULL;
$arguments135['action'] = 'updateCommentForUpdatableVersions';
$arguments135['class'] = 'btn btn-default';
// Rendering Array
$array137 = array();
$array137['data-action'] = 'update-extension';
$arguments135['additionalAttributes'] = $array137;
$arguments135['format'] = 'json';
$arguments135['controller'] = 'Download';
// Rendering Array
$array138 = array();
$array139 = array (
);$array138['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array139);
$array140 = array (
);$array138['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array140);
$array141 = array (
);$array138['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array141);
$arguments135['arguments'] = $array138;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['key'] = NULL;
$arguments142['id'] = NULL;
$arguments142['default'] = NULL;
$arguments142['htmlEscape'] = NULL;
$arguments142['arguments'] = NULL;
$arguments142['extensionName'] = NULL;
$arguments142['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array144 = array();
$array145 = array (
);$array144['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array145);
$arguments142['arguments'] = $array144;
$arguments135['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output134 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output134 .= '
							';
return $output134;
};
$arguments132 = array();
$arguments132['if'] = NULL;

$output124 .= '';

$output124 .= '
						';
return $output124;
};
$arguments99 = array();
$arguments99['then'] = NULL;
$arguments99['else'] = NULL;
$arguments99['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array121 = array();
$array122 = array (
);$array121['0'] = $renderingContext->getVariableProvider()->getByPath('extension.state', $array122);
$array121['1'] = ' == \'excludeFromUpdates\'';

$expression123 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'excludeFromUpdates');};
$arguments99['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression123(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array121)
					),
					$renderingContext
				);
$arguments99['__thenClosure'] = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['key'] = NULL;
$arguments102['id'] = NULL;
$arguments102['default'] = NULL;
$arguments102['htmlEscape'] = NULL;
$arguments102['arguments'] = NULL;
$arguments102['extensionName'] = NULL;
$arguments102['key'] = 'extensionList.updateDisabled';

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext)]);

$output101 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['identifier'] = NULL;
$arguments104['size'] = 'small';
$arguments104['overlay'] = NULL;
$arguments104['state'] = 'default';
$arguments104['alternativeMarkupIdentifier'] = NULL;
$arguments104['identifier'] = 'actions-system-extension-update';

$output101 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output101 .= '
								</span>
							';
return $output101;
};
$arguments99['__elseClosures'][] = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['identifier'] = NULL;
$arguments119['size'] = 'small';
$arguments119['overlay'] = NULL;
$arguments119['state'] = 'default';
$arguments119['alternativeMarkupIdentifier'] = NULL;
$arguments119['identifier'] = 'actions-system-extension-update';

$output118 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output118 .= '
									';
return $output118;
};
$arguments107 = array();
$arguments107['action'] = NULL;
$arguments107['arguments'] = array (
);
$arguments107['controller'] = NULL;
$arguments107['extensionName'] = NULL;
$arguments107['pluginName'] = NULL;
$arguments107['pageUid'] = NULL;
$arguments107['pageType'] = 0;
$arguments107['noCache'] = false;
$arguments107['noCacheHash'] = false;
$arguments107['section'] = '';
$arguments107['format'] = '';
$arguments107['linkAccessRestrictedPages'] = false;
$arguments107['additionalParams'] = array (
);
$arguments107['absolute'] = false;
$arguments107['addQueryString'] = false;
$arguments107['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments107['addQueryStringMethod'] = NULL;
$arguments107['additionalAttributes'] = NULL;
$arguments107['data'] = NULL;
$arguments107['class'] = NULL;
$arguments107['dir'] = NULL;
$arguments107['id'] = NULL;
$arguments107['lang'] = NULL;
$arguments107['style'] = NULL;
$arguments107['title'] = NULL;
$arguments107['accesskey'] = NULL;
$arguments107['tabindex'] = NULL;
$arguments107['onclick'] = NULL;
$arguments107['name'] = NULL;
$arguments107['rel'] = NULL;
$arguments107['rev'] = NULL;
$arguments107['target'] = NULL;
$arguments107['action'] = 'updateCommentForUpdatableVersions';
$arguments107['class'] = 'btn btn-default';
// Rendering Array
$array109 = array();
$array109['data-action'] = 'update-extension';
$arguments107['additionalAttributes'] = $array109;
$arguments107['format'] = 'json';
$arguments107['controller'] = 'Download';
// Rendering Array
$array110 = array();
$array111 = array (
);$array110['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array111);
$array112 = array (
);$array110['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array112);
$array113 = array (
);$array110['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array113);
$arguments107['arguments'] = $array110;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['key'] = NULL;
$arguments114['id'] = NULL;
$arguments114['default'] = NULL;
$arguments114['htmlEscape'] = NULL;
$arguments114['arguments'] = NULL;
$arguments114['extensionName'] = NULL;
$arguments114['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array116 = array();
$array117 = array (
);$array116['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array117);
$arguments114['arguments'] = $array116;
$arguments107['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output106 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
							';
return $output106;
};

$output98 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output98 .= '
					';
return $output98;
};
$arguments93 = array();
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$arguments93['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateAvailable', $array96);

$expression97 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments93['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression97(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);
$arguments93['__thenClosure'] = $renderChildrenClosure94;

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output34 .= '
				</td>
				<td data-order="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments149 = array();
$arguments149['then'] = NULL;
$arguments149['else'] = NULL;
$arguments149['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array151 = array();
$array152 = array (
);$array151['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array152);

$expression153 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments149['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression153(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array151)
					),
					$renderingContext
				);
$arguments149['then'] = 'active';
$arguments149['else'] = 'inactive';

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output34 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments154 = array();
$arguments154['additionalAttributes'] = NULL;
$arguments154['data'] = NULL;
$arguments154['class'] = NULL;
$arguments154['dir'] = NULL;
$arguments154['id'] = NULL;
$arguments154['lang'] = NULL;
$arguments154['style'] = NULL;
$arguments154['title'] = NULL;
$arguments154['accesskey'] = NULL;
$arguments154['tabindex'] = NULL;
$arguments154['onclick'] = NULL;
$arguments154['name'] = NULL;
$arguments154['rel'] = NULL;
$arguments154['rev'] = NULL;
$arguments154['target'] = NULL;
$arguments154['extension'] = NULL;
$array156 = array (
);$arguments154['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array156);

$output34 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output34 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
$output162 = '';

$output162 .= '
						<img class="ext-icon" src="../';
$array163 = array (
);
$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.siteRelPath', $array163)]);
$array164 = array (
);
$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.ext_icon', $array164)]);

$output162 .= '" alt="';
$array165 = array (
);
$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array165)]);

$output162 .= '" />
					';
return $output162;
};
$arguments157 = array();
$arguments157['then'] = NULL;
$arguments157['else'] = NULL;
$arguments157['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array159 = array();
$array160 = array (
);$array159['0'] = $renderingContext->getVariableProvider()->getByPath('extension.ext_icon', $array160);

$expression161 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments157['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression161(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array159)
					),
					$renderingContext
				);
$arguments157['__thenClosure'] = $renderChildrenClosure158;

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output34 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
$array173 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array173)]);
};
$arguments166 = array();
$arguments166['additionalAttributes'] = NULL;
$arguments166['data'] = NULL;
$arguments166['class'] = NULL;
$arguments166['dir'] = NULL;
$arguments166['id'] = NULL;
$arguments166['lang'] = NULL;
$arguments166['style'] = NULL;
$arguments166['title'] = NULL;
$arguments166['accesskey'] = NULL;
$arguments166['tabindex'] = NULL;
$arguments166['onclick'] = NULL;
$arguments166['name'] = NULL;
$arguments166['rel'] = NULL;
$arguments166['rev'] = NULL;
$arguments166['target'] = NULL;
$arguments166['extension'] = NULL;
$arguments166['forceConfiguration'] = true;
$arguments166['showDescription'] = false;
$array168 = array (
);$arguments166['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array168);
// Rendering Boolean node
// Rendering Array
$array169 = array();
$array169['0'] = 0;

$expression170 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments166['forceConfiguration'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression170(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array169)
					),
					$renderingContext
				);
// Rendering Boolean node
// Rendering Array
$array171 = array();
$array171['0'] = 1;

$expression172 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments166['showDescription'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression172(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array171)
					),
					$renderingContext
				);

$output34 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output34 .= '
				</td>
				<td>
					';
$array174 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array174)]);

$output34 .= '
				</td>
				<td>
					';
$array175 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.version', $array175)]);

$output34 .= '
				</td>
				<td>
					<span class="label label-';
$array176 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.state', $array176)]);

$output34 .= '">';
$array177 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.state', $array177)]);

$output34 .= '</span>
				</td>
				<td>
					';
$array178 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.type', $array178)]);

$output34 .= '
				</td>
				<td>
					<div class="btn-group">
						';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$output182 = '';

$output182 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$output188 = '';

$output188 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['identifier'] = NULL;
$arguments189['size'] = 'small';
$arguments189['overlay'] = NULL;
$arguments189['state'] = 'default';
$arguments189['alternativeMarkupIdentifier'] = NULL;
$arguments189['identifier'] = 'actions-system-extension-configure';

$output188 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output188 .= '
							';
return $output188;
};
$arguments183 = array();
$arguments183['additionalAttributes'] = NULL;
$arguments183['data'] = NULL;
$arguments183['class'] = NULL;
$arguments183['dir'] = NULL;
$arguments183['id'] = NULL;
$arguments183['lang'] = NULL;
$arguments183['style'] = NULL;
$arguments183['title'] = NULL;
$arguments183['accesskey'] = NULL;
$arguments183['tabindex'] = NULL;
$arguments183['onclick'] = NULL;
$arguments183['name'] = NULL;
$arguments183['rel'] = NULL;
$arguments183['rev'] = NULL;
$arguments183['target'] = NULL;
$arguments183['extension'] = NULL;
$arguments183['forceConfiguration'] = true;
$arguments183['showDescription'] = false;
$arguments183['class'] = 'btn btn-default';
$array185 = array (
);$arguments183['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array185);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['key'] = NULL;
$arguments186['id'] = NULL;
$arguments186['default'] = NULL;
$arguments186['htmlEscape'] = NULL;
$arguments186['arguments'] = NULL;
$arguments186['extensionName'] = NULL;
$arguments186['key'] = 'extensionList.configure';
$arguments183['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output182 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output182 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['additionalAttributes'] = NULL;
$arguments191['data'] = NULL;
$arguments191['class'] = NULL;
$arguments191['dir'] = NULL;
$arguments191['id'] = NULL;
$arguments191['lang'] = NULL;
$arguments191['style'] = NULL;
$arguments191['title'] = NULL;
$arguments191['accesskey'] = NULL;
$arguments191['tabindex'] = NULL;
$arguments191['onclick'] = NULL;
$arguments191['name'] = NULL;
$arguments191['rel'] = NULL;
$arguments191['rev'] = NULL;
$arguments191['target'] = NULL;
$arguments191['extensionKey'] = NULL;
$arguments191['class'] = 'btn btn-default';
$array193 = array (
);$arguments191['extensionKey'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array193);

$output182 .= TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output182 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments194 = array();
$arguments194['additionalAttributes'] = NULL;
$arguments194['data'] = NULL;
$arguments194['class'] = NULL;
$arguments194['dir'] = NULL;
$arguments194['id'] = NULL;
$arguments194['lang'] = NULL;
$arguments194['style'] = NULL;
$arguments194['title'] = NULL;
$arguments194['accesskey'] = NULL;
$arguments194['tabindex'] = NULL;
$arguments194['onclick'] = NULL;
$arguments194['name'] = NULL;
$arguments194['rel'] = NULL;
$arguments194['rev'] = NULL;
$arguments194['target'] = NULL;
$arguments194['extension'] = NULL;
$arguments194['class'] = 'btn btn-default';
$array196 = array (
);$arguments194['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array196);

$output182 .= TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output182 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
$output203 = '';

$output203 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments204 = array();
$arguments204['identifier'] = NULL;
$arguments204['size'] = 'small';
$arguments204['overlay'] = NULL;
$arguments204['state'] = 'default';
$arguments204['alternativeMarkupIdentifier'] = NULL;
$arguments204['identifier'] = 'actions-system-extension-download';

$output203 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output203 .= '
							';
return $output203;
};
$arguments197 = array();
$arguments197['action'] = NULL;
$arguments197['arguments'] = array (
);
$arguments197['controller'] = NULL;
$arguments197['extensionName'] = NULL;
$arguments197['pluginName'] = NULL;
$arguments197['pageUid'] = NULL;
$arguments197['pageType'] = 0;
$arguments197['noCache'] = false;
$arguments197['noCacheHash'] = false;
$arguments197['section'] = '';
$arguments197['format'] = '';
$arguments197['linkAccessRestrictedPages'] = false;
$arguments197['additionalParams'] = array (
);
$arguments197['absolute'] = false;
$arguments197['addQueryString'] = false;
$arguments197['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments197['addQueryStringMethod'] = NULL;
$arguments197['additionalAttributes'] = NULL;
$arguments197['data'] = NULL;
$arguments197['class'] = NULL;
$arguments197['dir'] = NULL;
$arguments197['id'] = NULL;
$arguments197['lang'] = NULL;
$arguments197['style'] = NULL;
$arguments197['title'] = NULL;
$arguments197['accesskey'] = NULL;
$arguments197['tabindex'] = NULL;
$arguments197['onclick'] = NULL;
$arguments197['name'] = NULL;
$arguments197['rel'] = NULL;
$arguments197['rev'] = NULL;
$arguments197['target'] = NULL;
$arguments197['action'] = 'downloadExtensionZip';
$arguments197['controller'] = 'Action';
// Rendering Array
$array199 = array();
$array200 = array (
);$array199['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array200);
$arguments197['arguments'] = $array199;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments201 = array();
$arguments201['key'] = NULL;
$arguments201['id'] = NULL;
$arguments201['default'] = NULL;
$arguments201['htmlEscape'] = NULL;
$arguments201['arguments'] = NULL;
$arguments201['extensionName'] = NULL;
$arguments201['key'] = 'extensionList.downloadzip';
$arguments197['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);
$arguments197['class'] = 'btn btn-default';

$output182 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output182 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments206 = array();
$arguments206['additionalAttributes'] = NULL;
$arguments206['data'] = NULL;
$arguments206['class'] = NULL;
$arguments206['dir'] = NULL;
$arguments206['id'] = NULL;
$arguments206['lang'] = NULL;
$arguments206['style'] = NULL;
$arguments206['title'] = NULL;
$arguments206['accesskey'] = NULL;
$arguments206['tabindex'] = NULL;
$arguments206['onclick'] = NULL;
$arguments206['name'] = NULL;
$arguments206['rel'] = NULL;
$arguments206['rev'] = NULL;
$arguments206['target'] = NULL;
$arguments206['extension'] = NULL;
$arguments206['class'] = 'btn btn-default';
$array208 = array (
);$arguments206['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array208);

$output182 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output182 .= '
						';
return $output182;
};
$arguments179 = array();
$arguments179['additionalAttributes'] = NULL;
$arguments179['data'] = NULL;
$arguments179['extension'] = NULL;
$array181 = array (
);$arguments179['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array181);

$output34 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output34 .= '
					</div>
				</td>
				</tr>
			';
return $output34;
};
$arguments31 = array();
$arguments31['each'] = NULL;
$arguments31['as'] = NULL;
$arguments31['key'] = NULL;
$arguments31['reverse'] = false;
$arguments31['iteration'] = NULL;
$array33 = array (
);$arguments31['each'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array33);
$arguments31['as'] = 'extension';
$arguments31['key'] = 'extensionKey';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output3 .= '
		</tbody>
	</table>
	</div>
';

return $output3;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output209 = '';

$output209 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments210 = array();
$arguments210['name'] = NULL;
$arguments210['name'] = 'main';

$output209 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output209 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
$output214 = '';

$output214 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['key'] = NULL;
$arguments215['id'] = NULL;
$arguments215['default'] = NULL;
$arguments215['htmlEscape'] = NULL;
$arguments215['arguments'] = NULL;
$arguments215['extensionName'] = NULL;
$arguments215['key'] = 'installedExtensions';

$output214 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext)]);

$output214 .= '</h1>
';
return $output214;
};
$arguments212 = array();
$arguments212['name'] = NULL;
$arguments212['name'] = 'headline';

$output209 .= NULL;

$output209 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$output219 = '';

$output219 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments220 = array();
$arguments220['section'] = NULL;
$arguments220['partial'] = NULL;
$arguments220['delegate'] = NULL;
$arguments220['renderable'] = NULL;
$arguments220['arguments'] = array (
);
$arguments220['optional'] = false;
$arguments220['default'] = NULL;
$arguments220['contentAs'] = NULL;
$arguments220['partial'] = 'List/UploadForm';

$output219 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output219 .= '

	<form class="form-inline">
		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments222 = array();
$arguments222['additionalAttributes'] = NULL;
$arguments222['data'] = NULL;
$arguments222['name'] = NULL;
$arguments222['value'] = NULL;
$arguments222['property'] = NULL;
$arguments222['autofocus'] = NULL;
$arguments222['disabled'] = NULL;
$arguments222['maxlength'] = NULL;
$arguments222['readonly'] = NULL;
$arguments222['size'] = NULL;
$arguments222['placeholder'] = NULL;
$arguments222['pattern'] = NULL;
$arguments222['errorClass'] = 'f3-form-error';
$arguments222['class'] = NULL;
$arguments222['dir'] = NULL;
$arguments222['id'] = NULL;
$arguments222['lang'] = NULL;
$arguments222['style'] = NULL;
$arguments222['title'] = NULL;
$arguments222['accesskey'] = NULL;
$arguments222['tabindex'] = NULL;
$arguments222['onclick'] = NULL;
$arguments222['required'] = false;
$arguments222['type'] = 'text';
$arguments222['name'] = 'Tx_Extensionmanager_extensionkey';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments224 = array();
$arguments224['key'] = NULL;
$arguments224['id'] = NULL;
$arguments224['default'] = NULL;
$arguments224['htmlEscape'] = NULL;
$arguments224['arguments'] = NULL;
$arguments224['extensionName'] = NULL;
$arguments224['key'] = 'extensionList.search';
$arguments222['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);
$arguments222['id'] = 'Tx_Extensionmanager_extensionkey';
$array226 = array (
);$arguments222['value'] = $renderingContext->getVariableProvider()->getByPath('search', $array226);
$arguments222['class'] = 'form-control';

$output219 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

$output219 .= '
		</div>
	</form>
	<br>
	<div class="table-fit">
		<table id="typo3-extension-list" class="table table-striped table-hover typo3-extension-list">
		<thead>
			<tr>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['key'] = NULL;
$arguments227['id'] = NULL;
$arguments227['default'] = NULL;
$arguments227['htmlEscape'] = NULL;
$arguments227['arguments'] = NULL;
$arguments227['extensionName'] = NULL;
$arguments227['key'] = 'extensionList.header.title.update';

$output219 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext)]);

$output219 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['key'] = NULL;
$arguments229['id'] = NULL;
$arguments229['default'] = NULL;
$arguments229['htmlEscape'] = NULL;
$arguments229['arguments'] = NULL;
$arguments229['extensionName'] = NULL;
$arguments229['key'] = 'extensionList.header.update';

$output219 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext)]);

$output219 .= '</th>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['key'] = NULL;
$arguments231['id'] = NULL;
$arguments231['default'] = NULL;
$arguments231['htmlEscape'] = NULL;
$arguments231['arguments'] = NULL;
$arguments231['extensionName'] = NULL;
$arguments231['key'] = 'extensionList.header.title.activate';

$output219 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext)]);

$output219 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['key'] = NULL;
$arguments233['id'] = NULL;
$arguments233['default'] = NULL;
$arguments233['htmlEscape'] = NULL;
$arguments233['arguments'] = NULL;
$arguments233['extensionName'] = NULL;
$arguments233['key'] = 'extensionList.header.activate';

$output219 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext)]);

$output219 .= '</th>
				<th>';
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
$arguments235['key'] = 'extensionList.header.extensionName';

$output219 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext)]);

$output219 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments237 = array();
$arguments237['key'] = NULL;
$arguments237['id'] = NULL;
$arguments237['default'] = NULL;
$arguments237['htmlEscape'] = NULL;
$arguments237['arguments'] = NULL;
$arguments237['extensionName'] = NULL;
$arguments237['key'] = 'extensionList.header.extensionKey';

$output219 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext)]);

$output219 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments239 = array();
$arguments239['key'] = NULL;
$arguments239['id'] = NULL;
$arguments239['default'] = NULL;
$arguments239['htmlEscape'] = NULL;
$arguments239['arguments'] = NULL;
$arguments239['extensionName'] = NULL;
$arguments239['key'] = 'extensionList.header.extensionVersion';

$output219 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext)]);

$output219 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['key'] = NULL;
$arguments241['id'] = NULL;
$arguments241['default'] = NULL;
$arguments241['htmlEscape'] = NULL;
$arguments241['arguments'] = NULL;
$arguments241['extensionName'] = NULL;
$arguments241['key'] = 'extensionList.header.extensionState';

$output219 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext)]);

$output219 .= '</th>
				<th>';
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
$arguments243['key'] = 'extensionList.header.extensionType';

$output219 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext)]);

$output219 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments245 = array();
$arguments245['key'] = NULL;
$arguments245['id'] = NULL;
$arguments245['default'] = NULL;
$arguments245['htmlEscape'] = NULL;
$arguments245['arguments'] = NULL;
$arguments245['extensionName'] = NULL;
$arguments245['key'] = 'extensionList.header.extensionActions';

$output219 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext)]);

$output219 .= '</th>
			</tr>
		</thead>
		<tbody>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
$output250 = '';

$output250 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
$output283 = '';

$output283 .= '
						<tr id="';
$array284 = array (
);
$output283 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array284)]);

$output283 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments285 = array();
$arguments285['then'] = NULL;
$arguments285['else'] = NULL;
$arguments285['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array287 = array();
$array288 = array (
);$array287['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array288)]);
$array287['1'] = ' == -1';

$expression289 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments285['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression289(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array287)
					),
					$renderingContext
				);
$arguments285['then'] = 'insecure';

$output283 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments290 = array();
$arguments290['then'] = NULL;
$arguments290['else'] = NULL;
$arguments290['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array292 = array();
$array293 = array (
);$array292['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array293)]);
$array292['1'] = ' == -2';

$expression294 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -2);};
$arguments290['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression294(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array292)
					),
					$renderingContext
				);
$arguments290['then'] = 'outdated';

$output283 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments290, $renderChildrenClosure291, $renderingContext);

$output283 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments295 = array();
$arguments295['then'] = NULL;
$arguments295['else'] = NULL;
$arguments295['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array297 = array();
$array298 = array (
);$array297['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.installed', $array298)]);

$expression299 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments295['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression299(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array297)
					),
					$renderingContext
				);
$arguments295['then'] = '';
$arguments295['else'] = 'inactive';

$output283 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext);

$output283 .= '">
					';
return $output283;
};
$arguments281 = array();

$output280 .= '';

$output280 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
$output302 = '';

$output302 .= '
						<tr id="';
$array303 = array (
);
$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array303)]);

$output302 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments304 = array();
$arguments304['then'] = NULL;
$arguments304['else'] = NULL;
$arguments304['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array306 = array();
$array307 = array (
);$array306['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.installed', $array307)]);

$expression308 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments304['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression308(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array306)
					),
					$renderingContext
				);
$arguments304['then'] = '';
$arguments304['else'] = 'inactive';

$output302 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext);

$output302 .= '">
					';
return $output302;
};
$arguments300 = array();
$arguments300['if'] = NULL;

$output280 .= '';

$output280 .= '
				';
return $output280;
};
$arguments251 = array();
$arguments251['then'] = NULL;
$arguments251['else'] = NULL;
$arguments251['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array277 = array();
$array278 = array (
);$array277['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject', $array278);

$expression279 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments251['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression279(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array277)
					),
					$renderingContext
				);
$arguments251['__thenClosure'] = function() use ($renderingContext, $self) {
$output253 = '';

$output253 .= '
						<tr id="';
$array254 = array (
);
$output253 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array254)]);

$output253 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments255 = array();
$arguments255['then'] = NULL;
$arguments255['else'] = NULL;
$arguments255['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array257 = array();
$array258 = array (
);$array257['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array258)]);
$array257['1'] = ' == -1';

$expression259 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments255['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression259(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array257)
					),
					$renderingContext
				);
$arguments255['then'] = 'insecure';

$output253 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments260 = array();
$arguments260['then'] = NULL;
$arguments260['else'] = NULL;
$arguments260['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array262 = array();
$array263 = array (
);$array262['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array263)]);
$array262['1'] = ' == -2';

$expression264 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -2);};
$arguments260['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression264(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array262)
					),
					$renderingContext
				);
$arguments260['then'] = 'outdated';

$output253 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output253 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments265 = array();
$arguments265['then'] = NULL;
$arguments265['else'] = NULL;
$arguments265['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array267 = array();
$array268 = array (
);$array267['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.installed', $array268)]);

$expression269 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments265['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression269(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array267)
					),
					$renderingContext
				);
$arguments265['then'] = '';
$arguments265['else'] = 'inactive';

$output253 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext);

$output253 .= '">
					';
return $output253;
};
$arguments251['__elseClosures'][] = function() use ($renderingContext, $self) {
$output270 = '';

$output270 .= '
						<tr id="';
$array271 = array (
);
$output270 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array271)]);

$output270 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments272 = array();
$arguments272['then'] = NULL;
$arguments272['else'] = NULL;
$arguments272['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array274 = array();
$array275 = array (
);$array274['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.installed', $array275)]);

$expression276 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments272['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression276(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array274)
					),
					$renderingContext
				);
$arguments272['then'] = '';
$arguments272['else'] = 'inactive';

$output270 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);

$output270 .= '">
					';
return $output270;
};

$output250 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);

$output250 .= '
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
$output314 = '';

$output314 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
$output340 = '';

$output340 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
$output343 = '';

$output343 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments344 = array();
$arguments344['key'] = NULL;
$arguments344['id'] = NULL;
$arguments344['default'] = NULL;
$arguments344['htmlEscape'] = NULL;
$arguments344['arguments'] = NULL;
$arguments344['extensionName'] = NULL;
$arguments344['key'] = 'extensionList.updateDisabled';

$output343 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext)]);

$output343 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments346 = array();
$arguments346['identifier'] = NULL;
$arguments346['size'] = 'small';
$arguments346['overlay'] = NULL;
$arguments346['state'] = 'default';
$arguments346['alternativeMarkupIdentifier'] = NULL;
$arguments346['identifier'] = 'actions-system-extension-update';

$output343 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext);

$output343 .= '
								</span>
							';
return $output343;
};
$arguments341 = array();

$output340 .= '';

$output340 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure349 = function() use ($renderingContext, $self) {
$output350 = '';

$output350 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
$output362 = '';

$output362 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure364 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments363 = array();
$arguments363['identifier'] = NULL;
$arguments363['size'] = 'small';
$arguments363['overlay'] = NULL;
$arguments363['state'] = 'default';
$arguments363['alternativeMarkupIdentifier'] = NULL;
$arguments363['identifier'] = 'actions-system-extension-update';

$output362 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments363, $renderChildrenClosure364, $renderingContext);

$output362 .= '
									';
return $output362;
};
$arguments351 = array();
$arguments351['action'] = NULL;
$arguments351['arguments'] = array (
);
$arguments351['controller'] = NULL;
$arguments351['extensionName'] = NULL;
$arguments351['pluginName'] = NULL;
$arguments351['pageUid'] = NULL;
$arguments351['pageType'] = 0;
$arguments351['noCache'] = false;
$arguments351['noCacheHash'] = false;
$arguments351['section'] = '';
$arguments351['format'] = '';
$arguments351['linkAccessRestrictedPages'] = false;
$arguments351['additionalParams'] = array (
);
$arguments351['absolute'] = false;
$arguments351['addQueryString'] = false;
$arguments351['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments351['addQueryStringMethod'] = NULL;
$arguments351['additionalAttributes'] = NULL;
$arguments351['data'] = NULL;
$arguments351['class'] = NULL;
$arguments351['dir'] = NULL;
$arguments351['id'] = NULL;
$arguments351['lang'] = NULL;
$arguments351['style'] = NULL;
$arguments351['title'] = NULL;
$arguments351['accesskey'] = NULL;
$arguments351['tabindex'] = NULL;
$arguments351['onclick'] = NULL;
$arguments351['name'] = NULL;
$arguments351['rel'] = NULL;
$arguments351['rev'] = NULL;
$arguments351['target'] = NULL;
$arguments351['action'] = 'updateCommentForUpdatableVersions';
$arguments351['class'] = 'btn btn-default';
// Rendering Array
$array353 = array();
$array353['data-action'] = 'update-extension';
$arguments351['additionalAttributes'] = $array353;
$arguments351['format'] = 'json';
$arguments351['controller'] = 'Download';
// Rendering Array
$array354 = array();
$array355 = array (
);$array354['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array355);
$array356 = array (
);$array354['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array356);
$array357 = array (
);$array354['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array357);
$arguments351['arguments'] = $array354;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments358 = array();
$arguments358['key'] = NULL;
$arguments358['id'] = NULL;
$arguments358['default'] = NULL;
$arguments358['htmlEscape'] = NULL;
$arguments358['arguments'] = NULL;
$arguments358['extensionName'] = NULL;
$arguments358['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array360 = array();
$array361 = array (
);$array360['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array361);
$arguments358['arguments'] = $array360;
$arguments351['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments358, $renderChildrenClosure359, $renderingContext);

$output350 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext);

$output350 .= '
							';
return $output350;
};
$arguments348 = array();
$arguments348['if'] = NULL;

$output340 .= '';

$output340 .= '
						';
return $output340;
};
$arguments315 = array();
$arguments315['then'] = NULL;
$arguments315['else'] = NULL;
$arguments315['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array337 = array();
$array338 = array (
);$array337['0'] = $renderingContext->getVariableProvider()->getByPath('extension.state', $array338);
$array337['1'] = ' == \'excludeFromUpdates\'';

$expression339 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'excludeFromUpdates');};
$arguments315['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression339(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array337)
					),
					$renderingContext
				);
$arguments315['__thenClosure'] = function() use ($renderingContext, $self) {
$output317 = '';

$output317 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments318 = array();
$arguments318['key'] = NULL;
$arguments318['id'] = NULL;
$arguments318['default'] = NULL;
$arguments318['htmlEscape'] = NULL;
$arguments318['arguments'] = NULL;
$arguments318['extensionName'] = NULL;
$arguments318['key'] = 'extensionList.updateDisabled';

$output317 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext)]);

$output317 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments320 = array();
$arguments320['identifier'] = NULL;
$arguments320['size'] = 'small';
$arguments320['overlay'] = NULL;
$arguments320['state'] = 'default';
$arguments320['alternativeMarkupIdentifier'] = NULL;
$arguments320['identifier'] = 'actions-system-extension-update';

$output317 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext);

$output317 .= '
								</span>
							';
return $output317;
};
$arguments315['__elseClosures'][] = function() use ($renderingContext, $self) {
$output322 = '';

$output322 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
$output334 = '';

$output334 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments335 = array();
$arguments335['identifier'] = NULL;
$arguments335['size'] = 'small';
$arguments335['overlay'] = NULL;
$arguments335['state'] = 'default';
$arguments335['alternativeMarkupIdentifier'] = NULL;
$arguments335['identifier'] = 'actions-system-extension-update';

$output334 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output334 .= '
									';
return $output334;
};
$arguments323 = array();
$arguments323['action'] = NULL;
$arguments323['arguments'] = array (
);
$arguments323['controller'] = NULL;
$arguments323['extensionName'] = NULL;
$arguments323['pluginName'] = NULL;
$arguments323['pageUid'] = NULL;
$arguments323['pageType'] = 0;
$arguments323['noCache'] = false;
$arguments323['noCacheHash'] = false;
$arguments323['section'] = '';
$arguments323['format'] = '';
$arguments323['linkAccessRestrictedPages'] = false;
$arguments323['additionalParams'] = array (
);
$arguments323['absolute'] = false;
$arguments323['addQueryString'] = false;
$arguments323['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments323['addQueryStringMethod'] = NULL;
$arguments323['additionalAttributes'] = NULL;
$arguments323['data'] = NULL;
$arguments323['class'] = NULL;
$arguments323['dir'] = NULL;
$arguments323['id'] = NULL;
$arguments323['lang'] = NULL;
$arguments323['style'] = NULL;
$arguments323['title'] = NULL;
$arguments323['accesskey'] = NULL;
$arguments323['tabindex'] = NULL;
$arguments323['onclick'] = NULL;
$arguments323['name'] = NULL;
$arguments323['rel'] = NULL;
$arguments323['rev'] = NULL;
$arguments323['target'] = NULL;
$arguments323['action'] = 'updateCommentForUpdatableVersions';
$arguments323['class'] = 'btn btn-default';
// Rendering Array
$array325 = array();
$array325['data-action'] = 'update-extension';
$arguments323['additionalAttributes'] = $array325;
$arguments323['format'] = 'json';
$arguments323['controller'] = 'Download';
// Rendering Array
$array326 = array();
$array327 = array (
);$array326['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array327);
$array328 = array (
);$array326['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array328);
$array329 = array (
);$array326['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array329);
$arguments323['arguments'] = $array326;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments330 = array();
$arguments330['key'] = NULL;
$arguments330['id'] = NULL;
$arguments330['default'] = NULL;
$arguments330['htmlEscape'] = NULL;
$arguments330['arguments'] = NULL;
$arguments330['extensionName'] = NULL;
$arguments330['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array332 = array();
$array333 = array (
);$array332['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array333);
$arguments330['arguments'] = $array332;
$arguments323['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments330, $renderChildrenClosure331, $renderingContext);

$output322 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output322 .= '
							';
return $output322;
};

$output314 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);

$output314 .= '
					';
return $output314;
};
$arguments309 = array();
$arguments309['then'] = NULL;
$arguments309['else'] = NULL;
$arguments309['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array311 = array();
$array312 = array (
);$array311['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateAvailable', $array312);

$expression313 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments309['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression313(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array311)
					),
					$renderingContext
				);
$arguments309['__thenClosure'] = $renderChildrenClosure310;

$output250 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);

$output250 .= '
				</td>
				<td data-order="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments365 = array();
$arguments365['then'] = NULL;
$arguments365['else'] = NULL;
$arguments365['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array367 = array();
$array368 = array (
);$array367['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array368);

$expression369 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments365['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression369(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array367)
					),
					$renderingContext
				);
$arguments365['then'] = 'active';
$arguments365['else'] = 'inactive';

$output250 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext);

$output250 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$renderChildrenClosure371 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments370 = array();
$arguments370['additionalAttributes'] = NULL;
$arguments370['data'] = NULL;
$arguments370['class'] = NULL;
$arguments370['dir'] = NULL;
$arguments370['id'] = NULL;
$arguments370['lang'] = NULL;
$arguments370['style'] = NULL;
$arguments370['title'] = NULL;
$arguments370['accesskey'] = NULL;
$arguments370['tabindex'] = NULL;
$arguments370['onclick'] = NULL;
$arguments370['name'] = NULL;
$arguments370['rel'] = NULL;
$arguments370['rev'] = NULL;
$arguments370['target'] = NULL;
$arguments370['extension'] = NULL;
$array372 = array (
);$arguments370['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array372);

$output250 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper::renderStatic($arguments370, $renderChildrenClosure371, $renderingContext);

$output250 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
$output378 = '';

$output378 .= '
						<img class="ext-icon" src="../';
$array379 = array (
);
$output378 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.siteRelPath', $array379)]);
$array380 = array (
);
$output378 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.ext_icon', $array380)]);

$output378 .= '" alt="';
$array381 = array (
);
$output378 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array381)]);

$output378 .= '" />
					';
return $output378;
};
$arguments373 = array();
$arguments373['then'] = NULL;
$arguments373['else'] = NULL;
$arguments373['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array375 = array();
$array376 = array (
);$array375['0'] = $renderingContext->getVariableProvider()->getByPath('extension.ext_icon', $array376);

$expression377 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments373['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression377(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array375)
					),
					$renderingContext
				);
$arguments373['__thenClosure'] = $renderChildrenClosure374;

$output250 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext);

$output250 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
$array389 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array389)]);
};
$arguments382 = array();
$arguments382['additionalAttributes'] = NULL;
$arguments382['data'] = NULL;
$arguments382['class'] = NULL;
$arguments382['dir'] = NULL;
$arguments382['id'] = NULL;
$arguments382['lang'] = NULL;
$arguments382['style'] = NULL;
$arguments382['title'] = NULL;
$arguments382['accesskey'] = NULL;
$arguments382['tabindex'] = NULL;
$arguments382['onclick'] = NULL;
$arguments382['name'] = NULL;
$arguments382['rel'] = NULL;
$arguments382['rev'] = NULL;
$arguments382['target'] = NULL;
$arguments382['extension'] = NULL;
$arguments382['forceConfiguration'] = true;
$arguments382['showDescription'] = false;
$array384 = array (
);$arguments382['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array384);
// Rendering Boolean node
// Rendering Array
$array385 = array();
$array385['0'] = 0;

$expression386 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments382['forceConfiguration'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression386(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array385)
					),
					$renderingContext
				);
// Rendering Boolean node
// Rendering Array
$array387 = array();
$array387['0'] = 1;

$expression388 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments382['showDescription'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression388(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array387)
					),
					$renderingContext
				);

$output250 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output250 .= '
				</td>
				<td>
					';
$array390 = array (
);
$output250 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array390)]);

$output250 .= '
				</td>
				<td>
					';
$array391 = array (
);
$output250 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.version', $array391)]);

$output250 .= '
				</td>
				<td>
					<span class="label label-';
$array392 = array (
);
$output250 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.state', $array392)]);

$output250 .= '">';
$array393 = array (
);
$output250 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.state', $array393)]);

$output250 .= '</span>
				</td>
				<td>
					';
$array394 = array (
);
$output250 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.type', $array394)]);

$output250 .= '
				</td>
				<td>
					<div class="btn-group">
						';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
$renderChildrenClosure396 = function() use ($renderingContext, $self) {
$output398 = '';

$output398 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
$output404 = '';

$output404 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure406 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments405 = array();
$arguments405['identifier'] = NULL;
$arguments405['size'] = 'small';
$arguments405['overlay'] = NULL;
$arguments405['state'] = 'default';
$arguments405['alternativeMarkupIdentifier'] = NULL;
$arguments405['identifier'] = 'actions-system-extension-configure';

$output404 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments405, $renderChildrenClosure406, $renderingContext);

$output404 .= '
							';
return $output404;
};
$arguments399 = array();
$arguments399['additionalAttributes'] = NULL;
$arguments399['data'] = NULL;
$arguments399['class'] = NULL;
$arguments399['dir'] = NULL;
$arguments399['id'] = NULL;
$arguments399['lang'] = NULL;
$arguments399['style'] = NULL;
$arguments399['title'] = NULL;
$arguments399['accesskey'] = NULL;
$arguments399['tabindex'] = NULL;
$arguments399['onclick'] = NULL;
$arguments399['name'] = NULL;
$arguments399['rel'] = NULL;
$arguments399['rev'] = NULL;
$arguments399['target'] = NULL;
$arguments399['extension'] = NULL;
$arguments399['forceConfiguration'] = true;
$arguments399['showDescription'] = false;
$arguments399['class'] = 'btn btn-default';
$array401 = array (
);$arguments399['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array401);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments402 = array();
$arguments402['key'] = NULL;
$arguments402['id'] = NULL;
$arguments402['default'] = NULL;
$arguments402['htmlEscape'] = NULL;
$arguments402['arguments'] = NULL;
$arguments402['extensionName'] = NULL;
$arguments402['key'] = 'extensionList.configure';
$arguments399['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext);

$output398 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper::renderStatic($arguments399, $renderChildrenClosure400, $renderingContext);

$output398 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
$renderChildrenClosure408 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments407 = array();
$arguments407['additionalAttributes'] = NULL;
$arguments407['data'] = NULL;
$arguments407['class'] = NULL;
$arguments407['dir'] = NULL;
$arguments407['id'] = NULL;
$arguments407['lang'] = NULL;
$arguments407['style'] = NULL;
$arguments407['title'] = NULL;
$arguments407['accesskey'] = NULL;
$arguments407['tabindex'] = NULL;
$arguments407['onclick'] = NULL;
$arguments407['name'] = NULL;
$arguments407['rel'] = NULL;
$arguments407['rev'] = NULL;
$arguments407['target'] = NULL;
$arguments407['extensionKey'] = NULL;
$arguments407['class'] = 'btn btn-default';
$array409 = array (
);$arguments407['extensionKey'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array409);

$output398 .= TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper::renderStatic($arguments407, $renderChildrenClosure408, $renderingContext);

$output398 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments410 = array();
$arguments410['additionalAttributes'] = NULL;
$arguments410['data'] = NULL;
$arguments410['class'] = NULL;
$arguments410['dir'] = NULL;
$arguments410['id'] = NULL;
$arguments410['lang'] = NULL;
$arguments410['style'] = NULL;
$arguments410['title'] = NULL;
$arguments410['accesskey'] = NULL;
$arguments410['tabindex'] = NULL;
$arguments410['onclick'] = NULL;
$arguments410['name'] = NULL;
$arguments410['rel'] = NULL;
$arguments410['rev'] = NULL;
$arguments410['target'] = NULL;
$arguments410['extension'] = NULL;
$arguments410['class'] = 'btn btn-default';
$array412 = array (
);$arguments410['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array412);

$output398 .= TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper::renderStatic($arguments410, $renderChildrenClosure411, $renderingContext);

$output398 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
$output419 = '';

$output419 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure421 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments420 = array();
$arguments420['identifier'] = NULL;
$arguments420['size'] = 'small';
$arguments420['overlay'] = NULL;
$arguments420['state'] = 'default';
$arguments420['alternativeMarkupIdentifier'] = NULL;
$arguments420['identifier'] = 'actions-system-extension-download';

$output419 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext);

$output419 .= '
							';
return $output419;
};
$arguments413 = array();
$arguments413['action'] = NULL;
$arguments413['arguments'] = array (
);
$arguments413['controller'] = NULL;
$arguments413['extensionName'] = NULL;
$arguments413['pluginName'] = NULL;
$arguments413['pageUid'] = NULL;
$arguments413['pageType'] = 0;
$arguments413['noCache'] = false;
$arguments413['noCacheHash'] = false;
$arguments413['section'] = '';
$arguments413['format'] = '';
$arguments413['linkAccessRestrictedPages'] = false;
$arguments413['additionalParams'] = array (
);
$arguments413['absolute'] = false;
$arguments413['addQueryString'] = false;
$arguments413['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments413['addQueryStringMethod'] = NULL;
$arguments413['additionalAttributes'] = NULL;
$arguments413['data'] = NULL;
$arguments413['class'] = NULL;
$arguments413['dir'] = NULL;
$arguments413['id'] = NULL;
$arguments413['lang'] = NULL;
$arguments413['style'] = NULL;
$arguments413['title'] = NULL;
$arguments413['accesskey'] = NULL;
$arguments413['tabindex'] = NULL;
$arguments413['onclick'] = NULL;
$arguments413['name'] = NULL;
$arguments413['rel'] = NULL;
$arguments413['rev'] = NULL;
$arguments413['target'] = NULL;
$arguments413['action'] = 'downloadExtensionZip';
$arguments413['controller'] = 'Action';
// Rendering Array
$array415 = array();
$array416 = array (
);$array415['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array416);
$arguments413['arguments'] = $array415;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure418 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments417 = array();
$arguments417['key'] = NULL;
$arguments417['id'] = NULL;
$arguments417['default'] = NULL;
$arguments417['htmlEscape'] = NULL;
$arguments417['arguments'] = NULL;
$arguments417['extensionName'] = NULL;
$arguments417['key'] = 'extensionList.downloadzip';
$arguments413['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments417, $renderChildrenClosure418, $renderingContext);
$arguments413['class'] = 'btn btn-default';

$output398 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments413, $renderChildrenClosure414, $renderingContext);

$output398 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper
$renderChildrenClosure423 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments422 = array();
$arguments422['additionalAttributes'] = NULL;
$arguments422['data'] = NULL;
$arguments422['class'] = NULL;
$arguments422['dir'] = NULL;
$arguments422['id'] = NULL;
$arguments422['lang'] = NULL;
$arguments422['style'] = NULL;
$arguments422['title'] = NULL;
$arguments422['accesskey'] = NULL;
$arguments422['tabindex'] = NULL;
$arguments422['onclick'] = NULL;
$arguments422['name'] = NULL;
$arguments422['rel'] = NULL;
$arguments422['rev'] = NULL;
$arguments422['target'] = NULL;
$arguments422['extension'] = NULL;
$arguments422['class'] = 'btn btn-default';
$array424 = array (
);$arguments422['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array424);

$output398 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper::renderStatic($arguments422, $renderChildrenClosure423, $renderingContext);

$output398 .= '
						';
return $output398;
};
$arguments395 = array();
$arguments395['additionalAttributes'] = NULL;
$arguments395['data'] = NULL;
$arguments395['extension'] = NULL;
$array397 = array (
);$arguments395['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array397);

$output250 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper::renderStatic($arguments395, $renderChildrenClosure396, $renderingContext);

$output250 .= '
					</div>
				</td>
				</tr>
			';
return $output250;
};
$arguments247 = array();
$arguments247['each'] = NULL;
$arguments247['as'] = NULL;
$arguments247['key'] = NULL;
$arguments247['reverse'] = false;
$arguments247['iteration'] = NULL;
$array249 = array (
);$arguments247['each'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array249);
$arguments247['as'] = 'extension';
$arguments247['key'] = 'extensionKey';

$output219 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output219 .= '
		</tbody>
	</table>
	</div>
';
return $output219;
};
$arguments217 = array();
$arguments217['name'] = NULL;
$arguments217['name'] = 'content';

$output209 .= NULL;

$output209 .= '
';

return $output209;
}


}
#