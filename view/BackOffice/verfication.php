<?php
   require '../../Model/TravelOffer.php';
   require '../../Controller/TravelOfferController.php';
   
       $offre1 = new TravelOffer(
           1, // Assuming id is auto-generated
           $_POST['title'],
           $_POST['destination'],
           $_POST['departureDate'],
           $_POST['returnDate'],
           $_POST['price'],
           $_POST['category'],
           $_POST['description']
       );
   
       echo "<h2>Var_dump of offre1:</h2>";
       var_dump($offre1);
   
       echo "<h2>ShowTravelOffer method output:</h2>";
       $controller = new TravelOfferController();
       $controller->showTravelOffer($offre1);
?>