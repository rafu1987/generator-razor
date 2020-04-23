<?php

class Standard_action_dashboard_Main_b043116903438efe680419686b6afcef0ab9f6e1 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '
<div class="dashboard-header">

    <div class="dashboard-tabs">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
                ';
$array17 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dashboard.title', $array17)]);

$output16 .= '
            ';
return $output16;
};
$arguments5 = array();
$arguments5['additionalAttributes'] = NULL;
$arguments5['data'] = NULL;
$arguments5['route'] = NULL;
$arguments5['parameters'] = array (
);
$arguments5['referenceType'] = 'absolute';
$arguments5['name'] = NULL;
$arguments5['rel'] = NULL;
$arguments5['rev'] = NULL;
$arguments5['target'] = NULL;
$arguments5['class'] = NULL;
$arguments5['dir'] = NULL;
$arguments5['id'] = NULL;
$arguments5['lang'] = NULL;
$arguments5['style'] = NULL;
$arguments5['title'] = NULL;
$arguments5['accesskey'] = NULL;
$arguments5['tabindex'] = NULL;
$arguments5['onclick'] = NULL;
$arguments5['route'] = 'dashboard';
// Rendering Array
$array7 = array();
$array7['action'] = 'setActiveDashboard';
$array8 = array (
);$array7['currentDashboard'] = $renderingContext->getVariableProvider()->getByPath('dashboardKey', $array8);
$arguments5['parameters'] = $array7;
$output9 = '';

$output9 .= 'dashboard-tab ';
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
);$array12['0'] = $renderingContext->getVariableProvider()->getByPath('dashboardKey', $array13);
$array12['1'] = ' == ';
$array14 = array (
);$array12['2'] = $renderingContext->getVariableProvider()->getByPath('currentDashboard.identifier', $array14);

$expression15 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);
$arguments10['then'] = 'dashboard-tab--active';

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);
$arguments5['class'] = $output9;

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
        ';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$array3 = array (
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('availableDashboards', $array3);
$arguments1['as'] = 'dashboard';
$arguments1['key'] = 'dashboardKey';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
        <a href="';
$array18 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('addDashboardUri', $array18)]);

$output0 .= '" class="js-dashboard-modal dashboard-button dashboard-button-tab-add" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['languageKey'] = NULL;
$arguments19['alternativeLanguageKeys'] = NULL;
$arguments19['key'] = 'dashboard.add';
$arguments19['extensionName'] = 'dashboard';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output0 .= '" data-modal-identifier="add" data-modal-title="';
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
$arguments21['key'] = 'dashboard.add';
$arguments21['extensionName'] = 'dashboard';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output0 .= '" data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['key'] = NULL;
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['languageKey'] = NULL;
$arguments23['alternativeLanguageKeys'] = NULL;
$arguments23['key'] = 'dashboard.add.button.close';
$arguments23['extensionName'] = 'dashboard';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output0 .= '" data-button-ok-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['key'] = NULL;
$arguments25['id'] = NULL;
$arguments25['default'] = NULL;
$arguments25['arguments'] = NULL;
$arguments25['extensionName'] = NULL;
$arguments25['languageKey'] = NULL;
$arguments25['alternativeLanguageKeys'] = NULL;
$arguments25['key'] = 'dashboard.add.button.ok';
$arguments25['extensionName'] = 'dashboard';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output0 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['identifier'] = NULL;
$arguments27['size'] = 'small';
$arguments27['overlay'] = NULL;
$arguments27['state'] = 'default';
$arguments27['alternativeMarkupIdentifier'] = NULL;
$arguments27['identifier'] = 'actions-add';
$arguments27['alternativeMarkupIdentifier'] = 'inline';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output0 .= '<span class="sr-only">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['key'] = NULL;
$arguments29['id'] = NULL;
$arguments29['default'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['languageKey'] = NULL;
$arguments29['alternativeLanguageKeys'] = NULL;
$arguments29['key'] = 'dashboard.add';
$arguments29['extensionName'] = 'dashboard';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output0 .= '</span>
        </a>
    </div>

    <div class="dashboard-configuration">
        <a href="';
$array31 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('configureDashboardUri', $array31)]);

$output0 .= '" class="js-dashboard-modal dashboard-configuration-button" data-modal-identifier="configure" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['key'] = NULL;
$arguments32['id'] = NULL;
$arguments32['default'] = NULL;
$arguments32['arguments'] = NULL;
$arguments32['extensionName'] = NULL;
$arguments32['languageKey'] = NULL;
$arguments32['alternativeLanguageKeys'] = NULL;
$arguments32['key'] = 'dashboard.configure';
$arguments32['extensionName'] = 'dashboard';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext)]);

$output0 .= '" data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['key'] = NULL;
$arguments34['id'] = NULL;
$arguments34['default'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['extensionName'] = NULL;
$arguments34['languageKey'] = NULL;
$arguments34['alternativeLanguageKeys'] = NULL;
$arguments34['key'] = 'dashboard.configure';
$arguments34['extensionName'] = 'dashboard';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output0 .= '" data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['key'] = NULL;
$arguments36['id'] = NULL;
$arguments36['default'] = NULL;
$arguments36['arguments'] = NULL;
$arguments36['extensionName'] = NULL;
$arguments36['languageKey'] = NULL;
$arguments36['alternativeLanguageKeys'] = NULL;
$arguments36['key'] = 'dashboard.configure.button.close';
$arguments36['extensionName'] = 'dashboard';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext)]);

$output0 .= '" data-button-ok-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['key'] = NULL;
$arguments38['id'] = NULL;
$arguments38['default'] = NULL;
$arguments38['arguments'] = NULL;
$arguments38['extensionName'] = NULL;
$arguments38['languageKey'] = NULL;
$arguments38['alternativeLanguageKeys'] = NULL;
$arguments38['key'] = 'dashboard.configure.button.ok';
$arguments38['extensionName'] = 'dashboard';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output0 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['identifier'] = NULL;
$arguments40['size'] = 'small';
$arguments40['overlay'] = NULL;
$arguments40['state'] = 'default';
$arguments40['alternativeMarkupIdentifier'] = NULL;
$arguments40['identifier'] = 'actions-cog';
$arguments40['alternativeMarkupIdentifier'] = 'inline';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output0 .= '<span class="sr-only">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['key'] = NULL;
$arguments42['id'] = NULL;
$arguments42['default'] = NULL;
$arguments42['arguments'] = NULL;
$arguments42['extensionName'] = NULL;
$arguments42['languageKey'] = NULL;
$arguments42['alternativeLanguageKeys'] = NULL;
$arguments42['key'] = 'dashboard.configure';
$arguments42['extensionName'] = 'dashboard';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext)]);

$output0 .= '</span>
        </a>
        <a href="';
$array44 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('deleteDashboardUri', $array44)]);

$output0 .= '" class="js-dashboard-delete dashboard-configuration-button" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['key'] = NULL;
$arguments45['id'] = NULL;
$arguments45['default'] = NULL;
$arguments45['arguments'] = NULL;
$arguments45['extensionName'] = NULL;
$arguments45['languageKey'] = NULL;
$arguments45['alternativeLanguageKeys'] = NULL;
$arguments45['key'] = 'dashboard.delete';
$arguments45['extensionName'] = 'dashboard';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output0 .= '" data-modal-title="';
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
$arguments47['key'] = 'dashboard.delete';
$arguments47['extensionName'] = 'dashboard';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext)]);

