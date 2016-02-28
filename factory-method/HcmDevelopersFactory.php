<?php
require('DevelopersFactory.php');
require('Developer.php');

class HcmDevelopersFactory extends DevelopersFactory {
    public function createDeveloper($type) {
        switch ($type) {
            case 'HcmPhp':
                $developer = new HcmPhpDeveloper();
                break;
            case 'HcmRuby':
                $developer = new HcmRubyDeveloper();
                break;
            case 'HcmAndroid':
                $developer = new HcmAndroidDeveloper();
                break;
            
            default:
                $developer = null;
                break;
        }

        return $developer;
    }
}