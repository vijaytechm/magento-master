<?php
	
	namespace Techm\Vijay\Plugin\Model;

	class Product
	{
		
		public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name) {

			$name="Vijay";


			return array($name);
		}

		public function afterGetName(\Magento\Catalog\Model\Product $subject, $result) {
			return "Apple ".$result; // Adding Apple in product name
		}

       public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
      {
        return 1000+$result;
    }

	}

