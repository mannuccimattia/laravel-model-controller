<div class="col-12 col-lg-6 col-xxl-4">
    <div class="card bg-dark text-light">
        <div class="card-body">

            <div class="card-title mb-4">
                <h4 class="fw-medium text-danger">
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
        </div>
        <div class="card-footer d-flex">
            <div>
                @php
                    $vote = '';
                    $num = $movie['vote'];
                    for ($i = 1; $i <= 10; $i++) {
                        if ($i == ceil($num) && floor($num) != $num) {
                            $vote .= '<i class="fa-solid fa-star-half-stroke"></i>';
                        } elseif ($i <= $num) {
                            $vote .= '<i class="fa-solid fa-star"></i>';
                        } else {
                            $vote .= '<i class="fa-regular fa-star"></i>';
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
