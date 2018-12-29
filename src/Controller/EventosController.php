<?php

namespace App\Controller;

use App\Entity\Eventos;
use App\Form\EventosType;
use App\Repository\EventosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * @Route("/eventos")
 */
class EventosController extends AbstractController
{
    /**
     * @Route("/", name="eventos_index", methods={"GET"})
     */
    public function index(EventosRepository $eventosRepository): Response
    {
        return $this->render('eventos/index.html.twig', ['eventos' => $eventosRepository->findAll()]);
    }

    /**
     * @Route("/new", name="eventos_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $evento = new Eventos();
        $form = $this->createForm(EventosType::class, $evento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($evento);
            $entityManager->flush();

            return $this->redirectToRoute('eventos_index');
        }

        return $this->render('eventos/new.html.twig', [
            'evento' => $evento,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="eventos_show", methods={"GET"})
     */
    public function show(Eventos $evento): Response
    {
        return $this->render('eventos/show.html.twig', ['evento' => $evento]);
    }

    /**
     * @Route("/{id}/edit", name="eventos_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Eventos $evento): Response
    {
        $form = $this->createForm(EventosType::class, $evento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('eventos_index', ['id' => $evento->getId()]);
        }

        return $this->render('eventos/edit.html.twig', [
            'evento' => $evento,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="eventos_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Eventos $evento): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evento->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($evento);
            $entityManager->flush();
        }

        return $this->redirectToRoute('eventos_index');
    }

    /**
     * @Route("/{id}/json", name="evento_json", requirements={"id"="\d+"})
     */
<<<<<<< HEAD
    public function jsonEvento($id, request $request)
    {
        $encoder = new JsonEncoder();
      $normalizer = new ObjectNormalizer();
       $normalizer->setCircularReferenceHandler(
            function ($object) {
             return $object->getId();
=======

    public function jsonEvento($id, request $request)

    {

        $encoder = new JsonEncoder();
      $normalizer = new ObjectNormalizer();
       $normalizer->setCircularReferenceHandler(


            function ($object) {
             return $object->getId();

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
            }
        );
      $serializer = new Serializer(array($normalizer), array($encoder));
        $repo = $this->getDoctrine()->getRepository(Eventos::class);
        $p = $repo->find($id);
<<<<<<< HEAD
        $jsonEvento = $serializer->serialize($p, 'json');        
        $respuesta = new Response($jsonEvento);
        return $respuesta;
=======

        $jsonEvento = $serializer->serialize($p, 'json');        

        $respuesta = new Response($jsonEvento);


        return $respuesta;



>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
    }
}
