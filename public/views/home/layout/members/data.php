<!--=== News Block ===-->
<div class="bg-color-light">
    <div class="container content-sm">
        <div class="text-center margin-bottom-50">
            <h2 class="title-v2 title-center">DATA MEMBERS 12</h2>
        </div>

        <div class="row news-v2">
            <div class="col-md-12">
                <?php echo $this->session->flashdata("notif") ?>
                <?php
                        if($this->session->userdata("member_id")) :
                ?>

                <div class="search-members" style="text-align: center">
                    <form method="GET" action="<?php echo base_url('members/search');?>" style="margin-top: 10px">
                        <div class = "input-group">
                            <input type = "text" name = "q" class = "form-control input-lg" placeholder="Masukkan Nama Members atau Institusi dan Enter" autocomplete="off" id="articles">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <span class = "input-group-btn">
                              <button class = "btn btn-default btn-lg" type = "submit">
                                 <i class="fa fa-search"></i> Search
                              </button>
                           </span>
                        </div>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" style="margin-top:20px;background-color: #fff">
                        <tbody>
                        <thead>
                        <tr>
                            <th class="text-center" style="color: #000;">No.</th>
                            <th class="text-center" style="color: #000;"><i class="fa fa-user-circle-o"></i> NAMA LENGKAP</th>
                            <th class="text-center" style="color: #000;"><i class="fa fa-building"></i> INSTITUSI</th>
                            <th class="text-center" style="color: #000;"><i class="fa fa-cogs"></i> Foto</th>
                            <th class="text-center" style="color: #000;"><i class="fa fa-cogs"></i> OPTIONS</th>
                        </tr>
                        </thead>
                        <?php
                        if($members != NULL):
                        $no = $this->uri->segment(3) + 1;
                        foreach($members->result() as $hasil):
                            ?>
                            <tr>
                                <td class="text-center" style="color: #000"><?php echo $no++; ?></td>
                                <td style="color: #000"> <?php echo $hasil->nama ?></td>
                                <td style="color: #000"> <?php echo $hasil->nama_institusi ?></td>
                                <td style="color: #000"><img src="<?php echo base_url() ?>resources/images/members/<?php echo $hasil->foto ?>" width="100px;"> </td>
                                <td class="text-center">
                                    <a class='btn-u btn-u-sea btn-block rounded' style="font-family: Roboto;font-weight: 400;" data-toggle="tooltip" data-placement="top" title="Edit" href='<?php echo base_url() ?>members/detail/<?php echo $this->encryption->encode($hasil->id_member) ?>'><i class="fa fa-external-link"></i> Detail</a>
                                </td>
                            </tr>
                            <?php
                        endforeach;
                        ?>
                        </tbody>
                    </table>
                    <?php echo $paging ?>
                    <?php else : ?>
                        </tbody>
                        </table>
                        <div class="alert alert-danger">
                            <span><b> Warning! </b> Data tidak ada didatabase </span>
                        </div>
                        <div class="reload" style="text-align: center;margin-bottom: 7px">
                            <a  href="<?php echo base_url('members?source=reload&utf8=✓') ?>" class="btn btn-danger btn-reset btn-fill" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Reloading..."><i class="fa fa-repeat"></i> Reload Page</a>
                        </div>
                    <?php endif; ?>
                </div>

                <?php else : ?>
                    <div class="alert alert-danger" style="font-size: 18px">
                        <span><b> MAAF! </b> Data member terkunci, silahkan <a href="<?php echo base_url() ?>members/daftar/" style="color: #000;text-decoration: none">daftar</a> dan <a href="<?php echo base_url() ?>members/login/" style="color: #000;text-decoration: none">login</a> untuk melihat </span>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
<!--=== End News Block ===-->