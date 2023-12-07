<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Project Template</h1>
    <br>
</p>
<pre>
    <code>
        CREATE TABLE `nnet`.`user` 
        (`id` INT NOT NULL AUTO_INCREMENT , 
        `login` VARCHAR(255) NOT NULL , 
        `password` VARCHAR(255) NOT NULL , 
        `fio` VARCHAR(255) NOT NULL , 
        `phone` VARCHAR(255) NOT NULL , 
        `email` VARCHAR(255) NOT NULL , 
        PRIMARY KEY (`id`))
        ENGINE = InnoDB; 
    </code>
</pre>

Аналогично создаётся таблица "zaya" и связь поля `user`.`id` и `zaya`.`id_user`:
<pre>
    <code>
        ALTER TABLE `zaya` ADD FOREIGN KEY (`id_user`) 
        REFERENCES `user`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;   
    </code>
</pre>
Таблица `status` имеет PRIMARY KEY типа varchar(255), длина указывается 255, ограничение ключа 255.
Его подключаем к `zaya`.`status` как внешний ключ.
<pre>
    <code>
        ALTER TABLE `zaya` ADD FOREIGN KEY (`status`) 
        REFERENCES `status`(`name`) ON DELETE CASCADE ON UPDATE CASCADE; 
    </code>
</pre>
<br>
<img src="https://github.com/GOLEMWORKS/PHP-YII2-DEMO-METOD/assets/97763002/34005096-9347-4d96-85ac-516935641a98" alt="Внешний вид БД в дизайнере">
![Внешний вид БД в дизайнере](https://github.com/GOLEMWORKS/PHP-YII2-DEMO-METOD/assets/97763002/34005096-9347-4d96-85ac-516935641a98)

