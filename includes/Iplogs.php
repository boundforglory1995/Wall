<?php
include('db.php');
if(isset($_COOKIE['admin_name'],$_COOKIE['admin_pass'])){


}else{header("location:../wall.php");}

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link href="simple-sidebar.css" rel="stylesheet">

<style>
body{text-align: center;margin:0;
	padding:0;}
    .login-panel {
        margin-top: 150px;
        text-align: center;
    }
    .table {
        margin-top: 80px;
        text-align: center;
        margin: 0 auto;
        padding-right: 50px;

    }
    li:active{background-color: white}
    .table-scrol{padding-right: 500px;}
    h1{text-align: left;}
    th{text-align: left;
        width:100%;
        height:5%;
        margin:0 auto;
        padding:0 auto;}
        td{text-align: left;}
    #edituser{
        display: block;
        clear: both;
    }
    input{width:100%;
        margin:0 auto;
        padding:0 auto;}
    #sidebar-wrapper{width: 10%;
        text-align: left;
        overflow: hidden;
        top:0;}

        a:active{
            color:white;
        }

    label{float:left;}
    #editform{
        display: block;
    }

    img{height:100px;
        width:100px;}

</style>
</head>
<body>

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
    <h1 align="center">Ip Adressen + Hosts + Datums</h1>

<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th>Id</th>
            <th>Ip Adressen</th>
            <th>Host Naam</th>
            <th>Datum</th>
            <th>Verwijder Ips</th>
        </tr>
        </thead>

        <?php
       
        $view_users_query="select * from iplogs";//select query for viewing users.
        $run=mysql_query($view_users_query);//here run the sql query.

        while($row=mysql_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $id=$row[0];
            $ips= $row[1];
            $hosts = $row[2];
            $dates = $row[3];
            



        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $id;  ?></td>
            <td><?php echo $ips;  ?></td>
            <td><?php echo $hosts;  ?></td>
            <td><?php echo $dates;  ?></td>
            <td><a href="deleteips.php?del=<?php echo $id ?>"><button class="btn btn-danger">Verwijder Ip</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
        </tr>

        <?php } ?>


     

    </table>
        </div>
</div>

       




</div>
</body>
</html>
