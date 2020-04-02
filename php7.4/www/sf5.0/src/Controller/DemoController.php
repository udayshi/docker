<?php

namespace App\Controller;



use App\Services\Logger;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends AbstractController
{
    private $logger;
    function __construct(Logger $lg)
    {
        $this->logger=$lg;
    }

    /**
     * @Route("/demo", name="demo")
     */
    public function index()
    {

       $this->logger->set('Logging from logger service');
        $data=[];

        $data['list']=[['name'=>'Uday'],['name'=>'Bj'],['name'=>'Sanjay']];

        #return $this->redirectToRoute('redirect_link');
        return $this->render('demo/index.html.twig',$data);
    }



    /**
     * @Route("/redirect_link", name="redirect_link")
     */
     public  function link(){
         return new Response('Redirect link page');
     }
}
