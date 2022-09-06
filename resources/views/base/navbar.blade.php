

<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container ">

        <a class="navbar-brand leftnav" href="{{ route('home') }}"> Home☭</a>

        <form class="form-inline my-4 my-lg-0">
            <input class="form-control  d-flex justify-content-center centernav"  style="width: 600px;" type="search" placeholder="Pesquisar" aria-label="Pesquisar">

        </form>
        <div class=" d-flex justify-content-end textnav1 rightnav" id="navbarResponsive">
            <ul class="navbar-nav ml-4">
                <li class="nav-item active">
                </li>
                @if(!\Auth::user())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logar') }}">Login</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sair') }}">Logout</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Cadastrar') }}">Cadastro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="cursor:pointer" href="{{ route('ver_carrinho') }}">Carrinho</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
<nav class="nav2 navbar navbar-expand-lg navbar-light">
    <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav" d-flex justify-content-center>
        <ul class="navbar-nav">
            <li class="nav-item" >
                <a class="nav-link textnav" href="/1/categoria">Geral</a>
            </li>
            <li class="nav-item">
                <a class="nav-link textnav" href="/2/categoria">Masculino</a>
            </li>
            <li class="nav-item">
                <a class="nav-link textnav" href="/3/categoria">Feminino</a>
            </li>
            <li class="nav-item">
                <a class="nav-link textnav" href="/4/categoria">Tênis</a>
            </li>
            <li class="nav-item">
                <a class="nav-link textnav" href="/5/categoria">Infantil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link textnav" href="/6/categoria">Roupas</a>
            </li>
        </ul>
    </div>
</nav>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
