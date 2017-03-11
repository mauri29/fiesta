@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-rss" aria-hidden="true"></i>&nbsp; {{ trans('search.title') }}
                    <form action="/search" method="post" class="pull-right">
                        <select name="locale" onchange="this.form.submit();">
                            <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>
                            <option value="en" {{ App::getLocale() == 'en' ? ' selected' : '' }}>English</option>
                            <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                        </select>
                        {{ csrf_field() }}
                    </form> 
                </div>

                <div class="panel-body">
                    <h4>{{ trans('search.found') }} "{{ Request::input('query') }}"</h4>
                    @if(!$products->count())
                        <p>{{ trans('search.nofound') }}</p>
                    @else
                        <div class="row">
                            <div class="col-lg-12">
                                @foreach($products as $product)
                                    @include('shop.partials/productblock')
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <a href="{{ route('product.index') }}" type="button" class="btn btn-success pull-right">{{ trans('search.product') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection