<?php
 
class SR_Reviews_FormController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    { 
        $this->loadLayout(); 
        $this->renderLayout();
    }
 
    public function saveAction()
    {
        $post = $this->getRequest()->getParams();

        if($post) {
            $model = Mage::getModel('reviews/reviews');
            $model->setData($post);
            $model->save();
            Mage::getSingleton('catalog/session')->addSuccess(__('Details was successfully saved.'));
        }
        $this->_redirect("/");

        // $model = Mage::getModel('reviews/reviews')->getCollection();
        // print_r($model->getData()); die;
        // echo 'Hello developer...';
    }
}
?>