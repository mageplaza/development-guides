<?php
namespace Mageplaza\HelloWorld\Block\Product;

use Magento\Catalog\Block\Product\View\Description;

/**
 * Class CustomTab
 * @package Mageplaza\HelloWorld\Block\Product
 */
class CustomTab extends Description
{
    public function _construct()
    {
        $this->setTemplate('Mageplaza_HelloWord::product/custom_tab.phtml');
    }
}
