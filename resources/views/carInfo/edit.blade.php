@extends('layouts.app')

@section('head')

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        window.onload = function() {
            $('#carouselExampleIndicators').carousel();
        };
    </script>
@endsection

@section("content")


    <div class="container">
        <div  class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Redaguojamas automobilio informacija
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    [...]
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('carInfo.update', $carInfo->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
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
                            <div class="mb-3">
                                <label for="images">Automobilio nuotraukos:</label>
                                <input type="file" id="images" name="images[]" multiple>
                            </div>
                            <button class="btn btn-success">Atnaujinti</button>
                        </form>
                        <div>
                            {{--
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach($carInfo->images as $key => $image)
                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                            <img class="d-block w-100" src="{{ Storage::url($image->image) }}" alt="Car Image" style="width: 200px; height: auto;">
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            --}}
                            @foreach($carInfo->images as $image)
                                <div class="image-container">
                                    <img src="{{ Storage::url($image->image) }}" alt="Car Image" style="width: 200px; height: auto;">
                                    <form method="POST" action="{{ route('carImage.destroy', $image->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
