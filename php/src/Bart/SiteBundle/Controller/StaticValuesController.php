<?php

namespace Bart\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class StaticValuesController extends Controller
{
    public function setTopbarAction()
    {
        
        //creating a repository
        $repository = $this->getDoctrine()->getRepository('BartSiteBundle:StaticValues');
        
        //compose a query
        $query = $repository->createQueryBuilder('sv')
                ->where('sv.sectionid = :id')
                ->setParameter('id','1')
                ->getQuery();
        
        //excecute the query
        $values = $query->getResult();
        
        //compare the values and write them in an array
        foreach ($values as &$value) {
            $name = $value->getName();
            
            if($name == 'topbarTitle')
            {
                $v = $value->getValue();
                $arrValues['topbarTitle'] = $v;
            }
        }
        
        $arrValues['homepage_url'] = $this->generateUrl('bart_site_homepage');
        $arrValues['addmovie_url'] = $this->generateUrl('add_movie');
        
        $content = $this->renderView('BartSiteBundle:Default:staticValues.html.twig',$arrValues);
        return new Response($content);
    }
    
    public function setValuesFormAction()
    {
        $content = $this->renderView('BartSiteBundle:Forms:addForm.html.twig');
        return new Response($content);
    }
    
    public function setValueAction($id)
    {       
        $em = $this->getDoctrine()->getManager();
        $static = $em->getRepository('BartSiteBundle:Staticvalues')->find($id);
        
        if($static)
        {
            $value = "hahaha ja da is er";
        }
        
        $em->flush();
        
        return new Response($value);
    }
}
