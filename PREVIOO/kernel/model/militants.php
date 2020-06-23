<?php
//Charlie FUSEAU
// class militants
require (LIB.'model.php');

class militants extends model
{
	public function __construct()
	{
		parent::__construct("previoo_electeurs","id_electeur");
	}
}
?>