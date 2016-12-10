<?php defined('BASEPATH') OR exit('No direct script access allowed');

if (empty($_SESSION['username']) && empty($_SESSION['logged_in'])) {
    redirect('login');
}
?>

<div class="col-md-9">
    <div class="panel panel-default">
        <div class="panel-heading">
            <button class="btn btn-default" type="submit">Добавить счет</button>
        </div>
        <div class="panel-body">
            Panel content
        </div>
    </div>
</div>
