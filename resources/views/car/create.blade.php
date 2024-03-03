@extends('layouts.app')

@section('content')
    <div class="container">
        <div class = 'row'>
    <div class ='col-md-12'>
        <div class ='card'>
            <div class ='card-header'>Prideti nauja automobilio savininką</div>
            <div class ='card-body'>
                <form method="post" action="{{route('car.store')}}">
                    @csrf
            <div class ='mb-3'>
                <label>Vardas:</label>
                <input type ='text' class ='form-control' name="name">
            </div>
                <div class ='mb-3'>
                    <label>Pavarde:</label>
                    <input type ='text' class ='form-control' name="surname">
                </div>
                <div class ='mb-3'>
                    <label>Telefonas:</label>
                    <input type ='text' class ='form-control' name="phone">
                </div>
                <div class ='mb-3'>
                    <label>El. paštas:</label>
                    <input type ='email' class ='form-control' name="email">
                </div>
                <button class ='btn btn-success'>Prideti</button>
                </form>
            </div>
        </div>
    </div>
</div>
    </div>


    @endsection
