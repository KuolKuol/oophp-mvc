<?php
class Posts extends Controller{
	

	protected function Index(){
		$viewmodel = new PostModel();
		$this->returnView($viewmodel->Index(), true);
	}

	protected function show($id){
		$viewmodel = new PostModel();
		$this->returnView($viewmodel->show($id), true);
	}

	protected function create(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'posts');
		}

		$viewmodel = new PostModel();
		$this->returnView($viewmodel->create(), true);
	}

}