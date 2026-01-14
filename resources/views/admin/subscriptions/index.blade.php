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
    <h1>Subscriptions</h1>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>User</th>
                <th>Trader</th>
                <th>Trade</th>
                <th>Subscription Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subscriptions as $subscription)
            <tr>
                <td>{{ $subscription->user->name }}</td>
                <td>{{ $subscription->trader->name }}</td>
                <td>{{ $subscription->trade->average_percentage }}%</td>
                <td>{{ $subscription->created_at->format('d-m-Y') }}</td>
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
