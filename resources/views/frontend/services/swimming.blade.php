@extends('frontend.layouts.main')

@section('main-container')
    
 
 {{-- ---------------------------- Swimming Tanks and Humidification Tanks Services -------------------------------- --}}


 <div class="container" id="swimming-tanks">
    <div class="row justify-content-center mt-5">
        <div class="col-md-7 text-center">
            <span class="text-serif text-primary">Waterproofing</span>
            <h3 class="heading-92913 text-black text-center"> Swimming Tanks and Humidification Tanks Services. . .
                . .
            </h3>
        </div>

        <p> Welcome to Dhruvi Creation and Waterproofing, your trusted partner in providing specialized
            solutions for swimming tanks and humidification tanks. Our expertise extends beyond standard
            waterproofing,
            ensuring the durability, safety, and efficiency of these critical structures. Dive into excellence with
            our tailored
            services.</p>
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <h4 class="heading-92913 text-dark">Swimming Tanks Services :</h4>
                    <p>Make a splash with our dedicated swimming tank services. We understand the unique challenges
                        posed by
                        pool environments, and our team is equipped to provide comprehensive solutions, including:
                    </p>

                    <div class="col-md-4 service-29283">
                        <span class="wrap-icon-39293">
                            <img src="{{ url('frontend/images/tr1.jpeg') }}" alt="">
                        </span>
                        <h3>Waterproofing:</h3>
                        <p> Ensure a watertight structure with our advanced waterproofing techniques, preventing
                            leaks
                            and water damage.</p>
                    </div>
                    <div class="col-md-4 service-29283">
                        <span class="wrap-icon-39293">
                            <img src="{{ url('frontend/images/tr2.jpeg') }}" alt="">
                        </span>
                        <h3>Chemical Resistance:</h3>
                        <p> Implement solutions to resist the corrosive effects of pool chemicals, extending the
                            lifespan of the structure</p>
                    </div>
                    <div class="service-29283 col-md-4">
                        <span class="wrap-icon-39293">
                            <img src="{{ url('frontend/images/tr3.jpeg') }}" alt="">
                        </span>
                        <h3>Safety Measures:</h3>
                        <p> Prioritize safety with non-slip coatings, proper drainage systems, and other features to
                            enhance the security of your swimming tank.</p>
                    </div>

                </div>
                <div class="row">
                    <h4 class="heading-92913 text-dark">Humidification Tanks Services :</h4>
                    <p>Elevate your industrial processes with our humidification tank services. Our team specializes
                        in creating and
                        maintaining efficient and reliable humidification systems, offering:</p>

                    <div class="col-md-4 service-29283">
                        <span class="wrap-icon-39293">
                            <img src="{{ url('frontend/images/tr4.jpeg') }}" alt="">
                        </span>
                        <h3>Waterproofing and Sealing:</h3>
                        <p>Protect tanks from moisture-related issues with expert waterproofing and sealing
                            services.</p>
                    </div>
                    <div class="col-md-4 service-29283">
                        <span class="wrap-icon-39293">
                            <img src="{{ url('frontend/images/tr5.jpeg') }}" alt="">
                        </span>
                        <h3>Temperature and Humidity Control :</h3>
                        <p>Implement solutions for precise control of temperature and humidity
                            levels, vital for industrial processes.
                        </p>
                    </div>
                    <div class="service-29283 col-md-4">
                        <span class="wrap-icon-39293">
                            <img src="{{ url('frontend/images/site.jpeg') }}" alt="">
                        </span>
                        <h3>Customized Designs : </h3>
                        <p>Tailor-made solutions that cater to the unique requirements of your humidification tank,
                            optimizing performance and longevity.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection