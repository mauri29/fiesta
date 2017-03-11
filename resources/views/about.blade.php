@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-users fa-2x" aria-hidden="true"></i>&nbsp; {{ trans('about.title') }}
                    <form action="/about" method="post" class="pull-right">
                        <select name="locale" onchange="this.form.submit();">
                            <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>
                            <option value="en" {{ App::getLocale() == 'en' ? ' selected' : '' }}>English</option>
                            <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                        </select>
                        {{ csrf_field() }}
                    </form> 
                </div>
                <div class="panel-body">
                    <p>{!! trans('about.intro') !!}</p>
                    <p>{!! trans('about.main') !!}</p>
                    <p>{!! trans('about.conclusion') !!}</p>
                    <p>{!! trans('about.motto') !!}</p>                    
                    <a href="{{ route('product.index') }}" type="button" class="btn btn-danger pull-right">{{ trans('about.product') }}</a>

                </div>
            </div>
        </div>
    </div>
@endsection