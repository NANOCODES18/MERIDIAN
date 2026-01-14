@extends('dashblayout.dashlayout')
@section('body')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class="container">
    @if(session()->has('sendaddress') && !empty(session('sendaddress')))
    <div class="container mt-5 row" style="text-align: center">
        <div class="d-flex align-items-center row" style="text-align: center">
            <span style="color: rgba(122, 157, 215, 0.444)" class="col-sm-3 col-md-3">Depost Address</span>
            <span class="mr-2 col-sm-7 col-md-6" id="textToCopy">{{ session('sendaddress') }}</span>
            <button class="btn btn-outline-secondary col-sm-2 col-md-3" onclick="copyText()" title="Copy to clipboard">
                <i class="fas fa-clipboard"></i>
            </button>
        </div>
    </div>
@endif

    <div class="row card">

        <div class="card-header text-center"><h4>Use the form to make a deposit</h4></div>
        

       
    


        <style>
            form{
                width: 60%;
                margin: auto;
            }
        </style>
            
            <!-- Form -->
            <form action="{{ route('dashb_depositsubmit') }}" method="POST">
                @csrf
            
                <div class="mb-4">
                    <label class="my-1 me-2" for="">Enter Amount</label>
                    <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter Amount" aria-describedby="amount"><br>

                </div>
                <div class="mb-4">
                <label class="my-1 me-2" for="">Chose payment Method</label>
                <input type="hidden" class="form-control" id="email" name="email">
                <input type="hidden" class="form-control" id="name" name="name">
                <input type="hidden" class="form-control" id="methodAccount" name="methodAccount">
                <input type="hidden" class="form-control" id="userId" name="userId">
                <select class="form-select form-control" name="method" aria-label="Default select example">
                    <option selected class="form-control">Select a Payment Method</option>
                    <option class="form-control" value="btc_address">BTC</option>
                    <option class="form-control" value="eth">ETH</option>
                    <option class="form-control" value="usdttrc20">USDT (TRC20 NETWORK)</option>
                    <option class="form-control" value="usdt">USDT (ERC20 NETWORK)</option>
                    {{-- <option class="form-control" value="paypal">Paypal</option> --}}
                    <option class="form-control" value="xrp">XRP</option>
                    <option class="form-control" value="xlm">XLM</option>
                    <option class="form-control" value="sol">Solana</option>
                    {{-- <option value="usdt">USDT</option> --}}
                </select>
                <br>
                
            </div>
            <div class="mb-4">
                <button class="btn btn-success" type="submit">Deposit</button>
            </div>

        </form>

    </div>

    </div>

    <script>
        function copyText() {
            const textToCopy = document.getElementById("textToCopy").textContent;
    
            // Create a temporary textarea element to hold the text
            const tempTextarea = document.createElement("textarea");
            tempTextarea.value = textToCopy;
            document.body.appendChild(tempTextarea);
    
            // Select the text and copy it
            tempTextarea.select();
            document.execCommand("copy");
    
            // Remove the temporary textarea from the document
            document.body.removeChild(tempTextarea);
    
            // Show a Bootstrap toast or alert for success
            alert("Text copied: " + textToCopy);
        }
    </script>


@endsection
