<?php 
	namespace App\Models;
	use CodeIgniter\Model;

	class categoriaModel extends Model{
		protected $table = 'categoria'
		protected $primaryKey ='codigo';
		protected $allowedFields = ['nome'];
		protected $returnType ='object';
	}

?>