
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KYC/AML Verification</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://bitrally.top/assets/dist/css/verification.css">
    <link rel='stylesheet' href="https://bitrally.top/assets/dist/css/dropify.min.css">
    <link rel='stylesheet' href="https://bitrally.top/assets/dist/css/dropify.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
    <form action="https://bitrally.top/kyc-apply" id="kycApply" enctype=="multipart/form-data" method="post" accept-charset="utf-8">
                                                           <input type="hidden" name="csrf_test_name" value="e4c23bbbd0f982ff063cdbd9c19e8e24" />
        <div id="new-form">
            <img src="https://bitrally.top/uploads/bitrally-logo1.png" class="ctr mt-3">
            <h3>KYC Verification</h3>
          <div class="counter"><span></span>/4</div>
            <div class="question in-view question1">
                <div class="col-xs-12">
                                            <p class="title">Welcome to Bitrally. Please verify your account by pressing proceed below. You can skip this page and return back later when you want to complete the form</p>
                                    </div>
            </div>

            <div class="question down question2">
                <div class="col-xs-12">
                    <p class="title">Please select the identification document that you want to upload 
                        <d style="color: black">
                                                    </d>
                    </p>
                </div>
                <div class="col-xs-12 ml-25">
                    <input class="iddoc" id="box1" name="identification_doc" value="ID" type="checkbox"  />
                    <label for="box1">National ID</label>
                    <br>
                    <input class="iddoc" id="box2" name="identification_doc" value="passport" type="checkbox"  />
                    <label for="box2">International Passport</label>
                </div>
                <div class="col-xs-12 error wid">
                    <p>Please select the preferred document type you want to upload</p>
                </div>
            </div>

            <div class="question down question3">
                <div class="col-xs-12">
                    <p class="title">Please upload a file with clear images of the front and back parts of your ID/Passport 
                    <d style="color: black">
                                            </d>
                    </p>
                    <input class="dropify" id="idimg" type="file" name="idimg" data-default-file="">
                </div>
                <div class="col-xs-12 error wimgd">
                    <p>Please upload an image</p>
                </div>
            </div>

            <div class="question down question4">
                <div class="col-xs-12">
                    <p class="title">Please share valid address document for our KYC review process 
                        <d style="color: black">
                                                    </d>
                        </p>
                </div>
                <div class="col-xs-12 ml-25">
                    <input class="addressdoc" id="box3" name="address_doc" value="utility bill" type="checkbox"  />
                    <label for="box3">Utility Bill</label>
                    <br>
                    <input class="addressdoc" id="box4" name="address_doc" value="bank reference" type="checkbox"  />
                    <label for="box4">Bank Reference</label>
                    <br>
                    <input class="addressdoc" id="box5" name="address_doc" value="proof of residence" type="checkbox"  />
                    <label for="box5">Proof of Residence</label>
                    <br>
                    <input class="addressdoc" id="box6" name="address_doc" value="driver or residence permit" type="checkbox"  />
                    <label for="box6">Driver or Residence Permit</label>
                    <br>
                    <input class="addressdoc" id="box7" name="address_doc" value="other" type="checkbox"  />
                    <label for="box7">Other</label>
                </div>
                <div class="col-xs-12 error wad">
                    <p>Please select the preferred document type you want to upload 
                        <d style="color: black">
                                                    </d>
                    </p>
                </div>
            </div>

            <div class="question down question5">
                <div class="col-xs-12">
                    <p class="title">Please upload a file with the front and back parts of your ID
                        <d style="color: black">
                                                    </d>
                    </p>
                    <input class="dropify" id="addressimg" type="file" name="addressimg" data-default-file="">
                </div>
                <div class="col-xs-12 error wiadd">
                    <p>Please upload an image</p>
                </div>
            </div>

            <div class="question down load-space">

                <p>Processing the Form</p>
                <div class="gear">
                    <div class="center"></div>
                    <div class="tooth"></div>
                    <div class="tooth"></div>
                    <div class="tooth"></div>
                    <div class="tooth"></div>
                </div>
                <div class="gear-reverse">
                    <div class="center"></div>
                    <div class="tooth"></div>
                    <div class="tooth"></div>
                    <div class="tooth"></div>
                    <div class="tooth"></div>
                </div>
                <div class="load-bar">
                    <div class="load-juice"></div>
                </div>
                <button type="button" onclick="location.href = 'https://bitrally.top/dashboard';">Proceed to dashboard</button>
            </div>
            <a href="https://bitrally.top/dashboard" class="skip">Skip To Dashboard</a>
            <button type="button" id="back-to-q-1" style="display:none; right: 9em;">Back Page</button>
            <button type="button" id="to-q-2">Next Page</button>

        </div>
    </form>
    <input id="ovstat" class="hide" value="7">
</body>

</html>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script  src="https://bitrally.top/assets/dist/js/verification.js"></script>
<script src="https://bitrally.top/assets/dist/js/dropify.js"></script>
<script src="https://bitrally.top/assets/dist/js/dropify.min.js"></script>
</body>
</html>
