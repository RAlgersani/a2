<?php
$conn = mysqli_connect("localhost", "root", "", "koffie");

if (isset($_POST['naam'])) {
    $naam = $_POST['naam'];
    $kopjes = $_POST['kopjes'];
}
?>
