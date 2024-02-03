<?php
namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller{


    public function home(){

            $params = [
                'name' => 'php-bird'
            ];

            return $this->render('home', $params);
    }

    public function getForm(){
        
        return $this->render('contact');
    }

    public function handleForm(Request $request){

        $body = $request->getBody();

        return 'This form will be handled soon.';
    }
}