<?php
require_once ("inc/header.php");
?>
<div class="container-fluid">
	<div class="row vh">
		<!-- sidebar -->
		<?php
		require_once ("inc/sidebar.php");
		?>
		<div class="col-10 bg-secondary p-0">			
			<!-- navbar -->
			<?php
			require_once ("inc/navbar.php");
			?>
			<!-- content -->
			<!-- breadcrumb -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb rounded-0 bg-secondary">
					<li class="breadcrumb-item active text-white" aria-current="page">Dashboard</li>
				</ol>
			</nav>
			<!-- Form -->
			<?php
			require_once ("inc/form.php");
			?>
		</div>
	</div>
</div>
<?php
require_once ("inc/footer.php");
?>