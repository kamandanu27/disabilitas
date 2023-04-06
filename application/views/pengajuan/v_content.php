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
							<a href="<?= base_url() ?>pengajuan/add" class="btn btn-primary btn-sm btntambahkriteria"><i class="fa fa-plus"></i> Tambah Data</a>
						</div>

						<div class="card-body">
							<?php
							echo validation_errors('<div class="alert alert-danger alert-dismissible">','</div>');
							if ($this->session->flashdata('success'))
							{
								echo '<div class="alert alert-success alert-dismissible " role="alert">';
								echo $this->session->flashdata('success');
								echo '</div>';
							}
							if ($this->session->flashdata('error'))
							{
								echo '<div class="alert alert-danger alert-dismissible " role="alert">';
								echo $this->session->flashdata('error');
								echo '</div>';
							}
							?>

							<table id="example1" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Tanggal pengajuan </th>
										<th>Nama Pemohon </th>
										<th>Nama Alat Bantu</th>
										<th>Keterangan Pengajuan</th>
										<th>Status pengajuan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody style="font-weight: 500;">
                                    <?php $no=1; foreach($tabel as $row){ ?>
                                        <tr>
											<td><?= $no++ ?></td>
											<td><?= $row->tgl_pengajuan ?></td>
											<td><?= $row->nama_pemohon ?></td>
											<td><?= $row->nama_alatbantu ?></td>
											<td><?= $row->keterangan_pengajuan ?></td>
											<td><?= $row->status_pengajuan ?></td>
											
											<td>

												<a href="<?= base_url(); ?>pengajuan/edit/<?= $row->id_pengajuan ?>" type="submit" class="btn btn-warning" ><i class="icofont icofont-edit"></i> Edit</a>


												<a type="submit" class="btn btn-danger btnhapus" data-id="<?= $row->id_pengajuan ?>" style="color: white;"><i class="icofont icofont-trash"></i> Hapus</a>

											</td>
                                        </tr>
                                    <?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>