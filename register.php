<?php
include 'config.php';
?>

<?php
if(isset($_POST['submit'])){
    $pet_name = mysqli_real_escape_string($conn,$_POST['pet_name']);
    $breed = mysqli_real_escape_string($conn,$_POST['breed']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $pet_dob = mysqli_real_escape_string($conn,$_POST['pet_dob']);
    $Fname = mysqli_real_escape_string($conn,$_POST['Fname']);
    $Lname = mysqli_real_escape_string($conn,$_POST['Lname']);
    $Pnumber = mysqli_real_escape_string($conn,$_POST['Pnumber']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $leave_comment = mysqli_real_escape_string($conn,$_POST['leave_comment']);

    $sql = "INSERT INTO `register`( `pet_name`, `breed`, `gender`, `pet_dob`, `Fname`, `Lname`, `Pnumber`, `email`, `leave_comment`) 
    VALUES ('$pet_name','$breed','$gender','$pet_dob','$Fname','$Lname','$Pnumber','$email','$leave_comment')";
 
    if($conn->query($sql) === TRUE) 
{
 ?>
		<script>
		alert('successfully uploaded');
        window.location.href='index.php?success';
        </script>
		<?php
} 
else 
{
    ?>
		<script>
		alert('error while uploading file');
        window.location.href='index.php?fail';
        </script>
		<?php
}
}
$conn->close();

?>