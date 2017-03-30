	<ul class="hr-ul">
		<?php foreach ($data as $number) {
		?>
			<li class="hr-li">
			<?php  if($number %2==0){ ?>
					<span class="hr-genap"> <?php echo $number; ?></span>
			<?php  }else{ ?>
					<span><?php echo $number; ?></span>
			<?php  } ?>					
			</li>

		<?php 
		}  ?>
	</ul>