<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 27.12.17
 * Time: 11:04
 */
namespace AppBundle\Controller;

use AppBundle\Entity\Tablet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class TabletController extends Controller
{
    /**
     * @Route("/tablet/", name="tablet_list")
     */
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository(Tablet::class);
        $allTablets = $repository->findActive();
        return $this->render('tablet/ListTablet.html.twig',array('allTablets' => $allTablets));
    }

    /**
     * @Route("/tablet/{id}", name="showTablet")
     */
    public function showAction($id)
    {
        $repository = $this->getDoctrine()->getRepository(Tablet::class);
        $tablet = $repository->findBy(['id' => $id]);
       // dump($tablet);
       // die;
        return $this->render('tablet/showTablet.html.twig',array('tablets' => $tablet));
    }
}