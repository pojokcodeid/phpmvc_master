<?php
// syartnya nama class = nama file
function load_core($class_name)
{
  $path_to_file = '../src/controllers/' . $class_name . '.php';
  if (file_exists($path_to_file)) {
    require_once($path_to_file);
  }
}

spl_autoload_register('load_core');