<?php
class Eke_Mouseflow_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function isTrackerEnabled()
    {
        return Mage::getStoreConfig("eke_mouseflow/tracker/enabled");
    }
	
    public function getTrackerId()
    {
        return Mage::getStoreConfig("eke_mouseflow/tracker/id");
    }

}