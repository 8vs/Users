@extends('layouts.base')

@section('content')
    <?php    
        if (isset($action))
            switch ($action) {
                case 1:
                    if (isset($name))
                        echo "Количество пользователей с именем ".$name;
                    else 
                        echo "Не хватает параметров для выполнения запроса";
                    break;
                case 2:
                    if (isset($age1)&isset($age2))
                        echo "Количество пользователей возраст которых в диапазоне от ".$age1." до ".$age2;
                    else 
                        echo "Не хватает параметров для выполнения запроса";
                    break;
                case 3:
                    echo "Средний возраст пользователей";
                    break;
                case 4:
                    echo "Вывод самых популярных имен с указанием количества пользователей";
                    break;
                case 5:
                    echo "Вывод самых популярных городов с указанием количества пользователей";
                    break;
                default:
                    echo "Недопустимый параметр для вывода статистики";               
        }
        else 
            echo 'Параметр для вывода статистики не передан'; 
    ?>
@endsection