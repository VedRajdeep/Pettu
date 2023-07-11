<?php
include('config.php');
?>
<?php
if(isset($_POST['submit'])){
$pet_name = mysqli_real_escape_string($conn,$_POST['pet_name']);
$breed_name = mysqli_real_escape_string($conn,$_POST['breed_name']);
$reason_for_appointment = mysqli_real_escape_string($conn,$_POST['reason_for_appointment']);
$gender = mysqli_real_escape_string($conn,$_POST['gender']);
$owner_name = mysqli_real_escape_string($conn,$_POST['owner_name']);
$owner_contact_no = mysqli_real_escape_string($conn,$_POST['owner_contact_no']);
$appoint_date = mysqli_real_escape_string($conn,$_POST['appoint_date']);

$sql = "INSERT INTO `appointment`( `pet_name`, `breed_name`, `reason_for_appointment`, `gender`, `owner_name`, `owner_contact_no`, `appoint_date`) VALUES ('$pet_name','$breed_name','$reason_for_appointment','$gender','$owner_name','$owner_contact_no','$appoint_date')";
}
if($conn->query($sql) === TRUE) 
{
 ?>
		<script>
		alert('successfully uploaded');
        window.location.href='appointment_mail.php?owner_name=<?php echo $owner_name;?>&reason_for_appointment=<?php echo $reason_for_appointment;?>';
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

$conn->close();
?>


