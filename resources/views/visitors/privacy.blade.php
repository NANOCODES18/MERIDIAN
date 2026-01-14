@extends('layouts.spacedcustomlayout')
@section('body')

<!-- =======================
Header END -->
<!-- **************** MAIN CONTENT START **************** -->
<main>
<div class="inner_banner-section bg-black">
<div class="container">
<div class="inner_banner-content-block">
<h3 class="inner_banner-title text-sand">Terms &amp; Conditions</h3>
<ul class="banner__page-navigator">
<li>
<a class="text-scorpion" href="{{ route('index') }}">Home</a>
</li>
<li class="active">
<span class="text-sand">
              Terms &amp; Conditions
          </span>
</li>
</ul>
</div>
</div>
</div>
<div class="py-10 padding-top-140">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8 col-md-12 col-12">
<!-- text center -->
<div class="text-center">
<h1 class="display-3 fw-bold">Terms &amp; Conditions</h1>
<p class="lead px-8">Read our terms below to learn more about your rights and responsibilities as a Copy Vox   user.</p>
</div>
</div>
</div>
</div>
</div>
<div class="pb-10 padding-bottom-140" style="margin-bottom: 50px;">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8 col-md-12 col-12">
<!-- date -->
<div class="py-3 mb-5 border-bottom">
<h3>Effective date: <span class="text-primary">3rd of December, 2021</span></h3>
</div>
<p class="fs-4 mb-4"><h3><strong>Privacy Policy</strong></h3>
<p>At Copy Vox, we are committed to protecting the privacy and security of your personal information. This Privacy Policy outlines how we collect, use, disclose, and protect your information when you use our website and trading platform.</p>
<p>Information We Collect:</p>
<ol>
<li><strong>Personal Information:</strong>
<ul>
<li>When you register an account with Copy Vox, we may collect personal information such as your name, email address, phone number, and residential address.</li>
</ul>
</li>
<li><strong>Financial Information:</strong>
<ul>
<li>In order to facilitate transactions, we may collect financial information such as bank account details, credit/debit card information, and other payment details.</li>
</ul>
</li>
<li><strong>Trading Data:</strong>
<ul>
<li>When you use our trading platform, we collect data related to your trading activities, including transaction history, account balance, and performance metrics.</li>
</ul>
</li>
<li><strong>Device and Usage Information:</strong>
<ul>
<li>We may collect information about your device and how you interact with our website and platform, including IP address, browser type, operating system, and session duration.</li>
</ul>
</li>
</ol>
<p>How We Use Your Information:</p>
<ol>
<li><strong>To Provide Services:</strong>
<ul>
<li>We use your personal information to create and maintain your account, process transactions, and provide customer support.</li>
</ul>
</li>
<li><strong>To Improve Our Services:</strong>
<ul>
<li>We may use your information to analyze trends, monitor the effectiveness of our platform, and develop new features and services.</li>
</ul>
</li>
<li><strong>For Communication:</strong>
<ul>
<li>We may use your contact information to send you important notifications, updates, and marketing materials related to our services. You can opt out of marketing communications at any time.</li>
</ul>
</li>
<li><strong>For Security and Compliance:</strong>
<ul>
<li>We may use your information to verify your identity, detect and prevent fraudulent activities, and comply with legal and regulatory requirements.</li>
</ul>
</li>
</ol>
<p>Information Sharing and Disclosure:</p>
<ol>
<li><strong>Third-Party Service Providers:</strong>
<ul>
<li>We may share your information with trusted third-party service providers who assist us in operating our platform, processing payments, and delivering services.</li>
</ul>
</li>
<li><strong>Legal Compliance:</strong>
<ul>
<li>We may disclose your information when required by law, to respond to legal requests, or to protect our rights, property, or safety.</li>
</ul>
</li>
</ol>
<p>Data Security:</p>
<p>We implement security measures to protect your personal information from unauthorized access, disclosure, alteration, or destruction. However, please note that no method of transmission over the internet or electronic storage is 100% secure, and we cannot guarantee absolute security.</p>
<p>Your Rights and Choices:</p>
<p>You have the right to access, update, or delete your personal information at any time. You can also opt out of receiving marketing communications from us by following the instructions provided in our emails or contacting our support team.</p>
<p>Changes to This Privacy Policy:</p>
<p>We may update this Privacy Policy from time to time to reflect changes in our practices or legal requirements. We will notify you of any material changes by posting the updated policy on our website or through other means.</p>
<p>Contact Us:</p>
<p>If you have any questions, concerns, or requests regarding this Privacy Policy or our privacy practices, please contact us at <a href="mailto:{{ $company_features ? $company_features->companyemail : 'No company email set' }}">{{ $company_features ? $company_features->companyemail : 'No company email set' }}</a>.</p>
<p> </p>
</p>
</div>
</div>
</div>
</div>@endsection('body')