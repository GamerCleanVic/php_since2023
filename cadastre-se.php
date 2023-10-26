<?php require 'pages/header.php'; ?>
    <div class="banner-form1">
        <h1>Cadastre-se</h1>

        <form action="" method="POST" class="form1">
            <div class="bloco-form1-row">
                <div class="bloco-form1-col">
                    <div class="bloco-nome1">
                        <label for="nome">Seu nome: </label>
                        <input type="text" name="nome" id="nome" class="input-nome" />
                    </div>
                    <div class="bloco-nome1">
                        <label for="telefone">Seu telefone: </label>
                        <input type="text" name="telefone" id="telefone" class="input-nome" />
                    </div>
                </div>
                <div class="bloco-form1">
                    <div class="bloco-nome1">
                        <label for="email">Seu e-mail: </label>
                        <input type="email" name="email" id="email" class="input-nome" />
                    </div>
                    <div class="bloco-nome1">
                        <label for="senha">Sua senha: </label>
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
