<form action="9.2.php" method="post">
 <p>Введите текст: <input type="text" name="text" /></p>
 <p><input type="submit" /></p>
</form>

<?php
error_reporting(0);
  function getDivisors($num) {
    $arr=[];
    for($i=1;$i<=$num;$i++) if($num % $i == 0) array_push($arr,$i);
    return $arr;
  }
  $text=(htmlspecialchars($_POST['text']));
  $arrval=getDivisors($_POST['text']);
  print("Делители $text = ");
  foreach($arrval as $num) print("$num ");
?>