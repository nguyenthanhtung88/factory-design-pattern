<?php
abstract class Developer {
    public $type = '';
    public $price = 0;

    public function training() {
        echo $this->type . ' Developer is trained.<br/>';
    }

    public function deliver() {
        echo $this->type . ' Developer is delivered with ' . $this->price . '$.<br/>';
    }
}

class HcmPhpDeveloper extends Developer {
    public $type = 'HCM Php';
    public $price = 950;
}

class HcmRubyDeveloper extends Developer {
    public $type = 'HCM Ruby';
    public $price = 450;
}

class HcmAndroidDeveloper extends Developer {
    public $type = 'HCM Android';
    public $price = 100;
}

class DnPhpDeveloper extends Developer {
    public $type = 'DN Php';
    public $price = 900;
}

class DnRubyDeveloper extends Developer {
    public $type = 'DN Ruby';
    public $price = 400;
}

class DnAndroidDeveloper extends Developer {
    public $type = 'DN Android';
    public $price = 50;
}