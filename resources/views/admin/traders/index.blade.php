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
                        <h1>Traders</h1>
                        <a href="{{ route('admin.traders.create') }}" class="btn btn-primary">Add Trader</a>
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Profile Picture</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($traders as $trader)
                                <tr>
                                    <td>{{ $trader->name }}</td>
                                    <td>{{ $trader->email }}</td>
                                    <td><img src="{{ asset('assets/' . $trader->tradersprofilepic) }}" alt="Profile Pic" width="50"></td>

                                    <td>
                                        <a href="{{ route('admin.traders.edit', $trader->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('admin.traders.destroy', $trader->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        <a href="{{ route('admin.trades.index', $trader->id) }}" class="btn btn-info">View Trades</a>
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
