<?php
require_once ("../includes/connect.php")
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css" />
    <title>ILI BISTRO - CRUD</title>
</head>

<body class="loggedin">
    <nav class="navtop">
        <div>
            <h1>ILI BISTRO</h1>
            <a href="profile.php"><i class="fas fa-user-circle"></i>Profiel</a>
            <a href="CRUD.php"><i class="fas fa-user-circle"></i>C.R.U.D</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Uitloggen</a>
        </div>
    </nav>
    <div class="content">
        <h2>Create_Read_Update_Delete - Admin panel </h2>
    </div>
<?php
         $records = 'SELECT id, product_name, product_price, product_image from producttb';
         $stmt = $connect->prepare($records);
         $stmt ->execute();
?>
<div class="crud-table-container">
<table  class="table table-striped table-condensed" id="tblData">
    <thead>
        <tr>
            <th>Product ID <hr></th>
            <th>Product Naam <hr></th>
            <th>Product Prijs <hr></th>
            <th>Product Plaatje <hr></th>
       </tr>
    </thead>

    <tbody>
       <?php 
foreach( $stmt as $data )
            {
                echo "<tr><td>".$data['id']."</td>
                          <td>".$data['product_name']."</td>
                          <td>".$data['product_price']."</td>
                          <td>".$data['product_image']."</td>
                       </tr>";
            }
       ?>
    </tbody>        
</table>
        </div>
    <div class="crudform">
        <form action="create.php" method="post">
            <input class="crudforminput" type="text" placeholder="Product naam..." name="product_name" required>
            <input class="crudforminput" type="text" placeholder="Product prijs..." name="product_price" required>
            <input class="crudforminput" type="file" placeholder="Product plaatje..." name="product_image" required>
            <input class="createbutton" placeholder="create" value="toevoegen" type="submit"
                name="createbutton"></input>
        </form>

        <form action="update.php" method="post">
            <input class="crudforminput" type="text" placeholder="Product ID..." name="id" required>
            <input class="crudforminput" type="text" placeholder="Product naam..." name="product_name" required>
            <input class="crudforminput" type="text" placeholder="Product prijs..." name="product_price" required>
            <input class="crudforminput" type="text" placeholder="Product plaatje..." name="product_image" required>
            <input class="updatebutton" placeholder="update" value="bewerken" type="submit" name="updatebutton"></input>
        </form>

        <form action="delete.php" method="post">
            <input class="crudforminput" type="text" placeholder="Product ID..." name="id" required>
            <input class="deletebutton" placeholder="delete" value="Verwijderen" type="submit" name="deletebutton"></input>
        </form>
    </div>
</body>
</html>