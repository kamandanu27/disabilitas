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
							<h3> Edit Data Pengajuan </h3>
						</div>

						<form action="<?php echo base_url() ?>pengajuan/update" method="post">
                            <div class="card-body">
								
								<div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal pengajuan :</label>
                                    <input type="date" class="form-control" id="tgl_pengajuan" name="tgl_pengajuan" value="<?= $detail['tgl_pengajuan'] ?>">
									<input type="hidden" class="form-control" id="id_pengajuan" name="id_pengajuan" value="<?= $detail ['id_pengajuan']?>">
								</div>

								<?php if($this->session->userdata('level') == 'Admin'){ ?>
								<div class="form-group">
                      				<label for="exampleInputEmail1">Nama Pemohon :</label>
                      				<select id="id_pemohon" name="id_pemohon" class="form-control" required>
										<option value="<?= $detail['id_pemohon'] ?>"><?= $detail['nama_pemohon'] ?></option>
									    <option value="">- Pilih -</option>
										<?php foreach($pemohon as $row){ 
										if($pemohon == null){
												$disabled = '';
											}else{
												if(date('Y-m-d') < date('Y-m-d', strtotime('+2 year', strtotime($detail['tgl_pengajuan'])))){
													$disabled = 'disabled';
												}else{
													$disabled = '';
												}
											}	
										?>
										<option value="<?= $row->id_pemohon ?>" <?= $disabled ?>><?= $row->nama_pemohon ?></option>
										<?php } ?>
									</select>
                    			</div>
								<?php }else{ ?>
								<div class="form-group">
									<label for="exampleInputEmail1">Nama Pemohon :</label>
									<select class="form-control" disabled>
										<option value="">- Pilih -</option>
										<?php foreach($pemohon as $row){ ?>
											<option value="<?= $row->id_pemohon ?>" <?php if($row->id_pemohon == $this->session->userdata('id')) { ?> selected="selected"<?php } ?> ><?= $row->nama_pemohon ?></option>
										<?php } ?>
									</select>
									 <input type="hidden" class="form-control" id="id_pemohon" name="id_pemohon" value="<?= $this->session->userdata('id') ?>">
								</div>
								<?php } ?>

								<div class="form-group">
                      				<label for="exampleInputEmail1">Nama Alat Bantu :</label>
                      				<select id="id_alatbantu" name="id_alatbantu" class="form-control" required>
										<option value="<?= $detail['id_alatbantu'] ?>"><?= $detail['nama_alatbantu'] ?></option>
									    <option value="">- Pilih -</option>
										<?php foreach($alatbantu as $row){ ?>
										<option value="<?= $row->id_alatbantu ?>"><?= $row->nama_alatbantu ?></option>
										<?php } ?>
									</select>
                    			</div>

                    			<div class="form-group">
                                    <label for="exampleInputEmail1">Keterangan Pengajuan :</label>
                                    <input type="text" class="form-control" id="keterangan_pengajuan" name="keterangan_pengajuan" value="<?= $detail['keterangan_pengajuan'] ?>">
                                </div>

								<?php if($this->session->userdata('level') == 'Admin'){ ?>
								<div class="form-group">
                      				<label>Status Pengajuan :</label>
                      				<select class="form-control" id="status_pengajuan" name="status_pengajuan">
                        				<option value="<?= $detail['status_pengajuan'] ?>"><?= $detail['status_pengajuan'] ?></option>
                        				<option value="Diterima">Diterima</option>
                        				<option value="Ditolak">Ditolak</option>
                      				</select>
                    			</div>
								<?php }else{ ?>
									<input type="hidden" class="form-control" id="status_pengajuan" name="status_pengajuan" value="<?= $detail['status_pengajuan'] ?>">
								<?php } ?>



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