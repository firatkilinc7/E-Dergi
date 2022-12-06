<?php 
	$users = get_all_users();
	$user_permission = get_user_permission();
?>
<section class="panel">
    <header class="panel-heading">
		<a href="<?php echo base_url("blogs/new_form"); ?>" class="btn btn-outline btn-primary btn-xs pull-right"> <i class="fa fa-plus"></i> Yeni Ekle</a>
        <h2 class="panel-title">Blog Listesi</h2>
    </header>
	
    <div class="panel-body">
	
        <?php if($user_permission > 2){ ?>
		<div class="form-group row-md-4">
        <label class="col-md-2 mt-sm" style="max-width: fit-content">Kullanıcı: </label>
			<div class="col">
				<select name="type_filter" onchange="funtion()" id="author_filter" >
				
					<option value="all">Hepsi</option>
					
					<?php foreach ($users as $user){ ?>
						<option <?php echo $author == $user->user_name ? "selected" : "" ?> value="<?php echo $user->user_name?>"><?php echo $user->user_name?></option>
					<?php } ?>
				
				</select>
			</div>
		</div>
		<?php } ?>
		
        <?php if(empty($items)) { ?>
            <div class="alert alert-info text-center">
                <p>Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen <a href="<?php echo base_url("blogs/new_form"); ?>">tıklayınız</a></p>
            </div>
        <?php } else { ?>
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-none">
					<thead>
					
						<?php if($user_permission>1){?>
							<th class="order"><i class="fa fa-reorder"></i></th>
						<?php } ;?>
						
						<th class="w50">#id</th>
						<th>Başlık</th>
						<th>Url</th>
						<th>Yazar</th>
						<th>Görsel</th>
						<th>Durumu</th>
						<th>İşlem</th>
					</thead>
					<tbody class="sortable" data-url="<?php echo base_url("blogs/rankSetter"); ?>">

						<?php foreach($items as $item) { ?>

							<tr id="ord-<?php echo $item->id; ?>">
								
								<?php if($user_permission>1){?>
									<td class="order"><i class="fa fa-reorder"></i></td>
								<?php } ;?>
								
								<td class="w50 text-center">#<?php echo $item->id; ?></td>
								<td><?php echo $item->title; ?></td>
								<td><?php echo $item->url; ?></td>                   
								<td><?php echo $item->author; ?></td>                   
								<td class="text-center w100">
									<img width="140" src="<?php echo get_picture("$frontViewFolder/$viewFolder",$item->img_url, "1920x1080"); ?>" alt="" class="img-rounded">
								</td>
								
								<?php if($user_permission>1){?>
									<td class="text-center w100">
										<div class="switch switch-success">
											<input
												data-url="<?php echo base_url("blogs/isActiveSetter/$item->id"); ?>"
												class="isActive"
												type="checkbox"
												name="switch" 
												data-plugin-ios-switch 
												<?php echo ($item->isActive) ? "checked" : ""; ?> 
											/>
										</div>
									</td>
								<?php } else{ ?>
									<td class="w100"><?php echo ($item->isActive) ? "Onaylandı" : "Onay Bekliyor"; ?> </td>
								<?php } ?>
								
								<td class="text-center w200">
									<button
										data-url="<?php echo base_url("blogs/delete/$item->id"); ?>"
										class="btn btn-sm btn-danger btn-outline remove-btn">
										<i class="fa fa-trash"></i> Sil
									</button>
									<a href="<?php echo base_url("blogs/update_form/$item->id"); ?>" class="btn btn-sm btn-primary btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</a>
								</td>	
							</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
		<?php }?>
	</div>
</section>

<script>
	function funtion(){

		var select = document.getElementById("author_filter");
		var selvalue = select.value;
		alert(selvalue);
		window.location.replace(<?php echo "\"".base_url("blogs/filter")."/\"" ?> + selvalue);
	}
	
</script>


"blogs/filter/"+ selvalue