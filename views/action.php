<form action="" method="POST">
    <div class="groups-elements">
        <div class="col-md-9 col-md-offset-1 col-xs-10 col-xs-offset-1 element-input">
            <textarea class="form-control text-action" placeholder="Текст акции..." name="text-action" cols="30" rows="10"></textarea>
        </div>
        
        <h3 class="col-md-9 col-md-offset-1 col-margin-top">Введите время действия акции:</h3>
        
        <div class="col-md-3 col-md-offset-1 col-xs-10 col-xs-offset-1 element-input col-margin-top">
        	<div class="container-input">
                <p class="input-placeholder">Дни...</p>
                <input type="number" class="form-control" placeholder="Дни..." name="action-days" value="<?= $action['days']; ?>">
                <div class="input-undeline"></div>
            </div>
        </div>
        
        <div class="col-md-3 col-md-offset-1 col-xs-10 col-xs-offset-1 element-input col-margin-top">
        	<div class="container-input">
                <p class="input-placeholder">Часы...</p>
                <input type="number" class="form-control" placeholder="Часы.." name="action-hours" value="<?= $action['hours']; ?>">
                <div class="input-undeline"></div>
            </div>
        </div>
        
        <div class="col-md-3 col-md-offset-1 col-xs-10 col-xs-offset-1 element-input col-margin-top">
        	<div class="container-input">
                <p class="input-placeholder">Минуты...</p>
                <input type="number" class="form-control" placeholder="Минуты..." name="action-minutes" value="<?= $action['minutes']; ?>">
                <div class="input-undeline"></div>
            </div>
        </div>
        
        <div class="col-md-5 col-md-offset-3 col-xs-10 col-xs-offset-1 element-input col-margin-top">
        	<div class="container-input">
                <p class="input-placeholder">Количесто клиентов...</p>
                <input type="number" class="form-control" placeholder="Максимальное количесто клиентов..." name="action-count-users" value="<?= $action['count_users']; ?>">
                <div class="input-undeline"></div>
            </div>
        </div>
        
        <div class="col-md-3 col-md-offset-4 col-xs-10 col-xs-offset-1 element-input col-margin-top">
            <input type="submit" class="btn btn-primary" value="Обносить акцию" name="send-action">
        </div>
        
    </div>
</form>