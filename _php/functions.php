<?php
    function logarOuSair() {
         if(isset($_SESSION['nome'])) { ?>
            <a href="logout.php" class="menu-item-action">Sair</a>
        <?php }else { ?>
            <a href="login_index.php" class="menu-item-action">Login / Cadastro</a>
<?php } }?>
