<?php

include_once("config.php");
 

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); 
?>
 
<html>
<head>    
    <title>Edit Page</title>
</head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main2.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
<body>
<div class="wrapper">
         
        <nav>
            <div class="container">
                <ul>
                    
                    <li> <a href="EditPage.php">View Complaint</a> </li>
                    <li> <a href="search.php">Search Complaint</a> </li>     
                </ul>
            </div>
        </nav>
    <br/><br/>
</div> <div role="main" class="container">
    <table id="dataTable" width="75%" class="table table-bordered table-dark table-hover">
        <tr  >
            
        <td>Complaint</td>
            <td>Mobile No</td>
            <td>Status</td>
            <td>UPDATE</td>
        </tr>''
        <?php 
        
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['age']."</td>";
            echo "<td>".$res['email']."</td>";    
            echo "<td><a href=\"edit.php?id=$res[id]\"><button style=\"width:80%\">Edit</button></a> </td>";
        }
        ?>
    </table>
</body>
</html>