<?php
session_start();
if(isset($_SESSION['f_visit'])) {
    $_SESSION['timer']=time()-$_SESSION['f_visit'];
    print("Прошло времени с вашего последнего визита: " . $_SESSION['timer']);
}
else { 
    $_SESSION['f_visit'] = time(); 
    print("Вы первый раз на этой странице. Дата вашего первого посещения - " . date("Y-m-d"));
}
?>