<?php

namespace App\Interfaces;

interface RegistrationFormRepositoryInterface
{
    public function getAll();

    public function getByIds(array $ids);

    public function find(int $id);
    public function store(array $data);

    public function update(int $id, array $data);

    public function delete(int $id);
}
