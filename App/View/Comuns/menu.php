<!-- ##### Inicio Cabeçalho ##### -->
<header class="header_area">
    <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
        <!-- Classy Menu -->
        <nav class="classy-navbar" id="essenceNav">
            <!-- Logo -->
            <a class="nav-brand" href="<?= baseUrl() ?>"><img src="<?= baseUrl() ?>assets/img/core-img/logo.png" alt=""></a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
                <!-- close btn -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>
                <!-- Nav Start -->
                <div class="classynav">
                    <ul>
                        <li><a href="#">Shop</a>
                            <div class="megamenu">
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Coleção Feminina</li>
                                    <li><a href="index.php?view=home&categoria_id=1">Vestidos</a></li>
                                    <li><a href="index.php?view=home&categoria_id=2">Blusas &amp; Camisas</a></li>
                                    <li><a href="index.php?view=home&categoria_id=3">Camisetas</a></li>
                                    <li><a href="index.php?view=home&categoria_id=4">Macação</a></li>
                                    <li><a href="index.php?view=home&categoria_id=5">Sutiã &amp; Calcinha</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Coleção Masculina</li>
                                    <li><a href="index.php?view=home&categoria_id=6">Camisetas</a></li>
                                    <li><a href="index.php?view=home&categoria_id=7">Pólo</a></li>
                                    <li><a href="index.php?view=home&categoria_id=8">Camisas</a></li>
                                    <li><a href="index.php?view=home&categoria_id=9">Jaquetas</a></li>
                                    <li><a href="index.php?view=home&categoria_id=10">Shorts</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Coleção Infantil</li>
                                    <li><a href="index.php?view=home&categoria_id=11">Vestidos</a></li>
                                    <li><a href="index.php?view=home&categoria_id=12">Camisas</a></li>
                                    <li><a href="index.php?view=home&categoria_id=13">Camisetas</a></li>
                                    <li><a href="index.php?view=home&categoria_id=14">Jaquetas</a></li>
                                    <li><a href="index.php?view=home&categoria_id=15">Shorts</a></li>
                                </ul>
                            </div>
                        </li>

                        <li><a href="<?= baseUrl() ?>Home/quemsomos">Quem somos</a></li>
                        <li><a href="<?= baseUrl() ?>Home/contato">Contato</a></li>

                        <?php
                            if (1 == 2) {
                                ?>
                                <li><a href="#">Aldecir Fonseca</a>
                                    <ul class="dropdown">
                                        <li><a href="index.php">Sair</a></li>
                                    </ul>
                                </li>
                                <?php
                            } else {
                                ?>
                                <li><a href="<?= baseUrl() ?>Home/login">Entre ou Cadastre-se</a></li>
                                <?php
                            }
                        ?>
                    </ul>
                </div>
                <!-- Nav End -->
            </div>
        </nav>

        <!-- Header Meta Data -->
        <div class="header-meta d-flex clearfix justify-content-end">
            <!-- Search Area -->
            <div class="search-area">
                <form action="#" method="post">
                    <input type="search" name="search" id="headerSearch" placeholder="Digite para pesquisar">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <!-- Cart Area -->
            <div class="cart-area">
                <a href="<?= baseUrl() ?>Home/carrinhoCompras" id="essenceCartBtn"><img src="<?= baseUrl() ?>assets/img/core-img/bag.svg" alt=""> <span>3</span></a>
            </div>
        </div>

    </div>
</header>
<!-- ##### fim do cabeçalho ##### -->