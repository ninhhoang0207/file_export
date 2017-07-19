<!DOCTYPE html>
<html>
<head>
	<title><?php echo $__env->yieldContent('title'); ?> | Trang chủ</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- Date Time Pikcer CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/jquery.datetimepicker.css')); ?>">
	<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- Date Time Picker JS -->
	<script src="<?php echo e(asset('js/jquery.datetimepicker.js')); ?>" type="text/javascript"></script>
</head>
<body>
	<div class="container">
		<?php echo $__env->yieldContent('content'); ?>
	</div>
</body>
<?php echo $__env->yieldPushContent('scripts'); ?>
</html>