<?php

declare(strict_types=1);

function check_info_errors(){
    if (isset($_SESSION['errors_info'])) {
        $errors = $_SESSION['errors_info'];

        echo "<br>";

        foreach($errors as $error){
            echo '<p class="form-error">' . $error . '</p>';
        }

        unset($_SESSION['errors_signup']);
    } 
}