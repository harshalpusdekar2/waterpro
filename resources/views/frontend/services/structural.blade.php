@extends('frontend.layouts.main')

@section('main-container')
    
  {{-- ----------------------------  Structural Rehabilitation Work Services ------------------------------- --}}

   <div class="container pt-5 id="structural-rehabilitation">
    <div class="row justify-content-center mt-5">
        <div class="col-md-7 text-center">
            <span class="text-serif text-primary">Waterproofing</span>
            <h3 class="heading-92913 text-black text-center"> Structural Rehabilitation Work Services . . . .
            </h3>
        </div>
        <div class="row">
            <div class="col-6">
                <h5 class="text-dark">Information:</h5>
                <p>Discover reliable and effective solutions for structural rehabilitation with Dhruvi Creation and
                    Waterproofing. Our expertise in structural restoration ensures the longevity and stability of
                    buildings, bridges,
                    and other structures. Trust us to revitalize and strengthen your property with our specialized
                    rehabilitation
                    services</p>
            </div>
            <div class="col-6">
                <h5 class="text-dark">Our Approach to Structural Rehabilitation:</h5>
                <p>At Dhruvi Creation and Waterproofing, we take a comprehensive approach to structural
                    rehabilitation,
                    addressing issues such as:
                </p>
            </div>
        </div>
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="service-29283">
                            <span class="wrap-icon-39293">
                                <img src="{{ url('frontend/images/Concrete_degradation.png') }}" alt="">
                            </span>
                            <h3>Concrete Degradation:</h3>
                            <p> Repair and strengthen concrete structures affected by corrosion, spalling, and other
                                forms of deterioration.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="service-29283">
                            <span class="wrap-icon-39293">
                                <img src="{{ url('frontend/images/Crack_rehabilitation.jpg') }}" alt="">
                            </span>
                            <h3>Crack Rehabilitation:</h3>
                            <p>Expert assessment and repair of cracks in buildings or infrastructure, ensuring
                                structural
                                integrity and preventing further damage.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="service-29283">
                            <span class="wrap-icon-39293">
                                <img src="{{ url('frontend/images/Foundation_stabilization.jpg') }}" alt="">
                            </span>
                            <h3>Foundation Stabilization:</h3>
                            <p> Implement solutions to stabilize and reinforce foundations, preventing settlement
                                and improving overall structural stability.</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="service-29283">
                            <span class="wrap-icon-39293">
                                <img src="{{ url('frontend/images/Seismic_retrofitting.jpeg') }}" alt="">
                            </span>
                            <h3>Seismic Retrofitting:</h3>
                            <p> Strengthen structures to withstand seismic activity, ensuring the safety and
                                resilience of
                                buildings in earthquake-prone regions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection