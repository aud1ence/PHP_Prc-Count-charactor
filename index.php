<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $text = $_POST['input'];
    $search_char = $_POST['check'];
}

$count="0";
for($x="0"; $x< strlen($text); $x++)
{
    if(substr($text,$x,1)==$search_char)
    {
        $count=$count+1;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">
    <input type="text" name="input">
    <input type="text" name="check">
    <input type="submit" name="send" value="Kiem tra">
    <p><?="So luong khi tu la: " . $count ?></p>
</form>
</body>
</html>
