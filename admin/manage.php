<?php if (!isset($_SESSION['username']) || empty($_SESSION['username']))
    header('Location:../index.php');
?>
<div class="container-fluid">
    <div class="row p-3">
        <div class="col">
            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Novo Post</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="../db/insertPost.php" method="post">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Novo Post</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="form-title" name="form-title">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                    <textarea class="form-control" id="form-description" name="form-description" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-outline-dark" value="Gravar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <h2>POSTS</h2>
        </div>
        <div class="col text-end my-auto">
            <a class="btn btn-outline-dark" href="logout.php">Logout</a>
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
        <div class="col-12" id="manage-table-post-insertOK">
            <div class="alert alert-success" role="alert">Post adicionado com sucesso</div></div>
        <div class="col-12" id="manage-table-post-insertErro">
            <div class="alert alert-danger" role="alert">Erro ao adicionar post</div></div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <?php include('../db/manageListPost.php');?>
        </div>
    </div>
</div>