<?php 
try {
    $mysqli = new mysqli("localhost", "root", "", "miniproyecto");
} catch(mysqli_sql_exception $e) {
    echo "Error" . $e->getMessage();
}
?>