<?php

namespace App\Models;

use CodeIgniter\Model;

class M_user extends Model
{
    public function get_data($username, $password)
	{
      return $this->db->table('user')
      ->where(array('username' => $username, 'user_pass' => $password))
      ->get()->getRowArray();
	}
}
