<?php
// Charlie Fuseau
//CTRLmilitants
require_once(LIB.'controller.php');

class CTRLmilitants extends controller 
{
	public function index() //fonctionne
	{
	$this->loadModel('militants');
	$this->militants->Find();
	$a = array('militants'=>$this->militants->Find("SELECT * FROM `previoo_electeurs`")); 
	$this->set($a);
	$this->render('index');
	}
	
	public function read($id) //fonctionne
	{
	$this->loadModel('militants');
	$this->militants->Find();
	$a = array('militants'=>$this->militants->Find());
	$this->set($a);
	$this->render('read');
	}
	
	public function updateForm($id) //fonctionne
	{
	$this->loadModel('militants');
	$this->militants->Read($id);
	$a = array('militants' => $this->militants->totable());
	$this->set($a);
	$this->render('updateForm');
	}

	public function update() //fonctionne
	{
	$this->loadModel('militants');
	$this->militants->postToModel();
	$this->militants->Update();
	$a =array('militants'=>$this->militants->Find());
	$this->set($a);
	$this->render('index');
	}

	public function delete($id) //fonctionne
	{
	$this->loadModel('militants');
	$this->militants->del($id);
	$a = array('militants' => $this->militants->Find());
	$this->set($a);
	$this->render('index');
	}
	
	public function create() // fonctionne
	{
	$this->loadModel('militants');
	$this->militants->postToModel();
	$this->militants->Create();
	$a = array('militants' => $this->militants->Find());
	$this->set($a);
	$this->render('index');
	}
	
	public function createForm() //fonctionne
	{
	$this->loadModel('militants');
	$this->render('createForm');
	}
}
	
?>