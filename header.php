<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://s34929.pcdn.co/wp-content/themes/instituto-conceicao-moura/assets/images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- WORDPRESS CORE -->
    <?php wp_head(); ?>

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
</head>


<body class="container-fluid">
    <!-- CORPO -->
    <!-- MENU -->
    <div class="w-100 bg-white">
        <div class="container-xl">
            <nav class="navbar navbar-expand-lg bg-white p-0 m-0">
                <div class="d-flex align-items-center justify-content-between flex-fill flex-md-auto icm-header">
                    <a href="/" class="text-nowrap align-self-end nav-bar-brand">
                        <img data-bs-toggle="collapse" src="<?php echo get_template_directory_uri(); ?>/imgs/logo-icm.png" class="logo-icm-topo"
                            loading="lazy" alt="logo icm" />
                    </a>
                    <button class="navbar-toggler btn-sm icm-toggle-menu" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="bi-list"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse align-items-center" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0 flex-grow-1 justify-content-center">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle icm-dd-icon" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Quem Somos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/nossa-historia">Nossa História</a></li>
                                <li><a class="dropdown-item" href="/o-instituto">O Instituto</a></li>
                                <li><a class="dropdown-item" href="/quem-somos/balanco-social">Relatórios</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle icm-dd-icon" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                O que fazemos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/o-que-fazemos/nosso-publico">Nossa Atuação</a></li>
                                <li><a class="dropdown-item" href="/o-que-fazemos/nossos-projetos">Nossos Projetos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/videos">Videos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/fale-conosco">Contato</a>
                        </li>
                    </ul>
                    <ul class="flex-row py-4 py-lg-0 m-0 p-0 d-flex gap-2">
                        <li class="icm-social-icon"><a href="https://facebook.com/icmoura/" target="_blank"><i
                                    class="bi bi-facebook"></i></a></li>
                        <li class="icm-social-icon"><a href="https://instagram.com/iconceicaomoura/" target="_blank"><i
                                    class="bi bi-instagram"></i></a></li>
                        <li class="icm-social-icon"><a href="https://youtube.com/channel/UCCUeOCaxMXjKdHoqAFvHEMA"
                                target="_blank"><i class="bi bi-youtube"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- FIM MENU -->