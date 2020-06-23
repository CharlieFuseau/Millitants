<?php
// Charlie Fuseau
//CTRLcollerlesaffiches appel de l'index 
require_once(LIB.'controller.php');

class CTRLcollerlesaffiches extends controller 
{
	public function index() //fonctionne
	{
	$this->loadModel('collerlesaffiches');
	$this->collerlesaffiches->Find();
	$a = array('collerlesaffiches'=>$this->collerlesaffiches->Find("SELECT * FROM `previoo_collerlesaffiches`")); 
	$this->set($a);
	$this->render('index');
	}
	
	public function create() // fonctionne
	{
	$this->loadModel('collerlesaffiches');
	$this->collerlesaffiches->postToModel();
	$this->collerlesaffiches->Create();
	$a = array('collerlesaffiches' => $this->collerlesaffiches->Find());
	$this->set($a);
	$this->render('return');
	}
	
	public function createForm() //fonctionne
	{
	$this->loadModel('collerlesaffiches');
	$this->render('createForm');
	}
	
	public function updateForm($id) //fonctionne
	{
	$this->loadModel('collerlesaffiches');
	$this->collerlesaffiches->Read($id);
	$a = array('collerlesaffiches' => $this->collerlesaffiches->totable());
	$this->set($a);
	$this->render('updateForm');
	}

	public function update() //fonctionne
	{
	$this->loadModel('collerlesaffiches');
	$this->collerlesaffiches->postToModel();
	$this->collerlesaffiches->Update();
	$a =array('collerlesaffiches'=>$this->collerlesaffiches->Find());
	$this->set($a);
	$this->render('index');
	}

	public function delete($id) //fonctionne
	{
	$this->loadModel('collerlesaffiches');
	$this->collerlesaffiches->del($id);
	$a = array('collerlesaffiches' => $this->collerlesaffiches->Find());
	$this->set($a);
	$this->render('index');
	}
}
	
?>