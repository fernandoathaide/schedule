<?php
/*
 * @package 	model
 * @author  	Fernando A. Nóbrega Fh.
 * @date		2021-24-12
 * @description Model de Eventos
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Event_model extends CI_Model{
	public function listar_todos(){
		$this->db->select("id,eventname,eventlocation,eventdescription,eventlink,eventtype");
		$rs = $this->db->get("event")->result();
		return $rs;
	}
	public function save_event($data){
		$this->db->insert('event', $data);
		return true;
	}
}

