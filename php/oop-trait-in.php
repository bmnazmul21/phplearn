<?php

trait Formating{
    public function formate_datails( $brand, $color){
        return " brand name :" . $brand ."<br>". "color name: " . $color;


    }
}

interface CarInterface{
    public function get_details();
}

class car implements CarInterface {
    use Formating;
    public $color;
    public $brand;

    //make a conts 
    const DEFAULTCOLOR = 'yelloow';

    public function __construct($brand, $color = self::DEFAULTCOLOR ){
        $this->brand = $brand;
        $this->color = $color;
    }

    public function get_details(){
        return $this->formate_datails( $this->brand, $this->color);
    }

}

class toyota extends car{

    public $model;

    public function __construct( $color, $model){
        if( $color === ""){
            $color= self::DEFAULTCOLOR;
        }

        parent::__construct( 'Toyota', $color);
        $this->model = $model;
    }


        public function get_details(){
        return parent::get_details() ."<br>". "Model Name :" . $this->model;
    }

}

$object = new toyota( "",'corolla');

echo $object->get_details();


