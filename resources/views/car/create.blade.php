@extends('layouts.app')

@section('content')
    <div class="container">
        <div class = 'row'>
    <div class ='col-md-12'>
        <div class ='card'>
            <div class ='card-header'>@lang('messages.new_owner')</div>
            <div class ='card-body'>
                <form method="post" action="{{route('car.store')}}">
                    @csrf
            <div class ='mb-3'>
                <label>@lang('messages.name'):</label>
                <input type ='text' class ='form-control' name="name">
            </div>
                <div class ='mb-3'>
                    <label>@lang('messages.surname'):</label>
                    <input type ='text' class ='form-control' name="surname">
                </div>
                <div class ='mb-3'>
                    <label>@lang('messages.phone'):</label>
                    <input type ='text' class ='form-control' name="phone">
                </div>
                <div class ='mb-3'>
                    <label>@lang('messages.email'):</label>
                    <input type ='email' class ='form-control' name="email">
                </div>
                <button class ='btn btn-success'>@lang('messages.add')</button>
                </form>
            </div>
        </div>
    </div>
</div>
    </div>


    @endsection
