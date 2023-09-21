<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
  #[Route('/')]
  public function index(): Response
  {
    return new Response('Olá Mundo!');
  }
  #[Route('/teste')]
  public function teste(): Response
  {
    return new Response('Opaaa!');
  }
}