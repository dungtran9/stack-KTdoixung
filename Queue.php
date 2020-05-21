<?php


class Queue
{
public $limit;
public $queue;
public function __construct()
{

    $this->queue=[];
}
public function enQueue($data){
    array_push($this->queue,$data);
}
public function deQueue(){
    array_shift($this->queue);
}
public function toString(){
    return implode($this->queue);
}
}