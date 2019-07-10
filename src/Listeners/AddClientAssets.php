<?php

namespace JaceRider\FlarumDrupal\Listeners;

use Flarum\Frontend\Document;
use Psr\Http\Message\ServerRequestInterface;

class AddClientAssets
{
    public function __invoke(Document $view, ServerRequestInterface $request)
    {
        foreach ($view->js as &$file) {
            $file = str_replace('/forum/', '/sites/default/files/flarum/', $file);
        }
        foreach ($view->css as &$file) {
            $file = str_replace('/forum/', '/sites/default/files/flarum/', $file);
        }
    }
}
