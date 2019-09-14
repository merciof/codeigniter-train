<div class="container">
    <div class="row">
        <form action="http://localhost:8080/index.php/book/criar" method="post" accept-charset="utf-8">
            <div class="form-group">
                <label for="exampleInputEmail1">Titulo</label>
                <input type="text" class="form-control" name="book_titulo" aria-describedby="emailHelp" placeholder="Titulo">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Autor</label>
                <input type="text" class="form-control" name="book_autor" placeholder="Autor">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<br>

    <div class="container">
        <div class="row">
            <form action="http://localhost:8080/index.php/book/deletar" method="post" accept-charset="utf-8" method="post">

                <div class="form-group">
                    <input type="text" name="id" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Deletar</button>
            </form>
        </div>
    </div>

    <br>

    <div class="container">
        <div class="row">
            <form action="http://localhost:8080/index.php/book/deletar" method="post" accept-charset="utf-8" method="post">

                <div class="form-group">
                    <input type="text" name="id" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Atualizar</button>
            </form>
        </div>
    </div>

