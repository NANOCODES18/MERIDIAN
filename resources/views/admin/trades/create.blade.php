@extends("adminlayout.adminlayout")
@section('body')

<div class="content-page">

    <div class="content">
        <div class="container-fluid">

            <div class="row">
            </div>
            <div class="row">

                <div class="col-lg-12">

<div class="container">
    <h1>Create New Trade for {{ $trader->name }}</h1>
    <form action="{{ route('admin.trades.store', $trader->id) }}" method="POST">
        @csrf

        <!-- Minimum Value -->
        <div class="form-group">
            <label for="minimum">Minimum Value</label>
            <input type="number" name="minimum" class="form-control" id="minimum" placeholder="Enter minimum value" value="{{ old('minimum') }}" required>
            @error('minimum')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Maximum Value -->
        <div class="form-group">
            <label for="maximum">Maximum Value</label>
            <input type="number" name="maximum" class="form-control" id="maximum" placeholder="Enter maximum value" value="{{ old('maximum') }}" required>
            @error('maximum')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Average Percentage -->
        <div class="form-group">
            <label for="average_percentage">Average Percentage</label>
            <input type="number" name="average_percentage" class="form-control" id="average_percentage" placeholder="Enter average percentage" value="{{ old('average_percentage') }}" required>
            @error('average_percentage')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="fees">Fees</label>
            <input type="number" step="0.01" name="fees" class="form-control" id="fees" placeholder="Enter fees" value="{{ old('fees') }}" required>
            @error('fees')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="investors">Investors</label>
            <input type="number" name="investors" class="form-control" id="investors" placeholder="Enter number of investors" value="{{ old('investors') }}" required>
            @error('investors')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="nickname">Nickname (Optional)</label>
            <input type="text" name="nickname" class="form-control" id="nickname" placeholder="Enter nickname" value="{{ old('nickname') }}">
            @error('nickname')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Create Trade</button>
    </form>
</div>


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
