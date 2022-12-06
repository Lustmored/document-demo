<?php
declare(strict_types=1);


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Zenstruck\Document\PendingDocument;

#[Route('/value_resolver', name: 'value_resolver')]
class ValueResolved extends AbstractController
{
    public function __invoke(?PendingDocument $file): Response
    {
        return $this->render('simple_form.html.twig', [
            'file' => $file
        ]);
    }
}