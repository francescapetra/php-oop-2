<?php

    class Product
    {

        public $name;
        public $color;
        public $description;
        public $price;
        protected $code;

        public function __construct($_name, $_color, $_description, $_price, $_code)
        {
            $this->name = $_name;
            $this->color = $_color;
            $this->description = $_description;
            $this->price = $_price;
            $this->code = $_code;
        }
        public function getCode()
        {
            return $this->code;
        }
    }
    class Hightech extends Product
    {

        public $power_source;
        public $assurance;
        public $compatibility;
    }
    $usb = new Hightech("DSK", "Black", "Usb pen", "15$", "65758");
    $usb->power_source = 'Charge';
    $usb->assurance = '2 years';
    $usb->compatibility = 'PC';

    var_dump($usb);


    class Clothes extends Product
    {
        public $size;
        public $tissue;
        public $season;

        public function __construct($_name, $_color, $_description, $_price, $_code, $_size, $_tissue, $_season)
        {
            parent::__construct($_name, $_color, $_description, $_price, $_code);
            $this->size = $_size;
            $this->tissue = $_tissue;
            $this->season = $_season;
        }
    }
    $coat = new Clothes("Teddy Coat", "Camel", "Warm Lapin coat", "250$", "78908", "42EU", "Cashmere and Lapin", "Winter");

    class Seller
    {
        public $vendor;
    }

    $user1 = new Seller();
    $user1->seller = "Ufficio Tech";

    $user2 = new Seller();
    $user2->seller = "Peccato Moda";

    var_dump($coat);

    $preview = [
        $usb,
        $coat,
    ];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>

    <body>
        <h1>E-commerce Products</h1>
        <div>
            <h2>section->> HIGH-TECH</h2>
            <p><strong>Nome prodotto:</strong> <?php echo $usb->name; ?></p>
            <p><strong>Colore:</strong> <?php echo $usb->color; ?></p>
            <p><strong>Descrizione:</strong> <?php echo $usb->description; ?></p>
            <p><strong>Prezzo:</strong> <?php echo $usb->price; ?></p>
            <p><strong>Alimentazione:</strong> <?php echo $usb->power_source; ?></p>
            <p><strong>Garanzia:</strong> <?php echo $usb->assurance; ?></p>
            <p><strong>Dispositivo compatibile:</strong> <?php echo $usb->compatibility; ?></p>
            <p><strong>Codice prodotto:</strong> <?php echo $usb->getCode(); ?></p>
            <p><strong>Venduto da:</strong> <?php echo $user1->seller; ?></p>
        </div>
        <div>
            <h2>section->> CLOTHES</h2>
            <p><strong>Nome prodotto:</strong> <?php echo $coat->name; ?></p>
            <p><strong>Colore:</strong> <?php echo $coat->color; ?></p>
            <p><strong>Descrizione:</strong> <?php echo $coat->description; ?></p>
            <p><strong>Prezzo:</strong> <?php echo $coat->price; ?></p>
            <p><strong>Alimentazione:</strong> <?php echo $coat->size; ?></p>
            <p><strong>Garanzia:</strong> <?php echo $coat->tissue; ?></p>
            <p><strong>Dispositivo compatibile:</strong> <?php echo $coat->season; ?></p>
            <p><strong>Codice prodotto:</strong> <?php echo $coat->getCode(); ?></p>
        </div>
        <div>
            <h2>section->> BEST SELLER</h2>
            <?php foreach ($preview as $post) { ?>
                <strong>Prodotto Must Have: </strong>
                <a href="#">
                    <p><?php echo $post->name; ?></p>
                </a>
                <p><strong>Prezzo: </strong><?php echo $post->price; ?></p>
            <?php } ?>
        </div>
    </body>

</html>