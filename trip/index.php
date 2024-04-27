<?php
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "test"; // Database name

    $con = mysqli_connect($server, $username, $password, $database);

    if(!$con){
        die("Connection to the database failed: " . mysqli_connect_error());
    }

    // Extracting values from POST
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    // SQL query to insert data
    $sql = "INSERT INTO trip (name, age, gender, email, phone, `desc`, dt) 
        VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";


    // Execute query and check for errors
    if ($con->query($sql) === true) {
        // echo "Record inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    // Close connection
    $con->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>collage trip from</title>
    <link rel="stylesheet" href="style.css">
  

</head>
<body>

    <img  class="img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Shivajirao_S_Jondhle_college_of_Engineering_%26_Technology.jpg/1200px-Shivajirao_S_Jondhle_college_of_Engineering_%26_Technology.jpg" alt="img" >
  <div class="container">
    
    <h1>Wlcome to Shivajirao s jondhale collage of Engineerin US trip form</h1>
    <p>Enter tyoure detail and conafrom youre particepation</p>
    <p> THanks for submmiting your from .we are happy to see you joining us  for the US trip</p>


    <form  action="index.php" method="POST">
       
        <input type="text" name="name" id="name" placeholder="Enter your name ">
        <input type="text" name="age" id="age" placeholder="Enter your age">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender ">
        <input type="email" name="email" id="email" placeholder="Enter your email">
        <input type="phone" name="phone" id="phone" placeholder="Enter your phone">

        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information"></textarea>

    <button class="btn">Submit</button>
    


    </form>

  </div> 
  <script>src="index.js"</script> 
</body>
</html>