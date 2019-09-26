
<?php
require_once ('PDO.php');

$query = "SELECT * FROM cbm_cell_block WHERE `block`='Pending..' OR `deblock`='pending..' ORDER BY date DESC";

$statement = $connect->prepare($query);

if($statement->execute())
{
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }

 echo json_encode($data);
}

?>
