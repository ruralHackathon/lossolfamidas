<?php

namespace App\Controller;

use App\Entity\Comer;
use App\Form\ComerType;
use App\Repository\ComerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/comer")
 */
class ComerController extends AbstractController
{
    /**
     * @Route("/", name="comer_index", methods={"GET"})
     */
    public function index(ComerRepository $comerRepository): Response
    {
        return $this->render('comer/index.html.twig', ['comers' => $comerRepository->findAll()]);
    }

    /**
     * @Route("/new", name="comer_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $comer = new Comer();
        $form = $this->createForm(ComerType::class, $comer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comer);
            $entityManager->flush();

            return $this->redirectToRoute('comer_index');
        }

        return $this->render('comer/new.html.twig', [
            'comer' => $comer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="comer_show", methods={"GET"})
     */
    public function show(Comer $comer): Response
    {
        return $this->render('comer/show.html.twig', ['comer' => $comer]);
    }

    /**
     * @Route("/{id}/edit", name="comer_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Comer $comer): Response
    {
        $form = $this->createForm(ComerType::class, $comer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('comer_index', ['id' => $comer->getId()]);
        }

        return $this->render('comer/edit.html.twig', [
            'comer' => $comer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="comer_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Comer $comer): Response
    {
        if ($this->isCsrfTokenValid('delete'.$comer->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($comer);
            $entityManager->flush();
        }

        return $this->redirectToRoute('comer_index');
    }
}
