<?php

namespace Acme\Tools;

use DateTime;

class Foo{

    public function doAwesomeThings(){
        echo"hi Foo!\n";

        $dt = new  DateTime();

        echo $dt-> getTimestamp()."\n";
    }
}
?>