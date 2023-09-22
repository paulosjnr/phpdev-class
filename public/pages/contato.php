<h2>Contato</h2>

<?=get('message')?>

<form action="/pages/forms/contato.php" method="POST" role="form">
    
    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Digite seu melhor e-mail">
    </div>

    <div class="form-group">
        <label for="">Assunto</label>
        <input type="text" class="form-control" name="subject" placeholder="Digite o assunto">
    </div>

    <div class="form-group">
        <label for="">Mensagem</label>
        <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Digite sua mensagem!"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>