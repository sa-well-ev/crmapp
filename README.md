# craftapp
Вручную созданное приложение в рамках обученя Yii2

Шаги
(1) Настроил GitHub, самое главное это файл .gitignore. Надо исключить папки /vendor, /.idea, файлы compposer.lock
(2) Установил расширение composer fxp/composer-asset-plugin глобально (ключ global)
(3) Настроил composer в PHPStorm, но по умолчанию стоит (--no-interaction), а первый раз он просит ключ от GitHub, и его надо ввести интерактивно
(4) Установил библиотку тестов.
        "codeception/codeception": "*",
        "yiisoft/yii2": "*",
        "fzaninotto/faker": "*"
(5) Пример из главы 2 не запускается
Глава 2 структура приложения
входной скрипт Index.php запускает экземпляр приложения
Контроллер - CustomerController.php
в нём действие actionAdd() - создаёт объектные представления таблиц CustomerRecord.php и PhoneRecord.php
и вызывает представление add.php которое содержит просто форму на странице которая при заполнении передаёт данные через POST в тот же контроллер и метод
При получении данных с формы происходит метод load() который забивает данные с формы в объеты CustomerRecord.php и PhoneRecord.php
и сохраняет в базу через метод store() объект Customer.php который формируется из одноимённых объектов Record...php путём метода MakeCustomer()
И вот тут при выполнении строки
$customer_record->birth_date = $customer->birth_date->format('Y-m-d'); - выходит ошибка, вроде как формат вызывается из пустого экземпляра.
Как будто или $customer пустой или birth_date.

 


