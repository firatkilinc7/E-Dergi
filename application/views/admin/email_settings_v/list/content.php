<section class="panel">
    <header class="panel-heading">
        <a href="<?php echo base_url("settings/email/new_form"); ?>" class="btn btn-outline btn-primary btn-xs pull-right"> <i class="fa fa-plus"></i> Yeni Ekle</a>

        <h2 class="panel-title">Email Ayarları Listesi</h2>
    </header>
    <div class="panel-body">

        <?php if(empty($items)) { ?>

        <div class="alert alert-info text-center">
            <p>Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen <a href="<?php echo base_url("settings/email/new_form"); ?>">tıklayınız</a></p>
        </div>

        <?php } else { ?>
			<div class="table-responsive">
				<table class="table table-bordered table-striped mb-none">
				
					<thead>
						<th class="w50">#id</th>
						<th>E-posta Başlık</th>
						<th>Sunucu Adı</th>
						<th>Protokol</th>
						<th>Port</th>
						<th>E-posta</th>
						<th>Kime</th>
						<th>Durumu</th>
						<th>İşlem</th>
					</thead>
					
					<tbody>
						<?php foreach($items as $item) { ?>
							<tr>
								<td class="w50 text-center">#<?php echo $item->id; ?></td>
								<td class="text-center"><?php echo $item->user_name; ?></td>
								<td class="text-center"><?php echo $item->host; ?></td>
								<td class="text-center"><?php echo $item->protocol; ?></td>
								<td class="text-center"><?php echo $item->port; ?></td>
								<td class="text-center"><?php echo $item->user; ?></td>
								<td class="text-center"><?php echo $item->to; ?></td>
								
								<td class="text-center w100">
									<div class="switch switch-success">
										<input
										data-url="<?php echo base_url("settings/email/isActiveSetter/$item->id"); ?>"
										class="isActive"
										type="checkbox"
										name="switch" 
										data-plugin-ios-switch 
										<?php echo ($item->isActive) ? "checked" : ""; ?> />
									</div>
								</td>
								
								<td class="text-center w200">
									<button
										data-url="<?php echo base_url("settings/email/delete/$item->id"); ?>"
										class="btn btn-sm btn-danger btn-outline remove-btn">
										<i class="fa fa-trash"></i> Sil
									</button>
									<a href="<?php echo base_url("settings/email/update_form/$item->id"); ?>" class="btn btn-sm btn-primary btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		<?php } ?>
	</div>
</section>