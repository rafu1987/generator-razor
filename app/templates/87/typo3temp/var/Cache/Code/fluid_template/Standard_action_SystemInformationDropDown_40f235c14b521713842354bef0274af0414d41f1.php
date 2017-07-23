<?php

class Standard_action_SystemInformationDropDown_40f235c14b521713842354bef0274af0414d41f1 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<span class="systeminformationtoolbaritem-container t3js-systeminformation-container" data-count="';
$array1 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('count', $array1), ENT_QUOTES);

$output0 .= '"
			data-severityclass="';
$array2 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('severityBadgeClass', $array2), ENT_QUOTES);

$output0 .= '"></span>

<h3 class="dropdown-headline">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['key'] = NULL;
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['htmlEscape'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['key'] = 'systemmessage.header';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext), ENT_QUOTES);

$output0 .= '
</h3>
<p class="dropdown-text typo3-module-menu-item submodule mod-system_extinstall" data-modulename="system_extinstall">
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
		';
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
$arguments8['key'] = 'systemmessage.intro';
// Rendering Array
$array10 = array();
$array11 = array (
);$array10['0'] = $renderingContext->getVariableProvider()->getByPath('installToolUrl', $array11);
$arguments8['arguments'] = $array10;

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
	';
return $output7;
};
$arguments5 = array();
$arguments5['value'] = NULL;

$output0 .= isset($arguments5['value']) ? $arguments5['value'] : $renderChildrenClosure6();

$output0 .= '
</p>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
	<hr>
	<div class="dropdown-table">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
			<div class="dropdown-table-row">
				<div class="dropdown-table-column dropdown-table-icon">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['identifier'] = NULL;
$arguments38['size'] = 'small';
$arguments38['overlay'] = NULL;
$arguments38['state'] = 'default';
$arguments38['alternativeMarkupIdentifier'] = NULL;
$array40 = array (
);$arguments38['identifier'] = $renderingContext->getVariableProvider()->getByPath('info.iconIdentifier', $array40);
$arguments38['size'] = 'small';

$output37 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= '
						';
return $output37;
};
$arguments35 = array();

$output34 .= '';

$output34 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$array45 = array (
);return $renderingContext->getVariableProvider()->getByPath('info.icon', $array45);
};
$arguments43 = array();
$arguments43['value'] = NULL;
return isset($arguments43['value']) ? $arguments43['value'] : $renderChildrenClosure44();
};
$arguments41 = array();
$arguments41['if'] = NULL;

$output34 .= '';

$output34 .= '
					';
return $output34;
};
$arguments22 = array();
$arguments22['then'] = NULL;
$arguments22['else'] = NULL;
$arguments22['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array31 = array();
$array32 = array (
);$array31['0'] = $renderingContext->getVariableProvider()->getByPath('info.iconIdentifier', $array32);

$expression33 = function($context) {return ($context["node0"]);};
$arguments22['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression33(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)
					),
					$renderingContext
				);
$arguments22['__thenClosure'] = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['identifier'] = NULL;
$arguments25['size'] = 'small';
$arguments25['overlay'] = NULL;
$arguments25['state'] = 'default';
$arguments25['alternativeMarkupIdentifier'] = NULL;
$array27 = array (
);$arguments25['identifier'] = $renderingContext->getVariableProvider()->getByPath('info.iconIdentifier', $array27);
$arguments25['size'] = 'small';

$output24 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
						';
return $output24;
};
$arguments22['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$array30 = array (
);return $renderingContext->getVariableProvider()->getByPath('info.icon', $array30);
};
$arguments28 = array();
$arguments28['value'] = NULL;
return isset($arguments28['value']) ? $arguments28['value'] : $renderChildrenClosure29();
};

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
				</div>
				<div class="dropdown-table-column dropdown-table-title">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['key'] = NULL;
$arguments46['id'] = NULL;
$arguments46['default'] = NULL;
$arguments46['htmlEscape'] = NULL;
$arguments46['arguments'] = NULL;
$arguments46['extensionName'] = NULL;
$array48 = array (
);$arguments46['key'] = $renderingContext->getVariableProvider()->getByPath('info.title', $array48);
$array49 = array (
);$arguments46['default'] = $renderingContext->getVariableProvider()->getByPath('info.title', $array49);

