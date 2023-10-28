<?php require 'pages/header.php'; ?>
    <div class="banner-form1">
        <h1>Cadastre-se</h1>
        <?php
            require 'classes/usuarios.class.php';
            $u = new Usuarios();
            if (isset($_POST['nome']) && !empty($_POST['nome'])) {
                $nome = addslashes($_POST['nome']);
                $email = addslashes($_POST['email']);
                $senha = $_POST['senha'];
                $telefone = addslashes($_POST['telefone']);
                if(!empty($nome) && !empty($email) && !empty($senha)){
                    if($u->cadastrar($nome, $email, $senha, $telefone)){
                        ?>
                            <script type="text/javascript">
                                alert(`Parabéns, cadastrado com sucesso! Faça o login.`);
                                window.location.href="./login.php";
                            </script>
                        <?php
                    }else{
                        ?>
                            <script type="text/javascript">
                                alert(`Este usuário já existe! \nFaça o cadastro de outro usuário.`);
                                window.location.href="./cadastro.php";
                            </script>
                        <?php
                    }
                }else{
                    ?>
                        <script>
                            alert("Preencha todos os campos.");
                        </script>
                    <?php
                }
            }
        ?>
        <form action="" method="POST" class="form1">
            <div class="bloco-form1-row">
                <div class="bloco-form1-col">
                    <div class="bloco-nome1">
                        <label for="nome">Nome </label>
                        <input type="text" name="nome" id="nome" class="input-nome" />
                    </div>
                    <div class="bloco-nome1">
                        <label for="telefone">Telefone </label>
                        <input type="text" name="telefone" id="telefone" class="input-nome" />
                    </div>
                </div>
                <div class="bloco-form1">
                    <div class="bloco-nome1">
                        <label for="email">E-mail </label>
                        <input type="email" name="email" id="email" class="input-nome" />
                    </div>
                    <div class="bloco-nome1">
                        <label for="senha">Senha </label>
                        <input type="password" name="senha" id="senha" class="input-nome" />
                    </div>
                </div>
            </div>
            <div class="submit-form1">
                <input type="submit" value="Cadastrar" class="btnForm1 navbar-brand-a" />
            </div>
        </form>
    </div>
<?php require 'pages/footer.php'; ?>
