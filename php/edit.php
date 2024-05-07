<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Application</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
<div class="logo-container">
            <img src="../logo.png" alt="logo">
        </div>
    <div class="container">
        <h1>Edit Student Application</h1>
        <!-- Your PHP code for form goes here -->
        <?php
session_start();

// Include your database configuration
require 'config.php';

if (isset($_SESSION['login_user'])) {
    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Retrieve data from the form
        $id = $_POST['id']; // Assuming you have a hidden input field for the ID
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $mob1 = $_POST['mob1'];
        $mob2 = $_POST['mob2'];
        $email = $_POST['email'];
        $aadhar = $_POST['aadhar'];
        $f_name = $_POST['f_name'];
        $f_occ = $_POST['f_occ'];
        $m_name = $_POST['m_name'];
        $m_occ = $_POST['m_occ'];
        $branch = $_POST['branch'];
        $religion = $_POST['religion'];
        // Add more fields as needed

        // Perform database update
        $update_query = "UPDATE student_details SET name = '$name', gender = '$gender', dob = '$dob', mob1 = '$mob1', mob2 = '$mob2', email = '$email', aadhar = '$aadhar', f_name = '$f_name', f_occ = '$f_occ', m_name = '$m_name', m_occ = '$m_occ', branch = '$branch', religion = '$religion' WHERE id = $id";
        
        if (mysqli_query($con, $update_query)) {
            echo "Data updated successfully.";
        } else {
            echo "Error updating data: " . mysqli_error($con);
        }
    }

    

    // Retrieve the data you want to update
    if (isset($_GET['id'])) {
        $id_to_update = $_GET['id'];
        $select_query = "SELECT * FROM student_details WHERE id = $id_to_update";
        $result = mysqli_query($con, $select_query);
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            // Display the data in an HTML form
            echo '<form method="POST">
            <input type="hidden" name="id" value="' . $row['id'] . '">
            Name: <input type="text" name="name" value="' . $row['name'] . '">
            <br><br>
            <label>Gender
                        <select name="gender" name="gender" value="' . $row['gender'] . '">
                            <option value="None">None</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </label>

            <br><br>
            Date Of Birth: <input type="date" name="dob" value="' . $row['dob'] . '">
            <br><br>
            Mobile No1: <input type="number" name="mob1" value="' . $row['mob1'] . '">
            <br><br>
            Mobile No2: <input type="number" name="mob2" value="' . $row['mob2'] . '">
            <br><br>
            Email id: <input type="email" name="email" value="' . $row['email'] . '">
            <br><br>
            Aadhar No: <input type="number" name="aadhar" value="' . $row['aadhar'] . '">
            <br><br>
            Father Name: <input type="text" name="f_name" value="' . $row['f_name'] . '">
            <br><br>
            Father Occupation: <input type="text" name="f_occ" value="' . $row['f_occ'] . '">
            <br><br>
            Mother Name: <input type="text" name="m_name" value="' . $row['m_name'] . '">
            <br><br>
            Mother Occupation: <input type="text" name="m_occ" value="' . $row['m_occ'] . '">
            <br><br>
            <label>Branch
                        <select name="branch" name="branch" value="' . $row['branch'] . '" >
                            <option value="COMP">COMP</option>
                            <option value="ENTC">ENTC</option>
                            <option value="IT">IT</option>
                            <option value="MECH">MECH</option>
                            <option value="CIVIL">CIVIL</option>
                        </select>

            <br><br>
            <label>Religion Detail
                        <select name="religion" id="religion" value="' . $row['religion'] . '">
                            <option value="None">None</option>
                            <option value="HINDU">HINDU</option>
                            <option value="Muslim">Muslim</option>
                            <option value="Jain">Jain</option>
                            <option value="Sikh">Sikh</option>
                            <option value="Christian">Christian</option>
                        </select>
                    </label>
            <br><br>
            <input type="submit" value="Update">
            </form>';
        } else {
            echo "No data found with the specified ID.";
        }
        echo '<form action="admin.php" method="POST">
            <input type="submit" value="Admin">
          </form>';
    }
} else {
    echo "User not logged in.";
}

// Close the database connection
mysqli_close($con);
?>

    </div>
</body>
</html>
