@extends('layouts.dashboard')
@section('style')
    <link rel="stylesheet" href="/products/css/pricing-plan.css">
@endsection
@section('content')
    <div class="container">
        <h5 class="text-center pricing-table-subtitle">PRICING PLAN</h5>
        <h1 class="text-center pricing-table-title">Website packages</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card pricing-card pricing-plan-basic">
                    <div class="card-body">
                        <i class="fas fa-cube pricing-plan-icon"></i>
                        <p class="pricing-plan-title">Basic</p>
                        <h3 class="pricing-plan-cost ml-auto">6,000 EGP</h3>
                        <p class="pricing-plan-title">Commission: 300EGP</p>
                        <ul class="pricing-plan-features basic">
                            <li> Domain.com: Yes <i class="fas fa-check"></i> </li>
                            <li>Hosting: 10GB  <i class="fas fa-check"></i></li>
                            <li>Email Address: 3  <i class="fas fa-check"></i></li>
                            <li>Mobile Friendly: Yes  <i class="fas fa-check"></i></li>
                            <li>SSL Certificate:No  <i class="fas fa-times"></i></li>
                            <li>Admin Control:Yes  <i class="fas fa-check"></i></li>
                            <li>24/7 Support: No  <i class="fas fa-times"></i></li>
                            <li>Woo Commerce: No  <i class="fas fa-times"></i></li>
                        </ul>
                        <a href="#!" class="btn pricing-plan-purchase-btn">Purchase</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card pricing-card pricing-card-highlighted  pricing-plan-pro">
                    <div class="card-body">
                        <i class="fas fa-trophy pricing-plan-icon"></i>
                        <p class="pricing-plan-title">Standard</p>
                        <h3 class="pricing-plan-cost ml-auto">7,500 EGP</h3>
                        <p class="pricing-plan-title">Commission: 400EGP</p>
                        <ul class="pricing-plan-features standard">
                            <li> Domain.com: Yes <i class="fas fa-check"></i> </li>
                            <li>Hosting: 20GB  <i class="fas fa-check"></i></li>
                            <li>Email Address: 6  <i class="fas fa-check"></i></li>
                            <li>Mobile Friendly: Yes  <i class="fas fa-check"></i></li>
                            <li>SSL Certificate:Yes  <i class="fas fa-check"></i></li>
                            <li>Admin Control:Yes  <i class="fas fa-check"></i></li>
                            <li>24/7 Support: Yes  <i class="fas fa-check"></i></li>
                            <li>Woo Commerce: No  <i class="fas fa-times"></i></li>
                        </ul>
                        <a href="#!" class="btn pricing-plan-purchase-btn">Purchase</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card pricing-card pricing-plan-enterprise">
                    <div class="card-body">
                        <i class="fas fa-gift-card pricing-plan-icon"></i>
                        <p class="pricing-plan-title">Premium</p>
                        <h3 class="pricing-plan-cost ml-auto">10,000EGP</h3>
                        <p class="pricing-plan-title">Commission: 500EGP</p>
                        <ul class="pricing-plan-features premium">
                            <li> Domain.com: Yes <i class="fas fa-check"></i> </li>
                            <li>Hosting: 20GB  <i class="fas fa-check"></i></li>
                            <li>Email Address: 6  <i class="fas fa-check"></i></li>
                            <li>Mobile Friendly: Yes  <i class="fas fa-check"></i></li>
                            <li>SSL Certificate:Yes  <i class="fas fa-check"></i></li>
                            <li>Admin Control:Yes  <i class="fas fa-check"></i></li>
                            <li>24/7 Support: Yes  <i class="fas fa-check"></i></li>
                            <li>Woo Commerce: Yes  <i class="fas fa-times"></i></li>
                        </ul>
                        <a href="#!" class="btn pricing-plan-purchase-btn">Purchase</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
