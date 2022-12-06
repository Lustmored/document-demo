<?php
declare(strict_types=1);


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Zenstruck\Document\PendingDocument;

#[Route('/', name: 'index')]
class Index extends AbstractController
{
    public function __invoke(Request $request): Response
    {
        $file = null;
        if ($request->files->has('file')) {
            $file = new PendingDocument($request->files->get('file'));
        }
        return $this->render('index.html.twig', [
            'file' => $file
        ]);
    }
}