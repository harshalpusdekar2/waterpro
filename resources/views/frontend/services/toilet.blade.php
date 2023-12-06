@extends('frontend.layouts.main')

@section('main-container')
    
 
 {{-- ---------------------------- For Toilet & Terrace ------------------------------- --}}

        <div class="container" style="background:whitesmoke" id="toilet-terrace">
            <div class="row justify-content-center my-5">
                <div class="col-md-7 text-center">
                    <span class="text-serif text-primary">Waterproofing</span>
                    <h3 class="heading-92913 text-black text-center">For Toilet & Terrace . . .</h3>
                </div>
                <p>Welcome to Dhruvi Creation and Waterproofing, where
                    we redefine waterproofing solutions for
                    your toilets and terraces. Our specialized services ensure not only the protection of these critical
                    spaces but
                    also add value to your property through durable and effective waterproofing.
                </p>

                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ url('frontend/images/toilet.jpeg') }}" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        {{-- <span class="text-serif text-primary">About Us</span> --}}
                        <h3 class="heading-92913 text-black">Toilet Waterproofing</h3>
                        <p>Discover peace of mind with our expert toilet waterproofing services. Leaks and water damage in
                            bathrooms
                            can lead to structural issues and compromise hygiene. Our team is dedicated to delivering
                            meticulous
                            waterproofing solutions tailored to the unique challenges posed by toilets. From sealing joints
                            to addressing
                            plumbing penetrations, we ensure your bathroom remains dry and secure.</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6">
                        {{-- <span class="text-serif text-primary">About Us</span> --}}
                        <h3 class="heading-92913 text-black">Terrace Waterproofing</h3>
                        <p>Elevate your outdoor spaces with our terrace waterproofing expertise. Terraces are exposed to the
                            elements,
                            making them susceptible to water damage. Our comprehensive terrace waterproofing solutions
                            create a
                            protective shield against rain, UV rays, and other environmental factors. Enjoy a
                            weather-resistant terrace that
                            enhances both aesthetics and functionality.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ url('frontend/images/terrace.jpeg') }}" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
@endsection