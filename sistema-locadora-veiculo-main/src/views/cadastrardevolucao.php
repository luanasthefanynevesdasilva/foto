<?php
    require_once '../controller/VendasController.php';
    require '../controller/totalController.php';
    $total = new totalController();
    $alugues = new VendasController();
?>

<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Devolução</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/styles/main.css">
</head>

<body>
    <div class="container">
        <h1 class="p-1 title">Realizar Devolução</h1>
        <div class="menu p-2">
            <a href="../../index.php" class="btn btn-sm btn-primary">Voltar</a><br><br>
        </div>

        <form class='form' id="form" action="./cadastrardevolucao2.php" method="POST">
            <div class="mb-3"><br>
                        <label for="idaluguel" class="form-label ">selecione  o ID-aluguel</label>
                        <select name="idaluguel" class="form-select" id="idaluguel" required>
                            <option value="" selected disabled>Selecione o ID-aluguel</option>
                            <?php
                            foreach ($alugues->disponivel() as $alugues) { ?>
                                <option value="<?= $alugues->getidaluguel() ?>"><?= $alugues->getidaluguel() ?></option> <?php
                                                                                                            }?>
                        </select>
                    </div><br>
                                <div class="mb-3"><br>
                    <div class="input" style="width: 25% !important;">
                        <label for="extra" class="form-label">valor extra</label>
                        <input type="number" step="any"  name="extra" class="form-control" id="extra" required>
                    </div>
            <div class="mb-3"><br>
                    <label for="datadevolucao" class="form-label">Data-devolução</label>
                    <input type="date" step="any" name="datadevolucao" class="form-control" id="datadevolucao" min = 2021-07-09  required>
                </div><br>
            </div>
                    <div class="mb-3"><br>

                    <div class="input" style="width: 25% !important;">
                        <label for="combustiveldevolucao" class="form-label">combustivel devolucao</label>
                        <input type="number" step="any" min="1" name="combustiveldevolucao" class="form-control" id="combustiveldevolucao" required>
                    </div><br>
                </div>
            <div class="mb-3"><br>
                <div class="input" style="width: 25% !important;">
                    <label for="prgas" class="form-label">preço combustivel</label>
                    <input type="number" step="any" min="1" name="prgas" class="form-control" id="prgas" required>
                </div><br>
            </div>
            <div class="button"><br>
                <button type="submit" class="btn btn-lg btn-success mt-3">Finalizar</button>
            </div>
        </form>
    </div>

        ?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>