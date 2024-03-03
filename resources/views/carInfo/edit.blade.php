@extends('layouts.app')

@section("content")
    <div class="container">
        <div  class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Redaguojamas automobilio informacija
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('carInfo.update', $carInfo) }}">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Registration Number:</label>
                                <input type="text" class="form-control" name="reg_number" value="{{$carInfo->reg_number}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Brand:</label>
                                <input type="text" class="form-control" name="brand" value="{{$carInfo->brand}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Model:</label>
                                <input type="text" class="form-control" name="model" value="{{$carInfo->model}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Owner ID:</label>
                                <input type="number" class="form-control" name="owner_id" value="{{$carInfo->owner_id}}">
                            </div>
                            <button class="btn btn-success">Atnaujinti</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
