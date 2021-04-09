<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;

class BaseRepository implements EloquentRepositoryInterface {

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function insert(array $attributes)
    {
        return $this->model->insert($attributes);
    }

    public function update(array $attributes)
    {
        return $this->model->update($attributes);
    }

    public function delete($id)
    {
        return $this->model->delete($id);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function first()
    {
        return $this->model->first();
    }
    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);
    }
}
