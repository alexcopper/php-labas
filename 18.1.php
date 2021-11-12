<form action="18.1.php" method="post">
 <p>Введите текст: <input type="text" name="text" /></p>
 <p><input type="submit" /></p>
</form>

<?php
error_reporting(0);
$str=mb_strtolower($_POST['text']);
print(htmlspecialchars($str));
?>