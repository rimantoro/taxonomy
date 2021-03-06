@extends($layout->extends)

@section($layout->header)
  <h1>@lang('taxonomy::terms.create.header')</h1>
@stop

@section($layout->content)

  <div class="row">

    {!! Form::model($vocabulary, array('method' => 'PUT', 'url' => action('\Rimantoro\Taxonomy\Controllers\TaxonomyController@putUpdate', $vocabulary->id), 'id' => 'app-create', 'class' => 'form')) !!}

    <div class="col-md-6">

      <div class="box box-primary">

        <div class="box-body">

          <div class="form-group{!! $errors->has('name') ? ' has-error has-feedback' : '' !!}">
            {!! Form::label('name', Lang::get('taxonomy::vocabulary.create.label.name'), ['class' => 'control-label']) !!}
            {!! Form::text('name', NULL, ['class' => 'form-control']) !!}
            {!! $errors->has('name') ? Form::label('error', $errors->first('name'), array('class' => 'control-label')) : '' !!}
            {!! $errors->has('name') ? '<span class="glyphicon glyphicon-remove form-control-feedback"></span>' : '' !!}
          </div>

        </div>

        <div class="box-footer">
          <button type="submit" class="btn btn-flat btn-primary">
            @lang('taxonomy::taxonomy.button.update')
          </button>
        </div>

      </div>
    </div>

    {!! Form::close() !!}

  </div>

@stop
