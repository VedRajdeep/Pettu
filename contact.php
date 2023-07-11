<?php
include 'config.php';
?>
<?php
if(isset($_POST['submit'])){
    $user_name = mysqli_real_escape_string($conn,$_POST['user_name']);
    $user_email = mysqli_real_escape_string($conn,$_POST['user_email']);
    $user_subject = mysqli_real_escape_string($conn,$_POST['user_subject']);
    $user_message = mysqli_real_escape_string($conn,$_POST['user_message']);

$sql = "INSERT INTO `contact`( `user_name`, `user_email`, `user_subject`, `user_message`) VALUES ('$user_name','$user_email','$user_subject','$user_message')";

if($conn->query($sql) === TRUE) 
{
 ?>
		<script>
		alert('successfully uploaded');
        window.location.href='send_mail.php?user_email=<?php echo $user_email;?>&user_name=<?php echo $user_name;?>';
        </script>
		<?php
} 
else 
{
    ?>
		<script>
		alert('error while uploading file');
        window.location.href='index.html?fail';
        </script>
		<?php
}
}
$conn->close();
?>


