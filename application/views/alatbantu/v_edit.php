	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Alat Bantu</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">Alat Bantu</li>
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
							<h3> Edit Data Alat Bantu </h3>
						</div>

						<form action="<?php echo base_url() ?>alatbantu/update" method="post">
                            <div class="card-body">

                                
								<div class="form-group">
                                    <label for="exampleInputEmail1">Nama Alat Bantu :</label>
                                    <input type="text" class="form-control" id="nama_alatbantu" name="nama_alatbantu" value="<?= $detail['nama_alatbantu'] ?>">
									<input type="hidden" class="form-control" id="id_alatbantu" name="id_alatbantu" value="<?= $detail ['id_alatbantu']?>">
									
                                </div>

                                

                            </div>

                            <div class="card-footer">
                                <button alatbantu="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</section>