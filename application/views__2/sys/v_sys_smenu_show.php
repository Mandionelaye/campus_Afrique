<?php show_breadcrumbs($breadcrumbs);   ?>


<div class="card">
	<div class="card-body">
		<h5 class="card-title"><?php echo $title ?></h5>

		<div class="row">
			<div class="col-lg-10">
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<td> Menu</td>
							<td><strong><?php echo $date_one_element['id_menu']; ?></strong></td>
						</tr>
						<tr>
							<td>Code</td>
							<td><strong><?php echo $date_one_element['code']; ?></strong></td>
						</tr>

						<tr>
							<td>Libellé</td>
							<td><strong><?php echo $date_one_element['libelle']; ?></strong></td>
						</tr>
						<tr>
							<td>Etat</td>
							<td><strong><?php echo show_state_color($date_one_element['etat']); ?></strong></td>
						</tr>

					</tbody>
				</table>
			</div>

		</div>
		<!--end du row -->


	</div>
</div>

</main>