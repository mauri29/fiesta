@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-rss" aria-hidden="true"></i>&nbsp; {{ trans('tag.title') }}
                    <form action="/posts/{tag}" method="post" class="pull-right">
                        <select name="locale" onchange="this.form.submit();">
                            <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>
                            <option value="en" {{ App::getLocale() == 'en' ? ' selected' : '' }}>English</option>
                            <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                        </select>
                        {{ csrf_field() }}
                    </form> 
                </div>

                <div class="panel-body">
                @include('layouts.partials.sidebar')
                    <article class="article">
                        @include('posts.partials.list')
                        <a href="{{ route('product.index') }}" type="button" class="btn btn-danger pull-right">{{ trans('blog.product') }}</a>
                    </article>
                </div>
                
            </div>
        </div>
    </div>
@endsection
