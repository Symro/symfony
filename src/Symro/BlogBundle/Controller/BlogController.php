<?php

namespace Symro\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    public function indexAction($page)
    {
		if ($page < 1) {
			throw $this->createNotFoundException('Page inexistante (page ='.$page.')');
		}
        return $this->render('SymroBlogBundle:Blog:index.html.twig');
    }

    public function articleAction($id)
    {
    	return $this->render('SdzBlogBundle:Blog:article.html.twig', array(
	      'id' => $id
	    ));
    }

    public function ajouterAction()
	{
		if( $this->get('request')->getMethod() == 'POST' )
		{
			$this->get('session')->getFlashBag()->add('notice', 'Article bien enregistré');

			return $this->redirect( $this->generateUrl('sdzblog_voir', array('id' => 5)) );
		}

		return $this->render('SdzBlogBundle:Blog:ajouter.html.twig');
	}

    public function modifierAction($id)
	{
		return $this->render('SdzBlogBundle:Blog:modifier.html.twig');
	}

	public function supprimerAction($id)
	{
		return $this->render('SdzBlogBundle:Blog:supprimer.html.twig');
	}
}
?>