<?php

declare(strict_types=1);
define("EOL", "<br>");

include_once('A.php');
include_once('B.php');
include_once('C.php');
include_once('I.php');

class Demo
{


    public function typeA(): A
    {
        echo __FUNCTION__ . EOL;
        return new A();
    }


    public function typeB(): B
    {
        echo __FUNCTION__ . EOL;
        return new B();
    }


    public function typeC(): C
    {
        echo __FUNCTION__ . EOL;
        return new C();
    }


    public function typeI(): I
    {
        echo __FUNCTION__ . EOL;
        return new C(); 
    }


    public function typeNull(): ?C
    {
        echo __FUNCTION__ . EOL;
        return null;
    }


    public function typeC_ReturnA(): C
    {
        echo __FUNCTION__ . EOL;
        return new A(); 
    }


    public function typeC_ReturnB(): C
    {
        echo __FUNCTION__ . EOL;
        return new B(); 
    }


    public function typeC_ReturnC(): C
    {
        echo __FUNCTION__ . EOL;
        return new C(); 
    }

    public function typeC_ReturnNull(): ?C
    {
        echo __FUNCTION__ . EOL;
        return null; 
    }

    public function typeB_ReturnA(): B
    {
        echo __FUNCTION__ . EOL;
        return new A(); 
    }

    public function typeA_ReturnC(): A
    {
        echo __FUNCTION__ . EOL;
        return new C(); 
    }


    public function typeA_ReturnA(): A
    {
        echo __FUNCTION__ . EOL;
        return new A(); 
    }

    public function typeB_ReturnB(): B
    {
        echo __FUNCTION__ . EOL;
        return new B();
    }

    public function typeI_ReturnC(): I
    {
        echo __FUNCTION__ . EOL;
        return new C(); 
    }

    public function typeI_ReturnNull(): ?I
    {
        echo __FUNCTION__ . EOL;
        return null; 
    }

    public function typeI_ReturnC2(): I
    {
        echo __FUNCTION__ . EOL;
        return new C(); 
    }


    public function typeI_ReturnA(): I
    {
        echo __FUNCTION__ . EOL;
        return new A(); 
    }

    public function typeI_ReturnB(): I
    {
        echo __FUNCTION__ . EOL;
        return new B(); 
    }

    public function typeNull_ReturnC(): ?C
    {
        echo __FUNCTION__ . EOL;
        return new C(); 
    }

    public function typeA_ReturnNull(): ?A
    {
        echo __FUNCTION__ . EOL;
        return null; 
    }


    public function typeNull_ReturnA(): ?A
    {
        echo __FUNCTION__ . EOL;
        return new A(); 
    }

    public function typeNull_ReturnB(): ?B
    {
        echo __FUNCTION__ . EOL;
        return new B(); 
    }

    public function typeNull_ReturnI(): ?I
    {
        echo __FUNCTION__ . EOL;
        return new C(); 

    }
    public function typeC_ReturnNull2(): ?C
    {
        echo __FUNCTION__ . EOL;
        return null; 
    }
}

$demo = new Demo();

$demo->typeA(); 
$demo->typeB(); 
$demo->typeC(); 
$demo->typeI(); 
$demo->typeNull(); 

$demo->typeC_ReturnA(); 
$demo->typeC_ReturnB(); 
$demo->typeC_ReturnC(); 
$demo->typeC_ReturnNull(); 

try {
    $demo->typeB_ReturnA(); // False
} catch (TypeError $e) {
    echo "False: " . $e->getMessage() . EOL;
}

try {
    $demo->typeA_ReturnC(); 
} catch (TypeError $e) {
    echo "False: " . $e->getMessage() . EOL;
}

$demo->typeA_ReturnA(); 
$demo->typeB_ReturnB(); 
$demo->typeI_ReturnC(); 

$demo->typeI_ReturnNull(); 
$demo->typeI_ReturnC2(); 

try {
    $demo->typeI_ReturnA(); 
} catch (TypeError $e) {
    echo "False: " . $e->getMessage() . EOL;
}

try {
    $demo->typeI_ReturnB(); 
} catch (TypeError $e) {
    echo "False: " . $e->getMessage() . EOL;
}

$demo->typeNull_ReturnC(); 

$demo->typeA_ReturnNull(); 
$demo->typeNull_ReturnA(); 
$demo->typeNull_ReturnB(); 
$demo->typeNull_ReturnI(); 
$demo->typeC_ReturnNull2(); 