<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{

    /**
     * @Route("/hello/{prenom}/age/{age}",name="hello")
     * @Route("/hello", name="hello_base")
     * @Route("/hello/{prenom}", name="hello_prenom")
     * Montre la page qui dit bjr
     *
     * @return void
     */
    public function hello($prenom = "", $age = "")
    {
        return $this->render(
            'hello.html.twig',
            [
                'prenom' => $prenom,
                'age' => $age
            ]
        );
    }

    /**
     * @Route("/", name="homepage")
     */
    public function home()
    {

        $fruits = ["Pomme", "Poire", "Fraises"];

        return $this->render(
            'home.html.twig',
            [
                'title' => "Bonjour Mon pti !",
                'age' => 34,
                'tableau' => $fruits
                
            ]
        ); 
    }
}