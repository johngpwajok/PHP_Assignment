<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MapController extends Controller
{
    /**
     * @Route("/maps", name="map_s")
     */
   public function mapAction(Request $request)
    {
        return $this->render('maps/map.html.twig.php', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
    * @Route("/geo-code", name="geo_code_address")
    */
    public function geoCodeAddressAction(Request $request) {
        echo "<script type='text/javascript'>Hello Shit Cunts!!!</script>";

        return $this->render("/maps/map.html.twig.php",
                                            array(
                                                'test_data' => 'Hello World123')
                                        );
    }


        /**
     * @Route("/maps", name="map_home")
     */
  /*  public function openAction(Request $request)
    {
        return $this->render('maps/home.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);

    }
*/
    // define variables and set to empty values

 

}