  @extends('frontend.layouts.main')

  @section('main-container')

    <div class="site-section1 pt-5">

        {{-- ---------------------------- For Basements and Tunnels ------------------------------- --}}

        <div class="container" id="basement-tunnel">
            <div class="row justify-content-center my-5">
                <div class="col-md-7 text-center" >
                    <span class="text-serif text-primary">Waterproofing</span>
                    <h3 class="heading-92913 text-black text-center">For Basements and Tunnels . . .</h3>
                </div>
                <p> Welcome to Dhruvi Creation and Waterproofing, your trusted partner in comprehensive
                    waterproofing solutions. Our specialized services extend to safeguarding the structural integrity of
                    basements
                    and tunnels, ensuring lasting protection against water ingress and potential damage.</p>

                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ url('frontend/images/floor.jpeg') }}" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        {{-- <span class="text-serif text-primary">About Us</span> --}}
                        <h3 class="heading-92913 text-black">Basement Waterproofing</h3>
                        <p>Discover unrivalled basement waterproofing solutions tailored to meet the unique challenges of
                            your property.
                            We understand the importance of a dry and secure basement, and our expert team employs
                            cutting-edge
                            techniques and high-quality materials to create a robust barrier against moisture. From
                            foundation cracks to
                            drainage issues, we address every aspect to keep your basement dry and habitable.
                        </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6">
                        {{-- <span class="text-serif text-primary">About Us</span> --}}
                        <h3 class="heading-92913 text-black ">Basement Waterproofing</h3>
                        <p>Discover unrivalled basement waterproofing solutions tailored to meet the unique challenges of
                            your property.
                            We understand the importance of a dry and secure basement, and our expert team employs
                            cutting-edge
                            techniques and high-quality materials to create a robust barrier against moisture. From
                            foundation cracks to
                            drainage issues, we address every aspect to keep your basement dry and habitable.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ url('frontend/images/site.jpeg') }}" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        @endsection