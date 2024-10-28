<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site Exemplo</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <!-- Importação do Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Inclusão do JavaScript -->
    <script src="{{ asset('js/scriptsprodutos.js') }}"></script>



    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <style>

        html, body {
            height: 100%;
            margin: 0;
        }

        #content {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Ocupa pelo menos 100% da altura da janela */
        }

        .flex-grow {
            flex-grow: 1; /* Faz com que o conteúdo ocupe o espaço restante */
        }

        .product-card {
            background-color: #e0e0e0;
            padding: 15px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
            /* Espaçamento entre as linhas */
            max-width: 335px;
            /* Largura máxima dos cards */
        }

        .product-card img {
            width: 95%;
            height: 250px;
            /* Ajuste a altura da imagem */
            object-fit: cover;
            /* Ajusta a imagem para cobrir o card */
        }

        .product-price {
            color: red;
            font-size: 24px;
            margin: 10px 0;
        }

        .product-name,
        .market-name {
            font-size: 16px;
            color: #333;
        }

        .product-card p {
            margin-bottom: 0 !important;
            padding-bottom: 0 !important;
        }

        .product-review-label {
            margin-left: 5px;
        }
    </style>
</head>

<body>

<!-- Contêiner principal para manter o conteúdo e o rodapé -->
<div id="content">

     <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="images/logo_cb.png" alt="Logo" class="logo-image">
        </a>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('mercados') }}">Mercados</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" aria-current="page" href="{{ route('produtos') }}">
                            Produtos
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('cadastro_produto') }}">Cadastrar Produto</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- Conta -->
            <a href="{{ route('register') }}" class="navbar-brand ms-auto">
                <img src="{{ asset('images/conta_tcc.png') }}" alt="Conta" class="conta-image">
            </a>

        </div>
    </nav>

    <!-- Seção de Produtos em Destaque -->
    <div class="container mt-5">
        <h2 class="text-start mb-4">Produtos em destaque</h2>

        <!-- Barra de Pesquisa -->
        <div class="container mt-4">
            <input type="text" id="produtoDigitado" class="form-control" placeholder="Pesquisar produto..." onkeyup="pesquisar()"> <br>
            <input type="text" id="mercadoDigitado" class="form-control" placeholder="Pesquisar mercado..." onkeyup="pesquisar()">
        </div>
        <br>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="opcaoBarato" checked onchange="ordenarProdutos()">
            <label class="form-check-label" for="opcaoBarato">
                Organizar do mais barato ao mais caro
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="opcaoCaro" onchange="ordenarProdutos()">
            <label class="form-check-label" for="opcaoCaro">
                Organizar do mais caro ao mais barato
            </label>
        </div>

        <br>

        <!-- Produtos -->
        <div class="row" id="produtos-container">
            <!-- Produto 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card">
                    <div id="carouselProduct1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/pr_suco1.png" alt="Imagem 1 do Produto 1">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_suco2.png" alt="Imagem 2 do Produto 1">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_suco3.png" alt="Imagem 3 do Produto 1">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_suco4.png" alt="Imagem 4 do Produto 1">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_suco5.png" alt="Imagem 5 do Produto 1">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_suco6.png" alt="Imagem 6 do Produto 1">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_suco7.png" alt="Imagem 7 do Produto 1">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselProduct1" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselProduct1" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>
                    <div class="product-info">
                            <form action="{{ route('favoritar') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id_produto" value="37">
                                <input type="hidden" name="id_mercado" value="1">
                                <button class="btn btn-danger favorite-button">
                                    <i class="far fa-heart heart-empty"></i>
                                    <i class="fas fa-heart heart-filled" style="display:none;"></i>
                                </button>
                            </form>
                        <br>
                        <p class="product-name">Refresco em Pó Tang 18g</p>
                        @php
                            // apresentando a media de preços
                            $precomedio = App\Models\ProdutosCaracteristicas::where('id_mercado', 3) // ID do mercado
                            ->where('id_produto', 17) // ID do produto
                            ->avg('preco');
                            @endphp
                            <p class="product-price">R$ {{ number_format($precomedio, 2, ',', '.') }}</p>
                        <p class="market-name">Mercado Noemia</p>
                        <br>
                        <br>
                        <p class="product-review-label">Avalie a veracidade do preço do produto:</p>
                        <form action="{{ route('avaliacao_produto') }}" class="d-inline" method="POST">
                            <input type="hidden" name="id_produto" value="37"> <!-- ID do produto -->
                            <input type="hidden" name="id_mercado" value="1"> <!-- ID do mercado -->
                            @csrf
                            <div class="input-group input-group-sm">
                                <select name="avaliacao_preco" class="form-select" aria-label="Default select example">
                                    <option value="Correto">Correto</option>
                                    <option value="Incorreto">Incorreto</option>
                                </select>
                                <button class="btn btn-outline-secondary" type="submit">
                                    <i class="bi bi-search">Registrar</i> <br>
                                </button>
                                @php
                                // Contando as avaliações
                                $correto = App\Models\AvaliacaoProduto::where('avaliacao_preco', 'Correto')
                                ->where('id_mercado', 1) // ID do mercado
                                ->where('id_produto', 37) // ID do produto
                                ->count();

                                $incorreto = App\Models\AvaliacaoProduto::where('avaliacao_preco', 'Incorreto')
                                ->where('id_mercado', 1) // ID do mercado
                                ->where('id_produto', 37) // ID do produto
                                ->count();
                                @endphp
                                <h6 class="mt-4">Quantidade de Avaliações:</h6>
                                <p class="text-success">O preço está correto: <strong>{{ $correto }}</strong></p>
                                <p class="text-danger">O preço está incorreto: <strong>{{ $incorreto }}</strong></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Produto 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card">
                    <div id="carouselProduct2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/pr_suco1.png" alt="Imagem 1 do Produto 2">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_suco2.png" alt="Imagem 2 do Produto 2">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_suco3.png" alt="Imagem 3 do Produto 2">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_suco4.png" alt="Imagem 4 do Produto 2">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_suco5.png" alt="Imagem 5 do Produto 2">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_suco6.png" alt="Imagem 6 do Produto 2">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_suco7.png" alt="Imagem 7 do Produto 2">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselProduct2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselProduct2" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>
                    <div class="product-info">
                            <form action="{{ route('favoritar') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id_produto" value="37">
                                <input type="hidden" name="id_mercado" value="2">
                                <button class="btn btn-danger favorite-button">
                                    <i class="far fa-heart heart-empty"></i>
                                    <i class="fas fa-heart heart-filled" style="display:none;"></i>
                                </button>
                            </form>
                        <br>
                        <p class="product-name">Refresco em Pó Tang 18g</p>
                        @php
                            // apresentando a media de preços
                            $precomedio = App\Models\ProdutosCaracteristicas::where('id_mercado', 3) // ID do mercado
                            ->where('id_produto', 17) // ID do produto
                            ->avg('preco');
                            @endphp
                            <p class="product-price">R$ {{ number_format($precomedio, 2, ',', '.') }}</p>
                        <p class="market-name">Mercado Tietê</p>
                        <br>
                        <br>
                        <p class="product-review-label">Avalie a veracidade do preço do produto:</p>
                        <form action="{{ route('avaliacao_produto') }}" class="d-inline" method="POST">
                            <input type="hidden" name="id_produto" value="37"> <!-- ID do produto -->
                            <input type="hidden" name="id_mercado" value="2"> <!-- ID do mercado -->
                            @csrf
                            <div class="input-group input-group-sm">
                                <select name="avaliacao_preco" class="form-select" aria-label="Default select example">
                                    <option value="Correto">Correto</option>
                                    <option value="Incorreto">Incorreto</option>
                                </select>
                                <button class="btn btn-outline-secondary" type="submit">
                                    <i class="bi bi-search">Registrar</i> <br>
                                </button>
                                @php
                                // Contando as avaliações
                                $correto = App\Models\AvaliacaoProduto::where('avaliacao_preco', 'Correto')
                                ->where('id_mercado', 2) // ID do mercado
                                ->where('id_produto', 37) // ID do produto
                                ->count();

                                $incorreto = App\Models\AvaliacaoProduto::where('avaliacao_preco', 'Incorreto')
                                ->where('id_mercado', 2) // ID do mercado
                                ->where('id_produto', 37) // ID do produto
                                ->count();
                                @endphp
                                <h6 class="mt-4">Quantidade de Avaliações:</h6>
                                <p class="text-success">O preço está correto: <strong>{{ $correto }}</strong></p>
                                <p class="text-danger">O preço está incorreto: <strong>{{ $incorreto }}</strong></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Produto 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card">
                    <div id="carouselProduct3" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/pr_suco1.png" alt="Imagem 1 do Produto 3">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_suco2.png" alt="Imagem 2 do Produto 3">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_suco3.png" alt="Imagem 3 do Produto 3">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_suco4.png" alt="Imagem 4 do Produto 3">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_suco5.png" alt="Imagem 5 do Produto 3">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_suco6.png" alt="Imagem 6 do Produto 3">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_suco7.png" alt="Imagem 7 do Produto 3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselProduct3" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselProduct3" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>
                    <div class="product-info">
                            <form action="{{ route('favoritar') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id_produto" value="37">
                                <input type="hidden" name="id_mercado" value="3">
                                <button class="btn btn-danger favorite-button">
                                    <i class="far fa-heart heart-empty"></i>
                                    <i class="fas fa-heart heart-filled" style="display:none;"></i>
                                </button>
                            </form>
                        <br>
                        <p class="product-name">Refresco em Pó Tang 18g</p>
                        @php
                            // apresentando a media de preços
                            $precomedio = App\Models\ProdutosCaracteristicas::where('id_mercado', 3) // ID do mercado
                            ->where('id_produto', 17) // ID do produto
                            ->avg('preco');
                            @endphp
                            <p class="product-price">R$ {{ number_format($precomedio, 2, ',', '.') }}</p>
                        <p class="market-name">Mercado Economix</p>
                        <br>
                        <br>
                        <p class="product-review-label">Avalie a veracidade do preço do produto:</p>
                        <form action="{{ route('avaliacao_produto') }}" class="d-inline" method="POST">
                            <input type="hidden" name="id_produto" value="37"> <!-- ID do produto -->
                            <input type="hidden" name="id_mercado" value="3"> <!-- ID do mercado -->
                            @csrf
                            <div class="input-group input-group-sm">
                                <select name="avaliacao_preco" class="form-select" aria-label="Default select example">
                                    <option value="Correto">Correto</option>
                                    <option value="Incorreto">Incorreto</option>
                                </select>
                                <button class="btn btn-outline-secondary" type="submit">
                                    <i class="bi bi-search">Registrar</i> <br>
                                </button>
                                @php
                                // Contando as avaliações
                                $correto = App\Models\AvaliacaoProduto::where('avaliacao_preco', 'Correto')
                                ->where('id_mercado', 3) // ID do mercado
                                ->where('id_produto', 37) // ID do produto
                                ->count();

                                $incorreto = App\Models\AvaliacaoProduto::where('avaliacao_preco', 'Incorreto')
                                ->where('id_mercado', 3) // ID do mercado
                                ->where('id_produto', 37) // ID do produto
                                ->count();
                                @endphp
                                <h6 class="mt-4">Quantidade de Avaliações:</h6>
                                <p class="text-success">O preço está correto: <strong>{{ $correto }}</strong></p>
                                <p class="text-danger">O preço está incorreto: <strong>{{ $incorreto }}</strong></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Produto 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card">
                    <div id="carouselProduct4" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/pr_suco1.png" alt="Imagem 1 do Produto 4">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_suco2.png" alt="Imagem 2 do Produto 4">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_suco3.png" alt="Imagem 3 do Produto 4">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_suco4.png" alt="Imagem 4 do Produto 4">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_suco5.png" alt="Imagem 5 do Produto 4">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_suco6.png" alt="Imagem 6 do Produto 4">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_suco7.png" alt="Imagem 7 do Produto 4">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselProduct4" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselProduct4" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>
                    <div class="product-info">
                            <form action="{{ route('favoritar') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id_produto" value="37">
                                <input type="hidden" name="id_mercado" value="4">
                                <button class="btn btn-danger favorite-button">
                                    <i class="far fa-heart heart-empty"></i>
                                    <i class="fas fa-heart heart-filled" style="display:none;"></i>
                                </button>
                            </form>
                        <br>
                        <p class="product-name">Refresco em Pó Tang 18g</p>
                        @php
                            // apresentando a media de preços
                            $precomedio = App\Models\ProdutosCaracteristicas::where('id_mercado', 3) // ID do mercado
                            ->where('id_produto', 17) // ID do produto
                            ->avg('preco');
                            @endphp
                            <p class="product-price">R$ {{ number_format($precomedio, 2, ',', '.') }}</p>
                        <p class="market-name">Mercado Atacadinho</p>
                        <br>
                        <br>
                        <p class="product-review-label">Avalie a veracidade do preço do produto:</p>
                        <form action="{{ route('avaliacao_produto') }}" class="d-inline" method="POST">
                            <input type="hidden" name="id_produto" value="37"> <!-- ID do produto -->
                            <input type="hidden" name="id_mercado" value="4"> <!-- ID do mercado -->
                            @csrf
                            <div class="input-group input-group-sm">
                                <select name="avaliacao_preco" class="form-select" aria-label="Default select example">
                                    <option value="Correto">Correto</option>
                                    <option value="Incorreto">Incorreto</option>
                                </select>
                                <button class="btn btn-outline-secondary" type="submit">
                                    <i class="bi bi-search">Registrar</i> <br>
                                </button>
                                @php
                                // Contando as avaliações
                                $correto = App\Models\AvaliacaoProduto::where('avaliacao_preco', 'Correto')
                                ->where('id_mercado', 4) // ID do mercado
                                ->where('id_produto', 37) // ID do produto
                                ->count();

                                $incorreto = App\Models\AvaliacaoProduto::where('avaliacao_preco', 'Incorreto')
                                ->where('id_mercado', 4) // ID do mercado
                                ->where('id_produto', 37) // ID do produto
                                ->count();
                                @endphp
                                <h6 class="mt-4">Quantidade de Avaliações:</h6>
                                <p class="text-success">O preço está correto: <strong>{{ $correto }}</strong></p>
                                <p class="text-danger">O preço está incorreto: <strong>{{ $incorreto }}</strong></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Produto 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card">
                    <div id="carouselProduct5" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/pr_sucoMID1.png" alt="Imagem 1 do Produto 5">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_sucoMID2.png" alt="Imagem 2 do Produto 5">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_sucoMID3.png" alt="Imagem 3 do Produto 5">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_sucoMID4.png" alt="Imagem 4 do Produto 5">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_sucoMID5.png" alt="Imagem 5 do Produto 5">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_sucoMID6.png" alt="Imagem 6 do Produto 5">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_sucoMID7.png" alt="Imagem 7 do Produto 5">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselProduct5" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselProduct5" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>
                    <div class="product-info">
                            <form action="{{ route('favoritar') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id_produto" value="38">
                                <input type="hidden" name="id_mercado" value="1">
                                <button class="btn btn-danger favorite-button">
                                    <i class="far fa-heart heart-empty"></i>
                                    <i class="fas fa-heart heart-filled" style="display:none;"></i>
                                </button>
                            </form>
                        <br>
                        <p class="product-name">Refresco Em Pó Mid 20g</p>
                        @php
                            // apresentando a media de preços
                            $precomedio = App\Models\ProdutosCaracteristicas::where('id_mercado', 3) // ID do mercado
                            ->where('id_produto', 17) // ID do produto
                            ->avg('preco');
                            @endphp
                            <p class="product-price">R$ {{ number_format($precomedio, 2, ',', '.') }}</p>
                        <p class="market-name">Mercado Noemia</p>
                        <br>
                        <br>
                        <p class="product-review-label">Avalie a veracidade do preço do produto:</p>
                        <form action="{{ route('avaliacao_produto') }}" class="d-inline" method="POST">
                            <input type="hidden" name="id_produto" value="38"> <!-- ID do produto -->
                            <input type="hidden" name="id_mercado" value="1"> <!-- ID do mercado -->
                            @csrf
                            <div class="input-group input-group-sm">
                                <select name="avaliacao_preco" class="form-select" aria-label="Default select example">
                                    <option value="Correto">Correto</option>
                                    <option value="Incorreto">Incorreto</option>
                                </select>
                                <button class="btn btn-outline-secondary" type="submit">
                                    <i class="bi bi-search">Registrar</i> <br>
                                </button>
                                @php
                                // Contando as avaliações
                                $correto = App\Models\AvaliacaoProduto::where('avaliacao_preco', 'Correto')
                                ->where('id_mercado', 1) // ID do mercado
                                ->where('id_produto', 38) // ID do produto
                                ->count();

                                $incorreto = App\Models\AvaliacaoProduto::where('avaliacao_preco', 'Incorreto')
                                ->where('id_mercado', 1) // ID do mercado
                                ->where('id_produto', 38) // ID do produto
                                ->count();
                                @endphp
                                <h6 class="mt-4">Quantidade de Avaliações:</h6>
                                <p class="text-success">O preço está correto: <strong>{{ $correto }}</strong></p>
                                <p class="text-danger">O preço está incorreto: <strong>{{ $incorreto }}</strong></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Produto 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card">
                    <div id="carouselProduct6" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/pr_sucoMID1.png" alt="Imagem 1 do Produto 6">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_sucoMID2.png" alt="Imagem 2 do Produto 6">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_sucoMID3.png" alt="Imagem 3 do Produto 6">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_sucoMID4.png" alt="Imagem 4 do Produto 6">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_sucoMID5.png" alt="Imagem 5 do Produto 6">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_sucoMID6.png" alt="Imagem 6 do Produto 6">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_sucoMID7.png" alt="Imagem 7 do Produto 6">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselProduct6" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselProduct6" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>
                    <div class="product-info">
                            <form action="{{ route('favoritar') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id_produto" value="38">
                                <input type="hidden" name="id_mercado" value="2">
                                <button class="btn btn-danger favorite-button">
                                    <i class="far fa-heart heart-empty"></i>
                                    <i class="fas fa-heart heart-filled" style="display:none;"></i>
                                </button>
                            </form>
                        <br>
                        <p class="product-name">Refresco Em Pó Mid 20g</p>
                        @php
                            // apresentando a media de preços
                            $precomedio = App\Models\ProdutosCaracteristicas::where('id_mercado', 3) // ID do mercado
                            ->where('id_produto', 17) // ID do produto
                            ->avg('preco');
                            @endphp
                            <p class="product-price">R$ {{ number_format($precomedio, 2, ',', '.') }}</p>
                        <p class="market-name">Mercado Tietê</p>
                        <br>
                        <br>
                        <p class="product-review-label">Avalie a veracidade do preço do produto:</p>
                        <form action="{{ route('avaliacao_produto') }}" class="d-inline" method="POST">
                            <input type="hidden" name="id_produto" value="38"> <!-- ID do produto -->
                            <input type="hidden" name="id_mercado" value="2"> <!-- ID do mercado -->
                            @csrf
                            <div class="input-group input-group-sm">
                                <select name="avaliacao_preco" class="form-select" aria-label="Default select example">
                                    <option value="Correto">Correto</option>
                                    <option value="Incorreto">Incorreto</option>
                                </select>
                                <button class="btn btn-outline-secondary" type="submit">
                                    <i class="bi bi-search">Registrar</i> <br>
                                </button>
                                @php
                                // Contando as avaliações
                                $correto = App\Models\AvaliacaoProduto::where('avaliacao_preco', 'Correto')
                                ->where('id_mercado', 2) // ID do mercado
                                ->where('id_produto', 38) // ID do produto
                                ->count();

                                $incorreto = App\Models\AvaliacaoProduto::where('avaliacao_preco', 'Incorreto')
                                ->where('id_mercado', 2) // ID do mercado
                                ->where('id_produto', 38) // ID do produto
                                ->count();
                                @endphp
                                <h6 class="mt-4">Quantidade de Avaliações:</h6>
                                <p class="text-success">O preço está correto: <strong>{{ $correto }}</strong></p>
                                <p class="text-danger">O preço está incorreto: <strong>{{ $incorreto }}</strong></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Produto 7 -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card">
                    <div id="carouselProduct7" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/pr_sucoMID1.png" alt="Imagem 1 do Produto 7">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_sucoMID2.png" alt="Imagem 2 do Produto 7">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_sucoMID3.png" alt="Imagem 3 do Produto 7">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_sucoMID4.png" alt="Imagem 4 do Produto 7">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_sucoMID5.png" alt="Imagem 5 do Produto 7">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_sucoMID6.png" alt="Imagem 6 do Produto 7">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_sucoMID7.png" alt="Imagem 7 do Produto 7">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselProduct7" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselProduct7" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>
                    <div class="product-info">
                            <form action="{{ route('favoritar') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id_produto" value="38">
                                <input type="hidden" name="id_mercado" value="3">
                                <button class="btn btn-danger favorite-button">
                                    <i class="far fa-heart heart-empty"></i>
                                    <i class="fas fa-heart heart-filled" style="display:none;"></i>
                                </button>
                            </form>
                        <br>
                        <p class="product-name">Refresco Em Pó Mid 20g</p>
                        @php
                            // apresentando a media de preços
                            $precomedio = App\Models\ProdutosCaracteristicas::where('id_mercado', 3) // ID do mercado
                            ->where('id_produto', 17) // ID do produto
                            ->avg('preco');
                            @endphp
                            <p class="product-price">R$ {{ number_format($precomedio, 2, ',', '.') }}</p>
                        <p class="market-name">Mercado Economix</p>
                        <br>
                        <br>
                        <p class="product-review-label">Avalie a veracidade do preço do produto:</p>
                        <form action="{{ route('avaliacao_produto') }}" class="d-inline" method="POST">
                            <input type="hidden" name="id_produto" value="38"> <!-- ID do produto -->
                            <input type="hidden" name="id_mercado" value="3"> <!-- ID do mercado -->
                            @csrf
                            <div class="input-group input-group-sm">
                                <select name="avaliacao_preco" class="form-select" aria-label="Default select example">
                                    <option value="Correto">Correto</option>
                                    <option value="Incorreto">Incorreto</option>
                                </select>
                                <button class="btn btn-outline-secondary" type="submit">
                                    <i class="bi bi-search">Registrar</i> <br>
                                </button>
                                @php
                                // Contando as avaliações
                                $correto = App\Models\AvaliacaoProduto::where('avaliacao_preco', 'Correto')
                                ->where('id_mercado', 3) // ID do mercado
                                ->where('id_produto', 38) // ID do produto
                                ->count();

                                $incorreto = App\Models\AvaliacaoProduto::where('avaliacao_preco', 'Incorreto')
                                ->where('id_mercado', 3) // ID do mercado
                                ->where('id_produto', 38) // ID do produto
                                ->count();
                                @endphp
                                <h6 class="mt-4">Quantidade de Avaliações:</h6>
                                <p class="text-success">O preço está correto: <strong>{{ $correto }}</strong></p>
                                <p class="text-danger">O preço está incorreto: <strong>{{ $incorreto }}</strong></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Produto 8 -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card">
                    <div id="carouselProduct8" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/pr_sucoMID1.png" alt="Imagem 1 do Produto 8">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_sucoMID2.png" alt="Imagem 2 do Produto 8">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_sucoMID3.png" alt="Imagem 3 do Produto 8">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_sucoMID4.png" alt="Imagem 4 do Produto 8">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_sucoMID5.png" alt="Imagem 5 do Produto 8">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_sucoMID6.png" alt="Imagem 6 do Produto 8">
                            </div>
                            <div class="carousel-item">
                                <img src="images/pr_sucoMID7.png" alt="Imagem 7 do Produto 8">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselProduct8" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselProduct8" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>
                    <div class="product-info">
                            <form action="{{ route('favoritar') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id_produto" value="38">
                                <input type="hidden" name="id_mercado" value="4">
                                <button class="btn btn-danger favorite-button">
                                    <i class="far fa-heart heart-empty"></i>
                                    <i class="fas fa-heart heart-filled" style="display:none;"></i>
                                </button>
                            </form>
                        <br>
                        <p class="product-name">Refresco Em Pó Mid 20g</p>
                        @php
                            // apresentando a media de preços
                            $precomedio = App\Models\ProdutosCaracteristicas::where('id_mercado', 3) // ID do mercado
                            ->where('id_produto', 17) // ID do produto
                            ->avg('preco');
                            @endphp
                            <p class="product-price">R$ {{ number_format($precomedio, 2, ',', '.') }}</p>
                        <p class="market-name">Mercado Atacadinho</p>
                        <br>
                        <br>
                        <p class="product-review-label">Avalie a veracidade do preço do produto:</p>
                        <form action="{{ route('avaliacao_produto') }}" class="d-inline" method="POST">
                            <input type="hidden" name="id_produto" value="38"> <!-- ID do produto -->
                            <input type="hidden" name="id_mercado" value="4"> <!-- ID do mercado -->
                            @csrf
                            <div class="input-group input-group-sm">
                                <select name="avaliacao_preco" class="form-select" aria-label="Default select example">
                                    <option value="Correto">Correto</option>
                                    <option value="Incorreto">Incorreto</option>
                                </select>
                                <button class="btn btn-outline-secondary" type="submit">
                                    <i class="bi bi-search">Registrar</i> <br>
                                </button>
                                @php
                                // Contando as avaliações
                                $correto = App\Models\AvaliacaoProduto::where('avaliacao_preco', 'Correto')
                                ->where('id_mercado', 4) // ID do mercado
                                ->where('id_produto', 38) // ID do produto
                                ->count();

                                $incorreto = App\Models\AvaliacaoProduto::where('avaliacao_preco', 'Incorreto')
                                ->where('id_mercado', 4) // ID do mercado
                                ->where('id_produto', 38) // ID do produto
                                ->count();
                                @endphp
                                <h6 class="mt-4">Quantidade de Avaliações:</h6>
                                <p class="text-success">O preço está correto: <strong>{{ $correto }}</strong></p>
                                <p class="text-danger">O preço está incorreto: <strong>{{ $incorreto }}</strong></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div> <!-- Fim da linha de produtos -->
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-vt0sVVDzHFC+6TvmndHDVp5hDmvZmnPte9aiO1VfeRo5OfylbZn0AosY7qEDdljM" crossorigin="anonymous"></script>

