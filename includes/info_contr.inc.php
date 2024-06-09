<?php

declare(strict_types=1);

function is_info_empty(string $name, string $position, string $email, string $address){
    if(empty($name) || empty($position) || empty($email) || empty($address)){
        return true;
    } else {
        return false;
    }
}

function is_email_invalid(string $email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    } else{
        return false;
    }
}

function create_card(object $pdo, string $name, string $position, string $email, string $address){
    set_card($pdo, $name, $position, $email, $address);
}