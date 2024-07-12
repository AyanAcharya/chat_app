<?php
include("data_class.php");

$search = $mysqli->real_escape_string($_GET['search']); // Security precaution to prevent SQL injection

$query = "SELECT * FROM university WHERE university_name LIKE '%$search%'";
$result = $mysqli->query($query);

while ($row = $result->fetch_assoc()) {
    echo '<button style="display:none" class="my-1 university py-5 text-xs w-full border border-slate-950" onclick="selectUniversity(' . $row['id'] . ')">' . $row['university_name'] . '</button>';
}


?>
