	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Provinsi</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">Provinsi</li>
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
							<h3> Edit Data Provinsi </h3>
						</div>

						<form action="<?php echo base_url() ?>provinsi/update" method="post">
                            <div class="card-body">

                                
								<div class="form-group">
                                    <label for="exampleInputEmail1">Nama Provinsi :</label>
                                    <input type="text" class="form-control" id="nama_provinsi" name="nama_provinsi" value="<?= $detail['nama_provinsi'] ?>">
									<input type="hidden" class="form-control" id="id_provinsi" name="id_provinsi" value="<?= $detail ['id_provinsi']?>">
									
                                </div>

                                

                            </div>

                            <div class="card-footer">
                                <button provinsi="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</section>