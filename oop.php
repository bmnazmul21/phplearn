<?php 


// class car{

//     public $brand_name;
//     public function set_brand_name( $brand ){
//         $this->brand_name = $brand;
//     }

//     public function get_the_brand_name(){
//         return $this->brand_name;
//     }
// }
// $object1 = new car();

// $object1->set_brand_name('sadia');
// echo $object1->get_the_brand_name();

// echo '<br>'.'----------'.'<br>';
// $object2 = new car();
// $object2->set_brand_name('toyota');
// echo $object2->get_the_brand_name();

class bus{

    public $brand_name;

    public function __construct( $brandd ){
        $this->brand_name = $brandd;
    }

    public function set_brand_name( $brand ){
        $this->brand_name = $brand;
    }

    public function get_brand_name(){
        return $this->brand_name;
    }
}

$object1 = new bus('sadia');

// $object1->set_brand_name('BMW');
echo $object1->get_brand_name();

 echo '<br>'.'----------'.'<br>';

 $object2 = new bus('mim');
//  $object2->set_brand_name('toyota');
 echo $object2->get_brand_name();

