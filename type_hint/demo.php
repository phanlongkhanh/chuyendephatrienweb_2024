<?php
declare(strict_types=1);

require_once 'I.php';
require_once 'C.php';
require_once 'A.php';
require_once 'B.php';

class Demo {
    // Phương thức typeXReturnY
    public function typeXReturnY(string $type): ?object {
        echo __FUNCTION__ . "<br>";

        switch ($type) {
            case 'A':
                return new A();
            case 'B':
                return new B();
            case 'C':
                return new C();
            case 'I':
                return new class implements I {
                    public function f(): void {
                        echo "True .<br>";
                    }
                };
            default:
                return null; 
        }
    }
}
// Tạo đối tượng từ lớp Demo
$demo = new Demo();

//Gọi phương thức typeXReturnY với các loại khác nhau
$a = $demo->typeXReturnY('A');
if ($a instanceof A) { 
    $a->a1();
    echo "true<br>";
}
else
{
    echo "false<br>";
}

$b = $demo->typeXReturnY('B');
if ($b instanceof B) {
    $b->b1(); 
    echo "true<br>";
}
else
{
    echo "false<br>";
}

$c = $demo->typeXReturnY('C');
if ($c instanceof C) {
    $c->f(); 
    echo "true <br>";
}
else
{
    echo "false<br>";
}

$i = $demo->typeXReturnY('I');
if ($i instanceof I) {
    $i->f();
    echo "true <br>";
}
else
{
    echo "false<br>";
}
