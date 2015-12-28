<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link href="simple-sidebar.css" rel="stylesheet">
<style>
img{height:100px;
width:100px;}
 input{width:100%;
        margin:0 auto;
        padding:0 auto;}
    #sidebar-wrapper{width: 10%;
        text-align: left;
        overflow: hidden;
        top:0;}
        h1{text-align: left;
}

        .table-scrol{padding-right: 400px;}
        button{position: relative; 
            bottom: 0;}

</style>
 <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Admin Paneel
                    </a>
                </li>
                <li>
                    <a href="users.php">Gebruikers</a>

                </li>
                <li>
                    <a href="images.php">Afbeeldingen</a>
                </li>

                <li>
                    <a href="../wall.php">The Wall</a>
                </li>

                <li>
                    <a href="../index.php">Home</a>
                </li>

                <li>
                    <a href="Iplogs.php">Ip Adressen</a>
                </li>
            
            </ul>
        </div>

<div class="table-scrol">
    <h1 align="center">Verwijder Afbeeldingen + Content</h1>

<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th> Gebruikers Id</th>
            <th>Locatie</th>
            <th>Band + Titel</th>
            <th>Uitgave</th>
            <th>Genre</th>
            <th>Nummers</th>
            <th>Gebruiker</th>
            <th>Verwijder</th>
        </tr>
        </thead>

        <?php
        include('db.php');
        $view_users_query="select * from photo";//select query for viewing users.
        $run=mysql_query($view_users_query);//here run the sql query.

        while($row=mysql_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $id=$row[0];
            $location = $row[1];
            $caption = $row[2];
            $Uitgave = $row[3];
            $genre = $row[4];
            $tracks = $row[5];
            $user = $row[6];
            



        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $id;  ?></td>
            <?php 
            echo '<td><img src="../'.$location.'"/></td>';
            ?>
            <td><?php echo $caption;  ?></td>
            <td><?php echo $Uitgave;  ?></td>
            <td><?php echo $genre;  ?></td>
            <td><?php echo $tracks;  ?></td>
            <td><?php echo $user;  ?></td>
            <td><a href="delete2.php?delimg=<?php echo $id ?>"><button class="btn btn-danger">Verwijder</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
        </tr>

        <?php } ?>


     

    </table>
        </div>
</div>
</div>