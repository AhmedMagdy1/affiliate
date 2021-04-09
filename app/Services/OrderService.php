<?php


namespace App\Services;


use App\Repository\GovernorateRepositoryInterface;
use App\Repository\OrderRepositoryInterface;

class OrderService
{
    private $governorateService;
    private $planService;
    private $orderRepository;
    public function __construct( GovernorateService $governorateService, PlanService $planService, OrderRepositoryInterface $orderRepository)
    {
        $this->governorateService = $governorateService;
        $this->planService = $planService;
        $this->orderRepository = $orderRepository;
    }

    public function index()
    {
        $governorates = $this->governorateService->all();
        $planServices = $this->planService->all();
        return view('add_order', compact('governorates', 'planServices'));
    }
    public function store($request)
    {
        $data = $this->formatStoreRequest($request->except('_token'));
        $this->orderRepository->insert($data);
        return back();
    }
    private function formatStoreRequest($request)
    {
        $request['commission'] = $this->planService->calculateActualCommission($request['plan_id'], $request['price']);
        return $request + ['user_id' => auth()->user()->id, 'order_status_id' => 1];
    }
}
