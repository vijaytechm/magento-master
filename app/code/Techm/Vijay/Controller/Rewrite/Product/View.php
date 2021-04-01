<?php
	/**
	 * Hello Rewrite Product View Controller
	 *
	 * @category    Webkul
	 * @package     Webkul_Hello
	 * @author      Webkul Software Private Limited
	 *
	 */
	namespace Zuan\Vijay\Controller\Rewrite\Product;

	class View extends \Magento\Catalog\Controller\Product\View
	{
		/**
		 * @return \Magento\Framework\Controller\Result\Redirect|\Magento\Framework\View\Result\Page
		 */
		public function execute()
		{
			echo "Controller overriden"; exit;
			//return parent::execute();
		}
	}