$output0 .= '" data-modal-question="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['key'] = NULL;
$arguments49['id'] = NULL;
$arguments49['default'] = NULL;
$arguments49['arguments'] = NULL;
$arguments49['extensionName'] = NULL;
$arguments49['languageKey'] = NULL;
$arguments49['alternativeLanguageKeys'] = NULL;
$arguments49['key'] = 'dashboard.delete.sure';
$arguments49['extensionName'] = 'dashboard';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext)]);

$output0 .= '" data-modal-ok="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['key'] = NULL;
$arguments51['id'] = NULL;
$arguments51['default'] = NULL;
$arguments51['arguments'] = NULL;
$arguments51['extensionName'] = NULL;
$arguments51['languageKey'] = NULL;
$arguments51['alternativeLanguageKeys'] = NULL;
$arguments51['key'] = 'dashboard.delete.ok';
$arguments51['extensionName'] = 'dashboard';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

$output0 .= '" data-modal-cancel="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['key'] = NULL;
$arguments53['id'] = NULL;
$arguments53['default'] = NULL;
$arguments53['arguments'] = NULL;
$arguments53['extensionName'] = NULL;
$arguments53['languageKey'] = NULL;
$arguments53['alternativeLanguageKeys'] = NULL;
$arguments53['key'] = 'dashboard.delete.cancel';
$arguments53['extensionName'] = 'dashboard';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext)]);

$output0 .= '" >
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['identifier'] = NULL;
$arguments55['size'] = 'small';
$arguments55['overlay'] = NULL;
$arguments55['state'] = 'default';
$arguments55['alternativeMarkupIdentifier'] = NULL;
$arguments55['identifier'] = 'actions-delete';
$arguments55['alternativeMarkupIdentifier'] = 'inline';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output0 .= '<span class="sr-only">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['key'] = NULL;
$arguments57['id'] = NULL;
$arguments57['default'] = NULL;
$arguments57['arguments'] = NULL;
$arguments57['extensionName'] = NULL;
$arguments57['languageKey'] = NULL;
$arguments57['alternativeLanguageKeys'] = NULL;
$arguments57['key'] = 'dashboard.delete';
$arguments57['extensionName'] = 'dashboard';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output0 .= '</span>
        </a>
    </div>

</div>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
        <div class="dashboard-grid">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
                <div class="dashboard-item dashboard-item--w-';
$array123 = array (
);
$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('widget.width', $array123)]);

$output122 .= ' dashboard-item--h-';
$array124 = array (
);
$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('widget.height', $array124)]);

$output122 .= ' ';
$array125 = array (
);
$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('widget.additionalCssClasses', $array125)]);

$output122 .= ' dashboard-item--enableSelect" data-widget-hash="';
$array126 = array (
);
$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('widgetHash', $array126)]);

$output122 .= '" data-widget-key="';
$array127 = array (
);
$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('widget.identifier', $array127)]);

$output122 .= '">
                    <div class="dashboard-item-content">
                        <div class="widget widget-identifier-';
$array128 = array (
);
$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('widget.identifier', $array128)]);

$output122 .= '">
                            <div class="widget-waiting">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments129 = array();
$arguments129['identifier'] = NULL;
$arguments129['size'] = 'small';
$arguments129['overlay'] = NULL;
$arguments129['state'] = 'default';
$arguments129['alternativeMarkupIdentifier'] = NULL;
$arguments129['identifier'] = 'spinner-circle';
$arguments129['size'] = 'large';

$output122 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output122 .= '
                            </div>
                            <div class="widget-content hide"></div>
                            <div class="widget-error hide">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments131 = array();
$arguments131['key'] = NULL;
$arguments131['id'] = NULL;
$arguments131['default'] = NULL;
$arguments131['arguments'] = NULL;
$arguments131['extensionName'] = NULL;
$arguments131['languageKey'] = NULL;
$arguments131['alternativeLanguageKeys'] = NULL;
$arguments131['key'] = 'widget.error';
$arguments131['extensionName'] = 'dashboard';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext)]);

$output122 .= '
                            </div>
                            <div class="widget-actions">
                                <div class="widget-action widget-action-move js-dashboard-move-widget">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['identifier'] = NULL;
$arguments133['size'] = 'small';
$arguments133['overlay'] = NULL;
$arguments133['state'] = 'default';
$arguments133['alternativeMarkupIdentifier'] = NULL;
$arguments133['identifier'] = 'actions-move';
$arguments133['alternativeMarkupIdentifier'] = 'inline';

$output122 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output122 .= '
                                </div>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output148 = '';

$output148 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments149 = array();
$arguments149['identifier'] = NULL;
$arguments149['size'] = 'small';
$arguments149['overlay'] = NULL;
$arguments149['state'] = 'default';
$arguments149['alternativeMarkupIdentifier'] = NULL;
$arguments149['identifier'] = 'actions-delete';
$arguments149['alternativeMarkupIdentifier'] = 'inline';

$output148 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output148 .= '
                                ';
return $output148;
};
$arguments135 = array();
$arguments135['additionalAttributes'] = NULL;
$arguments135['data'] = NULL;
$arguments135['route'] = NULL;
$arguments135['parameters'] = array (
);
$arguments135['referenceType'] = 'absolute';
$arguments135['name'] = NULL;
$arguments135['rel'] = NULL;
$arguments135['rev'] = NULL;
$arguments135['target'] = NULL;
$arguments135['class'] = NULL;
$arguments135['dir'] = NULL;
$arguments135['id'] = NULL;
$arguments135['lang'] = NULL;
$arguments135['style'] = NULL;
$arguments135['title'] = NULL;
$arguments135['accesskey'] = NULL;
$arguments135['tabindex'] = NULL;
$arguments135['onclick'] = NULL;
$arguments135['class'] = 'widget-action widget-action-remove js-dashboard-remove-widget';
$arguments135['route'] = 'dashboard';
// Rendering Array
$array137 = array();
$array137['action'] = 'removeWidget';
$array138 = array (
);$array137['widgetHash'] = $renderingContext->getVariableProvider()->getByPath('widgetHash', $array138);
$arguments135['parameters'] = $array137;
// Rendering Array
$array139 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['key'] = NULL;
$arguments140['id'] = NULL;
$arguments140['default'] = NULL;
$arguments140['arguments'] = NULL;
$arguments140['extensionName'] = NULL;
$arguments140['languageKey'] = NULL;
$arguments140['alternativeLanguageKeys'] = NULL;
$arguments140['key'] = 'widget.remove.confirm.title';
$arguments140['extensionName'] = 'dashboard';
$array139['modal-title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['key'] = NULL;
$arguments142['id'] = NULL;
$arguments142['default'] = NULL;
$arguments142['arguments'] = NULL;
$arguments142['extensionName'] = NULL;
$arguments142['languageKey'] = NULL;
$arguments142['alternativeLanguageKeys'] = NULL;
$arguments142['key'] = 'widget.remove.confirm.message';
$arguments142['extensionName'] = 'dashboard';
$array139['modal-question'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments144 = array();
$arguments144['key'] = NULL;
$arguments144['id'] = NULL;
$arguments144['default'] = NULL;
$arguments144['arguments'] = NULL;
$arguments144['extensionName'] = NULL;
$arguments144['languageKey'] = NULL;
$arguments144['alternativeLanguageKeys'] = NULL;
$arguments144['key'] = 'widget.remove.button.ok';
$arguments144['extensionName'] = 'dashboard';
$array139['modal-ok'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['key'] = NULL;
$arguments146['id'] = NULL;
$arguments146['default'] = NULL;
$arguments146['arguments'] = NULL;
$arguments146['extensionName'] = NULL;
$arguments146['languageKey'] = NULL;
$arguments146['alternativeLanguageKeys'] = NULL;
$arguments146['key'] = 'widget.remove.button.close';
$arguments146['extensionName'] = 'dashboard';
$array139['modal-cancel'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);
$arguments135['data'] = $array139;

$output122 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output122 .= '
                            </div>
                        </div>
                    </div>
                </div>
            ';
return $output122;
};
$arguments119 = array();
$arguments119['each'] = NULL;
$arguments119['as'] = NULL;
$arguments119['key'] = NULL;
$arguments119['reverse'] = false;
$arguments119['iteration'] = NULL;
$array121 = array (
);$arguments119['each'] = $renderingContext->getVariableProvider()->getByPath('currentDashboard.widgets', $array121);
$arguments119['as'] = 'widget';
$arguments119['iteration'] = 'widgetIterator';
$arguments119['key'] = 'widgetHash';

$output118 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output118 .= '
        </div>
    ';
return $output118;
};
$arguments116 = array();

$output115 .= '';

$output115 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$output153 = '';

$output153 .= '
        <div class="dashboard-empty">
            <div class="dashboard-empty-content">
                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments154 = array();
$arguments154['key'] = NULL;
$arguments154['id'] = NULL;
$arguments154['default'] = NULL;
$arguments154['arguments'] = NULL;
$arguments154['extensionName'] = NULL;
$arguments154['languageKey'] = NULL;
$arguments154['alternativeLanguageKeys'] = NULL;
$arguments154['key'] = 'dashboard.empty.content.title';
$arguments154['extensionName'] = 'dashboard';

$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext)]);

$output153 .= '</h3>
                <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['key'] = NULL;
$arguments156['id'] = NULL;
$arguments156['default'] = NULL;
$arguments156['arguments'] = NULL;
$arguments156['extensionName'] = NULL;
$arguments156['languageKey'] = NULL;
$arguments156['alternativeLanguageKeys'] = NULL;
$arguments156['key'] = 'dashboard.empty.content.description';
$arguments156['extensionName'] = 'dashboard';

$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext)]);

$output153 .= '</p>
                <a href="';
$array158 = array (
);
$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('addWidgetUri', $array158)]);

$output153 .= '" class="js-dashboard-addWidget dashboard-button" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments159 = array();
$arguments159['key'] = NULL;
$arguments159['id'] = NULL;
$arguments159['default'] = NULL;
$arguments159['arguments'] = NULL;
$arguments159['extensionName'] = NULL;
$arguments159['languageKey'] = NULL;
$arguments159['alternativeLanguageKeys'] = NULL;
$arguments159['key'] = 'widget.add';
$arguments159['extensionName'] = 'dashboard';

$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext)]);

$output153 .= '" data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['key'] = NULL;
$arguments161['id'] = NULL;
$arguments161['default'] = NULL;
$arguments161['arguments'] = NULL;
$arguments161['extensionName'] = NULL;
$arguments161['languageKey'] = NULL;
$arguments161['alternativeLanguageKeys'] = NULL;
$arguments161['key'] = 'widget.add';
$arguments161['extensionName'] = 'dashboard';

$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext)]);

$output153 .= '" data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments163 = array();
$arguments163['key'] = NULL;
$arguments163['id'] = NULL;
$arguments163['default'] = NULL;
$arguments163['arguments'] = NULL;
$arguments163['extensionName'] = NULL;
$arguments163['languageKey'] = NULL;
$arguments163['alternativeLanguageKeys'] = NULL;
$arguments163['key'] = 'widget.add.button.close';
$arguments163['extensionName'] = 'dashboard';

$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext)]);

$output153 .= '" data-button-ok-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments165 = array();
$arguments165['key'] = NULL;
$arguments165['id'] = NULL;
$arguments165['default'] = NULL;
$arguments165['arguments'] = NULL;
$arguments165['extensionName'] = NULL;
$arguments165['languageKey'] = NULL;
$arguments165['alternativeLanguageKeys'] = NULL;
$arguments165['key'] = 'widget.add.button.ok';
$arguments165['extensionName'] = 'dashboard';

$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext)]);

$output153 .= '">
                    <span class="dashboard-button-icon">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['identifier'] = NULL;
$arguments167['size'] = 'small';
$arguments167['overlay'] = NULL;
$arguments167['state'] = 'default';
$arguments167['alternativeMarkupIdentifier'] = NULL;
$arguments167['identifier'] = 'actions-add';
$arguments167['alternativeMarkupIdentifier'] = 'inline';

$output153 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output153 .= '</span>
                    <span class="dashboard-button-text">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments169 = array();
$arguments169['key'] = NULL;
$arguments169['id'] = NULL;
$arguments169['default'] = NULL;
$arguments169['arguments'] = NULL;
$arguments169['extensionName'] = NULL;
$arguments169['languageKey'] = NULL;
$arguments169['alternativeLanguageKeys'] = NULL;
$arguments169['key'] = 'dashboard.empty.content.button';
$arguments169['extensionName'] = 'dashboard';

$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext)]);

$output153 .= '</span>
                </a>
            </div>
        </div>
    ';
return $output153;
};
$arguments151 = array();
$arguments151['if'] = NULL;

$output115 .= '';

$output115 .= '
';
return $output115;
};
$arguments59 = array();
$arguments59['then'] = NULL;
$arguments59['else'] = NULL;
$arguments59['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array112 = array();
$array113 = array (
);$array112['0'] = $renderingContext->getVariableProvider()->getByPath('currentDashboard.widgets', $array113);

$expression114 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments59['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression114(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array112)
					),
					$renderingContext
				);
$arguments59['__thenClosure'] = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
        <div class="dashboard-grid">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
                <div class="dashboard-item dashboard-item--w-';
$array66 = array (
);
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('widget.width', $array66)]);

$output65 .= ' dashboard-item--h-';
$array67 = array (
);
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('widget.height', $array67)]);

$output65 .= ' ';
$array68 = array (
);
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('widget.additionalCssClasses', $array68)]);

$output65 .= ' dashboard-item--enableSelect" data-widget-hash="';
$array69 = array (
);
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('widgetHash', $array69)]);

$output65 .= '" data-widget-key="';
$array70 = array (
);
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('widget.identifier', $array70)]);

$output65 .= '">
                    <div class="dashboard-item-content">
                        <div class="widget widget-identifier-';
$array71 = array (
);
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('widget.identifier', $array71)]);

$output65 .= '">
                            <div class="widget-waiting">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['identifier'] = NULL;
$arguments72['size'] = 'small';
$arguments72['overlay'] = NULL;
$arguments72['state'] = 'default';
$arguments72['alternativeMarkupIdentifier'] = NULL;
$arguments72['identifier'] = 'spinner-circle';
$arguments72['size'] = 'large';

$output65 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output65 .= '
                            </div>
                            <div class="widget-content hide"></div>
                            <div class="widget-error hide">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['key'] = NULL;
$arguments74['id'] = NULL;
$arguments74['default'] = NULL;
$arguments74['arguments'] = NULL;
$arguments74['extensionName'] = NULL;
$arguments74['languageKey'] = NULL;
$arguments74['alternativeLanguageKeys'] = NULL;
$arguments74['key'] = 'widget.error';
$arguments74['extensionName'] = 'dashboard';

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext)]);

$output65 .= '
                            </div>
                            <div class="widget-actions">
                                <div class="widget-action widget-action-move js-dashboard-move-widget">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['identifier'] = NULL;
$arguments76['size'] = 'small';
$arguments76['overlay'] = NULL;
$arguments76['state'] = 'default';
$arguments76['alternativeMarkupIdentifier'] = NULL;
$arguments76['identifier'] = 'actions-move';
$arguments76['alternativeMarkupIdentifier'] = 'inline';

$output65 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output65 .= '
                                </div>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['identifier'] = NULL;
$arguments92['size'] = 'small';
$arguments92['overlay'] = NULL;
$arguments92['state'] = 'default';
$arguments92['alternativeMarkupIdentifier'] = NULL;
$arguments92['identifier'] = 'actions-delete';
$arguments92['alternativeMarkupIdentifier'] = 'inline';

$output91 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output91 .= '
                                ';
return $output91;
};
$arguments78 = array();
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['route'] = NULL;
$arguments78['parameters'] = array (
);
$arguments78['referenceType'] = 'absolute';
$arguments78['name'] = NULL;
$arguments78['rel'] = NULL;
$arguments78['rev'] = NULL;
$arguments78['target'] = NULL;
$arguments78['class'] = NULL;
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['title'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$arguments78['class'] = 'widget-action widget-action-remove js-dashboard-remove-widget';
$arguments78['route'] = 'dashboard';
// Rendering Array
$array80 = array();
$array80['action'] = 'removeWidget';
$array81 = array (
);$array80['widgetHash'] = $renderingContext->getVariableProvider()->getByPath('widgetHash', $array81);
$arguments78['parameters'] = $array80;
// Rendering Array
$array82 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['key'] = NULL;
$arguments83['id'] = NULL;
$arguments83['default'] = NULL;
$arguments83['arguments'] = NULL;
$arguments83['extensionName'] = NULL;
$arguments83['languageKey'] = NULL;
$arguments83['alternativeLanguageKeys'] = NULL;
$arguments83['key'] = 'widget.remove.confirm.title';
$arguments83['extensionName'] = 'dashboard';
$array82['modal-title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);
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
$arguments85['key'] = 'widget.remove.confirm.message';
$arguments85['extensionName'] = 'dashboard';
$array82['modal-question'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['key'] = NULL;
$arguments87['id'] = NULL;
$arguments87['default'] = NULL;
$arguments87['arguments'] = NULL;
$arguments87['extensionName'] = NULL;
$arguments87['languageKey'] = NULL;
$arguments87['alternativeLanguageKeys'] = NULL;
$arguments87['key'] = 'widget.remove.button.ok';
$arguments87['extensionName'] = 'dashboard';
$array82['modal-ok'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['key'] = NULL;
$arguments89['id'] = NULL;
$arguments89['default'] = NULL;
$arguments89['arguments'] = NULL;
$arguments89['extensionName'] = NULL;
$arguments89['languageKey'] = NULL;
$arguments89['alternativeLanguageKeys'] = NULL;
$arguments89['key'] = 'widget.remove.button.close';
$arguments89['extensionName'] = 'dashboard';
$array82['modal-cancel'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);
$arguments78['data'] = $array82;

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output65 .= '
                            </div>
                        </div>
                    </div>
                </div>
            ';
return $output65;
};
$arguments62 = array();
$arguments62['each'] = NULL;
$arguments62['as'] = NULL;
$arguments62['key'] = NULL;
$arguments62['reverse'] = false;
$arguments62['iteration'] = NULL;
$array64 = array (
);$arguments62['each'] = $renderingContext->getVariableProvider()->getByPath('currentDashboard.widgets', $array64);
$arguments62['as'] = 'widget';
$arguments62['iteration'] = 'widgetIterator';
$arguments62['key'] = 'widgetHash';

$output61 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
        </div>
    ';
return $output61;
};
$arguments59['__elseClosures'][] = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
        <div class="dashboard-empty">
            <div class="dashboard-empty-content">
                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['key'] = NULL;
$arguments95['id'] = NULL;
$arguments95['default'] = NULL;
$arguments95['arguments'] = NULL;
$arguments95['extensionName'] = NULL;
$arguments95['languageKey'] = NULL;
$arguments95['alternativeLanguageKeys'] = NULL;
$arguments95['key'] = 'dashboard.empty.content.title';
$arguments95['extensionName'] = 'dashboard';

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext)]);

$output94 .= '</h3>
                <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['key'] = NULL;
$arguments97['id'] = NULL;
$arguments97['default'] = NULL;
$arguments97['arguments'] = NULL;
$arguments97['extensionName'] = NULL;
$arguments97['languageKey'] = NULL;
$arguments97['alternativeLanguageKeys'] = NULL;
$arguments97['key'] = 'dashboard.empty.content.description';
$arguments97['extensionName'] = 'dashboard';

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext)]);

$output94 .= '</p>
                <a href="';
$array99 = array (
);
$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('addWidgetUri', $array99)]);

$output94 .= '" class="js-dashboard-addWidget dashboard-button" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['key'] = NULL;
$arguments100['id'] = NULL;
$arguments100['default'] = NULL;
$arguments100['arguments'] = NULL;
$arguments100['extensionName'] = NULL;
$arguments100['languageKey'] = NULL;
$arguments100['alternativeLanguageKeys'] = NULL;
$arguments100['key'] = 'widget.add';
$arguments100['extensionName'] = 'dashboard';

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext)]);

$output94 .= '" data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['key'] = NULL;
$arguments102['id'] = NULL;
$arguments102['default'] = NULL;
$arguments102['arguments'] = NULL;
$arguments102['extensionName'] = NULL;
$arguments102['languageKey'] = NULL;
$arguments102['alternativeLanguageKeys'] = NULL;
$arguments102['key'] = 'widget.add';
$arguments102['extensionName'] = 'dashboard';

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext)]);

$output94 .= '" data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['key'] = NULL;
$arguments104['id'] = NULL;
$arguments104['default'] = NULL;
$arguments104['arguments'] = NULL;
$arguments104['extensionName'] = NULL;
$arguments104['languageKey'] = NULL;
$arguments104['alternativeLanguageKeys'] = NULL;
$arguments104['key'] = 'widget.add.button.close';
$arguments104['extensionName'] = 'dashboard';

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext)]);

$output94 .= '" data-button-ok-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['key'] = NULL;
$arguments106['id'] = NULL;
$arguments106['default'] = NULL;
$arguments106['arguments'] = NULL;
$arguments106['extensionName'] = NULL;
$arguments106['languageKey'] = NULL;
$arguments106['alternativeLanguageKeys'] = NULL;
$arguments106['key'] = 'widget.add.button.ok';
$arguments106['extensionName'] = 'dashboard';

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext)]);

$output94 .= '">
                    <span class="dashboard-button-icon">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['identifier'] = NULL;
$arguments108['size'] = 'small';
$arguments108['overlay'] = NULL;
$arguments108['state'] = 'default';
$arguments108['alternativeMarkupIdentifier'] = NULL;
$arguments108['identifier'] = 'actions-add';
$arguments108['alternativeMarkupIdentifier'] = 'inline';

$output94 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output94 .= '</span>
                    <span class="dashboard-button-text">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['key'] = NULL;
$arguments110['id'] = NULL;
$arguments110['default'] = NULL;
$arguments110['arguments'] = NULL;
$arguments110['extensionName'] = NULL;
$arguments110['languageKey'] = NULL;
$arguments110['alternativeLanguageKeys'] = NULL;
$arguments110['key'] = 'dashboard.empty.content.button';
$arguments110['extensionName'] = 'dashboard';

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext)]);

$output94 .= '</span>
                </a>
            </div>
        </div>
    ';
return $output94;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output0 .= '

<div class="dashboard-add-item">
    <a href="';
$array171 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('addWidgetUri', $array171)]);

$output0 .= '" class="js-dashboard-addWidget dashboard-button dashboard-button-add" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments172 = array();
$arguments172['key'] = NULL;
$arguments172['id'] = NULL;
$arguments172['default'] = NULL;
$arguments172['arguments'] = NULL;
$arguments172['extensionName'] = NULL;
$arguments172['languageKey'] = NULL;
$arguments172['alternativeLanguageKeys'] = NULL;
$arguments172['key'] = 'widget.add';
$arguments172['extensionName'] = 'dashboard';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext)]);

$output0 .= '" data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments174 = array();
$arguments174['key'] = NULL;
$arguments174['id'] = NULL;
$arguments174['default'] = NULL;
$arguments174['arguments'] = NULL;
$arguments174['extensionName'] = NULL;
$arguments174['languageKey'] = NULL;
$arguments174['alternativeLanguageKeys'] = NULL;
$arguments174['key'] = 'widget.add';
$arguments174['extensionName'] = 'dashboard';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext)]);

$output0 .= '" data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments176 = array();
$arguments176['key'] = NULL;
$arguments176['id'] = NULL;
$arguments176['default'] = NULL;
$arguments176['arguments'] = NULL;
$arguments176['extensionName'] = NULL;
$arguments176['languageKey'] = NULL;
$arguments176['alternativeLanguageKeys'] = NULL;
$arguments176['key'] = 'widget.add.button.close';
$arguments176['extensionName'] = 'dashboard';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext)]);

$output0 .= '" data-button-ok-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments178 = array();
$arguments178['key'] = NULL;
$arguments178['id'] = NULL;
$arguments178['default'] = NULL;
$arguments178['arguments'] = NULL;
$arguments178['extensionName'] = NULL;
$arguments178['languageKey'] = NULL;
$arguments178['alternativeLanguageKeys'] = NULL;
$arguments178['key'] = 'widget.add.button.ok';
$arguments178['extensionName'] = 'dashboard';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext)]);

$output0 .= '">
        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['identifier'] = NULL;
$arguments180['size'] = 'small';
$arguments180['overlay'] = NULL;
$arguments180['state'] = 'default';
$arguments180['alternativeMarkupIdentifier'] = NULL;
$arguments180['identifier'] = 'actions-add';
$arguments180['alternativeMarkupIdentifier'] = 'inline';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output0 .= '<span class="sr-only">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['key'] = NULL;
$arguments182['id'] = NULL;
$arguments182['default'] = NULL;
$arguments182['arguments'] = NULL;
$arguments182['extensionName'] = NULL;
$arguments182['languageKey'] = NULL;
$arguments182['alternativeLanguageKeys'] = NULL;
$arguments182['key'] = 'widget.add';
$arguments182['extensionName'] = 'dashboard';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext)]);

$output0 .= '</span>
    </a>
</div>

<div id="widgetSelector" class="hide">
    <div class="dashboard-modal-tabpanel" role="tabpanel">
        <ul class="nav nav-tabs t3js-tabs" id="widget-selector" role="tablist">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments184 = array();
$arguments184['value'] = NULL;
$arguments184['name'] = NULL;
$arguments184['name'] = 'firstGroupActive';
$arguments184['value'] = 'false';
$renderChildrenClosure185 = ($arguments184['value'] !== null) ? function() use ($arguments184) { return $arguments184['value']; } : $renderChildrenClosure185;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext)]);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$output189 = '';

$output189 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$output195 = '';

$output195 .= '
                    <li class="t3js-tabmenu-item ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments196 = array();
$arguments196['then'] = NULL;
$arguments196['else'] = NULL;
$arguments196['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array198 = array();
$array199 = array (
);$array198['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('firstGroupActive', $array199)]);
$array198['1'] = ' == \'false\'';

$expression200 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'false');};
$arguments196['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression200(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array198)
					),
					$renderingContext
				);
$arguments196['then'] = 'active';

$output195 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output195 .= '">
                        <a id="dashboard-widgetgroup-tab-';
$array201 = array (
);
$output195 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupConfiguration.identifier', $array201)]);

$output195 .= '" data-toggle="tab" href="#dashboard-widgetgroup-';
$array202 = array (
);
$output195 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupConfiguration.identifier', $array202)]);

$output195 .= '" role="tab" aria-controls="dashboard-widgetgroup-';
$array203 = array (
);
$output195 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupConfiguration.identifier', $array203)]);

$output195 .= '" aria-selected="true">';
$array204 = array (
);
$output195 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupConfiguration.title', $array204)]);

$output195 .= '</a>
                    </li>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments205 = array();
$arguments205['value'] = NULL;
$arguments205['name'] = NULL;
$arguments205['name'] = 'firstGroupActive';
$arguments205['value'] = 'true';
$renderChildrenClosure206 = ($arguments205['value'] !== null) ? function() use ($arguments205) { return $arguments205['value']; } : $renderChildrenClosure206;
$output195 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext)]);

$output195 .= '
                ';
return $output195;
};
$arguments190 = array();
$arguments190['then'] = NULL;
$arguments190['else'] = NULL;
$arguments190['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array192 = array();
$array193 = array (
);$array192['0'] = $renderingContext->getVariableProvider()->getByPath('groupConfiguration.widgets', $array193);

$expression194 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments190['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression194(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array192)
					),
					$renderingContext
				);
$arguments190['__thenClosure'] = $renderChildrenClosure191;

$output189 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output189 .= '
            ';
return $output189;
};
$arguments186 = array();
$arguments186['each'] = NULL;
$arguments186['as'] = NULL;
$arguments186['key'] = NULL;
$arguments186['reverse'] = false;
$arguments186['iteration'] = NULL;
$array188 = array (
);$arguments186['each'] = $renderingContext->getVariableProvider()->getByPath('widgetGroups', $array188);
$arguments186['as'] = 'groupConfiguration';
$arguments186['iteration'] = 'iterator';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output0 .= '
        </ul>
        <div class="tab-content">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['value'] = NULL;
$arguments207['name'] = NULL;
$arguments207['name'] = 'firstGroupActive';
$arguments207['value'] = 'false';
$renderChildrenClosure208 = ($arguments207['value'] !== null) ? function() use ($arguments207) { return $arguments207['value']; } : $renderChildrenClosure208;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext)]);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$output212 = '';

$output212 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$output218 = '';

$output218 .= '
                    <div class="tab-pane ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments219 = array();
$arguments219['then'] = NULL;
$arguments219['else'] = NULL;
$arguments219['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array221 = array();
$array222 = array (
);$array221['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('firstGroupActive', $array222)]);
$array221['1'] = ' == \'false\'';

$expression223 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'false');};
$arguments219['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression223(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array221)
					),
					$renderingContext
				);
$arguments219['then'] = 'active';

$output218 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output218 .= '" id="dashboard-widgetgroup-';
$array224 = array (
);
$output218 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupConfiguration.identifier', $array224)]);

$output218 .= '" role="tabpanel" aria-labelledby="dashboard-widgetgroup-';
$array225 = array (
);
$output218 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupConfiguration.identifier', $array225)]);

$output218 .= '-tab">
                        <div class="dashboard-modal-items ">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$output229 = '';

$output229 .= '
                                <div class="dashboard-modal-item">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$output234 = '';

$output234 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$output240 = '';

$output240 .= '
                                            <div class="dashboard-modal-item-icon">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['identifier'] = NULL;
$arguments241['size'] = 'small';
$arguments241['overlay'] = NULL;
$arguments241['state'] = 'default';
$arguments241['alternativeMarkupIdentifier'] = NULL;
$arguments241['size'] = 'default';
$arguments241['alternativeMarkupIdentifier'] = 'inline';
$array243 = array (
);$arguments241['identifier'] = $renderingContext->getVariableProvider()->getByPath('widgetConfiguration.iconIdentifier', $array243);

$output240 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output240 .= '
                                            </div>
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
);$array237['0'] = $renderingContext->getVariableProvider()->getByPath('widgetConfiguration.iconIdentifier', $array238);

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
                                        <div class="dashboard-modal-item-details">
                                            <div class="dashboard-modal-item-title">
                                                ';
$array244 = array (
);
$output234 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('widgetConfiguration.title', $array244)]);

$output234 .= '
                                            </div>
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
$output250 = '';

$output250 .= '
                                                <div class="dashboard-modal-item-description">
                                                    ';
$array251 = array (
);
$output250 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('widgetConfiguration.description', $array251)]);

$output250 .= '
                                                </div>
                                            ';
return $output250;
};
$arguments245 = array();
$arguments245['then'] = NULL;
$arguments245['else'] = NULL;
$arguments245['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array247 = array();
$array248 = array (
);$array247['0'] = $renderingContext->getVariableProvider()->getByPath('widgetConfiguration.description', $array248);

$expression249 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments245['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression249(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array247)
					),
					$renderingContext
				);
$arguments245['__thenClosure'] = $renderChildrenClosure246;

$output234 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output234 .= '
                                        </div>
                                    ';
return $output234;
};
$arguments230 = array();
$arguments230['additionalAttributes'] = NULL;
$arguments230['data'] = NULL;
$arguments230['route'] = NULL;
$arguments230['parameters'] = array (
);
$arguments230['referenceType'] = 'absolute';
$arguments230['name'] = NULL;
$arguments230['rel'] = NULL;
$arguments230['rev'] = NULL;
$arguments230['target'] = NULL;
$arguments230['class'] = NULL;
$arguments230['dir'] = NULL;
$arguments230['id'] = NULL;
$arguments230['lang'] = NULL;
$arguments230['style'] = NULL;
$arguments230['title'] = NULL;
$arguments230['accesskey'] = NULL;
$arguments230['tabindex'] = NULL;
$arguments230['onclick'] = NULL;
$arguments230['class'] = 'dashboard-modal-item-block';
$arguments230['route'] = 'dashboard';
$arguments230['target'] = 'list_frame';
// Rendering Array
$array232 = array();
$array232['action'] = 'addWidget';
$array233 = array (
);$array232['widget'] = $renderingContext->getVariableProvider()->getByPath('widgetIdentifier', $array233);
$arguments230['parameters'] = $array232;

$output229 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);

$output229 .= '
                                </div>
                            ';
return $output229;
};
$arguments226 = array();
$arguments226['each'] = NULL;
$arguments226['as'] = NULL;
$arguments226['key'] = NULL;
$arguments226['reverse'] = false;
$arguments226['iteration'] = NULL;
$array228 = array (
);$arguments226['each'] = $renderingContext->getVariableProvider()->getByPath('groupConfiguration.widgets', $array228);
$arguments226['as'] = 'widgetConfiguration';
$arguments226['key'] = 'widgetIdentifier';

$output218 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output218 .= '
                        </div>
                    </div>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments252 = array();
$arguments252['value'] = NULL;
$arguments252['name'] = NULL;
$arguments252['name'] = 'firstGroupActive';
$arguments252['value'] = 'true';
$renderChildrenClosure253 = ($arguments252['value'] !== null) ? function() use ($arguments252) { return $arguments252['value']; } : $renderChildrenClosure253;
$output218 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext)]);

$output218 .= '
                ';
return $output218;
};
$arguments213 = array();
$arguments213['then'] = NULL;
$arguments213['else'] = NULL;
$arguments213['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array215 = array();
$array216 = array (
);$array215['0'] = $renderingContext->getVariableProvider()->getByPath('groupConfiguration.widgets', $array216);

$expression217 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments213['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression217(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array215)
					),
					$renderingContext
				);
$arguments213['__thenClosure'] = $renderChildrenClosure214;

$output212 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output212 .= '
            ';
return $output212;
};
$arguments209 = array();
$arguments209['each'] = NULL;
$arguments209['as'] = NULL;
$arguments209['key'] = NULL;
$arguments209['reverse'] = false;
$arguments209['iteration'] = NULL;
$array211 = array (
);$arguments209['each'] = $renderingContext->getVariableProvider()->getByPath('widgetGroups', $array211);
$arguments209['as'] = 'groupConfiguration';
$arguments209['iteration'] = 'iterator';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);

$output0 .= '
        </div>
    </div>
</div>

<div id="dashboardModal-add" class="hide">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$output257 = '';

$output257 .= '
        <div class="form-group">
            <label for="dashboardModalAdd-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments258 = array();
$arguments258['key'] = NULL;
$arguments258['id'] = NULL;
$arguments258['default'] = NULL;
$arguments258['arguments'] = NULL;
$arguments258['extensionName'] = NULL;
$arguments258['languageKey'] = NULL;
$arguments258['alternativeLanguageKeys'] = NULL;
$arguments258['key'] = 'dashboard.title';
$arguments258['extensionName'] = 'dashboard';

$output257 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext)]);

$output257 .= '</label>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments260 = array();
$arguments260['additionalAttributes'] = NULL;
$arguments260['data'] = NULL;
$arguments260['name'] = NULL;
$arguments260['value'] = NULL;
$arguments260['property'] = NULL;
$arguments260['autofocus'] = NULL;
$arguments260['disabled'] = NULL;
$arguments260['maxlength'] = NULL;
$arguments260['readonly'] = NULL;
$arguments260['size'] = NULL;
$arguments260['placeholder'] = NULL;
$arguments260['pattern'] = NULL;
$arguments260['errorClass'] = 'f3-form-error';
$arguments260['class'] = NULL;
$arguments260['dir'] = NULL;
$arguments260['id'] = NULL;
$arguments260['lang'] = NULL;
$arguments260['style'] = NULL;
$arguments260['title'] = NULL;
$arguments260['accesskey'] = NULL;
$arguments260['tabindex'] = NULL;
$arguments260['onclick'] = NULL;
$arguments260['required'] = false;
$arguments260['type'] = 'text';
$arguments260['name'] = 'dashboard-title';
$arguments260['id'] = 'dashboardModalAdd-title';
$arguments260['class'] = 'form-control';
// Rendering Boolean node
// Rendering Array
$array262 = array();
$array262['0'] = 'required';

$expression263 = function($context) {return "required";};
$arguments260['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression263(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array262)
					),
					$renderingContext
				);

$output257 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output257 .= '
        </div>

        <div class="dashboard-modal-items">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments264 = array();
$arguments264['value'] = NULL;
$arguments264['name'] = NULL;
$arguments264['name'] = 'dashboardShown';
$arguments264['value'] = 'false';
$renderChildrenClosure265 = ($arguments264['value'] !== null) ? function() use ($arguments264) { return $arguments264['value']; } : $renderChildrenClosure265;
$output257 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext)]);

$output257 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
$output269 = '';

$output269 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
$output275 = '';

$output275 .= '
                    <div class="dashboard-modal-item">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments276 = array();
$arguments276['additionalAttributes'] = NULL;
$arguments276['data'] = NULL;
$arguments276['name'] = NULL;
$arguments276['value'] = NULL;
$arguments276['property'] = NULL;
$arguments276['errorClass'] = 'f3-form-error';
$arguments276['checked'] = NULL;
$arguments276['class'] = NULL;
$arguments276['dir'] = NULL;
$arguments276['id'] = NULL;
$arguments276['lang'] = NULL;
$arguments276['style'] = NULL;
$arguments276['title'] = NULL;
$arguments276['accesskey'] = NULL;
$arguments276['tabindex'] = NULL;
$arguments276['onclick'] = NULL;
$arguments276['disabled'] = NULL;
$output278 = '';

$output278 .= 'dashboardKey-';
$array279 = array (
);
$output278 .= $renderingContext->getVariableProvider()->getByPath('availableDashboardKey', $array279);
$arguments276['id'] = $output278;
$arguments276['name'] = 'dashboard';
$arguments276['class'] = 'dashboard-modal-item-checkBox';
// Rendering Boolean node
// Rendering Array
$array280 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments281 = array();
$arguments281['then'] = NULL;
$arguments281['else'] = NULL;
$arguments281['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array283 = array();
$array284 = array (
);$array283['0'] = $renderingContext->getVariableProvider()->getByPath('dashboardShown', $array284);

$expression285 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments281['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression285(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array283)
					),
					$renderingContext
				);
$arguments281['then'] = 'false';
$arguments281['else'] = 'true';
$array280['0'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext);

$expression286 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments276['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression286(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array280)
					),
					$renderingContext
				);
$array287 = array (
);$arguments276['value'] = $renderingContext->getVariableProvider()->getByPath('availableDashboardKey', $array287);

$output275 .= TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);

$output275 .= '
                        <label for="dashboardKey-';
$array288 = array (
);
$output275 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('availableDashboardKey', $array288)]);

$output275 .= '" class="dashboard-modal-item-block">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
$output294 = '';

$output294 .= '
                                <span class="dashboard-modal-item-icon">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments295 = array();
$arguments295['identifier'] = NULL;
$arguments295['size'] = 'small';
$arguments295['overlay'] = NULL;
$arguments295['state'] = 'default';
$arguments295['alternativeMarkupIdentifier'] = NULL;
$arguments295['size'] = 'default';
$arguments295['alternativeMarkupIdentifier'] = 'inline';
$array297 = array (
);$arguments295['identifier'] = $renderingContext->getVariableProvider()->getByPath('availableDashboardPreset.iconIdentifier', $array297);

$output294 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext);

$output294 .= '
                                </span>
                            ';
return $output294;
};
$arguments289 = array();
$arguments289['then'] = NULL;
$arguments289['else'] = NULL;
$arguments289['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array291 = array();
$array292 = array (
);$array291['0'] = $renderingContext->getVariableProvider()->getByPath('availableDashboardPreset.iconIdentifier', $array292);

$expression293 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments289['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression293(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array291)
					),
					$renderingContext
				);
$arguments289['__thenClosure'] = $renderChildrenClosure290;

$output275 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext);

$output275 .= '
                            <span class="dashboard-modal-item-details">
                                <span class="dashboard-modal-item-title">
                                    ';
$array298 = array (
);
$output275 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('availableDashboardPreset.title', $array298)]);

$output275 .= '
                                </span>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
$output304 = '';

$output304 .= '
                                    <span class="dashboard-modal-item-description">
                                            ';
$array305 = array (
);
$output304 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('availableDashboardPreset.description', $array305)]);

$output304 .= '
                                    </span>
                                ';
return $output304;
};
$arguments299 = array();
$arguments299['then'] = NULL;
$arguments299['else'] = NULL;
$arguments299['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array301 = array();
$array302 = array (
);$array301['0'] = $renderingContext->getVariableProvider()->getByPath('availableDashboardPreset.description', $array302);

$expression303 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments299['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression303(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array301)
					),
					$renderingContext
				);
$arguments299['__thenClosure'] = $renderChildrenClosure300;

$output275 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output275 .= '
                            </span>
                        </label>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments306 = array();
$arguments306['value'] = NULL;
$arguments306['name'] = NULL;
$arguments306['name'] = 'dashboardShown';
$arguments306['value'] = 'true';
$renderChildrenClosure307 = ($arguments306['value'] !== null) ? function() use ($arguments306) { return $arguments306['value']; } : $renderChildrenClosure307;
$output275 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext)]);

$output275 .= '
                    </div>
                ';
return $output275;
};
$arguments270 = array();
$arguments270['then'] = NULL;
$arguments270['else'] = NULL;
$arguments270['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array272 = array();
$array273 = array (
);$array272['0'] = $renderingContext->getVariableProvider()->getByPath('availableDashboardPreset.showInWizard', $array273);

$expression274 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments270['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression274(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array272)
					),
					$renderingContext
				);
$arguments270['__thenClosure'] = $renderChildrenClosure271;

$output269 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext);

$output269 .= '
            ';
return $output269;
};
$arguments266 = array();
$arguments266['each'] = NULL;
$arguments266['as'] = NULL;
$arguments266['key'] = NULL;
$arguments266['reverse'] = false;
$arguments266['iteration'] = NULL;
$array268 = array (
);$arguments266['each'] = $renderingContext->getVariableProvider()->getByPath('dashboardPresets', $array268);
$arguments266['as'] = 'availableDashboardPreset';
$arguments266['key'] = 'availableDashboardKey';

$output257 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);

$output257 .= '
        </div>
    ';
return $output257;
};
$arguments254 = array();
$arguments254['additionalAttributes'] = NULL;
$arguments254['data'] = NULL;
$arguments254['action'] = NULL;
$arguments254['arguments'] = array (
);
$arguments254['controller'] = NULL;
$arguments254['extensionName'] = NULL;
$arguments254['pluginName'] = NULL;
$arguments254['pageUid'] = NULL;
$arguments254['object'] = NULL;
$arguments254['pageType'] = 0;
$arguments254['noCache'] = false;
$arguments254['noCacheHash'] = NULL;
$arguments254['section'] = '';
$arguments254['format'] = '';
$arguments254['additionalParams'] = array (
);
$arguments254['absolute'] = false;
$arguments254['addQueryString'] = false;
$arguments254['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments254['addQueryStringMethod'] = 'GET';
$arguments254['fieldNamePrefix'] = NULL;
$arguments254['actionUri'] = NULL;
$arguments254['objectName'] = NULL;
$arguments254['hiddenFieldClassName'] = NULL;
$arguments254['enctype'] = NULL;
$arguments254['method'] = NULL;
$arguments254['name'] = NULL;
$arguments254['onreset'] = NULL;
$arguments254['onsubmit'] = NULL;
$arguments254['target'] = NULL;
$arguments254['novalidate'] = NULL;
$arguments254['class'] = NULL;
$arguments254['dir'] = NULL;
$arguments254['id'] = NULL;
$arguments254['lang'] = NULL;
$arguments254['style'] = NULL;
$arguments254['title'] = NULL;
$arguments254['accesskey'] = NULL;
$arguments254['tabindex'] = NULL;
$arguments254['onclick'] = NULL;
$array256 = array (
);$arguments254['actionUri'] = $renderingContext->getVariableProvider()->getByPath('addDashboardUri', $array256);
$arguments254['id'] = 'formAddDashboard';
$arguments254['class'] = 'dashboardModal-form';
$arguments254['target'] = 'list_frame';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);

$output0 .= '
</div>

<div id="dashboardModal-configure" class="hide">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
$output311 = '';

$output311 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments312 = array();
$arguments312['additionalAttributes'] = NULL;
$arguments312['data'] = NULL;
$arguments312['name'] = NULL;
$arguments312['value'] = NULL;
$arguments312['property'] = NULL;
$arguments312['class'] = NULL;
$arguments312['dir'] = NULL;
$arguments312['id'] = NULL;
$arguments312['lang'] = NULL;
$arguments312['style'] = NULL;
$arguments312['title'] = NULL;
$arguments312['accesskey'] = NULL;
$arguments312['tabindex'] = NULL;
$arguments312['onclick'] = NULL;
$arguments312['name'] = 'currentDashboard';
$array314 = array (
);$arguments312['value'] = $renderingContext->getVariableProvider()->getByPath('currentDashboard.identifier', $array314);

$output311 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext);

$output311 .= '
        <div class="form-group">
            <label for="dashboardModalConfigure-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments315 = array();
$arguments315['key'] = NULL;
$arguments315['id'] = NULL;
$arguments315['default'] = NULL;
$arguments315['arguments'] = NULL;
$arguments315['extensionName'] = NULL;
$arguments315['languageKey'] = NULL;
$arguments315['alternativeLanguageKeys'] = NULL;
$arguments315['key'] = 'dashboard.title';
$arguments315['extensionName'] = 'dashboard';

$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext)]);

$output311 .= '</label>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments317 = array();
$arguments317['additionalAttributes'] = NULL;
$arguments317['data'] = NULL;
$arguments317['name'] = NULL;
$arguments317['value'] = NULL;
$arguments317['property'] = NULL;
$arguments317['autofocus'] = NULL;
$arguments317['disabled'] = NULL;
$arguments317['maxlength'] = NULL;
$arguments317['readonly'] = NULL;
$arguments317['size'] = NULL;
$arguments317['placeholder'] = NULL;
$arguments317['pattern'] = NULL;
$arguments317['errorClass'] = 'f3-form-error';
$arguments317['class'] = NULL;
$arguments317['dir'] = NULL;
$arguments317['id'] = NULL;
$arguments317['lang'] = NULL;
$arguments317['style'] = NULL;
$arguments317['title'] = NULL;
$arguments317['accesskey'] = NULL;
$arguments317['tabindex'] = NULL;
$arguments317['onclick'] = NULL;
$arguments317['required'] = false;
$arguments317['type'] = 'text';
$arguments317['name'] = 'dashboard[title]';
$arguments317['id'] = 'dashboardModalConfigure-title';
$arguments317['class'] = 'form-control';
$array319 = array (
);$arguments317['value'] = $renderingContext->getVariableProvider()->getByPath('currentDashboard.title', $array319);
// Rendering Boolean node
// Rendering Array
$array320 = array();
$array320['0'] = 'required';

$expression321 = function($context) {return "required";};
$arguments317['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression321(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array320)
					),
					$renderingContext
				);

$output311 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);

$output311 .= '
        </div>
    ';
return $output311;
};
$arguments308 = array();
$arguments308['additionalAttributes'] = NULL;
$arguments308['data'] = NULL;
$arguments308['action'] = NULL;
$arguments308['arguments'] = array (
);
$arguments308['controller'] = NULL;
$arguments308['extensionName'] = NULL;
$arguments308['pluginName'] = NULL;
$arguments308['pageUid'] = NULL;
$arguments308['object'] = NULL;
$arguments308['pageType'] = 0;
$arguments308['noCache'] = false;
$arguments308['noCacheHash'] = NULL;
$arguments308['section'] = '';
$arguments308['format'] = '';
$arguments308['additionalParams'] = array (
);
$arguments308['absolute'] = false;
$arguments308['addQueryString'] = false;
$arguments308['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments308['addQueryStringMethod'] = 'GET';
$arguments308['fieldNamePrefix'] = NULL;
$arguments308['actionUri'] = NULL;
$arguments308['objectName'] = NULL;
$arguments308['hiddenFieldClassName'] = NULL;
$arguments308['enctype'] = NULL;
$arguments308['method'] = NULL;
$arguments308['name'] = NULL;
$arguments308['onreset'] = NULL;
$arguments308['onsubmit'] = NULL;
$arguments308['target'] = NULL;
$arguments308['novalidate'] = NULL;
$arguments308['class'] = NULL;
$arguments308['dir'] = NULL;
$arguments308['id'] = NULL;
$arguments308['lang'] = NULL;
$arguments308['style'] = NULL;
$arguments308['title'] = NULL;
$arguments308['accesskey'] = NULL;
$arguments308['tabindex'] = NULL;
$arguments308['onclick'] = NULL;
$array310 = array (
);$arguments308['actionUri'] = $renderingContext->getVariableProvider()->getByPath('configureDashboardUri', $array310);
$arguments308['id'] = 'configureDashboardForm';
$arguments308['class'] = 'dashboardModal-form';
$arguments308['target'] = 'list_frame';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext);

$output0 .= '
</div>

';

return $output0;
}


}
#