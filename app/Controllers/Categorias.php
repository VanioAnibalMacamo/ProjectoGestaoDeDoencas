<?php 
	namespace  App\Models;
	

	class Categorias extends BaseController {
		public function index(){
			//Chamar um view que exibe todas as categorias 
		}

		public function inserir(){
			//Metodo para salvar novas categorias

			$data ['titulo'] ='Inserir nova Categoria';
			$data ['accao'] = 'Inserir';
			$data ['msg'] = '';


			if($this -> request -> getMethod()==='post'){
				$CategoriaModel = new\App\Models\CategoriaModel();
				$CategoriaModel -> set('nome',$this ->request ->getPost('categoria'));

				if($CategoriaModel -> insert()){
					//deu certo
					$data['msg']= 'Conectado com Sucesso';
				}
				else{
					$data['msg'] = 'Nao Conectou';   hnkn
				}
			}
			echo view ('Categorias_form',$data);
		}
	}

?>