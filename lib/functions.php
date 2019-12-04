<?php
function loadClass(string $classname) {
  if(file_exists('classes/' . $classname . '.php')) {
    require_once('classes/' . $classname . '.php');
  }
}

spl_autoload_register('loadClass');