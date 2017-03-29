@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp; {{ trans('shop.kassa') }} 
                    <form action="/shopping-cart" method="post" class="pull-right">
                        <select name="locale" onchange="this.form.submit();">
                            <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>
                            <option value="en" {{ App::getLocale() == 'en' ? ' selected' : '' }}>English</option>
                            <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                        </select>
                        {{ csrf_field() }}
                    </form> 
                </div>
                <div class="panel-body">
                    
                    @if(Session::has('cart'))
                        <div class="row">
                            <div class="col-sm-10 col-md-10 col-md-offset-1 col-sm-offset-2">
                                <div class="post__header">
                                    <strong>{{ trans('shop.string') }}</strong>
                                </div>
                                <ul class="list-group">
                                <!--<h1 class="animated infinite zoomInLeft">Example</h1>-->
                                    @foreach($products as $product)
                                        <li class="list-group-item">
                                            <img src="{{ $product['item']['imagePath'] }}" class="author__image">
                                            &nbsp;<span class="label label-pill label-danger pull-left">{{ $product['qty'] }}</span>&nbsp;<span class="pull">{{ $product['price'] }}.- CHF</span>&nbsp;<span class="label label-primary pull">{{ $product['weight'] }} kg.</span><br>
                                            &nbsp;<span class="label label-primary pull"><strong>{{ $product['item']['title'] }}</strong></span><br>
                                            <!--<span class="badge pull-right">{{ $product['offer'] }} {{ trans('shop.stock') }}</span><br>-->

                                            <a href="{{ route('product.addByOne', ['id' => $product['item']['id']]) }}" class="btn btn-success dropdown-toogle"><i class="fa fa-plus" aria-hidden="true"></i>{{ trans('shop.up') }}</a>&nbsp;
                                            <a href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}" class="btn btn-success dropdown-toogle"><i class="fa fa-minus" aria-hidden="true"></i>{{ trans('shop.down') }}</a>&nbsp;
                                            <a href="{{ route('product.remove', ['id' => $product['item']['id']]) }}" class="btn btn-success dropdown-toogle"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </li>
                                    @endforeach
                                </ul>
                                <a href="{{ route('product.index') }}" type="button" class="btn btn-danger pull-right">{{ trans('shop.products') }}</a><br>
                                <div class="post__header">
                                    <strong>{{ trans('shop.total') }}</strong>
                                </div>
                                <div class="post__author">                                
                                    <ul class="list-group">
                                        <li class="list-group-item"><strong>{{ trans('shop.tpps') }}</strong><span class="pull-right"> {{ $totalPrice }}.- CHF</span></li>
                                        <li class="list-group-item">
                                            <strong>{{ trans('shop.tps') }}</strong> <span class="label label-primary">{{ $totalWeight }} kg.</span> 
                                            </strong>
                                        <span class="pull-right"> {{ $totalPost }}.- CHF</span></li>
                                        <div class="panel-footer">
                                            <strong>{{ trans('shop.total') }} </strong><span class="pull-right">{{ $totalPrice + $totalPost }}.- CHF</span>
                                        </div>
                                    </ul>
                                </div>
                                <!--
                                <div class="post__author">                                
                                    <ul class="list-group pull-right">
                                        <a href="crear_reporte_porpais/1" target="_blank" ><button class="btn btn-primary dropdown-toogle ">Ver PDF</button></a>
                                        <a href="crear_reporte_porpais/2" target="_blank" ><button class="btn btn-success dropdown-toogle ">Descargar PDF</button></a>
                                    </ul>
                                </div>-->

                            </div>
                           
                        </div>                       
                        <div class="row">
                            <div class="panel panel-info">
                                <div class="panel-heading"><i class="fa fa fa-money fa-fw" aria-hidden="true"></i>&nbsp; {{ trans('shop.payment') }} </div>
                                <div class="col-sm-10 col-md-10 col-md-offset-1 col-sm-offset-2">
                                    <div class="post__header">
                                        <strong>{{ trans('shop.select') }}</strong>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="{{ route('checkout') }}" type="button" class="btn btn-success"><i class="fa fa-cc-visa fa-fw" aria-hidden="true"></i> {{ trans('shop.visa') }}</a> <img src="https://ucarecdn.com/a414ad0a-be9f-4404-8bde-1bdf7444d297/visabankcardicon33715.png" height="50"> <br>{{ trans('shop.gebuhr') }}
                                        </li>
                                        <li>
                                            <a href="{{ route('rechnung') }}" type="button" class="btn btn-success"><i class="fa fa-clipboard" aria-hidden="true"></i> {{ trans('shop.conti') }}</a> <img src="https://ucarecdn.com/1a9097c7-684e-4f92-877d-320a71371e1a/sgkb_einzahlungsschein_orange.jpg" height="35">  
                                        </li>
                                    </ul>
                                    
                                    <!--<p><img src="https://ucarecdn.com/d171fb2a-aea0-4c2a-a01e-1b8db6366caa/financelogomethodonlinepaymentpaypalicon.png" height="50"> <a href="{{ route('checkout') }}" type="button" class="btn btn-success"><i class="fa fa-cc-paypal" aria-hidden="true"></i> PayPal</a></p>-->
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('product.index') }}" type="button" class="btn btn-danger pull-right">{{ trans('shop.products') }}</a><br>                    
                    @else            
                        <div class="col-md-8 col-md-offset-2">
                            <h3>{{ trans('shop.noproducts') }}</h3>
                        </div>
                        <a href="{{ route('product.index') }}" type="button" class="btn btn-danger pull-right">{{ trans('shop.products') }}</a><br>
                    @endif

                </div>

            </div>
        </div>
    </div>
@endsection