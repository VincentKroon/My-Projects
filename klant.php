<?php
require "connect.php";

// Vincent Kroon

class Klant{
    public int $klantId;
    public string $klantnaam;
    public string $klantEmail;
    public string $klantAdres;
    public string $klantPostcode;
    public string $klantWoonplaats;

    // wanneer de class wordt aangemaakt met | new Klant() | dan worden er standaard gegevens ingezet op de variabelen bovenaan
    public function __construct($klantnaam="", $klantEmail="", $klantAdres="", $klantPostcode="", $klantWoonplaats="", $klantId=0){
        $this->klantnaam = $klantnaam;
        $this->klantEmail = $klantEmail;
        $this->klantAdres = $klantAdres;
        $this->klantPostcode = $klantPostcode;
        $this->klantWoonplaats = $klantWoonplaats;
        $this->klantId = $klantId;
    }

    // Getters
    public function getKlantId(){
        return $this->klantId;
    }

    public function getKlantNaam(){
        return $this->klantnaam;
    }

    public function getKlantEmail(){
        return $this->klantEmail;
    }

    public function getKlantAdres(){
        return $this->klantAdres;
    }

    public function getKlantPostcode(){
        return $this->klantPostcode;
    }

    public function getKlantWoonplaats(){
        return $this->klantWoonplaats;
    }

    // Setters
    public function setKlantId($klantId){
        $this->klantId = $klantId;
    }

    public function setKlantNaam($klantnaam){
        $this->klantnaam = $klantnaam;
    }

    public function setKlantEmail($klantEmail){
        $this->klantEmail = $klantEmail;
    }

    public function setKlantAdres($klantAdres){
        $this->klantAdres = $klantAdres;
    }

    public function setKlantPostcode($klantPostcode){
        $this->klantPostcode = $klantPostcode;
    }

    public function setKlantWoonplaats($klantWoonplaats){
        $this->klantWoonplaats = $klantWoonplaats;
    }

