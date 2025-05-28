<?php include 'connection.php';
$id = $_GET['id'];
 $query = "DELETE FROM STUDENT WHERE ID = '$_GET[id]'";
$data = mysqli_query($con, $query);
if ($data) {
    ?>
    <script type="text/javascript">
        alert("Data deleted successfully");
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
 
