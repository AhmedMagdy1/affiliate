<?php


namespace App\Services;


use App\Repository\GovernorateRepositoryInterface;

class GovernorateService
{
    private $governorateRepository;
    public function __construct(GovernorateRepositoryInterface $governorateRepository)
    {
        $this->governorateRepository = $governorateRepository;
    }
    public function all()
    {
        return $this->governorateRepository->all();
    }

}
