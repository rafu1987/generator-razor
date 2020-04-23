<?php

class Standard_action_index_44a3efb0fdeba7752dedbb095d7fba952a564599 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section ToggleButton
 */
public function section_d478a266235e71d641c30ad3f5e9b906715534ac(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['value'] = NULL;
$arguments1['name'] = NULL;
$arguments1['name'] = 'disabled';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array5 = array();
$array5['0'] = '!';
$array6 = array (
);$array5['1'] = $renderingContext->getVariableProvider()->getByPath('enabled', $array6);

$expression7 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression7(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)
					),
					$renderingContext
				);
$arguments3['then'] = 1;
$arguments3['else'] = 0;
$arguments1['value'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);
$renderChildrenClosure2 = ($arguments1['value'] !== null) ? function() use ($arguments1) { return $arguments1['value']; } : $renderChildrenClosure2;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['value'] = NULL;
$arguments8['name'] = NULL;
$arguments8['name'] = 'disabledAttr';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array12 = array();
$array13 = array (
);$array12['0'] = $renderingContext->getVariableProvider()->getByPath('disabled', $array13);

$expression14 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression14(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);
$arguments10['then'] = 'disabled';
$arguments8['value'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);
$renderChildrenClosure9 = ($arguments8['value'] !== null) ? function() use ($arguments8) { return $arguments8['value']; } : $renderChildrenClosure9;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output0 .= '

    <button ';
$array15 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('disabledAttr', $array15)]);

$output0 .= ' class="topbar-button ';
$array16 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('classes', $array16)]);

$output0 .= '" title="';
$array17 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array17)]);

$output0 .= '">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['section'] = NULL;
$arguments18['partial'] = NULL;
$arguments18['delegate'] = NULL;
$arguments18['renderable'] = NULL;
$arguments18['arguments'] = array (
);
$arguments18['optional'] = false;
$arguments18['default'] = NULL;
$arguments18['contentAs'] = NULL;
$arguments18['debug'] = true;
$arguments18['section'] = 'Icon';
// Rendering Array
$array20 = array();
$array21 = array (
);$array20['identifier'] = $renderingContext->getVariableProvider()->getByPath('icon', $array21);
$array22 = array (
);$array20['disabled'] = $renderingContext->getVariableProvider()->getByPath('disabled', $array22);
$arguments18['arguments'] = $array20;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output0 .= '
    </button>
';

return $output0;
}
/**
 * section Icon
 */
public function section_716f63b96e0c263222949a3b8a00cdb4f46d3183(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output23 = '';

$output23 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['value'] = NULL;
$arguments24['name'] = NULL;
$arguments24['name'] = 'overlay';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('disabled', $array29);

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['then'] = 'overlay-readonly';
$array31 = array (
);$arguments26['else'] = $renderingContext->getVariableProvider()->getByPath('null', $array31);
$arguments24['value'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);
$renderChildrenClosure25 = ($arguments24['value'] !== null) ? function() use ($arguments24) { return $arguments24['value']; } : $renderChildrenClosure25;
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext)]);

$output23 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['identifier'] = NULL;
$arguments32['size'] = 'small';
$arguments32['overlay'] = NULL;
$arguments32['state'] = 'default';
$arguments32['alternativeMarkupIdentifier'] = NULL;
$array34 = array (
);$arguments32['identifier'] = $renderingContext->getVariableProvider()->getByPath('identifier', $array34);
$arguments32['alternativeMarkupIdentifier'] = 'inline';
$array35 = array (
);$arguments32['overlay'] = $renderingContext->getVariableProvider()->getByPath('overlay', $array35);

$output23 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output23 .= '
';

return $output23;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output36 = '';

