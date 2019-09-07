<div class="container">
    <div class="row">
        <form action="http://localhost:8080/index.php/user/criar" method="post" accept-charset="utf-8">
            <div class="form-group">
                <label for="user_email">Email address</label>
                <input type="email" class="form-control" name="user_email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="user_password">Password</label>
                <input type="password" class="form-control" name="user_password" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Permanecer logado</label>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 5px;">Submit</button>
        </form>
    </div>
</div>



