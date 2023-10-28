<?php require 'pages/header.php'; ?>
    <div class="banner-form1">
        <h1>Login</h1>
        <?php
            require 'classes/usuarios.class.php';
            $u = new Usuarios();
            if (isset($_POST['email']) && !empty($_POST['email'])) {
                $email = addslashes($_POST['email']);
                $senha = $_POST['senha'];
                if($u->login($email, $senha)){
                    ?>
                        <script type="text/javascript">
                            window.location.href="./";
                        </script>
                    <?php
                }else{
                    ?>
                        <script type="text/javascript">
                            alert("Usuário ou senha errados.");
                        </script>
                    <?php
                }
            }
        ?>
        <form action="" method="POST" class="form1">
            <div class="bloco-form1-row">
                <div class="bloco-form1-col">
                <div class="bloco-nome1">
                        <label for="email">E-mail </label>
                        <input type="email" name="email" id="email" class="input-nome" />
                    </div>
                </div>
                <div class="bloco-form1">
                    <div class="bloco-nome1">
                        <label for="senha">Senha </label>
                        <input type="password" name="senha" id="senha" class="input-nome" />
                    </div>
                </div>
            </div>
            <div class="submit-form1">
                <input type="submit" value="Fazer login" class="btnForm1 navbar-brand-a" />
            </div>
        </form>
    </div>
<?php require 'pages/footer.php'; ?>
