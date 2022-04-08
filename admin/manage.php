<?php if (!isset($_SESSION['username']) || empty($_SESSION['username']))
    header('Location:../index.php');
?>
<div class="container-fluid">
    <div class="row p-3">
        <div class="col">
            <h1>ADMIN</h1>
        </div>
        <div class="col text-end my-auto">
            <a class="btn btn-outline-dark" href="logout.php">Logout</a>
        </div>
    </div>
    <div class="row text-center">
        <div class="col">
            <h2>POSTS</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12" id="manage-table-post-editOK">
            <div class="alert alert-success" role="alert">Post editado com sucesso</div></div>
        <div class="col-12" id="manage-table-post-editErro">
            <div class="alert alert-danger" role="alert">Erro ao editar post</div></div>
        <div class="col-12" id="manage-table-post-removeOK">
            <div class="alert alert-success" role="alert">Post removido com sucesso</div></div>
        <div class="col-12" id="manage-table-post-removeErro">
            <div class="alert alert-danger" role="alert">Erro ao eliminar post</div></div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <?php include('../db/manageListPost.php');?>
        </div>
    </div>
</div>