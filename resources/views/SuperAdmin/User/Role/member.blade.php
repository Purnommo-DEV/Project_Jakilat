<div class="table-responsive">
	<table class="display table table-striped table-hover" >
		<thead>
			<tr>
				<th>Name</th>
				<th>Wilayah</th>
				<th>Role</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($userMember as $item)
			<tr>
				@if ($item->user->role == 'Member')
					<td>{{ $item->user->name }}</td>
					<td>{{ $item->wilayah->name }}</td>
					<td>{{ $item->user->role }}</td>
					<td>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailModal-{{ $item->id }}">Detail</button>
				@else
				<label for="">Tidak di Temukan</label>
				@endif
			</tr>
			<div class="modal fade" id="detailModal-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
				  <div class="modal-content">
					<div class="modal-header">
					  <h3 class="modal-title" id="exampleModalLabel">Biodata Member</h3>
					  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					  </button>
					</div>
					<div class="modal-body">
							  <img src="../member/foto_diri/{{ $item->foto_diri }}" class="img-thumbnail" alt="">
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
						  <div class="form-group">
							  <label class="control-label">
								  Keahlian
							  </label> 
							  <p class="form-control-static">{{ $item->keahlian }}</p> 
						  </div>
						  <div class="form-group">
							  <label class="control-label">
								  Harga Jasa
							  </label> 
							  <p class="form-control-static">{{ $item->harga_jasa }}</p> 
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
					  <div class="col-md-6 col-lg-4">
						  <div class="form-group">
							  <label class="control-label">
								  KTP
							  </label>
							  <p class="form-control-static">
								  <a href="/member/ktp/{{ $item->ktp }}" download>Unduh</a>
							  </p>
						  </div>
						  <div class="form-group">
							  <label class="control-label">
								  Berkas Persyaratan
							  </label>
							  <p class="form-control-static">
								  <a href="/member/berkas_persyaratan/{{ $item->berkas_persyaratan }}" download>Unduh</a>
							  </p>
						  </div>
						  <div class="form-group">
							  <label class="control-label">
								  Rekomendasi
							  </label>
							  <p class="form-control-static">
								  <a href="/member/rekomendasi/{{ $item->rekomendasi }}" download>Unduh</a>
							  </p>
						  </div>
						  <div class="form-group">
							  <label class="control-label">
								  Sertifikat
							  </label>
							  <p class="form-control-static">
								  <a href="/member/sertifikat_keterampilan/{{ $item->sertifikat_keterampilan }}" download>Unduh</a>
							  </p> 
						  </div>
					  </div>
					<div class="col-md-6 col-lg-12">
					  <div class="form-group">
						<label class="control-label">
							Deskripsi Diri
						</label> 
						<p class="form-control-static">{{ $item->deskripsi_diri }}</p> 
					</div>
				</div>
				  </div>
					  <div class="row">
						  <div class="col-md-6 col-lg-4">
							  <div class="form-group">
							  <label class="control-label">
								  Status
							  </label> 
							  <p class="form-control-static">
								  @if($item->status == 1)
								  Aktif
								  @else
								  Tidak Aktif
								  @endif
							  </p> 
							  </div>
						  </div>
						  <div class="col-md-6 col-lg-4">
							  <div class="form-group">
							  <label class="control-label">
								  Siap Terima Orderan
							  </label> 
							  <p class="form-control-static">
								  @if($item->siap_terima_orderan == 1)
								  Ya
								  @else
								  Tidak
								  @endif
							  </p> 
						  </div>
					  </div>
						  <div class="col-md-6 col-lg-4">
							  <div class="form-group">
							  <label class="control-label">
								  Telah Terima Pekerjaan
							  </label> 
							  <p class="form-control-static">
								  @if($item->telah_terima_orderan == 1)
								  Sudah
								  @else
								  Belum
								  @endif
							  </p> 
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
