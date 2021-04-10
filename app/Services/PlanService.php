<?php


namespace App\Services;


use App\Repository\PlanRepositoryInterface;

class PlanService
{
    private $planRepository;
    public function __construct(PlanRepositoryInterface $planRepository)
    {
        $this->planRepository = $planRepository;
    }
    public function all()
    {
        return $this->planRepository->all();
    }
    public function calculateActualCommission( $id, $actualPrice )
    {
        $plan = $this->planRepository->findOrFail($id);
        return ($actualPrice - $plan->price) + $plan->commission;
    }

}
