<?php
namespace App\Controller;
use App\Entity\Transporte;
use App\Form\TransporteType;
use App\Repository\TransporteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/transporte")
 */
class TransporteController extends AbstractController
{
    /**
     * @Route("/", name="transporte_index", methods={"GET"})
     */
    public function index(TransporteRepository $transporteRepository): Response
    {
        return $this->render('transporte/index.html.twig', ['transportes' => $transporteRepository->findAll()]);
    }
    /**
     * @Route("/new", name="transporte_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $transporte = new Transporte();
        $form = $this->createForm(TransporteType::class, $transporte);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($request->files->get('transporte')['fichero'] != null) {               
                
                $fichero = $request->files->get('transporte')['fichero'];
                $fileName = md5(uniqid());
                
                $imagen = new Imagen();
                $imagen->setNombre($fileName);
                $imagen->setOriginal($fichero->getClientOriginalName());
                $salud->setImagen($imagen);
                $imagen->setSize($fichero->getSize());
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
<<<<<<< HEAD
=======

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($transporte);
            $entityManager->flush();
            return $this->redirectToRoute('transporte_index');
        }
        return $this->render('transporte/new.html.twig', [
            'transporte' => $transporte,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}", name="transporte_show", methods={"GET"})
     */
    public function show(Transporte $transporte): Response
    {
        return $this->render('transporte/show.html.twig', ['transporte' => $transporte]);
    }
    /**
     * @Route("/{id}/edit", name="transporte_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Transporte $transporte): Response
    {
        $form = $this->createForm(TransporteType::class, $transporte);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('transporte_index', ['id' => $transporte->getId()]);
        }
        return $this->render('transporte/edit.html.twig', [
            'transporte' => $transporte,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}", name="transporte_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Transporte $transporte): Response
    {
        if ($this->isCsrfTokenValid('delete'.$transporte->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($transporte);
            $entityManager->flush();
        }
        return $this->redirectToRoute('transporte_index');
    }
}