</body>

</div>
    <br>
    <br>
    <br>
    <footer class="bg-dark text-light pt-5 pb-4 mt-auto" style="font-family: 'Montserrat', sans-serif;">
    <div class="container">
        <div class="row text-center text-md-start justify-content-center">
            <!-- Logo -->
            <div class="col-12 col-sm-6 col-md-2 mb-4 d-flex justify-content-center align-items-center">
    <img src="images/logo_cb.png" alt="Logo" class="img-fluid footer-logo">
</div>

            <!-- Sobre Nós -->
            <div class="col-12 col-sm-6 col-md-3 mb-4 d-flex flex-column align-items-center align-items-md-start">
                <h5 class="footer-title text-uppercase text-primary">Sobre Nós</h5>
                <p class="text-center text-md-start">Nosso compromisso é comparar e oferecer as melhores opções de produtos, unindo qualidade e preços acessíveis para ajudar você a fazer a melhor escolha.</p>
            </div>

            <!-- Links do Site -->
            <div class="col-12 col-sm-6 col-md-2 mb-4 d-flex flex-column align-items-center align-items-md-start">
                <h5 class="footer-title text-uppercase text-primary">Links do Site</h5>
                <ul class="list-unstyled text-center text-md-start">
                    <li><a href="{{ route('home') }}" class="text-light">Início</a></li>
                    <li><a href="{{ route('mercados') }}" class="text-light">Mercados</a></li>
                    <li><a href="{{ route('produtos') }}" class="text-light">Produtos</a></li>
                    <li><a href="{{ route('cadastro_produto') }}" class="text-light">Cadastrar Produto</a></li>
                </ul>
            </div>

            <!-- Contato -->
            <div class="col-12 col-sm-6 col-md-3 mb-4 d-flex flex-column align-items-center align-items-md-start">
                <h5 class="footer-title text-uppercase text-primary">Contato</h5>
                <div class="contact-info d-flex align-items-center">
                    <i class="fas fa-envelope me-2"></i>
                    <span>cbcompare.bem@gmail.com</span>
                </div>
            </div>

            <!-- Redes Sociais -->
            <div class="col-12 col-sm-6 col-md-2 mb-4 d-flex flex-column align-items-center align-items-md-start">
                <h5 class="footer-title text-uppercase text-primary">Siga-nos</h5>
                <div class="social-icons d-flex align-items-center">
                    <a href="https://www.instagram.com/cbcompare.bem/" class="text-light">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>

        <hr class="bg-light">

        <div class="row text-center text-md-start">
            <div class="col-12 col-md-8 mb-2 mb-md-0">
                <p>© 2024 <span class="text-primary fw-bold">Compare Bem</span></p>
            </div>
            <div class="col-12 col-md-4 text-center text-md-end">
                <p>Desenvolvido por <span class="text-primary fw-bold">Jobson, Samuel, João Vitor e Raphaela</span></p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>