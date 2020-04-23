<?php

class Standard_action_widget_T3GeneralInformationWidget_4dfe47f884bd75e381e65bd6508b7cc288fd99dd extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

    <div class="row">
        <div class="col-sm-8">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
                <p>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['key'] = NULL;
$arguments10['id'] = NULL;
$arguments10['default'] = NULL;
$arguments10['arguments'] = NULL;
$arguments10['extensionName'] = NULL;
$arguments10['languageKey'] = NULL;
$arguments10['alternativeLanguageKeys'] = NULL;
$arguments10['key'] = 'LLL:EXT:about/Resources/Private/Language/Modules/about.xlf:cms_description';
// Rendering Array
$array12 = array();
$array13 = array (
);$array12['0'] = $renderingContext->getVariableProvider()->getByPath('currentVersion', $array13);
$output14 = '';

$output14 .= '&copy; ';
$array15 = array (
);
$output14 .= $renderingContext->getVariableProvider()->getByPath('copyrightYear', $array15);
$array12['1'] = $output14;
$array12['2'] = 'Kasper Sk&aring;rh&oslash;j';
$arguments10['arguments'] = $array12;
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);
};
$arguments8 = array();
$arguments8['value'] = NULL;

$output7 .= isset($arguments8['value']) ? $arguments8['value'] : $renderChildrenClosure9();

$output7 .= '
                </p>
            ';
return $output7;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('currentVersion', $array4);
$array3['1'] = ' && ';
$array5 = array (
);$array3['2'] = $renderingContext->getVariableProvider()->getByPath('copyrightYear', $array5);

$expression6 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
        </div>
        <div class="col-sm-4">
            <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['path'] = NULL;
$arguments16['extensionName'] = NULL;
$arguments16['absolute'] = false;
$arguments16['path'] = 'Images/typo3_orange.svg';
$arguments16['extensionName'] = 'backend';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext)]);

$output0 .= '"
                class="widget-t3information-logo"
                alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['key'] = NULL;
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$arguments18['languageKey'] = NULL;
$arguments18['alternativeLanguageKeys'] = NULL;
$arguments18['key'] = 'LLL:EXT:about/Resources/Private/Language/Modules/about.xlf:typo3_logo';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output0 .= '"/>
        </div>
    </div>

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output20 = '';

$output20 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['name'] = NULL;
$arguments21['name'] = 'Widget/Widget';

$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output20 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '

    <div class="row">
        <div class="col-sm-8">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
                <p>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['key'] = NULL;
$arguments35['id'] = NULL;
$arguments35['default'] = NULL;
$arguments35['arguments'] = NULL;
$arguments35['extensionName'] = NULL;
$arguments35['languageKey'] = NULL;
$arguments35['alternativeLanguageKeys'] = NULL;
$arguments35['key'] = 'LLL:EXT:about/Resources/Private/Language/Modules/about.xlf:cms_description';
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['0'] = $renderingContext->getVariableProvider()->getByPath('currentVersion', $array38);
$output39 = '';

$output39 .= '&copy; ';
$array40 = array (
);
$output39 .= $renderingContext->getVariableProvider()->getByPath('copyrightYear', $array40);
$array37['1'] = $output39;
$array37['2'] = 'Kasper Sk&aring;rh&oslash;j';
$arguments35['arguments'] = $array37;
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);
};
$arguments33 = array();
$arguments33['value'] = NULL;

$output32 .= isset($arguments33['value']) ? $arguments33['value'] : $renderChildrenClosure34();

$output32 .= '
                </p>
            ';
return $output32;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('currentVersion', $array29);
$array28['1'] = ' && ';
$array30 = array (
);$array28['2'] = $renderingContext->getVariableProvider()->getByPath('copyrightYear', $array30);

$expression31 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['__thenClosure'] = $renderChildrenClosure27;

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
        </div>
        <div class="col-sm-4">
            <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['path'] = NULL;
$arguments41['extensionName'] = NULL;
$arguments41['absolute'] = false;
$arguments41['path'] = 'Images/typo3_orange.svg';
$arguments41['extensionName'] = 'backend';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output25 .= '"
                class="widget-t3information-logo"
                alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['key'] = NULL;
$arguments43['id'] = NULL;
$arguments43['default'] = NULL;
$arguments43['arguments'] = NULL;
$arguments43['extensionName'] = NULL;
$arguments43['languageKey'] = NULL;
$arguments43['alternativeLanguageKeys'] = NULL;
$arguments43['key'] = 'LLL:EXT:about/Resources/Private/Language/Modules/about.xlf:typo3_logo';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output25 .= '"/>
        </div>
    </div>

';
return $output25;
};
$arguments23 = array();
$arguments23['name'] = NULL;
$arguments23['name'] = 'main';

$output20 .= NULL;

$output20 .= '

';

return $output20;
}


}
#