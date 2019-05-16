<html>

<head>

    <?php $this->load->view('admin/_partials/head'); ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php $this->load->view('admin/_partials/sidebar'); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php $this->load->view('admin/_partials/topbar'); ?>

                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="<?= base_url('admin/tambahnegara') ?>">
                                <fieldset>

                                    <!-- Form Name -->
                                    <legend>Input Negara</legend>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="negara">Negara</label>
                                        <div class="col-md-4">
                                            <input id="nama_negara" name="nama_negara" type="text" placeholder="" class="form-control input-md">
                                            <?= form_error('nama_negara', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <!-- File Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="filebutton">Image</label>
                                        <div class="col-md-4">
                                            <input id="gambar_negara" name="gambar_negara" class="input-file" type="file">
                                            <?= form_error('gambar_negara', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Save"></label>
                                        <div class="col-md-4">
                                            <button id="Save" type="submit" name="Save" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>