<?php
//variables to store form data
$fullname = "";
$email = "";
$phone = "";
$password = "";

//error variables
$fnameerror = "";
$emailerror = "";
$phoneerror = "";
$passworderror = "";

//when form is submited
if(isset($_POST['submit'])){
    if(empty($_POST['fname'])){
        $fnameerror = "please supply a valid name";
    }else{
        $fullname = validateform($_POST['fname']);
    }

    if(empty($_POST['email'])){
        $emailerror = "please supply a valid email";
    }else{
        $email = validateform($_POST['email']);
    }

    if(empty($_POST['phone'])){
        $phoneerror = "please supply a valid phone";
    }else{
        $phone = validateform($_POST['phone']);
    }
    if(empty($_POST['password'])){
        $passworderror = "Please supply a valid password";
    }else{
        $password = validateform($_POST['password']);
    }

    $fullname = validateform($_POST['fname']);
    $email = validateform($_POST['email']);
    $phone = validateform($_POST['phone']);
    $password = validateform($_POST['password']);
}



function validateform($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
    <title>FORM</title>
</head>
<body>
    <div class="card p-4 mx-5 mt-5">
        <?php
            //show the input the user subbmitted
            echo "Name : " . $fullname . "<br>";
            echo "email : " . $email . "<br>";
            echo "phone : " . $phone . "<br>";
            echo "Password : " . $password . "<br>";
            
            
            //when a file is uploaded, display the properties
            // Check if a file was uploaded
            if (isset($_FILES['uploadfile'])) {
                echo "File name: " . $_FILES['uploadfile']['name'] . "<br>";
                echo "File size: " . $_FILES['uploadfile']['size'] . "<br>";
                echo "File type: " . $_FILES['uploadfile']['type'] . "<br>";

                // Ensure uploads directory exists
                $uploadDir = "uploads/";
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                // Move the uploaded file
                // if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], "uploads/".$_FILES['uploadfile']['name'])){
                // or
                if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadDir . $_FILES['uploadfile']['name'])) {
                    echo "File has been uploaded.<br>";
                } else {
                    echo "File upload FAILED.<br>";
                }
            } else {
                echo "No file uploaded or an error occurred during upload.<br>";
            }
    
        ?>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="my-2">
                <?php echo "<span style= 'color:red'>".$fnameerror."</span>"; ?>
                <input type="text" name="fname" placeholder="Fullname" class="form-control" required>
            </div>
            <div class="my-2">
                <?php echo "<span style= 'color:red'>".$emailerror."</span>"; ?>
                <input type="email" name="email" placeholder="Email" class="form-control" required>
            </div>
            <div class="my-2"> 
                <?php echo "<span style= 'color:red'>".$phoneerror."</span>"; ?>
                <input type="text" name="phone" placeholder="Phone" class="form-control" required>
            </div>
            
            <div class="my-2"> 
                <?php echo "<span style= 'color:red'>".$passworderror."</span>"; ?>
                <input type="password" name="password" placeholder="password" class="form-control" required>
            </div>
            
            <div class="my-2"> 
                <input type="file" name="uploadfile" placeholder="upload" class="form-control" required>
            </div>
            
            <input type="submit" value="register" name="submit" class="form-control btn btn-primary">
        </form>

        <a href="index.php">index page</a>
    </div>

</body>
</html>