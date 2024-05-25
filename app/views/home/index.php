<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Hospital Management</title>
</head>

<body>
    <div class="container">
        <h3>Quản lý bệnh nhân</h3>
        <a href="<?= DOMAIN . 'index.php?controller=addpatient' ?>" name="them" class="btn btn-success">Thêm mới</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($patients as $patient) {

                    ?>
                    <tr>
                        <th scope="row"><?= $patient->getId(); ?></th>
                        <td><?= $patient->getFullName(); ?></td>
                        <td><?= $patient->getGender(); ?></td>
                        <td>
                            <!-- <a href="">Sửa</a> -->
                            <a href="<?= DOMAIN . 'index.php?controller=editpatient&id=' . $patient->getId() ?>"><i class="bi bi-pencil-square"></i></a>
                            
                        </td>
                        <td>
                            <!-- <a href="">Xóa</a> -->
                            <a href="<?= DOMAIN . 'index.php?controller=deletepatient&id=' . $patient->getId() ?>"><i class="bi bi-trash3"></i></a>
                            
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>