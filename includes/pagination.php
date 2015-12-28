 <?php
 require("db.php");
echo '<div class="pagination">';

$rows  = mysql_num_rows(mysql_query("select * from photo"));
$total = ceil($rows / $limit);

if ($id > 1) {
    echo "<a href='?id=" . ($id - 1) . "' class='button'>Vorige</a>";
}


for ($i = 1; $i <= $total; $i++) {
    if ($i == $id) {
        echo "<li class='current'>" . $i . "</li>";
    }
    
    else {
        echo "<li><a href='?id=" . $i . "'>" . $i . "</a></li>";
    }
}

if ($id != $total) {
    echo "<a href='?id=" . ($id + 1) . "' class='button'>Volgende</a>";
}

echo'</div>';

