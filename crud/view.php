<?php include 'connection.php'; ?>
<a href="index.php"> home</a>
<table border="1" width="50%" accesskey="">

    <tr>
        <th>First Name </th>
        <th>Last name </th>
        <th> age</th>
        <th colspan="2">Action</th>
        <?php
        $query = "SELECT * FROM student";
        $data = mysqli_query($con, $query);
        $result = mysqli_num_rows($data);
        if ($result) {
            while ($row = mysqli_fetch_array($data)) {
        ?>
    <tr></tr>
    <td><?php echo $row['firstname']; ?></td>
    <td><?php echo $row['lastname']; ?></td>
    <td><?php echo $row['age']; ?></td>
    <td>
        <a href="update.php?id=<?php echo $row['id'];    ?> ">Edit</a>
        <a onclick="return confirm('Are you sure , you want to  delelte? )" href="delete.php?id=<?php echo $row['id'];    ?> ">delete</a>
    </td>

<?php
            }
        } else {
        }
?>
</tr>
</table>