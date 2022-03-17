<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>E-commerce</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container-fluid">
                <ul class="navbar-nav me-auto mb-2">
                    <li class="nav-item"><a class="nav-link" href="{{route('product.index')}}">Produto</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('product.trash')}}">Lixeira Produto</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('category.index')}}">category</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('category.trash')}}">category trash</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div>
            {{session()->get('success')}}
        </div>
        <section>
            @yield('content')
        </section>
    </main>

</body>
</html>
