<!-- таблица вывода пользователей в админке -->
<tr>
    <form action="users.php" method="GET">
        <td class="text-left">
            <?php echo $row['id'] ?>
        </td>
        <td class="text-left">
            <?php echo $row['name'] ?>
        </td>
        <td class="text-left">
            <?php echo $row['email'] ?>
        </td>
        <td class="text-left">
            <?php echo $row['email_verified_at'] ?>
        </td>
        <td class="text-left">
            <?php echo $row['created_at'] ?>
        </td>
        <td class="text-left">
            <?php echo $row['updated_at'] ?>
        </td>
        <td class="text-right">
            <a class="btn btn-info g6" href="../modules/user/edit.php?id=<?php echo $row['id']?>">Изменить</a>
            <a class="btn btn-danger g6" name="delete" href="../modules/user/delete.php?id=<?php echo $row['id']?>&delete=1">Удалить</a>
        </td>
    </form>
</tr>
