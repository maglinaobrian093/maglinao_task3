<?php
include("../db.php");
$sql = "SELECT full_name, UPPER(full_name) AS upper_name FROM employees";
$result = $conn->query($sql);
if(!$result) die("Query error: " . $conn->error);
?>
<h2>UPPER()</h2>
<pre><?= $sql ?></pre>
<table border="1" cellpadding="8">
<tr><th>full_name</th><th>upper_name</th></tr>
<?php while($row = $result->fetch_assoc()): ?>
<tr>
  <td><?= htmlspecialchars($row["full_name"]) ?></td>
  <td><?= htmlspecialchars($row["upper_name"]) ?></td>
</tr>
<?php endwhile; ?>
</table>
<p><a href="../index.php">Back</a></p>
