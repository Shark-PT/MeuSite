<?php if (!isset($_SESSION['username']) || empty($_SESSION['username']))
    header('Location:../index.php');

    if(isset($_GET['res'])){
        if($_GET['res']=='editOK'){?>
            <script>document.getElementById('manage-table-post-editOK').style.display='block';</script><?php
        } else if($_GET['res']=='editErro'){?>
            <script>document.getElementById('manage-table-post-editErro').style.display='block';</script><?php
        } else if($_GET['res']=='removeOK'){?>
            <script>document.getElementById('manage-table-post-removeOK').style.display='block';</script><?php
        } else if($_GET['res']=='removeErro'){?>
            <script>document.getElementById('manage-table-post-removeErro').style.display='block';</script><?php
        }
    }

    include('conn.php');
    $sql = "SELECT * FROM posts ORDER BY id DESC;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        ?>
                
<div class="container-fluid" id="manage-table-post">
    <div class="row text-center p-2" id="manage-table-post-headers">
        <div class="col-1"></div>
        <div class="col-1">ID</div>
        <div class="col">TITLE</div>
        <div class="col">DESCRIPTION</div>
        <div class="col">DATE</div>
        <div class="col">USER</div>
        <div class="col-1"></div>
    </div>
        <?php while($row = $result->fetch_assoc()) { ?>
    <form action="../db/editPost.php" class="w-100" method="get">
        <div class="row text-center p-2">
            <div class="col-1 h-100 my-auto">
                <input class="btn btn-outline-dark" type="submit" value="Editar"></div>
            <div class="col-1 h-100 my-auto">
                <input type="number" name="post-id" id="post-id<?=$row['id']?>" value="<?=$row['id']?>"></div>
            <div class="col h-100 my-auto">
                <input type="text" name="post-title" id="post-title<?=$row['id']?>" value="<?=$row['title']?>"></div>
            <div class="col h-100 my-auto">
                <input type="text" name="post-description" id="post-description<?=$row['id']?>" value="<?=$row['description']?>"></div>
            <div class="col h-100 my-auto">
                <input type="date" name="post-date" id="post-date<?=$row['id']?>" value="<?=$row['date_time']?>"></div>
            <div class="col h-100 my-auto">
                <input type="text" name="post-user" id="post-user<?=$row['id']?>" value="<?=$row['id_user']?>"></div>
            <div class="col-1 h-100 my-auto">
                <a href="../db/removePost.php?id=<?=$row['id']?>" class="btn btn-outline-dark w-100 ">Remover</a></div>
        </div>
    </form>
<?php } $conn->close(); }?> 
</div>