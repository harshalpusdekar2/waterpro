@extends('frontend.layouts.main')

@section('main-container')
    
    <div class="row justify-content-center mt-5 pt-5">
        <div class="col-md-7 text-center">
            <span class="text-serif text-primary">Gallery</span>
            <h3 class="heading-92913 text-black text-center">For Images</h3>
        </div>
    </div>

    <div class="gallery m-5" id="imageGallery">
        <img src="{{ url('frontend/images/img1.jpeg') }}" alt="Image 1"
            onclick="openModal('{{ url('frontend/images/img1.jpeg') }}')">
        <img src="{{ url('frontend/images/img31.jpeg') }}" alt="Image 2"
            onclick="openModal('{{ url('frontend/images/img31.jpeg') }}')">
        <img src="{{ url('frontend/images/img3.jpeg') }}" alt="Image 3"
            onclick="openModal('{{ url('frontend/images/img3.jpeg') }}')">
        <img src="{{ url('frontend/images/img4.jpeg') }}" alt="Image 4"
            onclick="openModal('{{ url('frontend/images/img4.jpeg') }}')">
        <img src="{{ url('frontend/images/img5.jpeg') }}" alt="Image 5"
            onclick="openModal('{{ url('frontend/images/img5.jpeg') }}')">
        <img src="{{ url('frontend/images/img6.jpeg') }}" alt="Image 6"
            onclick="openModal('{{ url('frontend/images/img6.jpeg') }}')">
        <img src="{{ url('frontend/images/img7.jpeg') }}" alt="Image 7"
            onclick="openModal('{{ url('frontend/images/img7.jpeg') }}')">
        <img src="{{ url('frontend/images/img8.jpeg') }}" alt="Image 8"
            onclick="openModal('{{ url('frontend/images/img8.jpeg') }}')">
        <img src="{{ url('frontend/images/img9.jpeg') }}" alt="Image 9"
            onclick="openModal('{{ url('frontend/images/img9.jpeg') }}')">
        <img src="{{ url('frontend/images/img10.jpeg') }}" alt="Image 10"
            onclick="openModal('{{ url('frontend/images/img10.jpeg') }}')">
        <img src="{{ url('frontend/images/img11.jpeg') }}" alt="Image 11"
            onclick="openModal('{{ url('frontend/images/img11.jpeg') }}')">
        <img src="{{ url('frontend/images/img12.jpeg') }}" alt="Image 12"
            onclick="openModal('{{ url('frontend/images/img12.jpeg') }}')">
        <img src="{{ url('frontend/images/img13.jpeg') }}" alt="Image 13"
            onclick="openModal('{{ url('frontend/images/img13.jpeg') }}')">
        <img src="{{ url('frontend/images/img14.jpeg') }}" alt="Image 14"
            onclick="openModal('{{ url('frontend/images/img14.jpeg') }}')">
        <img src="{{ url('frontend/images/img15.jpeg') }}" alt="Image 15"
            onclick="openModal('{{ url('frontend/images/img15.jpeg') }}')">
        <img src="{{ url('frontend/images/img16.jpeg') }}" alt="Image 16"
            onclick="openModal('{{ url('frontend/images/img16.jpeg') }}')">
        <img src="{{ url('frontend/images/img17.jpeg') }}" alt="Image 17"
            onclick="openModal('{{ url('frontend/images/img17.jpeg') }}')">
        <img src="{{ url('frontend/images/img18.jpeg') }}" alt="Image 18"
            onclick="openModal('{{ url('frontend/images/img18.jpeg') }}')">
        <img src="{{ url('frontend/images/img19.jpeg') }}" alt="Image 19"
            onclick="openModal('{{ url('frontend/images/img19.jpeg') }}')">
        <img src="{{ url('frontend/images/img20.jpeg') }}" alt="Image 20"
            onclick="openModal('{{ url('frontend/images/img20.jpeg') }}')">
        <img src="{{ url('frontend/images/img21.jpeg') }}" alt="Image 21"
            onclick="openModal('{{ url('frontend/images/img21.jpeg') }}')">
        <img src="{{ url('frontend/images/img22.jpeg') }}" alt="Image 22"
            onclick="openModal('{{ url('frontend/images/img22.jpeg') }}')">
        <img src="{{ url('frontend/images/img23.jpeg') }}" alt="Image 23"
            onclick="openModal('{{ url('frontend/images/img23.jpeg') }}')">
        <img src="{{ url('frontend/images/img24.jpeg') }}" alt="Image 24"
            onclick="openModal('{{ url('frontend/images/img24.jpeg') }}')">
        <img src="{{ url('frontend/images/img25.jpeg') }}" alt="Image 25"
            onclick="openModal('{{ url('frontend/images/img25.jpeg') }}')">
        <img src="{{ url('frontend/images/img26.jpeg') }}" alt="Image 26"
            onclick="openModal('{{ url('frontend/images/img26.jpeg') }}')">
        <img src="{{ url('frontend/images/img27.jpeg') }}" alt="Image 27"
            onclick="openModal('{{ url('frontend/images/img27.jpeg') }}')">
        <img src="{{ url('frontend/images/img28.jpeg') }}" alt="Image 28"
            onclick="openModal('{{ url('frontend/images/img28.jpeg') }}')">
        <img src="{{ url('frontend/images/img29.jpeg') }}" alt="Image 29"
            onclick="openModal('{{ url('frontend/images/img29.jpeg') }}')">
        <img src="{{ url('frontend/images/img30.jpeg') }}" alt="Image 30"
            onclick="openModal('{{ url('frontend/images/img30.jpeg') }}')">
        <img src="{{ url('frontend/images/img32.jpeg') }}" alt="Image 31"
            onclick="openModal('{{ url('frontend/images/img32.jpeg') }}')">
        <img src="{{ url('frontend/images/img33.jpeg') }}" alt="Image 32"
            onclick="openModal('{{ url('frontend/images/img33.jpeg') }}')">
        <img src="{{ url('frontend/images/img34.jpeg') }}" alt="Image 33"
            onclick="openModal('{{ url('frontend/images/img34.jpeg') }}')">
        <img src="{{ url('frontend/images/img35.jpeg') }}" alt="Image 34"
            onclick="openModal('{{ url('frontend/images/img35.jpeg') }}')">
        <img src="{{ url('frontend/images/img36.jpeg') }}" alt="Image 35"
            onclick="openModal('{{ url('frontend/images/img36.jpeg') }}')">
        <img src="{{ url('frontend/images/img37.jpeg') }}" alt="Image 36"
            onclick="openModal('{{ url('frontend/images/img37.jpeg') }}')">
        <img src="{{ url('frontend/images/img38.jpeg') }}" alt="Image 37"
            onclick="openModal('{{ url('frontend/images/img38.jpeg') }}')">
        <img src="{{ url('frontend/images/img39.jpeg') }}" alt="Image 38"
            onclick="openModal('{{ url('frontend/images/img39.jpeg') }}')">
        <img src="{{ url('frontend/images/img40.jpeg') }}" alt="Image 39"
            onclick="openModal('{{ url('frontend/images/img40.jpeg') }}')">
        <img src="{{ url('frontend/images/img41.jpeg') }}" alt="Image 40"
            onclick="openModal('{{ url('frontend/images/img41.jpeg') }}')">
        <img src="{{ url('frontend/images/img42.jpeg') }}" alt="Image 41"
            onclick="openModal('{{ url('frontend/images/img42.jpeg') }}')">
        <img src="{{ url('frontend/images/img43.jpeg') }}" alt="Image 42"
            onclick="openModal('{{ url('frontend/images/img43.jpeg') }}')">
        <img src="{{ url('frontend/images/img44.jpeg') }}" alt="Image 43"
            onclick="openModal('{{ url('frontend/images/img44.jpeg') }}')">
        <img src="{{ url('frontend/images/img45.jpeg') }}" alt="Image 44"
            onclick="openModal('{{ url('frontend/images/img45.jpeg') }}')">
        <img src="{{ url('frontend/images/img46.jpeg') }}" alt="Image 45"
            onclick="openModal('{{ url('frontend/images/img46.jpeg') }}')">
        <img src="{{ url('frontend/images/img47.jpeg') }}" alt="Image 46"
            onclick="openModal('{{ url('frontend/images/img47.jpeg') }}')">
        <img src="{{ url('frontend/images/img48.jpeg') }}" alt="Image 47"
            onclick="openModal('{{ url('frontend/images/img48.jpeg') }}')">
        <img src="{{ url('frontend/images/img49.jpeg') }}" alt="Image 48"
            onclick="openModal('{{ url('frontend/images/img49.jpeg') }}')">
        <img src="{{ url('frontend/images/img50.jpeg') }}" alt="Image 49"
            onclick="openModal('{{ url('frontend/images/img50.jpeg') }}')">
        <img src="{{ url('frontend/images/img51.jpeg') }}" alt="Image 50"
            onclick="openModal('{{ url('frontend/images/img51.jpeg') }}')">
        <img src="{{ url('frontend/images/img52.jpeg') }}" alt="Image 51"
            onclick="openModal('{{ url('frontend/images/img52.jpeg') }}')">
        <img src="{{ url('frontend/images/img53.jpeg') }}" alt="Image 52"
            onclick="openModal('{{ url('frontend/images/img53.jpeg') }}')">
        <img src="{{ url('frontend/images/img54.jpeg') }}" alt="Image 53"
            onclick="openModal('{{ url('frontend/images/img54.jpeg') }}')">
        <img src="{{ url('frontend/images/img55.jpeg') }}" alt="Image 54"
            onclick="openModal('{{ url('frontend/images/img55.jpeg') }}')">
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
@endsection