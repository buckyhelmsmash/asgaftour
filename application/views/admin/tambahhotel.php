<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="form-horizontal">
                <fieldset>

                <!-- Form Name -->
                <legend>Form Hotel</legend>

                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-4 control-label" for="hotel">Nama Hotel</label>  
                <div class="col-md-6">
                <input id="hotel" name="hotel" type="text" placeholder="" class="form-control input-md" required="">
                    
                </div>
                </div>

                <!-- Multiple Radios (inline) -->
                <div class="form-group">
                <label class="col-md-4 control-label" for="bintang">Bintang</label>
                <div class="col-md-4"> 
                    <label class="radio-inline" for="bintang-0">
                    <input type="radio" name="bintang" id="bintang-0" value="1" checked="checked">
                    1
                    </label> 
                    <label class="radio-inline" for="bintang-1">
                    <input type="radio" name="bintang" id="bintang-1" value="2">
                    2
                    </label> 
                    <label class="radio-inline" for="bintang-2">
                    <input type="radio" name="bintang" id="bintang-2" value="3">
                    3
                    </label> 
                    <label class="radio-inline" for="bintang-3">
                    <input type="radio" name="bintang" id="bintang-3" value="4">
                    4
                    </label> 
                    <label class="radio-inline" for="bintang-4">
                    <input type="radio" name="bintang" id="bintang-4" value="5">
                    5
                    </label>
                </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-4 control-label" for="harga">Harga</label>  
                <div class="col-md-6">
                <input id="harga" name="harga" type="text" placeholder="" class="form-control input-md" required="">
                    
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