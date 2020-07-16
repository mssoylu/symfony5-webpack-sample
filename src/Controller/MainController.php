<?php

namespace App\Controller;

use App\Entity\Content;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    public function index()
    {
        $em = $this->getDoctrine()->getManager();

        $contents = $em->getRepository(Content::class)->findAll();

        return $this->render('main/index.html.twig', [
            'contents' => $contents
        ]);
    }

    public function show($id)
    {
        $em = $this->getDoctrine()->getManager();
        $content = $em->getRepository(Content::class)->find($id);

        return $this->render('main/show.html.twig', [
            'content' => $content
        ]);
    }

}
