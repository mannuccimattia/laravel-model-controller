@extends('layouts.master')

@section('title')
    Home | Laravel Movies
@endsection

@section('content')
    {{-- @dd($movies) --}}
    <div class="container">
        <div class="row g-3">

            @foreach ($movies as $movie)
                <div class="col-12 col-lg-6 col-xxl-4">
                    <div class="card bg-dark text-light">
                        <div class="card-body">

                            <div class="card-title mb-4">
                                <h4 class="fw-semibold text-danger">
                                    {{ $movie['title'] }}
                                </h4>
                                <h6>
                                    ({{ $movie['original_title'] }})
                                </h6>
                            </div>

                            <div class="card-text">{{ ucfirst($movie['nationality']) }}</div>
                            <div class="card-text">
                                <em class="fw-semibold text-secondary">{{ $movie['date'] }}</em>
                            </div>
                            <div class="card-text d-flex mt-4">
                                <div>
                                    @php
                                        $vote = '';
                                        for ($i = 1; $i <= 10; $i++) {
                                            if ($i <= $movie['vote']) {
                                                $vote .= '❤️';
                                            } else {
                                                $vote .= '🤍';
                                            }
                                        }
                                        echo $vote;
                                    @endphp
                                </div>
                                <div class="ms-auto">
                                    ({{ $movie['vote'] }})
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
