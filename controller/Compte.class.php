<?php
class Compte extends Controller
{
	public function __construct()
	{
		parent::__construct();
		require_once 'model/CompteDB.php';
	}
	public function index()
	 {
	 	return $this->view->load('compte/index');
	}
	public function add()
	{
		$compte = new CompteDB();
		$compte->add("epargne", "1209876543", "10000000000", 1);
		return $this->view->load('compte/add');

	}
}
?>