<section class="panel">
    <header class="panel-heading">
        <a href="<?php echo base_url("users/new_form"); ?>" class="btn btn-outline btn-primary btn-xs pull-right"> <i class="fa fa-plus"></i> Yeni Ekle</a>
        <h2 class="panel-title">Kullanıcı Listesi</h2>
    </header>
    <div class="panel-body">

        <?php if(empty($items)) { ?>
			<div class="alert alert-info text-center">
				<p>Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen <a href="<?php echo base_url("users/new_form"); ?>">tıklayınız</a></p>
			</div>
			
        <?php } else { ?>
		
			<div class="table-responsive">
				<table class="table table-bordered table-striped mb-none">
					<thead>
						<th class="w50">#id</th>
						<th>Kullanıcı Adı</th>
						<th>Ad Soyad</th>
						<th>E-posta</th>
						<th>Kullanıcı Rolü</th>
						<th>İşlem</th>
					</thead>
					
					<tbody>

						<?php foreach($items as $item) { ?>
							<tr>
								<td class="w50 text-center">#<?php echo $item->id; ?></td>
								<td><?php echo $item->user_name; ?></td>
								<td><?php echo $item->full_name; ?></td>
								<td class="text-center"><?php echo $item->email; ?></td>
								<td class="text-center"><?php echo ucfirst($item->type); ?></td>                
								<td class="text-center w300">
									<button
										data-url="<?php echo base_url("users/delete/$item->id"); ?>"
										class="btn btn-sm btn-danger btn-outline remove-btn">
										<i class="fa fa-trash"></i> Sil
									</button>
									<a href="<?php echo base_url("users/update_form/$item->id"); ?>" class="btn btn-sm btn-primary btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</a>
									<a href="<?php echo base_url("users/update_password_form/$item->id"); ?>" class="btn btn-sm btn-warning btn-outline"><i class="fa fa-key"></i> Şifre Değiştir</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		<?php } ?>
	</div>
</section>