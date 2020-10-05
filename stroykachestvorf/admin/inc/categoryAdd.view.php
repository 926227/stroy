<?php
// <!-- Вывод информации о всех категориях в таблицу -->

$categories = $files->getCategories();

// Функция отрисовки таблицы с информацией о категориях фалов
function putInTable($categories)
{
    foreach ($categories as $category) {
        
            echo "<tr>";
            echo "<td>{$category['category_name']}</td>";
            echo "<td><a href='{$_SERVER['REQUEST_URI']}&id_del_category={$category['id']}'>Удалить</a></td>";
            echo "</tr>";
        
    }
}
?>
<table>
    <tr>
        <th>Название категории</th>
        <th>Действие</th>
    </tr>
    <?putInTable ($categories)?>
</table>
<hr>
<form class="category_add" method="POST" action="<?= $_SERVER['REQUEST_URI']?>">
<div class="mb-3">
    <label for="validationTextarea">Введите название новой категории файлов (не более 30 символов)</label>
    <textarea class="form-control" id="validationTextarea" placeholder="Введите текст" name='new_category_name' required></textarea>
    <div class="invalid-feedback">
    Пожалуйста введите название новой категории.
    </div>
</div>
<button class="btn btn-primary" type="submit">Отправить</button>
</form>