$output36 .= '<div class="scaffold-topbar t3js-scaffold-topbar" data-topbar-identifier="topbar">
    <div class="topbar">
        <div class="topbar-header t3js-topbar-header">
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
$arguments37['section'] = 'ToggleButton';
// Rendering Array
$array39 = array();
$array39['icon'] = 'actions-menu';
$array40 = array (
);$array39['enabled'] = $renderingContext->getVariableProvider()->getByPath('hasModules', $array40);
$array39['classes'] = 'topbar-button-modulemenu t3js-topbar-button-modulemenu';
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
$arguments41['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:toolbarItems.minMaxModuleMenu';
$array39['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);
$arguments37['arguments'] = $array39;

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['section'] = NULL;
$arguments43['partial'] = NULL;
$arguments43['delegate'] = NULL;
$arguments43['renderable'] = NULL;
$arguments43['arguments'] = array (
);
$arguments43['optional'] = false;
$arguments43['default'] = NULL;
$arguments43['contentAs'] = NULL;
$arguments43['debug'] = true;
$arguments43['section'] = 'ToggleButton';
// Rendering Array
$array45 = array();
$array45['icon'] = 'actions-pagetree';
$array46 = array (
);$array45['enabled'] = $renderingContext->getVariableProvider()->getByPath('modulesHaveNavigationComponent', $array46);
$array45['classes'] = 'topbar-button-navigationcomponent t3js-topbar-button-navigationcomponent';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['key'] = NULL;
$arguments47['id'] = NULL;
$arguments47['default'] = NULL;
$arguments47['arguments'] = NULL;
$arguments47['extensionName'] = NULL;
$arguments47['languageKey'] = NULL;
$arguments47['alternativeLanguageKeys'] = NULL;
$arguments47['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:toolbarItems.collapsePageTree';
$array45['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);
$arguments43['arguments'] = $array45;

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output36 .= '

            <div class="topbar-header-site">
                <a href="./" target="_top" title="';
$array49 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteName', $array49)]);

$output36 .= ' - ';
$array50 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('applicationVersion', $array50)]);

$output36 .= '">
                    <span class="topbar-header-site-logo">
                        <img src="';
$array51 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoUrl', $array51)]);

$output36 .= '" width="';
$array52 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoWidth', $array52)]);

$output36 .= '" height="';
$array53 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoHeight', $array53)]);

$output36 .= '" title="TYPO3 Content Management System" alt="" />
                    </span>
                    <span class="topbar-header-site-title">
                        <span class="topbar-header-site-name">';
$array54 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteName', $array54)]);

$output36 .= '</span>
                        <span class="topbar-header-site-version">';
$array55 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('applicationVersion', $array55)]);

$output36 .= '</span>
                    </span>
                </a>
            </div>
            <button class="topbar-button topbar-button-toolbar t3js-topbar-button-toolbar">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['identifier'] = NULL;
$arguments56['size'] = 'small';
$arguments56['overlay'] = NULL;
$arguments56['state'] = 'default';
$arguments56['alternativeMarkupIdentifier'] = NULL;
$arguments56['identifier'] = 'actions-system-extension-configure';
$arguments56['alternativeMarkupIdentifier'] = 'inline';

$output36 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output36 .= '
            </button>
            <button class="topbar-button topbar-button-search t3js-topbar-button-search">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['identifier'] = NULL;
$arguments58['size'] = 'small';
$arguments58['overlay'] = NULL;
$arguments58['state'] = 'default';
$arguments58['alternativeMarkupIdentifier'] = NULL;
$arguments58['identifier'] = 'actions-search';
$arguments58['alternativeMarkupIdentifier'] = 'inline';

$output36 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output36 .= '
            </button>
        </div>
    </div>
</div>
<div class="scaffold-toolbar t3js-scaffold-toolbar" data-toolbar-identifier="toolbar">
    <div class="toolbar t3js-topbar-toolbar">
        <ul class="toolbar-list" data-typo3-role="typo3-module-menu">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$array62 = array (
);return $renderingContext->getVariableProvider()->getByPath('toolbar', $array62);
};
$arguments60 = array();
$arguments60['value'] = NULL;

$output36 .= isset($arguments60['value']) ? $arguments60['value'] : $renderChildrenClosure61();

$output36 .= '
        </ul>
    </div>
