@extends('layouts.admin.mainLayout')
@section('pageLayout')
<div class="home-container">
    <div class="top">
        <div class="sail">
            <h2>売上状況</h2>
            <div class="sail-month">
                <p><span>¥{{$profit_month}}</span>/<span>{{$count_month}}件</span></p>
            </div>
            <div class="sail-day">
                <div class="sail-day_yesterday">
                    <p><span>¥{{$profit_yesterday}}</span>/<span>{{$count_yesterday}}件</span></p>
                </div>
                <div class="sail-day_today">
                    <p><span>¥{{$profit_today}}</span>/<span>{{$count_today}}件</span></p>
                </div>
            </div>
        </div>
        <div class="shop">
            <h2>ショップ状況</h2>
            <hr />
            <div class="shop-information">
                <div class="stock">
                    <p>{{$user_count}}</p>
                </div>
                <div class="user">
                    <p>{{$no_stock_product}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="image">
            <img src="{{ asset('img/pie-chart.png')}}">
            <img src="{{ asset('img/bar-chart.png')}}" alt="">
        </div>
    </div>
</div>
@endsection
@section('home','selected')