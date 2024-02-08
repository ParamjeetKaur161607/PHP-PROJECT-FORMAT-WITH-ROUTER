<?php require 'partials/header.php' ?>

<form action="/pk/names" method="post">
    <input type="text" name="username" id="username">
    <input type="password" name="password" id="password">
    <input type="submit" value="Submit">
</form>
<ul>
        <?php foreach($result as $item) :?>

        <li><?= $item->id." |  ".$item->username." |  ".$item->password ?></li>

        <?php endforeach?>
    </ul>
<?php 

    echo "<pre>";
    print_r(array_column($result,'password','username')); 
    echo "</pre>";

    $ids=array_map(function($data){
        return $data->id."|".$data->username."|".$data->password;
    },$result);

    echo "<pre>";
    print_r($ids);
    echo "</pre>";

    $id=array_filter($result,function($data){
        if($data->username == 'param'){
            return $data;
        }
    });

    echo "<pre>";
    var_dump($id);
    echo "</pre>";



?>
<?php require 'partials/footer.php' ?>
