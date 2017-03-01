<?php

class NotFoundController extends BaseController {

  public function render($params) {
    $this->view->pageTitle = "NotFound";
    $this->view->whatHappened = "IDK";
  }

}
