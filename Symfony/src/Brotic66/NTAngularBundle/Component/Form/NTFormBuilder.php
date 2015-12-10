<?php
/**
 * @author Brice VICO
 * @date 10/12/2015
 * @version 1.0.0
 */

namespace Brotic66\NTAngularBundle\Component\Form;

//use Symfony\Component\Form\FormBuilder;

use Brotic66\NTAngularBundle\Component\Form\NTForm;

class NTFormBuilder // extends FormBuilder
{
    private $elements;

    public function add($elem, $type = 'text')
    {
        $this->elements[$elem] = $type;

        return $this;
    }

    public function getForm()
    {
        return new NTForm($this->elements);
    }
}