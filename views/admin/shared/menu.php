<aside class="col-md-2 sidebar">
	<div class="header-menu"> 

		<div style="background-color: #cf2f34; width: 100%;height: 50px;"></div>


		<div class="dropdown menu-admin">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fa fa-user-circle"></i>
				<?php $this->helpers['AdminSession']->showAdmin("name")?>
			</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="<?php echo $url ?>/admin/logout"> 
					<i class="fa fa-walking"></i>
					Sair
				</a>
			</div>
		</div>

	</div>

	<div class="sidebar-links">
		<ul>
			
			<li>
				<a href="<?php echo $url?>/admin/home">
					<i class="fas fa-address-card"></i>
					Menu do Administrador
				</a>
			</li>

		</ul>
	</div>
</aside>

