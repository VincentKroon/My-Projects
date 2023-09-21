<?php 
require "connect.php";

// Vincent Kroon

class Artikel{
    public int $artId;
    public string $artOmschrijving;
    public float $artInkoop;
    public float $artVerkoop;
    public int $artVoorraad;
    public int $artMinVoorraad;
    public int $artMaxVoorraad;
    public int $artLocatie;
    public int $levId;

    // wanneer de class wordt aangemaakt met | new Artikel() | dan worden er standaard gegevens ingezet op de variabelen bovenaan
    public function __construct($artOmschrijving="", $artInkoop=0, $artVerkoop=0, $artVoorraad=0, $artMinVoorraad=0, $artMaxVoorraad=0, $artLocatie=0, $levId=0, $artid=0){
        $this->artOmschrijving = $artOmschrijving;
        $this->artInkoop = $artInkoop;
        $this->artVerkoop = $artVerkoop;
        $this->artVoorraad = $artVoorraad;
        $this->artMinVoorraad = $artMinVoorraad;
        $this->artMaxVoorraad = $artMaxVoorraad;
        $this->artLocatie = $artLocatie;
        $this->levId = $levId;
        $this->artId = $artid;
    }

    // Getters
    public function getArtId(){
        return $this->artId;
    }
    public function getArtOmschrijving(){
        return $this->artOmschrijving;
    }
    public function getArtInkoop(){
        return $this->artInkoop;
    }
    public function getArtVerkoop(){
        return $this->artVerkoop;
    }
    public function getArtVoorraad(){
        return $this->artVoorraad;
    }
    public function getArtMinVoorraad(){
        return $this->artMinVoorraad;
    }
    public function getArtMaxVoorraad(){
        return $this->artMaxVoorraad;
    }
    public function getArtLocatie(){
        return $this->artLocatie;
    }
    public function getLevId(){
        return $this->levId;
    }

    // Setters
    public function setArtId($artId){
        $this->artId = $artId;
    }
    public function setArtOmschrijving($artOmschrijving){
        $this->artOmschrijving = $artOmschrijving;
    }
    public function setArtInkoop($artInkoop){
        $this->artInkoop = $artInkoop;
    }
    public function setArtVerkoop($artVerkoop){
        $this->artVerkoop = $artVerkoop;
    }
    public function setArtVoorraad($artVoorraad){
        $this->artVoorraad = $artVoorraad;
    }
    public function setArtMinVoorraad($artMinVoorraad){
        $this->artMinVoorraad = $artMinVoorraad;
    }
    public function setArtMaxVoorraad($artMaxVoorraad){
        $this->artMaxVoorraad = $artMaxVoorraad;
    }
    public function setArtLocatie($artLocatie){
        $this->artLocatie = $artLocatie;
    }

