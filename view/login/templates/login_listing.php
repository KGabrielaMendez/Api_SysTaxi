<?php
if (isset($msg)) {
    echo $msg;
}
?>
<?php include "../inc/inc_head.php" ?>
<h1>ROLES DE USUARIO</h1>
<br/>
<div class="col-sm-12 col-md-12">

    <br/><table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th style="text-transform: capitalize; width: 150px; font-weight: bold;">ID ROL</th>
                <th style="text-transform: capitalize; width: 150px; font-weight: bold;">USERNAME</th>
                <th style="width: 128px;">Accion</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $key => $value) { ?>
                <tr>
                    <td><?php
            if ($value['ID_ROL'] == "1") {
                echo "Administrador";
            }
            if ($value['ID_ROL'] == "2") {
                echo "Cliente";
            }
            if ($value['ID_ROL'] == "3") {
                echo "Conductor";
            }
            ?>
                    </td>
                    <td><?php echo $result[$key]['USERNAME'] ?></td>
                    <td><a href="login.php?option=view&ID_LOG=<?php echo $result[$key]['ID_LOG'] ?>"><i class="fa fa-eye"></i></a>&nbsp;|&nbsp;<a href="login.php?option=edit&ID_LOG=<?php echo $result[$key]['ID_LOG'] ?>"><i class="fa fa-pencil-square"></i></a>&nbsp;|&nbsp;<a href="login.php?option=delete&ID_LOG=<?php echo $result[$key]['ID_LOG'] ?>" onclick="return confirm('Are you sure you want to delete this record?');"><i class="fa fa-trash"></i></a></td>
                </tr>
                <?php }
            ?>
        </tbody>
    </table><br />
</div>
<?php include "inc/inc_footer.php"; ?>
