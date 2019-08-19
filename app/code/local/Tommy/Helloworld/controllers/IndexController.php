<?php

class Tommy_Helloworld_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        // Zend_Debug::dump('hi tommy');
        // var_dump(111);
        echo 'Hello world';
    }
    public function xxooAction()
    {
        /*
            //url:http://m1-dev.test:8889/index.php/helloworld/index/xxoo
        */
        echo 'Hello xxoo';
    }
    public function paramsAction()
    {
       // var_dump($this->getRequest()->getParams() );
        echo '<dl>';
        foreach ($this->getRequest()->getParams() as $key => $value) {
            echo '<dt><strong>Param:</strong>' . $key . '</dt>';
            echo '<dt><strong>Value: </strong>' . $value . '</dt>';
        }
        echo '</dl>';
    }
}
