<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Jaworski
 * Date: 04.03.2018
 * Time: 14:43
 */

namespace AppBundle\Controller;
use AppBundle\Entity\Pdf;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class IndexController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepageAction()
    {
        return $this->render('homepage.html.twig');
    }

    /**
     * @Route("pdf", name="pdf")
     */
    public function pdfAction()
    {
        $em = $this->getDoctrine()->getManager();

        /** @var Pdf[] $pdfs */
        $pdfs = $em->getRepository(Pdf::class)->findAll();
        return$this->render('pdf.html.twig', [
            'pdfs' => $pdfs
        ]);
    }
}