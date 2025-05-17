<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO</title>
    <?php $this->load->view("include/styles.php"); ?>
</head>

<body>
    <div class="container mt-3">
        <h3 class="text-center">TODO List</h3>
        <div class="row">
            <div class="col-md-12">
                <form action="<?php echo base_url("todo/insert"); ?>" method="POST">
                    <div class="row">
                        <div class="col-md-11">
                            <input type="text" class="form-control" name="todo_title">
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-primary">Ekle</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <th>Açıklama</th>
                        <th>Durum</th>
                        <th>Sil</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($todos as $todo) { ?>
                        <tr>
                            <td><?php echo $todo->title; ?></td>
                            <td>
                                <input type="checkbox" class="js-switch"
                                    data-url="<?php echo base_url("todo/isCompletedSetter/$todo->id"); ?>"
                                    <?php echo ($todo->isCompleted) ? 'checked' :  '' ?> />
                            </td>
                            <td>
                                <a href=" <?php echo base_url("todo/delete/$todo->id") ?>"
                                    class="btn btn-danger">Sil</a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php $this->load->view("include/scripts.php"); ?>
</body>

</html>