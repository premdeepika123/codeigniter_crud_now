<?php 
	class User extends CI_Controller{




		public function index()
		{
			$this->load->model('user_model');
			$users=$this->user_model->all();
			$data=array();
			$data['users']=$users;
			$this->load->view('list',$data);


		}
		public function create(){

		$this->load->model('user_model');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');


		if ($this->form_validation->run() == FALSE)
                {
                   $this->load->view('create');
                }
			else{

				//Save record to database

				$formArray=array();
				$formArray['username']=$this->input->post('username');
                $formArray['password ']=md5($this->input->post('password'));
                 $formArray['email ']=$this->input->post('email');

                $formArray['created_at ']=date('Y-m-d');
                $this->user_model->create($formArray);
                $this->session->set_flashdata("success","Record added successfully");
                   redirect(base_url()."user/index");
			}

		}

		public function edit($userId)
	{

		$this->load->model('user_model');
		$user=$this->user_model->getUser($userId);
		$data=array();
		$data['user']=$user;
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		

		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('edit',$data);
                }
		else
		{


			//update user
				$formArray=array();
			 	$formArray['username']=$this->input->post('username');
	           $formArray['email ']=$this->input->post('email');
	           $formArray['update_date  ']=date('Y-m-d');
	       		$this->user_model->updateUser($userId,$formArray);
			$this->session->set_flashdata("success","Record updated successfully");
			 redirect(base_url()."user/index");

		}

	}
	public function delete($userId)
	{

		$this->load->model('user_model');
		$user=$this->user_model->getUser($userId);
		if(empty($user)){	

			$this->session->set_flashdata("failure","Record not found in database");
			 redirect(base_url()."user/index");


		}
		$this->user_model->deleteUser($userId);
		$this->session->set_flashdata("success","Record deleted successfully");
			 redirect(base_url()."user/index");

	}

		
	}