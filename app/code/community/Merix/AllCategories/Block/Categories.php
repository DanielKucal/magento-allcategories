<?php

class Merix_AllCategories_Block_Categories extends Mage_Core_Block_Template
{
    public function _construct()
    {
        parent::_construct();
        $this->setTemplate('merix/allcategories.phtml');
    }

    public function getAllCategories()
    {
        /** @var Mage_Catalog_Model_Product $product */
        $product = Mage::registry('current_product');
        return $product->getCategoryCollection()->addAttributeToSelect('name');
    }
}