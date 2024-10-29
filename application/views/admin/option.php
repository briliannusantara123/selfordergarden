<?php $this->load->view('admin/layout/header') ?>

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Master Data</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-file-text"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Option & Add On</a></li>
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
				                    			<h4>Option Data</h4>
				                    		</div>
				                    		<div class="col-12">
				                    			<button type="button" class="btn" style="background-color: #198754;border-radius: 20px;color: white;" data-bs-toggle="modal" data-bs-target="#exampleModaloption">
												  Add New Option
												</button>
				                    		</div>
				                    	</div>
				            
				                    </div>
				                    <div class="card-body table-border-style">
				                        <div class="table-responsive">
				                            <table class="table table-hover">
				                                <thead>
				                                    <tr>
				                                        <th>#</th>
				                                        <th>Item Name</th>
				                                        <th>Option</th>
				                                        <th>Status</th>
				                                        <th>Action</th>
				                                    </tr>
				                                </thead>
				                                <tbody>
				                                	<?php 
				                                	$no = 1;
				                                	foreach ($option as $d): ?>
					                                	<tr>
					                                        <td><?= $no++ ?></td>
					                                        <td><?= $d->dsc ?></td>
					                                        <td><?= $d->description ?></td>
					                                        <td>
					                                        	<?php if ($d->is_active == 1): ?>
					                                        		<label style="background-color: #198754;border-radius: 20px;color: white;padding: 10px;">Active</label>
					                                        	<?php else: ?>
					                                        		<label style="background-color: red;border-radius: 20px;color: white;padding: 10px;">Inactive</label>
					                                        	<?php endif ?>
					                                        </td>
					                                        <td>
					                                        	<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModaleditoption<?= $d->id?>"><i class="fas fa-pen" style="color: orange;font-size: 20px;"></i></a>
					                                        	<a href="<?= base_url() ?>index.php/Admin/delete/<?= $d->id ?>"><i class="fas fa-trash" style="color: red;font-size: 20px;"></i></a>
					                                        </td>
					                                    </tr>
				                                	<?php endforeach ?>
				                                </tbody>
				                            </table>
				                             <div>
											    <?= $links1 ?>
											 </div>
				                        </div>
				                    </div>
				                </div>
				            </div>
				            <div class="col-md-6">
				                <div class="card">
				                    <div class="card-header">
				                        <h4>AddOn Data</h4>
				                        <button type="button" class="btn" style="background-color: #198754;border-radius: 20px;color: white;" data-bs-toggle="modal" data-bs-target="#exampleModaladdon">
												Add New Addon
										</button>
				                    </div>
				                    <div class="card-body table-border-style">
				                        <div class="table-responsive">
				                            <table class="table table-hover">
				                                <thead>
				                                    <tr>
				                                        <th>#</th>
				                                        <th>Item Name</th>
				                                        <th>Addon</th>
				                                        <th>Status</th>
				                                        <th>Action</th>
				                                    </tr>
				                                </thead>
				                                <tbody>
				                                	<?php 
				                                	$no = 1;
				                                	foreach ($addon as $d): ?>
					                                	<tr>
					                                        <td><?= $no++ ?></td>
					                                        <td><?= $d->dsc ?></td>
					                                        <td><?= $d->adsc ?></td>
					                                        <td>
					                                        	<?php if ($d->is_active == 1): ?>
					                                        		<label style="background-color: #198754;border-radius: 20px;color: white;padding: 10px;">Active</label>
					                                        	<?php else: ?>
					                                        		<label style="background-color: red;border-radius: 20px;color: white;padding: 10px;">Inactive</label>
					                                        	<?php endif ?>
					                                        </td>
					                                        <td>
					                                        	<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModaleditaddon<?= $d->id?>"><i class="fas fa-pen" style="color: orange;font-size: 20px;"></i></a>
					                                        	<a href="<?= base_url() ?>index.php/Admin/delete/<?= $d->id ?>"><i class="fas fa-trash" style="color: red;font-size: 20px;"></i></a>
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
<div class="modal fade" id="exampleModaloption" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Option</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<form action="<?= base_url('index.php/admin/create_option') ?>" method="POST">
	        <div class="mb-3">
			  <label for="formFile" class="form-label">Item Name</label>
			  <select class="form-control" name="no">
			  	<?php foreach ($item as $i): ?>
			  		<option value="<?= $i->no ?>"><?= $i->description ?></option>
			  	<?php endforeach ?>
			  </select>
			</div>
			<div class="mb-3">
			  <label for="formFile" class="form-label">Option</label>
			  <input class="form-control" type="text" name="option" required="">
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

<?php foreach ($option as $o): ?>
	<div class="modal fade" id="exampleModaleditoption<?= $o->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Edit Option</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<!-- Form untuk melakukan edit, actionnya diarahkan ke fungsi update -->
					<form action="<?= base_url('index.php/admin/update/<?= $o->id ?>') ?>" method="POST">
						<input type="hidden" name="id" value="<?= $o->id ?>">
						<div class="mb-3">
							<label for="formFile" class="form-label">Item Name</label>
							<select class="form-control" name="no">
								<?php foreach ($item as $i): ?>
									<option value="<?= $i->no ?>" <?= $o->item_code == $i->no ? 'selected' : '' ?>><?= $i->description ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="mb-3">
							<label for="formFile" class="form-label">Option</label>
							<input class="form-control" type="text" name="option" value="<?= $o->description ?>" required="">
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


<div class="modal fade" id="exampleModaladdon" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Addon</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<form action="<?= base_url('index.php/admin/create_addon') ?>" method="POST">
	        <div class="mb-3">
			  <label for="formFile" class="form-label">Item Name</label>
			  <select class="form-control" name="no">
			  	<?php foreach ($item as $i): ?>
			  		<option value="<?= $i->no ?>"><?= $i->description ?></option>
			  	<?php endforeach ?>
			  </select>
			</div>
			<div class="mb-3">
			  <label for="formFile" class="form-label">Add On</label>
			  <select class="form-control" name="addon">
			  	<?php foreach ($item as $i): ?>
			  		<option value="<?= $i->no ?>"><?= $i->description ?></option>
			  	<?php endforeach ?>
			  </select>
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

<?php foreach ($addon as $o): ?>
	<div class="modal fade" id="exampleModaleditaddon<?= $o->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Edit Addon</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<!-- Form untuk melakukan edit, actionnya diarahkan ke fungsi update -->
					<form action="<?= base_url('index.php/admin/update/<?= $o->id ?>') ?>" method="POST">
						<input type="hidden" name="id" value="<?= $o->id ?>">
						<div class="mb-3">
							<label for="formFile" class="form-label">Item Name</label>
							<select class="form-control" name="no">
								<?php foreach ($item as $i): ?>
									<option value="<?= $i->no ?>" <?= $o->item_code == $i->no ? 'selected' : '' ?>><?= $i->description ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="mb-3">
							<label for="formFile" class="form-label">Add On</label>
							  <select class="form-control" name="option">
							  	<?php foreach ($item as $i): ?>
							  		<option value="<?= $i->no ?>" <?= $o->description == $i->no ? 'selected' : '' ?>><?= $i->description ?></option>
							  	<?php endforeach ?>
							  </select>
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