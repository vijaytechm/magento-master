/*
* *
*  @author DCKAP Team
*  @copyright Copyright (c) 2018 DCKAP (https://www.dckap.com)
*  @package Techm_CustomFields
*/

var config = {
   config: {
       mixins: {
           'Magento_Checkout/js/view/shipping': {
               'Techm_CustomFields/js/view/shipping': true
           }
       }
   },
   "map": {
       "*": {
           "Magento_Checkout/js/model/shipping-save-processor/default" : "Techm_CustomFields/js/shipping-save-processor"
       }
   }
};
