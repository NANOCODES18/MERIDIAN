@extends('dashblayout.dashlayout')
@section('body')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Market Trades</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('market-trades.user.index') }}">View Trades</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <h2 class="text-center">Market Trades</h2>

    <!-- Responsive Table -->
    <div class="table-responsive mt-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Subscription</th>
                    <th>Trading Pair</th>
                    <th>Type</th>
                    <th>Trade type</th>
                    <th>Closing PNL</th>
                    <th>Entry Price</th>
                    <th>Avg Close Price</th>
                    <th>Opened At</th>
                    <th>Closed At</th>
                </tr>
            </thead>
            <tbody>
                @forelse($marketTrades as $trade)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $trade->subscription->id ?? 'N/A' }}</td>
                        <td>{{ $trade->symbol }}</td>
                        <td>{{ $trade->type }}</td>
                        <td>{{ $trade->tradetype }}</td>
                        <td>{{ $trade->closing_pnl }}</td>
                        <td>{{ $trade->entry_price }}</td>
                        <td>{{ $trade->avg_close_price }}</td>
                        <td>{{ $trade->opened_at }}</td>
                        <td>{{ $trade->closed_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10" class="text-center">No Market Trades Found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination Section -->
    <div class="d-flex justify-content-center mt-3">
        @if($marketTrades->count() > 0)
            {{ $marketTrades->links() }}
        @else
            <p class="text-center">No trades available to paginate.</p>
        @endif
    </div>
</div>

@endsection
