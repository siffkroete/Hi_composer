<?php 

namespace vitalis\HelloWorld;

class Index
{
    public function greet($greet = "Hello World")
    {
        return $greet;
    }
}

$index = new Index();
echo $index->greet();

?>