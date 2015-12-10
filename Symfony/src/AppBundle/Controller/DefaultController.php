<?php

namespace AppBundle\Controller;

use Brotic66\NTAngularBundle\Controller\NTAngularController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends NTAngularController
{
    /**
     * @Route("/", name="homepage")
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {
        $personne = $this->getDoctrine()->getManager()->getRepository('AppBundle:Personne')->find(1);

        $form = $this->NTCreateFormBuilder($personne)
            ->add('nom')
            ->add('prenom')
            ->add('age')
            ->getForm();

        return $this->NTRender(array('personnes' => $personne, 'form' => $form->createView()));
    }
}
