<?php

// src/Gatomlo/GamesCatalogBundle/Controller/AdvertController.php

namespace Gatomlo\GamesCatalogBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AdvertController extends Controller
{
  public function indexAction()
  {
    $content = $this->get('templating')->render('GatomloGamesCatalogBundle:Advert:index.html.twig');


    return new Response($content);
  }

  public function viewAction($id)
   {

     return new Response("Affichage de l'annonce d'id : ".$id);
   }
}
