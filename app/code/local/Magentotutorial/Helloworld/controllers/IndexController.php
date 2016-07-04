<?php
/**
 * Created by PhpStorm.
 * User: erix2_000
 * Date: 08/06/2016
 * Time: 11:47
 */

class Magentotutorial_Helloworld_IndexController extends Mage_Core_Controller_Front_Action {
    public function indexAction()
    {
      //  echo 'Hello World';
       //  phpinfo();

    // $this->loadLayout();
    //   $this->renderLayout();


        $thing_1 = new Varien_Object();
        $thing_1->setName('Richard');
        $thing_1->setAge(24);

        $thing_2 = new Varien_Object();
        $thing_2->setName('Jane');
        $thing_2->setAge(12);

        $thing_3 = new Varien_Object();
        $thing_3->setName('Spot');
        $thing_3->setLastName('The Dog');
        $thing_3->setAge(7);

        var_dump($thing_1->getName());
        var_dump($thing_3->getData());

        $collection_of_things = new Varien_Data_Collection();
        $collection_of_things
            ->addItem($thing_1)
            ->addItem($thing_2)
            ->addItem($thing_3);
        foreach($collection_of_things as $thing)
        {
            var_dump($thing->getData());
        }
        var_dump($collection_of_things->getFirstItem());
        var_dump($collection_of_things->getLastItem()->getData());

        var_dump( $collection_of_things->toXml() );

        var_dump($collection_of_things->getColumnValues('name'));

        var_dump($collection_of_things->getItemsByColumnValue('name','Spot'));


    }
    public function testAction()
    {
//        var_dump(
//            (string)
//            Mage::getModel('catalog/product')
//                ->getCollection()
//                ->addFieldToFilter('price',array('from'=>'10','to'=>'20'))
//                ->getSelect()
//        );
//        echo
//        (string)
//        Mage::getModel('catalog/product')
//            ->getCollection()
//            ->addFieldToFilter('sku',array('like'=>'a%'))
//            ->addFieldToFilter('sku',array('like'=>'b%'))
//            ->getSelect();

        $filter_a = array('like'=>'a%');
        $filter_b = array('like'=>'b%');
        echo
        (string)
        Mage::getModel('catalog/product')
            ->getCollection()
            ->addFieldToFilter('sku', array($filter_a, $filter_b))
            ->getSelect();

    }
    public function goodbyeAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}