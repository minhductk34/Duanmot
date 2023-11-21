<?php
class Category
{
    public $id;
    public $name;
    public $description;
    public $status;

    public function __construct($id, $name, $description, $status)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->status = $status;
    }
}