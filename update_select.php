
<?php
require_once('PDO.php');

//$query = "SELECT * FROM `sites` WHERE site_id='AMPLM1' ORDER BY `id`  DESC";
//$query = "SELECT * FROM `sites`";

if (isset($_POST["value"])) {
    $search=$_POST["value"];
 //$search = mysqli_real_escape_string($connect, $_POST["Search_text"]);
 $query = "
  SELECT * FROM sites 
  WHERE vendor LIKE '%".$search."%'
  OR site_id LIKE '%".$search."%' 
  OR type LIKE '%".$search."%' 
  OR band LIKE '%".$search."%' 
  LIMIT 100";
}
else
{
 $query = "SELECT * FROM `sites` LIMIT 100";
}

$statement = $connect->prepare($query);

if ($statement->execute()) {
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
    }

    echo json_encode($data);
}

?>
