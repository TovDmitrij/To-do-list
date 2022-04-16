<?php include_once 'header.php'?>
<form method='post'>
    <div class="row" style="margin-top: 100px; margin-bottom: 80px;">

    <!-- Окно приветствия -->

        <div class="col-2">
            <div class="bg-gray-1 text-center">
                <label class="form-label text-center mt-1 fs-3">
                    Добро пожаловать, <b><?php echo $_SESSION['userName'];?></b>!
                </label>
                <button type="submit" name="logOut" class="btn btn-dark" ><i class="fa-solid fa-right-from-bracket"></i> Выйти</button>
            </div>
        </div>

    <!-- Список задач -->

        <div class="col-8">
            <table class="table bg-gray-1 table-bordered border-dark" name="tableTasks" id="tableOfTasks">
                <thead class="text-center">
                    <tr>
                        <th class="col-1">N</th>
                        <th class="col-15">Задача</th>
                        <th class="col-4">Действия</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    include 'includes/db.inc.php';
                    include 'includes/toDoList.inc.php';
                    ?>
                </tbody>
            </table>
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#NewTask"><i class="fa-solid fa-plus"></i> Добавить задачу</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Модальное окно. Новая задача -->

<form method="post">
    <div class="modal fade" id="NewTask" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Новая задача</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Текст задачи:</label>
                        <textarea class="form-control" name="textOfTask" id="message-text"></textarea>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Назад</button>
                    <button type="submit" name="add_acceptButton" class="btn btn-primary">Подтвердить</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Модальное окно. Изменить задачу -->

<form method="post">
    <div class="modal fade" id="ChangeTask" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Изменить задачу</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Текст задачи:</label>
                        <textarea class="form-control" name="textOfTask" id="message-text"></textarea>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Назад</button>
                    <button type="submit" name="change_acceptButton" class="btn btn-primary">Подтвердить</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php include_once 'footer.php'?>