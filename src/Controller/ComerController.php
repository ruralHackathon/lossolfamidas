<?php
namespace App\Controller;
use App\Entity\Comer;
use App\Form\ComerType;
use App\Repository\ComerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
<<<<<<< HEAD
=======


>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
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
<<<<<<< HEAD
=======

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
    /**
    * @Route("/{id}/json", name="comer_json", requirements={"id"="\d+"})
    */
    public function jsonComer($id, Request $request)
    {
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(
            function ($object) {
                return $object->getId();
            }
        );
        $serializer = new Serializer(array($normalizer), array($encoder));
        $repo = $this->getDoctrine()->getRepository(Comer::class);
        $comer = $repo->find($id);
        $jsonComer = $serializer->serialize($comer, 'json');        
        $respuesta = new Response($jsonComer);
        return $respuesta;
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
