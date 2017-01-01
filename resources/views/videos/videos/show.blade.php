@extends('layouts.app')

@section('content')
   {{--  <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Video {{ $video->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('videos/' . $video->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Video"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['videos', $video->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Video',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $video->id }}</td>
                                    </tr>
                                    <tr><th> Wistia </th><td> {{ $video->wistia }} </td></tr><tr><th> Title </th><td> {{ $video->title }} </td></tr><tr><th> Description </th><td> {{ $video->description }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}

<div class="row">
    <div class="col m3">
        <div class="collection">
            @foreach($videos as $item)
                <a href="{{ url('/videos/'.$item->id)}}" class="collection-item">{{ $item->title }}</a>
            @endforeach
        </div>
    </div>
    <div class="col m9">
        <div class="card blue-grey darken-1">
            <div class="card-image">
                <div id="wistia_<?php $video->wistia; ?>">
                    Display
                </div>
            </div>
            <div class="card-content white-text">
                <button class="btn btn-primary" onclick="setPlaySpeed(0.75)">0.75x</button>
                <button class="btn btn-primary" onclick="setPlaySpeed(1)">1x</button>
                <button class="btn btn-primary" onclick="setPlaySpeed(1.25)">1.25x</button>
                <button class="btn btn-primary" onclick="setPlaySpeed(1.5)">1.5x</button>
                <button class="btn btn-primary" onclick="setPlaySpeed(2)">2x</button><br>
                <span class="card-title">{{ $video->title }}</span>
                <p>{{ $video->description }}</p>
            </div>
            <div class="card-action">
                
                <span class="right">
                  
                </span>
            </div>
        </div>
    </div>
</div>

<script src="http://fast.wistia.net/static/E-v1.js"></script>
<script>
    wistiaEmbed = Wistia.embed("<?php $video->wistia; ?>",{
        videoQuality: "hd-only",
        videoFoam: true
    });

    function setPlaySpeed(speed){
        wistiaEmbed.playbackRate(speed);
    }
</script>
@endsection