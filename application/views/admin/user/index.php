 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-2 text-gray-800">Kelola User</h1>
     </div>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
         </div>
         <div class="card-body">
             <!-- <a href="#" class="btn btn-default btn-md mb-3" data-toggle="modal" data-target="#modal-default"><i class=" fas fa-plus"></i> Tambah User</a> -->
             <a href="<?= base_url('user/tambah') ?>" class="btn btn-primary btn-icon-split mb-3">
                 <span class="icon text-white-50">
                     <i class="fas fa-plus"></i>
                 </span>
                 <span class="text">Tambah User</span>
             </a>
             <div class="table-responsive">
                 <?php $this->view('messages') ?>

                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>Name</th>
                             <th>Username</th>
                             <th>Level</th>
                             <th>Date Created</th>
                             <th>Action</th>
                         </tr>
                     </thead>

                     <tbody>
                         <?php foreach ($row as $data) { ?>
                             <tr>
                                 <td><?= $data->name ?></td>
                                 <td><?= $data->username ?></td>
                                 <td><?= $data->level == 1 ? 'Admin' : '' ?>
                                     <?= $data->level == 2 ? 'Member' : '' ?></td>
                                 <td><?= date('d F Y', $data->date_created); ?></td>
                                 <td>

                                     <!-- <?= anchor('user/edit/' . $data->id, '<div class="btn btn-outline-primary"><i class="far fa-edit"></i></div>') ?> -->
                                     <a href="<?= site_url('user/edit/' . $data->id) ?>" class="btn btn-outline-primary">
                                         <i class="far fa-edit"></i>
                                     </a>
                                     <span onclick="javascript: return confirm('Anda Yakin ingin menghapus <?php echo $data->username ?> ?')"><?= anchor('user/hapus/' . $data->id, '<div class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></div>') ?></span>


                                 </td>

                             </tr>
                         <?php } ?>

                     </tbody>
                 </table>
             </div>
         </div>
     </div>



 </div>
 <!-- /.container-fluid -->

 <!-- Modal -->
 <div class="modal fade" id="modalUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="<?= base_url('user/registration') ?>" method="POST">
                     <div class="form-group">
                         <label>Full Name</label>
                         <input type="text" class="form-control" placeholder="Full Name" name="name" value="<?= set_value('name') ?>" required id="name">
                         <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>
                     <div class="form-group">
                         <label>Username</label>
                         <input type="text" class="form-control" placeholder="Username" name="username" value="<?= set_value('username') ?>" required>
                         <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>
                     <div class="form-group">
                         <label>Password</label>
                         <input type="password" class="form-control" placeholder="Password" name="password1" id="password1">
                         <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>
                     <div class="form-group">
                         <label>Confirm Password</label>
                         <input type="password" class="form-control" placeholder="Password" name="password2" id="password2">

                     </div>
                     <div class="form-group">
                         <label>Level</label> <br>
                         <input type="radio" name="level" value="1">
                         <label for="">Admin</label>
                         <input type="radio" name="level" value="2">
                         <label for="">Member</label>
                         <?= form_error('level'); ?>
                     </div>

             </div>
             <div class="modal-footer justify-content-between">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary">Simpan</button>
             </div>
             </form>
         </div>
     </div>
 </div>