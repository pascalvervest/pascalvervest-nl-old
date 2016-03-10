<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{
	/**
	 * @Route("/page/{slug}")
	 * @Template("AppBundle::page.html.twig")
	 */
	public function indexAction($slug, Request $request)
	{
		$page = $this->getDoctrine()
            ->getRepository('AppBundle:Page')
            ->findOneBySlug((string) $slug);
		
		return [
			'page' => $page
		];
		
	}
}