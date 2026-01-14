@extends('layouts.spacedcustomlayout')
@section('body')

<!-- =======================
Header END -->
<!-- **************** MAIN CONTENT START **************** -->
<main>
<section class="bg-dark pattern-overlay-3 position-relative">
<div class="container">
<div class="row">
<div class="col-12">
<!-- Title -->
<h1 class="text-white-stroke display-5">Contact Us</h1>
<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-dark">
<li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
<li class="breadcrumb-item"><a href="#">Trading</a></li>
<li class="breadcrumb-item active">Contact Us</li>
</ol>
</nav>
</div>
</div>
</div>
</section>
<!--==========
  Start of page header ==========-->
<div class="mb-5">
<!--==========
    Start of contact section ==========-->
<section class="padding-top-140">
<div class="container">
<div class="row">
<div class="col-lg-6">
<img alt="" class="img-fluid mb-5 rounded w-100" src="{{ asset('assets/new-web/images/contact.jpg') }}"/>
<div class="row">
<!--===== Start of address =====-->
<div class="col-sm-12">
<h4 class="text-primary">Our Office</h4>
<p>420 Boylston St. Suite 302 Boston, MA 02116</p>
</div>
<div class="col-sm-12">
<h4 class="text-primary">Support</h4>
<p>{{ $company_features ? $company_features->companyemail : 'No company email set' }}</p>
<!-- <p>(606) 427-6001</p> -->
</div>
<div class="col-sm-12">
<h4 class="text-primary">Phone</h4>
<p>{{ $company_features ? $company_features->companyphone : 'No company phone set' }}</p>
</div>
<!--===== End of address =====-->
</div>
</div>
<div class="col-lg-5 mt-lg-0 mt-4">
<div class="ps-lg-4">
<div class="mb-5">
<span class="text-primary">Contact us</span>
<h2 class="text-dark">Get in touch</h2>
<p>
                Copy Vox has extensive in-country presence across Europe as well as in the United States and China. This means that we are not only able to identify the best investment opportunities but able to accelerate the development of portfolio companies in, or targeting these markets.
              </p>
</div>
<!--===== Start of form =====-->
<form class="needs-validatio" method="POST" novalidate="">
<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<input aria-label="First Name" class="form-control" name="firstname" placeholder="First Name" required="" type="text"/>
<div class="invalid-feedback">Please Enter First Name.</div>
</div>
</div>
<div class="col-sm-6">
<div class="mb-3">
<input aria-label="Last Name" class="form-control" name="lastname" placeholder="Last Name" required="" type="text"/>
<div class="invalid-feedback">Please Enter Last Name.</div>
</div>
</div>
<div class="col-sm-6">
<div class="mb-3">
<input aria-label="Email" class="form-control" name="email" placeholder="info@gmail.com" required="" type="email"/>
<div class="invalid-feedback">Please Enter Valid Email.</div>
</div>
</div>
<div class="col-sm-6">
<div class="mb-3">
<input aria-label="Contact Number" class="form-control" name="phone" placeholder="+48 (53 690 44 32)" type="text"/>
</div>
</div>
<div class="col-12">
<div class="mb-3">
<input aria-label="Subject" class="form-control" name="subject" placeholder="Subject" type="text"/>
</div>
</div>
<div class="col-12">
<div class="mb-3">
<textarea class="form-control" id="exampleFormControlTextarea1" name="message" placeholder="Your message" rows="3"></textarea>
</div>
</div>
<div class="col-12">
<div class="mb-3">
<div class="form-check">
<input class="form-check-input" id="flexCheckDefault" name="confirm" required="" type="checkbox" value=""/>
<label class="form-check-label" for="flexCheckDefault">
                        I accept the terms &amp; conditions and I understand that my data will be held securely in accordance with the privacy policy.
                      </label>
<div class="invalid-feedback">Please check Term and Condition.</div>
</div>
</div>
</div>
<div class="col-12 padding-bottom-140">
<button class="btn btn-primary hvr-fill-black" type="submit">Send Message</button>
</div>
</div>
</form>
<!--===== End of form =====-->
</div>
</div>
</div>
</div>
</section>
<!--==========
    End of contact section ==========-->
<!--==========
    Start of google map section ==========-->
<section class="">
<div class="container-fluid p-0">
<div class="google-map">
<iframe allowfullscreen="" height="560" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7811.652619054254!2d19.933590249348544!3d50.05419609548353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sng!4v1695073121042!5m2!1sen!2sng" style="border:0; width: 100%;"></iframe>
</div>
<!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">how to embed google maps</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div> -->
</div>
</section>
<!--==========
    End of google map section ==========-->
</div>
@endsection('body')