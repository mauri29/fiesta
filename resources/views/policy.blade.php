@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-2x fa-file-text-o" aria-hidden="true"></i>&nbsp; {{ trans('privacy.title') }}
                    <form action="/policy" method="post" class="pull-right">
                        <select name="locale" onchange="this.form.submit();">
                            <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>
                            <option value="en" {{ App::getLocale() == 'en' ? ' selected' : '' }}>English</option>
                            <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                        </select>
                        {{ csrf_field() }}
                    </form>  
                </div>
                <div class="panel-body">
                    <p>{!! trans('privacy.intro') !!}</p>
                    <p>{!! trans('privacy.main') !!}</p>
                    <p>{!! trans('privacy.conclusion') !!}</p>
                    <p>{!! trans('privacy.motto') !!}</p>  
                    <a href="{{ route('product.index') }}" type="button" class="btn btn-danger pull-right">{{ trans('privacy.product') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection