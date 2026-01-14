@extends("adminlayout.adminlayout")
@section('body')

<div class="content-page">

    <div class="content">
        <div class="container-fluid">

            <div class="row">
            </div>
            <div class="row">


                <table class="table">
                    <thead>
                        <tr>
                            <th>User Email</th>
                            <th>Full Name</th>
                            <th>Date of Birth</th>
                            <th>Address</th>
                            <th>ID Document</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kycSubmissions as $submission)
                            <tr>
                                <td>{{ $submission->user->email }}</td>
                                <td>{{ $submission->full_name }}</td>
                                <td>{{ $submission->dob }}</td>
                                <td>{{ $submission->address }}</td>
                                <td><a href="{{ Storage::url($submission->id_document_path) }}" target="_blank">View Document</a></td>
                                <td>{{ $submission->status }}</td>
                                <td>
                                    <form action="{{ route('kyc.verify', $submission->id) }}" method="POST">
                                        @csrf
                                        <select name="status">
                                            <option value="verified" {{ $submission->status == 'verified' ? 'selected' : '' }}>Verify</option>
                                            <option value="rejected" {{ $submission->status == 'rejected' ? 'selected' : '' }}>Reject</option>
                                        </select>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                






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