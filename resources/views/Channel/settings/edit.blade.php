@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp;{{ trans('editc.title') }}
                    <form action="/user/{channel}/edit" method="post" class="pull-right">
                        <select name="locale" onchange="this.form.submit();">
                            <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>
                            <option value="en" {{ App::getLocale() == 'en' ? ' selected' : '' }}>English</option>
                            <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                        </select>
                        {{ csrf_field() }}
                    </form>  
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2">
                            <form action="/user/{{ $channel->slug }}/edit" method="post" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                            <label for="address">{{ trans('editc.street') }}</label>
                                            <input id="address" type="text" class="form-control" name="address" value="{{ old('address') ? old('address'): $channel->address }}">
                                            @if ($errors->has('address'))
                                                <div class="help-block">
                                                    {{ $errors->first('address') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
                                            <label for="number">{{ trans('editc.number') }}</label>
                                            <input id="number" type="text" class="form-control" name="number" value="{{ old('number') ? old('number'): $channel->number }}">
                                            @if ($errors->has('number'))
                                                <div class="help-block">
                                                    {{ $errors->first('number') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="form-group{{ $errors->has('post') ? ' has-error' : '' }}">
                                            <label for="post">{{ trans('editc.post') }}</label>
                                            <input id="post" type="text" class="form-control" name="post" value="{{ old('post') ? old('post'): $channel->post }}">
                                            @if ($errors->has('post'))
                                                <div class="help-block">
                                                    {{ $errors->first('post') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                            <label for="city">{{ trans('editc.city') }}</label>
                                            <input id="city" type="text" class="form-control" name="city" value="{{ old('city') ? old('city'): $channel->city }}">
                                            @if ($errors->has('city'))
                                                <div class="help-block">
                                                    {{ $errors->first('city') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>                                
                              

                                <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                                    <label for="slug">{{ trans('editc.userid') }}</label>
                                    <div class="input-group">
                                        <input id="slug" type="text" class="form-control" name="slug" value="{{ old('slug') ? old('slug'): $channel->slug }}">
                                    </div>
                                    @if ($errors->has('slug'))
                                        <div class="help-block">
                                            {{ $errors->first('slug') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                    <label for="description">{{ trans('editc.interest') }}</label>
                                    <textarea name="description" id="description" class="form-control">{{ old('description') ? old('description'): $channel->description }}</textarea>
                                    @if ($errors->has('description'))
                                        <div class="help-block">
                                            {{ $errors->first('description') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="image">{{ trans('editc.userimage') }}</label>
                                    <input type="file" name="image" id="image">
                                </div>

                                <button class="btn btn-success" type="submit">{{ trans('editc.update') }}</button>

                                {{ csrf_field() }}                    
                                {{ method_field('PUT') }}                    
                            
                            </form>
                        </div>
                    </div>
                    <a href="{{ route('product.index') }}" type="button" class="btn btn-danger pull-right">{{ trans('show.product') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
