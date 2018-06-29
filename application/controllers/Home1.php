<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->library('session');
		$this->load->model('Getquote_model');
    }
	public function index()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/template/menu');
		$this->load->view('home/index');
		$this->load->view('home/template/footer');
	}
public function Main()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/template/menu');
		$this->load->view('home/home');
		$this->load->view('home/template/footer');
	}
	public function about()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/template/menu');
		$this->load->view('home/about');
		$this->load->view('home/template/footer');
	}
	public function portrait()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/template/menu');
		$this->load->view('home/portrait');
		$this->load->view('home/template/footer');
	}
	public function wedding()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/template/menu');
		$this->load->view('home/wedding');
		$this->load->view('home/template/footer');
	}
	public function outdoor()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/template/menu');
		$this->load->view('home/outdoor');
		$this->load->view('home/template/footer');
	}
	public function special()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/template/menu');
		$this->load->view('home/special');
		$this->load->view('home/template/footer');
	}
	public function babies()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/template/menu');
		$this->load->view('home/babies');
		$this->load->view('home/template/footer');
	}
	public function travel()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/template/menu');
		$this->load->view('home/travel');
		$this->load->view('home/template/footer');
	}
	public function gallery($id)
	{
		$data['id'] = $id;
		$this->load->view('home/template/header');
		$this->load->view('home/template/menu');
		$this->load->view('home/gallery',$data);
		$this->load->view('home/template/footer');
	}
	public function detailBlog($id)
	{
		$data['id'] = $id;
		$this->load->view('home/template/header');
		$this->load->view('home/template/menu');
		$this->load->view('home/detailBlog',$data);
		$this->load->view('home/template/footer');
	}
	public function video()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/template/menu');
		$this->load->view('home/video');
		$this->load->view('home/template/footer');
	}
	public function member()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/template/menu');
		$this->load->view('home/member');
		$this->load->view('home/template/footer');
	}
	public function blog()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/template/menu');
		$this->load->view('home/blog');
		$this->load->view('home/template/footer');
	}
	public function contact()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/template/menu');
		$this->load->view('home/contact');
		$this->load->view('home/template/footer');
	}
	function sendMail()
	{
		if($this->input->post('username'))
		{
			$occasion = "";
			if($this->input->post('occasion') == "occasion")
			{
				$occasion = $this->input->post('occasion');
			}
			else
			{
				$occasion = $this->input->post('other');
			}
			//$body="";	
			/*  $body="<table border='1'>
	<tr>
		<td>Name</td>
		<td>".$this->input->post('username')."</td>
	</tr>
	<tr>
		<td>Email ID</td>
		<td>".$this->input->post('emailaddress')."</td>
	</tr>
	<tr>
		<td>Mobile Number</td>
		<td>".$this->input->post('telephone')."</td>
	</tr>
	<tr>
		<td>For which occasion do you want to enquire with Sugavans Photography?</td>
		<td>".$occasion."</td>
	</tr>
	<tr>
		<td>Event Dates</td>
		<td>".$this->input->post('eventdates')."</td>
	</tr>
	<tr>
		<td>Event City</td>
		<td>".$this->input->post('eventcity')."</td>
	</tr>
	<tr>
		<td>Message</td>
		<td>".$this->input->post('comment')."</td>
	</tr>
</table>"; */
		//echo $body;
		$config = Array(
		  'protocol' => 'smtp',
		  'smtp_host' => 'ssl://smtp.googlemail.com',
		  'smtp_port' => 465,
		  'smtp_user' => 'mail@sugavansphotography.com', // change it to yours
		  'smtp_pass' => 'test123!@#', // change it to yours
		  'mailtype' => 'html',
		  'charset' => 'iso-8859-1',
		  //'charset' => 'utf-8',
		  'wordwrap' => TRUE
		);
		
		//$message = '';
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('sugavanphotography@gmail.com'); // change it to yours
		$this->email->to('rajkumar.bizsoft@gmail.com');// change it to yours
		$this->email->subject('Sugavans Photography ContactForm');

		$data['un']=$this->input->post('username');
		$data['ea']=$this->input->post('emailaddress');
		$data['tp']=$this->input->post('telephone');
		$data['oc']=$occasion;
		$data['ed']=$this->input->post('eventdates');
		$data['ec']=$this->input->post('eventcity');
		$data['cmt']=$this->input->post('comment');
		
		//$body = $this->load->view("home/contactmail", $data);
		$this->email->message($this->load->view("home/contactmail", $data, TRUE));
		if($this->email->send())
		 {
			$messge = array('message' => 'Email sent successfully','class' => 'alert alert-success fade in');
			$this->session->set_flashdata('Email', $messge);
			$base_url=base_url();
			redirect("$base_url"."Home/contact");
		  //echo 'Email sent.';
		 }
		 else
		{
		 show_error($this->email->print_debugger());
		}
		
	}

	}

	
	public function getaquote()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/template/menu');
		$this->load->view('home/getaquote');
		$this->load->view('home/template/footer');
	}
	public function subscribeAdd()
	{
		$data = array(
			'email_id' => $this->input->post('email_id'),
			'phone_no' => $this->input->post('phone_no')
		);
		
		$this->db->insert("tbl_subscribe", $data);
		if($this->db->insert_id())
        {
			echo json_encode(array("status" => TRUE));
		}
	}
	function subscribeList()
	{
		
    $data['subscribeList']=$this->db->get('tbl_subscribe')->result();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('subscribe/subscribeList',$data);
    $this->load->view('template/footer');
	}
	function getaquoteList()
	{	
    $data['getaquoteList']=$this->db->get('tbl_getquote')->result();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('getaquote/getaquoteList',$data);
    $this->load->view('template/footer');
	}
	function viewGetquote($id)
	{	
    $data['viewGetquote']=$this->db->get_where('tbl_getquote', array('id'=>$id))->result();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('getaquote/getaquoteView',$data);
    $this->load->view('template/footer');
	}
	function Addquote()
	{
		if($this->input->post('eventdetails') == "other")
		{
			$ed1 = $this->input->post('eventdetails1');
		}
		else
		{
			$ed1 = $this->input->post('eventdetails');
		}
		if($this->input->post('knows') == "other")
		{
			$knows1 = $this->input->post('knows1');
		}
		else
		{
			$knows1 = $this->input->post('knows');
		}
		if($this->input->post('representative') == "other")
		{
			$representative1 = $this->input->post('representative1');
		}
		else
		{
			$representative1 = $this->input->post('representative');
		}
		$data = array(
			"bride_name"=>$this->input->post('bridename'),
			"bride_groom_name"=>$this->input->post('bridegroom'),
			"mobile_number"=>$this->input->post('phone_number'),
			"email"=>$this->input->post('email'),
			"event_type"=>$ed1,
			"month_of_event"=>$this->input->post('eventmonth'),
			"year_of_event"=>$this->input->post('eventyear'),
			"mention_event_date"=>$this->input->post('event1'),
			"event_city"=>$this->input->post('place'),
			"event_state"=>$this->input->post('eventplace'),
			"budget"=>$this->input->post('budget'),
			"eventduration"=>$this->input->post('eventduration'),
			"guests"=>$this->input->post('guests'),
			"additionalinformation"=>$this->input->post('additionalinformation'),
			"knowssugavans"=>$knows1,
			"representative"=>$representative1
		);
		
		if($this->Getquote_model->Addquote($data))
		{
			$messge = array('message' => 'Get a Quote added successfully','class' => 'alert alert-success fade in');
			$this->session->set_flashdata('Quote', $messge);
			$base_url=base_url();
			redirect("$base_url"."Home/getaquote");
		}
		
	}
	
}


?>