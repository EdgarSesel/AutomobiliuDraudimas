@extends('layouts.app')

@section("content")
    <div class="container">
        <div  class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if (Auth::check() && Auth::user()->role === 'editor')
                        <a href="{{route('car.create') }}" class="btn btn-info">@lang('messages.new_owner')</a>
                        @endif
                            <hr>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>@lang('messages.name')</th>
                                <th>@lang('messages.surname')</th>
                                <th>@lang('messages.phone')</th>
                                <th>@lang('messages.email')</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cars as $car)
                                <tr>
                                    <td>{{ $car->name }}</td>
                                    <td>{{ $car->surname }}</td>
                                    <td>{{ $car->phone }}</td>
                                    <td>{{ $car->email}}</td>
                                    <td>
                                        @if (Auth::check() && Auth::user()->role === 'editor')
                                            <a href="{{ route('car.edit', ['id' => $car->id]) }}" class="btn btn-primary">@lang('messages.edit')</a>
                                            <button class="btn btn-danger">@lang('messages.delete')</button>
                                        @endif
                                    </td>
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
