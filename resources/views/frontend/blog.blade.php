@extends('frontend.layouts.main')

@section('main-container')
    

    <div class="row justify-content-center mt-5 pt-5">
        <div class="col-md-7 text-center">
            <span class="text-serif text-primary">Gallery</span>
            <h3 class="heading-92913 text-black text-center">For Images</h3>
        </div>
    </div>

    <div class="gallery" id="imageGallery">
        <img src="{{ url('frontend/images/tr9.jpeg') }}" alt="Image 1"
            onclick="openModal('{{ url('frontend/images/tr9.jpeg') }}')">
        <img src="{{ url('frontend/images/tr2.jpeg') }}" alt="Image 2"
            onclick="openModal('{{ url('frontend/images/tr2.jpeg') }}')">
        <img src="{{ url('frontend/images/tr3.jpeg') }}" alt="Image 3"
            onclick="openModal('{{ url('frontend/images/tr3.jpeg') }}')">
        <img src="{{ url('frontend/images/tr4.jpeg') }}" alt="Image 4"
            onclick="openModal('{{ url('frontend/images/tr4.jpeg') }}')">
        <img src="{{ url('frontend/images/tr5.jpeg') }}" alt="Image 5"
            onclick="openModal('{{ url('frontend/images/tr5.jpeg') }}')">
        <img src="{{ url('frontend/images/tr6.jpeg') }}" alt="Image 6"
            onclick="openModal('{{ url('frontend/images/tr6.jpeg') }}')">
        <img src="{{ url('frontend/images/tr7.jpeg') }}" alt="Image 7"
            onclick="openModal('{{ url('frontend/images/tr7.jpeg') }}')">
        <img src="{{ url('frontend/images/tr8.jpeg') }}" alt="Image 8"
            onclick="openModal('{{ url('frontend/images/tr8.jpeg') }}')">
        <img src="{{ url('frontend/images/floor.jpeg') }}" alt="Image 9"
            onclick="openModal('{{ url('frontend/images/floor.jpeg') }}')">
        <img src="{{ url('frontend/images/floor1.jpeg') }}" alt="Image 10"
            onclick="openModal('{{ url('frontend/images/florr1.jpeg') }}')">
        <img src="{{ url('frontend/images/site.jpeg') }}" alt="Image 11"
            onclick="openModal('{{ url('frontend/images/site.jpeg') }}')">
        <img src="{{ url('frontend/images/structure.jpeg') }}" alt="Image 12"
            onclick="openModal('{{ url('frontend/images/struture.jpeg') }}')">
        <img src="{{ url('frontend/images/root.jpeg') }}" alt="Image 12"
            onclick="openModal('{{ url('frontend/images/rootroot1.jpeg') }}')">
        <img src="{{ url('frontend/images/root1.jpeg') }}" alt="Image 12"
            onclick="openModal('{{ url('frontend/images/.jpeg') }}')">
        <img src="{{ url('frontend/images/road.jpeg') }}" alt="Image 12"
            onclick="openModal('{{ url('frontend/images/road.jpeg') }}')">
    </div>

    <div class="modal" id="myModal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img src="" alt="Modal Image" id="modalImage">
    </div>




    <div class="row justify-content-center mt-5 pt-5">
        <div class="col-md-7 text-center">
            <span class="text-serif text-primary">Gallery</span>
            <h3 class="heading-92913 text-black text-center">For Videos</h3>
        </div>
    </div>

    {{-- ------------------------------------- Videos -------------------------------- --}}




    <div class="gallery1">
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
