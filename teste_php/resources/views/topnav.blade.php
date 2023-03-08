<div class="container  z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="{{ route('cliente.index') }}">
                                    <i class="fa fa-list opacity-6 text-dark me-1"></i>
                                    Listagem de Clientes
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2 active" href="{{ route('cliente.adicionar') }}">
                                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                                    Cadastro de Clientes
                                </a>
                            </li>             
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>