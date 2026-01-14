@extends('dashblayout.dashlayout')
@section('body')
<style>
    /* Custom Styles */
    .card-custom {
        border: none;
        background-color: #6c757d; /* Main color */
        color: white;
    }

    .card-header-custom {
        background-color: #5a6268;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .card-img-custom {
        width: 100%;
        height: 200px;
        object-fit: cover;
        background-color: #5a6268;
    }

    .btn-custom {
        background-color: #5a6268;
        color: white;
        border: none;
    }

    .btn-custom:hover {
        background-color: #495057;
    }
</style>


<div class="container">
    <h2 class="text-center mb-4" style="color: #6c757d;">Traders List</h2>
    <div class="row">
        @foreach($traders as $trader)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ $trader->tradersprofilepic ?? 'https://via.placeholder.com/150' }}" class="card-img-top" alt="Trader Profile Picture">
                    <div class="card-body">
                        <h5 class="card-title">{{ $trader->name }}</h5>
                        {{-- <p class="card-text">{{ $trader->email }}</p> --}}
                        <a href="{{ route('trader.trades', $trader->id) }}" class="btn btn-outline-secondary" style="color: #6c757d;">
                            View Trades
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection
