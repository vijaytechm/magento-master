<?php
/**
 * Hello Rewrite Product ListProduct Block
 *
 * @category    Webkul
 * @package     Webkul_Hello
 * @author      Webkul Software Private Limited
 *
 */
namespace Techm\Vijay\Block\Rewrite\Product;

class ListProduct extends \Magento\Catalog\Block\Product\ListProduct
{
    public function getLoadedProductCollection()
    {
        echo "Overriding block"; exit;
    }
}