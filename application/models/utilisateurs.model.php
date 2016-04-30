<?php

namespace Blimp;

defined('__BLIMP__') or die('Acces interdit');

/**
 * 
 * @return array
 * @throws Error
 */
class UtilisateursModel{
    
    
    public function lister(){
        $db = \F3il\Application::getDB();
        
        $sql = "SELECT * FROM utilisateurs";
        $req = $db->prepare($sql);
        
        try{
            $req->execute();
        } catch (\PDOException $ex) {
            throw new Error("Erreur SQL ".$ex->getMessage());
        }
        
        return $req->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    public function creer(array $data) {
        $db = \F3il\Application::getDB();                       

        $sql = "INSERT INTO utilisateurs SET "
                ." nom = :nom"
                .", prenom = :prenom"
                .", login = :login"
                .", email = :email"                        
                .", motdepasse = :mdp"
                .", creation = :date"
                ;
        $req = $db->prepare($sql);
        
        $req->bindValue(':nom', $data['nom']);
        $req->bindValue(':prenom', $data['prenom']);
        $req->bindValue(':login', $data['login']);
        $req->bindValue(':email', $data['email']);
        $req->bindValue(':mdp', $data['motdepasse']);
        $req->bindValue(':date', date('Y-m-d H:i:s'));
        
        
        try {
            $req->execute();                
        } catch (\PDOException $ex) {
            throw new \F3il\Error("Erreur SQL ".$ex->getMessage());
        }
    }
    
    public function lire($id){
        $db = \F3il\Application::getDB();
        
        $sql = "SELECT nom, prenom, login, email "
                ." FROM utilisateurs "
                . " WHERE id = :id ";
        $req = $db->prepare($sql);
        
        $req->bindValue(':id', $id, \PDO::PARAM_INT);
        
        try {
            $req->execute();                
        } catch (\PDOException $ex) {
            throw new \F3il\Error("Erreur SQL ".$ex->getMessage());
        }
        
        return $req->fetch(\PDO::FETCH_ASSOC);
    }
    
    public function actualiser($id, array $data){        
        $db = \F3il\Application::getDB();
        
        if(!empty($data['motdepasse'])){
            echo "kine";
            $sql = "UPDATE utilisateurs "
                . "SET nom = :nom, prenom = :prenom, login = :login, email = :email, motdepasse = :mdp "
                . "WHERE id = :id";
            
            $req = $db->prepare($sql);
            $req->bindValue(':mdp', $data['motdepasse']);
            $req->bindValue(':nom', $data['nom']);
            $req->bindValue(':prenom', $data['prenom']);
            $req->bindValue(':login', $data['login']);
            $req->bindValue(':email', $data['email']);
            $req->bindValue(':id', $id, \PDO::PARAM_INT);
            
        }
        else{
            $sql = "UPDATE utilisateurs "
                . "SET nom = :nom, prenom = :prenom, login = :login, email = :email "
                . "WHERE id = :id";
            
            $req = $db->prepare($sql);
            $req->bindValue(':nom', $data['nom']);
            $req->bindValue(':prenom', $data['prenom']);
            $req->bindValue(':login', $data['login']);
            $req->bindValue(':email', $data['email']);
            $req->bindValue(':id', $id, \PDO::PARAM_INT);
        }
        
        try {
            $req->execute();                
        } catch (\PDOException $ex) {
            throw new \F3il\Error("Erreur SQL ".$ex->getMessage());
        }
        
    }
}