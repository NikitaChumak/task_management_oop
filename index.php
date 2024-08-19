<?php

require 'vendor/autoload.php';

use App\Models\Task;
use App\Models\User;
use App\Models\Project;

$user = new User('John Doe', 'john@example.com');

$task1 = new Task('Task 1', 'Description for Task 1');
$task2 = new Task('Task 2', 'Description for Task 2');
$task1->create();
$task2->create();

$user->assignTask($task1);
$user->assignTask($task2);

$project = new Project('Project A');

$project->addTask($task1);
$project->addTask($task2);

echo "Информация о проекте: ";
var_dump($project->getProjectInfo());

$project->removeTask($task1);

echo "Информация о проекте после удаления задачи: ";
var_dump($project->getProjectInfo());
