@extends('frontend.layouts.main')
@section('main-container')
    <div class="hero-slide owl-carousel site-blocks-cover">
        <div class="intro-section" style="background-image: url('{{ url('frontend/images/img16.jpeg') }}');;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
                        <h1>Welcome To The Dhruvi Creation</h1>
                        <p>I am Rahul Valchetwar, the founder of Dhruv Creation and Waterproof, with over 12 years of 
                            expertise in waterproof structure rehabilitation and construction-related services.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro-section" style="background-image: url('{{ url('frontend/images/img19.jpeg') }}');;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
                        <h1>You Can Checkout Our Services </h1>
                        <p>Checkout Dhruvi's Creation Services.</p>
                        <p><a href="{{ url('/services') }}" class="btn btn-primary py-3 px-5">Our Services</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-section" style="background-image: url('{{ url('frontend/images/img29.jpeg') }}');;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
                        <h1>You Can Contact Us</h1>
                        <p>Contact Dhruvi Creation for Further Inquiry.</p>
                        <p><a href="{{ url('/contact') }}" class="btn btn-primary py-3 px-5">Contact Us</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END slider -->

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ url('frontend/images/img27.jpeg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <span class="text-serif text-primary">About Us</span>
                    <h3 class="heading-92913 text-black">Welcome To Our Website</h3>
                    <p>I am Rahul Valchetwar, the founder of Dhruv Creation and Waterproof, with over 12 years of 
                        expertise in waterproof structure rehabilitation and construction-related services.</p>
                        <p> My journey in the 
                        construction industry has been both dynamic and enriching.
                        </p>
                    <p><a href="{{ url('/about') }}" class="btn btn-primary py-3 px-4">Learn More</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('{{ url('frontend/images/tr4.jpeg') }}');">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="counter-39392">
                        <h3>349</h3>
                        <span>Number of Yacht</span>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-39392">
                        <h3>7000+</h3>
                        <span>Customers Satisfied</span>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-39392">
                        <h3>120</h3>
                        <span>Number of Staffs</span>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-39392">
                        <h3>493</h3>
                        <span>Sea Destinations</span>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-39392">
                        <h3>230</h3>
                        <span>Professional Sailors</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SERVISES -->
    <div class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <span class="text-serif text-primary services-page">Services</span>
                    <h3 class="heading-92913 text-black text-center">Our Services</h3>
                </div>
            </div>
            <div class="row  ">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-39381 h-100">
                        <a href="{{ url('/basement')}}">
                            <img src="{{ url('frontend/images/img11.jpeg') }}" alt="Image" class="img-fluid">
                            <div class="card-content p-4">
                                <h3>Waterproofing for Basements and
                                    Tunnels.</h3>
                               </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-39381 h-100">
                        <a href="{{ url('/toilet') }}">
                            <img src="{{ url('frontend/images/img14.jpeg') }}" alt="Image" class="img-fluid">
                            <div class="card-content p-4">
                                <h3>Toilet & Terrace Waterproofing Services.</h3>
                                </div>
                        </a>
                    </div>
                </div>
        
            <div class="col-md-6 col-lg-4 mb-4 ">
                <div class="service-39381 h-100">
                    <a href="{{ url('/roof')}}" >
                    <img src="{{ url('frontend/images/img3.jpeg') }}" alt="Image" class="img-fluid">
                    <div class="card-content p-4">
                        <h3>Roof Insulation Works & Terrace
                                Gardens Services.</h3>
                       </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-39381 h-100">
                    <a href="{{ url('/structure') }}">
                    <img src="{{ url('frontend/images/img4.jpeg') }}" alt="Image" class="img-fluid">
                    <div class="card-content p-4">
                        <h3>Structural Rehabilitation Work
                                Services.</h3>
                       </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-39381 h-100">
                    <a href="{{ url('/swimming') }}">
                    <img src="{{ url('frontend/images/img10.jpeg') }}" alt="Image" class="img-fluid">
                    <div class="card-content p-4">
                        <h3>Swimming Tanks and
                                Humidification Tanks Services.</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-39381 h-100">
                    <a href="{{ url('/industrial') }}">
                    <img src="{{ url('frontend/images/img9.jpeg') }}" alt="Image" class="img-fluid">
                    <div class="card-content p-4">
                        <h3>Industrial RCC Containers
                                Services.</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-39381 h-100">
                    <a href="{{ url('/construction')}}">
                    <img src="{{ url('frontend/images/img8.jpeg') }}" alt="Image" class="img-fluid">
                    <div class="card-content p-4">
                        <h3>Other Special Treatment for
                                Construction Joints Services.</h3>
                       </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-39381 h-100">
                    <a href="{{ url('/sealant') }}">
                    <img src="{{ url('frontend/images/img23.jpeg') }}" alt="Image" class="img-fluid">
                    <div class="card-content p-4">
                        <h3>Expansion Joint & Sealant Work,
                                etc. Services.</h3>
                    </div>
                </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-39381 h-100">
                    <a href="{{ url('/epoxy') }}">
                    <img src="{{ url('frontend/images/img19.jpeg') }}" alt="Image" class="img-fluid">
                    <div class="card-content p-4">
                        <h3>Epoxy Grouting Work
                                Services.</h3>
                    </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
    </div>

    <div class="site-section bg-image overlay " style="background-image: url('{{ url('frontend/images/tr3.jpeg') }}');">
        <div class="container text-center form-content">
                                       <span class="text-serif text-light fs-4">Inquiry Form</span>
                            <u style="color: black"><h3 class="heading-92913 text-dark">Call us for 100% free quote and free Inspection Services.</h3></u>
                      
            <form class="cf">   
                <input type="text" id="input-name" placeholder="Full Name">
                <div class="half left cf">
                  <input type="email" id="input-number" placeholder="Mobile Number">
                  <input type="text" id="input-subject" placeholder="Preferred Call Back Time">
                </div>
                <div class="half right cf mt-3">
                  <textarea name="message" type="text" id="input-message" placeholder="Addtional Information (If Any)"></textarea>
                </div>  
                
                {{-- <span><input type="submit" value="Send Message" id="input-submit"><i class="fa-brands fa-whatsapp"></i></span> --}}
                <button class="btn btn-dark w-100" onclick="sendWhatsapp()"><span><i class="fa-brands fa-whatsapp"></i></span> Send Message To Whatsapp</button>
                <p class="mt-4 fs-6 fw-bold">By submitting this form, you agree to our [<a href="" class="text-light"> Privacy Policy </a>]</p>
            </form>
            {{-- </div> --}}
        </div>
    </div>
    <script>
        function sendWhatsapp(){
            var phoneNumber = "+919370429705";

            var name = document.getElementById('input-name').value;
            var number = document.getElementById('input-number').value;
            var call_back = document.getElementById('input-subject').value;
            var message = document.getElementById('input-message').value;

            var url = "https://wa.me/" + phoneNumber + "?text="
            +"*Name :* " +name+"%0a"
            +"*Number :* " +number+"%0a"
            +"*Call_Back_Time :* " +call_back+"%0a"
            +"*Message :* " +message+"%0a%0a";
            window.open(url, '_blank').focus();
        }
    </script>
</div>
@endsection
