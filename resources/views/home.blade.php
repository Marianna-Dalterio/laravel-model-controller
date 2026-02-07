@extends("layouts.app")
@section("content")
   
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    @foreach($movies as $movie)
        <div class="col">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                    <small class="text-uppercase fw-bold" style="font-size: 0.7rem;">{{ $movie->nationality }}</small>
                    <span class="badge rounded-pill bg-warning text-dark">
                        ⭐ {{ $movie->vote }}
                    </span>
                </div>
                
                <div class="card-body">
                    <h5 class="card-title mb-1 text-primary">{{ $movie->title }}</h5>
                    
                    @if($movie->title !== $movie->original_title)
                        <h6 class="card-subtitle mb-3 text-muted fst-italic">
                            <small>Titolo orig: {{ $movie->original_title }}</small>
                        </h6>
                    @endif

                    <hr class="my-2">

                    <p class="card-text mb-1">
                        <strong>Nazionalità:</strong> {{ ucfirst($movie->nationality) }}
                    </p>
                    <p class="card-text">
                        <strong>Uscita:</strong> 
                        {{ \Carbon\Carbon::parse($movie->date)->format('d/m/Y') }}
                    </p>
                </div>

                <div class="card-footer bg-transparent border-0 pb-3">
                    <a href="#" class="btn btn-sm btn-outline-dark w-100">Dettagli Film</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection

