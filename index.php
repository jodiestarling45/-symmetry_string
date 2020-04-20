<?php

class stack
{
    public $stack;
    public $queue;
    public $limit;
    public $count;
    public function __construct($stack,$queue,$limit)
    {
        if (is_array($stack)){
            $this->stack=$stack;
        }else{
            die("the value is null");
        }
        if (is_array($queue)){
            $this->queue=$queue;
        }else{
            die("none value inside is null");
        }
        if (is_integer($limit)){
            $this->limit=$limit;
        }else{
            $this->limit=10;
        }
        $this->count=-1;
    }
    public function push($value){
        if ($this->isEmpty() || count($this->stack)<=$this->limit){
            array_push($this->stack,$value);
            $this->count++;
        }else{
            echo "please remove value top from array ";
            echo "press into keyboard stack->pop(); to remove the top value ";
        }
    }
    public function pop(){
        array_pop($this->stack);
        $this->count--;
    }
    public function isEmpty(){
        return empty($this->stack);
    }
    public function enqueue($value){
        if (empty($this->queue)||count($this->queue)<=$this->limit){
            array_push($this->queue,$value);
            $this->count++;
        }else{
            echo "warning the queue will delete the first value from array";
            $this->dequeue();
            $this->count--;
        }
    }
    public function dequeue(){
        array_shift($this->queue);
    }
    public function check(){
        for ($i=0;$i<$this->limit+1;$i++){
            if ($this->queue[$i]==$this->stack[$i]){
                echo "each match with ".$this->stack[$i]."<br>";
            }else{
                die("none value match");
            }
        }
    }

}
$arr=[];
$limit=10;
$stack=new stack($arr,$arr,$limit);
$stack->push("h");
$stack->push("e");
$stack->push('l');
$stack->push('l');
$stack->push('o');
$stack->enqueue('h');
$stack->enqueue('e');
$stack->enqueue('l');
$stack->enqueue('l');
$stack->enqueue('o');
$stack->check();
