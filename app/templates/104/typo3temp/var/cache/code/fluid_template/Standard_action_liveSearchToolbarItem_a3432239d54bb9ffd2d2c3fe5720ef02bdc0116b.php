<?php

class Standard_action_liveSearchToolbarItem_a3432239d54bb9ffd2d2c3fe5720ef02bdc0116b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<form class="t3js-topbar-navigation-search toolbar-item-search-form live-search-wrapper" role="search">
    <div class="form-group">
        <div class="form-control-holder">
            <div class="form-control-icon">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['identifier'] = NULL;
$arguments1['size'] = 'small';
$arguments1['overlay'] = NULL;
$arguments1['state'] = 'default';
$arguments1['alternativeMarkupIdentifier'] = NULL;
$arguments1['identifier'] = 'apps-toolbar-menu-search';
$arguments1['size'] = 'small';
$arguments1['alternativeMarkupIdentifier'] = 'inline';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
            </div>
            <input type="text" class="form-control toolbar-item-search-field t3js-topbar-navigation-search-field"
                        placeholder="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['key'] = NULL;
$arguments6['id'] = NULL;
$arguments6['default'] = NULL;
$arguments6['arguments'] = NULL;
$arguments6['extensionName'] = NULL;
$arguments6['languageKey'] = NULL;
$arguments6['alternativeLanguageKeys'] = NULL;
$arguments6['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:toolbarItems.search';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);
};
$arguments3 = array();
$arguments3['value'] = NULL;
$arguments3['keepQuotes'] = false;
$arguments3['encoding'] = 'UTF-8';
$arguments3['doubleEncode'] = true;
$value5 = ($arguments3['value'] !== NULL ? $arguments3['value'] : $renderChildrenClosure4());

$output0 .= !is_string($value5) && !(is_object($value5) && method_exists($value5, '__toString')) ? $value5 : htmlspecialchars($value5, ($arguments3['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments3['encoding'], $arguments3['doubleEncode']);

$output0 .= '"
                        id="live-search-box" autocomplete="off">
        </div>
    </div>
</form>
<a href="#" class="dropdown-toggle t3js-toolbar-search-dropdowntoggle" data-toggle="dropdown" aria-expanded="false"></a>
<div class="dropdown-menu" role="menu"></div>

';

return $output0;
}


}
#