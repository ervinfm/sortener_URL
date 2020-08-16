<div class="col-lg-12 pt-5">
    <div class="card">
        <div class="card-body row">

            <div class="col-lg-12">
                <h4 class="title text-center">
                    Riwayat Sortener URL mu !
                </h4>
            </div>

            <div class="col-lg-12 mt-3 mb-3">
                <?php if (!empty($this->session->has_userdata('succes'))) { ?>
                    <span style="color:red"><?= $this->session->flashdata('succes'); ?></span>
                <?php } ?>
                <a href="<?= site_url('beranda/index') ?>" class="badge badge-success float-right"> tambah </a>
            </div>
            <div class="col-lg-12 table-responsive">
                <table class="table ">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Url Asal</th>
                            <th scope="col">Url Sortener</th>
                            <th scope="col">Pembuatan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($row->result() as $key => $data) { ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $data->url_asal ?></td>
                                <td><?= base_url() . $data->url_sortener ?></td>
                                <td><?= date('d/m/Y H:i', strtotime($data->created_sortener)) ?></td>
                                <td>
                                    <a href="" class="badge badge-warning btn-sm" data-toggle="modal" data-target="#edit<?= $key + 1 ?>"> edit </a>
                                    <a href="<?= site_url('beranda/delete/' . $data->id_sortener) ?>" onclick="return confirm('Yakin Hapus data <?= base_url() . $data->url_sortener ?>')" class="badge badge-danger btn-sm"> hapus </a>
                                    <a href="<?= site_url('beranda/statistik/' . $data->url_sortener) ?>" class="badge badge-info btn-sm"> statistik </a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="edit<?= $key + 1 ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Perbaharui Sortener</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="<?= site_url('beranda/update') ?>" method="POST">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <label for="old">Url Sortener Lama</label>
                                                                <input type="hidden" name="id" value="<?= $data->id_sortener ?>">
                                                                <input type="text" id="old" class="form-control" value="<?= base_url() . $data->url_sortener ?>" readonly>
                                                            </div>
                                                            <div class="col-lg-12 mt-2">
                                                                <label for="new">Url Sortener Baru</label>
                                                                <div class="row">
                                                                    <div class="col-lg-5">
                                                                        <span class="float-right"><?= site_url() ?></span>
                                                                    </div>
                                                                    <div class="col-lg-7">
                                                                        <input type="text" id="new" name="new" class="form-control" placeholder="Perbaharui disini ..." required>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" name="renew" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>