$output21 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext), ENT_QUOTES);

$output21 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= ' (';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$array59 = array (
);return $renderingContext->getVariableProvider()->getByPath('info.titleAddition', $array59);
};
$arguments56 = array();
$arguments56['value'] = NULL;
$arguments56['keepQuotes'] = false;
$arguments56['encoding'] = 'UTF-8';
$arguments56['doubleEncode'] = true;
$value58 = ($arguments56['value'] !== NULL ? $arguments56['value'] : $renderChildrenClosure57());

$output55 .= !is_string($value58) && !(is_object($value58) && method_exists($value58, '__toString')) ? $value58 : htmlspecialchars($value58, ($arguments56['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments56['encoding'], $arguments56['doubleEncode']);

$output55 .= ')';
return $output55;
};
$arguments50 = array();
$arguments50['then'] = NULL;
$arguments50['else'] = NULL;
$arguments50['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array52 = array();
$array53 = array (
);$array52['0'] = $renderingContext->getVariableProvider()->getByPath('info.titleAddition', $array53);

$expression54 = function($context) {return ($context["node0"]);};
$arguments50['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression54(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)
					),
					$renderingContext
				);
$arguments50['__thenClosure'] = $renderChildrenClosure51;

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output21 .= '
				</div>
				<div
					class="dropdown-table-column dropdown-table-value ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['then'] = NULL;
$arguments60['else'] = NULL;
$arguments60['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array62 = array();
$array63 = array (
);$array62['0'] = $renderingContext->getVariableProvider()->getByPath('info.status', $array63);

$expression64 = function($context) {return ($context["node0"]);};
$arguments60['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression64(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array62)
					),
					$renderingContext
				);
$output65 = '';

$output65 .= 'text-';
$array66 = array (
);
$output65 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('info.status', $array66), ENT_QUOTES);
$arguments60['then'] = $output65;

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output21 .= '">
					';
$array67 = array (
);
$output21 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('info.value', $array67), ENT_QUOTES);

$output21 .= '
				</div>
			</div>
		';
return $output21;
};
$arguments18 = array();
$arguments18['each'] = NULL;
$arguments18['as'] = NULL;
$arguments18['key'] = NULL;
$arguments18['reverse'] = false;
$arguments18['iteration'] = NULL;
$array20 = array (
);$arguments18['each'] = $renderingContext->getVariableProvider()->getByPath('systemInformation', $array20);
$arguments18['as'] = 'info';

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
	</div>
';
return $output17;
};
$arguments12 = array();
$arguments12['then'] = NULL;
$arguments12['else'] = NULL;
$arguments12['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array14 = array();
$array15 = array (
);$array14['0'] = $renderingContext->getVariableProvider()->getByPath('systemInformation', $array15);

$expression16 = function($context) {return ($context["node0"]);};
$arguments12['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression16(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)
					),
					$renderingContext
				);
$arguments12['__thenClosure'] = $renderChildrenClosure13;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output0 .= '

<hr>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output148 = '';

$output148 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$output151 = '';

$output151 .= '
					<p id="systeminformation_';
$array152 = array (
);
$output151 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array152), ENT_QUOTES);

$output151 .= '"
						 class="dropdown-text t3js-systeminformation-module typo3-module-menu-item submodule mod-';
$array153 = array (
);
$output151 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array153), ENT_QUOTES);

$output151 .= '"
						 data-modulename="';
$array154 = array (
);
$output151 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array154), ENT_QUOTES);

$output151 .= '">
						<span class="text-';
$array155 = array (
);
$output151 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.status', $array155), ENT_QUOTES);

$output151 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$array158 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array158);
};
$arguments156 = array();
$arguments156['value'] = NULL;

$output151 .= isset($arguments156['value']) ? $arguments156['value'] : $renderChildrenClosure157();

$output151 .= '</span>
					</p>
				';
return $output151;
};
$arguments149 = array();

$output148 .= '';

$output148 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$output161 = '';

$output161 .= '
					<p class="dropdown-text text-';
$array162 = array (
);
$output161 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.status', $array162), ENT_QUOTES);

$output161 .= '">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
$array165 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array165);
};
$arguments163 = array();
$arguments163['value'] = NULL;

$output161 .= isset($arguments163['value']) ? $arguments163['value'] : $renderChildrenClosure164();

$output161 .= '
					</p>
				';
return $output161;
};
$arguments159 = array();
$arguments159['if'] = NULL;

$output148 .= '';

$output148 .= '
			';
return $output148;
};
$arguments130 = array();
$arguments130['then'] = NULL;
$arguments130['else'] = NULL;
$arguments130['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array145 = array();
$array146 = array (
);$array145['0'] = $renderingContext->getVariableProvider()->getByPath('message.module', $array146);

$expression147 = function($context) {return ($context["node0"]);};
$arguments130['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression147(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array145)
					),
					$renderingContext
				);
$arguments130['__thenClosure'] = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
					<p id="systeminformation_';
$array133 = array (
);
$output132 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array133), ENT_QUOTES);

$output132 .= '"
						 class="dropdown-text t3js-systeminformation-module typo3-module-menu-item submodule mod-';
$array134 = array (
);
$output132 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array134), ENT_QUOTES);

$output132 .= '"
						 data-modulename="';
$array135 = array (
);
$output132 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array135), ENT_QUOTES);

$output132 .= '">
						<span class="text-';
$array136 = array (
);
$output132 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.status', $array136), ENT_QUOTES);

$output132 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$array139 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array139);
};
$arguments137 = array();
$arguments137['value'] = NULL;

$output132 .= isset($arguments137['value']) ? $arguments137['value'] : $renderChildrenClosure138();

$output132 .= '</span>
					</p>
				';
return $output132;
};
$arguments130['__elseClosures'][] = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
					<p class="dropdown-text text-';
$array141 = array (
);
$output140 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.status', $array141), ENT_QUOTES);

$output140 .= '">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$array144 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array144);
};
$arguments142 = array();
$arguments142['value'] = NULL;

$output140 .= isset($arguments142['value']) ? $arguments142['value'] : $renderChildrenClosure143();

$output140 .= '
					</p>
				';
return $output140;
};

$output129 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= '
		';
return $output129;
};
$arguments126 = array();
$arguments126['each'] = NULL;
$arguments126['as'] = NULL;
$arguments126['key'] = NULL;
$arguments126['reverse'] = false;
$arguments126['iteration'] = NULL;
$array128 = array (
);$arguments126['each'] = $renderingContext->getVariableProvider()->getByPath('messages', $array128);
$arguments126['as'] = 'message';

$output125 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output125 .= '
	';
return $output125;
};
$arguments123 = array();

$output122 .= '';

$output122 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
$output168 = '';

$output168 .= '
		<p class="dropdown-text text-success">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$output171 = '';

$output171 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments172 = array();
$arguments172['key'] = NULL;
$arguments172['id'] = NULL;
$arguments172['default'] = NULL;
$arguments172['htmlEscape'] = NULL;
$arguments172['arguments'] = NULL;
$arguments172['extensionName'] = NULL;
$arguments172['key'] = 'systemmessage.allgood';

$output171 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext), ENT_QUOTES);

$output171 .= '
			';
return $output171;
};
$arguments169 = array();
$arguments169['value'] = NULL;
$renderChildrenClosure170 = $arguments169['value'] ? function() use ($arguments169) { return $arguments169['value']; } : $renderChildrenClosure170;
$output168 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output168 .= '
		</p>
	';
return $output168;
};
$arguments166 = array();
$arguments166['if'] = NULL;

$output122 .= '';

$output122 .= '
';
return $output122;
};
$arguments68 = array();
$arguments68['then'] = NULL;
$arguments68['else'] = NULL;
$arguments68['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array117 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$array120 = array (
);return $renderingContext->getVariableProvider()->getByPath('messages', $array120);
};
$arguments118 = array();
$arguments118['subject'] = NULL;
$renderChildrenClosure119 = $arguments118['subject'] ? function() use ($arguments118) { return $arguments118['subject']; } : $renderChildrenClosure119;$array117['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);
$array117['1'] = ' > 0';

$expression121 = function($context) {return (($context["node0"]) > 0);};
$arguments68['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression121(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array117)
					),
					$renderingContext
				);
$arguments68['__thenClosure'] = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
					<p id="systeminformation_';
$array97 = array (
);
$output96 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array97), ENT_QUOTES);

