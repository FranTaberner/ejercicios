<?php
    $nombre = "Francisco Javier";
    $apellidos = "Taberner Aliaga";
    $edad = 20;
    $estudios = "DAW";

    $nom_text_es = "Nombre: " . $nombre;
    $nom_text_en = "Name: " . $nombre;
    $nom_text_va = "Nom: " . $nombre;

    $ap_text_es = "Apellidos: " . $apellidos;
    $ap_text_en = "Sournames:" . $apellidos;
    $ap_text_va = "Cognoms: " . $apellidos;

    $edad_text_es = "Edad: " . $edad;
    $edad_text_en = "Age: " . $edad;
    $edad_text_va = "Edat: " . $edad;

    $est_text_es = "Estudios: " . $estudios;
    $est_text_en = "Studies: " . $estudios;
    $est_text_va = "Estudis: " . $estudios;

    $idioma="va";

    $nom_text_= "nom_text_" . $idioma;
    $ap_text_= "ap_text_" . $idioma;
    $edad_text_= "edad_text_" . $idioma;
    $est_text_= "est_text_" . $idioma;

    echo $$nom_text_ . "<br>" . $$ap_text_ . "<br>" . $$edad_text_ . "<br>" . $$est_text_;
?>
