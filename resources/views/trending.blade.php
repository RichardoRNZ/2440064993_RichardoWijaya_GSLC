@extends('layouts.main')
@section('content')

<div class="trending">
    <div class="container">
        <h1 class="text-center text-white pt-3">TRENDING MOVIES</h1>
        <div class="row">
            @foreach ($trending as $tr)
            <div class="col-md-4">
                <div class="card" id="movie-img">
                    <img src="{{$tr->image_url}}" class="img-fluid" />

                    <div class="card-body bg-dark text-white">
                      <h5 class="card-title text-center">{{$tr->title}}</h5>
                      <p class="card-text">
                        {{$tr->description}}
                      </p>

                        <div class="trailer-btn d-md-flex justify-content-md-center">
                            <button type="button" class="btn btn-outline-light">WATCH TRAILER</button>
                        </div>
                    </div>
                  </div>

            </div>
            @endforeach
             {{-- End of card --}}
        </div>
    </div>
  </div>

@endsection
