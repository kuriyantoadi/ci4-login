<?php

namespace App\Controllers;

use App\Models\M_user;
use App\Controllers\BaseController;

class Login extends BaseController
{
   public function index()
	{
		return view('user_login');
   }
   
   public function login_action() 
   {
      $m_user = new M_user();

      $username = $this->request->getPost('username');
      $password = sha1($this->request->getPost('password'));

      $cek_login = $m_user->get_data($username, $password);

      var_dump($cek_login);

      if($cek_login){

         if (($cek_login['username'] == $username) && ($cek_login['user_pass'] == $password) && ($cek_login['user_level'] == 'admin'))
         {
            session()->set('username', $cek_login['username']);
            session()->set('user_nama', $cek_login['user_nama']);
            session()->set('user_id', $cek_login['user_id']);
            return redirect()->to(base_url('Admin'));

         }elseif (($cek_login['username'] == $username) && ($cek_login['user_pass'] == $password) && ($cek_login['user_level'] == 'user')){
            session()->set('username', $cek_login['username']);
            session()->set('user_nama', $cek_login['user_nama']);
            session()->set('user_id', $cek_login['user_id']);
            return redirect()->to(base_url('User'));

         } else {
            session()->setFlashdata('gagal', 'Username / Password salah');
            return redirect()->to(base_url('Login'));
         }

      }else{
         session()->setFlashdata('gagal', 'Username / Password salah');
            return redirect()->to(base_url('Login'));
      }
   }

   public function logout() 
   {
      session()->destroy();
      return redirect()->to(base_url('Login'));
   }
}
