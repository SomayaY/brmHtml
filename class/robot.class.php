<?php

class Robot{
public $name ,$type ,$quations ,$answers , $image;

function __construct($name ,$type , $image , $quations ,$answers){
$this->name=$name;
$this->type=$type;
$this->image=$image;
$this->quations=$quations;
$this->answers=$answers;
}


function __toString(){
    $Result ='my name is :'.$this->name.'<br>';
    $Result .='my major is :'.$this->type.'<br>';

    $quationString="";
    foreach($this->quations as $value){
        $quationString.=$value.'<br>'; 
    }

    $Result .='i can answer this :'.$quationString;

    return $Result;
}

}

?>