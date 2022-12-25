<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg form</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <input type="text" name="Username" placeholder="Enter ur username: " />
            <input type="button" name="search" value="Search by Username">
        </form>

        <table>
            <tr>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Mobile_no</th>
                <th>City</th>
            </tr>

            <?php
            $connnection = mysqli_connect("localhost", "root", "");
            $db = mysqli_select_db($connnection, "reg_form_ahan");

            if (isset($_POST['search'])) {
                $id = $_POST['Username'];

                $query = "SELECT * FROM 'form' WHERE Username='$id' ";
                $query_run = mysqli_query($connnection, $query);

                // to search always use while loop
                while ($row = mysqli_fetch_array($query_run)) {
            ?>
                    <tr>
                        <td> <?php echo $row['FirstName']; ?> </td>
                        <td> <?php echo $row['LastName']; ?> </td>
                        <td> <?php echo $row['Email']; ?> </td>
                        <td> <?php echo $row['Mobile_no']; ?> </td>
                        <td> <?php echo $row['City']; ?> </td>
                        
<!-- 
                        <td> <?php echo $_POST["FirstName"]; ?> </td>
                        <td> <?php echo $_POST["LastName"]; ?> </td>
                        <td> <?php echo $_POST["Email"]; ?> </td>
                        <td> <?php echo $_POST["Mobile_no"]; ?> </td>
                        <td> <?php echo $_POST["City"]; ?> </td>
                    </tr> -->

            <?php
                }
            }
            ?>
        </table>
    </div>
</body>

</html>