<?php

class car{

    public $color;
    public $brand;

    public function __construct($brand, $color ){
        $this->brand = $brand;
        $this->color = $color;
    }

    public function get_details(){
        return " brand name :" . $this->brand ."<br>". "color name: " . $this->color;
    }

}

class toyota extends car{

    public $model;

    public function __construct( $color, $model){
        parent::__construct( 'Toyota', $color);
        $this->model = $model;
    }

        public function get_details(){
        return parent::get_details() ."<br>". "Model Name :" . $this->model;
    }

}

$object = new toyota( 'red', 'corolla');

echo $object->get_details();


