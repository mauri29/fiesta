@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-users" aria-hidden="true"></i>&nbsp; {{ trans('contact.title') }}
                    <form action="/contact" method="post" class="pull-right">
                        <select name="locale" onchange="this.form.submit();">
                            <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>
                            <!--<option value="en" {{ App::getLocale() == 'en' ? ' selected' : '' }}>English</option>-->
                            <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                        </select>
                        {{ csrf_field() }}
                    </form>  
                </div>
                <div class="panel-body">
                    <article class="article">
                        <p>{!! trans('contact.intro') !!}</p>
                        <p>{!! trans('contact.main') !!}</p>
                        <p>{!! trans('contact.conclusion') !!}</p>
                        <p>{!! trans('contact.motto') !!}</p> 
                        <a href="{{ route('product.index') }}" type="button" class="btn btn-danger pull-right">{{ trans('contact.product') }}</a>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection