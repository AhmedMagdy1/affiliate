<?php

namespace App\Repository;
use App\Models\Plan;

class PlanRepository extends BaseRepository implements PlanRepositoryInterface
{
    public function __construct(Plan $model)
    {
        parent::__construct($model);
    }
}
