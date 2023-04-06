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
							<a href="<?= base_url() ?>pemohon/add" class="btn btn-primary btn-sm btntambahkriteria"><i class="fa fa-plus"></i> Tambah Data </a>
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
										<th>Nik Pemohon</th>
										<th>Nama Pemohon</th>
										<th>Alamat Pemohon</th>
										<th>Provinsi </th>
										<th>Kabkota </th>
										<th>No Telp Pemohon</th>
										<th>Jenis Kelamin Pemohon</th>
										<th>Tempat Lahir Pemohon</th>
										<th>Tanggal Lahir Pemohon</th>
										<th>Email Pemohon</th>
										<th>Password Pemohon</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody style="font-weight: 500;">
                                    <?php $no=1; foreach($tabel as $row){ ?>
                                        <tr>
											<td><?= $no++ ?></td>
											<td><?= $row->nik_pemohon ?></td>
											<td><?= $row->nama_pemohon ?></td>
											<td><?= $row->alamat_pemohon ?></td>
											<td><?= $row->nama_provinsi ?></td>
											<td><?= $row->nama_kabkota ?></td>
											<td><?= $row->notlp_pemohon ?></td>
											<td><?= $row->jeniskelamin_pemohon ?></td>
											<td><?= $row->tempatlahir_pemohon ?></td>
											<td><?= $row->tgllahir_pemohon ?></td>
											<td><?= $row->email_pemohon ?></td>
											<td><?= $row->password_pemohon ?></td>
											
											<td>

												<a href="<?= base_url(); ?>pemohon/edit/<?= $row->id_pemohon ?>" type="submit" class="btn btn-warning" ><i class="icofont icofont-edit"></i> Edit</a>


												<a type="submit" class="btn btn-danger btnhapus" data-id="<?= $row->id_pemohon ?>" style="color: white;"><i class="icofont icofont-trash"></i> Hapus</a>

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