    // CRUD functies
    public function createKlant(){
        // Connectie maken met de database 
        $db = new Database("localhost","root","","project6");

        // gegevens in variabelen zetten via de getters
        $klantId = NULL; // wordt automatische aangemaakt door de database
        $klantnaam = $this->getklantNaam();
        $klantEmail = $this->getklantEmail();
        $klantAdres = $this->getklantAdres();
        $klantPostcode = $this->getKlantPostcode();
        $klantWoonplaats = $this->getKlantWoonplaats();

        // gegevens in de juiste database tabel zetten
        $db->SQLCommando("insert into klanten values 
        (:klantId, :klantnaam, :klantEmail, :klantAdres, :klantPostcode, :klantWoonplaats)
        ", [
            "klantId" => $klantId,
            "klantnaam" => $klantnaam,
            "klantEmail" => $klantEmail,
            "klantAdres" => $klantAdres,
            "klantPostcode" => $klantPostcode,
            "klantWoonplaats" => $klantWoonplaats,
        ]);
    }

    public function readKlant(){
        $db = new Database("localhost","root","","project6");

        // Alle klant gegevens in de database opvragen voor elk bestaand klant ID
        $klantlijst = $db->SQLCommando("select * from klanten where 1",[]);

        foreach($klantlijst as $klant){
            $this->klantId = $klant["klantId"];
            echo "<p>Klant ID: " . $this->klantId . "<br>";
            echo "Naam: " . $this->klantnaam = $klant["klantnaam"] . "<br>";
            echo "Email: " . $this->klantEmail = $klant["klantEmail"] . "<br>";
            echo "Adres: " . $this->klantAdres = $klant["klantAdres"] . "<br>";
            echo "Postcode: " . $this->klantPostcode = $klant["klantPostcode"] . "<br>";
            echo "Woonplaats: " . $this->klantWoonplaats = $klant["klantWoonplaats"] . "<br></p>";
        }
    }

    public function updateKlant($klantId){
        $db = new Database("localhost","root","","project6");
        $this->klantId = $klantId;
        $klantnaam = $this->getklantNaam();
        $klantEmail = $this->getklantEmail();
        $klantAdres = $this->getklantAdres();
        $klantPostcode = $this->getKlantPostcode();
        $klantWoonplaats = $this->getKlantWoonplaats();

        // Veranderen van de gegevens in de database gebaseerd op de gegeven klant id
        $db->SQLCommando(
        "update klanten set
                klantnaam           = :klantnaam,
                klantEmail          = :klantEmail,
                klantAdres          = :klantAdres,
                klantPostcode       = :klantPostcode,
                klantWoonplaats     = :klantWoonplaats
        where   klantid = :klantid"
        ,[
            "klantid" => $klantId,
            "klantnaam" => $klantnaam,
            "klantEmail" => $klantEmail,
            "klantAdres" => $klantAdres,
            "klantPostcode" => $klantPostcode,
            "klantWoonplaats" => $klantWoonplaats
        ]);

        echo "<p>De klant is gewijzigd. <br /></p>";
    }

    public function deleteKlant($klantId){
        $db = new Database("localhost","root","","project6");
        
        // Checken waar de klant id in de database overeenkomt met de gegeven klant id
        $db->SQLCommando("delete from klanten where klantId  = :klantId", ["klantId" => $klantId]);
    }

    public function searchKlantId($klantid){
        $db = new Database("localhost","root","","project6");

        // Zoeken op Klant ID in de database
        $klanten = $db->SQLCommando("select * from klanten where klantid = :klantid", ["klantid" => $klantid]);
    
        // klant gegevens opvragen
        foreach ($klanten as $klant) {
            $this->klantId = $klant["klantId"];
            $this->klantnaam = $klant["klantnaam"];
            $this->klantEmail = $klant["klantEmail"];
            $this->klantAdres = $klant["klantAdres"];
            $this->klantPostcode = $klant["klantPostcode"];
            $this->klantWoonplaats = $klant["klantWoonplaats"];
        }
    }

    public function searchKlantNaam($klantnaam){
        $db = new Database("localhost","root","","project6");

        // checken waar Klant naam in de database overeenkomt met de gegeven naam
        $klanten = $db->SQLCommando("select * from klanten where klantnaam = :klantnaam", ["klantnaam" => $klantnaam]);
    
        // klant gegevens opvragen
        foreach ($klanten as $klant) {
            $this->klantId = $klant["klantId"];
            $this->klantnaam = $klant["klantnaam"];
            $this->klantEmail = $klant["klantEmail"];
            $this->klantAdres = $klant["klantAdres"];
            $this->klantPostcode = $klant["klantPostcode"];
            $this->klantWoonplaats = $klant["klantWoonplaats"];
        }
    }

    public function searchKlantPostcode($klantPostcode){
        $db = new Database("localhost","root","","project6");

        // checken waar klant postcode in de database overeenkomt met de gegeven postcode
        $klanten = $db->SQLCommando("select * from klanten where klantPostcode = :klantPostcode", ["klantPostcode" => $klantPostcode]);
    
        // klant gegevens opvragen
        foreach ($klanten as $klant) {
            $this->klantId = $klant["klantId"];
            $this->klantnaam = $klant["klantnaam"];
            $this->klantEmail = $klant["klantEmail"];
            $this->klantAdres = $klant["klantAdres"];
            $this->klantPostcode = $klant["klantPostcode"];
            $this->klantWoonplaats = $klant["klantWoonplaats"];
        }
    }

    // Het laten zien van de huidige gegevens in de class met gebruik van getters
    public function afdrukkenKlant(){
        echo "<p>Klant ID: " . $this->getKlantId() . "<br>";
        echo "Naam: " . $this->getKlantNaam() . "<br>";
        echo "Email: " . $this->getKlantEmail() . "<br>";
        echo "Adres: " . $this->getKlantAdres() . "<br>";
        echo "Postcode: " . $this->getKlantPostcode() . "<br>";
        echo "Woonplaats: " . $this->getKlantWoonplaats() . "<br></p>";
    }
}