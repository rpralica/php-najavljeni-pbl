<?php
require "../settings/connection.php";
$element = htmlspecialchars($_POST['element']);
$lokacija = htmlspecialchars($_POST['lokacija']);
$pocetak = htmlspecialchars($_POST['pocetak']);
$trajanje = htmlspecialchars($_POST['trajanje']);
$komentar = htmlspecialchars($_POST['komentar']);
$id = $_POST['id'];
$sql = "UPDATE najave SET element='$element',lokacija='$lokacija',pocetak='$pocetak', trajanje='$trajanje',komentar='$komentar' WHERE id='$id' ";
$query = mysqli_query($db, $sql);
header("Location:../index.php");
