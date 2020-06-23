<?php
// Charlie Fuseau
//CTRLbegin appel de l'index de la page principale
require_once(LIB.'controller.php');

class CTRLbegin extends controller 
{
	public function index() //fonctionne
	{
	$this->loadModel('begin');
	$this->begin->Find();
	$a = array('begin'=>$this->begin->Find("SELECT * FROM `previoo_electeurs`")); 
	$b = array('collerlesaffiches'=>$this->begin->Find("SELECT * FROM `previoo_collerlesaffiches`")); 
	$this->set($a);
	$this->set($b);
	$this->render('index');
	}
	
	public function create() // fonctionne
	{
	$this->loadModel('begin');
	$this->begin->postToModel();
	$this->begin->Create();
	$a = array('begin' => $this->begin->Find());
	$this->set($a);
	$this->render('index');
	}
	
	public function createForm() //fonctionne
	{
	$this->loadModel('begin');
	$this->render('createForm');
	}
}
	
?>