@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-money" aria-hidden="true"></i>&nbsp; {{ trans('pay.title') }}
                    <form action="/pay" method="post" class="pull-right">
                        <select name="locale" onchange="this.form.submit();">
                            <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>
                            <option value="en" {{ App::getLocale() == 'en' ? ' selected' : '' }}>English</option>
                            <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                        </select>
                        {{ csrf_field() }}
                    </form>  
                </div>
                <div class="panel-body">
                    <p>{!! trans('pay.intro') !!}</p>
                    <p>{!! trans('pay.main') !!}</p>
                    <p>{!! trans('pay.conclusion') !!}</p>
                    <p>{!! trans('pay.motto') !!}</p>  
                    <a href="{{ route('product.index') }}" type="button" class="btn btn-danger pull-right">{{ trans('pay.product') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection