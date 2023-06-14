<?php
    verificaPermissaoPagina(2);
?>
<div class="box-content">
    <h2><i class="solid fa fa-user"></i>  Adicionar Usuário</h2>
    <form method="post" enctype="multipart/form-data">

        <?php
            if(isset($_POST['acao'])){
                

                $user = $_POST['user'];
                $nome = $_POST['nome'];
                $senha = $_POST['password'];
                $imagem = $_FILES['imagem'];
                $cargo = $_POST['cargo'];
                
                if($user == ''){
                    Painel::alert('erro', ' O username está vazio!');
                }else if ($nome == ''){
                    Painel::alert('erro', ' O nome está vazio!');
                }else if ($user == ''){
                    Painel::alert('erro', ' O usuario está vazio!');
                }else if ($senha == ''){
                    Painel::alert('erro', ' A senha está vazia!');
                }else if ($cargo == ''){
                    Painel::alert('erro', ' O cargo precisa ser selecionado0');
                }else if ($imagem['name'] == ''){
                    Painel::alert('erro', ' Selecione uma imagem!');
                }else{
                    // Cadastra
                    if($cargo >= $_SESSION['cargo']){
                        Painel::alert('erro', ' Voce precisa selecionar um cargo menor que o seu!');
                    }
                    else if(Painel::imagemValida($imagem) == false){
                        Painel::alert('erro', ' O formato enviado não é aceito');
                    }else if(Usuario::userExists($user)){
                        Painel::alert('erro', ' O login já existe!');
                    }else{
                        //Podemos cadastrar no banco de dados!
                        $usuario = new Usuario();
                        $imagem = Painel::uploadFile($imagem);
                        $usuario->cadastrarUsuario($user,$senha,$imagem,$nome,$cargo);
                        Painel::alert('sucesso', ' Cadastro do usuário '.$user.' feito com sucesso!');

                    }

                }
            }
        ?>
        <div class="form-group">
            <label>Username:</label>
            <input type="text" name="user" />
        </div><!--form-group-->

        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="nome" />
        </div><!--form-group-->

        <div class="form-group">
            <label>Senha:</label>
            <input type="password" name="password"  />
        </div><!--form-group-->
        
        <div class="form-group">
            <label>Cargo:</label>
            <select name="cargo">
                <?php
                    foreach(Painel::$cargos as $key => $value){
                        if($key < $_SESSION['cargo']) echo '<option value="'.$key.'">'.$value.'</option>';
                    }
                ?>
            </select>
        </div><!--form-group-->

        <div class="form-group">
            <label>Imagem</label>
            <input type="file" name="imagem" />
        </div><!--form-group-->
        
        <div class="form-group">
            <input type="submit" name="acao" value="Atualizar!" />
        </div><!--form-group-->

    </form>
</div><!--box-content-->