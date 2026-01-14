@extends('dashblayout.dashlayout')
@section('body')
<div class="container">
    <h2 class="text-center mb-4" style="color: #6c757d;">Traded Assets for Subscription #{{ $subscription->id }}</h2>
    <div class="row">
        @if($marketTrades->count() > 0)
            @foreach($marketTrades as $trade)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $trade->symbol }}</h5>
                            <p>Type: {{ $trade->type }}</p>
                            <p>Closing PNL: {{ $trade->closing_pnl }}</p>
                            <p>Entry Price: {{ $trade->entry_price }}</p>
                            <p>Avg. Close Price: {{ $trade->avg_close_price }}</p>
                            <p>Closed Volume: {{ $trade->closed_volume }}</p>
                            <p>Opened At: {{ $trade->opened_at }}</p>
                            <p>Closed At: {{ $trade->closed_at }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No trades found for this subscription.</p>
        @endif
    </div>
</div>
@endsection('body')
