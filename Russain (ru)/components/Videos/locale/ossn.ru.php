<?php
/**
* Translated locale
* ossn.ru.php
**/

ossn_register_languages('ru', array(
	 'videos' => 'Видеоматериалы', 
	 'video:com' => 'Видеоматериалы', 
	 'video:com:fields:requred' => 'Заполните все поля', 
	 'video:com:title' => 'Название', 
	 'video:com:description' => 'Описание', 
	 'video:com:file' => 'Выбрать файл', 
	 'video:com:save' => 'Сохранить', 
	 'video:com:add' => 'Добавить видео', 
	 'video:com:uploaded' => 'Видео сохранено', 
	 'video:com:upload:failed' => 'Сбой передачи видео', 
	 'video:com:invalid' => 'Недопустимое видео', 
	 'video:com:deleted' => 'Видео удалено', 
	 'video:com:delete:fail' => 'Сбой удаления видео', 
	 'video:com:delete' => 'Удалить', 
	 'video:com:edit' => 'Изменить', 
	 'video:com:saved' => 'Видео сохранено', 
	 'video:com:save:failed' => 'Не удалось сохранить видео', 
	 'video:com:wall:added' => 'Создано новое видео %s', 
	 'video:com:all' => 'Все видео сайта', 
	 'video:com:mine' => 'Мои видео', 
	 'video:com:users:videos' => 'Видео %s', 
	 'video:com:ffmpeg:path' => 'Путь к инструменту FFMPEG', 
	 'video:com:ffmpeg:path:note' => 'Если вы на сервере Linux, то инструменты ffmpeg обычно находятся в каталоге /usr/bin/. Просто введите каталог, в котором существует двоичный файл ffmpeg.', 
	 'video:ffmpeg:input:empty' => 'Заполните все поля', 
	 'video:ffmpeg:path:saved' => 'Путь успешно сохранен', 
	 'video:ffmpeg:path:save:error' => 'Не удалось сохранить путь, кажется внутренняя ошибка.', 
	 'video:com:ffmpeg:found' => 'Двоичный файл FFMPEG найден в %s', 
	 'video:com:ffmpeg:notfound' => 'Двоичный файл FFMPEG не найден', 
	 'video:com:ffmpeg:status' => 'Состояние FFMPEG', 
	 'video:com:mp4:files' => 'Ваш формат видео не поддерживается', 
	 'video:com:upload:conversion:failed' => 'Сбой преобразования видео', 
	 'video:com:uploading' => 'Передача:', 
	 'video:com:converting' => 'Преобразование:', 
	 'video:group' => 'Группа', 
	 'video:com:upgrade:note' => 'Обновите свой видеокомпонент, нажав кнопку ниже', 
	 'ossn:notifications:comments:entity:file:video' => '%s комментарий к видео', 
	 'ossn:notifications:like:entity:file:video' => '%s по# нравилось ваше видео', 
	 'video:com:ffmpeg:compression:value' => 'Значение сжатия (по умолчанию-35)', 
	 'video:com:ffmpeg:compress:text' => 'Диапазон значений от 1 до 50 означает наилучшее качество видео. Мы считаем, что вы сохраняете значение по умолчанию для меньшим объемом затрат на системную память.', 
	 'video:com:ffmpeg:time:value' => 'Максимальное время видео (по умолчанию 30)', 
	 'video:com:ffmpeg:time:text' => 'Максимальное время (в секундах)-10 секунд. Мы считаем, что вы держите его как можно ниже. Больше времени на видео приводит к тому, что использование оперативной памяти становится более медленным. Мы предлагаем вам не делать больше 120 секунд', 
	 'video:com:maxfilesize' => 'Максимальный размер %s МБ', 
	 'video:com:formats' => 'Разрешить форматы (.mov, .mp4)', 
	 'video:com:uploadtime' => 'Видео будет сокраститься до предельной %s секунд', 
	 'video:com:converion:cron:failed' => 'Преобразование этого видео не выполнено!', 
	 'video:com:converion:cron:process' => 'Это видео преобразуется!', 
	 'video:com:converion:cron:pending' => 'Это видео ожидает в очереди для преобразования! Невозможно изменить/удалить видео, находясь в очереди для преобразования.', 
	 'video:com:pending' => 'Ожидание', 
	 'video:com:cronjob' => 'Задание CRON преобразования', 
	 'video:com:cronjob:text' => 'Для преобразования видеороликов в базовой программе требуется задание CRON. Можно обратиться к поставщику хостинга, чтобы добавить задание хрона в учетную запись вашего хостинга. Можно заменить /usr/bin/php на фактический путь для двоичных файлов php.', 
));