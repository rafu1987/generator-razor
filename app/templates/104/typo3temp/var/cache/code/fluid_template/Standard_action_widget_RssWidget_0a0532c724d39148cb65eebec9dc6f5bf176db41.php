<?php

class Standard_action_widget_RssWidget_0a0532c724d39148cb65eebec9dc6f5bf176db41 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

    <div class="widget-table-wrapper">
        <table class="widget-table">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
                <tr>
                    <td>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '<strong>';
$array9 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array9)]);

$output8 .= '</strong>';
return $output8;
};
$arguments5 = array();
$arguments5['additionalAttributes'] = NULL;
$arguments5['data'] = NULL;
$arguments5['uri'] = NULL;
$arguments5['defaultScheme'] = 'http';
$arguments5['class'] = NULL;
$arguments5['dir'] = NULL;
$arguments5['id'] = NULL;
$arguments5['lang'] = NULL;
$arguments5['style'] = NULL;
$arguments5['title'] = NULL;
$arguments5['accesskey'] = NULL;
$arguments5['tabindex'] = NULL;
$arguments5['onclick'] = NULL;
$arguments5['name'] = NULL;
$arguments5['rel'] = NULL;
$arguments5['rev'] = NULL;
$arguments5['target'] = NULL;
$array7 = array (
);$arguments5['uri'] = $renderingContext->getVariableProvider()->getByPath('item.link', $array7);
$arguments5['target'] = '_blank';

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
                        <small><time datetime="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$array12 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.pubDate', $array12);
};
$arguments10 = array();
$arguments10['date'] = NULL;
$arguments10['format'] = '';
$arguments10['base'] = NULL;
$arguments10['format'] = '%Y-%m-%d';
$renderChildrenClosure11 = ($arguments10['date'] !== null) ? function() use ($arguments10) { return $arguments10['date']; } : $renderChildrenClosure11;
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output4 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$array15 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.pubDate', $array15);
};
$arguments13 = array();
$arguments13['date'] = NULL;
$arguments13['format'] = '';
$arguments13['base'] = NULL;
$renderChildrenClosure14 = ($arguments13['date'] !== null) ? function() use ($arguments13) { return $arguments13['date']; } : $renderChildrenClosure14;
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output4 .= '</time></small>
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$array18 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.description', $array18)]);
};
$arguments16 = array();
$arguments16['maxCharacters'] = NULL;
$arguments16['append'] = '&hellip;';
$arguments16['respectWordBoundaries'] = true;
$arguments16['respectHtml'] = true;
$arguments16['maxCharacters'] = 180;

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output4 .= '</p>
                    </td>
                </tr>
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
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('items', $array3);
$arguments1['as'] = 'item';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
        </table>
    </div>

';

return $output0;
}
/**
 * section footer
 */
public function section_d7eb6b340a11a367a1bec55e4a421d949214759f(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output19 = '';

$output19 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
        <a href="';
$array26 = array (
);
$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('button.link', $array26)]);

$output25 .= '" target="';
$array27 = array (
);
$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('button.target', $array27)]);

$output25 .= '" class="widget-cta">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['key'] = NULL;
$arguments28['id'] = NULL;
$arguments28['default'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['extensionName'] = NULL;
$arguments28['languageKey'] = NULL;
$arguments28['alternativeLanguageKeys'] = NULL;
$array30 = array (
);$arguments28['id'] = $renderingContext->getVariableProvider()->getByPath('button.title', $array30);
$array31 = array (
);$arguments28['default'] = $renderingContext->getVariableProvider()->getByPath('button.title', $array31);

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output25 .= '</a>
    ';
return $output25;
};
$arguments20 = array();
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$arguments20['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['0'] = $renderingContext->getVariableProvider()->getByPath('button', $array23);

$expression24 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments20['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression24(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)
					),
					$renderingContext
				);
$arguments20['__thenClosure'] = $renderChildrenClosure21;

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
';

return $output19;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output32 = '';

$output32 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['name'] = NULL;
$arguments33['name'] = 'Widget/Widget';

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output32 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '

    <div class="widget-table-wrapper">
        <table class="widget-table">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
                <tr>
                    <td>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '<strong>';
$array46 = array (
);
$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array46)]);

$output45 .= '</strong>';
return $output45;
};
$arguments42 = array();
$arguments42['additionalAttributes'] = NULL;
$arguments42['data'] = NULL;
$arguments42['uri'] = NULL;
$arguments42['defaultScheme'] = 'http';
$arguments42['class'] = NULL;
$arguments42['dir'] = NULL;
$arguments42['id'] = NULL;
$arguments42['lang'] = NULL;
$arguments42['style'] = NULL;
$arguments42['title'] = NULL;
$arguments42['accesskey'] = NULL;
$arguments42['tabindex'] = NULL;
$arguments42['onclick'] = NULL;
$arguments42['name'] = NULL;
$arguments42['rel'] = NULL;
$arguments42['rev'] = NULL;
$arguments42['target'] = NULL;
$array44 = array (
);$arguments42['uri'] = $renderingContext->getVariableProvider()->getByPath('item.link', $array44);
$arguments42['target'] = '_blank';

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
                        <small><time datetime="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$array49 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.pubDate', $array49);
};
$arguments47 = array();
$arguments47['date'] = NULL;
$arguments47['format'] = '';
$arguments47['base'] = NULL;
$arguments47['format'] = '%Y-%m-%d';
$renderChildrenClosure48 = ($arguments47['date'] !== null) ? function() use ($arguments47) { return $arguments47['date']; } : $renderChildrenClosure48;
$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext)]);

$output41 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$array52 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.pubDate', $array52);
};
$arguments50 = array();
$arguments50['date'] = NULL;
$arguments50['format'] = '';
$arguments50['base'] = NULL;
$renderChildrenClosure51 = ($arguments50['date'] !== null) ? function() use ($arguments50) { return $arguments50['date']; } : $renderChildrenClosure51;
$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output41 .= '</time></small>
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$array55 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.description', $array55)]);
};
$arguments53 = array();
$arguments53['maxCharacters'] = NULL;
$arguments53['append'] = '&hellip;';
$arguments53['respectWordBoundaries'] = true;
$arguments53['respectHtml'] = true;
$arguments53['maxCharacters'] = 180;

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output41 .= '</p>
                    </td>
                </tr>
            ';
return $output41;
};
$arguments38 = array();
$arguments38['each'] = NULL;
$arguments38['as'] = NULL;
$arguments38['key'] = NULL;
$arguments38['reverse'] = false;
$arguments38['iteration'] = NULL;
$array40 = array (
);$arguments38['each'] = $renderingContext->getVariableProvider()->getByPath('items', $array40);
$arguments38['as'] = 'item';

$output37 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= '
        </table>
    </div>

';
return $output37;
};
$arguments35 = array();
$arguments35['name'] = NULL;
$arguments35['name'] = 'main';

$output32 .= NULL;

$output32 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
        <a href="';
$array65 = array (
);
$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('button.link', $array65)]);

$output64 .= '" target="';
$array66 = array (
);
$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('button.target', $array66)]);

$output64 .= '" class="widget-cta">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['key'] = NULL;
$arguments67['id'] = NULL;
$arguments67['default'] = NULL;
$arguments67['arguments'] = NULL;
$arguments67['extensionName'] = NULL;
$arguments67['languageKey'] = NULL;
$arguments67['alternativeLanguageKeys'] = NULL;
$array69 = array (
);$arguments67['id'] = $renderingContext->getVariableProvider()->getByPath('button.title', $array69);
$array70 = array (
);$arguments67['default'] = $renderingContext->getVariableProvider()->getByPath('button.title', $array70);

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);

$output64 .= '</a>
    ';
return $output64;
};
$arguments59 = array();
$arguments59['then'] = NULL;
$arguments59['else'] = NULL;
$arguments59['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array61 = array();
$array62 = array (
);$array61['0'] = $renderingContext->getVariableProvider()->getByPath('button', $array62);

$expression63 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments59['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression63(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array61)
					),
					$renderingContext
				);
$arguments59['__thenClosure'] = $renderChildrenClosure60;

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '
';
return $output58;
};
$arguments56 = array();
$arguments56['name'] = NULL;
$arguments56['name'] = 'footer';

$output32 .= NULL;

$output32 .= '

';

return $output32;
}


}
#