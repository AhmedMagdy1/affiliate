<?php

namespace App\Http\Controllers;

use App\Services\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $orderService;
    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }
    public function index()
    {
        return $this->orderService->orders();
    }
    public function create()
    {
        return $this->orderService->create();
    }
    public function store(Request $request)
    {
        //todo request validation
        return $this->orderService->store($request);
    }

}
