<!DOCTYPE html>
<html>
<head>
    <title>userinfo</title>
    <?php include 'connection.php' ?>
    <?php include 'links.php'?>
    <?php include 'navbar.php'?>

    <link rel="stylesheet" href="CSS/users.css">

</head>

<body>
        <?php
            include 'connection.php';
            $sql = "SELECT * FROM customers";
            $result = mysqli_query($con,$sql);
        ?>
    <div class="main-div">
        <h1>List of all Customers</h1>
            <div class="center-div">
                <div class="table-responsive">
                        <table class="table-hover">
                        <thead>
                            <tr>
                            <th> S No. </th>
                            <th>Customer Name </th>
                            <th> Email </th>
                            <th> Balance </th>
                            <th> Start Transaction </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            while($rows=mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                                <td><?php echo $rows['id'] ?></td>
                                <td><?php echo $rows['name']?></td>
                                <td><?php echo $rows['email']?></span></td>
                                <td><?php echo $rows['balance']?></td>
                                <td><a href="transfer.php?id= <?php echo $rows['id'] ;?>"> <i class=" fa fa-2x fa-exchange" aria-hidden="true"> </i> </a></td> 
                            </tr>
                            <?php
                                }
                            ?>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
</body>
</html>