<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="form-horizontal">
                <fieldset>

                <!-- Form Name -->
                <legend>Form Destinasi</legend>

                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Destinasi</label>  
                <div class="col-md-6">
                <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">    
                </div>
                </div>

                <!-- File Button --> 
                <div class="form-group">
                <label class="col-md-4 control-label" for="image">Gambar</label>
                <div class="col-md-4">
                    <input id="image" name="image" class="input-file" type="file">
                </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                <label class="col-md-4 control-label" for="deskripsi">Deskripsi</label>
                <div class="col-md-4">                     
                    <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                <label class="col-md-4 control-label" for="save"></label>
                <div class="col-md-4">
                    <button id="save" name="save" class="btn btn-success">Save</button>
                </div>
                </div>

                </fieldset>
            </form>
        </div>
    </div>
</div>
