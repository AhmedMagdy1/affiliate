<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Sedna Agency Affilate</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard-rtl/">
    <!-- Bootstrap core CSS -->
    <link href="/dashboard/assets/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <style>
        body {
            font-family: 'Cairo';
        }
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        .nav-item{
            border-bottom: 1px solid #ccc!important;
            font-size:16px;
            font-weight: bold;
            padding: 6px;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="/dashboard/dashboard.rtl.css" rel="stylesheet">
    @yield('style')
</head>
<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Sedna Agency</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="تبديل التنقل">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();document.getElementById('logout-form').submit();">تسجيل خروج</a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </ul>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">
                            <span data-feather="home"></span>
                            <i class="fab fa-product-hunt"></i>
                            منتجاتنا
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/orders">
                            <span data-feather="file"></span>
                            <i class="fas fa-list-ul"></i>
                            الطلبات
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/order/create">
                            <span data-feather="shopping-cart"></span>
                            <i class="fas fa-cart-plus"></i>
                            إضافة طلب
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="users"></span>
                            <i class="fas fa-envelope-open-text"></i>
                            الدعم
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span>
                            <i class="fas fa-user-cog"></i>
                            الإعدادات
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">منتجاتنا</h1>
            </div>
            <div class="content">
                @yield('content')
            </div>
        </main>
    </div>
</div>


<script src="/dashboard/assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@yield('script')

</body>
</html>
