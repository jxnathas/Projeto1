    <section class="banner-container">
        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form.jpg');" class="banner-single"></div><!--banner single-->
        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form1.jpg');" class="banner-single"></div><!--banner single-->
        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form2.jpg');" class="banner-single"></div><!--banner single-->
        <div class="overlay"></div><!--overlay-->
        <div class="center">
            <form>
                <h2>Qual o seu melhor e-mail?</h2>
                <input type="email" name="email" required />
                <input type="submit" name="acao" value="Cadastrar!" />
            </form>
        </div><!--center-->
        <div class="bullets">
        </div><!--bullets-->
    </section> <!--banner-container-->

    <section class="descricao-autor">
        <div class="center">
            <div class="w50 left">
                <h2><?php echo $infoSite['nome_autor'] ?>💻</h2>
                <p><?php echo $infoSite['descricao'] ?></p>
            </div><!--w50-->
            <div class="w50 left">
                <img src="<?php echo INCLUDE_PATH; ?>images/img1.jpg" class="w50 right" />
            </div><!--w50-->
            <div class="clear"></div>
        </div> <!--center-->
    </section><!-- descricao-autor-->

    <section class="especialidades">
        <div class="center">
            <h2 class="title">Especialidades</h2>
            <div class="box-especialidade w33 left">
                <h3><i class="<?php echo $infoSite['icone1'] ?>"></i></h3>
                <h4>CSS3</h4>
                <p><?php echo $infoSite['descricao1'] ?></p>
            </div><!-- box-especialidade -->
            <div class="box-especialidade w33 left">
                <h3><i class="<?php echo $infoSite['icone2'] ?>"></i></h3>
                <h4>HTML5</h4>
                <p><?php echo $infoSite['descricao2'] ?></p>
            </div><!-- box-especialidade -->
            <div class="box-especialidade w33 left">
                <h3><i class="<?php echo $infoSite['icone3'] ?>"></i></h3>
                <h4>PHP</h4>
                <p><?php echo $infoSite['descricao3'] ?></p>
            </div><!-- box-especialidade -->
            <div class="clear"></div>
        </div><!--center-->
    </section> <!-- especialidades -->

    <section class="extras">

        <div class="center">
            <div id="depoimentos" class="w50 left depoimentos-container">
                <h2 class="title">Depoimentos dos nossos clientes</h2>
                <?php
                    $sql = MySql::connect()->prepare("SELECT * FROM `tb_site.depoimentos` ORDER BY order_id ASC LIMIT 5");
                    $sql->execute();
                    $depoimentos = $sql->fetchAll();
                    foreach($depoimentos as $key => $value){
                ?>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">"<?php echo $value['depoimento']; ?>"</p>
                    <p class="nome-autor"><?php echo $value['nome']; ?> - <?php echo $value['data']; ?></p>
                </div><!--Depoimento single-->
                <?php } ?>
            </div>
        </div><!--center-->

        <div id="servicos" class="w50 left servicos-container">
            <h2 class="title">Serviços</h2>
            <div class="servicos">
                <?php
                    $sql = MySql::connect()->prepare("SELECT * FROM `tb_site.servicos` ORDER BY order_id ASC LIMIT 5");
                    $sql->execute();
                    $servicos = $sql->fetchAll();
                    foreach($servicos as $key => $value){
                ?>
                <ul>
                    <li><?php echo $value['servico']; ?></li>
                    <?php } ?>
                </ul>
            </div><!--Serviços-->
        </div>
        <div class="clear"></div>
        </div>
</section><!-- extras-->