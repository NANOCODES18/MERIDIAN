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
    <h1>Trades for {{ $trader->name }}</h1>
    <a href="{{ route('admin.trades.create', $trader->id) }}" class="btn btn-primary">Add Trade</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Trade id</th>
                <th>Minimum</th>
                <th>Maximum</th>
                <th>Average Percentage</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trades as $trade)
            <tr>
                <td>{{ $trade->id }}</td>
                <td>{{ $trade->minimum }}</td>
                <td>{{ $trade->maximum }}</td>
                <td>{{ $trade->average_percentage }}%</td>
                <td>
                    <a href="{{ route('admin.trades.edit', $trade->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.trades.destroy', $trade->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
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
