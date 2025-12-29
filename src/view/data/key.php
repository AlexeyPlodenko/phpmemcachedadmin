<?php
use App\Library\App;
?>
<div class="breadcrumbs">
    <a href="<?php echo App::getInstance()->rootPath(); ?>/">Home</a> > <a href="<?php echo App::getInstance()->rootPath(); ?>/data/?server=<?= htmlspecialchars($requestServer, ENT_QUOTES) ?>">Data</a> > <?= htmlspecialchars($key) ?>
</div>

<?php if (isset($data)) : ?>
    <table border="1">
        <tr>
            <td>Key:</td>
            <td><?= htmlspecialchars($key) ?></td>
        </tr>
        <tr>
            <td>Data:</td>
            <td><?= htmlspecialchars($data) ?></td>
        </tr>
    </table>

<?php endif ?>
