<?php

class Butvin_Example_IndexController extends Mage_Core_Controller_Front_Action {
    public function indexAction() {


        echo 'IndexController (index/index) <br />';
//        var_dump(Mage::getUrl()); die();
//        var_dump($this); die();

        $this->loadLayout();
        $this->renderLayout();
    }

    /**
     *         http://localhost/example/index/exampleAction/id/1
     */
    public function showAction() {

        $params = $this->getRequest()->getParams();
        $exampleModel = Mage::getModel('example/example');
        // echo 'Load example with ID = ' . $params['id'];
        $exampleModel->load($params['id']);
        $item = $exampleModel->getData();
        var_dump($item);
    }

    public function saveExampleAction()
    {
        $post = $this->getRequest()->getPost();

        $name = $post ? $post['ex_name'] : false;
//        if ($post) $name = $post['ex_name'];
        $created_at = date('Y-m-d H:i:s', time());

        $item = Mage::getModel('example/example');


        $item->setName($name);




        $item->setDate($created_at);
        $data = array( 'example' => $name,);
        Mage::dispatchEvent('controller_action_postdispatch_example_index_saveExample', $data);
        $item->save();
        $this->_redirect('example');
    }
}