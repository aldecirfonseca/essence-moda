<?= $this->loadView('comuns/cabecalho') ?>
<?= $this->loadView('comuns/menu') ?>

<div class="container">

    <h2 class="mb-5">Contato</h2>

    <div class="contact-area d-flex align-items-center">

        <div class="google-map">
            <div id="googleMap"></div>
        </div>

        <div class="contact-info">

            <div class="row">
                <div class="col-12">
                    <h4>Muriaé-MG</h4>
                    <p>Praça Aninna Bisegna, 40 - Centro</p>
                </div>
                <div class="col-12 mt-5">
                    <h4>+55 (32) 3721-1026</h4>
                    <p>De segunda a sexta das 8 às 18 horas</p>
                </div>
                <div class="col-12 mt-5">
                    <h3><a href="mailto:aldecir.fonseca@santamarcelina.edu.br" class="contato-link-email">aldecir.fonseca@santamarcelina.edu.br</a></h3>
                    <p>Envie-nos uma mensagem a qualquer momento!</p>
                </div>

            </div>
        </div>

    </div>

    <div class="row">

        <h3 class="ml-3 mt-5 mb-3">Envie nos um e-mail</h3>

        <div class="col-12">
            <div class="form-group">
                <input class="form-control" name="nome" id="nome" type="text" 
                    placeholder="Seu nome"
                    required maxlength="60">
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="form-group">
                <input class="form-control" name="celular" id="celular" type="text" 
                    placeholder="Seu telefone para contato"
                    required>
            </div>
        </div>

        <div class="col-12 col-md-8">
            <div class="form-group">
                <input class="form-control" name="email" id="email" type="email" placeholder="Seu e-mail"
                    required>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <input class="form-control" name="assunto" id="assunto" type="text" 
                                    placeholder="Resumo do assunto"
                                    required >
            </div>
        </div>

        <div class="col-12">
            <textarea class="form-control different-control w-100" name="mensagem" id="mensagem" cols="30" rows="7" 
                    placeholder="Descreva de forma detalha o motivo do seu contato" required></textarea>
        </div>

        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-outline-dark">Enviar Mensagem</button>
        </div>

    </div>

</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
<script src="<?= baseUrl() ?>assets/js/map-active.js"></script>

<?= $this->loadView('comuns/rodape') ?>