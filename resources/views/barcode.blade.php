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
                    @foreach($productto as $product)
                        {{--*/ @$producto ='"' .$product->name.'"' /*--}}
                        <div>
                            {!! DNS1D::getBarcodeHTML($productto, "C128") !!}
                        </div>
                        <div style="padding-top: 50px; width: 24%">
                            {{ $product->title }};
                        </div>
                    @endforeach

                    <style>
                        .code{
                            height: 80px;!important;
                        }
                    </style>

                </div>
            </div>
        </div>
    </div>
@endsection