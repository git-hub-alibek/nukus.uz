<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="/assets/images/favicon.png">    
<link rel="stylesheet" href="/assets/styles/bootstrap4/bootstrap.min.css">
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

</head>
<body >
	<div style="padding: 10px 50px 10px 50px; border: 1px solid rgba(0, 0, 0, 0.1);"><br/><br/><br/><br/><br/><br/>
	<h1 style="text-align:center">Админ Панель</h1> <hr>
	<a style="font-size: 25px" class="btn btn-success" href='<?php echo site_url('/');?>'><i class="fa fa-home"></i>Бас бетке қайтыу</a> |
				<a style="font-size: 25px" class="btn btn-primary" href='<?php echo site_url('admin/news');?>'><i class="glyphicon glyphicon-wrench">  </i> Жаналық қосыу</a> |
				<a style="font-size: 25px" class="btn btn-primary" href='<?php echo site_url('admin/investicion');?>'><i class="glyphicon glyphicon-list-alt">  </i> Инвестиция қосыу</a> |
				<a style="font-size: 25px" class="btn btn-primary" href='<?php echo site_url('admin/vacancy');?>'><i class="glyphicon glyphicon-list-alt">  </i> Вакансия қосыу</a> |
				<a style="font-size: 25px" class="btn btn-primary" href='<?php echo site_url('admin/rezume');?>'><i class="glyphicon glyphicon-list-alt">  </i> Резюме</a> |
				
				<a style="font-size: 25px" class="btn btn-primary" href='<?php echo site_url('auth/index');?>'><i class="glyphicon glyphicon-user"></i> Пайданыўшылар </a> | 
				<a style="font-size: 25px" class="btn btn-danger" href='<?php echo site_url('auth/logout');?>'><i class="glyphicon glyphicon-log-out"> </i> Шығыў</a> 
		
	</div>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
