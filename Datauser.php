<?php
class Datauser extends CI_Controller {
	function __contstruct()
	{
		parent: __contstruct();
		$this->load->database();
		$this->load->helper();
		$this->load->model('datauser_model');
	}
	function index()
	{
		$this->load->view('datauser_view');
	}
	function save()
	{
		$dt['user'] = $this->input->post('user');
		$dt['nama'] = $this->input->post('nama');
		$dt['pass'] = md5($this->input->post('pass'));
		if($this->input->post('hiduser')=='')
		{
			$x = $this->datauser_model->save($dt);
		} else {
			$x = $this->datauser_model->update($dt,$this->input->post('hiduser'));
		}
		echo json_encode($x);
	}
} ?>