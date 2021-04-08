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

$id = 3;


$customer_data = $objectManager->create('\Magento\Customer\Model\Customer')->setWebsiteId(1)->loadByEmail('vijay@test.com');


 

$customer_data->getFirstname(); 
$customer_data->getWebsiteId(); 

/*$customerGroupsCollection = $objectManager->create('\Magento\Customer\Model\ResourceModel\Group\Collection');



//echo "<pre>";
//print_r($customerGroupsCollection->getdata());
//echo "</pre>";

foreach($customerGroupsCollection->getData() as $group){
	if ($group['customer_group_code']=='Retailer'){
		$group_id=$group['customer_group_id'];
	}
}*/

$customer = $objectManager->create('\Magento\Customer\Model\Customer')->getCollection()
->addAttributeToSelect("*")
->addAttributeToFilter("entity_id", array("eq" => 2))
->load();

echo "<pre>";
print_r($customer->getData());
echo "</pre>";



?>