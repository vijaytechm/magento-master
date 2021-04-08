<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('memory_limit', '5G');
error_reporting(E_ALL);

use Magento\Framework\App\Bootstrap;
require 'app/bootstrap.php';

$bootstrap = Bootstrap::create(BP, $_SERVER);
$objectManager = $bootstrap->getObjectManager();

$state = $objectManager->get('Magento\Framework\App\State');
$state->setAreaCode('frontend');

$id = 2048;
$product = $objectManager->create('\Magento\Catalog\Model\Product')->load($id);

//print_r($product->getData());

echo $product->getName();
echo "<br>";
echo $product->getSku();
echo "<br>";
echo $product->getQty();
echo "<br>";
echo $product->isSalable();




?>