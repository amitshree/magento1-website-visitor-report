<?php

class Makery_Visitorreport_Model_Visitorreport extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('visitorreport/visitorreport');
    }
}