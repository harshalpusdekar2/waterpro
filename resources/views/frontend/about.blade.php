@extends('frontend.layouts.main')    

@section('main-container')

   <div class="intro-section" style="background-image: url('{{url('frontend/images/aboutt.jpg')}}');"> 
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
              <h1>Welcome</h1>
              <p class="fs-3">Dhruvi Creation and Waterproofing</p>
              {{-- <p>Welcome to Dhruv Creation and Waterproof!</p> --}}
              {{-- <p><a href="{{url('/contact')}}" class="btn btn-primary py-3 px-5">Contact</a></p> --}}
            </div>
          </div>
        </div> 
      </div>

    

     <div class="site-section about-us-content">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5">
            <span class="text-serif text-primary">About Us</span>
            <h1 class="heading-92913 text-black">Dhruvi Creation</h1>
            <p class="">I am Rahul Valchetwar, the founder of Dhruv Creation and Waterproof, with over 12 years of 
              expertise in waterproof structure rehabilitation and construction-related services. My journey in the 
              construction industry has been both dynamic and enriching.</p>
            </div>
            <div class="col-md-8 mb-5">
              <img src="{{url('frontend/images/img127.jpeg')}}" alt="">
            </div>
               <hr class="border border-primary border-1 opacity-50">
          </div>
          <div class="row">
            <div class="col-md-6 my-3">
              <p >For the initial nine years of my career, I served as an engineering engineer at Apple'cemmi Indian Pvt. 
                Ltd., a period during which I gained valuable insights and honed my skills. Drawing from this 
                extensive experience, I embarked on my entrepreneurial journey, establishing Dhruv Creation and 
                Waterproof four years ago.</p>
            </div>
            <div class="col-md-6 my-3">
              <p >Over the years, I have had the privilege of working with renowned names in both the government 
                and private sectors. Some of our esteemed clients include Moglix, MAP, Rachana Construction, JNU, 
                AR DC, Oberoi Hotel, and many more. These collaborations have not only enriched my professional 
                journey but have also contributed to the success and growth of Dhruv Creation and Waterproof.</p>
            </div>
          </div>
          <p><a href="{{url('/contact')}}" class="btn btn-warning py-3 my-3 px-5">Contact Us</a></p>
          {{-- <hr class="border border-primary border-1 mt-3 opacity-50"> --}}
          <div class="row">
            <div class="col-md-4 mb-3">
              <img src="{{url('frontend/images/img17.jpeg')}}" alt="">
            </div>
            <div class="col-md-4 mb-3">
              <img src="{{url('frontend/images/img24.jpeg')}}" alt="">
            </div>
            <div class="col-md-4 mb-3">
            <img src="{{url('frontend/images/img33.jpeg')}}" alt="">
            </div>
          </div>
          <hr class="border border-primary border-1 mb-5 opacity-50">
          <div class="row">
            <div class="col-md-6">
              <p >Our services extend beyond geographical boundaries, covering projects across Maharashtra and 
              various regions outside the state. We take pride in delivering high-quality waterproofing solutions   
              and structure rehabilitation services that meet the diverse needs of our clients.</p>
            </div>
            <div class="col-md-6">
              <p > At Dhruv Creation and Waterproof, we are committed to excellence, innovation, and customer 
              satisfaction. Our dedicated team strives to ensure that every project is executed with precision and 
              professionalism.</p>
            </div>
            <div class="col-md-12 my-3">
              <img src="{{url('frontend/images/img129.jpeg')}}" alt="">
            </div>
            
          </div>
          <hr class="border border-primary border-1 my-3 opacity-50">

          <p>Thank you for considering Dhruvi Creation and Waterproofing for your construction and waterproofing 
            needs. We look forward to the opportunity to serve you with our expertise and commitment to 
            quality.</p>
          <p>- Rahul Valchetwar</p>
          <p> - Founder,</p> 
        <p> - Dhruvi Creation and Waterproofing</p>  
      </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('{{url('frontend/images/tr4.jpeg')}}');">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="text-white">Get In Touch With Us</h2>
            <p class="lead text-white">Contact us to get more details about Dhruvi Creations!!</p>
            <p class="mb-0"><a href="{{url('/contact')}}" class="btn btn-warning py-3 px-5 fw-bold text-white">Contact Us</a></p>
          </div>
        </div>
      </div>
    </div>

@endsection
 