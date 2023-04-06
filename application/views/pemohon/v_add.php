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
							<h3> Tambah Data Pemohon </h3>
						</div>

						<form action="<?php echo base_url() ?>pemohon/insert" method="post">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nik Pemohon :</label>
                                    <input type="text" class="form-control" id="nik_pemohon" name="nik_pemohon">
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Nama Pemohon :</label>
                                    <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon">
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Alamat Pemohon :</label>
                                    <input type="text" class="form-control" id="alamat_pemohon" name="alamat_pemohon">
                                </div>

								
								<div class="form-group">
                        			<label for="exampleInputEmail1">Nama Provinsi :</label>
                        			<select id="id_provinsi" name="id_provinsi" class="form-control" required>
										<option value="">- Pilih -</option>
										<?php foreach($provinsi as $row){ ?>
										<option value="<?= $row->id_provinsi ?>"><?= $row->nama_provinsi ?></option>
										<?php } ?>
									</select>
                    			</div>

								<div class="form-group">
                      				<label>NAma Kabkota :</label>
                      				<select class="form-control" id="id_kabkota" name="id_kabkota">
                        			<option>Pilih</option>
                      				</select>
                    			</div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">No Telp Pemohon :</label>
                                    <input type="number" class="form-control" id="notlp_pemohon" name="notlp_pemohon">
                                </div>

								<div class="form-group">
                      				<label>Jenis Kelamin Pemohon :</label>
                      				<select class="form-control" id="jeniskelamin_pemohon" name="jeniskelamin_pemohon">
                        				<option>Pilih</option>
                        				<option>Laki-laki</option>
                        				<option>Perempuan</option>
                      				</select>
                    			</div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Tempat Lahir Pemohon :</label>
                                    <input type="text" class="form-control" id="tempatlahir_pemohon" name="tempatlahir_pemohon">
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Lahir Pemohon :</label>
                                    <input type="date" class="form-control" id="tgllahir_pemohon" name="tgllahir_pemohon">
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Email Pemohon :</label>
                                    <input type="text" class="form-control" id="email_pemohon" name="email_pemohon">
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Password Pemohon :</label>
                                    <input type="text" class="form-control" id="password_pemohon" name="password_pemohon">
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