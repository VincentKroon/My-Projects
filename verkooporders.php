    <?php
    require "connect.php"; 
    // Valentijn Standaart

    class Verkooporders{
        public int $verkOrdId;
        public int $klantId;
        public int $artId;
        public string $verkOrdDatum;
        public int $verkOrdBestAantal;
        public int $verkOrdStatus;

        public function __construct($klantId = 0, $artId = 0, $verkOrdDatum="", $verkOrdBestAantal = 0, $verkOrdStatus = 0, $verkOrdId = 0) { 
            $this->verkOrdId = $verkOrdId;
            $this->klantId = $klantId;
            $this->artId = $artId;
            $this->verkOrdDatum = $verkOrdDatum;
            $this->verkOrdBestAantal = $verkOrdBestAantal;
            $this->verkOrdStatus = $verkOrdStatus;
        }

        // Getters  
        public function getverkOrdId(){
            return $this->verkOrdId;
        }

        public function getklantId(){
            return $this->klantId;
        }

        public function getartId(){
            return $this->artId;
        }

        public function getverkOrdDatum(){
            return $this->verkOrdDatum;
        }

        public function getverkOrdBestAantal(){
            return $this->verkOrdBestAantal;
        }

        public function getverkOrdStatus(){
            return $this->verkOrdStatus;
        }

        // Setters
        public function setverkOrdId($verkOrdId){
            $this->verkOrdId = $verkOrdId;
        }

        public function setklantId($klantId){
            $this->klantId = $klantId;
        }

        public function setartId($artId){
            $this->artId = $artId;
        }

        public function setverkOrdDatum($verkOrdDatum){
            $this->verkOrdDatum = $verkOrdDatum;
        }

        public function setverkOrdBestAantal($verkOrdBestAantal){
            $this->verkOrdBestAantal = $verkOrdBestAantal;
        }

        public function setverkOrdStatus($verkOrdStatus){
            $this->verkOrdStatus = $verkOrdStatus;
        }

        // CRUD functies
        public function createverkooporder(){
            $db = new Database("localhost","root","","project6");

            // gegevens naar variabelen
            $verkOrdId = NULL;
            $klantId = $this->getklantId();
            $artId = $this->getartId();
            $verkOrdDatum = $this->getverkOrdDatum();
            $verkOrdBestAantal = $this->getverkOrdBestAantal();
            $verkOrdStatus = $this->getverkOrdStatus();

            // sql
            $db->SQLCommando("insert into verkooporders values 
            (:verkOrdId, :klantId, :artId, :verkOrdDatum, :verkOrdBestAantal, :verkOrdStatus)
            ", [
                "verkOrdId" => $verkOrdId,
                "klantId" => $klantId,
                "artId" => $artId,
                "verkOrdDatum" => $verkOrdDatum,
                "verkOrdBestAantal" => $verkOrdBestAantal,
                "verkOrdStatus" => $verkOrdStatus
            ]);
        }

        public function readVerkooporders(){
            $db = new Database("localhost","root","","project6");

            $verklijst = $db->SQLCommando("select * from verkooporders where 1",[]);

            foreach($verklijst as $verk){
                $this->verkOrdId = $verk["verkOrdId"];
                echo "<p>Verkooporder ID: " . $this->verkOrdId . "<br>";
                $this->klantId = $verk["klantId"];
                echo "Klant ID: " . $this->klantId . "<br>";
                $this->artId = $verk["artId"];
                echo "Artiekel ID: " . $this->artId . "<br>";
                echo $this->verkOrdDatum = $verk["verkOrdDatum"] . "<br>";
                $this->verkOrdBestAantal = $verk["verkOrdBestAantal"];
                echo  "Verkooporder bestel aantal: " . $this->verkOrdBestAantal . "<br>";
                $this->verkOrdStatus = $verk["verkOrdStatus"];
                echo "Verkooporder status: " . $this->verkOrdStatus . "<br></p>";
            }
        }

        public function updateVerkooporders($verkOrdId){
            $db = new Database("localhost","root","","project6");
            $this->verkOrdId = $verkOrdId;
            $klantId = $this->getklantId();
            $artId = $this->getartId();
            $verkOrdDatum = $this->getverkOrdDatum();
            $verkOrdBestAantal = $this->getverkOrdBestAantal();
            $verkOrdStatus = $this->getverkOrdStatus();

            $db->SQLCommando(
            "update verkooporders set
                    verkOrdId               = :verkOrdId,
                    klantId                 = :klantId,
                    artId                   = :artId,
                    verkOrdDatum            = :verkOrdDatum,
                    verkOrdBestAantal       = :verkOrdBestAantal,
                    verkOrdStatus           = :verkOrdStatus
            where   verkOrdId = :verkOrdId"
            ,[
                "verkOrdId"              => $verkOrdId,
                "klantId"                => $klantId,
                "artId"                  => $artId,
                "verkOrdDatum"           => $verkOrdDatum,
                "verkOrdBestAantal"      => $verkOrdBestAantal,
                "verkOrdStatus"          => $verkOrdStatus,
            ]);

            echo "<p>De verkooporder is gewijzigd. <br /></p>";
        }

        public function deleteVerkooporder($verkOrdId){
            $db = new Database("localhost","root","","project6");
            
            // Checken waar de artikel id in de database overeenkomt met de gegeven artikel id
            $db->SQLCommando("delete from verkooporders where verkOrdId  = :verkOrdId", ["verkOrdId" => $verkOrdId]);
        }

        public function searchKlantId($klantId){
            $db = new Database("localhost","root","","project6");

            $verklijst = $db->SQLCommando("select * from verkooporders where klantId = :klantId", ["klantId" => $klantId]);
        
            // artikel gegevens laten zien
            foreach ($verklijst as $verk) {
                $this->verkOrdId = $verk["verkOrdId"];
                $this->klantId = $verk["klantId"];
                $this->artId = $verk["artId"];
                $this->verkOrdDatum = $verk["verkOrdDatum"];
                $this->verkOrdBestAantal = $verk["verkOrdBestAantal"];
                $this->verkOrdStatus = $verk["verkOrdStatus"];
            }
        }

        public function searchVerkooporderid($verkOrdId){
            $db = new Database("localhost","root","","project6");

            $verklijst = $db->SQLCommando("select * from verkooporders where verkOrdId = :verkOrdId", ["verkOrdId" => $verkOrdId]);
        
            // artikel gegevens laten zien
            foreach ($verklijst as $verk) {
                $this->verkOrdId = $verk["verkOrdId"];
                $this->klantId = $verk["klantId"];
                $this->artId = $verk["artId"];
                $this->verkOrdDatum = $verk["verkOrdDatum"];
                $this->verkOrdBestAantal = $verk["verkOrdBestAantal"];
                $this->verkOrdStatus = $verk["verkOrdStatus"];
            }
        }

            // Het laten zien van de huidige gegevens in de class met gebruik van getters
            public function afdrukkenVerkooporders(){
                echo "<p>Verkooporder ID: " . $this->getverkOrdId() . "<br>";
                echo "Klant ID: " . $this->getklantId() . "<br>";
                echo "Artikel ID: " . $this->getartId() . "<br>";
                echo "Verkooporder Datum: " . $this->getverkOrdDatum() . "<br>";
                echo "Verkooporder Bestelling Aantal: " . $this->getverkOrdBestAantal() . "<br>";
                echo "Verkooporder Status: " . $this->getverkOrdStatus() . "<br></p>";
            }

    }