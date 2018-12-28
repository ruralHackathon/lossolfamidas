<?php

namespace App\Controller;

use App\Entity\Mapa;
use App\Form\MapaType;
use App\Repository\MapaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/mapa")
 */
class MapaController extends AbstractController
{
    /**
     * @Route("/", name="mapa_index", methods={"GET"})
     */
    public function index(MapaRepository $mapaRepository): Response
    {
        return $this->render('mapa/index.html.twig', ['mapas' => $mapaRepository->findAll()]);
    }

    /**
     * @Route("/new", name="mapa_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $mapa = new Mapa();
        $form = $this->createForm(MapaType::class, $mapa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($mapa);
            $entityManager->flush();

            return $this->redirectToRoute('mapa_index');
        }

        return $this->render('mapa/new.html.twig', [
            'mapa' => $mapa,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="mapa_show", methods={"GET"})
     */
    public function show(Mapa $mapa): Response
    {
        return $this->render('mapa/show.html.twig', ['mapa' => $mapa]);
    }

    /**
     * @Route("/{id}/edit", name="mapa_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Mapa $mapa): Response
    {
        $form = $this->createForm(MapaType::class, $mapa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('mapa_index', ['id' => $mapa->getId()]);
        }

        return $this->render('mapa/edit.html.twig', [
            'mapa' => $mapa,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="mapa_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Mapa $mapa): Response
    {
        if ($this->isCsrfTokenValid('delete'.$mapa->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($mapa);
            $entityManager->flush();
        }

        return $this->redirectToRoute('mapa_index');
    }
}
