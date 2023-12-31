@extends('frontend.layouts.main')

@section('main-container')
    
    {{-- ------------------------------------- Videos -------------------------------- --}}


    <div class="row justify-content-center mt-5 pt-5">
        <div class="col-md-7 text-center">
            <span class="text-serif text-primary">Gallery</span>
            <h3 class="heading-92913 text-black text-center">For Videos</h3>
        </div>
    </div>
    
    <div class="gallery1 m-5">
        <div class="video-item" onclick="openModal1('{{ url('frontend/videos/v1.mp4') }}')">
            <video controls>
                <source src="{{ url('frontend/videos/v1.mp4') }}" type="video/mp4">
                
            </video>
        </div>
        <div class="video-item" onclick="openModal1('{{ url('frontend/videos/v2.mp4') }}')">
            <video controls>
                <source src="{{ url('frontend/videos/v2.mp4') }}" type="video/mp4">
                
            </video>
        </div>
        <div class="video-item" onclick="openModal1('{{ url('frontend/videos/v3.mp4') }}')">
            <video controls>
                <source src="{{ url('frontend/videos/v3.mp4') }}" type="video/mp4">
                
            </video>
        </div>
        <div class="video-item" onclick="openModal1('{{ url('frontend/videos/v4.mp4') }}')">
            <video controls>
                <source src="{{ url('frontend/videos/v4.mp4') }}" type="video/mp4">
                
            </video>
        </div>
        <div class="video-item" onclick="openModal1('{{ url('frontend/videos/v9.mp4') }}')">
            <video controls>
                <source src="{{ url('frontend/videos/v9.mp4') }}" type="video/mp4">
                
            </video>
        </div>
        <div class="video-item" onclick="openModal1('{{ url('frontend/videos/v6.mp4') }}')">
            <video controls>
                <source src="{{ url('frontend/videos/v6.mp4') }}" type="video/mp4">
                
            </video>
        </div>
        <div class="video-item" onclick="openModal1('{{ url('frontend/videos/v7.mp4') }}')">
            <video controls>
                <source src="{{ url('frontend/videos/v7.mp4') }}" type="video/mp4">
                
            </video>
        </div>
        <div class="video-item" onclick="openModal1('{{ url('frontend/videos/v8.mp4') }}')">
            <video controls>
                <source src="{{ url('frontend/videos/v8.mp4') }}" type="video/mp4">
                
            </video>
        </div>
        <!-- Add more videos as needed -->

    </div>

    <div class="modal" id="videoModal">
        <span class="close" onclick="closeModal1()">&times;</span>
        <video controls autoplay>
            <source src="" type="video/mp4" id="modalVideo">
           
        </video>
    </div>

@endsection
