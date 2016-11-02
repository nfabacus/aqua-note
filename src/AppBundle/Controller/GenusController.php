<?php
/**
 * Created by PhpStorm.
 * User: nobuyukifujioka
 * Date: 02/11/2016
 * Time: 13:29
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class GenusController extends Controller
{

    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {
        return $this->render('genus/show.html.twig', [
            'name' => $genusName
        ]);
    }
}