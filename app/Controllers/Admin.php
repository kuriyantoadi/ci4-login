<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
   public function index()
   {
      if (session()->get('user_nama') == '') {
         session()->setFlashdata('gagal', 'Anda belum login');
         return redirect()->to(base_url('login'));
      }
      return view('admin_view');
   }
}
