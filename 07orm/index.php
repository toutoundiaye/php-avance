<?php

$auteur = $depotAuteur->findWithLivres(42);

foreach($auteur->getLivres() as $livre) {
    echo $livre->getTitre();
}