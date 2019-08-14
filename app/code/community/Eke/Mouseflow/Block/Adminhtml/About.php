<?php

class Eke_Mouseflow_Block_Adminhtml_About
    extends Mage_Adminhtml_Block_Abstract
    implements Varien_Data_Form_Element_Renderer_Interface
{


    public function render(Varien_Data_Form_Element_Abstract $element)
    {
		$logo = "//www.ekedigital.com/assets/eke_logo_modules.png";
        $html = <<<HTML

<div style="background:url('$logo') no-repeat scroll 15px 15px #e7efef; border:1px solid #ccc; min-height:60px; margin:5px 0; padding:15px 15px 15px 140px;">
<p><strong>Mouseflow Integration v0.1.0</strong> by <a href="https://www.ekedigital.com/?utm_source=Magento_Extension&utm_medium=Extension_Settings&utm_campaign=Mouseflow" target="_blank">Eke Digital</a>
<br /> Quickly integrate Mouseflow user session recording code snippet.
</p>For questions or support requests please email us at <a href="mailto:support@ekedigital.com">support@ekedigital.com</a>.</p>
</div>

HTML;
        return $html;
    }
}