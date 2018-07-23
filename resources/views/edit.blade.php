@extends('ui::layouts.app')

@section('content')
    <h1>Edit .env</h1>

    {!! SemanticForm::post(route('envi::update')) !!}
    @foreach($vars as $key=>$val)
        {!! SemanticForm::text($val,env($val))->label($val); !!}
    @endforeach
    {!! SemanticForm::submit('Save'); !!}
    {!! SemanticForm::close() !!}
@endsection