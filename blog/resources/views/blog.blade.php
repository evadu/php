@extends('layouts.app')

@section('content')
<div class="row" style="width: 80%">
    <div class="col-md-4 user-shape">
        @for($i=0;$i<5;$i++)
        <div class="@if($i==0)title @else item @endif">
            <img src="{{asset('/img/account_icon.jpg')}}"> 排名{{$i}}
        </div>
        @endfor
        <div class="">
            弹幕区
        </div>
    </div>
    <div class="col-md-4 blog-shape">
    </div>
    <div class="col-md-4 team-shape">
        @for($i=0;$i<5;$i++)
        <div class="@if($i==0)title @else item @endif">
            <img src="{{asset('/img/account_icon.jpg')}}"> 团队{{$i}}
        </div>
        @endfor
    </div>
</div>
@endsection
