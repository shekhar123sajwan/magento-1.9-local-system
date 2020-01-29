<?php
 
class SR_Reviews_Form extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        print_r('hi'); die;
        $this->loadLayout();
        // $model = Mage::getModel('reviews/reviews')->getCollection();
        // print_r($model); die;
        echo 'Hello developer...';
        
        $this->renderLayout();
    }
 
    public function saveAction()
    {
        echo 'Hello one more time...';
    }
}
?>