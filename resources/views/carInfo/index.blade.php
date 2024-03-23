@extends('layouts.app')

@section('content')
    <!-- <h1>Welcome to our website!</h1>
    <p>[[test]]</p> -->


    <div class="container">
        <div class = 'row'>
            <div class ='col-md-12'>
                <div class ='card'>
                    <div class ='card-body'>
                        @if (Auth::check() && Auth::user()->role === 'editor')
                        <a href="{{route('carInfo.create') }}" class="btn btn-info">@lang('messages.add_new_car_info')</a>
                        @endif
                            <hr>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>@lang('messages.registration_number')</th>
                                    <th>@lang('messages.brand')</th>
                                    <th>@lang('messages.car_model')</th>
                                    <th>@lang('messages.owner_id')</th>
                                    <th>@lang('messages.edit')</th>
                                    <th>@lang('messages.delete')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($carInfos as $carInfo)
                                    <tr>
                                        <td>{{ $carInfo->reg_number }}</td>
                                        <td>{{ $carInfo->brand }}</td>
                                        <td>{{ $carInfo->model }}</td>
                                        <td>{{ $carInfo->owner_id }}</td>
                                        @if (Auth::check() && Auth::user()->role === 'editor')
                                        <td>

                                            <a class="btn btn-info" href="{{ route('carInfo.edit', $carInfo->id) }}">@lang('messages.edit')</a>

                                        </td>
                                        <td>

                                            <form method="POST" action="{{ route('carInfo.destroy', $carInfo->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">@lang('messages.delete')</button>
                                            </form>

                                        </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
