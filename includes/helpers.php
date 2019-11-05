<?php 

function deleteAlert(){
    $_SESSION['error'] = null;
    $_SESSION['success'] = null;
    session_unset();
}