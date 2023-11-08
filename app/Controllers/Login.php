<?php

namespace App\Controllers;

use App\Models\M_user;
use App\Controllers\BaseController;

class Login extends BaseController
{
   public function index()
	{
		return view('user_form');
   }
   
   public function login_action() 
   {
      $m_user = new M_user();

      $email = $this->request->getPost('email');
      $password = $this->request->getPost('password');

      $cek_login = $m_user->get_data($email, $password);

      if($cek_login){

         if (($cek_login['user_email'] == $email) && ($cek_login['user_pass'] == $password))
         {
            session()->set('user_email', $cek_login['user_email']);
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
