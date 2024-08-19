<?php

require 'vendor/autoload.php';

use App\Models\Task;
use App\Models\User;
use App\Models\Project;

// Создаем пользователя
$user = new User('John Doe', 'john@example.com');

// Создаем задачи
$task1 = new Task('Task 1', 'Description for Task 1');
$task2 = new Task('Task 2', 'Description for Task 2');
$task1->create();
$task2->create();

// Назначаем задачи пользователю
$user->assignTask($task1);
$user->assignTask($task2);

// Создаем проект
$project = new Project('Project A');

// Добавляем задачи в проект
$project->addTask($task1);
$project->addTask($task2);

// Выводим информацию о проекте и задачах
echo "Информация о проекте: ";
var_dump($project->getProjectInfo());

// Удаляем задачу из проекта
$project->removeTask($task1);

echo "Информация о проекте после удаления задачи: ";
var_dump($project->getProjectInfo());
