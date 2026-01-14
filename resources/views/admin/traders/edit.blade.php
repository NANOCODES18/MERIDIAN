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
                        <h2>Edit Trader</h2>
                    
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                    
                        <form action="{{ route('admin.traders.update', $trader->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                    
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name', $trader->name) }}" required>
                            </div>
                    
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email', $trader->email) }}" required>
                            </div>
                    
                            <div class="form-group">
                                <label for="tradersprofilepic">Profile Picture</label>
                                <input type="file" name="tradersprofilepic" class="form-control">
                                @if($trader->tradersprofilepic)
                                    <img src="{{ asset('storage/' . $trader->tradersprofilepic) }}" alt="Profile Picture" width="100">
                                @endif
                            </div>
                    
                            <button type="submit" class="btn btn-primary">Update Trader</button>
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
