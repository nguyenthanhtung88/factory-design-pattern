<?php
require('SimpleFactory.php');

class DevelopersFactory {
    public $simpleFactory;

    public function __construct() {
        $this->simpleFactory = new SimpleFactory();
    }

    public function produceDeveloper($type) {
        $developer = $this->simpleFactory->createDeveloper($type);

        $developer->training();
        $developer->deliver();

        return $developer;
    }
}