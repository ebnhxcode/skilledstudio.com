<div class="list-group" >
  <div class="list-group-item">
    <h4>
      @if(Request::path()=='posts/create')
        <a href="{{url('/posts/create')}}">Nuevo post</a>
      @else
        <a href="{{url('/posts/'.(isset($post->id)?$post->id:1).'/edit')}}">Modificar post</a>
      @endif

      <a href="{{url('/posts')}}" style="float:right;" class="btn btn-success">Volver al listado</a>
    </h4>
  </div><!-- /div .list-group-item -->
  <div class="list-group-item">
    {!!Form::open(['route'=>'posts.store', 'method'=>'POST'])!!}
    <div class="form-group has-feedback has-feedback-left">
      {!!Form::label('Titulo:')!!}
      {!!Form::text('title',null,['class'=>'form-control','placeholder'=>'Ingrese el titulo del post','maxlenght'=>'255'])!!}
    </div><!-- /div .list-group-item -->
    <div class="form-group has-feedback has-feedback-left">
      {!!Form::label('Contenido:')!!}
      {!!Form::textarea('body',null,['class'=>'form-control','placeholder'=>'Ingrese contenido del post','rows' => '5','maxlenght'=>'5000'])!!}
    </div><!-- /div .form-group .has-feedback .has-feedback-left -->
    <div class="form-group has-feedback has-feedback-left">
      {!!Form::submit('Enviar', ['class'=>'btn btn-success'])!!}
      {!!Form::close()!!}

      @if(strpos(Request::path(),'edit', 8))
        {!!Form::open(['action'=> ['PostController@destroy', $post->id], 'method'=>'DELETE'])!!}
        {!!Form::submit('Eliminar', ['class'=>'btn btn-primary btn-danger', 'id'=>'eliminar'])!!}﻿
        {!!Form::close()!!}
      @endif
    </div><!-- /div .form-group .has-feedback .has-feedback-left -->

  </div><!-- /div .list-group-item -->
</div><!-- /div .list-group -->
