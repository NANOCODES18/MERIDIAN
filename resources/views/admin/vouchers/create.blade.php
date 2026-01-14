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
                            <h2>Create Voucher</h2>
                        
                            <form action="{{ route('vouchers.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="amount">Amount</label>
                                    <input type="text" name="amount" class="form-control" required>
                                </div>
                        
                                <div class="form-group">
                                    <label for="voucher_code">Voucher Code</label>
                                    <input type="text" name="voucher_code" class="form-control" required>
                                </div>
                        
                                <div class="form-group">
                                    <label for="expiry_date">Expiry Date</label>
                                    <input type="date" name="expiry_date" class="form-control" required>
                                </div>
                        
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                        
                                <button type="submit" class="btn btn-success">Create Voucher</button>
                            </form>
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
