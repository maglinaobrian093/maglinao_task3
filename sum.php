<?php
include("../db.php");
$sql = "SELECT SUM(amount) AS total_sales FROM orders";
$result = $conn->query($sql);
if(!$result) die("Query error: " . $conn->error);
$row = $result->fetch_assoc();
?>
<h2>SUM()</h2>
<pre><?= $sql ?></pre>
<p>Total sales: <b><?= htmlspecialchars($row["total_sales"]) ?></b></p>
<p><a href="../index.php">Back</a></p>
