<?php
require 'connect.php';

// Vincent Kroon

class Login{
    private string $loginName;
    private string $loginPassword;

    public function __construct($loginName="", $loginPassword=""){
        $this->loginName = $loginName;
        $this->loginPassword = $loginPassword;
    }

    public function createAccount($loginName, $loginPassword){
        // Connectie maken met de database 
        $db = new Database("localhost","root","","project8");

        // gegevens in de juiste database tabel zetten
        $db->SQLCommando("insert into accounts values (:loginName, :loginPassword)
        ",[
            "loginName" => $loginName,
            "loginPassword" => $loginPassword
        ]);
    }

    public function logInCheck($loginName){
        // Connectie maken met de database 
        $db = new Database("localhost","root","","project8");

        $logins = $db->SQLCommando("select * from accounts where loginName = :loginName", ["loginName" => $loginName]);

        foreach($logins as $login){
            $HashedPassword = $login["loginPassword"];
        }

        $TheSame = password_verify($this->loginPassword, $HashedPassword);

        if($TheSame){
            header("Location: http://localhost/Project-8/main.php");
        } else{
            echo "We hebben u niet gevonden, probeer opnieuw.";
        }
    }
}

?>