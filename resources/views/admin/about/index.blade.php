@extends('layouts.backend')
@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')
            <div class="col-md-9">
            	<div class="card">
            		<div class="card-header">
            			ABOUT PAGE HANDLER
            		</div>
            		<div class="card-body">

            			 @include('admin.about.form', ['formMode' => 'edit'])
                        
                    
            		</div>
            	</div>
            	
            </div>
        </div>
     </div>
@endsection