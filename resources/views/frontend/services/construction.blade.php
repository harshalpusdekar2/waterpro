@extends('frontend.layouts.main')

@section('main-container')
  
  
  {{-- ----------------------------------- Other Special Treatment for Construction Joints Services -------------------------------- --}}

  <div class="container pt-5" id="other-special">
    <div class="row justify-content-center mt-5">
        <div class="col-md-7 text-center">
            <span class="text-serif text-primary">Waterproofing</span>
            <h3 class="heading-92913 text-black text-center">Other Special Treatment for Construction Joints
                Services . . .</h3>
        </div>

        <p> Discover specialized solutions for construction joints with Dhruvi Creation and Waterproofing. Our
            commitment to excellence extends to providing unique treatments for construction joints, ensuring the
            longevity, integrity, and resilience of your structures. Explore our services tailored to meet the
            specific
            challenges posed by construction joints.</p>

        <div class="py-5">
            <div class="container">
                <div class="row">
                    <h4 class="heading-92913 text-dark">Our Specialized Treatments for Construction Joints : </h4>
                    <p>At Dhruvi Creation and Waterproofing, we offer a range of specialized treatments for
                        construction joints,
                        including:</p>

                    <div class="col-md-4 service-29283">
                        <span class="wrap-icon-39293">
                            <img src="{{ url('frontend/images/site.jpeg') }}" alt="">
                        </span>
                        <h3>Joint Sealing :</h3>
                        <p>Utilize advanced sealing techniques to protect construction joints from water ingress,
                            preventing potential damage.</p>
                    </div>
                    <div class="col-md-4 service-29283">
                        <span class="wrap-icon-39293">
                            <img src="{{ url('frontend/images/root.jpeg') }}" alt="">
                        </span>
                        <h3>Flexible Joint Fillers :</h3>
                        <p>Implement flexible joint fillers to accommodate structural movement, reducing the risk of
                            cracks and maintaining the integrity of joints.</p>
                    </div>
                    <div class="service-29283 col-md-4">
                        <span class="wrap-icon-39293">
                            <img src="{{ url('frontend/images/root1.jpeg') }}" alt="">
                        </span>
                        <h3>Expansion Joint Treatments :</h3>
                        <p>Address expansion joints with precision, ensuring proper sealing and
                            protection against environmental elements.</p>
                    </div>

                </div>
                <h4 class="heading-92913 text-dark my-5">Key Features of Our Construction Joint Services : </h4>
                <div class="row">

                    <div class="col-md-4 service-29283">
                        {{-- <span class="wrap-icon-39293">
                           
                        </span> --}}
                        <h3>Custom Solutions :</h3>
                        <p>Tailored treatments to address the specific needs and challenges presented by your
                            construction joints.
                        </p>
                    </div>
                    <div class="col-md-4 service-29283">
                        {{-- <span class="wrap-icon-39293">
                            <img src="{{ url('frontend/images/tr1.jpeg') }}" alt="">
                        </span> --}}
                        <h3>Preventive Measures :</h3>
                        <p> Implement treatments that go beyond immediate issues, providing preventive
                            measures to enhance the longevity of construction joints.
                        </p>
                    </div>
                    <div class="service-29283 col-md-4">
                        {{-- <span class="wrap-icon-39293">
                            <img src="{{ url('frontend/images/tr5.jpeg') }}" alt="">
                        </span> --}}
                        <h3>Compliance with Standards :</h3>
                        <p>Our treatments adhere to industry standards, ensuring quality, safety, and
                            regulatory compliance.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection