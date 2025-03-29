@extends('layouts.home')
@section('title','الكورس')
@section('css')
<link href="{{asset('choosecourse/view/style.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="main-video-container">
    <video id="main-video" class="main-video" controls preload="auto" autoplay muted>
        <source id="main-video-source" src="{{ asset( $videos_department[0]->video_name) }}" type="video/mp4">
    </video>
</div>

<div class="video-info">
    <div id="video-title" class="video-title">{{ $videos_department[0]->name }}</div>
</div>


<div class="next-button" onclick="playNextVideo()"><strong>التالي</strong></div>


<div class="related-videos">
    @foreach ($videos_department as $index => $video_department)
    <div class="video-item" onclick="changeVideo('{{ asset($video_department->video_name) }}', '{{ $video_department->name }}', {{ $index }})">
        <div class="video-thumbnail">
            <img src="{{asset($video_department->img)}}" alt="Thumbnail">
        </div>
        <div class="video-description">{{ $video_department->name }}</div>
    </div>
    @endforeach
</div>

<script>
    
    let currentVideoIndex = 0;

    
    function changeVideo(videoUrl, videoTitle, index) {
        const mainVideo = document.getElementById('main-video');
        const mainVideoSource = document.getElementById('main-video-source');
        const videoTitleElement = document.getElementById('video-title');

        mainVideoSource.src = videoUrl;  
        mainVideo.load();  
        mainVideo.play();  

        videoTitleElement.textContent = videoTitle;  

        currentVideoIndex = index;
    }

    function playNextVideo() {
        if (currentVideoIndex < {{ count($videos_department) }} - 1) {
            currentVideoIndex++;
            const nextVideo = @json($videos_department)[currentVideoIndex];
            changeVideo('{{ asset('') }}' + nextVideo.video_name, nextVideo.name, currentVideoIndex);
        }
    }
    
</script>
@endsection
