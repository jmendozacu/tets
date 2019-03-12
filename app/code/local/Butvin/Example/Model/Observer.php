<?php

class Butvin_Example_Model_Observer {
    public function rebuildDataBeforeSave(Varien_Event_Observer $observer ) {

            $event = $observer->getEvent();
            $name = $event->getExample();


        //$controller = $observer->getEvent()->getData('controller_action');
        var_dump($name); die('ss');
    }
}