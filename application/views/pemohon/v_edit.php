	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Pemohon</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">Pemohon</li>
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
							<h3> Edit Data Pemohon </h3>
						</div>

						<form action="<?php echo base_url() ?>pemohon/update" method="post">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nik Pemohon :</label>
                                    <input type="text" class="form-control" id="nik_pemohon" name="nik_pemohon" value="<?= $detail['nik_pemohon'] ?>">
									<input type="hidden" class="form-control" id="id_pemohon" name="id_pemohon" value="<?= $detail ['id_pemohon']?>">
								</div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Nama Pemohon :</label>
                                    <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" value="<?= $detail['nama_pemohon'] ?>">
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Alamat pemohon</label>
                                    <input type="text" class="form-control" id="alamat_pemohon" name="alamat_pemohon" value="<?= $detail['alamat_pemohon'] ?>">
                                </div>

								<div class="form-group">
                        			<label for="exampleInputEmail1">Nama Provinsi :</label>
                        			<select id="id_provinsi" name="id_provinsi" class="form-control" required>
										<option value="<?= $detail['id_provinsi'] ?>"><?= $detail['nama_provinsi'] ?></option>
										<option value="">- Pilih -</option>
										<?php foreach($provinsi as $row){ ?>
										<option value="<?= $row->id_provinsi ?>"><?= $row->nama_provinsi ?></option>
										<?php } ?>
									</select>
                    			</div>
								<div class="form-group">
                      				<label>NAma Kabkota :</label>
                      				<select class="form-control" id="id_kabkota" name="id_kabkota">
                        			<option value="<?= $detail['id_kabkota'] ?>"><?= $detail['nama_kabkota'] ?></option>
                        			</select>
                    			</div>
								
								<div class="form-group">
                                    <label for="exampleInputEmail1">No Telp pemohon :</label>
                                    <input type="number" class="form-control" id="notlp_pemohon" name="notlp_pemohon" value="<?= $detail['notlp_pemohon'] ?>">
                                </div>

								<div class="form-group">
                      				<label>Jenis Kelamin Pemohon :</label>
                      				<select class="form-control" id="jeniskelamin_pemohon" name="jeniskelamin_pemohon">
                        				<option value="<?= $detail['jeniskelamin_pemohon'] ?>"><?= $detail['jeniskelamin_pemohon'] ?></option>
                        				<option>Laki-laki</option>
                        				<option>Perempuan</option>
                      				</select>
                    			</div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Tempat Lahir Pemohon :</label>
                                    <input type="text" class="form-control" id="tempatlahir_pemohon" name="tempatlahir_pemohon" value="<?= $detail['tempatlahir_pemohon'] ?>">
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Lahir Pemohon :</label>
                                    <input type="date" class="form-control" id="tgllahir_pemohon" name="tgllahir_pemohon" value="<?= $detail['tgllahir_pemohon'] ?>">
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Email pemohon :</label>
                                    <input type="text" class="form-control" id="email_pemohon" name="email_pemohon" value="<?= $detail['email_pemohon'] ?>">
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Password pemohon :</label>
                                    <input type="text" class="form-control" id="password_pemohon" name="password_pemohon" value="<?= $detail['password_pemohon'] ?>">
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