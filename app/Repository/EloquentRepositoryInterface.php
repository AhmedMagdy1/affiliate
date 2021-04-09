<?php

namespace App\Repository;


use Illuminate\Database\Eloquent\Model;

/**
 * Interface EloquentRepositoryInterface
 * @package App\Repositories
 */
interface EloquentRepositoryInterface
{
    public function create(array $attributes);
    public function insert(array $attributes);
    public function update(array $attributes);
    public function delete($id);
    public function find($id);
    public function all();
    public function first();
}
