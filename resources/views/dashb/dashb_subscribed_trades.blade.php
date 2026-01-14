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
    <h2 class="text-center mb-4" style="color: #6c757d;">Your Subscribed Trades</h2>
    <div class="row">
        @if($subscribedTrades->count() > 0)
            @foreach($subscribedTrades as $subscription)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Trade #{{ $subscription->trade->id }}</h5>
                            <p>Minimum: {{ $subscription->trade->minimum }}</p>
                            <p>Maximum: {{ $subscription->trade->maximum }}</p>
                            <p>Avg %: {{ $subscription->trade->average_percentage }}%</p>
                            <a href="{{ route('subscriptions.trades', $subscription->id) }}" class="btn btn-custom mt-2">
                                View Traded Assets
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No subscribed trades found.</p>
        @endif
    </div>
</div>


@endsection('body')