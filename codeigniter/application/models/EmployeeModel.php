<?php
defined('BASEPATH') OR exit('No direct script access allowed');   
class EmployeeModel extends CI_Model{
   
public function insertEmployee($data)
{
    return $this->db->insert('employees',$data);
}

public function getEmployee()
{
     $query = $this->db->get('employees');
     return $query->result();
}

public function editEmployee($id)
{
   $query = $this->db->get_where('employees', ['id' => $id]);
   return $query->row();
}

public function updateEmployee($data, $id)
{
   return $this->db->update('employees',$data,['id' => $id]);
}

public function deleteEmployee($id)
{
   return $this->db->delete('employees',  ['id' => $id]); 
}
}
