<?php
class Butvin_Example_Model_Resource_Example extends Mage_Core_Model_Resource_Db_Abstract {

    public function _construct() {
        $this->_init('example/example', 'example_id');
    }
}