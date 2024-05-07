<?php
include_once("conf.php");
include_once("models/Fandom.class.php");
include_once("views/Fandom.view.php");
include_once("views/CreateForm.view.php");
include_once("views/EditForm.view.php");

class FandomController {
  private $fandom;

  function __construct(){
    $this->fandom = new Fandom(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
  }

  public function index() {
    $this->fandom->open();
    $this->fandom->getFandom();
    $data = array();
    while($row = $this->fandom->getResult()){
      array_push($data, $row);
    }

    $this->fandom->close();

    $view = new FandomView();
    $view->render($data);
  }

  public function createForm() {
    $view = new CreateFormView();
    $view->render('fandom', '');
  }

  public function editForm($id) {
    $this->fandom->open();
    $this->fandom->getFandomById($id);
    $view = new EditFormView();
    $view->render($this->fandom->getResult(), 'fandom', '');
  }
  
  function add($data){
    $this->fandom->open();
    $this->fandom->addFandom($data);
    $this->fandom->close();
    
    header("location:fandom.php");
  }

  function edit($id, $data){
    $this->fandom->open();
    $this->fandom->updateFandom($id, $data);
    $this->fandom->close();
    
    header("location:fandom.php");
  }

  function delete($id){
    $this->fandom->open();
    $this->fandom->deleteFandom($id);
    $this->fandom->close();
    
    header("location:fandom.php");
  }

}