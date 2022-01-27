<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/app/Controllers/autoload.php';
require_once __DIR__ . '/app/Models/autoload.php';


$klein = new \Klein\Klein();

$klein->respond(['GET', 'POST'], '/', function ($request, $response, $service, $app) {
    $service->layout('views/layout/main-layout.php');  
    return UserController::loginAction($request, $response, $service, $app);
});

$klein->respond(['GET', 'POST'], '/form/', function ($request, $response, $service, $app) {
    $service->layout('views/layout/main-layout.php');  
    return FormController::indexAction($request, $response, $service, $app);
});

$klein->with('/admin/', function () use ($klein) {
    $klein->with('', function () use ($klein) {
        $klein->respond('GET', '', function ($request, $response, $service, $app) {
            $service->title = 'Users';
            $service->layout('views/layout/connected-layout.php');
            return UserController::getAllUsers($request, $response, $service, $app);
        });
        $klein->respond(['GET', 'POST'], 'create', function ($request, $response, $service, $app) {
            $service->title = 'Créer utilisateur';
            $service->layout('views/layout/connected-layout.php');
            return UserController::createAction($request, $response, $service, $app);
        });
        $klein->respond(['GET', 'POST'], 'edit?[:id]', function ($request, $response, $service, $app) {
            $service->title = 'Modifier utilisateur';
            $service->layout('views/layout/connected-layout.php');
            return UserController::editAction($request, $response, $service, $app);
        });
        $klein->respond('GET', 'delete?[:id]', function ($request, $response, $service, $app) {
            $service->title = 'Supprimer utilisateur';
            $service->layout('views/layout/connected-layout.php');
            return UserController::deleteAction($request, $response, $service, $app);
        });
    });
});

$klein->dispatch();