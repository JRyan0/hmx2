<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container ">
        
        <a class="navbar-brand leftnav" href="index.php"> Home☭</a>

        <form class="form-inline my-4 my-lg-0">
            <input class="form-control  d-flex justify-content-center centernav"  style="width: 600px;" type="search" placeholder="Pesquisar" aria-label="Pesquisar">

        </form>
        <div class=" d-flex justify-content-end textnav1 rightnav" id="navbarResponsive">
            <ul class="navbar-nav ml-4">
                <li class="nav-item active">
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cadastro">Cadastro</a>
                </li>
                <li class="nav-item">
                    <span class="nav-link" style="cursor:pointer" onclick="openNav()">Carrinho</span>
                </li>
            </ul>
        </div>

    </div>
</nav>
<nav class="nav2 navbar navbar-expand-lg navbar-light">
    <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav" d-flex justify-content-center>
        <ul class="navbar-nav">
            <li class="nav-item" >
                <a class="nav-link textnav" href="/Lançamentos">Lançamentos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link textnav" href="/Masculino">Masculino</a>
            </li>
            <li class="nav-item">
                <a class="nav-link textnav" href="/Feminino">Feminino</a>
            </li>
            <li class="nav-item">
                <a class="nav-link textnav" href="/Infantil">Infantil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link textnav" href="/Ofertas">Ofertas</a>
            </li>
        </ul>
    </div>
</nav>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
