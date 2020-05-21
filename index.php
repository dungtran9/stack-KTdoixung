<?php
include_once ("Queue.php");
include_once ("Stack.php");
$stack = new Stack();
$queue = new Queue();
$str ="able was I ere I saw elba";
$arr = explode(",",$str);
foreach ($arr as $item){
$stack->push($item);
$queue->enQueue($item);
}
echo $stack->toString()."<br>";
echo $queue->toString()."<br>";
