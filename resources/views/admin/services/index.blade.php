@extends('layouts.backend')
@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')
            <div class="col-md-9">
            	<div class="card">
            		<div class="card-header">
            			Services Offered
            		</div>
            		<div class="card-body">
                        <a href="{{ url('/admin/services/create') }}" class="btn btn-success btn-sm" title="Add New Permission">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/services', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Services</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($query as $item)
                                    <tr>
                                        <td>{{ $item->id }}
                                        </td>
                                        <td>{{ $item->services }}
                                       	<td>
                                       		{!! Form::open([
                                                'method' => 'PATCH',
                                                'url' => ['/admin/services/edit', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-edit" aria-hidden="true"></i> Edit Page Content', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-primary btn-sm',
                                                        'title' => 'Edit Page content',
                                                )) !!}
                                            {!! Form::close() !!}
                                       	</td>	
                                        <td>

                                                                                       
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/services', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{-- <div class="pagination"> {!! $query->appends(['search' => Request::get('search')])->render() !!} </div> --}}
                        </div>

                    </div>
            	</div>
            	
            </div>
        </div>
     </div>
@endsection