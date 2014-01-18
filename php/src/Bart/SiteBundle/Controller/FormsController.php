<?php

namespace Bart\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Bart\SiteBundle\Entity\Movies;
use Symfony\Component\HttpFoundation\Request;

class FormsController extends Controller
{
    public function renderAddMovieAction(Request $request)
    {
        $arrValues['alert'] = '';
        $movie = new Movies();
        $movie->setDateadded(new \DateTime('today'));
        
        $form = $this->createFormBuilder($movie)
                ->add('name','text')
                ->add('genreid','number')
                ->add('trailer','text')
                ->add('dateadded','date',array(
                        'widget' => 'single_text'))
                ->add('publicationyear','number')
                ->add('save','submit')
                ->getForm();
        
        $form->handleRequest($request);
        
        if($form->isValid())
        {
            if($form->get('save')->isClicked())
            {
                $arrValues['alert'] = '<div data-alert class="alert-box success radius">
                                        Add the movie is completed!
                                        <a href="#" class="close">&times;</a>
                                      </div>';
                $arrData = $this->$form->getData();
                print_r($arrData);
            }
        }
        else
        {
            if($form->get('save')->isClicked())
            {
                $arrValues['alert'] = '<div data-alert class="alert-box success radius">
                                        Fail to add
                                        <a href="#" class="close">&times;</a>
                                      </div>';
            }
        }
        
        $arrValues['form'] = $form->createView();
        
        $content = $this->renderView('BartSiteBundle:Forms:addForm.html.twig',$arrValues);
        
        return new Response ($content);
    }
}
?>
