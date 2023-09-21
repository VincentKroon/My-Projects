<?php 
require "connect.php";

// Vincent Kroon

class Supplier{
    public int $supID;
    public int $supMaxDelivery;
    public int $supMinDelivery;
    public int $ingredID;
    public string $ingredName;
    public string $ingredDescription;
    public string $supAdress;

    // wanneer de class wordt aangemaakt met | new Supplier() | dan worden er standaard gegevens ingezet op de variabelen bovenaan
    public function __construct($supMaxDelivery=0, $supMinDelivery=0, $ingredID=0, $ingredName="", $ingredDescription="", $supAdress="", $supID=0){
        $this->supMaxDelivery = $supMaxDelivery;
        $this->supMinDelivery = $supMinDelivery;
        $this->ingredID = $ingredID;
        $this->ingredName = $ingredName;
        $this->ingredDescription = $ingredDescription;
        $this->supAdress = $supAdress;
        $this->supID = $supID;
    }

    // Getters
    public function getSupID(){
        return $this->supID;
    }
    public function getSupMaxDelivery(){
        return $this->supMaxDelivery;
    }
    public function getSupMinDelivery(){
        return $this->supMinDelivery;
    }
    public function getIngredID(){
        return $this->ingredID;
    }
    public function getIngredName(){
        return $this->ingredName;
    }
    public function getIngredDescription(){
        return $this->ingredDescription;
    }
    public function getSupAdress(){
        return $this->supAdress;
    }

    // Setters
    public function setSupID($supID){
        $this->supID = $supID;
    }
    public function setSupMaxDelivery($supMaxDelivery){
        $this->supMaxDelivery = $supMaxDelivery;
    }
    public function setSupMinDelivery($supMinDelivery){
        $this->supMinDelivery = $supMinDelivery;
    }
    public function setIngredID($ingredID){
        $this->ingredID = $ingredID;
    }
    public function setIngredName($ingredName){
        $this->ingredName = $ingredName;
    }
    public function setIngredDescription($ingredDescription){
        $this->ingredDescription = $ingredDescription;
    }
    public function setSupAdress($supAdress){
        $this->supAdress = $supAdress;
    }

