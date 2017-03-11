@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-2x fa-cog fa-fw" aria-hidden="false"></i>&nbsp;Account Settings
                    <form action="shopping-cart" method="post" class="pull-right">
                        <select name="locale">
                            <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>
                            <option value="en" {{ App::getLocale() == 'en' ? ' selected' : '' }}>English</option>
                            <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                        </select>
                        {{ csrf_field() }}
                        <input type="submit" value="Choose">
                    </form>
                </div>

                <div class="panel-body">
                    <form action="/users/settings" method="post" enctype="multipart/form-data">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Vorname</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') ? old('name'): $user->name }}">
                            @if ($errors->has('name'))
                                <div class="help-block">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>


                        <input type="file" name="image" id="image">
                        <button type="submit">Update</button>
                        
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
