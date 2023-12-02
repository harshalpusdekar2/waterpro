@extends('frontend.layouts.main')    

@section('main-container')

 <style>

    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 10px;
        padding: 16px;
    }

    .gallery img {
        width: 100%;
        height:18rem;
        border-radius: 8px;
        transition: transform 0.3s ease-in-out;
        cursor: pointer;
    }

    .gallery img:hover {
        transform: scale(1.1);
    }

    /* Modal Styles */
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        justify-content: center;
        align-items: center;
    }

    .modal img {
        max-width: 80%;
        max-height: 80%;
        border-radius: 8px;
    }

    .close {
        position: absolute;
        top: 15px;
        right: 15px;
        color: #fff;
        font-size: 24px;
        cursor: pointer;
    }
</style>

{{-- <h1 class="text-dark text-center m-5 pt-5">IMAGE GALLERY </h1> --}}
 <div class="row justify-content-center mt-5 pt-5">
    <div class="col-md-7 text-center">
      <span class="text-serif text-primary">Gallery</span>
      <h3 class="heading-92913 text-black text-center">For Images</h3>
    </div>
  </div>

<div class="gallery" id="imageGallery">
<img src="{{ url('frontend/images/tr9.jpeg') }}" alt="Image 1" onclick="openModal('{{ url('frontend/images/tr9.jpeg') }}')">
<img src="{{ url('frontend/images/tr2.jpeg') }}" alt="Image 2" onclick="openModal('{{ url('frontend/images/tr2.jpeg') }}')">
<img src="{{ url('frontend/images/tr3.jpeg') }}" alt="Image 3" onclick="openModal('{{ url('frontend/images/tr3.jpeg') }}')">
<img src="{{ url('frontend/images/tr4.jpeg') }}" alt="Image 4" onclick="openModal('{{ url('frontend/images/tr4.jpeg') }}')">
<img src="{{ url('frontend/images/tr5.jpeg') }}" alt="Image 5" onclick="openModal('{{ url('frontend/images/tr5.jpeg') }}')">
<img src="{{ url('frontend/images/tr6.jpeg') }}" alt="Image 6" onclick="openModal('{{ url('frontend/images/tr6.jpeg') }}')">
<img src="{{ url('frontend/images/tr7.jpeg') }}" alt="Image 7" onclick="openModal('{{ url('frontend/images/tr7.jpeg') }}')">
<img src="{{ url('frontend/images/tr8.jpeg') }}" alt="Image 8" onclick="openModal('{{ url('frontend/images/tr8.jpeg') }}')">
<img src="{{ url('frontend/images/floor.jpeg') }}" alt="Image 9" onclick="openModal('{{ url('frontend/images/floor.jpeg') }}')">
<img src="{{ url('frontend/images/floor1.jpeg') }}" alt="Image 10" onclick="openModal('{{ url('frontend/images/florr1.jpeg') }}')">
<img src="{{ url('frontend/images/site.jpeg') }}" alt="Image 11" onclick="openModal('{{ url('frontend/images/site.jpeg') }}')">
<img src="{{ url('frontend/images/structure.jpeg') }}" alt="Image 12" onclick="openModal('{{ url('frontend/images/struture.jpeg') }}')">
<img src="{{ url('frontend/images/root.jpeg') }}" alt="Image 12" onclick="openModal('{{ url('frontend/images/rootroot1.jpeg') }}')">
<img src="{{ url('frontend/images/root1.jpeg') }}" alt="Image 12" onclick="openModal('{{ url('frontend/images/.jpeg') }}')">
<img src="{{ url('frontend/images/road.jpeg') }}" alt="Image 12" onclick="openModal('{{ url('frontend/images/road.jpeg') }}')">
</div>

<div class="modal" id="myModal">
<span class="close" onclick="closeModal()">&times;</span>
<img src="" alt="Modal Image" id="modalImage">
</div>


<script>
function openModal(imagePath) {
    document.getElementById('myModal').style.display = 'flex';
    document.getElementById('modalImage').src = imagePath;
}

function closeModal() {
    document.getElementById('myModal').style.display = 'none';
}
</script>





 <div class="row justify-content-center mt-5 pt-5">
    <div class="col-md-7 text-center">
      <span class="text-serif text-primary">Gallery</span>
      <h3 class="heading-92913 text-black text-center">For Videos</h3>
    </div>
</div>

<style>
   
    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 16px;
    }

    .video-item {
        position: relative;
        cursor: pointer;
        overflow: hidden;
        border-radius: 8px;
    }

    .video-item video {
        width: 100%;
        height: 50%;
        display: block;
        border-radius: 8px;
        outline: none;
    }

    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        justify-content: center;
        align-items: center;
    }

    .modal video {
        width: 80%;
        height: auto;
        border-radius: 8px;
        outline: none;
    }

    .close {
        position: absolute;
        top: 10px;
        right: 10px;
        color: #fff;
        font-size: 24px;
        cursor: pointer;
    }
</style>
</head>
<body>
{{--------------------------------------- Videos ----------------------------------}}




<div class="gallery">
<div class="video-item" onclick="openModal('{{url('frontend/videos/v1.mp4')}}')">
    <video controls>
        <source src="{{url('frontend/videos/v1.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>
<div class="video-item" onclick="openModal('{{url('frontend/videos/v2.mp4')}}')">
    <video controls>
        <source src="{{url('frontend/videos/v2.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>
<div class="video-item" onclick="openModal('{{url('frontend/videos/v3.mp4')}}')">
    <video controls>
        <source src="{{url('frontend/videos/v3.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>
<div class="video-item" onclick="openModal('{{url('frontend/videos/v4.mp4')}}')">
    <video controls>
        <source src="{{url('frontend/videos/v4.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>
<div class="video-item" onclick="openModal('{{url('frontend/videos/v9.mp4')}}')">
    <video controls>
        <source src="{{url('frontend/videos/v9.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>
<div class="video-item" onclick="openModal('{{url('frontend/videos/v6.mp4')}}')">
    <video controls>
        <source src="{{url('frontend/videos/v6.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>
<div class="video-item" onclick="openModal('{{url('frontend/videos/v7.mp4')}}')">
    <video controls>
        <source src="{{url('frontend/videos/v7.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>
<div class="video-item" onclick="openModal('{{url('frontend/videos/v8.mp4')}}')">
    <video controls>
        <source src="{{url('frontend/videos/v8.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>
<!-- Add more videos as needed -->

</div>

<div class="modal" id="videoModal">
<span class="close" onclick="closeModal()">&times;</span>
<video controls autoplay>
    <source src="" type="video/mp4" id="modalVideo">
    Your browser does not support the video tag.
</video>
</div>

<script>
function openModal(videoSrc) {
    document.getElementById('modalVideo').src = videoSrc;
    document.getElementById('videoModal').style.display = 'flex';
}

function closeModal() {
    document.getElementById('modalVideo').pause();
    document.getElementById('videoModal').style.display = 'none';
}
</script>
@endsection