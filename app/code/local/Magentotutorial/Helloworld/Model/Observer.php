<?php

/**
 * Created by PhpStorm.
 * User: erix2_000
 * Date: 09/06/2016
 * Time: 10:14
 */
class Magentotutorial_Helloworld_Model_Observer
{
    public function stopRegister($observer)
    {
        echo '<pre>';
        var_dump($observer->getEvent()->getCustomer()->getData('email'));
        
        
        
        die('xxxxxxxx');
    }
}