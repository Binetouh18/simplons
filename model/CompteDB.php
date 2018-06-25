<?php
class CompteDB extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function add($libcompte, $numero, $solde, $id)
	{
		$sql = "INSERT INTO compte 
		Values(NULL, '$libcompte', '$numero', '$solde', '$id')";

		if($this->db != null)
		{
			return $this->db->exec($sql);
		}
		else
		{
			return null;
		}
	}
}
?>