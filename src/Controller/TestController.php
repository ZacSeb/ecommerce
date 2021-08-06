<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestController {

    public function index() {
    
    dd("ca marche !");
    
    }

    public function test(Request $request, $age, $prenom) {

        // $age = $request->attributes->get('age');
        // $prenom = $request->attributes->get('prenom');

        return new Response("Tu as $age ans et tu t'appelles $prenom");
    }

}