<?php
 /**
* Ti Order Comment Module
*
* @category    Ti
* @package     Ti_OrderComment
* @copyright   Copyright (c) 2014 Ti Technologies (http://www.titechnologies.in)
* @link        http://www.titechnologies.in
*/

class Ti_OrderComment_Helper_Data extends Mage_Core_Helper_Abstract
{

/**
    * Get product image url in grid
    *
    * @param string $order_id -pass order id
    * @return string
    */

    public function getordercomments($order_id){
        $collection = Mage::getModel('sales/order_status_history')->getCollection();
        $collection->getSelect()->order('entity_id DESC');
        $collection->addFieldToFilter('parent_id',$order_id);
        foreach ($collection as $row) {
        $comments=$row['comment'];
        }
        return $comments;
    }
}
