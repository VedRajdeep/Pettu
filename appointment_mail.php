<?php
include('config.php');
if (isset($_GET['owner_name']) && isset($_GET['reason_for_appointment'])) {
    $from = $_GET['owner_name'];
    $to = $_GET['reason_for_appointment'];
    $owner_name =$_GET['owner_name'];
}

$subject = "You getting appointment $owner_name";

$txt = 'Dear pet owner, you get appointment,:'.$reason_for_appointment.'';

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
        alert('Mail was   send');
        window.location.href = 'index.php?fail';
    </script>
<?php
}
?>