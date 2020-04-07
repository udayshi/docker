<?php

namespace App\Controller;

use App\Entity\Demo;
use App\Entity\DemoReference;
use App\Form\DemoType;
use App\Repository\DemoReferenceRepository;
use App\Repository\DemoRepository;
use App\Services\Logger;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DemoController
 * @package App\Controller
 * @Route("/demo")
 */
class DemoController extends AbstractController
{
    private $logger;
    function __construct(Logger $lg)
    {
        $this->logger=$lg;
    }
    /**
     * @Route("/info", name="info")
     */
    public function info()
    {

      phpinfo();
      exit;
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


    /**
     * @Route("/db_demo", name="db_demo")
     */
    public  function db_demo(DemoRepository $dr){



        $item=$dr->find(1);
        /** @var \App\Entity\Demo $ref */
        $ref=$item->getReference();


        /** List all the demos on this references */

        $demos=$ref->getReferences();

        foreach ($demos as $demo) {
            /** @var \App\Entity\Demo $demo */
            echo $demo->getName().'<br/>';

        }



dd('Done');




        return new Response('Db action done');
    }



    /**
     * @Route("/db_demo_add", name="db_demo_add")
     */
    public  function db_demo_add(){
        $em = $this->getDoctrine()->getManager();
       $ref=new DemoReference();
        $ref->setName('Reference Value');
        $em->persist($ref);

       $names=['uday','bijay','sanjay'];
       foreach($names as $name){
           $obj=new Demo();
           $obj->setName(ucfirst($name).' Shiwakoti');
           $obj->setRefrence($ref);
           $em->persist($obj);

       }
        $em->flush();


        return new Response('Db action done');
    }

    /**
     * @Route("/form", name="form")
     */
    public  function db_demo_form(){

        $demoEntity=new Demo();
        $form = $this->createForm('App\Form\DemoType', $demoEntity);
        $form->get('item_checkbox')->setData(['N']);
        $data=[];
        $data['form']=$form->createView();
        return $this->render('demo/form.html.twig',$data);
    }


}
