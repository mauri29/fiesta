@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-truck" aria-hidden="true"></i>&nbsp; Mail
                    <form action="#" method="post" class="pull-right">
                        <select name="locale" onchange="this.form.submit();">
                            <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>
                            <option value="en" {{ App::getLocale() == 'en' ? ' selected' : '' }}>English</option>
                            <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                        </select>
                        {{ csrf_field() }}
                    </form> 
                </div>
                <div class="panel-body">
                    <form action="{{ url('/enviar') }}" method="POST">
                        {{ csrf_field() }}
                      <div class="form-group">
                          <label for="title">Su correo</label>
                          <input type="text" name="title" class="form-control" required>
                      </div>
                      <div class="form-group">
                          <label for="email">Destino</label>
                          <input type="email" name="email" class="form-control" placeholder="email@ejemplo.com" required>
                      </div>
                      <div class="form-group">
                          <label for="content">Contenido</label>
                          <textarea name="content" class="form-control" required></textarea>
                      </div>

                        <div class="form-group pull-right">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                  </form>                
                </div>
            </div>
        </div>
    </div>
@endsection