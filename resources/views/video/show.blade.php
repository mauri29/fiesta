@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            @if($video->isPrivate() && Auth::check() && $video->ownedByUser(Auth::user()))
                <div class="alert alert-warning">
                    Your video is currently private. Only you can see it.
                </div>
            @endif
            
            @if($video->isProcessed() && $video->canbeAccessed(Auth::user()))
                <video-player video-uid="{{ $video->uid }}" video-url="{{ $video->getStreamUrl() }}" thumbnail-url="{{ $video->getThumbnail() }}"></video-player>
            @endif <br> 

            @if(!$video->isProcessed())
                <div class="video-placeholder">
                    <div class="video-placeholder__header">
                        This video is processing. Come back a bit later.
                    </div>
                </div>
            @elseif(!$video->canbeAccessed(Auth::user()))
                <div class="video-placeholder">
                    <div class="video-placeholder__header">
                        This video is private.
                    </div>
                </div>    
            @endif

            <div class="panel panel-info">
                <div class="panel-heading">{{ $video->title }}</div>

                <div class="pull-right">
                    <div class="video__views">
                        {{ $video->viewCount() }} {{ str_plural('view', $video->viewCount()) }}
                    </div>
                    <video-voting video-uid="{{ $video->uid }}"></video-voting>
                </div>

                <div class="media">
                    <div class="media-left">
                        <a href="/channel/{{ $video->channel->slug }}">
                            <img src="{{ $video->channel->getImage() }}" alt="{{ $video->channel->name }} image">
                        </a>
                    </div>
                    <div class="media-body">
                        <a href="/channel/{{ $video->channel->slug }}" class="media-heading">{{ $video->channel->user->name }}</a>
                        Subscribe button
                    </div>
                </div>

                {!! nl2br(e($video->description)) !!}  
            </div>

            
            <div class="panel-body">
                @if($video->commentsAllowed())
                    Comments
                @else
                    <p>Comments are disabled for this video.</p>
                @endif
            </div>

        </div>
    </div>
@endsection