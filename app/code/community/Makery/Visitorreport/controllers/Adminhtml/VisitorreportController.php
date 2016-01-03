<?php
class Makery_Visitorreport_Adminhtml_VisitorreportController extends Mage_Adminhtml_Controller_action
{
	public function indexAction() {

        $this->_initAction()
			->renderLayout();																							
}


	protected function _initAction() {
		$this->loadLayout()
			->_setActiveMenu('visitorreportmenu/visitorreport')
			->_addBreadcrumb(Mage::helper('adminhtml')->__('Visitors Report'), Mage::helper('adminhtml')->__('Visitors Report'));
		return $this;
	} 
}