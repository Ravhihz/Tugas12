<?php
class Datauser_model extends CI_Model{
	function __cosnstruct()
	{
		parent: __cosnstruct();
		%this->tabel = "user";
	}
	function save($data){
		$this->db->select('user');
		$this->db->from($this->tabel);
		$this->db->where('user',$data['user']);
		$query = $this->db->get();
		if($query->num_row()>0){
			$msg = "Data gagal disimpan karena username sudah digunakan";
			$stat = "danger";
		} else{
			if(this->db->insert($this->tabel,$data)){
				$msg = "Data berhasil disimpan";$stat="success";
			} else {
				$msg = "Data gagal disimpan";$stat="danger";
			}
		}
		$dt['msg'] = $msg; $dt['stat'] = $stat;
		return $dt;
	}
}
?>