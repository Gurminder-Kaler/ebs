@extends('layouts.backend')
@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')
            <div class="col-md-9">
            	<div class="card">
            		<div class="card-header">
            			Contact Queries
            		</div>
            		<div class="card-body">
                        {{-- <a href="{{ url('/admin/permissions/create') }}" class="btn btn-success btn-sm" title="Add New Permission">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a> --}}

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/permissions', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Message</th>
                                        <th>Country</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($query as $item)
                                    <tr>
                                        <td>{{ $item->id }}
                                        </td>
                                        <td>{{ $item->name }}
                                        </td>
                                        <td>{{ $item->email }}
                                        </td>
                                        <td>{{ $item->phone }}
                                        </td>
                                        <td>{{ $item->message }}
                                        </td>
                                        <td>{{ $item->country }}
                                        </td>
                                        <td>
                                                                                       
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/contact_queries', $item->id],
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