<!DOCTYPE html>
<html>
<head>
    <title>Transaction History</title>
    <?php include 'connection.php'?>
    <?php include 'links.php'?>
    <?php include 'navbar.php'?>

    <link rel="stylesheet" href="CSS/history.css">

</head>

<body>
	<div class="container">
        <h1>Transaction HISTORY</h1>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered text-white ">
        <thead>
            <tr>
                <th class="text-center">S No.</th>
                <th class="text-center">Sender Name</th>
                <th class="text-center">Receiver Name</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'connection.php';

            $sql ="select * from transaction";

            $query =mysqli_query($con, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['sl. no.']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['amount']; ?> </td>
            <td class="py-2"><?php echo $rows['date and time']; ?> </td>
            </tr>    
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
</body>
</html>