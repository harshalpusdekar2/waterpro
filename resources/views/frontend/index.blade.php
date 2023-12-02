@extends('frontend.layouts.main')    

@section('main-container')


    <div class="hero-slide owl-carousel site-blocks-cover">
      <div class="intro-section" style="background-image: url('{{url('frontend/images/terrace.jpeg')}}');;"> 
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
              <h1>Explore, The Dhruvi Creation</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, in distinctio nostrum laborum sed quisquam voluptate facilis non.</p>
              {{-- <p><a href="#" class="btn btn-primary py-3 px-5">Read More</a></p> --}}
            </div>
          </div>
        </div>
      </div>

      <div class="intro-section" style="background-image: url('{{url('frontend/images/terrace1.jpeg')}}');;">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
              <h1>You Can Checkout Our Services </h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, in distinctio nostrum laborum sed quisquam voluptate facilis non.</p>
              <p><a href="{{url('/services')}}" class="btn btn-primary py-3 px-5">Our Services</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="intro-section" style="background-image: url('{{url('frontend/images/site.jpeg')}}');;">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
              <h1>You Can Contact Us</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, in distinctio nostrum laborum sed quisquam voluptate facilis non.</p>
              <p><a href="{{url('/contact')}}" class="btn btn-primary py-3 px-5">Contact Us</a></p>
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
            <img src="{{url('frontend/images/tr1.jpeg')}}" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <span class="text-serif text-primary">About Us</span>
            <h3 class="heading-92913 text-black">Welcome To Our Website</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, illum, quasi. Odit velit deserunt eligendi unde, enim. Enim fugiat.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium eius ullam impedit architecto debitis facilis!</p>
            <p><a href="{{url('/about')}}" class="btn btn-primary py-3 px-4">Learn More</a></p>
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

    <div class="site-section bg-image overlay" style="background-image: url('{{url('frontend/images/tr4.jpeg')}}');">
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
              <img src="{{url('frontend/images/floor3.jpeg')}}" alt="Image"  class="img-fluid">
              <div class="p-4">
                <h3><a href="#"><span class=" mr-1 text-primary"></span> Waterproofing for Basements and Tunnels.</a></h3>
                <div class="">
                  <div class="mr-auto">
                 
                  
            <P> Welcome to Dhruvi Creation and Waterproofing, your trusted partner in comprehensive 
             waterproofing solutions. Our specialized services extend to safeguarding the structural integrity of basements 
             and tunnels, ensuring lasting protection against water ingress and potential damage</p>
                  </div>
                  <div class=" text-right ">
                  <a href="{{url('/services')}}#basement-tunnel" class="btn btn-primary ">Read More</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381 h-100">
            
              <img src="{{url('frontend/images/toilet.jpeg')}}" alt="Image"   class="img-fluid ">
              <div class="p-4">
                <h3><a href="#"><span class=" mr-1 text-primary"></span> Toilet & Terrace Waterproofing Services.</a></h3>
                <div class="">
                  <div class="mr-auto">
                    
                    <p>Welcome to Dhruvi Creation and Waterproofing, where we redefine waterproofing solutions for 
                       your toilets and terraces. Our specialized services ensure not only the protection of these critical spaces but 
                      also add value to your property through durable and effective waterproofing.</p>
                  </div>
                  <div class="text-right">
                    <a href="{{url('/services')}}#toilet-terrace" class="btn btn-primary ">Read More</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 " >
            <div class="service-39381 h-100">
              <img src="{{url('frontend/images/root.jpeg')}}" alt="Image"  class="img-fluid">
              <div class="p-4">
                <h3><a href="#"><span class=" mr-1 text-primary"></span> Roof Insulation Works & Terrace Gardens Services.</a></h3>
                <div class="">
                  <div class="mr-auto">
                   
                    <p>Welcome to Dhruvi Creation and Waterproofing, your partner in innovative solutions for roof 
                     insulation works and terrace gardens. Elevate your living spaces with our expert services that combine energy 
                     efficiency with the beauty of lush terrace gardens.</p>
                  </div>
                  <div class="text-right ">
                    <a href="{{url('/services')}}#roof-insulation" class="btn btn-primary ">Read More</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381 h-100">
              <img src="{{url('frontend/images/site.jpeg')}}" alt="Image"   class="img-fluid">
              <div class="p-4">
                <h3><a href="#"><span class=" mr-1 text-primary"></span> Structural Rehabilitation Work Services. </a></h3>
                <div class="">
                  <div class="mr-auto">
                   
                    <p>Discover reliable and effective solutions for structural rehabilitation with Dhruvi Creation and 
