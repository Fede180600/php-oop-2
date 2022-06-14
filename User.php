<?php 
class User {
    public $name;
    public $email;
    public $registered;
    public $cart = [];

    function __construct($_name, $_email, $_registered)
    {
        $this->name = $_name;
        $this->email = $_email;
        $this->registered = $_registered;
    }

    public function addProductToCart($_product) {
        $this->cart[] = $_product;
    }

    public function getPrice() {
        $total_price = 0;
        foreach($this->cart as $item) {
            $total_price += $item->price;
        }
        return $total_price;
    }

    function getPriceDiscounted() {
        $discounted_price = 0;
        if($this->registered === true) {
            $discounted_price = ($this->getPrice() - ($this->getPrice() * 20) / 100);
        } else {
           $discounted_price = "Prezzo pieno: €" . $this->getPrice() . " Registrati e non perderti il 20% di sconto";
        }
        return $discounted_price;
    }
}
?>