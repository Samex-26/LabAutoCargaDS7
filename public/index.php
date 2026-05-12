<?php
require_once __DIR__ . '/../vendor/autoload.php'; // La única llamada necesaria 

use App\Models\Usuario; 
$user = new Usuario();
echo $user->saludar();