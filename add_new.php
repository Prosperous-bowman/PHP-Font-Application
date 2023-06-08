<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];

   $sql = "INSERT INTO `connect`(`id`, `first_name`, `last_name`, `email`, `gender`) VALUES (NULL,'$first_name','$last_name','$email','$gender')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boostrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
     integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

     <!-- font awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
     integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <!-- css -->
     <link rel="stylesheet" href="styles.css">
     <title>My Application</title>
</head>
<body>
    <nav class="nav">
        PHP Complete Font Application
    </nav>

    <div class="container">
        <div class="text">
            <h3>Add New User</h3>
            <p>Complete the form below to add a new user</p>
        </div>

        <div class="containers">

            <form action="" method="post">

                <div class="row">
                    <div class="col">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="first_name" placeholder="">
                    </div>
                    <div class="col">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="last_name" placeholder="">
                    </div>
                </div>

                <div>
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="">
                </div>
                
                <div>
                    <label>Gender:</label> &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                    <label for="male" class="form-check-label">Male</label> &nbsp;

                    <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                    <label for="male" class="form-check-label">Female</label>                    
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" 
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>


</body>
</html>