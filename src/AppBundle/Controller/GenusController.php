<?php
/**
 * Created by PhpStorm.
 * User: nobuyukifujioka
 * Date: 02/11/2016
 * Time: 13:29
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class GenusController
{

    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {
        return new Response("The genus: ".$genusName);
    }
}