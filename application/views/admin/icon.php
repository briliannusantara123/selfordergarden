<?php $this->load->view('admin/layout/header') ?>

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
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-file-text"></i></a></li>
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
                            <h3><strong>Icons can be downloaded from <a href="https://www.flaticon.com/" target="_blank">Flaticon</a>, <a href="https://www.freepik.com/" target="_blank">Freepik</a>, and <a href="https://icons8.com/" target="_blank">Icons8</a>.</strong></h3>
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
                        	<div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                    	<div class="row">
                                    		<div class="col-6">
                                    			<h4>Icon Home</h4>
                                    		</div>
                                    		<div class="col-12">
                                    			<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalhome" class="btn btn-success" style="background-color: #198754;border-radius: 20px;color: white;">Add Icon Home</a>
                                    		</div>
                                    	</div>
                            
                                    </div>
                                    <div class="card-body table-border-style">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th><h5>#</h5></th>
                                                        <th><h5>Icon</h5></th>
                                                        <th><h5>Type</h5></th>
                                                        <th><h5>Title</h5></th>
                                                        <th><h5>Status</h5></th>
                                                        <th><h5>Action</h5></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $no = 1;
                                                    foreach ($home as $d): ?>
                                                        <tr>
                                                            <td><h5><?= $no++ ?></h5></td>
                                                            <td><img src="<?= $d->image_path ?>" style="width: 110px; height: 110px; border-radius: 50%;"></td>
                                                            <td><h5><?= $d->type ?></h5></td>
                                                            <td><h5><?= $d->title ?></h5></td>
                                                            <td>
                                                                <?php if ($d->is_active == 1): ?>
                                                                    <label style="background-color: #198754;font-size:15px;border-radius: 20px;color: white;padding: 10px;">Active</label>
                                                                <?php else: ?>
                                                                    <label style="background-color: red;font-size:15px;border-radius: 20px;color: white;padding: 10px;">Inactive</label>
                                                                <?php endif ?>
                                                            </td>
                                                            <td>
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModaledithome<?= $d->id?>"><i class="fas fa-pen" style="color: orange;font-size: 30px;"></i></a>
                                                                <!-- <a href="<?= base_url() ?>index.php/Admin/delete/<?= $d->id ?>"><i class="fas fa-trash" style="color: red;font-size: 20px;"></i></a> -->
                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                             <div>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Icon Footer</h4>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalfooter" class="btn btn-success" style="background-color: #198754;border-radius: 20px;color: white;">Add Icon Footer</a>
                                    </div>
                                    <div class="card-body table-border-style">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th><h5>#</h5></th>
                                                        <th><h5>Icon</h5></th>
                                                        <th><h5>Type</h5></th>
                                                        <th><h5>Title</h5></th>
                                                        <th><h5>Status</h5></th>
                                                        <th><h5>Action</h5></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $no = 1;
                                                    foreach ($footer as $d): ?>
                                                        <tr>
                                                            <td><h5><?= $no++ ?></h5></td>
                                                            <td><img src="<?= $d->image_path ?>" style="width: 110px; height: 110px; border-radius: 50%;"></td>
                                                            <td><h5><?= $d->type ?></h5></td>
                                                            <td><h5><?= $d->title ?></h5></td>
                                                            <td>
                                                                <?php if ($d->is_active == 1): ?>
                                                                    <label style="background-color: #198754;font-size:15px;border-radius: 20px;color: white;padding: 10px;">Active</label>
                                                                <?php else: ?>
                                                                    <label style="background-color: red;font-size:15px;border-radius: 20px;color: white;padding: 10px;">Inactive</label>
                                                                <?php endif ?>
                                                            </td>
                                                            <td>
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModaleditfooter<?= $d->id?>"><i class="fas fa-pen" style="color: orange;font-size: 30px;"></i></a>
                                                                <!-- <a href="<?= base_url() ?>index.php/Admin/delete/<?= $d->id ?>"><i class="fas fa-trash" style="color: red;font-size: 20px;"></i></a> -->
                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
