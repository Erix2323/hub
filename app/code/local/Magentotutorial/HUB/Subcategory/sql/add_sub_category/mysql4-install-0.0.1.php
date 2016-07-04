<?php

$installer = $this;

$installer->startSetup();
Mage::register('isSecureArea', 1);
$category = Mage::getModel('catalog/category');
Mage::app()->setUpdateMode(false);
Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID); //Make admin store

//MEN
$category->setPath('4');
//$parentId = 4;// men id


//$category = Mage::getModel('catalog/category');
$category = Mage::getModel('catalog/category');
$parentCategory = Mage::getModel('catalog/category')->load($parentId);
$category->setPath($parentCategory->getPath());


$category->setName('Originals');
$category->setUrlKey('originals-m');
$category->setIsActive(1); // to make active
$category->setDisplayMode('PRODUCTS');
$category->setIsAnchor(1); // This is for active anchor
$category->setStoreId(Mage::app()->getStore()->getId());
$parentCategory = Mage::getModel('catalog/category')->load($parentId);
$category->setPath($parentCategory->getPath());
$category->save();

$category->setPath('4');

//$parentId = 4;// men id


//$category = Mage::getModel('catalog/category');
$category = Mage::getModel('catalog/category');
$parentCategory = Mage::getModel('catalog/category')->load($parentId);
$category->setPath($parentCategory->getPath());



$category->setName('Representative');
$category->setUrlKey('representative-m');
$category->setIsActive(1); // to make active
$category->setDisplayMode('PRODUCTS');
$category->setIsAnchor(1); // This is for active anchor
$category->setStoreId(Mage::app()->getStore()->getId());
$parentCategory = Mage::getModel('catalog/category')->load($parentId);
$category->setPath($parentCategory->getPath());
$category->save();

$category->setPath('4');

//$parentId = 4;// men id


//$category = Mage::getModel('catalog/category');

$category = Mage::getModel('catalog/category');
$parentCategory = Mage::getModel('catalog/category')->load($parentId);
$category->setPath($parentCategory->getPath());

$category->setName('Statement');
$category->setUrlKey('statement-m');
$category->setIsActive(1); // to make active
$category->setDisplayMode('PRODUCTS');
$category->setIsAnchor(1); // This is for active anchor
$category->setStoreId(Mage::app()->getStore()->getId());
$parentCategory = Mage::getModel('catalog/category')->load($parentId);
$category->setPath($parentCategory->getPath());
$category->save();


///Woman


$category->setPath('6');
//$parentId = 6;// men id




//$category = Mage::getModel('catalog/category');

$category = Mage::getModel('catalog/category');
$parentCategory = Mage::getModel('catalog/category')->load($parentId);
$category->setPath($parentCategory->getPath());


$category->setName('Originals');
$category->setUrlKey('originals-w');
$category->setIsActive(1); // to make active
$category->setDisplayMode('PRODUCTS');
$category->setIsAnchor(1); // This is for active anchor
$category->setStoreId(Mage::app()->getStore()->getId());
$parentCategory = Mage::getModel('catalog/category')->load($parentId);
$category->setPath($parentCategory->getPath());
$category->save();

$category->setPath('6');

//$parentId = 6;// men id




//$category = Mage::getModel('catalog/category');

$category = Mage::getModel('catalog/category');
$parentCategory = Mage::getModel('catalog/category')->load($parentId);
$category->setPath($parentCategory->getPath());



$category->setName('Representative');
$category->setUrlKey('representative-w');
$category->setIsActive(1); // to make active
$category->setDisplayMode('PRODUCTS');
$category->setIsAnchor(1); // This is for active anchor
$category->setStoreId(Mage::app()->getStore()->getId());
$parentCategory = Mage::getModel('catalog/category')->load($parentId);
$category->setPath($parentCategory->getPath());
$category->save();

$category->setPath('6');


//$parentId = 6;// men id



//$category = Mage::getModel('catalog/category');

$category = Mage::getModel('catalog/category');
$parentCategory = Mage::getModel('catalog/category')->load($parentId);
$category->setPath($parentCategory->getPath());



$category->setName('Statement');
$category->setUrlKey('statement-w');
$category->setIsActive(1); // to make active
$category->setDisplayMode('PRODUCTS');
$category->setIsAnchor(1); // This is for active anchor
$category->setStoreId(Mage::app()->getStore()->getId());
$parentCategory = Mage::getModel('catalog/category')->load($parentId);
$category->setPath($parentCategory->getPath());
$category->save();


$installer->endSetup();









//$category->setPath('1/2/23/')  //Creating as subcategory for category ID 23
//->setName('English')
//    ->setUrlKey('english')
//    ->setLanguageCode('ENG')
//    ->setIsActive(1)
//    ->setIncludeInMenu(1)
//    ->setDisplayMode(1)
//    ->setPageLayout(0)
//    ->save();
//
//$category->setPath('1/2/23/')
//    ->setName('French')
//    ->setUrlKey('french')
//    ->setLanguageCode('FRE')
//    ->setIsActive(1)
//    ->setIncludeInMenu(1)
//    ->setDisplayMode(1)
//    ->setPageLayout(0)
//    ->save();
//
//$category->setPath('1/2/23/')
//    ->setName('Spanish')
//    ->setUrlKey('spanish')
//    ->setLanguageCode('SPA')
//    ->setIsActive(1)
//    ->setIncludeInMenu(1)
//    ->setDisplayMode(1)
//    ->setPageLayout(0)
//    ->save();

//$installer->endSetup();