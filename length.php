<?php
include("../db.php");
$sql = "SELECT full_name, LENGTH(full_name) AS name_len FROM employees";
$result = $conn->query($sql);
if(!$result) die("Query error: " . $conn->error);
?>
<h2>LENGTH()</h2>
<pre><?= $sql ?></pre>
<table border="1" cellpadding="8">
<tr><th>full_name</th><th>name_len</th></tr>
<?php while($row = $result->fetch_assoc()): ?>
<tr>
  <td><?= htmlspecialchars($row["full_name"]) ?></td>
  <td><?= htmlspecialchars($row["name_len"]) ?></td>
</tr>
<?php endwhile; ?>
</table>
<p><a href="../index.php">Back</a></p>
