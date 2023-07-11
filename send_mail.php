<?php
include('config.php');
if (isset($_GET['user_email']) && isset($_GET['user_name'])) {
    $from = $_GET['user_email'];
    $to = $_GET['user_email'];
    $user_name =$_GET['user_name'];
}

$subject = "You getting appointment $user_name";

$txt = 'Dear pet owner, you get appointment,:'.$user_name.'';

$headers = "From: <$from>";
$sentmail =  mail($to, $subject, $txt, $headers);
if ($sentmail == 1) { ?>
    <script>
        alert('Mail has been sent');
        window.location.href = 'index.php?success';
    </script>
<?php
} else { ?>
    <script>
        alert('Mail was  not able to send');
        window.location.href = 'index.php?fail';
    </script>
<?php
}
?>