<?php
require('Developer.php');

class DnDevelopersFactory extends DevelopersFactory {
    public function createDeveloper($type) {
        switch ($type) {
            case 'DnPhp':
                $developer = new DnPhpDeveloper();
                break;
            case 'DnRuby':
                $developer = new DnRubyDeveloper();
                break;
            case 'DnAndroid':
                $developer = new DnAndroidDeveloper();
                break;
            
            default:
                $developer = null;
                break;
        }

        return $developer;
    }
}