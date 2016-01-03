<?php

class Makery_Visitorreport_Model_Mysql4_Visitorreport extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the bandbox_id refers to the key field in your database table.
        $this->_init('visitorreport/visitorreport', 'id_visitorreport');
    }
}

