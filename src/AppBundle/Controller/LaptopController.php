<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 27.12.17
 * Time: 11:04
 */
namespace AppBundle\Controller;

use AppBundle\Entity\Comments;
use AppBundle\Entity\Laptop;
use AppBundle\Repository\LaptopCommentsRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LaptopController extends Controller
{
    /**
     * @Route("/laptop/", name="laptop_list")
     */
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository(Laptop::class);
        $allLaptops = $repository->findActive();

        return $this->render('laptop/ListLaptop.html.twig', array('allLaptops' => $allLaptops));
    }

    /**
     * @Route("/laptop/{id}", name="showLaptop")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $laptop = $em->getRepository('AppBundle:Laptop')
            ->findOneBy(['id' => $id]);

        if (!$laptop) {
            throw $this->createNotFoundException('genus not found');
        }
  //     dump($laptop);
//die;
      //
     //
        return $this->render('laptop/showLaptop.html.twig', array('laptops' => $laptop));
    }

    /**
     * @Route("/laptop/{id}/comments", name="show_laptop_comments")
     * @Method("GET")
     *
     */
    public function getCommentsAction(Laptop $laptop)
    {
        $laptop_comments = [];

        foreach ($laptop->getComment() as $comment) {
            $laptop_comments[] = [
                'id' => $comment->getId(),
                'user' => $comment->getName(),
                'text' => $comment->getComment(),
                'date' => $comment->getCreatedAt()->format('M d, Y')
            ];
        }

        return new JsonResponse($laptop_comments);
    }

}

