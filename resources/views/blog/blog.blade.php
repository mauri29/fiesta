@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-rss" aria-hidden="true"></i>&nbsp; {{ trans('blog.title') }}
                    <!--<form action="/blog" method="post" class="pull-right">
                        <select name="locale" onchange="this.form.submit();">
                            <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>
                            <option value="en" {{ App::getLocale() == 'en' ? ' selected' : '' }}>English</option>
                            <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                        </select>
                        {{ csrf_field() }}
                    </form>-->    
                </div>

                <div class="panel-body">
                    @include('posts.partials.list', [
                        'posts' => $posts
                    ])
                    @include('layouts.partials.sidebar')
                    <a href="{{ route('product.index') }}" type="button" class="btn btn-success pull-right">{{ trans('blog.product') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
