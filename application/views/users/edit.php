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
                <li class="breadcrumb-item"><a href=" <?php echo base_url('users') ?> ">Usuários</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $title ?></li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!-- <h6 class="m-0 font-weight-bold text-primary">Usuários Cadastrados</h6> -->
                <a title="Voltar" href=" <?php echo base_url('/users') ?> " class="btn btn-success btn-sm float-right"> <i class="fas fa-arrow-left"> </i> Voltar</a>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="first-name">Nome</label>
                            <input type="text" class="form-control" name="first-name" placeholder="Nome do usuário" value=" <?php echo $user->first_name ?> ">
                            <?php echo form_error('first-name', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>

                        <div class="col-md-4">
                            <label for="last-name">Sobrenome</label>
                            <input type="text" class="form-control" name="last-name" placeholder="Sobrenome do usuário" value=" <?php echo $user->last_name ?> ">
                            <?php echo form_error('last-name', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>

                        <div class="col-md-4">
                            <label for="email">Email (Login)</label>
                            <input type="email" class="form-control" name="email" placeholder="Email do usuário" value=" <?php echo $user->email ?> ">
                            <?php echo form_error('email', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="username">Usuário</label>
                            <input type="text" class="form-control" name="username" placeholder="Usuário" value=" <?php echo $user->username ?> ">
                            <?php echo form_error('username', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>

                        <div class="col-md-4">
                            <label for="active">Ativo</label>
                            <select class="form-control" name="active" id="">
                                <option value="0" <?php echo $user->active == 1 ? 'selected' : '' ?>>Não</option>
                                <option value="1" <?php echo $user->active == 1 ? 'selected' : '' ?>>Sim</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="user-profile">Perfil de acesso</label>
                            <select class="form-control" name="user-profile" id="">
                                <option value="1" <?php echo $user_profile->id == 1 ? 'selected' : '' ?>>Administrador</option>
                                <option value="2" <?php echo $user_profile->id == 2 ? 'selected' : '' ?>>Vendedor</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="password">Senha</label>
                            <input type="password" class="form-control" name="password" placeholder="Edite a senha" value="">
                            <?php echo form_error('password', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>

                        <div class="col-md-6">
                            <label for="confirm-password">Confirme sua senha</label>
                            <input type="password" class="form-control" name="confirm-password" placeholder="Confirme a senha" value="">
                            <?php echo form_error('confirm-password', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>

                        <input type="hidden" name="user-id" value="<?php echo $user->id ?>">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Salvar</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->