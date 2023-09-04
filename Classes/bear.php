<?php

class bear extends animals {

   
    public function roar() {
        echo $this->getSpecies() . 'roar';
    }

}