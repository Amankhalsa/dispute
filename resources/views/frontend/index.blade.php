@extends('frontend.home_master')
@section('title')
 Home
@stop
@section('description', 'Dispute Eraser')
@section('keywords', 'Dispute Eraser')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')
@section('content')
<section class="banner page-wrapper" id="home">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="banner-content text-center">
          <h1>Professional Credit Repair Software.</h1>
          <p>We provide cutting edge credit repair business software that saves you time by automating the entire dispute process from start to finish.</p>
          <a href="javascript:void(0);" class="btn bg-color">Get Started</a>
          <a href="javascript:void(0);" class="btn brdr">See how it works <i class="fa fa-angle-double-right ml-2"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="service-card">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 text-center">
        <div class="service-card-inner">
          <img src="{{asset('frontend/assets/images/service-01.png')}}" alt="">
          <h4>Automated Credit Repair</h4>
          <p>Our software walks you through the process of generating dispute letters that you can send to credit bureaus, debt collection agencies, banks, lenders, and other furnishers on behalf of your clients. DisputeBee is incredibly easy to use.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 text-center">
        <div class="service-card-inner">
          <img src="{{asset('frontend/assets/images/service-02.png')}}" alt="">
          <h4>Remove Negative Items</h4>
          <p>The goal of disputing inaccurate items with DisputeBee is to get those items completely removed from your client's credit report. This includes collections, credit inquiries, late payments, bankruptcies, medical debt and more.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 text-center">
        <div class="service-card-inner">
          <img src="{{asset('frontend/assets/images/service-03.png')}}" alt="">
          <h4>Increased Credit Scores</h4>
          <p>Successfully removing erroneous negative items from your client's credit report will increase the resulting credit score and help them qualify for mortgages, loans, and credit at better interest rates - saving thousands of dollars!</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="work-section" id="how-works">
  <div class="container-fluid">
    <h2 class="subhead text-center mb-4">How It Works</h2>
    <div class="row">
      <div class="col-lg-5 ">
        <img src="{{asset('frontend/assets/images/work-01.jpg')}}" class="w-100 img-fluid mb-3">
      </div>
      <div class="col-lg-7 work-section-content">
        <div class="row">
          <div class="col-lg-6">
            <div class="work-section-content-inner">
              <h5>1. Import A Credit Report</h5>
              <p>Before you can begin the credit repair process, you'll need to import a credit report. Our software will walk you through exactly how to get access to your client's credit report, how to import it into DisputeBee, and how to monitor it for changes such as when negative items like collections and inquiries get removed from the report.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="work-section-content-inner">
              <h5>2. Automatically Generate Dispute Letters</h5>
              <p>Once you've imported a credit report, you'll be able to choose which items you'd like to dispute. This could be erroneous collections, accounts, credit inquiries, late payments, and more. DisputeBee will instantly generate letters for you to print out and mail to the credit bureaus. We help you leverage laws like the FCRA which often results in these items being removed from their credit report!</p>
            </div>
          </div>
          <div class="col-lg-6 ">
            <div class="work-section-content-inner">
              <h5>3. Track Your Progress</h5>
              <p>After you mail your first round of letters to the bureaus, you will wait for a response and then upload it into DisputeBee. It often takes multiple rounds of correspondence with the bureaus to see any items get removed or for any information to be corrected. DisputeBee will continue to generate response letters for you until the dispute is resolved. This often ends with the negative item in question being deleted from the client's credit report.</p>
            </div>
          </div>
          <div class="col-lg-6 ">
            <div class="work-section-content-inner">
              <h5>3. Track Your Progress</h5>
              <p>After you mail your first round of letters to the bureaus, you will wait for a response and then upload it into DisputeBee. It often takes multiple rounds of correspondence with the bureaus to see any items get removed or for any information to be corrected. DisputeBee will continue to generate response letters for you until the dispute is resolved. This often ends with the negative item in question being deleted from the client's credit report.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center">
      <a href="javascript:void(0);" class="btn sub-btn" style="margin-left: 65px;">Get Started Now</a>
    </div>
  </div>
