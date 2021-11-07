<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

//class HomeController extends Controller{
class HomeController extends AbstractController{
    /**
     * @Route("/hello/{prenom}", name="hello")
     * @Route("/hello/{prenom}/age/{age}", name="hello_2")
     */
    public function hello($prenom = "anonyme", $age='0'){
        
        return $this->render('hello.html.twig',
        [
            'prenom'=> $prenom,
            'age'=> $age
        ]
        );
        //return new Response('Bonjour ' . $name);
        //return $this->render('home.html.twig');
    }


    /**
     * @Route("/", name="homepage")
     */
    public function home(){
        return $this->render('home.html.twig');
    }
}




?>