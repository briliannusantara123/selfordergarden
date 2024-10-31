<?php $this->load->view('admin/layout/header') ?>
<style type="text/css">
    .icon-container {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 25px; /* Sesuaikan dengan ukuran yang diinginkan */
            height: 25px; /* Sesuaikan dengan ukuran yang diinginkan */
            border-radius: 50%; /* Membuat lingkaran */
            background-color: <?= $color->color ?>; /* Warna biru */
            color: white; /* Warna ikon */
        }
</style>

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Settings</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><div class="icon-container"><i class="feather icon-map"></i></div></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Icon</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="margin-left: 20px;"> 
                            <h3><strong>Color settings for the self-order display.</strong></h3>
                        </div>  
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        	<div class="col-md-12">
                                <div class="card">
                                    <form action="<?= base_url() ?>index.php/admin/savecolor/<?= $color->id ?>" method="POST">
                                        <h4 for="exampleColorInput" class="form-label" style="margin-left: 20px;margin-top: 10px;">Color Picker</h4>
                                        <input type="color" name="color" class="form-control form-control-color" id="exampleColorInput" value="<?= $color->color ?>" title="Choose your color">
                                        <button class="btn" style="float: right;margin-right: 20px;background-color: #198754;border-radius: 20px;color: white;margin-bottom: 10px;margin-top: 10px;">Save Color</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
    </div>
</div>
 <?php $this->load->view('admin/layout/footer') ?>