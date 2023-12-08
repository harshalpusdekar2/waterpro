@extends('frontend.layouts.main')

@section('main-container')
    <div class="hero-slide owl-carousel site-blocks-cover">
        <div class="intro-section" style="background-image: url('{{ url('frontend/images/img16.jpeg') }}');;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
                        <h1>Welcome To The Dhruvi Creation</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, in distinctio nostrum laborum
                            sed quisquam voluptate facilis non.</p>
                        {{-- <p><a href="#" class=" py-3 px-5">read more</a></p> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="intro-section" style="background-image: url('{{ url('frontend/images/img19.jpeg') }}');;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
                        <h1>You Can Checkout Our Services </h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, in distinctio nostrum laborum
                            sed quisquam voluptate facilis non.</p>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, in distinctio nostrum laborum
                            sed quisquam voluptate facilis non.</p>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, illum, quasi. Odit velit deserunt
                        eligendi unde, enim. Enim fugiat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium eius ullam impedit architecto
                        debitis facilis!</p>
                    <p><a href="{{ url('/about') }}" class="btn btn-primary py-3 px-4">Learn More</a></p>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="service-29283">
              <span class="wrap-icon-39293">
                <span class="flaticon-yacht"></span>
              </span>
              <h3>Luxuries Yacht</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ipsa, ad ratione quos distinctio unde.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="service-29283">
              <span class="wrap-icon-39293">
                <span class="flaticon-shield"></span>
              </span>
              <h3>30 Years of Experience</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ipsa, ad ratione quos distinctio unde.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="service-29283">
              <span class="wrap-icon-39293">
                <span class="flaticon-captain"></span>
              </span>
              <h3>Good Captain</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ipsa, ad ratione quos distinctio unde.</p>
            </div>
          </div>
        </div>
      </div>
    </div> --}}

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
                    <span class="text-serif text-primary">Services</span>
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
                                {{-- <div class="">
                                <div class="mr-auto">
                                    <p> Welcome to Dhruvi Creation and Waterproofing, your trusted partner in comprehensive
                                        waterproofing solutions. Our specialized services extend to safeguarding...
                                        <a href="{{ url('/services') }}#basement-tunnel" class="">read more</a>
                                    </p>
                                </div>
                            </div> --}}
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
                                {{-- <div class="">
                                <div class="mr-auto">
                                    <p> Welcome to Dhruvi Creation and Waterproofing, your trusted partner in comprehensive
                                        waterproofing solutions. Our specialized services extend to safeguarding...
                                        <a href="{{ url('/services') }}#basement-tunnel" class="">read more</a>
                                    </p>
                                </div>
                            </div> --}}
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
                        {{-- <div class="">
                                <div class="mr-auto">
                                    <p>Welcome to Dhruvi Creation and Waterproofing, your partner in innovative solutions
                                        for roof insulation works and...
                                        <a href="{{ url('/services') }}#roof-insulation" class="">read more</a>
                                    </p>
                                </div>
                            </div> --}}
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
                        {{-- <div class="">
                                <div class="mr-auto">

                                    <p>Discover reliable and effective solutions for structural rehabilitation with Dhruvi
                                        Creation and waterproofing. Our expertise in structural restoration...
                                        <a href="{{ url('/services') }}#structural-rehabilitation" class="">read
                                            more</a>
                                    </p>
                                </div>
                                
                            </div> --}}
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
                        {{-- <div class="">
                                <div class="mr-auto">

                                    <p> Welcome to Dhruvi Creation and Waterproofing, your trusted partner in providing
                                        specialized
                                        solutions for swimming tanks and...
                                        <a href="{{ url('/services') }}#swimming-tanks" class="">read
                                            more</a>
                                    </p>
                                </div>
                            </div> --}}
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
                        {{-- <div class="">
                                <div class="mr-auto">

                                    <p> Explore cutting-edge solutions for industrial needs with Dhruvin Creation and
                                        Waterproofing.Our expertise in Industrial RCC Containers ensures the...
                                        <a href="{{ url('/services') }}#industrial-RCC" class="">read
                                            more</a>
                                    </p>
                                </div>
                            </div> --}}
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
                        {{-- <div class="">
                                <div class="mr-auto">

                                    <p>Discover specialized solutions for construction joints with Dhruvi Creation and
                                        Waterproofing. Our
                                        commitment to excellence extends to providing unique ...
                                        <a href="{{ url('/services') }}#other-special" class=" ">read more</a>
                                    </p>
                                </div>
                            </div> --}}
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
                        {{-- <div class="">
                                <div class="mr-auto">

                                    <p>Welcome to Dhruvi Creation and Waterproofing, your trusted partner for specialized
                                        solutions in
                                        expansion joint and sealant work, among other services...
                                        <a href="{{ url('/services') }}#expansion-joint" class=" ">read
                                            more</a>

                                    </p>
                                </div>
                            </div> --}}
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
                        {{-- <div class="">
                                <div class="mr-auto">

                                    <p> Discover the strength and precision of Epoxy Grouting Work with Dhruvi Creation and
                                        Waterproofing. Our specialized services are designed to provide durable solutions
                                        for various applications,...
                                        <a href="{{ url('/services') }}#epoxy-grouting" class=" ">read
                                            more</a>
                                    </p>
                                </div>
                            </div> --}}
                    </div>
                    </a>
                </div>
            </div>
            <div class="site-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <p><img src="{{ url('frontend/images/tr2.jpeg') }}" alt="Image" class="img-fluid">
                            </p>
                        </div>
                        <div class="col-md-5">
                            <span class="text-serif text-primary">Book Now</span>
                            <h3 class="heading-92913 text-black">Book A Yacht</h3>
                            <form action="#" class="row">
                                <div class="form-group col-md-6">
                                    <label for="input-1">Full Name:</label>
                                    <input type="text" class="form-control" id="input-1">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="input-2">Number of People:</label>
                                    <input type="text" class="form-control" id="input-2">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="input-3">Date From:</label>
                                    <input type="text" class="form-control datepicker" id="input-3">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="input-4">Date To:</label>
                                    <input type="text" class="form-control datepicker" id="input-4">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="input-5">Yacht You're Interested in:</label>
                                    <select name="" id="input-5" class="form-control">
                                        <option value="">Motor Yacht</option>
                                        <option value="">Hi-Speed Yacht</option>
                                        <option value="">Premium Yacht</option>
                                        <option value="">Presidential Yacht</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="input-6">Email Address</label>
                                    <input type="text" class="form-control" id="input-6">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="input-7">Phone Number</label>
                                    <input type="text" class="form-control" id="input-7">
                                </div>



                                <div class="form-group col-md-12">
                                    <label for="input-8">Notes</label>
                                    <textarea name="" id="input-8" cols="30" rows="5" class="form-control"></textarea>
                                </div>

                                <div class="form-group col-md-12">
                                    <input type="submit" class=" py-3 px-5" value="Book Now">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('{{ url('frontend/images/tr3.jpeg') }}');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="text-white">Get In Touch With Us</h2>
                    <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p class="mb-0"><a href="{{ url('/contact') }}"
                            class="btn btn-warning py-3 px-5 text-white">Contact Us</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
