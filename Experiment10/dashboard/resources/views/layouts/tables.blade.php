@extends('admin.tables')

@section('title')
	Dashboard
@endsection
@section('content')
@if(Session::get('status'))
    <div class="alert alert-success" role="alert">
      	{{Session::get('status')}}   
    </div>
    @endif
<div class="card-header scroll" style="margin:4px, 4px; 
                padding:4px; 
                overflow-x: auto; 
                overflow-y: auto; 
                text-align:justify; ">
	<h4 class="card-title">
		Subscribers
	</h4>
</div>
<div class="card-body">
<table class="table">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email Id</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($users as $user)
		<tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td>
				<form action="/role-delete/{{ $user->id }}" method="POST">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<button type="submit" class="btn btn-danger">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
	
</div>
@endsection


@section('scripts')

@endsection