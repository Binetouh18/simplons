<?php
class Client extends Controller
{
	public function __construct()
	{
		parent::__construct();
		require_once 'model/ClientDB.php';
	}
	public function index()
	 {
	 	return $this->view->load('client/index');
	}
	public function add()
	{
		$client = new ClientDB();
		$client->add("Faye", "Jean", "Thies");
		return $this->view->load('client/add')

	}
}
?>