<?php
class TravelOffer {
    private $id;
    private $title;
    private $destination;
    private $departureDate;
    private $returnDate;
    private $price;
    private $disponible;
    private $categorie;

    public function __construct($id, $title, $destination, $departureDate, $returnDate, $price,$disponoble, $categorie) {
        $this->id = $id;
        $this->title = $title;
        $this->destination = $destination;
        $this->departureDate = $departureDate;
        $this->returnDate = $returnDate;
        $this->price = $price;
        $this->disponible = $disponible;
        $this->categorie = $categorie;
       
    }
}