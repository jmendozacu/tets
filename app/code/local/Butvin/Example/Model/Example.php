<?php

class Butvin_Example_Model_Example extends Mage_Core_Model_Abstract {

    public function _construct() {
        parent::_construct();
        $this->_init('example/example');
    }
}