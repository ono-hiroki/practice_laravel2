<?php
namespace App\MyClasses;

interface MyServiceInterface
{
    public function setId(int $id): void;
    public function say(): string;
    public function data(int $id): string;
}
