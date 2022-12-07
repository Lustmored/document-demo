<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Zenstruck\Document\Attribute\UploadedFile;

#[Route('/multiple_files', name: 'multiple_files')]
class MultipleFilesResolved extends AbstractController
{
    public function __invoke(
        #[UploadedFile('data[file][]')]
        array $files = []
    ): Response {
        return $this->render('multiple_files.html.twig', [
            'files' => $files
        ]);
    }
}