</div>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['value'] = NULL;
$arguments66['name'] = NULL;
$arguments66['name'] = 'disabled';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['then'] = NULL;
$arguments68['else'] = NULL;
$arguments68['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array70 = array();
$array70['0'] = '!';
$array71 = array (
);$array70['1'] = $renderingContext->getVariableProvider()->getByPath('enabled', $array71);

$expression72 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments68['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression72(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array70)
					),
					$renderingContext
				);
$arguments68['then'] = 1;
$arguments68['else'] = 0;
$arguments66['value'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);
$renderChildrenClosure67 = ($arguments66['value'] !== null) ? function() use ($arguments66) { return $arguments66['value']; } : $renderChildrenClosure67;
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext)]);

$output65 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['value'] = NULL;
$arguments73['name'] = NULL;
$arguments73['name'] = 'disabledAttr';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['then'] = NULL;
$arguments75['else'] = NULL;
$arguments75['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array77 = array();
$array78 = array (
);$array77['0'] = $renderingContext->getVariableProvider()->getByPath('disabled', $array78);

$expression79 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments75['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression79(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array77)
					),
					$renderingContext
				);
$arguments75['then'] = 'disabled';
$arguments73['value'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);
$renderChildrenClosure74 = ($arguments73['value'] !== null) ? function() use ($arguments73) { return $arguments73['value']; } : $renderChildrenClosure74;
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext)]);

$output65 .= '

    <button ';
$array80 = array (
);
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('disabledAttr', $array80)]);

$output65 .= ' class="topbar-button ';
$array81 = array (
);
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('classes', $array81)]);

$output65 .= '" title="';
$array82 = array (
);
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array82)]);

$output65 .= '">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['section'] = NULL;
$arguments83['partial'] = NULL;
$arguments83['delegate'] = NULL;
$arguments83['renderable'] = NULL;
$arguments83['arguments'] = array (
);
$arguments83['optional'] = false;
$arguments83['default'] = NULL;
$arguments83['contentAs'] = NULL;
$arguments83['debug'] = true;
$arguments83['section'] = 'Icon';
// Rendering Array
$array85 = array();
$array86 = array (
);$array85['identifier'] = $renderingContext->getVariableProvider()->getByPath('icon', $array86);
$array87 = array (
);$array85['disabled'] = $renderingContext->getVariableProvider()->getByPath('disabled', $array87);
$arguments83['arguments'] = $array85;

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output65 .= '
    </button>
';
return $output65;
};
$arguments63 = array();
$arguments63['name'] = NULL;
$arguments63['name'] = 'ToggleButton';

$output36 .= NULL;

$output36 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['value'] = NULL;
$arguments91['name'] = NULL;
$arguments91['name'] = 'overlay';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$arguments93['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['0'] = $renderingContext->getVariableProvider()->getByPath('disabled', $array96);

$expression97 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments93['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression97(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);
$arguments93['then'] = 'overlay-readonly';
$array98 = array (
);$arguments93['else'] = $renderingContext->getVariableProvider()->getByPath('null', $array98);
$arguments91['value'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);
$renderChildrenClosure92 = ($arguments91['value'] !== null) ? function() use ($arguments91) { return $arguments91['value']; } : $renderChildrenClosure92;
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext)]);

$output90 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['identifier'] = NULL;
$arguments99['size'] = 'small';
$arguments99['overlay'] = NULL;
$arguments99['state'] = 'default';
$arguments99['alternativeMarkupIdentifier'] = NULL;
$array101 = array (
);$arguments99['identifier'] = $renderingContext->getVariableProvider()->getByPath('identifier', $array101);
$arguments99['alternativeMarkupIdentifier'] = 'inline';
$array102 = array (
);$arguments99['overlay'] = $renderingContext->getVariableProvider()->getByPath('overlay', $array102);

$output90 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output90 .= '
';
return $output90;
};
$arguments88 = array();
$arguments88['name'] = NULL;
$arguments88['name'] = 'Icon';

$output36 .= NULL;

$output36 .= '
';

return $output36;
}


}
#