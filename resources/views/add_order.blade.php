@extends('layouts.dashboard')
@section('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
    <style>
        .form-group {
            margin: 10px;
        }
    </style>
    <form action="/order/store" method="post">
        @csrf
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">اسم العميل</label>
            <div class="col-md-5">
                <input id="name" name="client_name" type="text" placeholder="برجاء كتابة اسم العميل بالكامل"
                       class="form-control input-md" required>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="email">رقم التليفون</label>
            <div class="col-md-5">
                <input name="client_phone" type="text" placeholder="برجاء كتابة رقم التليفون"
                       class="form-control input-md" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="commercial_activities">النشاط التجاري</label>
            <div class="col-md-5">
                <input name="commercial_activities" type="text" placeholder="برجاء كتابة النشاط التجاري للعميل"
                       class="form-control input-md" required>
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label" for="email">المحافظة</label>
            <div class="col-md-5">
                <select class="form-control" name="client_governorate_id" id="governorate" required>
                    <option value="">برجاء اختيار المحافظة للعميل</option>
                    @foreach($governorates as $governorate)
                        <option value="{{$governorate->id}}">{{$governorate->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="email">نوع الباقة</label>
            <div class="col-md-5">
                <select class="form-control" name="plan_id" id="plan" required>
                    <option value="">برجاء اختيار خطة الاسعار</option>
                    @foreach($planServices as $planService)
                        <option value="{{$planService->id}}" price="{{$planService->price}}"
                                commission="{{$planService->commission}}">{{$planService->name. ' - ' . $planService->price}}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label" for="email">السعر</label>
            <div class="col-md-5">
                <input name="price" type="text" placeholder="برجاء كتابة سعر البيع للعميل" class="form-control input-md price-value" required="">
                <p style="font-weight: bold;color: black">العمولة: <span class="commission" style="color: #0a7554">-</span></p>
            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="msg">ملاحظات</label>
            <div class="col-md-4">
                <textarea class="form-control" id="notes" name="notes" rows="6"></textarea>
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <button id="submit" type="submit" class="btn btn-primary">إضافة الطلب</button>
            </div>
        </div>
    </form>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#plan,#governorate').select2();
        });
        onSelectPlan();
        function onSelectPlan() {
            $('#plan').on('select2:select', function (e) {
                const price = $('#plan option:selected').attr('price');
                const commission = $('#plan option:selected').attr('commission');
                setPrice(price);
                setCommission(commission);
            });
        }
        function setPrice(price) {
            $('.price-value').val(price);
        }
        function setCommission(commission) {
            if(commission == undefined) { commission = '-' }
            $('.commission').html(commission);
        }
        onChangePrice();
        //todo on change price input
        function onChangePrice() {
            $(document).on('change', '.price-value', function () {
                const currentPrice = $('.price-value').val();
                const commission = $('#plan option:selected').attr('commission');
                const price = $('#plan option:selected').attr('price');
                const actualCommission = ( parseInt(currentPrice) - parseInt(price)) + parseInt(commission);
                setCommission( actualCommission );
            })
        }
    </script>
@endsection
