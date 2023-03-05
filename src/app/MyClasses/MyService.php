<?php

namespace App\MyClasses;

class MyService implements MyServiceInterface
{
    private $serial;
    private $id = -1;
    private $msg = 'no id...';
    private $data = ['Hello', 'Welcome', 'Bye'];

    public function __construct(int $id = -1)
    {
        $this->setId($id);
        $this->serial = rand();
        echo '「'. $this->serial .'」';
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
