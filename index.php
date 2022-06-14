<?php
// classi necessarie per creare uno shop online con le seguenti caratteristiche
// L'e-commerce vende prodotti per gli animali.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
// Il pagamento avviene con la carta di credito, che non deve essere scaduta.

require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Games.php";
require_once __DIR__ . "/PetHouse.php";
require_once __DIR__ . "/User.php";

$enova_crocchette_1 = new Food("Crocchette Mono", 62.5, "Enova", "Pet Snacks", "Pollo", "Per cani", "+16 mesi", "12kg" );
var_dump($enova_crocchette_1);

$enova_crocchette_2 = new Food("Crocchette Mono", 57.25, "Enova", "pet Snacks", "Angello", "Per cani", "<16 mesi", "10kg");
var_dump($enova_crocchette_2);

$pallina_tennis = new Games("Pallina Tennis", 6.50, "KONG", "Pet Games", "Gomma e tessuto sintetico", "Adatto a ogni taglia di animale");
var_dump($pallina_tennis);

$osso_gomma = new Games("Osso in gomma per massaggio denti e gengive", 8.30, "Camon", "Pet Games", "Gomma 100% Naturale", "Pet size: +20Kg");
var_dump($osso_gomma);

$casetta_m = new PetHouse("Cuccia Domus", 195, "FERPLAST", "PetHouse", "L 49 CM x W 64 CM x H 44 CM", "Per esterni");
var_dump($casetta_m);

$casetta_xl = new PetHouse("Cuccia Luxus", 275, "MONDIAL PET", "PetHouse", "L 75 CM x W 100 CM x H 68 CM", "Per esterni");
var_dump($casetta_xl);

$cuccetta = new PetHouse("Cuscino imbottitura soffice", 23, "Pet around you", "PetHouse", "35 CM x 40 CM", "Adatto agli interni");
var_dump($cuccetta);

$federico = new User("Federico", "fede180600@libero.it", false);
$federico->addProductToCart($pallina_tennis);
$federico->addProductToCart($enova_crocchette_1);
echo $federico->getPriceDiscounted();

?>
