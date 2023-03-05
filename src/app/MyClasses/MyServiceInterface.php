<?php
namespace App\MyClasses;

interface MyServiceInterface
{
    public function setId(int $id): void;
    public function say(): string;
    public function alldata(): array;
    public function setData(int $id): string;
}