    // CRUD
    public function createSupplier(){
        // Connectie maken met de database 
        $db = new Database("localhost","root","","project8");

        // gegevens in variabelen zetten via de getters
        $supID = NULL;
        $supMaxDelivery = $this->getSupMaxDelivery();
        $supMinDelivery = $this->getSupMinDelivery();
        $ingredID = $this->getIngredID();
        $ingredName = $this->getIngredName();
        $ingredDescription = $this->getIngredDescription();
        $supAdress = $this->getSupAdress();

        // gegevens in de juiste database tabel zetten
        $db->SQLCommando("insert into suppliers values 
        (:supID, :supMaxDelivery, :supMinDelivery, :ingredID, :ingredName, :ingredDescription, :supAdress)
        ",[
            "supID" => $supID,
            "supMaxDelivery" => $supMaxDelivery,
            "supMinDelivery" => $supMinDelivery,
            "ingredID" => $ingredID,
            "ingredName" => $ingredName,
            "ingredDescription" => $ingredDescription,
            "supAdress" => $supAdress
        ]);
    }

    public function readSuppliers(){
        $db = new Database("localhost","root","","project8");

        // Alle supplier gegevens in de database opvragen voor elk bestaand supplier ID
        $suplist = $db->SQLCommando("select * from suppliers where 1",[]);

        // Alle supplier gegevens laten zien per uniek supplier ID
        foreach($suplist as $sup){
            echo "<div class='readbox' style='color: white; max-width: 300px;'>";
            $this->supID = $sup["supID"]; 
            echo "<p>Leverancier ID: " . $this->supID . "<br>";
            $this->supMaxDelivery = $sup["supMaxDelivery"];
            echo "Leverancier Maximale Bestelling: " . $this->supMaxDelivery . "<br>";
            $this->supMinDelivery = $sup["supMinDelivery"];
            echo "Leverancier Minimale Bestelling: " . $this->supMinDelivery . "<br>";
            $this->ingredID = $sup["ingredID"]; 
            echo "Ingrediënt ID: " . $this->ingredID . "<br>";

            echo "Ingrediënt Naam: " . $this->ingredName = $sup["ingredName"] . "<br>";
            echo "Ingrediënt Beschrijving: " . $this->ingredDescription = $sup["ingredDescription"] . "<br>";
            echo "Leverancier Adress: " . $this->supAdress = $sup["supAdress"] . "</p><br><br>";
            echo "</div><br>";
        }
    }

    public function updateSupplier($supID){
        $db = new Database("localhost","root","","project8");

        $supID = $this->getSupID();
        $supMaxDelivery = $this->getSupMaxDelivery();
        $supMinDelivery = $this->getSupMinDelivery();
        $ingredID = $this->getIngredID();
        $ingredName = $this->getIngredName();
        $ingredDescription = $this->getIngredDescription();
        $supAdress = $this->getSupAdress();

        // Veranderen van de gegevens in de database gebaseerd op de gegeven supplier id
        $db->SQLCommando(
        "update suppliers set
                supID             = :supID,
                supMaxDelivery    = :supMaxDelivery,
                supMinDelivery    = :supMinDelivery,
                ingredID          = :ingredID,
                ingredName        = :ingredName,
                ingredDescription = :ingredDescription, 
                supAdress         = :supAdress
        where   supID = :supID"
        ,[
            "supID" => $supID,
            "supMaxDelivery" => $supMaxDelivery,
            "supMinDelivery" => $supMinDelivery,
            "ingredID" => $ingredID,
            "ingredName" => $ingredName,
            "ingredDescription" => $ingredDescription,
            "supAdress" => $supAdress
        ]);

        echo "<p>De leverancier is gewijzigd. <br /></p>";
    }

    public function deleteSupplier($supID){
        $db = new Database("localhost","root","","project8");
        
        // Checken waar de supplier id in de database overeenkomt met de gegeven supplier id
        $db->SQLCommando("delete from suppliers where supID  = :supID", ["supID" => $supID]);
    }
    
    public function searchSupID($supID){
        $db = new Database("localhost","root","","project8");

        // Zoeken op supplier ID in de database
        $suppliers = $db->SQLCommando("select * from suppliers where supID = :supID", ["supID" => $supID]);
    
        // supplier gegevens opvragen
        foreach ($suppliers as $sup) {
            $this->supID = $sup["supID"];
            $this->supMaxDelivery = $sup["supMaxDelivery"];
            $this->supMinDelivery = $sup["supMinDelivery"];
            $this->ingredID = $sup["ingredID"];
            $this->ingredName = $sup["ingredName"];
            $this->ingredDescription = $sup["ingredDescription"];
            $this->supAdress = $sup["supAdress"];
        }
    }

    public function searchSupAdress($supAdress){
        $db = new Database("localhost","root","","project8");

        // checken waar supplier omschrijving in de database overeenkomt met de gegeven adress
        $suppliers = $db->SQLCommando("select * from suppliers where supAdress = :supAdress", ["supAdress" => $supAdress]);
    
        // supplier gegevens opvragen
        foreach ($suppliers as $sup) {
            $this->supID = $sup["supID"];
            $this->supMaxDelivery = $sup["supMaxDelivery"];
            $this->supMinDelivery = $sup["supMinDelivery"];
            $this->ingredID = $sup["ingredID"];
            $this->ingredName = $sup["ingredName"];
            $this->ingredDescription = $sup["ingredDescription"];
            $this->supAdress = $sup["supAdress"];
        }
    }

    public function searchSupplierIngredName($ingredName){
        $db = new Database("localhost","root","","project8");

        // checken waar ingredient naam in de database overeenkomt met de gegeven ingredient naam
        $suppliers = $db->SQLCommando("select * from suppliers where ingredName = :ingredName", ["ingredName" => $ingredName]);
    
        // supplier gegevens opvragen
        foreach ($suppliers as $sup) {
            $this->supID = $sup["supID"];
            $this->supMaxDelivery = $sup["supMaxDelivery"];
            $this->supMinDelivery = $sup["supMinDelivery"];
            $this->ingredID = $sup["ingredID"];
            $this->ingredName = $sup["ingredName"];
            $this->ingredDescription = $sup["ingredDescription"];
            $this->supAdress = $sup["supAdress"];
        }
    }

    // Het laten zien van de huidige gegevens in de class met gebruik van getters
    public function afdrukkenSupplier(){
        echo "<p>Leverancier ID: " . $this->getSupID() . "<br>";
        echo "Leverancier Maximale Bestelling: " . $this->getSupMaxDelivery() . "<br>";
        echo "Leverancier Minimale Bestelling: " . $this->getSupMinDelivery() . "<br>";
        echo "Ingrediënt ID: " . $this->getIngredID() . "<br>";
        echo "Ingrediënt Naam: " . $this->getIngredName() . "<br>";
        echo "Ingrediënt Beschrijving: " . $this->getIngredDescription() . "<br>";
        echo "Leverancier Adress: " . $this->getSupAdress() . "<br></p>";
    }
}