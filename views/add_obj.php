<form action="" method="POST" enctype="multipart/form-data">
    <div class="groups-elements">
        
        <h3 class="col-md-9 col-md-offset-1 col-margin-top">Введите новые данные для объекта:</h3>
        
         <div class="col-md-9 col-md-offset-1 col-xs-10 col-xs-offset-1 element-input col-margin-top">
         	<div class="container-input">
                <p class="input-placeholder">Название объекта...</p>
                <input type="text" class="form-control" placeholder="Название объекта.." name="title-object-add" required="required">
                <div class="input-undeline"></div>
            </div>
        </div>
        
         <div class="col-md-9 col-md-offset-1 col-xs-10 col-xs-offset-1 element-input col-margin-top">
         	<div class="container-input">
                <p class="input-placeholder">Описание объекта...</p>
                <input type="text" class="form-control" placeholder="Описание объекта.." name="description-object-add" required="required">
                <div class="input-undeline"></div>
            </div>
        </div>
        
        <div class="col-md-4 col-md-offset-1 col-xs-10 col-xs-offset-1 element-input col-margin-top">
        	<div class="container-input">
                <p class="input-placeholder">Создание объекта...</p>
                <input type="date" class="form-control" placeholder="Дата создание объекта.." name="date-object-add" required="required">
                <div class="input-undeline"></div>
            </div>
        </div>
        
        <div class="col-md-4 col-md-offset-1 col-xs-10 col-xs-offset-1 element-input col-margin-top">
        	<div class="container-input">
            	<input type="file" class="form-control" name="file-img-object-add" required="required">
            </div>
        </div>
        
        <div class="col-md-3 col-md-offset-4 col-xs-10 col-xs-offset-1 element-input col-margin-top">
            <input type="submit" class="btn btn-primary" value="Добавить объект" name="send_add_object">
        </div>
    
    </div>
</form>