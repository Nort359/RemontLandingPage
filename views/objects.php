<?php if($objects_admin) : ?>
	<?php foreach($objects_admin as $object) : ?>
        <div class="row object-line">
            <div class="col-md-1">
            	<p class="object-head">Номер: </p>
                <?= $object['IdObjects']; ?>
            </div>
            
            <div class="col-md-3">
            	<p class="object-head">Заголовок: </p>
                <?= $object['Header']; ?>
            </div>
            
            <div class="col-md-3">
            	<p class="object-head">Описание: </p>
                <?= $object['Description']; ?>
            </div>
            
            <div class="col-md-3">
            	<p class="object-head">Дата: </p>
                <?= $object['Date_object']; ?>
            </div>
            
            <div class="col-md-1">
            	<p></p>
                <a href="?view=change_obj&amp;id_object=<?= $object['IdObjects']; ?>" class="change" title="Изменить"><span class="glyphicon glyphicon-pencil"></span></a>
            </div>
            
            <div class="col-md-1">
            	<p></p>
                <a href="?view=objects&amp;act=delete&amp;id_object=<?= $object['IdObjects']; ?>" class="delete" title="Удалить"><span class="glyphicon glyphicon-remove-sign"></span></a>
            </div>
        </div>
    <?php endforeach; ?>
    
    <a href="?view=add_obj" class="btn btn-primary col-margin-top new-object">Создать новый объект</a>
    
<?php else :  ?>

	<h3 class="text-center col-margin-top">Здесь пока что нет объектов</h3>
    <a href="?view=add_obj" class="btn btn-primary col-margin-top new-object">Создать новый объект</a>

<?php endif;  ?>