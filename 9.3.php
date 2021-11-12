<form action="9.3.php" method="post">
 <p>Введите первое число: <input type="text" name="first" /></p>
 <p>Введите второе число: <input type="text" name="second" /></p>
 <p><input type="submit" /></p>
</form>

<?php
error_reporting(0);
  function getCommonDivisors($a, $b) {
    $arr=[];
    if($a<$b) $num=$a;
    else $num=$b;
    for($i=1;$i<=$num;$i++) {
        if($a % $i == 0 && $b % $i == 0) array_push($arr,$i);
    }
    return $arr;
  }
  $first=(htmlspecialchars($_POST['first']));
  $second=(htmlspecialchars($_POST['second']));
  $arrval=getCommonDivisors($_POST['first'],$_POST['second']);
  print("Общие делители $first и $second = ");
  foreach($arrval as $num) print("$num ");
?>