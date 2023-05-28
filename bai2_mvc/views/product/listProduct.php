<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Tên sản phẩm</td>
            <td>Đơn giá</td>
            <td>Xóa</td>
        </tr>
        <?php foreach ($products as $key => $value) {?>
        <tr>
            <td><?php echo $value['id']?></td>
            <td><?php echo $value['ten_sp']?></td>
            <td><?php echo $value['gia']?></td>
            <td><a href="?url=removeProduct&id=<?php echo $value['id']?>">Xóa</a></td>
        </tr>
        <?php }?>
    </table>
</body>
</html>