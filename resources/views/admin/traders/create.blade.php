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
    <h1>Create New Trader</h1>
    <form action="{{ route('admin.traders.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Trader Name -->
        <div class="form-group">
            <label for="name">Trader Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter trader's name" value="{{ old('name') }}" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Trader Email -->
        <div class="form-group">
            <label for="email">Trader Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter trader's email" value="{{ old('email') }}" required>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Trader Profile Picture -->
        <div class="form-group">
            <label for="tradersprofilepic">Trader Profile Picture</label>
            <input type="file" name="tradersprofilepic" class="form-control-file" id="tradersprofilepic">
            @error('tradersprofilepic')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Create Trader</button>
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
