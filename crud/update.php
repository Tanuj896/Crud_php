 <?php include 'connection.php';
    echo    $id = $_GET['id'];
    $select = "SELECT * FROM student Where id='$id'";
    $data = mysqli_query($con, $select);
    $row = mysqli_fetch_array($data);

    ?>
 <div>
     <form action="" method="post">
         <input type="text" value="<?php echo $row['firstname'] ?>" name="firstname" placeholder="Enter your Firstname" required> <br><br>
         <input type="text" value="<?php echo $row['lastname'] ?>" name="lastname" placeholder="Enter your Lastname" required><br><br>
         <input type="number" value="<?php echo $row['age'] ?>" name="age" placeholder="Enter your age" required><br><br>
         <input type="submit" name="update_btn" value="update ">
         <button><a href="view.php"> Back </a></button>
     </form>
 </div>

 <?php
    if (isset($_POST['update_btn'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $age = $_POST['age'];
        $update = "UPDATE student SET firstname='$fname', Lastname='$lname', age='$age' WHERE id='$id'";
        $data = mysqli_query($con, $update);
        if ($data) {
    ?>
         <script type="text/javascript">
             alert("Data update successfully");
             window.open("view.php", "_self");
         </script>
     <?php

        } else {
        ?>
         <script type="text/javascript">
             alert("please try again");
         </script>
 <?php
        }
    }
    ?>