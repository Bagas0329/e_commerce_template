<?php
session_start();
include "config.php";

if (!isset($_SESSION['user_id'])) {
    echo json_encode(["count" => 0]);
    exit;
}

$id_user = (int)$_SESSION['user_id'];
$query = "SELECT SUM(jumlah) AS total FROM keranjang WHERE id_user = $id_user";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$count = (int)$row['total'];

echo json_encode(["count" => $count]);
