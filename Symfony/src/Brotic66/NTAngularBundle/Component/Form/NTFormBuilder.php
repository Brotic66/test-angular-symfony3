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

    public function add($elem, $type = 'text', $params = array())
    {
        if (array_key_exists('label', $params))
            $label = $params['label'];
        else
            $label = $elem;

        $this->elements[$elem]['type'] = $type;
        $this->elements[$elem]['label'] = $label;

        foreach ($params as $key => $param) {
            if ($key != 'label') {
                $this->elements[$elem][$key] = $param;
            }
        }

        return $this;
    }

    public function getForm()
    {
        return new NTForm($this->elements);
    }
}