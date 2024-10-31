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
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-users"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Users</a></li>
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
				            <div class="col-md-12">
				                <div class="card">
				                    <div class="card-header">
				                        <h4>Users Data</h4>
				                        <button type="button" class="btn" style="background-color: #198754;border-radius: 20px;color: white;" data-bs-toggle="modal" data-bs-target="#exampleModaladdon">
												Add New User
										</button>
				                    </div>
				                    <div class="card-body table-border-style">
				                        <div class="table-responsive">
				                            <table class="table table-hover">
				                                <thead>
				                                    <tr>
				                                        <th>#</th>
				                                        <th>Username</th>
				                                        <th>Role</th>
				                                        <th>Status</th>
				                                        <th>Action</th>
				                                    </tr>
				                                </thead>
				                                <tbody>
				                                	<?php 
				                                	$no = 1;
				                                	foreach ($users as $d): ?>
					                                	<tr>
					                                        <td><?= $no++ ?></td>
					                                        <td><?= $d->username ?></td>
					                                        <td><?= $d->role ?></td>
					                                        <td>
					                                        	<?php if ($d->is_active == 1): ?>
					                                        		<label style="background-color: #198754;border-radius: 20px;color: white;padding: 10px;">Active</label>
					                                        	<?php else: ?>
					                                        		<label style="background-color: red;border-radius: 20px;color: white;padding: 10px;">Inactive</label>
					                                        	<?php endif ?>
					                                        </td>
					                                        <td>
					                                        	<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModaledituser<?= $d->id?>"><i class="fas fa-pen" style="color: orange;font-size: 20px;"></i></a>
					                                        	<a href="<?= base_url() ?>index.php/Admin/deleteuser/<?= $d->id ?>"><i class="fas fa-trash" style="color: red;font-size: 20px;"></i></a>
					                                        </td>
					                                    </tr>
				                                	<?php endforeach ?>
				                                </tbody>
				                            </table>
				                        </div>
				                        <?= $links2 ?>
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


<div class="modal fade" id="exampleModaladdon" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content"  style="border-radius: 20px;">
      <div class="modal-header" style="background-color: #198754;border-radius: 20px;">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;">Add New User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<form action="<?= base_url('index.php/admin/create_users') ?>" method="POST">
	        <div class="mb-3">
			  <label for="formFile" class="form-label">Username <span style="color: red;">*</span></label>
			  <input type="text" name="username" class="form-control" required="">
			</div>
			<div class="mb-3">
			  <label for="formFile" class="form-label">Password <span style="color: red;">*</span></label>
			  <input type="password" name="password" class="form-control" required="">
			</div>
			<div class="mb-3">
			  <label for="formFile" class="form-label">Role <span style="color: red;">*</span></label>
			  <select class="form-control" name="role" required="">
			  	<option value="admin">Admin</option>
			  	<option value="operation">Operation</option>
			  	<option value="marketing">Marketing</option>
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

<?php foreach ($users as $o): ?>
	<div class="modal fade" id="exampleModaledituser<?= $o->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content"  style="border-radius: 20px;">
      			<div class="modal-header" style="background-color: #198754;border-radius: 20px;">
        			<h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;">Edit User</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('index.php/admin/update_user/<?= $o->id ?>') ?>" method="POST">
						<input type="hidden" name="id" value="<?= $o->id ?>">
						<div class="mb-3">
							<label for="formFile" class="form-label">Username <span style="color: red;">*</span></label>
							<input type="text" name="username" class="form-control" value="<?= $o->username ?>" required>
						</div>
						<div class="mb-3">
							<label for="formFile" class="form-label">Password</label>
							  <input type="password" name="password" class="form-control" >
							<span style="color: red">*If you do not wish to change the password, leave the password field blank.</span>
						</div>
						<div class="mb-3">
							<label for="formFile" class="form-label">Role <span style="color: red;">*</span></label>
							<select class="form-control" name="role" required="">
								<option value="admin" <?= $o->role == 'admin' ? 'selected' : '' ?>>Admin</option>
								<option value="operation" <?= $o->role == 'operation' ? 'selected' : '' ?>>Operation</option>
								<option value="marketing" <?= $o->role == 'marketing' ? 'selected' : '' ?>>Marketing</option>
							</select>
						</div>
						<div class="mb-3">
							<label for="formFile" class="form-label">Status</label>
							<select class="form-control" name="status">
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
<?php endforeach ?> -->

   
 <?php $this->load->view('admin/layout/footer') ?>