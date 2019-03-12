<?php

# As define block type of phtml is '<module>/<module>' and the block class is
# <Namespace>_<Module>_Block_<Module> and <Module>.php Located in
# app\code\local\<Namespace>\<Module>\Block\<Module>.php


class Butvin_Example_Block_Example extends Mage_Core_Block_Template {

    protected $_Collection  = null;

    public function getExampleCollection() {
        if(is_null($this->_Collection)){
            $this->_Collection = Mage::getModel('example/example')->getCollection();
        }
        return $this->_Collection;
    }

    public function getFormAction() {
        return $this->getUrl('example/index/saveExample');
    }
}


#<block type="stack_form/form" name="any_unique_name" template="path/to/your/form.phtml" />
