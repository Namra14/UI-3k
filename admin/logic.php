<?php

$sql = "SELECT * FROM lmi_form";
$query = mysqli_query($conn, $sql);

// Get post data based on id
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM lmi_form WHERE id = $id";
    $query = mysqli_query($conn, $sql);
}
