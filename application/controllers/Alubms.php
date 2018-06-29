<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Alubms extends CI_Controller
{
public function __construct()
{
parent::__construct();
$this->load->model('Alubms_model','alubms');
    }

    public function index()
    {
	$this->load->library('session');
	$this->load->helper('url');
  if ($this->session->userdata('first_name')!=null) {
	   if($this->session->userdata('user_id')!=''){

   			$this->load->view('template/header');
   			$this->load->view('template/sidebar');
   			$this->load->view('alubms_view');
   			$this->load->view('template/footer');

	   }
	   else {

	   redirect('Login');
	   }
	}
	   else {
	   redirect('Login');
	   }

  }

    public function ajax_list()
    {

        $this->load->helper('url');

        $list = $this->alubms->get_datatables();
        //echo $list;
        $data = array();
        $no = $_POST['start'];
		$i=1;
		//var_dump($list);
        foreach ($list as $alubms) {
			
            $no++;
            $row = array();
            $row[] = $i;
            $row[] = $alubms->category;
            $row[] = $alubms->album_name;
      

            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="'.base_url().'Alubms/edit_alubms/'.$alubms->id.'" title="Edit" ><i class="glyphicon glyphicon-pencil"></i> </a>
             <a class="btn btn-sm btn-warning" href="javascript:void(0)" title="Hapus" onclick="delete_albums('."'".$alubms->id."'".')"><i class="glyphicon glyphicon-trash"></i> </a>';
            $data[] = $row;
			$i++;
        }
        //console.log($data);

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->alubms->count_all(),
                        "recordsFiltered" => $this->alubms->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
	 
	public function edit_alubms($id)
	{
		if($this->input->post('update_albums'))
		{
			$data = array(
                'category_id' => $this->input->post('category_id'),
                'album_name' => $this->input->post('album_name')
            );
			
			$upload = $this->_do_upload();
			$fileName = $upload;
			$already_get_img = $this->input->post('already_img');
			$fileName1 = implode(',',$already_get_img);
			$fileName2 = $fileName.','.$fileName1;
			
			$data['photos'] = $fileName2;
//var_dump( $data);
			if($this->alubms->update(array('id' => $id), $data))
			{
				 $this->index();
			}
			
		}
		else
		{
			$this->load->view('template/header');
			$this->load->view('template/sidebar');	
			$result['getEditdata']=$this->alubms->getEditdata($id);
			$this->load->view('alubms/editAlbums',$result);
			$this->load->view('template/footer');
		}
	}

 
    public function ajax_add()
    {
        //$this->_validate();

        $data = array(
                'category_id' => $this->input->post('category_id'),
                'album_name' => $this->input->post('album_name')
            );

       
            $upload = $this->_do_upload();
            $data['photos'] = $upload;
       

        $insert = $this->alubms->save($data);

        echo json_encode(array("status" => TRUE));
    }

   
    public function ajax_delete($id)
    {
        //delete file
       
        $this->alubms->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    private function _do_upload()
    {
		     $files = $_FILES;
			$images = array();
			$cpt = count($_FILES['file']['name']);
			for($i=0; $i<$cpt; $i++)
			{
				$_FILES['file']['name']= $files['file']['name'][$i];
				$_FILES['file']['type']= $files['file']['type'][$i];
				$_FILES['file']['tmp_name']= $files['file']['tmp_name'][$i];
				$_FILES['file']['error']= $files['file']['error'][$i];
				$_FILES['file']['size']= $files['file']['size'][$i];
				$config['upload_path'] = './upload/albums/';
				$config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				
				if ($this->upload->do_upload('file'))
				{
					$this->upload->data();
					$images[] = $_FILES['file']['name'];
				}
			}
			return $fileName = implode(',',$images);
			
		
    }

    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if($this->input->post('firstName') == '')
        {
            $data['inputerror'][] = 'firstName';
            $data['error_string'][] = 'First name is required';
            $data['status'] = FALSE;
        }

        if($this->input->post('lastName') == '')
        {
            $data['inputerror'][] = 'lastName';
            $data['error_string'][] = 'Last name is required';
            $data['status'] = FALSE;
        }

        if($this->input->post('dob') == '')
        {
            $data['inputerror'][] = 'dob';
            $data['error_string'][] = 'Date of Birth is required';
            $data['status'] = FALSE;
        }

        if($this->input->post('gender') == '')
        {
            $data['inputerror'][] = 'gender';
            $data['error_string'][] = 'Please select gender';
            $data['status'] = FALSE;
        }

        if($this->input->post('address') == '')
        {
            $data['inputerror'][] = 'address';
            $data['error_string'][] = 'Addess is required';
            $data['status'] = FALSE;
        }

        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }

}
