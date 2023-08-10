<?php
namespace MyApp\Controllers;

use MyApp\Core\BaseController;

class Coba extends BaseController
{
  public function index()
  {
    echo "Hello World percobaan";
  }

  public function param1($param)
  {
    echo "Hello World percobaan " . $param;
  }
  public function param2($id = '0', $nama = 'kosong', $alamat = 'kosong')
  {
    echo "Hello World percobaan " . $id . " - " . $nama . " - " . $alamat;
  }
}