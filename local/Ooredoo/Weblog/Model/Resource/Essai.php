<?php
class Ooredoo_Weblog_Model_Resource_Essai extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
         $this->_init('weblog/essai', 'essai_id');
    }
}