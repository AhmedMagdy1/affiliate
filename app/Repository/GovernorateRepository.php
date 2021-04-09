<?php

namespace App\Repository;
use App\Models\Governorate;
use App\Repository\BaseRepository;

class GovernorateRepository extends BaseRepository implements GovernorateRepositoryInterface
{

    public function __construct(Governorate $model)
    {
        parent::__construct($model);
    }

}
