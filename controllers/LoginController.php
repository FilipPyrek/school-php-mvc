<?php

class LoginController extends BaseController {

  public function render($params) {
    $this->view->pageTitle = "Login";
    $this->view->isLoginError = isset($_GET["error"]);
    if(isset($_SESSION["auth"]) && $_SESSION["auth"] == true)
      $this->redirect('/');
    if(isset($_POST["nick"]) && isset($_POST["password"])) {
      $nick = $_POST["nick"];
      $password = $_POST["password"];
      if ($nick == "admin" && $password == "password") {
        $_SESSION["auth"] = true;
        $this->redirect('/');
      } else {
        $this->redirect('/login?error');
      }
    }
  }

}
