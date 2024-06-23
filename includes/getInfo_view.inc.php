<?php

declare(strict_types=1);

function displayName(){
    if (isset($_SESSION['cardDetails_4'])) {
        $name = $_SESSION['cardDetails_4']["name"];
        echo $name;

    } else {
        echo "no name retrieved!";
    }
}

function displayEmail(){

}

function displayPosition(){

}

function displayAddress(){

}

function displayImage(){

}