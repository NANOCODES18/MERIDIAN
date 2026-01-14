@extends('adminlayout.adminlayout')
@section('body')
    <div class="content-page">

        <div class="content">
            <div class="container-fluid">

                <div class="row">
                </div>
                <div class="row">

                    <div class="col-lg-12">










                        <div class="container mt-4">
                            <h2>Vouchers</h2>
                        
                            <a href="{{ route('vouchers.create') }}" class="btn btn-primary mb-3">Create New Voucher</a>
                        
                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                        
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Amount</th>
                                        <th>Voucher Code</th>
                                        <th>Expiry Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($vouchers as $voucher)
                                    <tr>
                                        <td>{{ $voucher->id }}</td>
                                        <td>{{ $voucher->amount }}</td>
                                        <td>{{ $voucher->voucher_code }}</td>
                                        <td>{{ $voucher->expiry_date }}</td>
                                        <td>{{ ucfirst($voucher->status) }}</td>
                                        <td>
                                            <a href="{{ route('vouchers.edit', $voucher->id) }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('vouchers.delete', $voucher->id) }}" method="POST" style="display:inline-block;">
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
