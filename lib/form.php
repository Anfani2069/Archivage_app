<?php 

function input($id) {


    $value=isset($_POST[$id]) ? $_POST[$id] : '';
    return "<input type='text' id='username' class='form-control' placeholder='Votre nom' name='username' value='$value'>";

}