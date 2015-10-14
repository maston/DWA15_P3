@extends('layouts.master')



@section('content')

	{{ implode('<p>', $paragraphs) }}

@stop
