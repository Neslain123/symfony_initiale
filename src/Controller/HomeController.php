<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function bonjour()
    {
        return new Response("bonjour à toi!");
    }

    public function about()
    {
        return 'This is the About Page.';
    }
}