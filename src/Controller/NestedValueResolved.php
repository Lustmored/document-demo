<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Zenstruck\Document\Library\Bridge\Symfony\ValueResolver\UploadedFile;
use Zenstruck\Document\PendingDocument;

#[Route('/nested_value_resolver', name: 'nested_value_resolver')]
class NestedValueResolved extends AbstractController
{
    public function __invoke(
        #[UploadedFile('data[file]')]
        ?PendingDocument $file
    ): Response {
        return $this->render('nested_form.html.twig', [
            'file' => $file
        ]);
    }
}