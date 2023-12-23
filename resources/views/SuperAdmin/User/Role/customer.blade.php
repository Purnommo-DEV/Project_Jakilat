<div class="table-responsive">
	<table class="display table table-striped table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>Wilayah</th>
				<th>Role</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($userCustomer as $item)
			<tr>
				@if ($item->user->role == 'Customer')
				<td>{{ $item->user->name }}</td>
				<td>{{ $item->wilayah->name }}</td>
				<td>{{ $item->user->role }}</td>
				<td>
					<button type="button" class="btn btn-primary" data-toggle="modal"
					data-target="#detailModalCustomer-{{ $item->id }}">Detail</button>
				</td>
				@else
				<label for="">Tidak di Temukan</label>
				@endif
			</tr>
			<div class="modal fade" id="detailModalCustomer-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
				aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title" id="exampleModalLabel">Biodata Customer</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="../customer/foto_diri/{{ $item->foto_diri }}" class="img-thumbnail" alt="">
							<div class="row">
								<div class="col-md-6 col-lg-4">
									<div class="form-group">
										<label class="control-label">
											Nama Lengkap
										</label>
										<p class="form-control-static">{{ $item->user->name }}</p>
									</div>
									<div class="form-group">
										<label class="control-label">
											Email
										</label>
										<p class="form-control-static">{{ $item->user->email }}</p>
									</div>
								</div>
								<div class="col-md-6 col-lg-4">
									<div class="form-group">
										<label class="control-label">
											Kota/Kabupaten
										</label>
										<p class="form-control-static">{{ $item->wilayah->name }}</p>
									</div>
									<div class="form-group">
										<label class="control-label">
											Alamat
										</label>
										<p class="form-control-static">{{ $item->alamat }}</p>
									</div>
									<div class="form-group">
										<label class="control-label">
											Nomor Hp
										</label>
										<p class="form-control-static">{{ $item->nomor_hp }}</p>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</tbody>
	</table>
</div>