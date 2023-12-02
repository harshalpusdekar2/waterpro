@extends('frontend.layouts.main')    

@section('main-container')
<style>
    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 36px;
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

<h1 class="text-dark text-center m-5 pt-5">IMAGE GALLERY </h1>
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







    {{-- <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
        }

        .video-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 16px;
            padding: 16px;
        }

        .video-container {
            position: relative;
            cursor: pointer;
        }

        .video-thumbnail {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            background-color: rgba(0, 0, 0, 0.7);
            border: none;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-size: 24px;
            cursor: pointer;
        }

        .video-modal {
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

        .video-modal video {
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

<div class="video-gallery" id="videoGallery">
    <div class="video-container" onclick="playVideo('video1.mp4')">
        <img src="thumbnail1.jpg" alt="Video 1" class="video-thumbnail">
        <button class="play-button">&#9654;</button>
    </div>
    <div class="video-container" onclick="playVideo('video2.mp4')">
        <img src="thumbnail2.jpg" alt="Video 2" class="video-thumbnail">
        <button class="play-button">&#9654;</button>
    </div>
    <!-- Add more videos as needed -->
</div>

<div class="video-modal" id="videoModal">
    <span class="close" onclick="closeVideoModal()">&times;</span>
    <video controls autoplay id="modalVideo">
        Your browser does not support the video tag.
    </video>
</div>

<script>
    function playVideo(videoPath) {
        document.getElementById('videoModal').style.display = 'flex';
        document.getElementById('modalVideo').src = videoPath;
    }

    function closeVideoModal() {
        document.getElementById('videoModal').style.display = 'none';
        document.getElementById('modalVideo').pause();
    }
</script> --}}







  
@endsection