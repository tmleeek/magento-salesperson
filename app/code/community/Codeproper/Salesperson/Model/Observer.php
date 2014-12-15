<?php
class Codeproper_Salesperson_Model_Observer
{
    /**
     * Save name and id of admin user who creates an order
     */
    public function salesOrderPlaceBefore($observer)
    {
        $order = $observer->getEvent()->getOrder();
        $admin = Mage::getSingleton('admin/session')->getUser();

        $order->setSalespersonId($admin->getUserId());
        $order->setSalespersonName($admin->getName());

        return $this;
    }

}