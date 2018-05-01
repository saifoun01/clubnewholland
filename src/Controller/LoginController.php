<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller {
    /**
     * @Route("/")
     */
    public function index(){
        // return new Response('<html><head></head><body><h1>index</h1></body></html>');
        return $this->render('login/login.html.twig');
    }
    
}
