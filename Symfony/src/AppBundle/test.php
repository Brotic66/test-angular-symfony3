<?php
/**
 * Created by PhpStorm.
 * User: brice
 * Date: 09/12/15
 * Time: 15:23
 */

namespace AppBundle;


class test
{
    private $var1;
    private $var2;

    /**
     * @var test
     */
    private $var3;

    /**
     * test constructor.
     * @param $var1
     * @param $var2
     */
    public function __construct($var1, $var2, $var3)
    {
        $this->var1 = $var1;
        $this->var2 = $var2;
        $this->var3 = $var3;
    }


    /**
     * @return mixed
     */
    public function getVar2()
    {
        return $this->var2;
    }

    /**
     * @param mixed $var2
     */
    public function setVar2($var2)
    {
        $this->var2 = $var2;
    }

    /**
     * @return mixed
     */
    public function getVar1()
    {
        return $this->var1;
    }

    /**
     * @param mixed $var1
     */
    public function setVar1($var1)
    {
        $this->var1 = $var1;
    }

    /**
     * @return test
     */
    public function getVar3()
    {
        return $this->var3;
    }

    /**
     * @param test $var3
     */
    public function setVar3($var3)
    {
        $this->var3 = $var3;
    }

}