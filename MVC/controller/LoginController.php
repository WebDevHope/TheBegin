<?php
class LoginController extends Controller {
    public function __construct(){
        parent::__construct();
        $this->loadModel('user');
    }

    public function index() {
        $this->view->render('login/index', [], 1);
    }
    public function actionDoLogin() {
        if(Request::isPost()){
            if(isset($_POST['user_login']) && isset($_POST['user_password'])){
                if($userInfo = $this->user->checkLogin($_POST['user_login'], $_POST['user_password'])){
                    $session =  new Session();
                    $session->init();
                    $session->set('user', 'admin');
                }
            }
        }
    }
}