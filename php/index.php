<?php

require_once 'data.php';
use Illuminate\Database\Capsule\Manager as DB;

$users = DB::table('users')->where('user','=', 'a')->first();

$a = $users->user;

echo'

<input value="'.$a.'">

';

?>