<!-- таблица вывода бота в админке -->
<tr>
    <form action="users.php" method="GET">
        <td class="text-left">
            <?php echo $row['id'] ?>
        </td>
        <td class="text-left">
            <?php echo $row['name']?>
        </td>
        <td class="text-left">
            <?php echo $row['TELEGRAM_CHATID'] ?>
        </td>
        <td class="text-left">
            <?php echo $row['TELEGRAM_TOKEN'] ?>
        </td>
        <td class="text-right">
            <a class="btn btn-info g6" href="../modules/bot/edit.php?id=<?php echo $row['id']?>">Изменить</a>
            <a class="btn btn-danger g6" name="delete" href="../modules/bot/delete.php?id=<?php echo $row['id']?>&delete=1">Удалить</a>
        </td>
    </form>
</tr>
