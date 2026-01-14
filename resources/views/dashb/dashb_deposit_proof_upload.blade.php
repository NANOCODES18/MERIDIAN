@extends('dashblayout.dashlayout')
@section('body')

<div class="container">
    <h2>Upload Proof of Payment</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('proof.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="file">Upload File (Image or PDF)</label>
            <input type="file" class="form-control" name="file" required>
        </div>

        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" step="0.01" class="form-control" name="amount" required>
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" name="date" required>
        </div>

        <div class="form-group">
            <label for="coin">Cryptocurrency (Coin)</label>
            <input type="text" class="form-control" name="coin" required>
        </div>

        <div class="form-group">
            <label for="address">Wallet Address</label>
            <input type="text" class="form-control" name="address" required>
        </div>

        <button type="submit" class="btn btn-primary" style="background-color: #8C7E52">Submit</button>
    </form>
</div>





@endsection
