<?php

namespace App\Controller;

use App\Entity\Inicio;
use App\Form\InicioType;
use App\Repository\InicioRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/inicio")
 */
class InicioController extends AbstractController
{
    /**
     * @Route("/", name="inicio_index", methods={"GET"})
     */
    public function index(InicioRepository $inicioRepository): Response
    {
        return $this->render('inicio/index.html.twig', ['inicios' => $inicioRepository->findAll()]);
    }

    /**
     * @Route("/new", name="inicio_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $inicio = new Inicio();
        $form = $this->createForm(InicioType::class, $inicio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($inicio);
            $entityManager->flush();

            return $this->redirectToRoute('inicio_index');
        }

        return $this->render('inicio/new.html.twig', [
            'inicio' => $inicio,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="inicio_show", methods={"GET"})
     */
    public function show(Inicio $inicio): Response
    {
        return $this->render('inicio/show.html.twig', ['inicio' => $inicio]);
    }

    /**
     * @Route("/{id}/edit", name="inicio_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Inicio $inicio): Response
    {
        $form = $this->createForm(InicioType::class, $inicio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('inicio_index', ['id' => $inicio->getId()]);
        }

        return $this->render('inicio/edit.html.twig', [
            'inicio' => $inicio,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="inicio_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Inicio $inicio): Response
    {
        if ($this->isCsrfTokenValid('delete'.$inicio->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($inicio);
            $entityManager->flush();
        }

        return $this->redirectToRoute('inicio_index');
    }
}
