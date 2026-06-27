<?php
class UserModel extends CI_Model
{
    public function registerUser($data)
    {
        return $this->db->insert('users',$data);
    }
}
?>