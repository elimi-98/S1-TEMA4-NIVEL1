<?php

class Employee{

    //Atributs
    public $nom;
    public $sou;
 

    //Mètodes propis
    function initialize($nom, $sou){
        $this->nom = $nom;
        $this->sou = $sou; 
    }

    function print(){
        echo 'Nombre: ' . $this->nom . '<br/>'; 

        if($this->sou >= 6000){
            echo 'Ha de pagar impostos.';
        }else if($this->sou < 6000){
            echo 'No ha de pagar impostos.'; 
        }
    }

}


?>