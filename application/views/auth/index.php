<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/assets/images/favicon.png">    
    <link rel="stylesheet" href="/assets/styles/bootstrap4/bootstrap.min.css">

</head>
<body >

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<br>
				<a href="/admin" title="Админ панельге қайтыў" class="btn btn-info"><span class="glyphicon glyphicon-arrow-left"></span> Бас панельге қайтыў </a> | <a href="/admin/groups" title="Админ панельге қайтыў" class="btn btn-info"><span class="glyphicon glyphicon-user"></span><span class="glyphicon glyphicon-user"></span> Топарлар дизими </a>
				<h1>Пайдаланыўшылар</h1>
				<div id="infoMessage" style="color: green;"><?php echo $message; ?></div>
				<table cellpadding=0 cellspacing=10 class="table table-striped table-bordered">
					<tr>
						<th scope="col"> # </th>
						<th scope="col">Аты</th>
						<th scope="col">Фамилия</th>
						<th scope="col">Email</th>
						<th scope="col">Топар</th>
						<th scope="col">Статус</th>
						<th scope="col">Ис-ҳәрекет</th>
					</tr>
					<?php $i = 1; ?>
					<?php foreach ($users as $user):?>
						<tr>
				            <td><?php echo $i++; ?></td>
				            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
				            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
				            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
							<td>
								<?php foreach ($user->groups as $group):?>
									<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
				                <?php endforeach?>
							</td>
							<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
							<td><a href="/auth/edit_user/<?php echo $user->id; ?>" title="Өзгертиў"><span class="glyphicon glyphicon-pencil"></span></a> | <a href="/auth/delete_user/<?php echo $user->id; ?>" title="Өшириў"><span class="glyphicon glyphicon-remove-sign"></span></a></td>
						</tr>
					<?php endforeach;?>
				</table>

				<p><a href="/auth/create_user" class="btn btn-success">+ Пайдаланыўшы қосыў</a> | <a href="/auth/create_group" class="btn btn-success">+ Топар қосыў</a></p>
			</div>
		</div>
	</div>

</body>
</html>