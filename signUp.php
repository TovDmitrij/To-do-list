<?php 
    include_once 'header.php';
    include 'includes/signUp.inc.php';
?>
    <div class="container-md bg-gray-1">
        <form>
            <div class="mb-3 mt-5">
                <label for="exampleInputEmail1" class="form-label mt-1">Логин</label>
                <input type="text" class="form-control" name="login">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input type="password" class="form-control" name="password" id="pass1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Повторите пароль</label>
                <input type="password" class="form-control" name="passwordRepeat" id="pass2">
            </div>
            <div class="d-flex justify-content-center mb-5">
                <button type="submit" name="reg" class="btn btn-dark mb-3 ">Подтвердить</button>
            </div>
        </form>
    </div>
<?php include_once 'footer.php';?>