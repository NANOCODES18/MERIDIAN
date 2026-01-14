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
        <h2>KYC Submission Details</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                KYC Submission for {{ $kycSubmission->full_name }}
            </div>
            <div class="card-body">
                <p><strong>User ID:</strong> {{ $kycSubmission->user_id }}</p>
                <p><strong>Full Name:</strong> {{ $kycSubmission->full_name }}</p>
                <p><strong>Date of Birth:</strong> {{ $kycSubmission->dob }}</p>
                <p><strong>Address:</strong> {{ $kycSubmission->address }}</p>
                <p><strong>ID Document:</strong> <a href="{{ asset('storage/' . $kycSubmission->id_document_path) }}" target="_blank">View Document</a></p>
                <p><strong>Status:</strong> 
                    @if($kycSubmission->status == 'pending')
                        <span class="badge badge-warning">Pending</span>
                    @elseif($kycSubmission->status == 'verified')
                        <span class="badge badge-success">Verified</span>
                    @elseif($kycSubmission->status == 'rejected')
                        <span class="badge badge-danger">Rejected</span>
                    @endif
                </p>

                <div class="mt-4">
                    @if($kycSubmission->status == 'pending')
                        <form action="{{ route('admin.kyc.approve', $kycSubmission->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-success">Approve KYC</button>
                        </form>

                        <form action="{{ route('admin.kyc.reject', $kycSubmission->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger">Reject KYC</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>

        <a href="{{ route('admin.kyc.index') }}" class="btn btn-primary mt-4">Back to KYC Submissions</a>
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