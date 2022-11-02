<form action="./infos.php" method="post">
    <div class="row">
    <div class="mb-3 col-6">
        <label for="exampleInputEmail1" class="form-label">First Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="firstName">
    </div>
    <div class="mb-3 col-6">
        <label for="exampleInputEmail1" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="lastName">
    </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>