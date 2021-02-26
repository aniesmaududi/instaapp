<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PhotoModel;
use App\Models\PhotoCommentsModel;

class Photo extends Controller
{
	function __construct()
    {
        $this->photo = new PhotoModel();
    }

	public function index()
	{		
		$photofeed = $this->photo->feed();

		$data['feed'] = $photofeed;

		return view('photo/index', $data);
	}

	public function view($id)
	{		
		$photoview = $this->photo->view($id);
		if (empty($photoview)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('File not found!');
        }
		$data['photoview'] = $photoview;

		//get comments & likes
		$photocomments = new PhotoCommentsModel();
		$comments = $photocomments->getComments($id);
		$data['comments'] = $comments;		

		return view('photo/view', $data);
	}

	public function upload()
	{
		return view('photo/upload_form');
	}

	public function store()
	{
		helper(['form','url']);
		
		//$db = \Config\Database::connect();	
		//$builder = $db->table('photo');

		$photo = new PhotoModel();

		$validated = $this->validate([
			'file' => [
				'uploaded[file]',
				'mime_in[file,image/jpg,image/jpeg,image/png,image/gif]',
				'max_size[file,4096]',
			],
		]);

		$response = [
			'success' => false,
			'data' => '',
			'msg' => 'Photo has not been uploaded successfully'
		];

		if($validated)
		{
			$avatar = $this->request->getfile('file');
			$newname = $avatar->getRandomName();
			$avatar->move(ROOTPATH.'public/photos', $newname);			

			$data = [
				'name' => $newname,
				'type' => $avatar->getClientMimeType(),
				'user_id' => session()->get('user_id'),
			];

			$save = $photo->store($data);

			$response = [
				'success' => true,
				'data' => $save,
				'msg' => 'Photo has been uploaded successfully '
			];			
		}

		return $this->response->setJSON($response);
	}

	public function like()
	{

	}

	public function comment()
	{

	}
}