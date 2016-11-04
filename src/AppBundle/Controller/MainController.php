<?php
/**
 * Created by PhpStorm.
 * User: nobuyukifujioka
 * Date: 04/11/2016
 * Time: 19:25
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{

    public function homepageAction()
    {
        return $this->render('main/homepage.html.twig');
    }
}