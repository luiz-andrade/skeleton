@extends('back.app')

@section('title', 'Foo » Bar » Create')

@section('page-actions')
    <a href="{{ URL::previous() }}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Create a bar</h3>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['method' => 'post', 'route' => ['back.foo.bar.store']]) !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                {!! Form::openGroup('title', 'Title') !!}
                                {!! Form::text('title', null, ['placeholder' => 'Set Title']) !!}
                                {!! Form::closeGroup() !!}
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                {!! Form::openGroup('status', 'Status') !!}
                                {!! Form::select('status', [0 => 'Inactive', 1 => 'Active']) !!}
                                {!! Form::closeGroup() !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                {!! Form::openFormActions() !!}
                                {!! Form::button('<i class="fa fa-save"></i> Create', ['class' => 'btn btn-primary form-action', 'type' => 'submit']) !!}
                                {!! Form::closeFormActions() !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop