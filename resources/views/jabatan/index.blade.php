@extends('layouts.app')
@section('content')

<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-default">
		<div class="panel-head">
			<div class="table-responsive table-border">
			<a href="{{url('jabatan/create')}}" class="btn btn-primary">Tambah bang</a>
				<table class="table">
					<thead>
						<tr class="success">
							<th>Kode jabatan</th>
							<th>Nama jabatan</th>
							<th>Besaran Uang</th>
							<th colspan="3"><center>Action</center></th>
						</tr>
					</thead>
					<tbody>
					@foreach($jabatan as $data)
						<tr>
							<td>{{$data->kode_jabatan}}</td>
							<td>{{$data->nama_jabatan}}</td>
							<td>{{$data->besaran_uang}}</td>
							<td align="right">
                                    <a href="{{route('jabatan.edit', $data->id)}}" class="btn btn-primary">Edit</a>
                                </td>

                                <td >
                                  <a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"></i>Hapus</a>
                                  @include('modals.delete', [
                                    'url' => route('jabatan.destroy', $data->id),
                                    'model' => $data
                                  ])
                                </td>
						</tr>
					@endforeach		
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection