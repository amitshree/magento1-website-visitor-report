<?php

class Makery_Visitorreport_Block_Adminhtml_Visitorreport_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

  public function __construct()
  {

      parent::__construct();
      $this->setId('visitorreportGrid');
      $this->setDefaultSort('id_visitorreport');
      $this->setDefaultDir('ASC');
      $this->setSaveParametersInSession(true);
  }

  protected function _prepareCollection()
  {
      $collection = Mage::getModel('visitorreport/visitorreport')->getCollection();
      $this->setCollection($collection);
      return parent::_prepareCollection();
  }

  protected function _prepareColumns()
  {
      $this->addColumn('id_visitorreport', array(
          'header'    => Mage::helper('visitorreport')->__('ID'),
          'align'     =>'right',
          'width'     => '50px',
          'index'     => 'id_visitorreport',
      ));

      $this->addColumn('customer_email', array(
          'header'    => Mage::helper('visitorreport')->__('Customer Email'),
          'align'     =>'left',
          'index'     => 'customer_email',
      ));

       $this->addColumn('customer_ip', array(
          'header'    => Mage::helper('visitorreport')->__('Customer Ip'),
          'align'     =>'left',
          'index'     => 'customer_ip',
      ));    

      $this->addColumn('visited_time', array(
          'header'    => Mage::helper('visitorreport')->__('Visited Time'),
          'align'     =>'left',
          'index'     => 'visited_time',
      ));

      $this->addColumn('visited_url', array(
          'header'    => Mage::helper('visitorreport')->__('Visited Url'),
          'align'     =>'left',
          'index'     => 'visited_url',
      ));

      return parent::_prepareColumns();
  }

 

  public function getRowUrl($row)
  {
      //return $this->getUrl('*/*/edit', array('id' => $row->getId()));
  } 

}