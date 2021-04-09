<?php 
    require_once 'class/cadastro.php';
    $cadastro = new Cadastro();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&family=Press+Start+2P&family=Source+Code+Pro&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="images/logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script type="text/javascript" src="js/ValidaCampo.js"></script>
    <script type="text/javascript">
        $("#txfone").mask("(00) 0000-0000");
        $("#txCel").mask("(00) 0000-00000");
    </script>

    <script src="https://kit.fontawesome.com/6d6952c5be.js" crossorigin="anonymous"></script>

    <title>Studio T-Move</title>
</head>

<body>
    <header>
        <figure class="logo">
            <a href="#"><img src="images/logo.png" alt="logo"></a>
        </figure>
        <nav class="menu">
            <ul class="container">
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#modalidades">Modalidades</a></li>
                <li><a href="#contatos">Contatos</a></li>
            </ul>
        </nav>

        <div class="titulo">
            <h1 class="site-title">Studio T-Move</h1>
            <h2 class="site-subtitle">Movendo sua saúde!</h2>
        </div>
    </header>

    <section class="sobre container" id="sobre">
        <h2>Sobre</h2>
        <figure class="fachada">
            <img src="images/fachada.jpeg" alt="fachada">
        </figure>
        <p>
            Studio T-Move, aberto desde de novembro de 2012 onde era conhecido como DamaStudio e o foco era
            para mulheres, na época não havia nenhuma academia somente para esse público.
            E com a confiança que as clientes foram adquirindo, os pedidos para a atender seus
            familiares foram aumentando, tendo que assim se inovar para Studio T-Move em 2019.
        </p>
        <p>
            Atualmente temos como atividades Pilates, Musculação, Treinamento Funcional, Boxe Funcional, Massagem,
            Remo Indoor, Relaxante Manual e Drenagem Linfática Manual.
            Atendemos com hora marcada, grupos pequenos de 3 ou 4 pessoas por horário, dependendo da atividade. Abrimos
            de segunda a sexta das 06h00 até às 22h00.
        </p>
    </section>

    <section class="modalidades container" id="modalidades">
        <h2>Modalidades</h2>
        <h4>O que você procura?</h4>
        <div class="grid">
            <div class="conteudo-modalidade">
                <div class="flip-card">
                    <div class="card">
                        <figure class="card-front">
                            <img class="img-modalidades" src="./images/pilates.jpeg" alt="Sala de Pilates">
                        </figure>
                        <div class="card-back">
                            <h3>Sala de Pilates equipada com Pilates Solo, Pilates Suspensus e Pilates com Aparelho.
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="descricao">
                    <h1>Pilates</h1>
                    <p>Estrutura completa e professora altamente qualificada.
                        Para quem tem alguma lesão, ou para quem quer adquirir um melhor
                        alongamento, essa aula é indicada. Venha se mover!
                    </p>
                </div>
                <div class="btnSaiba_mais">
                    <a href="#"><h3>Saiba Mais</h3></a>
                </div>
            </div>

            <div class="conteudo-modalidade">
                <div class="flip-card">
                    <div class="card">
                        <figure class="card-front">
                            <img class="img-modalidades" src="./images/boxe.jpeg" alt="Sala de Boxe Funcional">
                        </figure>
                        <div class="card-back">
                            <h3>Sala de Boxe Funcional e Remo Indoor toda equipada.</h3>
                        </div>
                    </div>
                </div>
                <div class="descricao">
                    <h1>Boxe e Remo Indoor</h1>
                    <p>Para você que gosta de lutas, no Studio T-Move é o lugar certo!
                        Sala totalmente equipada e professor qualificado. E temos a aula 
                        de Remo Indoor. Venha se mover!
                    </p>
                </div>
                <div class="btnSaiba_mais">
                    <a href="#"><h3>Saiba Mais</h3></a>
                </div>
            </div>

            <div class="conteudo-modalidade">
                <div class="flip-card">
                    <div class="card">
                        <figure class="card-front">
                            <img class="img-modalidades" src="./images/musculacao.jpeg" alt="Sala de Musculação">
                        </figure>
                        <div class="card-back">
                            <h3>Sala de Musculação equipada para atendimento em Grupo ou Personalizado.</h3>
                        </div>
                    </div>
                </div>
                <div class="descricao">
                    <h1>Musculação</h1>
                    <p>Para você, que gosta de ter um corpo saudável, venha conhecer nossa sala de Musculação.
                        Professores qualificados e especializados para melhor atender à cada objetivo.
                        Venha se mover!
                    </p>
                </div>
                <div class="btnSaiba_mais">
                    <a href="#"><h3>Saiba Mais</h3></a>
                </div>
            </div>

            <div class="conteudo-modalidade">
                <div class="flip-card">
                    <div class="card">
                        <figure class="card-front">
                            <img class="img-modalidades" src="./images/gestante.jpg" alt="Cursos para Gestantes">
                        </figure>
                        <div class="card-back">
                            <h3></h3>
                        </div>
                    </div>
                </div>
                <div class="descricao">
                    <h1>Curso para Gestante</h1>
                    <p>Para você gestante que quer ter uma gestação saudável, venha conhecer o nosso pacote de
                        aulas completo e sem sair de casa! Venha ter uma gestação saudável se movendo!
                    </p>
                </div>
                <div class="btnSaiba_mais">
                    <a href="https://studiotmove.com.br/gestante-saudavel/"><h3>Saiba Mais</h3></a>
                </div>
            </div>
    </section>

    <section class="contatos container" id="contatos">
        <h2>Contatos</h2>
        <div class="grid icons">
            <a target="_blank" href="https://www.facebook.com/StudioTMove/">
                <i class="fab fa-facebook"></i>
            </a>
            <a target="_blank" href="https://www.instagram.com/studio_tmove/?hl=pt-br">
                <i class="fab fa-instagram"></i>
            </a>
            <a target="_blank"
                href="https://api.whatsapp.com/send?phone=5519998454980&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20as%20aulas.">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
        <section class="formulario">
            <section class="form">
                <h3>Quer participar de uma aula experimental?</h3>
                    Preencha o formulário ao lado para realizar um pré-cadastro e entraremos em contato com você!<br>
                    <strong>Alguma dúvida? Entre em contato pelas nossas redes sociais!</strong>
                </p>
            </section>

            <section class="form">
                <form name="form" method="POST" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return ValidaCampo(); return false;">
                    <div class="div_nome">
                        <label class="nome" for="nome">Nome:</label><br>
                        <input type="text" class="campo" name="nome" placeholder="Digite seu nome completo" id="txNome" required/>
                    </div>

                    <div class="div_contato">
                        <label class="tel" for="tel">Telefone </label><br>
                        <input type="text" name="tel" class="campo_fone" class="campo" placeholder="Ex.: (00) 0000-0000" id="txfone" required/>
                    </div>

                    <div class="div_contato">
                        <label class="cel" for="cel">Celular </label><br>
                        <input type="text" name="cel" class="campo_fone" placeholder="Ex.: (00) 0000-0000" id="txCel" required/>
                    </div>

                    <div>
                        <label class="email" for="email">E-mail:</label><br>
                        <input type="email" name="email" class="campo" placeholder="Digite seu e-mail" id="txEmail" required/>
                    </div>

                    <div class="div_categoria">
                        <label class="periodo" for="periodo">Período:</label>

                        <select name="periodo">
                            <option value="0">Selecione</option>
                            <option value="manha">Manhã</option>
                            <option value="tarde">Tarde</option>
                            <option value="noite">Noite</option>
                        </select>
                    </div>

                    <div class="div_categoria">
                        <label class="modalidade" for="modalidade">Modalidade: </label>

                        <select name="modalidade">
                            <option value="">Selecione</option>
                            <option value="boxe">Boxe</option>
                            <option value="pilates">Pilates</option>
                            <option value="musculação">Musculação</option>
                        </select>
                    </div>

                    <div class="msg">
                        <label for="msg">Mensagem:</label><br>
                        <textarea name="mensagem" id="msg" id="tx_mensagem" required></textarea>
                    </div>
                    <div id="button">
                        <button type="submit" class="botao">Enviar</button>
                    </div>
                </form>
            </section>
        </section>
    </section>

    <footer class="footer">
        <div class="conteudo">
            <h3>Localização:</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.84666425618!2d-46.82610278557252!3d-22.434796426838034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c90207370a2fc7%3A0x204ca5654435adb4!2sR.%20Comendador%20Joao%20Cintra%2C%20506%20-%20Centro%2C%20Itapira%20-%20SP%2C%2013970-160!5e0!3m2!1spt-BR!2sbr!4v1613590552387!5m2!1spt-BR!2sbr"
                frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="conteudo">
            <h3>Endereço:</h3>
            <p><i class="fas fa-map-marker-alt">
                    Rua Comendador João Cintra, 506, Centro - Itapira/SP.
                </i></p>
            <p>CEP: 13970-160</p>
            <p>Telefone: +55 (19) 99845-4980</p>
        </div>
        <div class="conteudo">
            <h3>Horários de atendimentos:</h3>
            <h5>(Com agendamento):</h5>
            <h4>Segunda a sexta das<br> 6h às 22h</h4>
        </div>
        <div class="copyright">
            <h4>Todos os direitos reservados© 2012 - 2021.</h4>
        </div>
    </footer>

