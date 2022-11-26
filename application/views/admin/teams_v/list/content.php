<section class="panel">
    <header class="panel-heading">
        <a href="<?php echo base_url("teams/add"); ?>" class="btn btn-outline btn-primary btn-xs pull-right"> <i class="fa fa-plus"></i> Yeni Ekle</a>

        <h2 class="panel-title">Ekibimiz</h2>
    </header>
    <div class="panel-body">

        <?php if(empty($teams)) { ?>

            <div class="alert alert-info text-center">
                <p>Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen <a href="<?php echo base_url("teams/add"); ?>">tıklayınız</a></p>
            </div>

        <?php } else { ?>
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-none">
                   <thead>
                    <th class="w50">İd</th>
                    <th>Ad-Soyad</th>
					<th>Rol</th>
                    <th>Öncelik</th>
                    <th>Görsel</th>
                    <th>İşlemler</th>
                </thead>
                <tbody class="sortable">

                    <?php foreach($teams as $team) { ?>

                        <tr id="ord-<?php echo $team->id; ?>">
                            <td class="w50 text-center">#<?php echo $team->id; ?></td>
                            <td><?php echo $team->name; ?></td>
                            <td><?php echo $team->role; ?></td>
							<td><?php echo $team->rank; ?></td>
                            <td class="text-center w100">
                           
                                <img width="75" src="<?php echo get_picture("$frontViewFolder/$viewFolder",$team->img_url, "900x600"); ?>" alt="" class="img-rounded">
                            </td>

                            <td class="text-center w200">
                                <button
                                data-url="<?php echo base_url("teams/delete/$team->id"); ?>"
                                class="btn btn-sm btn-danger btn-outline remove-btn">
                                <i class="fa fa-trash"></i> Sil
                            </button>
                            <a href="<?php echo base_url("teams/update_form/$team->id"); ?>" class="btn btn-sm btn-primary btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</a>
                        </td>
                    </tr>

                <?php } ?>

            </tbody>
        </table>

    </div>
<?php   } ?>
</div>
</section>