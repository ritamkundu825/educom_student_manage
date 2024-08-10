<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" style="width: 800px;">
        <tr>
            <th>Name</th>
            <th>Name</th>
            <th>Marks Obtain</th>
            <th>Category</th>
        </tr>
        <?php
        $getData=mysqli_query($conn,"SELECT * FROM `student_subject`");
        while ($rowData = mysqli_fetch_array($getData)) {
            $sl=$rowData['sl'];
            $stud_name=$rowData['stud_name'];
            $marks_obtain=$rowData['marks_obtain'];
            $stud_category=$rowData['stud_category'];
            ?>
            <tr>
                <td><?php echo $sl; ?></td>
                <td><?php echo $stud_name; ?></td>
                <td><?php echo $marks_obtain; ?></td>
                <td><?php echo $stud_category; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>