<?php
require_once('I.php');

class C implements I{
    public function f(){
        echo 'This is interface f() from class C';
    }
}

$c = new C();
$c->f();