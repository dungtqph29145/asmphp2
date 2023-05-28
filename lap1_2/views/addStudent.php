<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Add</title>
</head>

<body>
    <div class="container mt-3">
        <form method="POST" action="index.php?url=save">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control">

            <label for="">Phone</label>
            <input type="text" name="phone" class="form-control">

            <label for="">age</label>
            <input type="text" name="age" class="form-control">

            <input type="submit" name="submit" value="Add" class="btn btn-success mt-5">
        </form>
    </div>


</body>

</html>