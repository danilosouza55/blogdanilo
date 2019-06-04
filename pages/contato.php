<div class="container">
    <div class="breadcrumb">
        <li>
            <a href="home">Pagina Inicial</a>
        </li>
        <li>Contato</li>
    </div>
    <h1>Entre em Contato</h1>
    <p>Entre em contato atráves do formulario
    abaixo ou pelo e-mail danilo.souza@edu.unipar.br </p>
    
    <form name="contato" method="post" action="danilo.souza@edu.unipar.br">
        <label>Digite seu nome</label>
        <input type="text" name="name" required placeholder="Digite Seu Nome Completo" class="form-control">
        
        <label>Digite seu E-mail</label>
        <input type="text" name="_replyto" required placeholder="Digite Seu E-mail Completo" class="form-control">
        
        <label>Sua Mensagem</label>
        <textarea name="mensagem" required placeholder="Digite seu nome completo" class="form-control" rows="5">
            
        </textarea>
        <br>
        <button type="submit" class="btn btn-success btn-lg pull-right">Enviar</button>
    </form>
</div>
