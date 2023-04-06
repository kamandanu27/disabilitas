	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Pengajuan</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">Pengajuan</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3> Tambah Data Pengajuan </h3>
						</div>

						<form action="<?php echo base_url() ?>pengajuan/insert" method="post">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Pengajuan :</label>
                                    <input type="date" class="form-control" id="tgl_pengajuan" name="tgl_pengajuan">
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Nama Pemohon :</label>
                                    <select id="id_pemohon" name="id_pemohon" class="form-control" required>
										<option value="">- Pilih -</option>
										<?php foreach($pemohon as $row){ ?>
											<option value="<?= $row->id_pemohon ?>"><?= $row->nama_pemohon ?></option>
										<?php } ?>
									</select>
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Nama Alat Bantu :</label>
                                    <select id="id_alatbantu" name="id_alatbantu" class="form-control" required>
										<option value="">- Pilih -</option>
										<?php foreach($alatbantu as $row){ ?>
											<option value="<?= $row->id_alatbantu ?>"><?= $row->nama_alatbantu ?></option>
										<?php } ?>
									</select>
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Keterangan Pengajuan :</label>
                                    <input type="text" class="form-control" id="keterangan_pengajuan" name="keterangan_pengajuan">
                                </div>

								
								

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</section>