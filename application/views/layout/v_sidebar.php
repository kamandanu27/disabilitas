
<div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
         <?php if($this->session->userdata('level') == 'Admin'){ ?>
            <img src="<?= base_url() ?>public/image/upload/<?= $this->session->userdata('foto') ?>" class="img-circle elevation-2" alt="User Image">
        <?php }else{ ?>
            <img src="<?= base_url() ?>public/image/upload/pemohon/<?= $this->session->userdata('foto') ?>" class="img-circle elevation-2" alt="User Image">
        <?php } ?>
    </div>
    <div class="info">
        <a href="#" class="d-block"><?= $this->session->userdata('nama') ?></a>
    </div>
    </div>

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">

            <li class="nav-item active">
                <a href="<?= base_url() ?>dashboard" class="nav-link <?php if($this->uri->segment(1)=="dashboard"){echo 'active';}?>">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p> Dashboard </p>
                </a>
            </li>
            <?php if($this->session->userdata('level') == 'Admin'){ ?>
            <li class="nav-item">
                <a href="<?= base_url() ?>kecamatan" class="nav-link <?php if($this->uri->segment(1)=="kecamatan"){echo 'active';}?>">
                    <i class="nav-icon fas fa-home"></i>
                    <p> Data Kecamatan </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url() ?>kelurahan" class="nav-link <?php if($this->uri->segment(1)=="kelurahan"){echo 'active';}?>">
                    <i class="nav-icon fas fa-feather icon-home"></i>
                    <p> Data Kelurahan </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url() ?>alatbantu" class="nav-link <?php if($this->uri->segment(1)=="alatbantu"){echo 'active';}?>">
                    <i class="nav-icon fas fa-shopping-cart"></i>
                    <p> Data Alat Bantu </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url() ?>pemohon" class="nav-link <?php if($this->uri->segment(1)=="pemohon"){echo 'active';}?>">
                    <i class="nav-icon fas fa-suitcase"></i>
                    <p> Data Pemohon </p>
                </a>
            </li>
            <?php } ?>
            <li class="nav-item">
                <a href="<?= base_url() ?>pengajuan" class="nav-link <?php if($this->uri->segment(1)=="pengajuan"){echo 'active';}?>">
                    <i class="nav-icon fas fa-list-ul"></i>
                    <p> Data Pengajuan </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url() ?>profil" class="nav-link <?php if($this->uri->segment(1)=="profil"){echo 'active';}?>">
                    <i class="nav-icon fas fa-user"></i>
                    <p> Profil </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url() ?>login/logout" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p> Logout </p>
                </a>
            </li>
        </ul>
    </nav>
</div>