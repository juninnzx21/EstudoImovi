<?php
  include 'head.php';
?>
  <!--Formularios de contato-->
  <div class="container d-flex contato">
    <form class="forms-contato">
      <form class="needs-validation" novalidate>
        <div class="form-row">
          <div class="row">
            <h3 for="validationCustom01">Preencha os dados a seguir e receba nosso contato:</h3>
            <div class="col">
              <label for="validationCustom01">Primeiro nome</label>
              <input type="text" class="form-control" id="validationCustom01" placeholder="Nome" required>
            </div>
            <div class="valid-feedback">
              Tudo certo!
            </div>
            <div class="col">
              <label for="validationCustom02">Sobrenome</label>
              <input type="text" class="form-control" id="validationCustom02" placeholder="Sobrenome" required>
            </div>
            <div class="valid-feedback">
              Tudo certo!
            </div>
          </div>
          <div>
            <div class="row">
              <div class="col-md-6">
                <label for="inputFone" class="control-label">Telefone</label>
                <input type="tel" class="form-control" id="inputFone" placeholder="Telefone" required>
                <div class="help-block with-errors"></div>
              </div>
              <div class="col-md-6">
                <label for="inputFone" class="control-label">Whatsapp "Opicional"</label>
                <input type="tel" class="form-control" id="inputFone" placeholder="Telefone">
              </div>
            </div>
          </div>
          <div>
            <label for="inpute-mail" class="control-label">E-mail</label>
            <input type="email" class="form-control" id="inpute-mail" placeholder="E-mail" required>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label" for="invalidCheck">
                Concordo com os termos e condições
              </label>
              <div class="invalid-feedback">
                Você deve concordar, antes de continuar.
              </div>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
      </form>
  </div>

  <!-- FOOTER -->
  <footer class="container-fluid bg-dark-color  " id="parcieros-footer">

    <div class="container">
      <div class="row">
        <!--FOOTER TOP-->
        <div class="col-12" id="footer-top">
          <div class="row justify-content-between">
            <div class="col-4">
              <h2>VM REALIZE</h2>
            </div>
            <div class="col-4" id="social-icons">
              <i class="bi bi-facebook"></i>
              <i class="bi bi-instagram"></i>
              <i class="bi bi-twitter"></i>
              <i class="bi bi-linkedin"></i>
              <i class="bi bi-github"></i>
              <i class="bi bi-whatsapp"></i>
            </div>
          </div>
        </div>
        <!--FOOTER DETAILS-->
        <div class="col-12" id="footer-details">
          <div class="row">
            <div class="col-12 col-md-4" id="nv-container">
              <h4>Fique por dentro das novidades</h4>
              <p class="secondary-color">
                Inscreva-se para saber em primera mão
              </p>
              <form>
                <div class="mb-3">
                  <input type="e-mail" placeholder="Digite seu E-mail" class="form-control" />
                </div>
                <button class="btn btn-dark" type="subimit">Inscrever</button>
              </form>
            </div>
            <div class="col-12 col-md-4" id="contact-container">
              <h4>Formas de Contato</h4>
              <p class="secondary-color">(31)9 9999-9999</p>
              <p class="secondary-color">contato@imovi.com.br</p>
            </div>
            <div class="col-12 col-md-4" id="links-container">
              <div class="row">
                <h4>Você pode esta procurando por:</h4>
                <div class="col-6">
                  <ul class="list-unstyled">
                    <li><a href="#" class="secondary-color">Projetos</a></li>
                    <li><a href="#" class="secondary-color">Imóveis</a></li>
                    <li><a href="#" class="secondary-color">Vendas</a></li>
                  </ul>
                </div>
                <div class="col-6">
                  <ul class="list-unstyled">
                    <li><a href="#" class="secondary-color">Contratar</a></li>
                    <li>
                      <a href="#" class="secondary-color">Trabalhe conosco</a>
                    </li>
                    <li><a href="#" class="secondary-color">Contato</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--FOOTER BOTTOM-->
        <div class="col-12" id="footer-bottom">
          <div class="row justify-content-between">
            <div class="col-12 col-md-4">
              <p class="secondary-color">VM REALIZE &copy;2022</p>
            </div>
            <div class="col-12 col-md-4">
              <p class="secondary-color">
                Realizamos o seu sonho <i class="bi bi-heart"></i>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>