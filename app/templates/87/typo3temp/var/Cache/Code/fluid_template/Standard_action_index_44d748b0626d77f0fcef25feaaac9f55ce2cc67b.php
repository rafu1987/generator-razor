<?php

class Standard_action_index_44d748b0626d77f0fcef25feaaac9f55ce2cc67b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="scaffold t3js-scaffold scaffold-modulemenu-expanded">
	<div class="t3js-scaffold-header">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$array3 = array (
);return $renderingContext->getVariableProvider()->getByPath('topbar', $array3);
};
$arguments1 = array();
$arguments1['value'] = NULL;

$output0 .= isset($arguments1['value']) ? $arguments1['value'] : $renderChildrenClosure2();

$output0 .= '
	</div>
	<div class="scaffold-modulemenu t3js-scaffold-modulemenu">
		<div class="modulemenu t3js-modulemenu">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$array6 = array (
);return $renderingContext->getVariableProvider()->getByPath('moduleMenu', $array6);
};
$arguments4 = array();
$arguments4['value'] = NULL;

$output0 .= isset($arguments4['value']) ? $arguments4['value'] : $renderChildrenClosure5();

$output0 .= '
		</div>
	</div>
	<div class="scaffold-content t3js-scaffold-content">
		<div class="scaffold-content-navigation t3js-scaffold-content-navigation">
			<div class="scaffold-content-navigation-component" data-component="typo3-navigationIframe">
				<iframe name="nav_frame" src="about:blank" id="typo3-navigationContainerIframe" class="scaffold-content-navigation-iframe t3js-scaffold-content-navigation-iframe"></iframe>
			</div>
		</div>
		<div class="scaffold-content-module t3js-scaffold-content-module">
			<iframe name="list_frame" id="typo3-contentIframe" class="scaffold-content-module-iframe t3js-scaffold-content-module-iframe"></iframe>
		</div>
		<div class="scaffold-content-overlay t3js-scaffold-content-overlay"></div>
	</div>
</div>
';

return $output0;
}


}
#