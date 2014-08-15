<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// src/Acme/HelloBundle/Controller/HelloController.php
namespace Acme\HelloBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller{
    public function indexAction($name){
        return $this->render('AcmeHelloBundle:Hello:index.html.twig', array('name' => $name));
        //return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
}