<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>list</title>
</head>

<body>
    <div class="container mt-3">
        <a href="index.php?url=add" class="btn btn-success mb-3">Add</a>
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Age</th>
                <th>Action</th>
            </thead>
            <?php foreach($student as $it) :?>
            <tbody>
                <td><?= $it['id']?></td>
                <td><?= $it['name']?></td>
                <td><?= $it['phone']?></td>
                <td><?= $it['age']?></td>
                <td>
                    <a href="index.php?url=edit&id=<?=$it['id']?>" class="btn btn-primary">Edit</a>
                    <a href="index.php?url=remove&id=<?= $it['id'] ?>" onclick="return confirm('Are you sure')" class="btn btn-danger">Delete</a>
                </td>
            </tbody>
            <?php endforeach?>
            
        </table>
    </div>
</body>
</html>