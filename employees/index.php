<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Manage Employees</h2>

        <!-- Add User Form -->
        <div class="mt-4">
            <form action="create.php" method="post">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="salary">Salary</label>
                        <input type="number" class="form-control" name="salary" id="salary" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="dob">DOB</label>
                        <input type="date" class="form-control" name="dob" id="dob" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="margin-top: 5px;">Add Employee</button>
            </form>
        </div>

        <!-- User Table -->
        <div class="mt-5">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Salary</th>
                        <th>Dob</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'conn.php';
                    $sql = "SELECT * FROM employee";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>

                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['address']}</td>
                            <td>{$row['salary']}</td>
                            <td>{$row['dob']}</td>
                            <td>
                                <a href='update.php?id={$row['id']}' class='btn btn-warning'>Edit</a>
                                <a href='delete.php?id={$row['id']}' class='btn btn-danger'>Delete</a>

                            </td>
                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5' class='text-center>No Employees Found </td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>