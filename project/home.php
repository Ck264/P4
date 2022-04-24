<?php require_once(__DIR__ . "/partials/nav.php"); ?>
<?php
//we use this to safely get the email to display
$email = "";
if (isset($_SESSION["user"]) && isset($_SESSION["user"]["email"])) {
    $email = $_SESSION["user"]["email"];
}
?>
    <p>Welcome <?php echo $email; ?></p>
<?php require(__DIR__ . "/partials/flash.php");?>

<DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 40%;
        border-radius: 5px;
    }

    .card:hover{
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    img{
        border-radius: 5px 5px 0 0;
    }

    .contaner{
        padding: 2px 16px;
    }
</style>
</head>
<body>
    <div class="card">
        <img src="images/youtube.jpg" alt="Youtube" width="" height="">
    </div>
    <div class="card">
        <img src="images/mp3 player.jpg" alt="MP3 Player" width="" height="">
    </div>
    <div class="card">
        <img src="images/conversion.png" alt="Conversion Logo" width="" height="">
    </div>
</body>
</html>
<!--Developer:Chirag Kumar, IS117-004, Spring2022->


