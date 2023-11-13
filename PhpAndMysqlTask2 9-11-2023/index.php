<?php require_once 'includes/connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'includes/head.php' ?>
</head>
<body>
    <!-- Navbar -->
    <?php include_once 'includes/navbar.php' ?>

    <section class="my-5 container text-center">
        <table class="table table-bordered">
            <thead>
               <tr class="table-dark">
                <th>employee Name</th>
                <th>employee Address</th>
                <th>employee Gender</th>
                <th>employee salary</th>
                <th>annual salary</th>
                <th>Actions</th>
               </tr>
            </thead>
            <tbody>
            <?php 
                $sql = "SELECT * FROM employee";
                $res = mysqli_query($conn , $sql);
                while($row = mysqli_fetch_assoc($res)) {
            ?>
            <tr>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['address']?></td>
                    <td><?php echo $row['gender']?></td>
                    <td><?php echo $row['salary']?></td>
                    <td><?php echo $row['annual salary']?></td>
                    <td>
                        <a href="show.php?name=<?php echo $row['name'] ?>" class="btn btn-sm btn-info mx-1">show</a>
                        <a href="edit.php?name=<?php echo $row['name'] ?>" class="btn btn-sm btn-success mx-1">edit</a>
                        <a href="delete.php?name=<?php echo $row['name'] ?>" class="btn btn-sm btn-warning mx-1">delete</a>
                    </td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
    </section>
    <!-- Footer -->
    <?php include_once 'includes/footer.php' ?>
</body>
</html>