		<br>
		<?php
			include "con.php";
			$no=1;
			$view = mysqli_query($con,"SELECT id,name FROM prody order by id desc");


		?>
			
			<table border=1 width="400">
				<thead>
					<tr style="text-align:center;">
					<td>no</td>
					<td>name</td>
					<td>Action</td>
				</tr>

				</thead>
				
				<tbody id="table-data">

				<?php while(list($id,$prody)=mysqli_fetch_row($view)){
				?>
					
				<tr id="prody_<?=$id?>">
					<td><?= $no++ ;?></td>
					<td class="isi_data" id="prodyId_<?=$id;?>" data-id='<?=$id;?>'><?= $prody ;?></td>
					<td class="add_btn">
						<button type="button" class="btn-delete" data-id='<?=$id;?>' onclick="return confirm('Delete ?');">Delete</button>
					</td>
				</tr>

				<?php } ?>
				</tbody>

			</table>	
			
			