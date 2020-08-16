<div class="col-lg-12 pt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="title text-center">
                Singkatkan URL Situs Websitemu Disini !
            </h4>
            <form action="" method="POST">
                <div class="form-group text-center row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-6 mt-3">
                        <input type="url" name="url" class="form-control" value="<?= @$url ?>" placeholder="Paste Link mu disini ..." required>
                        <span style="color:red; font-size: 12px"><i><?= $this->session->flashdata('verifikasi'); ?></i></span>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <button type="submit" name="sort" class="btn btn-success" style="width:100%">
                            Singkatkan <i class="fa fa-cut"></i>
                        </button>

                    </div>
                </div>
            </form>
        </div>
        <?php if (@$sortener != null) { ?>
            <div class="row mb-3 mt-0">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title" style="color:red">
                                <span onclick="copyTeks()" id="dataCopy"><?= base_url() . $sortener ?></span>
                            </h3>
                            <p class="card-text"><?= @$url ?></p>
                            <a href="#" class="card-link" onclick="copyTeks()">Salin</a>
                            <a href="#" class="card-link">Ganti</a>
                            <a href="#" class="card-link">Bagikan</a>
                            <a href="#" class="card-link">Hapus</a>
                            <p class="card-link float-right"> <?= @date('d/m', strtotime($created == null ? date('y-m-d') : $created)) ?> </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<script type="text/javascript">
    var span = document.getElementById('dataCopy').innerHTML;

    function copyTeks() {
        document.execCommand("copy");
        alert("data '" + span.textContent + "' berhasil di salin")
    }
    span.addEventListener("copy", function(event) {
        event.preventDefault();
        if (event.clipboardData) {
            event.clipboardData.setData("text/plain", span.textContent);
            console.log(event.clipboardData.getData("text"))
        }
    });
</script>