@extends('dashblayout.dashlayout')
@section('body')
    <div class="container">
        <h2 class="text-center mb-4" style="color: #6c757d;">Trades for {{ $traderName }}</h2>

        {{-- Display success message --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Display error message --}}
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="row">
            @foreach ($trades as $trade)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Trade #{{ $trade->id }}</h5>
                            <p>Minimum: {{ $trade->minimum }}</p>
                            <p>Maximum: {{ $trade->maximum }}</p>
                            <p>Avg %: {{ $trade->average_percentage }}%</p>
                            <p>Fees: {{ $trade->fees }}</p>
                            <p>Investors: {{ $trade->investors }}</p>


                           

                            <form method="POST" action="{{ route('trade.copy', $trade->id) }}">
                                @csrf
                                <div class="form-group">
                                    <label for="amount_{{ $trade->id }}">Enter Amount:</label>
                                    <input type="number" placeholder="Enter Amount" class="form-control" id="amount_{{ $trade->id }}"
                                        name="amount" required>
                                </div>

                                {{-- Voucher Code Input --}}
                                <div class="form-group">
                                    <label for="voucher_{{ $trade->id }}" style="color: green">Enter Voucher Code
                                        (Optional):</label>
                                    <input type="text" placeholder="enter voucher code(optional)" class="form-control" id="voucher_{{ $trade->id }}"
                                        name="voucher_code">
                                </div>

                                <div class="form-group">
                                    <label for="voucher_{{ $trade->id }}" style="color: rgb(86, 139, 209)">Custom stop loss(%)
                                        (Optional):</label>
                                    <input type="range" id="rangeInput" max="100" min="1" value="" step="1" placeholder="enter stoploss(optional) in percent" class="form-control">
                                    
    <div class="value-display" id="valueDisplay">Value: 50%</div>
                                        
                                </div>

                                <button type="submit" class="btn btn-secondary">Copy Trade</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <a href="{{ route('traders.list') }}" class="btn btn-outline-secondary">Back to Traders</a>
    </div>
    <script>
        const rangeInput = document.getElementById('rangeInput');
        const valueDisplay = document.getElementById('valueDisplay');
    
        // Update the display value dynamically as the range slider moves
        rangeInput.addEventListener('input', () => {
          valueDisplay.textContent = `Value: ${rangeInput.value}%`;
        });
      </script>
@endsection
