	<?php
$start = 0;
$limit = 25;





if (isset($_GET['id'])) {
    $id    = $_GET['id'];
    $start = ($id - 1) * $limit;
} else {
    $id = $_GET['id'] = 1;
    require("db.php");
}