$output96 .= '"
						 class="dropdown-text t3js-systeminformation-module typo3-module-menu-item submodule mod-';
$array98 = array (
);
$output96 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array98), ENT_QUOTES);

$output96 .= '"
						 data-modulename="';
$array99 = array (
);
$output96 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array99), ENT_QUOTES);

$output96 .= '">
						<span class="text-';
$array100 = array (
);
$output96 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.status', $array100), ENT_QUOTES);

$output96 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$array103 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array103);
};
$arguments101 = array();
$arguments101['value'] = NULL;

$output96 .= isset($arguments101['value']) ? $arguments101['value'] : $renderChildrenClosure102();

$output96 .= '</span>
					</p>
				';
return $output96;
};
$arguments94 = array();

$output93 .= '';

$output93 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
					<p class="dropdown-text text-';
$array107 = array (
);
$output106 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.status', $array107), ENT_QUOTES);

$output106 .= '">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$array110 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array110);
};
$arguments108 = array();
$arguments108['value'] = NULL;

$output106 .= isset($arguments108['value']) ? $arguments108['value'] : $renderChildrenClosure109();

$output106 .= '
					</p>
				';
return $output106;
};
$arguments104 = array();
$arguments104['if'] = NULL;

$output93 .= '';

$output93 .= '
			';
return $output93;
};
$arguments75 = array();
$arguments75['then'] = NULL;
$arguments75['else'] = NULL;
$arguments75['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['0'] = $renderingContext->getVariableProvider()->getByPath('message.module', $array91);

$expression92 = function($context) {return ($context["node0"]);};
$arguments75['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression92(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)
					),
					$renderingContext
				);
$arguments75['__thenClosure'] = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
					<p id="systeminformation_';
$array78 = array (
);
$output77 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array78), ENT_QUOTES);

$output77 .= '"
						 class="dropdown-text t3js-systeminformation-module typo3-module-menu-item submodule mod-';
$array79 = array (
);
$output77 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array79), ENT_QUOTES);

$output77 .= '"
						 data-modulename="';
$array80 = array (
);
$output77 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.module', $array80), ENT_QUOTES);

$output77 .= '">
						<span class="text-';
$array81 = array (
);
$output77 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.status', $array81), ENT_QUOTES);

$output77 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$array84 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array84);
};
$arguments82 = array();
$arguments82['value'] = NULL;

$output77 .= isset($arguments82['value']) ? $arguments82['value'] : $renderChildrenClosure83();

$output77 .= '</span>
					</p>
				';
return $output77;
};
$arguments75['__elseClosures'][] = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
					<p class="dropdown-text text-';
$array86 = array (
);
$output85 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('message.status', $array86), ENT_QUOTES);

$output85 .= '">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$array89 = array (
);return $renderingContext->getVariableProvider()->getByPath('message.text', $array89);
};
$arguments87 = array();
$arguments87['value'] = NULL;

$output85 .= isset($arguments87['value']) ? $arguments87['value'] : $renderChildrenClosure88();

$output85 .= '
					</p>
				';
return $output85;
};

$output74 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
		';
return $output74;
};
$arguments71 = array();
$arguments71['each'] = NULL;
$arguments71['as'] = NULL;
$arguments71['key'] = NULL;
$arguments71['reverse'] = false;
$arguments71['iteration'] = NULL;
$array73 = array (
);$arguments71['each'] = $renderingContext->getVariableProvider()->getByPath('messages', $array73);
$arguments71['as'] = 'message';

$output70 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
	';
return $output70;
};
$arguments68['__elseClosures'][] = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
		<p class="dropdown-text text-success">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['key'] = NULL;
$arguments115['id'] = NULL;
$arguments115['default'] = NULL;
$arguments115['htmlEscape'] = NULL;
$arguments115['arguments'] = NULL;
$arguments115['extensionName'] = NULL;
$arguments115['key'] = 'systemmessage.allgood';

$output114 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext), ENT_QUOTES);

$output114 .= '
			';
return $output114;
};
$arguments112 = array();
$arguments112['value'] = NULL;
$renderChildrenClosure113 = $arguments112['value'] ? function() use ($arguments112) { return $arguments112['value']; } : $renderChildrenClosure113;
$output111 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output111 .= '
		</p>
	';
return $output111;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#