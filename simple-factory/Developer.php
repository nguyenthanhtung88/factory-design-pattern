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

class PhpDeveloper extends Developer {
    public $type = 'Php';
    public $price = 1000;
}

class RubyDeveloper extends Developer {
    public $type = 'Ruby';
    public $price = 500;
}

class AndroidDeveloper extends Developer {
    public $type = 'Android';
    public $price = 150;
}
