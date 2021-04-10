@extends('layouts.dashboard')
@section('style')
    <style>
        table {
            /*width: 750px;*/
            border-collapse: collapse;
            margin: 50px auto;
        }

        /* Zebra striping */
        tr:nth-of-type(odd) {
            background: #eee;
        }

        th {
            background: #3498db;
            color: white;
            font-weight: bold;
        }

        td, th {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
            font-size: 18px;
        }

        /*
        Max width before this PARTICULAR table gets nasty
        This query will take effect for any screen smaller than 760px
        and also iPads specifically.
        */
        @media only screen and (max-width: 760px),
        (min-device-width: 768px) and (max-device-width: 1024px) {

            table {
                width: 100%;
            }

            /* Force table to not be like tables anymore */
            table, thead, tbody, th, td, tr {
                display: block;
            }

            /* Hide table headers (but not display: none;, for accessibility) */
            thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            tr {
                border: 1px solid #ccc;
            }

            td {
                /* Behave  like a "row" */
                border: none;
                border-bottom: 1px solid black;
                position: relative;
                left: 6px;
                /*padding-left: 50%;*/
                /*text-align: center;*/
                padding-left: 18px;
            }

            td:before {
                /*display: none;*/
                /* Now like a table header */
                position: absolute;
                /* Top/left values mimic padding */
                top: 6px;
                right: 6px;
                width: 45%;
                padding-right: 10px;
                /*white-space: nowrap;*/
                /* Label the data */
                text-align: center;
                content: attr(data-column);
                color: #000;
                font-weight: bold;
            }
            .td_commercial_activities{
                height: 72px;
            }
            table tr td:first-child{
                background: #007bff!important;
                color:white
            }
            table tr td:first-child:before{
                color:white
            }

        }
    </style>
@endsection
@section('content')
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>اسم العميل</th>
            <th>رقم التليفون</th>
            <th>النشاط التجاري للعميل</th>
            <th>المحافظة</th>
            <th>الباقة</th>
            <th>حالة الطلب</th>
            <th>السعر</th>
            <th>العمولة</th>
            <th>ملاحظات</th>
            <th>تعديل</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td data-column="#">{{$order->id}}</td>
                <td data-column="اسم العميل">{{$order->client_name}}</td>
                <td data-column="رقم التليفون">{{$order->client_phone}}</td>
                <td data-column="النشاط التجاري للعميل" class="td_commercial_activities">{{$order->commercial_activities ?? '-'}}</td>
                <td data-column="المحافظة">{{(isset($order->client_governorate->name)) ? $order->client_governorate->name : "-"}}</td>
                <td data-column="الباقة">{{(isset($order->plan->name)) ? $order->plan->name : "-"}}</td>
                <td data-column="حالة الطلب">{{(isset($order->order_status->name)) ? $order->order_status->name : "-"}}</td>
                <td data-column="السعر">{{$order->price}}</td>
                <td data-column="العمولة">{{$order->commission}}</td>
                <td data-column="ملاحظات">{{$order->notes}}</td>
                <td data-column="تعديل"><a href="/orders/{{$order->id}}/edit" class="btn btn-link"><i class="fas fa-edit"></i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
