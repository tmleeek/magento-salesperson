<?php
class Codeproper_Salesperson_Block_Adminhtml_Sales_Order_View_Tab_Salesperson
    extends Mage_Adminhtml_Block_Sales_Order_Abstract
    implements Mage_Adminhtml_Block_Widget_Tab_Interface
{
    public function _construct() {
        parent::_construct();
        $this->setTemplate('codeproper/salesperson/sales/order/view/tab/salesperson.phtml');
    }

    public function getTabLabel() {
        return Mage::helper('codeproper_salesperson')->__('Salesperson');
    }

    public function getTabTitle() {
        return Mage::helper('codeproper_salesperson')->__('Salesperson');
    }

    public function canShowTab() {
        return true;
    }

    public function isHidden() {
        return false;
    }
}
?>