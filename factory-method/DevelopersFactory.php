<?php
abstract class DevelopersFactory {
    public function produceDeveloper($type) {
        $developer = $this->createDeveloper($type);

        $developer->training();
        $developer->deliver();

        return $developer;
    }

    abstract public function createDeveloper($type);
}