<?php

namespace App\Models;

class User
{
    private $id;
    private $name;
    private $email;
    private $tasks = [];

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
        $this->id = uniqid();
    }

    public function assignTask(Task $task)
    {
        $this->tasks[] = $task;
        $task->assignTo($this->name);
    }

    public function removeTask(Task $task)
    {
        foreach ($this->tasks as $key => $userTask) {
            if ($userTask === $task) {
                unset($this->tasks[$key]);
                $task->assignTo(null);
            }
        }
    }

    public function getTasks()
    {
        return $this->tasks;
    }
}
