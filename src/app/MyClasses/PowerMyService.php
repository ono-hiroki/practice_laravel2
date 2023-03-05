<?php

namespace App\MyClasses;

class PowerMyService implements MyServiceInterface
{
    private $id = -1;
    private $msg = 'no id...';
    private $data = ['りんご', 'みかん', 'バナナ'];

    public function __construct()
    {
        $this->setId(rand(0, count($this->data)));
    }

    public function setId(int $id): void
    {
        if ($id >= 0 && $id < count($this->data)) {
            $this->id = $id;
            $this->msg = 'あなたが好きなのは「' . $this->data[$id] . '」ですね。';
        }
    }

    public function say(): string
    {
        return $this->msg;
    }

    public function setData(int $id): string
    {
        return $this->data[$id];
    }

    public function alldata(): array
    {
        return $this->data;
    }
}
