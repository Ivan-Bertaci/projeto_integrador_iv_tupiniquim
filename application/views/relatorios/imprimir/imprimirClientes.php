<!DOCTYPE html>
<html>

<head>
    <title>Minha Loja- <?= $title ?>
    </title>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/blue.css" class="skin-color" />
</head>

<body style="background-color: transparent">
    <div class="container-fluid">

        <div class="row-fluid">
            <div class="span12">

                <div class="widget-box">
                    <?= $topo ?>
                        <div class="widget-title">
                            <h4 style="text-align: center">
                                <?= $title ?>
                            </h4>
                            <br>
                        </div>
                        <div class="widget-content nopadding">

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="font-size: 1.2em; padding: 5px;">Nome</th>
                                        <th style="font-size: 1.2em; padding: 5px;">Documento</th>
                                        <th style="font-size: 1.2em; padding: 5px;">Telefone</th>
                                        <th style="font-size: 1.2em; padding: 5px;">Email</th>
                                        <th style="font-size: 1.2em; padding: 5px;">Cadastro</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($clientes as $c) : ?>
                                    <?php $dataCadastro = date('d/m/Y', strtotime($c->dataCadastro)) ?>
                                    <tr>
                                        <td>
                                            <?= $c->nomeCliente ?>
                                        </td>
                                        <td>
                                            <?= $c->documento ?>
                                        </td>
                                        <td>
                                            <?= $c->telefone ?>
                                        </td>
                                        <td>
                                            <?= $c->email ?>
                                        </td>
                                        <td>
                                            <?= $dataCadastro ?>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>

                        </div>

                </div>
                <h5 style="text-align: right">Data do Relatório:
                    <?php echo date('d/m/Y'); ?>
                </h5>

            </div>
        </div>
    </div>
</body>

</html>
