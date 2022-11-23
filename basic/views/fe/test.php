<?php  use  yii\helpers\Html; ?>
<?php use yii\widgets\LinkPager; ?>
<?php use yii\base\Widget; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
      
       <?= Html::a('tạo chủ cơ sở', ['test/create'], ['class' => 'create-link']) ?>
       <table class="table">
       <?= Html::a('tạo cơ sở chăn nuôi', ['test/create'], ['class' => 'create-link']) ?>
       <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">chucoso</th>
      <th scope="col">created_at</th>
      <th scope="col">action</th>
     
    </tr>
  </thead>
  <tbody>
  
  <?php foreach ($list as $r): ?> 
    
    <tr>
    <td><?php echo $r['id'];?></td>
    <td><?php echo $r['coso_channuoi']['chucoso'];?></td>
    <td><?php echo $r['created_at'];?></td>
    <td>       <?= Html::a('edit', ['test/edit'], ['class' => 'create-link']) ?> |
              <?= Html::a('delete', ['test/delete'], ['class' => 'create-link']) ?>

  </td>
    </tr>
    <?php endforeach; ?>
   
  </tbody>
</table>
<?php
     echo LinkPager::widget([
        'pagination' => $pagination,
        'maxButtonCount' => 3,
       
        
       
     ]);
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>