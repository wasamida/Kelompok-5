@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pengumuman</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/pengumuman/create') }}" class="btn btn-primary btn-xs" title="Add New pengumuman"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Nim </th><th> Nama </th><th> Tempat </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pengumuman as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nim }}</td><td>{{ $item->nama }}</td><td>{{ $item->tempat }}</td>
                                        <td>
                                            <a href="{{ url('/admin/pengumuman/' . $item->id) }}" class="btn btn-success btn-xs" title="View pengumuman"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/pengumuman/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit pengumuman"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/pengumuman', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete pengumuman" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete pengumuman',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $pengumuman->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection