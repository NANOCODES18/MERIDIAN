@extends("adminlayout.adminlayout")

@section('body')

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row"></div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="container">
                        <h2>Proofs of Payment</h2>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Coin</th>
                                    <th>Wallet Address</th>
                                    <th>Proof (File)</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($proofs as $proof)
                                <tr>
                                    <td>{{ $proof->user->name ?? 'N/A' }}</td> <!-- Use null coalescing to handle cases where user is not found -->
                                    <td>{{ $proof->amount }}</td>
                                    <td>{{ $proof->date }}</td>
                                    <td>{{ $proof->coin }}</td>
                                    <td>{{ $proof->address }}</td>
                                    <td>
                                        @if(Str::endsWith($proof->file, ['.pdf']))
                                            <a href="{{ asset('storage/' . $proof->file) }}" target="_blank">View PDF</a>
                                        @else
                                            <img src="{{ asset('storage/' . $proof->file) }}" alt="Proof Image" width="100%">
                                        @endif
                                    </td>
                                    <td>
                                        
                                            @if(Str::endsWith($proof->file, ['.pdf']))
                                                <a href="{{ asset('storage/' . $proof->file) }}" download>
                                                    <button type="button">Download PDF</button>
                                                </a>
                                            @else
                                                <a href="{{ asset('storage/' . $proof->file) }}" download>
                                                    <button type="button">Download Image</button>
                                                </a>
                                            @endif
                                        
                                        
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
