<?php

namespace App\Repository;
use App\Models\Order;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{
    public function __construct(Order $model)
    {
        parent::__construct($model);
    }
    public function loginInUserOrders()
    {
        return $this->model->with('user', 'plan', 'order_status', 'client_governorate')->where('user_id', auth()->user()->id)->get();
    }

}
