<?php

require_once "Repository.php";
require_once __DIR__.'//..//Models//User.php';

class CardRepository extends Repository {

    public function getCard(string $email): ?User 
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM cards WHERE email = :email
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $card = $stmt->fetch(PDO::FETCH_ASSOC);

        if($card == false) {
            return null;
        }

        return new Card(
            $user['id'],
            $user['cardnum'],
            $user['CVV'],
            $user['cardname'],
            $user['expdate']
        );
    }

    public function getUsers(): array {
        
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM users WHERE email != :email;
        ');
        $stmt->bindParam(':email', $_SESSION['id'], PDO::PARAM_STR);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        

        return $users;
    }
}