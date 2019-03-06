@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')
            <div class="col-md-9">
            	<div class="card">
            		<div class="card-header">
            			Portfolio
            		</div>
            		<div class="card-body">
                        <a href="{{ url('/admin/portfolio/create') }}" class="btn btn-success btn-sm" title="Add New Permission">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/portfolio', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
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
                                        <th>Image</th>
                                        <th>Portfolio Title</th>
                                        <th>Tech. Used</th>
                                        <th>Image</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($query as $item)
                                    <tr>
                                        <td>{{ $item->id }}
                                        </td>
                                        <td><img src="{{ $item->img }}" alt="" width="100" height="100">
                                        </td>                                        
                                        <td>{{ $item->title }}
                                        </td>
                                        <td>{{ $item->tech_used }}
                                        </td>
                                       	<td>
                                       		<a href="{{url('admin/portfolio/edit',$item->id)}}" class="btn btn-primary">Edit </a>
                                       	</td>	
                                        <td>

                                                                                       
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/portfolio', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger',
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