@extends('layouts.app')

@section('content')
    {{-- <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Video</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/videos', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('videos.videos.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div> --}}
<h3>New Video</h3>

<div class="card">
    <div class="card-content">

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['url' => '/videos', 'class' => 'form-horizontal', 'files' => true]) !!}

            @include ('videos.videos.form')

        {!! Form::close() !!}
    </div>
</div>
@endsection