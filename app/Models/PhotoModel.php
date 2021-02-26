<?php namespace App\Models;

use CodeIgniter\Model;

class PhotoModel extends Model
{
	protected $table = 'photo';		
	protected $allowedFields = ['name','type','user_id','created_at'];	

	public function feed()
	{
		return $this->table('photo')->findAll();
	}

	public function view($id)
	{
		return $this->table('photo')->where('photo_id', $id)->findAll();
	}

	public function search($keyword)
	{		
		return $this->table('photo')->like('name', $keyword)->findAll();
	}	

	public function store($data)
	{		
		return $this->table('photo')->insert($data);
	}

	public function getComments($photo_id)
	{
		return $this->table('photo_comments')->where('photo_id', $photo_id)->findAll();
	}

}