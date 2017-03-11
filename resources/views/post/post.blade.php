@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">  
                <div class="panel-heading"><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; {{ $post->title }}
                    <!--<form action="/post/{post}" method="post" class="pull-right">
                        <select name="locale" onchange="this.form.submit();">
                            <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>
                            <option value="en" {{ App::getLocale() == 'en' ? ' selected' : '' }}>English</option>
                            <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                        </select>
                        {{ csrf_field() }}
                    </form>-->
                </div>

                <div class="panel-body">
                    <img src="{{ $post->image }}" class="author__image">
                    <div class="author__details">
                        &nbsp;<a href="{{ route('blog') }}" class="author__name">Super Fiesta</a><!-- $post->product->fullName()? -->
                        <div class="author__post-time">&nbsp;{{ trans('post.posted') }} {{ $post->created_at->diffForHumans() }}</div>
                    </div><br>
                    <article class="article">
                        
                        <!--<h1 class="article__header">{{ $post->title }}</h1>-->
                        <h3 class="article__subheader">
                        {!! Markdown::convertToHtml(e($post->teaser)) !!}
                        </h3>                        
                        @include('post.partials.slide', [
                            'url' => $post->image,
                            'alt' => 'Pinguino',
                        ])
                        <div class="article__body">
                            {!! Markdown::convertToHtml(e($post->body)) !!}
                        </div>
                        @foreach($post->tags as $tag)
                            <a href="{{ route('posts.tagged', $tag->slug) }}" class="tag">{{ $tag->name }}</a>    
                        @endforeach
                    </article>
                    <p><a href="{{ route('product.index') }}" type="button" class="btn btn-danger pull-right">{{ trans('post.product') }}</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection






