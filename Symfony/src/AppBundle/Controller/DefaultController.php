<?php

namespace AppBundle\Controller;

use AppBundle\test;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DefaultController extends Controller
{
    /**
     * @Route("/test", name="homepage")
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {
        $obj = new test('coucou', 're', new test('salut', 'c', null));
        return $this->get('brotic66_nt_angular.return')
            ->send(array('test' => 'test', 'test2' => 124, 'test3' => $obj));
    }
}