<div class="modal fade" id="exampleModalhome" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Icon Home</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('index.php/admin/create_icon/home') ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="formFile" class="form-label">Title</label>
              <input type="text" name="title" class="form-control">
            </div>
            <!-- <div class="mb-3">
              <label for="formFile" class="form-label">Link</label>
              <input type="text" name="link" class="form-control">
            </div> -->
            <div class="mb-3">
              <label for="formFile" class="form-label">Icon Path</label>
              <input type="file" name="icon" class="form-control" required="">
              <span style="color: red;">The icon size is 512px x 512px.</span>
            </div>
            <div class="mb-3">
              <label for="formFile" class="form-label">Status</label>
              <select class="form-control" name="is_active">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
              </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn" style="background-color: #198754;color: white;">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php foreach ($home as $o): ?>
    <div class="modal fade" id="exampleModaledithome<?= $o->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Icon Home</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form untuk melakukan edit, actionnya diarahkan ke fungsi update -->
                    <form action="<?= base_url('index.php/admin/update_icon/') ?><?= $o->id ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $o->id ?>">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" value="<?= $o->title ?>">
                        </div>
                        <!-- <div class="mb-3">
                            <label for="formFile" class="form-label">Link</label>
                            <input class="form-control" type="text" name="link" value="<?= $o->link ?>" required="">
                        </div> -->
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Icon Path</label>
                            <input class="form-control" type="file" name="icon">
                            <span style="color: red;">The icon size is 512px x 512px.</span>
                            <input class="form-control" type="hidden" name="iconOLD" value="<?= $o->image_path ?>" required="">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Status</label>
                            <select class="form-control" name="is_active">
                                <option value="1" <?= $o->is_active == 1 ? 'selected' : '' ?>>Active</option>
                                <option value="0" <?= $o->is_active == 0 ? 'selected' : '' ?>>Inactive</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn" style="background-color: #198754; color: white;">Submit</button>
                </div>
                    </form>
            </div>
        </div>
    </div>
<?php endforeach ?>


<div class="modal fade" id="exampleModalfooter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Icon Footer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('index.php/admin/create_icon/footer') ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="formFile" class="form-label">Title</label>
              <input type="text" name="title" class="form-control">
            </div>
            <!-- <div class="mb-3">
              <label for="formFile" class="form-label">Link</label>
              <input type="text" name="link" class="form-control">
            </div> -->
            <div class="mb-3">
              <label for="formFile" class="form-label">Icon Path</label>
              <input type="file" name="icon" class="form-control" required="">
              <span style="color: red;">The icon size is 512px x 512px.</span>
            </div>
            <div class="mb-3">
              <label for="formFile" class="form-label">Status</label>
              <select class="form-control" name="is_active">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
              </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn" style="background-color: #198754;color: white;">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php foreach ($footer as $o): ?>
    <div class="modal fade" id="exampleModaleditfooter<?= $o->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Icon Footer</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form untuk melakukan edit, actionnya diarahkan ke fungsi update -->
                    <form action="<?= base_url('index.php/admin/update_icon/') ?><?= $o->id ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $o->id ?>">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" value="<?= $o->title ?>">
                        </div>
                        <!-- <div class="mb-3">
                            <label for="formFile" class="form-label">Link</label>
                            <input class="form-control" type="text" name="link" value="<?= $o->link ?>" required="">
                        </div> -->
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Icon Path</label>
                            <input class="form-control" type="file" name="icon">
                            <span style="color: red;">The icon size is 512px x 512px.</span>
                            <input class="form-control" type="hidden" name="iconOLD" value="<?= $o->image_path ?>" required="">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Status</label>
                            <select class="form-control" name="is_active">
                                <option value="1" <?= $o->is_active == 1 ? 'selected' : '' ?>>Active</option>
                                <option value="0" <?= $o->is_active == 0 ? 'selected' : '' ?>>Inactive</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn" style="background-color: #198754; color: white;">Submit</button>
                </div>
                    </form>
            </div>
        </div>
    </div>
<?php endforeach ?>

   
 <?php $this->load->view('admin/layout/footer') ?>