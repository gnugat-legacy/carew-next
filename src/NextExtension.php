<?php

namespace Gnugat\CarewNext;

use Carew\Carew;
use Carew\Document;
use Carew\ExtensionInterface;
use Twig_SimpleFunction;

class NextExtension implements ExtensionInterface
{
    public function register(Carew $carew)
    {
        $container = $carew->getContainer();
        $twig = $container['twig'];
        $twig->addFunction(new Twig_SimpleFunction('next_document', function (array $documents, Document $current) {
            $title = $current->getTitle();
            do {
                $document = current($documents);
                if ($document->getTitle() === $title) {
                    return next($documents);
                }
            } while (next($documents));
        }));
        $twig->addFunction(new Twig_SimpleFunction('previous_document', function (array $documents, Document $current) {
            $title = $current->getTitle();
            do {
                $document = current($documents);
                if ($document->getTitle() === $title) {
                    return prev($documents);
                }
            } while (next($documents));
        }));
    }
}
