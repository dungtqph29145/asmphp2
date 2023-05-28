<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Edit</title>
</head>

<body>
    <div class="container mt-3">
        <form method="POST" action="index.php?url=update">
            <label for="">Name</label>
            <input type="text" name="name" value="<?= $student['name']?>" class="form-control">

            <label for="">Phone</label>
            <input type="text" name="phone" value=<?= $student['phone']?> class="form-control">

            <label for="">age</label>
            <input type="text" name="age" value=<?=$student['age']?> class="form-control">

            <input type="submit" name="submit" value="Edit" class="btn btn-success mt-5">
            <input type="hidden" name="id" value=<?= $student['id']?>>
        </form>
    </div>
</body>
</html>