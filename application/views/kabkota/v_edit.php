	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Kabkota</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">Kabkota</li>
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
							<h3> Edit Data Kabkota </h3>
						</div>

						<form action="<?php echo base_url() ?>kabkota/update" method="post">
                            <div class="card-body">

                                
								<div class="form-group">
                                    <label for="exampleInputEmail1">Nama Kabkota :</label>
                                    <input type="text" class="form-control" id="nama_kabkota" name="nama_kabkota" value="<?= $detail['nama_kabkota'] ?>">
									<input type="hidden" class="form-control" id="id_kabkota" name="id_kabkota" value="<?= $detail ['id_kabkota']?>">
									
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

                                

                            </div>

                            <div class="card-footer">
                                <button kabkota="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</section>