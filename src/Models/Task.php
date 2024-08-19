<?php

namespace App\Models;

class Task
{
    private $id;
    private $title;
    private $description;
    private $status;
    private $assignedTo;
    private $createdAt;
    private $updatedAt;

    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
        $this->status = 'pending';
        $this->createdAt = date('Y-m-d H:i:s');
        $this->updatedAt = date('Y-m-d H:i:s');
    }

    public function create()
    {
        // Логика для создания задачи, например, сохранение в базу данных
        // Для упрощения просто сгенерируем уникальный ID
        $this->id = uniqid();
        return $this;
    }

    public function update($title = null, $description = null)
    {
        if ($title) {
            $this->title = $title;
        }
        if ($description) {
            $this->description = $description;
        }
        $this->updatedAt = date('Y-m-d H:i:s');
    }

    public function delete()
    {
        // Логика для удаления задачи
        // В реальном приложении вы бы удалили задачу из базы данных
        $this->id = null;
        $this->title = null;
        $this->description = null;
        $this->status = null;
        $this->assignedTo = null;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $allowedStatuses = ['pending', 'in_progress', 'completed'];
        if (in_array($status, $allowedStatuses)) {
            $this->status = $status;
            $this->updatedAt = date('Y-m-d H:i:s');
        } else {
            throw new \Exception("Invalid status: $status");
        }
    }

    public function assignTo($user)
    {
        $this->assignedTo = $user;
        $this->updatedAt = date('Y-m-d H:i:s');
    }
}
