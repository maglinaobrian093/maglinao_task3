<?php
include("../db.php");
$sql = "SELECT email, SUBSTRING(email,1,4) AS first4 FROM employees";
$result = $conn->query($sql);
if(!$result) die("Query error: " . $conn->error);
?>
<h2>SUBSTRING()</h2>
<pre><?= $sql ?></pre>
<table border="1" cellpadding="8">
<tr><th>email</th><th>first4</th></tr>
<?php while($row = $result->fetch_assoc()): ?>
<tr>
  <td><?= htmlspecialchars($row["email"]) ?></td>
  <td><?= htmlspecialchars($row["first4"]) ?></td>
</tr>
<?php endwhile; ?>
</table>
<p><a href="../index.php">Back</a></p>
