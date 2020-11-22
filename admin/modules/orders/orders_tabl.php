<!-- таблица вывода заказов в админке -->
<tr>
    <form action="users.php" method="GET">
        <td class="align-middle">
            <?php echo $row['id'] ?>
        </td>
        <td class="text-left">
            <?php echo $name['name'] ?>
        </td>
        <td class="text-left">
            <?php echo $row['phone'] ?>
        </td>
        <td class="text-left">
            <?php echo $row['details'] ?>
        </td>
        <td class="text-left">
            <?php echo $row['created_at'] ?>
        </td>
        <td class="text-left">
            <?php echo $row['address'] ?>
        </td>
        <td class="text-left">
            <?php echo $row['status'] ?>
        </td>
        <td class="text-right">
            <a class="btn btn-info g6" href="../modules/orders/edit.php?id=<?php echo $row['id']?>">Подробнее</a>
            <a class="btn btn-danger g6" name="delete" href="../modules/orders/delete.php?id=<?php echo $row['id']?>&delete=1">Удалить</a>
        </td>
    </form>
</tr>
