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
    <h2 class="text-center">Market Trades</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>#</th>
                <th>Subscription</th>
                <th>Symbol</th>
                <th>Type</th>
                <th>Trade type</th>
                <th>Closing PNL</th>
                <th>Entry Price</th>
                <th>Avg Close Price</th>
                <th>Closed Volume</th>
                <th>Opened At</th>
                <th>Closed At</th>
                <th>Actions</th>
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
                    <td>{{ $trade->closed_volume }}</td>
                    <td>{{ $trade->opened_at }}</td>
                    <td>{{ $trade->closed_at }}</td>
                    <td>
                        <!-- Add any action buttons like edit or delete here -->
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="11" class="text-center">No Market Trades Found</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="d-flex justify-content-center mt-3">
        {{ $marketTrades->links() }}
    </div>
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