</section>
<section class="easy-use-section">
  <div class="container">
    <h2 class="text-center subhead mb-4">Powerful Software. Easy to Use.</h2>
    <p class="text-center txt">...it doesn't matter if you're a beginner or an expert! Anyone can use our credit repair software and instantly transform themselves into a credit repair professional.</p>
    <div class="row">
      <div class="col-lg-3 col-md-6 text-center">
        <div class="easy-use-section-inner">
          <img src="{{asset('frontend/assets/images/graduation-hat.png')}}" alt="">
          <h5>Educational Material</h5>
          <p>In addition to helping you dispute inaccurate credit report entries, you'll get access to educational information about how credit works and how to keep it healthy moving forward.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="easy-use-section-inner">
          <img src="{{asset('frontend/assets/images/mail-check.png')}}" alt="">
          <h5>Know What To Send</h5>
          <p>Not sure how to send your first dispute letter or what to write? Not sure how to respond when the bureau plays hardball? DisputeBee's software walks you through it.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="easy-use-section-inner">
          <img src="{{asset('frontend/assets/images/documents.png')}}" alt="">
          <h5>Dispute Letter Templates</h5>
          <p>We have dozens of letter templates that will turn you into a credit repair professional. Don't pay high fees to untrustworthy companies when you can do it yourself.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="easy-use-section-inner">
          <img src="{{asset('frontend/assets/images/briefcase.png')}}" alt="">
          <h5>Stay Organized</h5>
          <p>Disputing multiple items and keeping track of replies between the 3 bureaus, plus the creditor (for each item) can be messy. Our software dashboard keeps you on track.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pricing-trial" id="trial">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="pricing-trial-inner text-center">
          <h3>14  day trial package</h3>
          <p>Dispute Eraser is a credit repair software platform created in 2021. Our software is used by professional credit repair companies to streamline their operations, and can also be used by consumers for personal use.</p>
          <a href="javascript:void(0);" class="btn sub-btn">Claim Now</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pricing-section" id="pricing">
  <div class="container">
    <h2 class="text-center subhead mb-4">Pricing</h2>
    <p class="text-center txt">Our pricing is simple and straightforward. Cancel at any time.</p>
    <ul class="row justify-content-center">
      <li class="col-lg-3">
        <div class="pricing-section-inner">
          <div class="pricing-section-inner-img">
            <h4 class="text-center">Starter Package</h4>
            <img src="{{asset('frontend/assets/images/pricing-01.jpg')}}" alt="" class="w-100 img-fluid">
          </div>
          <div class="pricing-section-inner-content">
            <h5 class="text-center text-white mb-3 mt-3">$39.99 <span>/mo.</span></h5>
            <ul>
              <li><i class="fa fa-circle mr-2"></i>$39.99/Month</li>
              <li><i class="fa fa-circle mr-2"></i>Access to the letter library</li>
              <li><i class="fa fa-circle mr-2"></i>Fax option</li>
            </ul>
             <a href="javascript:void(0);" class="btn bg-white w-100 mb-2 text-uppercase" style="margin-top:115px">Buy Package</a>
          </div>
        </div>
      </li>
      <li class="col-lg-3">
        <div class="pricing-section-inner">
          <div class="pricing-section-inner-img">
            <h4 class="text-center">Taste Of The Industry</h4>
            <img src="{{asset('frontend/assets/images/pricing-02.jpg')}}" alt="" class="w-100 img-fluid">
          </div>
          <div class="pricing-section-inner-content">
            <h5 class="text-white text-center mb-3 mt-3">$99 <span>/mo.</span></h5>
            <ul>
              <li><i class="fa fa-circle mr-2"></i>$99/Month</li>
              <li><i class="fa fa-circle mr-2"></i>Access library</li>
              <li><i class="fa fa-circle mr-2"></i>Client Portal access</li>
              <li><i class="fa fa-circle mr-2"></i>build your team</li>
              <li><i class="fa fa-circle mr-2"></i>bureu fax option 0.10 per fax</li>
              <li><i class="fa fa-circle mr-2"></i>up to 45 clients</li>
            </ul>
             <a href="javascript:void(0);" class="btn bg-white w-100 mb-2 mt-2 text-uppercase">Buy Package</a>
          </div>
        </div>
      </li>
      <li class="col-lg-3">
        <div class="pricing-section-inner">
          <div class="pricing-section-inner-img">
            <h4 class="text-center">Master in the game</h4>
            <img src="{{asset('frontend/assets/images/pricing-03.jpg')}}" alt="" class="w-100 img-fluid">
          </div>
          <div class="pricing-section-inner-content">
            <h5 class="text-white text-center mb-3 mt-3">$149 <span>/mo.</span></h5>
            <ul>
              <li><i class="fa fa-circle mr-2"></i>$149/Month</li>
              <li><i class="fa fa-circle mr-2"></i>up to 250 clients</li>
              <li><i class="fa fa-circle mr-2"></i>access to library</li>
              <li><i class="fa fa-circle mr-2"></i>client portal access</li>
              <li><i class="fa fa-circle mr-2"></i>bureu fax option 0.10 per fax</li>
              <li><i class="fa fa-circle mr-2"></i>build your team</li>
            </ul>
             <a href="javascript:void(0);" class="btn bg-white w-100 mb-2 mt-2 text-uppercase">Buy Package</a>
          </div>
        </div>
      </li>
      <li class="col-lg-3">
        <div class="pricing-section-inner">
          <div class="pricing-section-inner-img">
            <h4 class="text-center">Money maker</h4>
            <img src="{{asset('frontend/assets/images/pricing-04.jpg')}}" alt="" class="w-100 img-fluid">
          </div>
          <div class="pricing-section-inner-content">
            <h5 class="text-center text-white mb-3 mt-3">$199 <span>/mo.</span></h5>
            <ul>
              <li><i class="fa fa-circle mr-2"></i>$199/Month</li>
              <li><i class="fa fa-circle mr-2"></i>up to 500 clients</li>
              <li><i class="fa fa-circle mr-2"></i>access to letter library</li>
              <li><i class="fa fa-circle mr-2"></i>client portal access</li>
              <li><i class="fa fa-circle mr-2"></i>bureu fax option 0.10 per fax</li>
              <li><i class="fa fa-circle mr-2"></i>build your team function</li>
            </ul>
             <a href="javascript:void(0);" class="btn bg-white w-100 mb-2 mt-2 text-uppercase">Buy Package</a>
          </div>
        </div>
      </li>
    </ul>
  </div>
</section>
<section class="get-started">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="text-white">Get Started Now</h2>
        <p class="text-white">Try our powerful credit repair software and start disputing inaccurate negative items like a professional. Sign up for an account and get started today.</p>
        <a href="javascript:void(0)" class="btn sub-btn">Sign up now</a>
      </div>
    </div>
  </div>
</section>
@endsection     