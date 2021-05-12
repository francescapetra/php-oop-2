<?php 

    class Product{
        
        public $name;
        public $color;
        public $description;
        public $price;
        
        public function __construct($_name, $_color, $_description, $_price){
            $this->name = $_name;
            $this->color = $_color;
            $this->description = $_description;
            $this->price = $_price;

        }
        // public function getAuthor(){
        //     return $this->name;
        // }  
    }
    class Hightech extends Product{

        public $power_source;
        public $assurance;
        public $compatibility;

    }
    $usb = new Hightech("DSK", "black", "usb pen", "15$");
    $usb->power_source = 'Charge';
    $usb->assurance = '2 years';
    $usb->compatibility = 'PC';

    var_dump($usb);


    class Clothes extends Product
    {
        public $size;
        public $tissue;
        public $season;

        public function __construct($_name, $_color, $_description, $_price, $_size, $_tissue, $_season){
            parent:: __construct($_name, $_color, $_description, $_price);
            $this->size = $_size;
            $this->tissue = $_tissue;
            $this->season = $_season;
            
        }
    }
    $coat = new Clothes("Teddy Coat", "Camel", "Warm lapin coat", "250$", "42EU", "Cashmere and Lapin", "Winter");
    
    var_dump($coat);

    

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product</title>

    <body>
 
    </body>
</html>