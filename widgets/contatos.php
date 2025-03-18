<div class="elementos-top-1">
    <!-- CONTENT -->
    <section>
        <div class="container-xl">
            <div class="row flex-column gap-4 py-5">
                <div class="col-12 col-lg-8">
                    <img src="<?php echo get_template_directory_uri(); ?>/imgs/janela-contato.png" alt="janela contato" class="img-fluid" />
                </div>
                <div class="d-flex flex-row align-items-center col-12 gap-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/imgs/shape-header.png" alt="icone de cabecalho" loading="lazy"
                        class="icm-shape-h1 flex-grow-0">
                    <h1 class="display-4 m-0 fw-bold">Fale Conosco</h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-xl">
            <div class="row mb-5 pb-5">
                <div class="col-12 col-lg-4 offset-lg-1 d-flex gap-2 flex-column order-2 mt-5 pt-5 pt-lg-0 mt-lg-0">
                    <div class="d-flex flex-column gap-3">
                        <div class="fs-4 fw-bold">Onde Estamos</div>
                        <div>
                            R. Sebastião Rodrigues da Costa, 1040 <br />
                            São Pedro, Belo Jardim - PE
                        </div>
                        <ul class="widget-links list-unstyled">
                            <li>
                                <img src="https://s34929.pcdn.co/wp-content/themes/instituto-conceicao-moura/assets/images/icn-phone-gray.svg"
                                    alt="Ícone de telefone">
                                <a class="link-warning link-underline-opacity-0" href="tel:81993325160">
                                    <strong>(81) 9 9332-5160</strong>
                                </a>
                            </li>
                            <li>
                                <img src="https://s34929.pcdn.co/wp-content/themes/instituto-conceicao-moura/assets/images/icn-at-gray.svg"
                                    alt="Ícone de arroba">
                                <a class="link-warning link-underline-opacity-0" href="mailto:contato@icmoura.org">
                                    <strong>contato@icmoura.org</strong>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex flex-column gap-3">
                        <div class="fs-4 fw-bold">Canal de Ética</div>
                        <ul class="widget-links list-unstyled">
                            <li>
                                <img src="https://s34929.pcdn.co/wp-content/themes/instituto-conceicao-moura/assets/images/icn-phone-gray.svg"
                                    alt="Ícone de telefone">
                                <a class="link-warning link-underline-opacity-0" href="tel:0800-721-1282">
                                    <strong>0800 721 1282</strong>
                                </a>
                            </li>
                            <li>
                                <a class="link-warning link-underline-opacity-0"
                                    href="mailto:codigodeetica@grupomoura.com">
                                    <img src="https://s34929.pcdn.co/wp-content/themes/instituto-conceicao-moura/assets/images/icn-at-gray.svg"
                                        alt="Ícone de arroba">
                                    <strong>codigodeetica@grupomoura.com</strong>
                                </a>
                            </li>
                            <li>
                                <i class="bi bi-globe text-secondary"></i>
                                <a class="link-warning link-underline-opacity-0"
                                    href="https://www.grupomoura.com/canaldeetica/">www.grupomoura.com/canaldeetica</a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex flex-column gap-3">
                        <div class="fs-4 fw-bold">Insituto nas Redes</div>
                        <ul class="flex-row rounded py-4 px-2 py-lg-2 m-0 p-0 d-flex gap-2" style="background-color: rgba(255, 255, 255, .1); width: fit-content;">
                            <li class="icm-social-icon"><a href="https://facebook.com/icmoura/" target="_blank"><i
                                        class="bi bi-facebook"></i></a></li>
                            <li class="icm-social-icon"><a href="https://instagram.com/iconceicaomoura/"
                                    target="_blank"><i class="bi bi-instagram"></i></a></li>
                            <li class="icm-social-icon"><a
                                    href="https://web.whatsapp.com/send?phone=5581993325160&text=Ol%C3%A1,+Instituto+Concei%C3%A7%C3%A3o+Moura!"
                                    target="_blank"><i class="bi bi-whatsapp"></i></a></li>
                            <li class="icm-social-icon"><a href="https://youtube.com/channel/UCCUeOCaxMXjKdHoqAFvHEMA"
                                    target="_blank"><i class="bi bi-youtube"></i></a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <p class="fs-5 col-12">É muito importante para nós ouvirmos você. Seja através de uma crítica,
                        uma dúvida ou sugestão, estamos sempre dispostos a ouvir e melhorar nosso relacionamento.</p>
                    <p class="fs-5 col-12">Manda uma mensagem pra gente!</p>
                    <form class="row g-3">
                        <div class="col-12">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder="Seu Nome" minlength="3"
                                required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="e-mail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="e-mail" placeholder="seuemail@gmail.com"
                                required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" id="telefone" required placeholder="(99) 9 9999-9999"
                                pattern="\d{3}\-\d{3}\-\d{4}">
                        </div>
                        <div class="col-12">
                            <label for="assunto" class="form-label">Qual o assunto?</label>
                            <input type="text" class="form-control" id="assunto" required>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="formFile" class="form-label" required>Deseja anexar um arquivo</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="msg" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="msg" rows="3" required
                                placeholder="Escreva Sua Mensagem"></textarea>
                        </div>
                        <div class="col-12 d-flex gap-2">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Desejo receber as novidades do Instituto Conceição Moura
                            </label>
                        </div>
                        <div class="col-12 mt-5 justify-content-center d-flex">
                            <button type="submit" class="btn icm-cta flex-fill">ENVIAR</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
</div>

<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</script>