<?php

namespace Bart\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Bart\SiteBundle\Entity\Movies;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $content = $this->createHomePageAction();
        return $content;
    }
    
    public function createHomePageAction()
    {
        //generate topbar
        $topbar = $this->forward('BartSiteBundle:StaticValues:setTopbar')->getContent();
        
        $arrValues['topbar'] = $topbar;
        $arrValues['content'] = "";
        //generate and return page with topbar given
        return new Response ($this->renderView('BartSiteBundle:Default:index.html.twig',$arrValues));
    }
    
    public function addMovieAction()
    {
        $content = $this->forward('BartSiteBundle:Forms:renderAddMovie')->getContent();
        $topbar = $this->forward('BartSiteBundle:StaticValues:setTopbar')->getContent();
        
        $arrValues['topbar'] = $topbar;
        $arrValues['content'] = $content;
        
        return new Response ($this->renderView('BartSiteBundle:Default:index.html.twig',$arrValues));
    }
}
