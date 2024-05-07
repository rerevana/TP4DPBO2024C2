<?php
include_once("conf.php");
include_once("models/Anggota.class.php");
include_once("models/Fandom.class.php");
include_once("views/Anggota.view.php");
include_once("views/CreateForm.view.php");
include_once("views/EditForm.view.php");

class AnggotaController {
  private $anggota;
  private $fandom;

  function __construct(){
    $this->anggota = new Anggota(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    $this->fandom = new Fandom(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
  }

  public function index() {
    $this->anggota->open();
    $this->fandom->open();
    $this->anggota->getAnggotaJoin();
    $this->fandom->getFandom();
    
    $data = array(
      'anggota' => array(),
      'fandom' => array()
    );
    while($row = $this->anggota->getResult()){
      // echo "<pre>";
      // print_r($row);
      // echo "</pre>";
      array_push($data['anggota'], $row);
    }
    while($row = $this->fandom->getResult()){
      array_push($data['fandom'], $row);
    }

    $this->anggota->close();
    $this->fandom->close();

    $view = new AnggotaView();
    $view->render($data);
  }

  public function createForm() {
    $this->fandom->open();
    $this->fandom->getFandom();
    $dataFandom = [];
    while($row = $this->fandom->getResult()){
      array_push($dataFandom, $row);
    }
    $view = new CreateFormView();
    $view->render('anggota', $dataFandom);
  }

  public function editForm($id) {
    $this->anggota->open();
    $this->fandom->open();
    $this->fandom->getFandom();
    $this->anggota->getAnggotaById($id);
    $dataFandom = [];
    while($row = $this->fandom->getResult()){
      array_push($dataFandom, $row);
    }
    $view = new EditFormView();
    $view->render($this->anggota->getResult(), 'anggota', $dataFandom);
  }
  
  function add($data){
    $this->anggota->open();
    $this->anggota->addAnggota($data);
    $this->anggota->close();
    
    header("location:index.php");
  }

  function edit($id, $data){
    $this->anggota->open();
    $this->anggota->updateAnggota($id, $data);
    $this->anggota->close();

    header("location:index.php");
  }

  function delete($id){
    $this->anggota->open();
    $this->anggota->deleteAnggota($id);
    $this->anggota->close();

    header("location:index.php");
  }

}