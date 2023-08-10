<?php
namespace MyApp\Core;

class Routes
{
  public function run()
  {
    $router = new App();
    $router->setDefaultController('DefaultApp');
    $router->setDefaultMethod('index');

    // $router->get('/',['DefaultApp','index']);
    $router->get('/barang', ['Barang', 'index']);
    $router->get('/barang/insert', ['Barang', 'insert']);
    $router->get('/barang/edit/(:id)', ['Barang', 'edit']);
    $router->post('/barang/insert', ['Barang', 'insert_barang']);
    $router->post('/barang/edit', ['Barang', 'edit_barang2']);

    // gunakan segment untuk variable yang dinamis
    // $router->get('/coba/(:segment)/(:segment)/(:segment)', ['Coba', 'param2']);
    $router->get('/coba/(:id)/(:nama)/(:alamat', ['Coba', 'param2']);

    $router->run();
  }
}