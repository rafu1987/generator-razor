<?php

class partial_ExternalLibraries_46d3e18f2a3a19ba1b71b6b941c011398b399fc8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="panel panel-default">
	<div class="panel-body panel-body-highlightlinks">
		<h2 class="h3">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'LLL:EXT:about/Resources/Private/Language/Modules/about.xlf:external_libraries';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
		</h2>
		<p>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['key'] = NULL;
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['languageKey'] = NULL;
$arguments3['alternativeLanguageKeys'] = NULL;
$arguments3['key'] = 'LLL:EXT:about/Resources/Private/Language/Modules/about.xlf:external_thanks';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '
		</p>
	</div>
	<table class="table panel-table">
		<tr>
			<td>Composer</td>
			<td><a href="https://getcomposer.org" target="_blank" rel="noopener noreferrer">getcomposer.org</a></td>
		</tr>
		<tr>
			<td>jQuery</td>
			<td><a href="https://jquery.com" target="_blank" rel="noopener noreferrer">jquery.com</a></td>
		</tr>
		<tr>
			<td>Twitter Bootstrap</td>
			<td><a href="http://getbootstrap.com" target="_blank" rel="noopener noreferrer">getbootstrap.com</a></td>
		</tr>
		<tr>
			<td>Swift Mailer</td>
			<td><a href="http://swiftmailer.org" target="_blank" rel="noopener noreferrer">swiftmailer.org</a></td>
		</tr>
		<tr>
			<td>Doctrine Project (DBAL Component and Instantiator)</td>
			<td><a href="http://www.doctrine-project.org/projects/dbal.html" target="_blank" rel="noopener noreferrer">doctrine-project.org</a></td>
		</tr>
		<tr>
			<td>Symfony Framework (YAML, Console and Finder Component)</td>
			<td><a href="https://symfony.com" target="_blank" rel="noopener noreferrer">symfony.com</a></td>
		</tr>
		<tr>
			<td>Guzzle PHP</td>
			<td><a href="http://guzzlephp.org" target="_blank" rel="noopener noreferrer">guzzlephp.org</a></td>
		</tr>
		<tr>
			<td>d3 Data Driven Documents</td>
			<td><a href="https://d3js.org" target="_blank" rel="noopener noreferrer">d3js.org</a></td>
		</tr>
		<tr>
			<td>CKEditor</td>
			<td><a href="http://ckeditor.com" target="_blank" rel="noopener noreferrer">ckeditor.com</a></td>
		</tr>
		<tr>
			<td>RequireJS</td>
			<td><a href="http://requirejs.org" target="_blank" rel="noopener noreferrer">requirejs.org</a></td>
		</tr>
		<tr>
			<td>moment.js</td>
			<td><a href="https://momentjs.com" target="_blank" rel="noopener noreferrer">momentjs.com</a></td>
		</tr>
		<tr>
			<td>NProgress</td>
			<td><a href="http://ricostacruz.com/nprogress/" target="_blank" rel="noopener noreferrer">ricostacruz.com</a></td>
		</tr>
		<tr>
			<td>jQuery UI</td>
			<td><a href="https://jqueryui.com" target="_blank" rel="noopener noreferrer">jqueryui.com</a></td>
		</tr>
		<tr>
			<td>Twitter Bootstrap Plugin: DateTimePicker</td>
			<td><a href="https://eonasdan.github.io/bootstrap-datetimepicker/" target="_blank" rel="noopener noreferrer">eonasdan.github.io</a></td>
		</tr>
		<tr>
			<td>Twitter Bootstrap Plugin: Slider</td>
			<td><a href="http://seiyria.com/bootstrap-slider/" target="_blank" rel="noopener noreferrer">seiyria.com</a></td>
		</tr>
		<tr>
			<td>jQuery Plugin: Ajax AutoComplete</td>
			<td><a href="https://www.devbridge.com/sourcery/components/jquery-autocomplete/" target="_blank" rel="noopener noreferrer">devbridge.com</a></td>
		</tr>
		<tr>
			<td>jQuery Plugin: Autosize</td>
			<td><a href="http://www.jacklmoore.com/autosize/" target="_blank" rel="noopener noreferrer">jacklmoore.com</a></td>
		</tr>
		<tr>
			<td>jQuery Plugin: Cropper</td>
			<td><a href="https://fengyuanchen.github.io/cropper/" target="_blank" rel="noopener noreferrer">fengyuanchen.github.io</a></td>
		</tr>
		<tr>
			<td>jQuery Plugin: DataTables</td>
			<td><a href="https://datatables.net" target="_blank" rel="noopener noreferrer">datatables.net</a></td>
		</tr>
		<tr>
			<td>jQuery Plugin: ImagesLoaded</td>
			<td><a href="http://imagesloaded.desandro.com" target="_blank" rel="noopener noreferrer">imagesloaded.desandro.com</a></td>
		</tr>
		<tr>
			<td>jQuery Plugin: MiniColors</td>
			<td><a href="http://labs.abeautifulsite.net/jquery-minicolors/" target="_blank" rel="noopener noreferrer">labs.abeautifulsite.net</a></td>
		</tr>
		<tr>
			<td>jQuery Plugin: Tab Override</td>
			<td><a href="http://wjbryant.github.io/taboverride/" target="_blank" rel="noopener noreferrer">wjbryant.github.io</a></td>
		</tr>
		<tr>
			<td>Neos (Form component)</td>
			<td><a href="https://www.neos.io" target="_blank" rel="noopener noreferrer">neos.io</a></td>
		</tr>
		<tr>
			<td>FineDiff</td>
			<td><a href="https://github.com/cogpowered/FineDiff" target="_blank" rel="noopener noreferrer">github.com</a></td>
		</tr>
		<tr>
			<td>IDNA Convert</td>
			<td><a href="https://idnaconv.net" target="_blank" rel="noopener noreferrer">idnaconv.net</a></td>
		</tr>
		<tr>
			<td>CodeMirror</td>
			<td><a href="http://codemirror.net" target="_blank" rel="noopener noreferrer">codemirror.net</a></td>
		</tr>
	</table>
</div>
';

return $output0;
}


}
#