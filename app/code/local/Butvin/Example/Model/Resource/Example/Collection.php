<?php
/**
 * Class:   Butvin_Example_Model_Resource_Example_Collection
 * File:    app/code/local/Butvin/Example/Model/Resource/Example/Collection.php
 * Rule:    app/code/local/<Namespace>/<Module>/Model/Resource/<Module>/Collection.php
 */

class Butvin_Example_Model_Resource_Example_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract {
    protected function _constuct(){
        $this->_init('example/example');
    }
}
