<?php 
include("connnectio.php");

// $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_NUM);
// working fine noo issues

$sql="select * from user_data";
$arr=$conn->query($sql);


// yes clear


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td colspan="6">ADD</td>
        </tr>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>MOBILE</th>
            <th>Age</th>
            <th>PASSWORD</th>
            <th>Action</th>
        </tr>
        <?php
        $n=1;
                while($data=$arr->fetch())
                {
                    ?>

            <tr>
                <td><?php echo $n ; ?></td>
                <td><?php echo $data['Name'] ; ?></td>
                <td><?php echo $data['Email'] ; ?></td>
                <td><?php echo $data['Mobile'] ; ?></td>
                <td><?php echo $data['Age'] ; ?></td>
                <td><?php echo $data['Password'] ; ?></td>
                <td>
                    <a href="Edit.php?con=<?php echo $data['ID'];?>">EDIT</a>
                    <a href="delete.php?con=<?php echo $data['ID'];?>">Delete</a>
                </td>
            </tr>

<?php
            $n+=1;    }

    ?>
    </table>

    
</body>
</html>


<!-- 1 min -->