<?php

namespace App\Controller;

use App\Entity\Merci;
use App\Form\MerciType;
use App\Repository\MerciRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MerciController extends AbstractController
{
    #[Route('/merci', name: 'merci_index', methods: ['GET'])]
    public function index(MerciRepository $merciRepository): Response
    {
        $mercis = $merciRepository->findAll(); // Récupère tous les "merci" de la base de données

        return $this->render('merci/index.html.twig', [
            'mercis' => $mercis, // Passe les "merci" au template
        ]);
    }

    #[Route('/merci/new', name: 'merci_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $merci = new Merci();
        $form = $this->createForm(MerciType::class, $merci);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($merci);
            $entityManager->flush();

            return $this->redirectToRoute('merci_index');
        }

        return $this->render('merci/new.html.twig', [
            'merci' => $merci,
            'form' => $form->createView(),
        ]);
    }


    #[Route('/merci/delete/{id}', name: 'merci_delete')]

    public function delete(Request $request, EntityManagerInterface $entityManager, MerciRepository $merciRepository, int $id): Response
    {
        $merci = $merciRepository->find($id);

        if (!$merci) {
            throw $this->createNotFoundException('Le merci demandé n\'existe pas.');
        }

        if ($this->isCsrfTokenValid('delete'.$merci->getId(), $request->request->get('_token'))) {
            $entityManager->remove($merci);
            $entityManager->flush();
        }

        return $this->redirectToRoute('merci_index');
    }


}
