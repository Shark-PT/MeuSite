<div class="p-3">
    <div class="row px-3">
        <div class="col mb-3 text-center">
            <h1>Contacto</h1>
        </div>
    </div>
    <div class="row p-3 mx-4">
        <form action="send-mail.php" method="post">
            <div class="mb-3">
                <label for="form-nome" class="form-label">O seu nome</label>
                <input type="text" class="form-control" id="form-nome" name="form-nome" required>
            </div>
            <div class="mb-3">
                <label for="form-email" class="form-label">O seu email</label>
                <input type="email" class="form-control" id="form-email" name="form-email" required>
            </div>
            <div class="mb-3">
                <label for="form-assunto" class="form-label">Assunto</label>
                <input type="text" class="form-control" id="form-assunto" name="form-assunto">
            </div>
            <div class="mb-3">
                <label for="form-mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control" id="form-mensagem" name="form-mensagem" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-outline-dark" value="Enviar">
            </div>
            <div class="alert alert-success" role="alert" id="div__contact-success">
                Obrigado pelo seu contacto!
            </div>
            <div class="alert alert-danger" role="alert" id="div__contact-error">
                Ocorreu um erro ao enviar a sua mensagem, por favor tente mais tarde.
            </div>
        </form>
    </div>
</div>

<?php
    if(isset($_GET['result']) && $_GET['result']=='ok')
        echo "<script>document.getElementById('div__contact-success').style.display='block';</script>";
    else if(isset($_GET['result']) && $_GET['result']=='error')
        echo "<script>document.getElementById('div__contact-error').style.display='block';</script>";
?>