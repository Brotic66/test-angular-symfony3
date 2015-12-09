<?php

namespace AppBundle\Controller;

use AppBundle\Personne;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {
        $toRtn = array();

        for ($i = 0; $i < 1000; $i++) {
            $personne = new Personne();
            $personne->setPrenom('VICO');
            $personne->setPrenom('Brice');
            $personne->setAge('22');
            $personne->setAmis(array());

            $toRtn[] = $personne;
        }

        return $this->get('brotic66_nt_angular.return')
            ->send(array('personnes' => $toRtn));
    }
}
