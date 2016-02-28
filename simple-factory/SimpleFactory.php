<?php
require('Developer.php');

class SimpleFactory {
    public function createDeveloper($type) {
        switch ($type) {
            case 'Php':
                $developer = new PhpDeveloper();
                break;
            case 'Ruby':
                $developer = new RubyDeveloper();
                break;
            case 'Android':
                $developer = new AndroidDeveloper();
                break;
            
            default:
                $developer = null;
                break;
        }

        return $developer;
    }
}