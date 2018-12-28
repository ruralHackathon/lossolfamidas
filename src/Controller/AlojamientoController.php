<?php

namespace App\Controller;

use App\Entity\Alojamiento;
use App\Form\AlojamientoType;
use App\Repository\AlojamientoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/alojamiento")
 */
class AlojamientoController extends AbstractController
{
    /**
     * @Route("/", name="alojamiento_index", methods={"GET"})
     */
    public function index(AlojamientoRepository $alojamientoRepository): Response
    {
        return $this->render('alojamiento/index.html.twig', ['alojamientos' => $alojamientoRepository->findAll()]);
    }

    /**
     * @Route("/new", name="alojamiento_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $alojamiento = new Alojamiento();
        $form = $this->createForm(AlojamientoType::class, $alojamiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($alojamiento);
            $entityManager->flush();

            return $this->redirectToRoute('alojamiento_index');
        }

        return $this->render('alojamiento/new.html.twig', [
            'alojamiento' => $alojamiento,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="alojamiento_show", methods={"GET"})
     */
    public function show(Alojamiento $alojamiento): Response
    {
        return $this->render('alojamiento/show.html.twig', ['alojamiento' => $alojamiento]);
    }

    /**
     * @Route("/{id}/edit", name="alojamiento_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Alojamiento $alojamiento): Response
    {
        $form = $this->createForm(AlojamientoType::class, $alojamiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('alojamiento_index', ['id' => $alojamiento->getId()]);
        }

        return $this->render('alojamiento/edit.html.twig', [
            'alojamiento' => $alojamiento,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="alojamiento_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Alojamiento $alojamiento): Response
    {
        if ($this->isCsrfTokenValid('delete'.$alojamiento->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($alojamiento);
            $entityManager->flush();
        }

        return $this->redirectToRoute('alojamiento_index');
    }
}
