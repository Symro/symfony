<?php

namespace Symro\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    public function indexAction()
    {
        return $this->render('SymroBlogBundle:Blog:index.html.twig', array('nom' => 'Symro'));
    }
}
