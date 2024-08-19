<?php

namespace App\Models;

class Project
{
    private $id;
    private $name;
    private $tasks = [];
    private $createdAt;
    private $updatedAt;

    public function __construct($name)
    {
        $this->name = $name;
        $this->id = uniqid();
        $this->createdAt = date('Y-m-d H:i:s');
        $this->updatedAt = date('Y-m-d H:i:s');
    }

    public function addTask(Task $task)
    {
        $this->tasks[] = $task;
        $this->updatedAt = date('Y-m-d H:i:s');
    }

    public function removeTask(Task $task)
    {
        foreach ($this->tasks as $key => $projectTask) {
            if ($projectTask === $task) {
                unset($this->tasks[$key]);
                $this->updatedAt = date('Y-m-d H:i:s');
            }
        }
        $this->tasks = array_values($this->tasks); 
    }

    public function getTasks()
    {
        return $this->tasks;
    }

    public function getProjectInfo()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'tasks' => $this->tasks,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
        ];
    }
}
