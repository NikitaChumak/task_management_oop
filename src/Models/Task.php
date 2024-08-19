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
    }

}
