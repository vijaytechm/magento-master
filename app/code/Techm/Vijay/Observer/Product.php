<?php

namespace Techm\Vijay\Observer;

class Product implements \Magento\Framework\Event\ObserverInterface
{
	public function execute(\Magento\Framework\Event\Observer $observer)
	{
		$collection=$observer->getEvent()->getData('collection');



		foreach ($collection as $product){

		    $name=$product->getData('name');
			$price=$product->getData('price');

			if ($price<60){

				$name .='--So cheap';
			}
			else{
               
               $name .='--So expensive';

			}
			$product->setData('name',$name);
			}
		}
	}