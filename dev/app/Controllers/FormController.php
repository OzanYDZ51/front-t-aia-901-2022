<?php

class FormController {
    public static function indexAction($request, $response, $service, $app)
    {        
        return $service->render('views/form.php');
    }
}