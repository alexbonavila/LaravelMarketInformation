@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<table class="table">
						<caption>Empreses de la NASDAQ</caption>
						<thead>
						<tr>
							<th>#</th>
							<th>Simbol</th>
							<th>Empresa</th>
							<th>Mercat</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection
