@extends('layouts.app')

@section('content')
    <div class="container">
        <div class = 'row'>
            <div class ='col-md-12'>
                <div class ='card'>
                    <div class ='card-header'>@lang('messages.add_new_car_info')</div>
                    <div class ='card-body'>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" action="{{route('carInfo.store')}}">
                            @csrf
                            <div class ='mb-3'>
                                <label>@lang('messages.registration_number'):</label>
                                <input type ='text' class ='form-control {{ $errors->has('reg_number') ? 'is-invalid' : '' }}' name="reg_number" value="{{ old('reg_number') }}">
                            </div>
                            <div class ='mb-3'>
                                <label>@lang('messages.brand'):</label>
                                <input type ='text' class ='form-control {{ $errors->has('brand') ? 'is-invalid' : '' }}' name="brand" value="{{ old('brand') }}">
                            </div>
                            <div class ='mb-3'>
                                <label>@lang('messages.car_model'):</label>
                                <input type ='text' class ='form-control {{ $errors->has('model') ? 'is-invalid' : '' }}' name="model" value="{{ old('model') }}">
                            </div>
                            <div class ='mb-3'>
                                <label>@lang('messages.owner_id'):</label>
                                <input type ='number' class ='form-control {{ $errors->has('owner_id') ? 'is-invalid' : '' }}' name="owner_id" value="{{ old('owner_id') }}">
                            </div>
                            <button class ='btn btn-success'>@lang('messages.add')</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