Waterproofing. Our expertise in structural restoration ensures the longevity and stability of buildings, bridges, 
and other structures. Trust us to revitalize and strengthen your property with our specialized rehabilitation 
services.</p>
                  </div>
                  <div class="text-right">
                    <a href="{{url('/services')}}#structural-rehabilitation" class="btn btn-primary ">Read More</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381 h-100">
              <img src="{{url('frontend/images/floor1.jpeg')}}" alt="Image"  class="img-fluid">
              <div class="p-4">
                <h3><a href="#"><span class=" mr-1 text-primary"></span> Swimming Tanks and Humidification Tanks Services.</a></h3>
                <div class="">
                  <div class="mr-auto">
                    
                    <p> Welcome to Dhruvi Creation and Waterproofing, your trusted partner in providing specialized 
solutions for swimming tanks and humidification tanks. Our expertise extends beyond standard waterproofing, 
ensuring the durability, safety, and efficiency of these critical structures. Dive into excellence with our tailored 
services.</p>
                  </div>
                  <div class="text-right">
                    
                    <a href="{{url('/services')}}#swimming-tanks" class="btn btn-primary ">Read More</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381 h-100">
              <img src="{{url('frontend/images/floor3.jpeg')}}" alt="Image" class="img-fluid">
              <div class="p-4">
                <h3><a href="#"><span class=" mr-1 text-primary"></span> Industrial RCC Containers Services.</a></h3>
                <div class="">
                  <div class="mr-auto">
                    
                    <p> Explore cutting-edge solutions for industrial needs with Dhruvin Creation and Waterproofing. 
Our expertise in Industrial RCC Containers ensures the strength, durability, and reliability required for diverse 
industrial applications. Trust us to deliver excellence in the creation and maintenance of robust containers that 
meet your specific requirements.</p>
</div>
                  <div class="text-right">
                    <a href="{{url('/services')}}#industrial-RCC" class="btn btn-primary ">Read More</a>
                </div>
              </div>
            </div>
          </div>
</div>
    <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381 h-100">
            <img src="{{url('frontend/images/road.jpeg')}}" alt="Image"  class="img-fluid">
              <div class="p-4">
                <h3><a href="#"><span class=" mr-1 text-primary"></span> Other Special Treatment for Construction Joints Services.</a></h3>
                <div class="">
                  <div class="mr-auto">
                    
                    <p>Discover specialized solutions for construction joints with Dhruvi Creation and Waterproofing. Our 
commitment to excellence extends to providing unique treatments for construction joints, ensuring the 
longevity, integrity, and resilience of your structures. Explore our services tailored to meet the specific 
challenges posed by construction joints.</p>
                  </div>
                  <div class="text-right">
                    <a href="{{url('/services')}}#other-special" class="btn btn-primary ">Read More</a>
                    
                  </div>
              </div>
             </div>  
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381 h-100">
              <img src="{{url('frontend/images/floor.jpeg')}}" alt="Image"  class="img-fluid">
              <div class="p-4">
                <h3><a href="#"><span class=" mr-1 text-primary"></span> Expansion Joint & Sealant Work, etc. Services.</a></h3>
                <div class="">
                  <div class="mr-auto">
                    
                    <p>Welcome to Dhruvi Creation and Waterproofing, your trusted partner for specialized solutions in 
