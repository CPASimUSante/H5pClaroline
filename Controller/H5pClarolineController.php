<?php

namespace CPASimUSante\H5pClarolineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as EXT;
use Symfony\Component\HttpFoundation\Request;
use CPASimUSante\H5pClarolineBundle\Entity\H5p;
use CPASimUSante\H5pClarolineBundle\Form\H5pType;

/**
 * Class H5pClarolineController
 *
 * @category   Controller
 * @package    CPASimUSante
 * @subpackage H5pClaroline
 * @author     CPASimUSante <contact@simusante.com>
 * @copyright  2015 CPASimUSante
 * @license    http://www.opensource.org/licenses/mit-license.php MIT License
 * @version    0.1
 * @link       http://simusante.com
 *
 * @EXT\Route(
 *      name    = "cpasimusante_h5pclaroline",
 * )
 */
class H5pClarolineController extends Controller
{
    /**
     * Show main page
     *
     * @EXT\Route("/open/{id}", name="cpasimusante_h5p_open", requirements={"id" = "\d+"}, options={"expose"=true})
     * @EXT\ParamConverter("h5p", class="CPASimUSanteH5pClarolineBundle:H5p", options={"id" = "id"})
     * @EXT\Template("CPASimUSanteH5pClarolineBundle:H5p:open.html.twig")
     * @param Request $request
     * @param H5p $h5p
     * @return array
     */
    public function chooseAction(Request $request, H5p $h5p)
    {
        return array(
            '_resource' => $h5p,
        );
    }
}
