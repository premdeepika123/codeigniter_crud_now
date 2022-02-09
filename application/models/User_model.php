<?php
	class User_model extends CI_Model{

		public function create($formArray){


			$this->db->insert("users",$formArray);
		}

		public function all(){

			return $users=$this->db->get('users')->result_array();//SELECT * FROM users	


		}
		public function getUser($userId)
	{

		$this->db->where('user_id',$userId);

		return $user=$this->db->get('users')->row_array();//select * from users where id=?
	}

	public function updateUser($userId,$formArray){

		$this->db->where('user_id',$userId);

		$this->db->update('users',$formArray);//Update users SET name=? email=? where id=? 

	}
	public function deleteUser($userId){

		$this->db->where('user_id',$userId);

		$this->db->delete('users');//delete from  users  where id=? 

	}
		
	}