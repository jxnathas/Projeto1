<?php
if (isset($_GET['logout'])) {
    Painel::logout();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Painel de Controle</title>
    <meta charset="utf-8">
    <meta name=" viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH; ?>styles/fontawesome.css" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH; ?>styles/brands.css" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH; ?>styles/solid.css" rel="stylesheet">
</head>

<body>
    <div class="menu">
        <div class="menu-wrapper"><!--menu wrapper-->
            <div class="box-usuario">
                <?php
                if ($_SESSION['img'] == '') {
                ?>
                    <div class="avatar-usuario">
                        <i class="fa fa-user"></i>
                    </div><!--avatar-usuario-->
                <?php } else { ?>
                    <div class="imagem-usuario">
                        <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img'] ?>" />
                    </div><!--avatar-usuario-->
                <?php } ?>
                <div class="nome-usuario">
                    <p><?php echo $_SESSION['nome']; ?></p>
                    <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
                </div><!--nome-usuario-->
            </div><!--box-usuario-->
            <div class="items-menu">
                <h2>Cadastro</h2>
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-depoimento">Cadastrar Depoimento</a>
                <a href="">Cadastrar Serviço</a>
                <a href="">Cadastrar Slides</a>
                <h2>Gestão</h2>
                <a href="">Listar Depoimentos</a>
                <a href="">Listar Serviços</a>
                <a href="">Listar Slides</a>
                <h2>Administração Painel</h2>
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>editar-usuario">Editar Usuário</a>
                <a href="">Adicionar Usuários</a>
                <h2>Configuração Geral</h2>
                <a href="">Editar</a>
            </div><!--itens-menu-->
        </div><!--menu wrapper-->
    </div><!--menu-->
    <header>
        <div class="center">
            <div class="menu-btn">
                <i class="fa fa-bars"></i>
            </div><!--menu-btn-->
            <div class="logout">
            <a href="<?php echo INCLUDE_PATH_PAINEL ?>"><span>Pagina Inicial </span> <i class="fa fa-home"></i></a>
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>?logout"><span>Sair </span> <i class="fa fa-window-close"></i></a>
            </div><!--logout-->
            <div class="clear"></div>
        </div><!--fim center-->
    </header>
    <div class="content">

        <?php Painel::carregarPagina();?>

    </div><!--content-->
    <script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>

</body>
</html>