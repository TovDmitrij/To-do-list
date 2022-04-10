<?php 
    include_once 'header.php';
    include 'includes/logIn.inc.php';
?>
    <div class="container-md bg-gray-1">
        <form>
            <div class="mb-3 mt-5">
                <label for="exampleInputEmail1" class="form-label mt-1">Логин</label>
                <input type="text" name="login" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label ">Пароль</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" name="reg" class="btn btn-dark mb-3">Новый пользователь?</button>
            </div>
            <div class="d-flex justify-content-center mb-5">
                <button type="submit" name="log" class="btn btn-dark mb-3">Подтвердить</button>
            </div>
            </form>
    </div>
<?php include_once 'footer.php'?>