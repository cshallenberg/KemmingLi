<?php
if($_POST["memory"]) {
    mail("kemingli41@gmail.com", "Memory Machine", $_POST["memory"], "From: kemingli41@gmail.com");
        $thankYou="<p>Thank you! Your memory has been sent.</p>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Fjalla+One&display=swap" rel="stylesheet">
<style>
body {font-family: 'Fjalla One', sans-serif;   color: white; background-color: #0000fd;}
</style>
</head>
<body>
<?=$thankYou ?>
</body>
</html>
