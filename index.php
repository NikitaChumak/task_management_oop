<?php

require 'vendor/autoload.php';

use App\Models\Task;

$task = new Task('task', 'desc task');
var_dump($task);
