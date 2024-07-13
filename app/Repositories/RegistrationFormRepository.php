<?php

namespace App\Repositories;

use App\Models\RegistrationForm;

class RegistrationFormRepository
{
    protected RegistrationForm $model;

    public function __construct(RegistrationForm $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getByIds(array $ids)
    {
        return $this->model->whereIn('id', $ids)->get();
    }

    public function find(int $id)
    {
        return $this->model->find($id);
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

    public function update(int $id, array $data)
    {
        $this->model->findOrFail($id)->update($data);
    }

    public function delete(int $id)
    {
        $this->model->findOrFail($id)->delete();
    }

}
