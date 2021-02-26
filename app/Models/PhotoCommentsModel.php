<?php namespace App\Models;

use CodeIgniter\Model;

class PhotoCommentsModel extends Model
{
	protected $table = 'photo_comments';		
	protected $allowedFields = ['photo_id','user_id','comments','created_at'];	

	public function getComments($photo_id)
	{
		return $this->table('photo_comments')->where('photo_id', $photo_id)->findAll();
	}

}