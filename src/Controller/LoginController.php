<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Twig\Environment;

//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
class LoginController  { 
    
    public function index(Environment $twig){
         return new Response($twig->render('login/login.html.twig'));
        //return new Response('Salut');
    }
    
}
