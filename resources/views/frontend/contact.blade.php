@extends('frontend.layouts.main')    

@section('main-container')

    {{-- <div class="intro-section site-blocks-cover innerpage" style="background-image: url('{{url('frontend/images/tr5.jpeg')}}');"> --}}
      {{-- <div class="container">
        <div class="row align-items-center text-center border">
          <div class="col-lg-12 mt-5" data-aos="fade-up">
            <h1>Get In Touch</h1>
            <p class="text-white text-center">
              <a href="index.html">Home</a>
              <span class="mx-2">/</span>
              <span>Contact Us</span>
            </p>
          </div>
        </div>
      </div> --}}
    {{-- </div> --}}

    
    <div class="site-section p-0">
      
      <div class="section-bg style-1 contact-us-page" style="background-image: url('{{url('frontend/images/tr1.jpeg')}}');">
        
        <div class="container">
          
          <div class="row">
            
            <h1 class="col-md-12 text-center text-light my-5">Get-In-Touch</h1>
            <div class="col-md-6 form-group">
                <label for="fname">Your Name / Company Name</label>
                  <input type="text" id="fname" class="form-control form-control-lg">
              </div>
              <div class="col-md-6 form-group">
                  <label for="location">Location</label>
                  <input type="text" id="location" class="form-control form-control-lg">
              </div>
          </div>
          <div class="row">
              <div class="col-md-6 form-group">
                  <label for="eaddress">Email Address</label>
                  <input type="text" id="e-address" class="form-control form-control-lg">
              </div>
              <div class="col-md-6 form-group">
                  <label for="contact">Contact Number</label>
                  <input type="text" id="contact" class="form-control form-control-lg">
              </div>
          </div>
          <div class="row">
            <div class="col-md-6 form-group">
              <label for="requirement">Your Requirement</label>
              {{-- <input type="text" id="tel" class="form-control form-control-lg"> --}}
              <textarea name="" id="require" cols="30" rows="5" class="form-control"></textarea>
            </div>
              <div class="col-md-6 form-group">
                  <label for="request">Your Request</label>
                  <textarea name="" id="request" cols="30" rows="5" class="form-control"></textarea>
              </div>
          </div>
  
          <div class="row">
              <div class="col-12 text-center mt-5">
                  {{-- <input type="submit" value="Send Message" class="btn btn-primary rounded-0 fw-bold"> --}}
                  <button class="btn btn-primary py-3 fw-bold w-50" onclick="whatsappMsg()"><span><i class="fa-brands fa-whatsapp"></i></span> Send Message On Whatsapp</button>
              </div>
          </div>
      </div>
      </div>
    
    </div>
 
    <script>
      function whatsappMsg(){
          var phoneNumber = "+917030467187";

          var name = document.getElementById('fname').value;
          var location = document.getElementById('location').value;
          var email = document.getElementById('e-address').value;
          var number = document.getElementById('contact').value;
          var requirement = document.getElementById('require').value;
          var request = document.getElementById('request').value;

          var url = "https://wa.me/" + phoneNumber + "?text="
          +"*Name :* " +name+"%0a"
          +"*Location :* " +location+"%0a"
          +"*Email-Address :* " +email+"%0a"
          +"*Contact-Number :* " +number+"%0a"
          +"*Client's Requirement :* " +requirement+"%0a"
          +"*Client's Request :* " +request+"%0a%0a";
          window.open(url, '_blank').focus();
      }
  </script>


      @endsection