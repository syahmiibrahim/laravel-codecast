@extends('layouts.app')

@section('content')
   {{--  <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Videos</div>
                    <div class="panel-body">

                        <a href="{{ url('/videos/create') }}" class="btn-floating btn-large waves-effect waves-light red" title="Add New Video"> <i class="mdi-content-add"></i></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Wistia </th><th> Title </th><th> Description </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($videos as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->wistia }}</td><td>{{ $item->title }}</td><td>{{ $item->description }}</td>
                                        <td>
                                            <a href="{{ url('/videos/' . $item->id) }}" class="btn btn-success btn-xs" title="View Video"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/videos/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Video"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/videos', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Video" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Video',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $videos->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}
<h3>Listing Video</h3>

<a href="{{ url('videos/create')}}" class="btn-floating btn-large waves-effect waves-light red">
<i class="mdi-content-add"></i></a>

<ul class="collapsible" data-collapsible="accordion">
  @foreach($videos as $video)
  <li>
    <div class="collapsible-header">
      <i class="mdi-av-my-library-books"></i>
      <a href="{{ url('/videos/'.$video->id)}}">{{ $video->title }}</a>
      <span class="right">
        <a href="{{url('/videos/'.$video->id.'/edit')}}">
        <i class="mdi-content-create"></i></a>
        {!! Form::open([
                        'method'=>'DELETE',
                        'url' => ['/videos', $video->id],
                        'style' => 'display:inline'
                         ]) !!}
        {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Video" />', array(
                            'type' => 'submit',
                            'class' => 'btn btn-danger btn-xs',
                            'title' => 'Delete Video',
                            'onclick'=>'return confirm("Confirm delete?")'
        )) !!}
        {!! Form::close() !!}
        {{-- <i class="mdi-notification-event-busy"> --}}
       </span>
    </div>
    <div class="collapsible-body">{{ $video->description }}</div>
  </li>
  @endforeach
</ul>
@endsection