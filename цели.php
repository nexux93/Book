<?php

class boy {
    public $boy = 'boys';
    var $name;
    var $addr;
    public function boys() {
        echo "<h3>boys</h3>";
    }
}
#наследование
class honour extends boy {
    public $god = 'победа';
    public function feat() {
        echo $this-> god;
    }
}
class love extends boy {
    public function loveIs ($kiss){
        echo $this-> $kiss;
    }
}

$a= new boy();
echo $a->boys();

