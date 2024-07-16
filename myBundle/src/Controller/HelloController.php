<?php

namespace GSMCompany\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/my-bundle/hello", name="my_bundle_hello")
     */
    public function hello(): Response
    {
        return new Response('HELLO WORLD!');
    }
}
