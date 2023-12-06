@extends('frontend.layouts.main')

@section('main-container')


{{-- ---------------------------- Roof Insulation Works & Terrace Gardens Services ------------------------------- --}}

<div class="container pt-5" id="roof-insulation">
    <div class="row justify-content-center my-5">
        <div class="col-md-7 text-center">
            <span class="text-serif text-primary">Waterproofing</span>
            <h3 class="heading-92913 text-black text-center">Roof Insulation Works & Terrace Gardens Services. . . .
            </h3>
        </div>
        <p>Welcome to Dhruvi Creation and Waterproofing, your
            partner in innovative solutions for roof
            insulation works and terrace gardens. Elevate your living spaces with our expert services that combine
            energy
            efficiency with the beauty of lush terrace gardens.</p>

        <div class="row">
            <div class="col-md-6">
                <img src="{{ url('frontend/images/tr1.jpeg') }}" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6">
                {{-- <span class="text-serif text-primary">About Us</span> --}}
                <h3 class="heading-92913 text-black">Roof Insulation Works</h3>
                <p>Experience the benefits of our cutting-edge roof insulation works. Our solutions not only provide
                    superior
                    thermal protection but also contribute to energy efficiency and cost savings. Whether for
                    residential or
                    commercial properties, we specialize in installing insulation materials that enhance comfort and
                    reduce energy
                    consumption, making your space environmentally friendly and sustainable.
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                {{-- <span class="text-serif text-primary">About Us</span> --}}
                <h3 class="heading-92913 text-black">Terrace Gardens</h3>
                <p>Transform your rooftop into a vibrant oasis with our terrace garden services. We understand the
                    value of green
                    spaces in urban living, and our team excels in creating beautiful and functional terrace
                    gardens. From design to
                    implementation, we integrate waterproofing and landscaping to ensure your terrace garden thrives
                    while
                    providing a serene escape in the heart of the city</p>
            </div>
            <div class="col-md-6">
                <img src="{{ url('frontend/images/tr2.jpeg') }}" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@endsection