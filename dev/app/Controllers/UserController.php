<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/app/db.php');

Class UserController {

    public static function loginAction($request, $response, $service, $app){
        
        if ($request->method() == 'POST') {
            
            $pdo = new Db;
            
            $sth = $pdo->prepare("SELECT * FROM user WHERE mail = :mail");
            $sth->execute(array(':mail' => $_POST['mail']));
            $result = $sth->fetch();
            $hash = $result['password'];
            
            
            if(password_verify($_POST['password'], $hash)) {
                
                $sth = $pdo->prepare("SELECT * from user WHERE mail = :mail");
                $sth->execute(array(':mail' => $_POST['mail']));
                $result = $sth->fetchAll();
            } else {
                return $response->redirect('/');
            }   

            if(count($result) > 0)
            {                
                session_start();
                $_SESSION['user'] = $result[0];
                if($result[0]['admin'] == 1){
                    return $response->redirect('/admin/');
                }
                return $response->redirect('/form/');
            }
        }
        return $service->render('views/login.php');
    }

    public static function createAction($request, $response, $service, $app){        
        if ($request->method() == 'POST') {
            
            $pdo = new Db;


            $user = new UserModel;
            $user->setNom($_POST['nom']);
            $user->setPrenom($_POST['prenom']);
            $user->setMail($_POST['mail']);
            $user->setPassword($_POST['password']);
            
            try {
                $sth = $pdo->prepare("INSERT INTO user (nom, prenom, mail, password) VALUES (:nom, :prenom, :mail, :password)");
                $sth->execute(array(':nom' => $user->getNom(), ':prenom' => $user->getPrenom(), ':mail' => $user->getMail(), ':password' => $user->getPassword()));
                return $response->redirect('/admin/');
            } catch (PDOException $e) {
                if ($e->getCode() == 1062) {
                    // Take some action if there is a key constraint violation, i.e. duplicate name
                } else {
                    throw $e;
                }
            }
        }
        return $service->render('views/admin/users/create.php');
    }

    public static function editAction($request, $response, $service, $app){    
        
        $id = $request->param('ID');
        $oldUser = UserController::getUser($id);
        
        if ($request->method() == 'POST') {
            $pdo = new Db;
            
            $user = new UserModel;
            $user->setNom($_POST['nom']);
            $user->setPrenom($_POST['prenom']);
            $user->setMail($_POST['mail']);
            
            try {
                $sth = $pdo->prepare("UPDATE user SET nom=:nom, prenom=:prenom, mail=:mail WHERE id=:id");
                $sth->execute(array('nom' => $user->getNom(), 'prenom' => $user->getPrenom(), 'mail' => $user->getMail(), 'id' => $id));
                return $response->redirect('/admin/');
            } catch (PDOException $e) {
                if ($e->getCode() == 1062) {
                    // Take some action if there is a key constraint violation, i.e. duplicate name
                } else {
                    throw $e;
                }
            }
        }

        return $service->render('views/admin/users/edit.php', array('user' => $oldUser));
    }

    public static function getAllUsers($request, $response, $service, $app){
        $pdo = new Db;        
        try {
            $sth = $pdo->prepare("SELECT * from user");
            $sth->execute();
            $users = $sth->fetchAll();
        } catch (PDOException $e) {
            if ($e->getCode() == 1062) {
                // Take some action if there is a key constraint violation, i.e. duplicate name
            } else {
                throw $e;
            }
        }
        return $service->render('views/admin.php', array('users' => $users));
    }

    public static function getUser($id){
        $pdo = new Db;

        try {
            $sth = $pdo->prepare("SELECT * from user WHERE id = :id");
            $sth->execute(array(':id' => $id));
            $user = $sth->fetch();
        } catch (PDOException $e) {
            if ($e->getCode() == 1062) {
                // Take some action if there is a key constraint violation, i.e. duplicate name
            } else {
                throw $e;
            }
        }
        return $user;
    }

    public static function deleteAction($request, $response, $service, $app)
    {
        $id = $request->param('ID');

        $pdo = new Db;

        try {
            $sth = $pdo->prepare("DELETE FROM user WHERE id = :id");
            $sth->execute(array(':id' => $id));
            return $response->redirect('/admin/');
        } catch (PDOException $e) {
            if ($e->getCode() == 1062) {
                // Take some action if there is a key constraint violation, i.e. duplicate name
            } else {
                throw $e;
            }
        }

        return $service->render('views/admin.php');
    }

    public static function logoutAction($request, $response, $service, $app)
    {
        session_start();
        session_destroy();
        return $response->redirect('/');
    }
}