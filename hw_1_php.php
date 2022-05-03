<?php
$servername = "localhost";
$database = "HW_1";
$username = "root";
$password = "1939939";
// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
// Проверяем соединение
if (!$conn) {
    die("Что-то не так, дружок: <br><br>" . mysqli_connect_error());
}
echo "Соединение с БД установлено <br><br>";

//начало когда, который должен быть в функции

	$city_id = 4; // то, что мы должны передавать в функцию
	$some_a = 0;
	$result = mysqli_query($conn, "SELECT * FROM `users`");
	while ($result_save = mysqli_fetch_assoc($result))
	{
		if ($result_save['city_id'] == $city_id)
		{
			echo $result_save['name'];
			echo '<br>';
			$some_a = $some_a + 1;
		}
	}
	if ($some_a==0)
	{
		print_r( 'Пользователей с таким ID нет');
		echo $city_id;
		echo $some_a;
	}
//конец кода, который должен быть в функции
// я не знаю, почему, если я засовываю весь код выше в фунцкцию, он просто не работает.


//вот таким образом он почему-то не работает
//function GetUserByCityID($city_id){
//        $some_a = 0;
//        $result = mysqli_query($conn, "SELECT * FROM `users`");
//        while ($result_save = mysqli_fetch_assoc($result))
//        {
//                if ($result_save['city_id'] == $city_id)
//               {
//                        echo $result_save['name'];
//                        echo '<br>';
//                        $some_a = $some_a + 1;
//                }
//        }
//        if ($some_a==0)
//        {
//                print_r( 'Пользователей с таким ID нет');
//                echo $city_id;
//                echo $some_a;
//        }
//}

//GetUserByCityID(1);
?>
