<?php
namespace App\Controller;
use App\Entity\Hacer;
use App\Entity\Imagen;
use App\Form\HacerType;
use App\Repository\HacerRepository;
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
 * @Route("/hacer")
 */
class HacerController extends AbstractController
{
    /**
     * @Route("/", name="hacer_index", methods={"GET"})
     */
    public function index(HacerRepository $hacerRepository): Response
    {
        return $this->render('hacer/index.html.twig', ['hacers' => $hacerRepository->findAll()]);
    }
    /**
     * @Route("/new", name="hacer_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $hacer = new Hacer();
        $form = $this->createForm(HacerType::class, $hacer);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($request->files->get('hacer')['fichero'] != null) {               
                
                $fichero = $request->files->get('hacer')['fichero'];
                $fileName = md5(uniqid());
                
                $imagen = new Imagen();
                $imagen->setNombre($fileName);
                $imagen->setOriginal($fichero->getClientOriginalName());
                $hacer->setImagen($imagen);
                $imagen->setSize($fichero->getSize());
<<<<<<< HEAD
=======

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
                // Move the file to the directory where brochures are stored
                try {
                    $fichero->move(
                        $this->getParameter('carpeta_imagenes'),
                        $fileName
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }
            }             
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($hacer);
            $entityManager->flush();
            return $this->redirectToRoute('hacer_index');
        }
        return $this->render('hacer/new.html.twig', [
            'hacer' => $hacer,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}", name="hacer_show", methods={"GET"})
     */
    public function show(Hacer $hacer): Response
    {
        return $this->render('hacer/show.html.twig', ['hacer' => $hacer]);
    }
    /**
     * @Route("/{id}/edit", name="hacer_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Hacer $hacer): Response
    {
        $form = $this->createForm(HacerType::class, $hacer);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('hacer_index', ['id' => $hacer->getId()]);
        }
        return $this->render('hacer/edit.html.twig', [
            'hacer' => $hacer,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}", name="hacer_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Hacer $hacer): Response
    {
        if ($this->isCsrfTokenValid('delete'.$hacer->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($hacer);
            $entityManager->flush();
        }
        return $this->redirectToRoute('hacer_index');
    }
}