<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<?php $this->load->view('layout/sidebar'); ?>


<!-- Main Content -->
<div id="content">

   <?php $this->load->view('layout/navbar'); ?>


   <!-- Begin Page Content -->
   <div class="container-fluid">

      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href=" <?php echo base_url()?> ">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $title ?></li>
         </ol>
      </nav>

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
         <div class="card-header py-3">
            <!-- <h6 class="m-0 font-weight-bold text-primary">Usuários Cadastrados</h6> -->
            <a title="Cadastrar usuário" href="" class="btn btn-success btn-sm float-right"> <i class="fas fa-user-plus"> </i> Novo</a>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Usuário</th>
                        <th>Login</th>
                        <th>Ativo</th>
                        <th class="text-right no-sort">Ações</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($users as $user) : ?>
                        <tr>
                           <td><?php echo $user->id ?></td>
                           <td><?php echo $user->username ?></td>
                           <td><?php echo $user->email ?></td>
                           <td><?php echo $user->active ?></td>
                           <td class="text-right">
                              <a href="" title="Editar" class="btn btn-sm btn-primary"><i class="fas fa-user-edit"></i></a>
                              <a href="" title="Excluir" class="btn btn-sm btn-danger"><i class="fas fa-user-times"></i></a>
                           </td>
                        </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>

   </div>
   <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->