<?php
if(isset($_POST['nome']))
{
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
    $celular = addslashes($_POST['cel']);
	$telefone = addslashes($_POST['tel']);
    $periodo = addslashes($_POST['periodo']);
	$modalidade = addslashes($_POST['modalidade']);
    $mensagem = addslashes($_POST['mensagem']);


    // Variáveis dinâmicas do formulário
    foreach ( $_POST as $chave => $valor ) {
    // Limpa todas as tags HTML
    // Limpa os espaços em branco do valor
    $$chave = trim( strip_tags( $valor ) );
    }

	if(!empty($email) && !empty($celular) && !empty($periodo) && !empty($modalidade) && !empty($nome) && !empty($telefone) && !empty($mensagem))
	{
		$cadastro->Conectar("studio-tmove", "localhost", "root", "");
		if($cadastro->msgErro == "")
		{
			if($cadastro->Cadastrar($nome, $telefone, $email, $celular, $periodo, $modalidade, $mensagem))
			{
                ?>
                <script>
                    alert("Pré-cadastro efetuado com sucesso!");
                </script>
                <?php
			}
            else
			{
                
                ?>
                <script>
                    alert("E-mail já possui um pré-cadastro!!");
                </script>
                <?php
			}
		}
		else
		{
			?>
			    <div class="msg-erro">
				    <?php echo "Erro: ".$cadastro->msgErro; ?>
			    </div>
			<?php
		}
	}
	else
	{
		?>
		    <!-- <div class="msg-erro">
			    Preencha todos os campos!
		    </div> -->
		<?php
	}
}
?>

</body>
</html>
