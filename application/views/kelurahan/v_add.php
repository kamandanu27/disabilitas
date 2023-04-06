	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Kelurahan</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">Kelurahan</li>
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
							<h3> Tambah Data Kelurahan </h3>
						</div>

						<form action="<?php echo base_url() ?>kelurahan/insert" method="post">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Kelurahan :</label>
                                    <input kelurahan="text" class="form-control" id="nama_kelurahan" name="nama_kelurahan">
                                </div>

								<div class="form-group">
                        			<label for="exampleInputEmail1">Nama Kecamatan :</label>
                        			<select id="id_kecamatan" name="id_kecamatan" class="form-control" required>
									<option value="">- Pilih -</option>
									<?php foreach($kecamatan as $row){ ?>
									<option value="<?= $row->id_kecamatan ?>"><?= $row->nama_kecamatan ?></option>
									<?php } ?>
									</select>
                    			</div>


                            </div>

                            <div class="card-footer">
                                <button kelurahan="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</section>