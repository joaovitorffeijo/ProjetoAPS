<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['pin'])) {
        if(strlen($_POST['pin']) == 0) {
            echo "PIN inválido";
        }
        else {
            $pin = $_POST['pin'];

        
        }
    }
}

?>