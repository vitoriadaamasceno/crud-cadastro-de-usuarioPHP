<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhe de Cadastro</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class=row>
            <div class="col-md-12 mt-4">
                <h1 class="text-center">Ver Contato</h1>
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <?php
                        require_once 'model.php';
                        $model = new Model();
                        $id = $_REQUEST['id'];
                        $row = $model->fetch_unico($id);
                        if(!empty($row)){
                        ?>
                        <div class="card-header">
                            <?php echo $row['name']; ?>
                        </div>
                        <div class="card-body">
                            <p> <?php echo $row['email']; ?></p>
                            <p> <?php echo $row['whats']; ?></p>
                            <p> <?php echo $row['address']; ?></p>
                        </div>
                        <?php
                        }else{
                            echo "Sem registros";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>