expansion joint and sealant work, among other services. Our commitment to excellence ensures the integrity 
and longevity of structures through precise treatments and high-quality materials. Explore our comprehensive 
range of services tailored to meet your specific needs.</p>
                  </div>
                  <div class="text-right">
                    <a href="{{url('/services')}}#expansion-joint" class="btn btn-primary ">Read More</a>
                    
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381 h-100">
            <img src="{{url('frontend/images/site.jpeg')}}" alt="Image"  class="img-fluid">
              <div class="p-4">
                <h3><a href="#"><span class=" mr-1 text-primary"></span> Epoxy Grouting Work Services.</a></h3>
                <div class="">
                  <div class="mr-auto">
                    
                    <p> Discover the strength and precision of Epoxy Grouting Work with Dhruvi Creation and 
Waterproofing. Our specialized services are designed to provide durable solutions for various applications, 
ensuring stability, longevity, and aesthetic appeal. Explore the excellence of epoxy grouting with our expert 
team.</p>
                  </div>
                  <div class="text-right ">
                    <a href="{{url('/services')}}#epoxy-grouting" class="btn btn-primary ">Read More</a>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <p><img src="{{url('frontend/images/tr2.jpeg')}}" alt="Image" class="img-fluid"></p>
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
                <input type="submit" class="btn btn-primary py-3 px-5" value="Book Now">
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
    

    {{-- <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <span class="text-serif text-primary">Team</span>
            <h3 class="heading-92913 text-black text-center">Our Team</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-lg-0">
            <div class="person">
              <figure>
                <img src="{{url('frontend/images/person_1.jpg')}}" alt="Image" class="img-fluid">
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-linkedin"></span></a>
                </div>
              </figure>
              <div class="person-contents">
                <h3>Craig Daniel</h3>
                <span class="position">Engineer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-lg-0">
            <div class="person">
              <figure>
                <img src="{{url('frontend/images/person_2.jpg')}}" alt="Image" class="img-fluid">
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-linkedin"></span></a>
                </div>
              </figure>
              <div class="person-contents">
                <h3>Craig Daniel</h3>
                <span class="position">Engineer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-lg-0">
            <div class="person">
              <figure>
                <img src="{{url('frontend/images/person_3.jpg')}}" alt="Image" class="img-fluid">
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-linkedin"></span></a>
                </div>
              </figure>
              <div class="person-contents">
                <h3>Craig Daniel</h3>
                <span class="position">Engineer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-lg-0">
            <div class="person">
              <figure>
                <img src="{{url('frontend/images/person_4.jpg')}}" alt="Image" class="img-fluid">
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-linkedin"></span></a>
                </div>
              </figure>
              <div class="person-contents">
                <h3>Craig Daniel</h3>
                <span class="position">Engineer</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div> --}}

    {{-- <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <span class="text-serif text-primary">Testimonial</span>
            <h3 class="heading-92913 text-black text-center">What Customer Saying...</h3>
          </div>
        </div>
        <div class="row">
          <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
            <div class="testimony-39291">
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem laborum cumque commodi, unde doloribus.</p>
              </blockquote>
              <div class="d-flex vcard align-items-center">
                <div class="pic mr-3">
                  <img src="{{url('frontend/images/person_3_sq.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="text">
                  <strong class="d-block">John Doe</strong>
                  <span>CEO and Co-Founder</span>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
            <div class="testimony-39291">
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem laborum cumque commodi, unde doloribus.</p>
              </blockquote>
              <div class="d-flex vcard align-items-center">
                <div class="pic mr-3">
                  <img src="{{url('frontend/images/person_4_sq.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="text">
                  <strong class="d-block">John Doe</strong>
                  <span>CEO and Co-Founder</span>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
            <div class="testimony-39291">
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem laborum cumque commodi, unde doloribus.</p>
              </blockquote>
              <div class="d-flex vcard align-items-center">
                <div class="pic mr-3">
                  <img src="{{url('frontend/images/person_3_sq.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="text">
                  <strong class="d-block">John Doe</strong>
                  <span>CEO and Co-Founder</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}

    <div class="site-section bg-image overlay" style="background-image: url('{{url('frontend/images/tr3.jpeg')}}');">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="text-white">Get In Touch With Us</h2>
            <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <p class="mb-0"><a href="{{url('/contact')}}" class="btn btn-warning py-3 px-5 text-white">Contact Us</a></p>
          </div>
        </div>
      </div>
    </div>
@endsection
    
    