<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="img/unicorn.svg" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="style.scss">
    <title>Boombac</title>
</head>
<body>
    <div class=" container card-weather" >
        <div class="card">
            <h5 class="card-header">Погода</h5>
            <div class="card-body">
                <h5 class="card-title">Текущая дата <?php echo date("d/m/Y");?></h5>
                <div class="data_ya">
                    <p class="card-text"><span>Температура за окном  </span>
                        <?php
                        // с кодировкой возможны проблемы, поэтому если вдруг появятся каркозябры, попробуйте добавить следующую строчку кода
                        header('Content-Type: text/html; charset=utf-8');

                        // сторонняя страница сайта, с которой будем брать контент.
                        $content = file_get_contents('http://yandex.ru');

                        // определяем начало необходимого фрагмента кода, до которого мы удалим весь контент
                        $pos = strpos($content, '<div class="weather__temp">');

                        // удаляем все до нужного фрагмента
                        $content = substr($content, $pos);

                        // находим конец необходимого фрагмента кода
                        $pos = strpos($content, '</div>');

                        // отрезаем нужное количество символов от конца фрагмента
                        $content = substr($content, 0, $pos);

                        //если в нужном контенте встречается не нужный кусок текста, то его вырезаем
                        $content = str_replace('текст, который нужно вырезать','', $content);

                        // выводим необходимый контент
                        echo $content;
                        ?>
                    </p>
                </div>

            </div>
        </div>

    </div>

</body>
</html>