<?php

include("connectiondatabase.php");

$query = "SELECT * FROM comments";
$com = $conn -> prepare($query);

if(isset($_GET['Id'])) {

  try {
    $stmt = $conn->prepare("DELETE FROM comments WHERE Id = :Id");
    $stmt->bindParam(":Id", $_GET['Id']);
    $stmt->execute();
  } catch(PDOException $e) {
    echo $e->getMessage();
  }
}

 

$stmt = $conn->query("SELECT * FROM comments");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Message</th>
<th>Action</th>
</tr>

<?php foreach($rows as $row): ?>
<tr>
<td><?php echo $row['Id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['message']; ?></td>
<td><a href="?Id=<?php echo $row['Id']; ?>">Delete</a></td>
</tr>
<?php endforeach; ?>
</table>