<?php
class Makery_Visitorreport_Block_Adminhtml_Visitorreport extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_visitorreport';
    $this->_blockGroup = 'visitorreport';
    $this->_headerText = Mage::helper('visitorreport')->__('Visitors Report');
    parent::__construct();
    $this->_removeButton('add');
  }
}