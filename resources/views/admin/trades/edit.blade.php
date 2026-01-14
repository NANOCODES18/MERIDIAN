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
                        <h2>Edit Trade</h2>
                    
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                    
                        <form action="{{ route('admin.trades.update', $trade->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                    
                            <div class="form-group">
                                <label for="minimum">Minimum</label>
                                <input type="number" name="minimum" class="form-control" value="{{ old('minimum', $trade->minimum) }}" required>
                            </div>
                    
                            <div class="form-group">
                                <label for="maximum">Maximum</label>
                                <input type="number" name="maximum" class="form-control" value="{{ old('maximum', $trade->maximum) }}" required>
                            </div>
                    
                            <div class="form-group">
                                <label for="average_percentage">Average Percentage</label>
                                <input type="number" name="average_percentage" class="form-control" value="{{ old('average_percentage', $trade->average_percentage) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="fees">Fees</label>
                                <input type="number" step="0.01" name="fees" class="form-control" value="{{ old('fees', $trade->fees) }}" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="investors">Investors</label>
                                <input type="number" name="investors" class="form-control" value="{{ old('investors', $trade->investors) }}" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="nickname">Nickname (Optional)</label>
                                <input type="text" name="nickname" class="form-control" value="{{ old('nickname', $trade->nickname) }}">
                            </div>
                    
                            <button type="submit" class="btn btn-primary">Update Trade</button>
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
