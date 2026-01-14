@extends("adminlayout.adminlayout")
@section('body')

<div class="content-page">

    <div class="content">
        <div class="container-fluid">

            <div class="row">
            </div>
            <div class="row">

                <div class="col-lg-12">

<div class="container mt-4">
    <h2 class="text-center">Create Market Trade</h2>

    <form action="{{ route('market-trades.store') }}" method="POST" class="mt-4">
        @csrf
        <div class="form-group mb-3">
            <label for="subscription_id">Subscription</label>
            <select class="form-control @error('subscription_id') is-invalid @enderror" id="subscription_id" name="subscription_id" required>
                <option value="">Select Subscription</option>
                @foreach($subscriptions as $subscription)
                    <option value="{{ $subscription->id }}" {{ old('subscription_id') == $subscription->id ? 'selected' : '' }}>
                        Subscription ID: {{ $subscription->id }} | 
                        Trade Nickname: {{ $subscription->trade->nickname ?? 'N/A' }} | 
                        User Name: {{ $subscription->user->name ?? 'N/A' }}
                    </option>
                @endforeach
            </select>
            @error('subscription_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="symbol">Symbol</label>
            <input type="text" class="form-control @error('symbol') is-invalid @enderror" id="symbol" name="symbol" value="{{ old('symbol') }}" required>
            @error('symbol')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="type">Type</label>
            <select class="form-control @error('type') is-invalid @enderror" id="type" name="type" required>
                <option value="Perp" {{ old('type') == 'Perp' ? 'selected' : '' }}>Perp</option>
                <option value="Cross" {{ old('type') == 'Cross' ? 'selected' : '' }}>Cross</option>
            </select>
            @error('type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="tradetype">Trade Type</label>
            <select class="form-control @error('tradetype') is-invalid @enderror" id="tradetype" name="tradetype" required>
                <option value="long" {{ old('tradetype') == 'long' ? 'selected' : '' }}>Long</option>
                <option value="short" {{ old('tradetype') == 'short' ? 'selected' : '' }}>Short</option>
            </select>
            @error('tradetype')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="closing_pnl">Closing PNL</label>
            <input type="number" class="form-control @error('closing_pnl') is-invalid @enderror" id="closing_pnl" name="closing_pnl" value="{{ old('closing_pnl') }}" step="0.01" required>
            @error('closing_pnl')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="entry_price">Entry Price</label>
            <input type="number" class="form-control @error('entry_price') is-invalid @enderror" id="entry_price" name="entry_price" value="{{ old('entry_price') }}" step="0.0001" required>
            @error('entry_price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="avg_close_price">Average Close Price</label>
            <input type="number" class="form-control @error('avg_close_price') is-invalid @enderror" id="avg_close_price" name="avg_close_price" value="{{ old('avg_close_price') }}" step="0.0001" required>
            @error('avg_close_price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="closed_volume">Closed Volume</label>
            <input type="text" class="form-control @error('closed_volume') is-invalid @enderror" id="closed_volume" name="closed_volume" value="{{ old('closed_volume') }}" required>
            @error('closed_volume')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="opened_at">Opened At</label>
            <input type="datetime-local" class="form-control @error('opened_at') is-invalid @enderror" id="opened_at" name="opened_at" value="{{ old('opened_at') }}" required>
            @error('opened_at')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="closed_at">Closed At</label>
            <input type="datetime-local" class="form-control @error('closed_at') is-invalid @enderror" id="closed_at" name="closed_at" value="{{ old('closed_at') }}" required>
            @error('closed_at')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create Market Trade</button>
    </form>
</div>

</div>
</div>
</div>
<footer class="footer text-right">
2022 ©
</footer>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script>
function hide_hint() {
$.ajax({
    type: "POST",
    url: 'ajax.php',
    data: 'hide_hint=' + 1,
    success: function(data) {
        $().html(data);
    }
});
}
</script>
</div>

@endsection
