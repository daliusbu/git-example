<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        //Just another manic Monday
        //Just added a new feature for TICKET66
        // AMOTHER CHANGE TO HAVE SQUASH
        // and yet a second change for the same sake of squash
        // The tird change for the same squash

        // replace this example code with whatever you need
        $newvariable = 'idsfiodso';
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
