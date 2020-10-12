<?php
class Users extends Controller{
	
	protected function login(){
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->login(), true);
    }

	protected function register(){
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->register(), true);
	}

	protected function Index(){
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->Index(), true);
	}

	protected function posts($id){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->posts($id), true);
	}

	protected function editPost($id){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->editPost($id), true);
	}

	
	protected function deletePost($id){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->deletePost($id), true);
	}

	protected function logout(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_data']);
		session_destroy();
		header("Location: ".ROOT_URL);
	}
    
}