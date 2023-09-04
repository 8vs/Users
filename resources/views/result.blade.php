@extends('layouts.base')

@section('content')
    <?php   
        $action = $_GET['action'];
        if (isset($action))
            switch ($action) {
                case 1:
                    $name = $_GET['name'];
                    if (isset($name)) {
                        echo "Количество пользователей с именем ".$name." равно ".$count."</br> ";
                        getTable($users, $count);
                    } else 
                        echo "Не хватает параметров для выполнения запроса";
                    break;

                case 2:
                    $age1 = $_GET['age1'];
                    $age2 = $_GET['age2'];

                    if ($age1 > $age2) {$rev= $age1; $age1 = $age2; $age2 = $rev;};

                    if (isset($age1)&isset($age2)) {
                        echo "Количество пользователей возраст которых в диапазоне от ".$age1." до ".$age2." равно ".$count."</br> ";
                        getTable($users, $count);
                    } else 
                        echo "Не хватает параметров для выполнения запроса";
                    break;

                case 3:
                    echo "Средний возраст пользователей составляет: ".$users." лет";
                    //SELECT avg(`age`) FROM `users`
                    break;

                case 4:
                    echo "Вывод самых популярных имен с указанием количества пользователей";
                    //SELECT `name`, COUNT(`name`) FROM `users` group by `name` ORDER BY COUNT(`name`) DESC;
                    getTableAny($users, 'Name');
                    break;

                case 5:
                    echo "Вывод самых популярных городов с указанием количества пользователей";
                    //SELECT `city`, COUNT(`city`) FROM `users` group by `city` ORDER BY COUNT(`city`) DESC;
                    getTableAny($users, 'City');
                    break;

                default:
                    echo "Недопустимый параметр для вывода статистики";               
        } else 
            echo 'Параметр для вывода статистики не передан'; 


        function getTableMore($users, $count) {
            if($count == 0)
                echo "</br> Нет записей в базе данных, удовлетворяющих запросу.";
            else {
                echo '<table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>City</th>
                            <th>Age</th>
                        </tr>
                    </thead>';
                
                    foreach($users as $user)
                        echo '<tr>
                            <td>'.$user->id.'</td>
                            <td>'.$user->name.'</td>
                            <td>'.$user->city.'</td>
                            <td>'.$user->age.'</td>
                        </tr>';
                    
                echo '</table>';
            }
        }

        function getTableAny($users, $id) {
            echo '<table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>'.$id.'</th>
                        <th>Count</th>
                    </tr>
                </thead>';
                
                foreach($users as $user)
                    echo '<tr>
                        <td>'.$user->id.'</td>
                        <td>'.$user->count.'</td>
                    </tr>';
                    
            echo '</table>';            
        }
    ?>
@endsection