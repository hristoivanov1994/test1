<?php
class test{
    private $tester;
public function __set($name,$value)
{
    $this->tester=$name;
}
public function __get($name)
{
    // TODO: Implement __get() method.
    return $this->tester;
}
public function setSomething()
{

}
public function getSomething()
{

}
}
$test = new test();

