<?php
if(isset($_POST['submit'])){
    $mail=mysqli_real_escape_string($conn, $_POST['mail']);
    $name= mysqli_real_escape_string($conn, $_POST['name']);
    $phone=mysqli_real_escape_string($conn, $_POST['number']);
    $city=mysqli_real_escape_string($conn, $_POST['city']);
    $state=mysqli_real_escape_string($conn, $_POST['state']);

    $insertquery="INSERT INTO form ( `Email`, `Name`, `PhoneNo`, `City`, `State`) VALUES ('$mail','$name','$phone','$city','$state')";
    if(mysqli_query($conn, $insertquery)){
        ?>
        <script>
            alert("Your form is submitted");
        </script>
        <?php
    }
    else{
        echo "Error: " . $insertquery . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
 }  
 ?>
