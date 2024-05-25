<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sửa Bệnh Nhân</title>
</head>

<body>
    <h2>Sửa Bệnh Nhân</h2>

    <form class="form" action="" method="post">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ID</label>
            <input name="id" type="text" value="<?php echo $row['id']; ?>" class="form-control"
                id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Name</label>
            <input name="name" type="text" value="<?php echo $row['name']; ?>" class="form-control"
                id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Gender</label>
            <input name="gender" type="text" value="<?php echo $row['gender']; ?>" class="form-control"
                id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary" name="update">Submit</button>

    </form>



    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>