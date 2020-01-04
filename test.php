<?php




class student {

var $ime  = "Petar";
var $prezime ="Peric";

var $datrod = "1993-10-13";



    function getDAte(){

            $godtrenutno = date("Y");
            $godRod = date("Y", strtotime($this->datrod));


            $godine = $godtrenutno - $godRod;


            return $godine;


    }



}



$student123 = new student();


echo $student123 -> getDAte();












?>