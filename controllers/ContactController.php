<?php
require_once ROOT . '/controllers/Controller.php';
require_once ROOT . '/model/Contact.php';

class ContactController extends Controller
{

    public function actionIndex()
    {

        $this->view->generate('template_view.php', 'contact/index.phtml');

        return true;

    }


    public function actionView()
    {
        $params = $_POST;
        $validation = true;
        $message = [];

        if ($params['send']) {
            if (empty($params['email'])) {
                $validation = false;
                $message[] = 'Enter Email';
            }
        }

        if ($validation) {
            Contact::yourMessage($params);
            header('Location: /contact/?response=Good', true, 301);
        }

        //$this->view->message = $message;


        ///$this->view->generate('template_view.php', 'contact/index.phtml');

        return true;
    }
}