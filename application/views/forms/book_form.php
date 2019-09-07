<div class="container">
    <div class="row">
        <form action="http://localhost:8080/index.php/book/criar" method="post" accept-charset="utf-8">
            <div class="form-group">
                <label for="exampleInputEmail1">Titulo</label>
                <input type="email" class="form-control" name="book_titulo" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Autor</label>
                <input type="password" class="form-control" name="book_autor" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


