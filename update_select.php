
<?php
require_once ('PDO.php');

$query = "SELECT * FROM `sites` WHERE site_id='AMPLM1' ORDER BY `id`  DESC";

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
