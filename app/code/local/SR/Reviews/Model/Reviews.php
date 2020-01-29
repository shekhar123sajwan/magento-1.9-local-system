<?php

class SR_Reviews_Model_Reviews extends Mage_Core_Model_Abstract {
    public function __construct()
    {
        parent::_construct();
        $this->_init('reviews/reviews');
    }
}