<?php

if (isset($_SESSION['check'])):

	?>

	<div id="alert" class="alert  alert-dismissible fade show" role="alert">
		<?php echo $_SESSION['msg']; ?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<?php

endif;
unset($_SESSION['check']);
if (isset($_SESSION['alert_color'])) {?>
	
	<script type="text/javascript">
		$(document).ready(function() {
			$('#alert').addClass('alert-success');
		});
	</script>

	<?php
}else{?>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#alert').addClass('alert-danger');
		});
	</script>

	<?php
}
unset($_SESSION['alert_color']);
?>