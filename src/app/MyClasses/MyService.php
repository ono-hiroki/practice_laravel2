<?php

namespace App\MyClasses;

class MyService
{
    private $id = -1;
    private $msg = 'no id...';
    private $data = ['Hello', 'Welcome', 'Bye'];

    public function __construct()
    {
    }

    public function setId(int $id): void
    {
        $this->id = $id;
        if ($id >= 0 && $id < count($this->data)) {
            $this->msg = 'select id = ' . $id . ', data = ' . $this->data[$id];
        }
    }

    public function say(): string
    {
        return $this->msg;
    }

    public function data(int $id): string
    {
        return $this->data[$id];
    }

    public function alldata(): array
    {
        return $this->data;
    }
}
