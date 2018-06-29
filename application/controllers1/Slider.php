<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Slider extends CI_Controller
{
public function __construct()
{
parent::__construct();
$this->load->model('Slider_model','slider');
    }

    public function index()
    {
	$this->load->library('session');
	$this->load->helper('url');
  if ($this->session->userdata('first_name')!=null) {
	   if($this->session->userdata('user_id')!=''){

   			$this->load->view('template/header');
   			$this->load->view('template/sidebar');
   			$this->load->view('slider_view');
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

        $list = $this->slider->get_datatables();
       // echo $list;
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $slider) {
            $no++;
            $row = array();
            $row[] = $slider->id;
            if($slider->slider)
			{
                $row[] = '<a href="'.base_url('upload/slider/'.$slider->slider).'" target="_blank"><img src="'.base_url('upload/slider/'.$slider->slider).'" class="img-responsive" /></a>';
			}
            else
			{
                $row[] = '(No photo)';
			}

            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_slider('."'".$slider->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-warning" href="javascript:void(0)" title="Hapus" onclick="delete_slider('."'".$slider->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';

            $data[] = $row;
        }
        //console.log($data);

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->slider->count_all(),
                        "recordsFiltered" => $this->slider->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_edit($id)
    {
        $data = $this->slider->get_by_id($id);
       
        echo json_encode($data);
    }

    public function ajax_add()
    {
       // $this->_validate();

        $data = array();

        if(!empty($_FILES['photo']['name']))
        {
            $upload = $this->_do_upload();
            //$data['photo'] = $upload;
			
			$data = array('slider' => $upload);
        }

        $insert = $this->slider->save($data);

        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update()
    {
        //$this->_validate();
        $data = array();
		$slider = $this->input->post('remove_photo');
        
        
		if(file_exists('upload/slider/'.$slider)) 
		{
			unlink('upload/slider/'.$slider);
			$data = array('slider' => '');
			
        }

         if(!empty($_FILES['photo']['name']))
        {
            $upload = $this->_do_upload();

            //delete file
            $slider = $this->slider->get_by_id($this->input->post('id'));
            if(file_exists('upload/slider/'.$slider->slider) && $slider->slider){
                unlink('upload/slider/'.$slider->slider);

           $data = array('slider' => $upload);
			}
        }

        $this->slider->update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($id)
    {
        //delete file
        $slider = $this->slider->get_by_id($id);
        if(file_exists('upload/slider/'.$slider->slider) && $slider->slider)
            unlink('upload/slider/'.$slider->slider);

        $this->slider->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    private function _do_upload()
    {
        $config['upload_path']          = 'upload/slider/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 8000; //set max size allowed in Kilobyte
        $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('photo')) //upload and validate
        {
            $data['inputerror'][] = 'photo';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
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
	function test()
	{
		echo  $list = $this->slider->get_datatables();
		
		
	}

}
