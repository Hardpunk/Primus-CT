<section id="contato__wrapper">
    <div class="container">
        <h3 class="title d-block text-uppercase">ENTRE EM CONTATO CONOSCO</h3>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <form id="form-contato">
                    @csrf

                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" id="name" name="name" placeholder="NOME" class="form-control" required/>
                        </div>

                        <div class="form-group col-md-6">
                            <input type="email" id="email" name="email" placeholder="E-MAIL" class="form-control" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" id="phone" name="phone" placeholder="TELEFONE"
                               class="form-control phone-mask" required/>
                    </div>

                    <div class="form-group">
                        <textarea id="message" name="message" placeholder="MENSAGEM"
                                  class="form-control" required></textarea>
                    </div>

                    <div class="mb-3">
                        {!! htmlFormSnippet() !!}
                    </div>

                    <div class="form-group">
                        <button id="btn-contact-send" type="button" class="btn bg-white ml-0"
                                data-loading-text="<i class='fas fa-spinner fa-spin mr-2'></i>Aguarde...">
                            <i class="fas fa-paper-plane"></i>
                            <span class="font-weight-bold">ENVIAR</span>
                        </button>
                    </div>
                </form>
                <div class="formResponse"></div>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3547.835412275972!2d-48.64587984911365!3d-27.22431678291087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d8abfbf07b92c7%3A0x1af30b28dba52e95!2sR.%20Limoeiro%2C%20Tijucas%20-%20SC%2C%2088200-000!5e0!3m2!1spt-BR!2sbr!4v1648035754836!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>
