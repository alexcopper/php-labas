<?php
class goods {
    protected $item = array();
    function del($i)
    {
        unset($this->item[i]);
    }
    function add($arr)
    {
        array_push($this->item,$arr);
    }
    function show($i = NULL)
    {
        if(!isset($i)) print_r($this->item);
        else print_r($this->item[$i]);
    }
    function nameChange($i,$val) {
        $this->item[$i][0]=$val;
    }
    function colorChange($i,$val) {
        $this->item[$i][1]=$val;
    }
    function priceChange($i,$val) {
        $this->item[$i][2]=$val;
    }
}
$items = new goods();
/*$items->item[0] = array(
    array('Яблоки','Красные',20)
);
$items->item[1] = array(
    array('Перец','Красный',50)
);*/
$items->add(array('Перец','Красный',30));
$items->add(array('Яблоки','Красные',50));
$items->add(array('Бананы','Желтые',60));
$items->show();
$items->priceChange(0,100);
print("</br>");
$items->show();
?>