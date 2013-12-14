<?php

namespace Spx\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SpxMainBundle:Default:index.html.twig');
    }

    public function produitsAction($modele)
    {
        return $this->render('SpxMainBundle:Produits:'.$modele.'.html.twig');
    }

    public function habillagesAction($type)
    {
        return $this->render('SpxMainBundle:Habillage:'.$type.'.html.twig');
    }
    public function securiteAction($item)
    {
        return $this->render('SpxMainBundle:Securite:'.$item.'.html.twig');
    }

    public function fonctionnementAction()
    {
        return $this->render('SpxMainBundle:Galerie:fonctionnement.html.twig');
    }
    public function photosAction()
    {
        return $this->render('SpxMainBundle:Galerie:photos.html.twig');
    }

    public function newsAction()
    {
        return $this->render('SpxMainBundle:Default:news.html.twig');
    }
    public function commanderAction()
    {
        return $this->render('SpxMainBundle:Default:commander.html.twig');
    }
    public function mentionAction()
    {
        return $this->render('SpxMainBundle:Default:mention.html.twig');
    }
}