    // CRUD
    public function createArtikel(){
        // Connectie maken met de database 
        $db = new Database("localhost","root","","project6");

        // gegevens in variabelen zetten via de getters
        $artId = NULL; // wordt automatische aangemaakt door de database
        $artOmschrijving = $this->getArtOmschrijving();
        $artInkoop = $this->getArtInkoop();
        $artVerkoop = $this->getArtVerkoop();
        $artVoorraad = $this->getArtVoorraad();
        $artMinVoorraad = $this->getArtMinVoorraad();
        $artMaxVoorraad = $this->getArtMaxVoorraad();
        $artLocatie = $this->getArtLocatie();
        $levId = $this->getLevId();

        // gegevens in de juiste database tabel zetten
        $db->SQLCommando("insert into artikelen values 
        (:artId, :artOmschrijving, :artInkoop, :artVerkoop, :artVoorraad, :artMinVoorraad, :artMaxVoorraad, :artLocatie, :levId)
        ", [
            "artId" => $artId,
            "artOmschrijving" => $artOmschrijving,
            "artInkoop" => $artInkoop,
            "artVerkoop" => $artVerkoop,
            "artVoorraad" => $artVoorraad,
            "artMinVoorraad" => $artMinVoorraad,
            "artMaxVoorraad" => $artMaxVoorraad,
            "artLocatie" => $artLocatie,
            "levId" => $levId
        ]);
    }

    public function readArtikel(){
        $db = new Database("localhost","root","","project6");

        // Alle artikel gegevens in de database opvragen voor elk bestaand artikel ID
        $artikellijst = $db->SQLCommando("select * from artikelen where 1",[]);

        // Alle artikel gegevens laten zien per uniek artikel ID
        foreach($artikellijst as $artikel){
            $this->artId = $artikel["artId"]; 
            echo "<p>Artikel ID: " . $this->artId . "<br>";

            echo "Omschrijving: " . $this->artOmschrijving = $artikel["artOmschrijving"] . "<br>";
            $this->artInkoop = $artikel["artInkoop"];
            echo "Inkoop: " . $this->artInkoop . "<br>";
            $this->artVerkoop = $artikel["artVerkoop"];
            echo "Verkoop: " . $this->artVerkoop . "<br>";
            $this->artVoorraad = $artikel["artVoorraad"];
            echo "Huidige voorraad: " . $this->artVoorraad . "<br>";
            $this->artMinVoorraad = $artikel["artMinVoorraad"]; 
            echo "Minimale voorraad: " . $this->artMinVoorraad . "<br>";
            $this->artMinVoorraad = $artikel["artMinVoorraad"];
            echo "Maximale voorraad: " . $this->artMaxVoorraad . "<br>";
            $this->artLocatie = $artikel["artLocatie"];
            echo "Locatie: " . $this->artLocatie . "<br>";
            $this->levId = $artikel["levId"];
            echo "Leveranciers ID: " . $this->levId . "<br><br></p>";
        }
    }

    public function updateArtikel($artId){
        $db = new Database("localhost","root","","project6");
        $artOmschrijving = $this->getArtOmschrijving();
        $artInkoop = $this->getArtInkoop();
        $artVerkoop = $this->getArtVerkoop();
        $artVoorraad = $this->getArtVoorraad();
        $artMinVoorraad = $this->getArtMinVoorraad();
        $artMaxVoorraad = $this->getArtMaxVoorraad();
        $artLocatie = $this->getArtLocatie();
        $levId = $this->getLevId();

        // Veranderen van de gegevens in de database gebaseerd op de gegeven artikel id
        $db->SQLCommando(
        "update artikelen set
                artOmschrijving  = :artOmschrijving,
                artInkoop        = :artInkoop,
                artVerkoop       = :artVerkoop,
                artVoorraad      = :artVoorraad,
                artMinVoorraad   = :artMinVoorraad,
                artMaxVoorraad   = :artMaxVoorraad, 
                artLocatie       = :artLocatie,
                levId            = :levId
        where   artid = :artid"
        ,[
            "artid" => $artId,
            "artOmschrijving" => $artOmschrijving,
            "artInkoop" => $artInkoop,
            "artVerkoop" => $artVerkoop,
            "artVoorraad" => $artVoorraad,
            "artMinVoorraad" => $artMinVoorraad,
            "artMaxVoorraad" => $artMaxVoorraad,
            "artLocatie" => $artLocatie,
            "levId" => $levId
        ]);

        echo "<p>Het artikel is gewijzigd. <br /></p>";
    }

    public function deleteArtikel($artId){
        $db = new Database("localhost","root","","project6");
        
        // Checken waar de artikel id in de database overeenkomt met de gegeven artikel id
        $db->SQLCommando("delete from artikelen where artId  = :artId", ["artId" => $artId]);
    }
    
    public function searchArtikelId($artId){
        $db = new Database("localhost","root","","project6");

        // Zoeken op Artikel ID in de database
        $artikelen = $db->SQLCommando("select * from artikelen where artid = :artid", ["artid" => $artId]);
    
        // artikel gegevens opvragen
        foreach ($artikelen as $artikel) {
            $this->artId = $artikel["artId"];
            $this->artOmschrijving = $artikel["artOmschrijving"];
            $this->artInkoop = $artikel["artInkoop"];
            $this->artVerkoop = $artikel["artVerkoop"];
            $this->artVoorraad = $artikel["artVoorraad"];
            $this->artMinVoorraad = $artikel["artMinVoorraad"];
            $this->artMaxVoorraad = $artikel["artMaxVoorraad"];
            $this->artLocatie = $artikel["artLocatie"];
            $this->levId = $artikel["levId"];
        }
    }

    public function searchArtOmschrijving($artOmschrijving){
        $db = new Database("localhost","root","","project6");

        // checken waar Artikel omschrijving in de database overeenkomt met de gegeven omschrijving
        $artikelen = $db->SQLCommando("select * from artikelen where artomschrijving = :artomschrijving", ["artomschrijving" => $artOmschrijving]);
    
        // artikel gegevens opvragen
        foreach ($artikelen as $artikel) {
            $this->artId = $artikel["artId"];
            $this->artOmschrijving = $artikel["artOmschrijving"];
            $this->artInkoop = $artikel["artInkoop"];
            $this->artVerkoop = $artikel["artVerkoop"];
            $this->artVoorraad = $artikel["artVoorraad"];
            $this->artMinVoorraad = $artikel["artMinVoorraad"];
            $this->artMaxVoorraad = $artikel["artMaxVoorraad"];
            $this->artLocatie = $artikel["artLocatie"];
            $this->levId = $artikel["levId"];
        }
    }

    // Het laten zien van de huidige gegevens in de class met gebruik van getters
    public function afdrukkenArtikel(){
        echo "<p>Artikel ID: " . $this->getArtId() . "<br>";
        echo "Omschrijving: " . $this->getArtOmschrijving() . "<br>";
        echo "Inkoop: " . $this->getArtInkoop() . "<br>";
        echo "Verkoop: " . $this->getArtVerkoop() . "<br>";
        echo "Huidige voorraad: " . $this->getArtVoorraad() . "<br>";
        echo "Minimale Voorraad: " . $this->getArtMinVoorraad() . "<br>";
        echo "Maximale Voorraad: " . $this->getArtMaxVoorraad() . "<br>";
        echo "Locatie: " . $this->getArtLocatie() . "<br>";
        echo "Leveranciers ID: " . $this->getLevId() . "<br></p>";
    }
}