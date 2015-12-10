<?php
/**
 * Created by PhpStorm.
 * User: brice
 * Date: 10/12/15
 * Time: 15:43
 */

namespace Brotic66\NTAngularBundle\Component\Form;


class NTFormView
{
    private $elements;

    public function __construct(array $elements)
    {
        $this->elements = $elements;
    }

    /**
     * @return mixed
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * @param mixed $elements
     */
    public function setElements($elements)
    {
        $this->elements = $elements;
    }
}