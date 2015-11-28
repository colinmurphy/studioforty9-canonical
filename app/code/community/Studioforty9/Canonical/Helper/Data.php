<?php

/**
 * URL Helper
 *
 * Class Studioforty9_Canonical_Helper_Data
 *
 * @category  StudioForty9
 * @package   Canonical
 * @author    StudioForty9 <info@studioforty9.com>
 * @copyright 2015 StudioForty9
 */
class Studioforty9_Canonical_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Gets the canonical URL
     *
     * @return string
     */
    public function getCanonicalUrl()
    {
        $url = Mage::helper('core/url')->getCurrentUrl();
        $pos = strpos($url, '?_');
        if ($pos !== false) {
            $url = substr($url, 0, $pos);
        }
        $pos = strpos($url, '?SID=');
        if ($pos !== false) {
            $url = substr($url, 0, $pos);
        }
        return $url;
    }

}