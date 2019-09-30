
<?php
require_once('PDO.php');

//$query = "SELECT * FROM `sites` WHERE site_id='AMPLM1' ORDER BY `id`  DESC";
$query = "SELECT * FROM `sites`";

$statement = $connect->prepare($query);

if ($statement->execute()) {
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
    }

    echo json_encode($data);
}

?>
