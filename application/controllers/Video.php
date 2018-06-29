<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Video extends CI_Controller
{
public function __construct()
{
parent::__construct();
$this->load->model('video_model','video');
    }

    public function index()
    {
	$this->load->library('session');
	$this->load->helper('url');
	if ($this->session->userdata('first_name')!=null) {
	   if($this->session->userdata('user_id')!=''){

   			$this->load->view('template/header');
   			$this->load->view('template/sidebar');
   			$this->load->view('video_view');
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

        $list = $this->video->get_datatables();
        //echo $list;
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $video) {
            $no++;
            $row = array();
            $row[] = $video->video_name;
            $row[] = $video->video_link;

            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_video('."'".$video->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-warning" href="javascript:void(0)" title="Hapus" onclick="delete_video('."'".$video->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';

            $data[] = $row;
        }
        //console.log($data);

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->video->count_all(),
                        "recordsFiltered" => $this->video->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_edit($id)
    {
        $data = $this->video->get_by_id($id);
       
        echo json_encode($data);
    }

    public function ajax_add()
    {
        //$this->_validate();

        $data = array(
                'video_name' => $this->input->post('video_name'),
                'video_link' => $this->input->post('video_link')
            );


        $insert = $this->video->save($data);

        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update()
    {
        //$this->_validate();
        $data = array(
                'video_name' => $this->input->post('video_name'),
                'video_link' => $this->input->post('video_link')
            );

      
        $this->video->update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($id)
    {
        //delete file
        

        $this->video->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
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
