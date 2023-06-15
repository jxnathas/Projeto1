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
                <a <?php selecionadoMenu('cadastrar-depoimento'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-depoimento">Cadastrar Depoimento</a>
                <a <?php selecionadoMenu('cadastrar-servico'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-servico">Cadastrar Serviço</a>
                <a <?php selecionadoMenu('cadastrar-slide'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-slide">Cadastrar Slides</a>
                <h2>Gestão</h2>
                <a <?php selecionadoMenu('listar-depoimentos'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>listar-depoimentos">Listar Depoimentos</a>
                <a <?php selecionadoMenu('listar-servicos'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>listar-servicos">Listar Serviços</a>
                <a <?php selecionadoMenu('listar-slides'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>listar-slides">Listar Slides</a>
                <h2>Administração Painel</h2>
                <a <?php selecionadoMenu('editar-usuario'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>editar-usuario">Editar Usuário</a>
                <a <?php selecionadoMenu('adicionar-usuario'); ?> <?php verificaPermissaoMenu(2); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>adicionar-usuario">Adicionar Usuários</a>
                <h2>Configuração Geral</h2>
                <a <?php selecionadoMenu('editar-site'); ?> <?php verificaPermissaoMenu(2); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>editar-site">Editar Site</a>
            </div><!--itens-menu-->
        </div><!--menu wrapper-->
    </div><!--menu-->
    <header>
        <div class="center">
            <div class="menu-btn">
                <i class="fa fa-bars"></i>
            </div><!--menu-btn-->
            <div class="logout">
            <a <?php if(@$_GET['url'] == ''){ ?> style="background: #60727a; padding: 10px 10px;" <?php } ?> href="<?php echo INCLUDE_PATH_PAINEL ?>"><span>Pagina Inicial </span> <i class="fa fa-home"></i></a>
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>?logout"><span>Sair </span> <i class="fa fa-window-close"></i></a>
            </div><!--logout-->
            <div class="clear"></div>
        </div><!--fim center-->
    </header>
    <div class="content">

        <?php Painel::carregarPagina();?>

    </div><!--content-->
    <script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/jquery.mask.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>


</body>
</html>