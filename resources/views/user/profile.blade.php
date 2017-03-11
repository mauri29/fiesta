@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;{{ trans('order.title') }} 
                    <form action="/" method="post" class="pull-right">
                        <select name="locale" onchange="this.form.submit();">
                            <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>
                            <option value="en" {{ App::getLocale() == 'en' ? ' selected' : '' }}>English</option>
                            <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                        </select>
                        {{ csrf_field() }}
                    </form> 
                </div>

                <div class="panel-body">
                    <div class="media">
                        <div class="media-left">
                        </div>
                        <div class="media-body">
                            <div class="post">
                                @foreach($orders as $order)
                                    <div class="post__author">                                
                                        <ul class="list-group">
                                            <h1 class="post__header">
                                                <strong>{{ trans('order.created') }}</strong> {{ $order->created_at}}
                                            </h1>
                                            @foreach($order->cart->items as $item)
                                                <li class="list-group-item">
                                                    <h4><span class="label label-primary pull-right">{{ $item['price'] }}.- CHF</span></h4>
                                                    (x{{ $item['qty'] }}) <strong> {{ $item['item']['title'] }}</strong>, {{ $item['weight'] }}gr.
                                                </li>
                                            @endforeach
                                            <div class="panel-footer pull-right">
                                                <strong>{{ trans('order.price') }} {{ $order->cart->totalPrice }}.- CHF</strong>
                                            </div><br>
                                        </ul>
                                    </div>
                                @endforeach
                                <a href="{{ route('product.index') }}" type="button" class="btn btn-danger pull-right">{{ trans('order.product') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection