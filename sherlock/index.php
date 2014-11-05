<?php

ini_set('display_errors', '0');

session_start();

$info = '';

$path = $_SERVER['REQUEST_URI'];
$split = split("/", $path);
$pageHash = end($split);

$flags = array(1 => true, 2 => false, 3 => false, 4 => false, 5 => false, 6 => false, 7 => false);
$hashes = array(
	1 => 'foobar',
	2 => 'fc01edc7f40e7e95f329e39d87cbaa9b',
	3 => '882119262f026c639af13d352ed153ba',
	4 => '892f8be1b8bf703045ec62c66b767fee',
	5 => '6233a5963db5372cf8cdf04e2aea3219',
	6 => '2e44cb3d08bb05559b24767a994da8f4',
	7 => '618a396e47751baffb2120d123414ae4');

$titles = array(
	1 => "День 1. Тайна чайника из студсовета",
	2 => "День 2. Время ремонтировать стены",
	3 => "День 3. Скандал в БГУИР-е",
	4 => "День 4. Долина сна",
	5 => "День 5. ",
	6 => "День 6. ",
	7 => "День 7. Финал");

$texts = array(
	1 => <<<EOT1
<div class="quote">
			<p>Приношу свои извинения за беспокойство, но проблема требует скорейшего решения. Сама по себе проблема является мизерной, но обстоятельства делают её довольно необычной. Вчера в 17.00 я вышел из студсовета с намерением отправиться на пару. Но дойдя до перехода в пятый корпус вспомнил, что забыл забрать подзарядное для ноутбука. И в это же мгновение осознал, что ключи от комнаты студсовета остались у меня. Когда я вернулся, моё внимание привлекло отсутствие чайника на его привычном месте. Мало того, что он пропал (а ключи были всё время у меня), на его месте еще оставили яблоко с вырезанной ухмыляющейся рожицей.</p>
			<p>Надеюсь, вас не затруднит разобраться в этом деле.</p>
			<p>С уважением, Андрей.</p>
		</div>
		<h4>День 1. Тайна чайника из студсовета</h4>
		<p>Это нелепая ситуация не привлекла бы внимания кого-то другого, но я заинтересовался делом. А причина  была в том, что я уже раньше встречал яблоки с рожицами. И встречал неоднократно.</p>
		<p>Наличие ключа у Андрея не являлось такой большой тайной. Запасной ключ наверняка находился на вахте. Поэтому туда я и направился в первую очередь.</p>
		<p>- Опять этот шум. Сколько можно ремонтировать этот корпус? Каждый день одно и тоже, - услышал я разговор вахтерш.</p>
		<p>- И не говорите. Такое чувство, будто там что-то ищут, - я неожиданно попытался поддержать разговор.</p>
		<p>- И что же там могут искать? – тотчас поинтересовалась одна из вахтерш.</p>
		<p>- Без понятия. Но начали ходить слухи, что клад находится в стенах комнаты, которую сейчас занимает студсовет. Желающих узнать появилось просто тьма сколько. Не удивлюсь, если кто-то попытается украсть у вас запасные ключи от студсовета.</p>
		<p>- Так было бы что красть. Нет у нас запасных ключей. А всех студсоветчиков…</p>
		<p>- Тогда всё в порядке, - перебил я её. – Пойду как раз к ним на чай загляну.</p>
		<p>Я остановился перед 113 кабинетом и внимательно осмотрел дверь. Было более пяти способов взломать эту дверь и не наделать шума. Но зачем кому-то понадобился чайник? И еще эти рожицы… Пришло время осмотреть место преступления.</p>
		<p>Я открыл дверь и заглянул в кабинет студсовета. Удача сегодня была на моей стороне – в помещении был только Андрей.</p>
		<img src="images/1.jpg">
		<p>- Не ожидал, что ты придешь так быстро. Тебя всё же заинтересовал случай? – спросил он, пожимая мне руку.</p>
		<p>- Были сомнения?</p>
		<p>- Это же просто чайник…</p>
		<p>- Возможно, всё куда интереснее. Он стоял здесь?</p>
		<p>- Да, именно. И здесь же я нашел яблоко.</p>
		<p>- У кого еще есть ключи?</p>
		<p>- На вахте есть только эти. Но они были со мной.</p>
		<p>- Ты сегодня первым открыл студсовет?</p>
		<p>- Да. И был тут всё время один.</p>
		<p>- Хорошо. Я увидел всё, что нужно. Теперь идем со мной на второй этаж.</p>
		<p>Когда мы поднялись в холл второго этажа, я принялся осматривать стены и пол, пытаясь найти ожидаемые следы.</p>
		<p>- А почему сюда? – спросил Андрей.</p>
		<p>- Побелка. В студсовете на спинке стула, на стене возле флага и немного на пороге. А у нас тут как раз идет ремонт туалетов. Действительно их долго ремонтируют… Так вот. Тот, кто забрал чайник, вчера несколько раз проходил здесь. Пары? Маловероятно, студенты в большинстве свое предпочитают лестницу у лифта.</p>
		<p>- И что всё это значит?</p>
		<p>- Это значит, что я никак не пойму, почему яблоко с рожицей, точные копии которых я видел на месте убийства и ограбления, появилось в вашем студсовете.</p>
		<p>- Я тоже не знаю. Но кто-то очень заботливо его оставил там, на салфеточке, - улыбнулся Андрей.</p>
		<p>- Салфетке? А почему ты мне об этом не сказал раньше. Покажи её, срочно!</p>
		<p>Мы спустились назад в студсовет. Андрей отдал мне сложенную салфетку, которую я тотчас же развернул.</p>
		<p>- Карандаш. Аккуратно… Ну конечно же, здесь цифры. Что у нас получается? – я стал медленно заштриховывать всю поверхность салфетки. – Так. Что у нас получается? 2093?</p>
		<p>- И что это такое?</p>
		<p>Я с секунду стоял, пытаясь найти ответ. Затем меня осенило.</p>
		<p>- Нам надо опять на второй этаж. За мной!</p>
		<p>- Что это были за цифры? – спросил Андрей, когда мы ворвались в пустую лекционную аудиторию.</p>
		<p>- Это было указание на 209 аудиторию. Если я не ошибаюсь, то под одной из лавок 3 ряда будет еще послание. Вот оно!</p>
		<p>Мы с Андрее замерли в полном молчании и смотрели на надпись «Ἀδάμ».</p>
		<p>- И что это такое? – поинтересовался у меня Андрей.</p>
		<p>- Ты знаком с греческим? Шутники, - я рассмеялся. - Идем, я знаю, где чайник.</p>
		<br>
		<hr>
		<br>
		<p>- Всё оказалось так просто?</p>
		<p>- Да, Андрей. Никакой кражи, никаких тайн. Просто запасная связка ключей.</p>
		<p>- А яблоко, рожицы, эти подсказки на салфетке и в аудитории? Кому это надо?</p>
		<p>- А вот это хороший вопрос, Андрей. Это еще нам предстоит разгадать. Но пока мне надо выпить чашку чая. Ну и холодно у вас тут в студсовете.</p>
EOT1
	, 2 => <<<EOT2
<h4>День 2. Время ремонтировать стены</h4>
<p>Всегда сложно поверить в те вещи, которые не так давно выдумал лично. Еще вчера, пытаясь выяснить местонахождение чайника из студсовета, я упомянул в разговоре с вахтой о поисках чего-то дорогого в стенах корпуса. Мол, поэтому так много ремонтных работ. Не совсем гениальная импровизация, которая помогла раздобыть нужную информацию. И вот уже к вечеру того дня меня начали посещать мысли, что выдумка может таковой и не являться.</p>
<p>Еще с раннего детства я обожал перевоплощения. Возможно, если бы моя страсть к загадкам не была такой сильной, я мог бы вполне успешно стать актером. Актерская игра, эти волшебные моменты, когда ты буквально за несколько часов превращаешься в совершенно нового человека. Это было одной из немногих вещей, способных отвлечь меня от всепоглощающей скуки в отсутствие дела. Но иногда хорошая актерская игра требовалась и во время моей работы.   Если вы хотите узнать информацию для дела от человека, никогда не спрашивайте его напрямую. Он тут же что-то заподозрит, выдумает и закроется от вас. И вместо бесценных фактов вы услышите лишь итоги бурной деятельности фантазии человека. Руководствуясь этим принципом, я решил ненадолго податься в сферу физического труда и облачился в рабочую одежду. Немного грима, достаточное количество актерской игры - и уже немногие могли узнать в идущем по четвертому корпусу строителе скромного консультирующего детектива.</p>
<p>Целый день, проведенный среди мужчин, занимавшихся ремонтом корпуса, дал результатов намного меньше, чем я надеялся. Однако пролить свет на некоторые моменты удалось. Ремонтные работы сейчас были не только в четвертом корпусе. Они проходили по всему университету. На втором этаже третьего корпуса мне удалось поговорить с одним из ремонтников, Ильей.</p>
<p>- И что, это всё необычно? – спросил я.</p>
<p>- Конечно. Ты посмотри, сколько сейчас ремонтируется, перестраивается, меняется. Некоторые говорят, что в четвертом корпусе даже клад ищут. Вроде как в стенах тамошнего студсовета.</p>
<p>- Клад-кладом, но мне такие странностей про работы в этих корпусах рассказывали…</p>
<p>- Это точно, - подтвердил Илья. – Не я один видел - кто-то наблюдает за нашими работами.</p>
<p>- Начальство, что ли?</p>
<p>- Нет. Незаметно, но постоянно. Бывало, работаешь и чувствуешь, что за тобой наблюдают. Жуть. А еще этот, в синей кепке…</p>
<p>- В кепке?</p>
<p>- Ага. Ребята из четвертого и пятого корпусов тоже говорили, что видели. Приходит, лица из-под кепки не видно. И просто стоит и смотрит, как мы работаем. Иногда по несколько часов.</p>
<p>- А вы что? – спросил я.</p>
<p>- А что мы? Сначала думали, может кто из начальства решил понаблюдать. Но он ни с кем не говорит, ничего не делает. Просто смотрит. Странно это. Вчера, кстати, по этому этажу ходил, высматривал всё.</p>
<p>- Высмотрел что?</p>
<p>- А почем мне знать? Он вдруг засуетился и вниз побежал, к гардеробу, возможно.</p>
<p>- Ясно. Действительно жуть. Пора к работе возвращаться. Удачи, Илья.</p>
<p>Я спустился на цокольный этаж и начал внимательно его осматривать. Первые 20 минут меня всё сильнее одолевали мысли, что я трачу время впустую. Но потом удача нашла меня. Одна из плиток напротив гардероба, когда я провел по ней ладонью, упала на пол. Судя по всему, этот человек в кепке искал что-то в корпусе. И нашел здесь. Но как он смог сделать это тихо и незаметно? Конечно же, ремонт в переходе. Пока ревут строительные инструменты, здесь можно делать что хочешь.</p>
<p>После этой находки я решил проверить другие корпуса. И первым делом направился в четвертый корпус. На третьем этаже я без труда нашел нужную мне плитку. Значит, этот человек ищет что-то в стенах корпусов. Но что? Зачем? Эти вопросы пока были непонятными для меня. И тут я увидел удаляющегося к лестнице у лифта человека в синей кепке.</p>
<p>- Подождите! – крикнул я, но человек тут же бегом кинулся к лестнице.</p>
<p>Я побежал за ним. Двери, еще двери. Фигура скрылась за поворотом. Шаги раздавались сверху. Лестничный пролет, еще один. Я буквально вылетел в коридор пятого этажа. Человек продолжал убегать. Я уже начал думать, что он успеет добраться до второй лестницы, но в холле мне удалось его схватить.</p>
<p>Мы кубарем повалились на пол. Началась борьба. Он пытался вырваться, но занятия боевыми искусствами пригодились как нельзя кстати. Я практически мгновенно скрутил его, не оставляя даже шанса на свободу.</p>
<p>- Что тебе от меня надо?</p>
<p>- Во-первых, - пытаясь отдышаться, прохрипел я, - ты хреновый бегун. Во-вторых, зачем ты побежал?</p>
<p>- Побежал и побежал. Тебе какое дело?</p>
<p>- Я знаю, что ты искал в этих корпусах.</p>
<p>- Да неужели? И что же это было? Что я могу найти в его стенах?</p>
<p>- А кто говорил конкретно про стены, а? А теперь выкладывай всё как есть.</p>
<p>- Слушай. Меня попросили обыскивать определенные помещения. Вчера я нашел какой-то сверток. Даже разворачивать не стал, просто передал. Это всё, что я знаю. Только отстань от меня.</p>
<p>- Кому ты передавал?</p>
<p>- Я просто оставил на вахте пакет. Мне сказали продолжать искать. Сегодня я нашел еще один тайник. Там была часть схемы. Судя по всему, планы строительства корпуса.</p>
<p>- Схему я, пожалуй, заберу.</p>
<p>- Конечно. А деньги за первую находку оставить-то можно? Обидно будет получить только яблоко.</p>
<p>- Яблоко? С рожицей? И яблоко я, пожалуй, тоже заберу. А теперь брысь отсюда.</p>
<br>
<hr>
<br>
<p>Получается, некто очень усердно ищет что-то в универе. Схема второго корпуса, которую нашел мой новый знакомый, доказывала эту теорию. Но зачем схема? И опять это яблоко… Пора найти ответы хоть на какие-нибудь вопросы.</p>
EOT2
	, 3 => <<<EOT3
<h4>День 3. Скандал в БГУИР-е</h4>
<p>  Была темная осенняя ночь, за окном шумел дождь, молнии то и дело освещали мрак, сгустившийся за окном, разгоняя все тени. Но это было там, за окном, а в комнате было тепло и уютно. Я спал, утомленный беготней по корпусу и поиском таинственного искателя. И тут раздался короткий сигнал пришедшего сообщения, вернувшего меня в реальный мир.  На часах было ровно 2:22. Сообщение было небольшим: <i>«У нас проблемы, приезжай»</i>.  Ни «привет», ни «пока». Я уже хотел наплевать на всё и лечь спать дальше, но любопытство победило. Пришлось отвечать. </p>
<p>Ш: <i>«Кто это?»</i><br>
 А: <i>«Андрей»</i><br>
 Ш: <i>«Что стряслось?»</i><br>
 А: <i>«Пропали все ключи с вахты»</i><br>
 Ш: <i>«А можно узнать, что ты делаешь в университете в столь поздний час?» </i><br>
А: <i>«Объясню, как приедешь» </i><br>
Ш: <i>«Это не подождет до утра?» </i><br>
А: <i>«Утром из-за пропажи ключей преподаватели не смогут открыть аудитории и начать пары» </i><br>
Ш: <i>«Завтра воскресенье…» </i><br>
А: <i>«…»</i><br>
 Ш: <i>«Вот и отлично. Доброй ночи»</i></p>
<p>Утром я сразу же отправился в корпус. Андрей уже ждал там.</p>
<p>- Здесь всё так же, как и было после кражи» - сказал он. </p>
<p>Первым, что я заметил, было яблоко. Конечно, куда же без яблок. Обычное такое яблочко. С ухмылкой. </p>
<p>- Яблоко появилось после кражи? - спросил я, указывая вахтерше на странный фрукт. </p>
<p>- Я думала, что это студенты так решили намекнуть на Хэллоуин. </p>
<p>В этот момент к нам подошел сторож, который дежурил этой ночью.</p>
<p> - А я говорю тебе, что это сделал призрак, никто другой просто не успел бы за такое время! - сказал он, обращаясь к вахтерше. </p>
<p>- Призрак? – переспросил я. </p>
<p>- Сказки все это.</p>
<p>- И всё же… </p>
<p>- С шестого этажа часто доносятся странные звуки, - сказал сторож. – Уже начали ходить истории.</p>
<p>- Но я уверена, что этому есть простое объяснение! – перебила его вахтерша. - И уж точно там нет никакого призрака.</p>
<p>- Призраки порой бывают куда реальнее людей, - сказал я.</p>
<p>Я сделал пометку, что нужно будет побольше разузнать о странностях инкубатора. Призрака, конечно, нет, но посмотреть стоит. </p>
<p>- Как всё обстояло ночью? – я решил наконец-то преступить к делу.</p>
<p>- На улице у нескольких машин сработала сигнализация. Я пошла глянуть, всё ли в порядке. Вернулась через три минуты – ключей нет. </p>
<p>- Хорошо, мне надо немного осмотреться.</p>
<p>Но дальнейший осмотр вахты ничего не дал. Никаких улик, которые бы прямо или косвенно указали на похитителя. Единственное, что удалось найти - один из ключей, валявшийся на полу. Видимо, похититель (или похитители) очень спешил, раз не стал поднимать его. Пройдясь по корпусу, я не нашел больше ничего полезного.</p>
<p>Итак, что мы имеем… Кому могли понадобиться ключи? Студентам, преподавателям, обслуживающему персоналу. Преподаватели взяли бы ключи на вахте вполне легально, персонал тоже. Остаются студенты. Зачем студентам могли понадобиться все ключи? Нет, забытый в спешке ключ доказывает, что нужен был только один, остальные для отвода глаз. Хорошо, для чего студенту ключ? Проникнуть в аудиторию. Может быть, для срыва лабораторной или контрольной? Хитрее студента, у которого на носу контрольная, может быть только студент, у которого на носу экзамен.  Но в этот момент меня посетила еще одна мысль, и я направился к своему знакомому.</p>
<p>- Андрей, ты так и не рассказал мне, что делал ночью в корпусе.</p>
<p>- Ну… Вахта уже которую ночь пытается поймать хулигана, который пробирается в корпус. Я подумал, что это может быть тот же самый человек, который подкинул яблоко в студсовет. Вызвался помочь. Но это была уже третья ночь слежки, и я задремал. Проснулся от криков о пропаже. Затем написал тебе.</p>
<p>- Ясно. Мне будет нужна помощь. Пораспрашивай ребят, у кого завтра намечается серьезная контрольная.</p>
<p>Смысла дальше находиться в корпусе не было. Если ключи у студентов, то раньше завтрашнего дня их точно не найти. Повезет же некоторым студентам, у которых пропадут пары в понедельник. Но что поделаешь. </p>
<br>
<hr>
<br>
<p>Следующий день выдался довольно жарким. Первый забег по корпусу мы осуществили в поисках групп, у которых намечалась контрольная. Результатов это не дало. Затем мы стали проверять все аудитории. На тот случай, если ключи взяли, чтобы проверить все помещения в корпусе. А то, что кто-то обыскивает корпуса, я уже знал.</p>
<p>- Подожди, - остановил меня Андрей. – Мне сосед несколько дней назад говорил, что после выходных у них будет контрольная. А я и забыл.</p>
<p>- Открывай их расписание и смотри аудиторию.</p>
<p>- Аудитория 220, четвертый корпус.</p>
<img src="images/perehod.jpg" width="300">
<p>- Бегом туда! – крикнул я.</p>
<p>Среди студентов я сразу же выцепил взглядом одного. Тот слишком нервничал, у него постоянно бегали глаза, пот выступил на лбу, хотя было достаточно прохладно. Нет, контрольная - это, конечно, серьезно, и довести она может любого, но не до такой степени. </p>
<p>- И где ключи с вахты? – спросил я.</p>
<p>- Какие ключи? – заикаясь, переспросил студент, но глаза его в это время смотрели куда угодно, но не на меня.</p>
<p>- Если ты признаешься сейчас и вернешь ключи, то я никому ничего не скажу. Потом будет хуже. </p>
<p>- Я не могу, ключи будут на месте только завтра утром.  Я не хотел так, честно. Я просто не успел подготовиться, проклятая бессонница.</p>
<p>- Что значит будут утром? А где они сейчас? – удивленно спросил я.</p>
<p>- Они у… у него. Мы познакомились в интернете, я пожаловался ему, что на последней лекции было просто невозможно не уснуть, я даже тему не записал (это уже не первая подобная жалоба), а сегодня контрольная. Вот он и предложил сорвать пару. Когда я засомневался, он успокоил и сказал, что я должен  буду  только отвлечь сторожа, всё остальное, в том числе и возвращение ключей, он берет на себя. </p>
<p>- Ты можешь показать страницу того, с кем общался? - спросил я, хотя шансов на такой подход мало.  Телефон показал: <i>«Страница пользователя удалена»</i>. Ну что ж, раз не удалось поймать его через интернет, надо это сделать старинным способом: устроить засаду. У Андрея уже и опыт есть. Парня же я решил отпустить. Пусть готовится к контрольной. Лишь напоследок наказал ему не заниматься больше такими вещами. Целее будет.</p>
<p>Ночь ждать пришлось долго. Если бы не тройная доза кофе, похитителю, наверно, было бы даже не интересно возвращать ключи. Пришел—положил. Но кофе был выпит, и слежка велась. В какой-то момент я заметил тень возле вахты. Оттуда же донесся звон ключей. Я рванулся к вахте, а тень, заметив движения, бросилась прочь. Собственно, это была не тень, а человек в черном плаще с капюшоном. Когда капюшон с головы злодея был стянут, я, к удивлению, увидел уже знакомого трясущегося от страха студента. В руках у него были ключи, но я уже понял, что они были не с вахты. Понимание пришло мгновенно, но когда я вернулся на вахту, все ключи уже были на месте. Ни следов, ни улик… Лишь еще одно яблочко. Ключи можно было просто оставить возле корпуса или отдать студенту. Но кто-то специально надо мной издевался.</p>
<p>Еще один раунд  проигран. Настало время выровнять счет.</p>
EOT3
	, 4 => <<<EOT4
<h4>День 4. Долина сна</h4>
<p>Вам когда-нибудь приходилось спать на лекции? После ночи за учебниками… или сериалом? После веселой гулянки или долгой поездки в плацкарте? Приходилось? А приходилось ли вам наблюдать на лекции такую ситуацию, когда ваших однопоточников одного за другим будто выключают по нажатию кнопки? Нет, спящие люди на лекции были всегда. Но чтобы целый ряд неожиданно впал в спячку, причем одновременно, причем не доходя до своих мест…</p>
<p>Именно из-за этой странной ситуации, которая стала повторяться всё чаще, Вадим и решил обратиться ко мне.</p>
<p>- Пришли мы, значит, на лекцию. Сели, достали конспекты, преподаватель пришел. Читает он, в общем, и тут мне одногруппница голову на плечо положила. А я-то, не будь дураком, к ней прильнул. И говорю: <i>«Девчушечка»</i>. А она ноль реакции, спит. Я назад посмотрел – весь ряд одногруппников спит. Потом Андрей заснул. Ну, он-то понятно, он  в засаде ночь сидел. Потом еще один одногруппник заснул, и еще один. </p>
<p>- И что в этом необычного?</p>
<p>- Так лектор тоже заснул. А через секунду и я отключился.</p>
<p>- Интересно.</p>
<p>- Не то слово.</p>
<p>- Были еще похожие случаи?</p>
<p>- В пятом корпусе похожий случай. Можем на нашу сейчас лекцию зайти, в 209. Она уже через несколько минут закончится.</p>
<p>- Пойдем посмотрим.</p>
<p>Мы вышли из студсовета и поднялись на второй этаж. Картина перед нами предстала, мягко говоря, необычная. Весь пол холла был в буквальном смысле усыпан спящими людьми. Из лекционной аудитории доносилось мирное сопение.</p>
<p>- Ничего себе, - сказал Вадим. – И что это такое?</p>
<p>- Занимательная ситуация. Проверь лекционную на цокольном этаже, а я осмотрю пятый корпус, - я стремглав побежал к переходу в соседний корпус.</p>
<img src="images/512.jpg" width="300">
<p>На третьем и четвертом этаже всё было в порядке. А вот возле 512 аудитории была такая же ситуация, как в четвертом корпусе. Хотя нет, она была похожа. Несколько человек за дальними рядами пытались выйти из аудитории, но чем ближе они подходили к двери, тем сильнее их захватывал сон. В итоге к спящим присоединились еще двое.</p>
<p>Я, стараясь не пересекать порог аудитории, осмотрелся. Спящие студенты, открытые конспекты, распахнутые окна, презентация на экране…</p>
<p>Голова начала кружиться. Пора уходить. Я покинул корпус и возле студсовета встретился с Вадимом.</p>
<p>- Спят? – спросил я.</p>
<p>- Все как один.</p>
<p>- Нам надо попасть на крышу. Сможешь договориться с вахтой?</p>
<p>- Попробую.</p>
<p>Мы смогли попасть на крышу, однако новых фактов узнать не удалось. Теперь предстояло найти человека, имеющего доступ к вентиляционной системе корпусов. </p>
<p>- Что будем делать? – поинтересовался Вадим.</p>
<p>- Насладимся видом. Ты когда-нибудь замечал, как может быть прекрасен Минск во всей поспешности и быстротечности?</p>
<p>- Может, нам сейчас лучше подумать насчет происшествий в лекционных?</p>
<p>- Спокойно. Давай просто немного тут постоим.</p>
<p>- Зачем? – удивленно спросил Вадим.</p>
<p>- Просто очень скоро нашему молчаливому собеседнику, спрятавшемуся вон за теми трубами, станет достаточно холодно. Молодой человек, может быть настало время показать своё лицо?</p>
<p>Только я задал своё вопрос, как из-за труб вынырнул человек и побежал в противоположном от нас направлении. Я бросился за ним. Убежать далеко здесь было невозможно. Однако сюрприз меня всё-таки ожидал. Когда я уже настиг незнакомца, он резко развернулся и стремительным ударом в солнечное сплетение отправил меня в довольно болезненное знакомство с крышей корпуса. Вадим подбежал ко мне, а незнакомец достиг выхода на крышу и пропал.</p>
<p>- Всё хорошо?</p>
<p>- Нормально, - хриплым голосом ответил я.</p>
<p>- Мы его упустили.</p>
<p>- Еще посмотрим. Я узнал нашего незнакомца. </p>
<br>
<hr>
<br>
<p>- А я думал, мы договорились, Костя. Ты помог украсть ключи с вахты, ты помог одурачить меня во время того дежурства в корпусе. Что ты делал на крыши? – нервно спросил я.</p>
<p>- Какой еще крыше? – ответил Костя, заикаясь.</p>
<p>- Хватит играть со мной. У меня хватит связей, чтобы обвинить тебя в попытке массового убийства в лекционных аудиториях.</p>
<p>- Убийства? Я никого не убивал! – с ужасом крикнул он.</p>
<p>- Это ты уже на допросе скажешь. Думаешь, тот, кого ты прикрываешь, будет тратить силы на пешку вроде тебя?</p>
<p>- Да я ничего такого не делал. Честно!</p>
<p>- Я жду рассказа.</p>
<p>- Он хотел что-то найти в корпусе, осмотреть все помещения. Для этого и понадобились ключи!</p>
<p>- Кто он?</p>
<p>- Без понятия. Я всегда получал указания через левые аккаунты контакта! Так же было и с газом. Мне нужно было пустить его в вентиляцию. Это усыпляющий газ, никакого вреда.</p>
<p>- Зачем это вообще могло кому-то понадобиться, зачем усыплять целые лекционные?</p>
<p>- Судя по всему, он проверял устойчивость своего газа к распространению в больших помещениях. Это продолжается уже больше года. И я не только про газ. Кто-то усердно ищет нечто в этих стенах, что-то действительно важное.</p>
<p>- Как ты вообще вляпался в такую историю?</p>
<p>- Я просто хотел простора для своего таланта. И он помог. И теперь я ему должен.</p>
<p>- Брысь отсюда. И упаси тебя Господь попасться мне снова на глаза в одном из дел.</p>
<p>- Я понял. Ты меня больше не увидишь.</p>
<p>Костя ушел. А я остался в студсовете один, пытаясь собрать мысли воедино. Я наконец-то получил хоть какие-то ответы. Но вместе с ними приобрел еще больше вопросов.</p>
<p>Что же такого важного может находиться в стенах четвертого корпуса?</p>
EOT4
	, 5 => "5"
	, 6 => "6"
	, 7 => <<<EOT7
<h2>Поздравляем! Вы раскрыли все секреты!</h2>
<p>Оставьте, пожалуйста, свои контактные данные, чтобы мы могли с Вами связаться для вручения подарков.</p>
<form action="" method="post" accept-charset="utf-8">
	<input type="text" name="fio" value="" placeholder="ФИО">
	<input type="text" name="group" value="" placeholder="Номер группы">
	<input type="text" name="secret" value="" placeholder="Секретная фраза"><br>
	<button type="submit">Отправить</button>
</form><br>
<center><img src="images/phoenix.png" width="600" class="phoenix"></center>
EOT7
);

function mb_strcasecmp($str1, $str2, $encoding = null) {
	if (null === $encoding) {$encoding = mb_internal_encoding();}
	return strcasecmp(mb_strtolower($str1, mb_detect_encoding($str1)), mb_strtolower($str2, mb_detect_encoding($str2)));
}

function checkHashes($num, $hash) {
	global $hashes, $flags;
	for ($i = 1; $i < $num; $i++) {
		if (!isset($_COOKIE[$i]) || ($_COOKIE[$i] != $hashes[$i])) {
			return false;
		} else {
			$flags[$i] = true;
		}
	}
	$flags[$num] = true;
	return true;
}

function setFlags() {
	global $hashes, $flags;
	for ($i = 1; $i <= 7; $i++) {
		if (!isset($_COOKIE[$i]) || ($_COOKIE[$i] != $hashes[$i])) {
			break;
		} else {
			$flags[$i] = true;
		}
	}
}

$pageNum = 1;

setFlags();

switch ($pageHash) {
	case $hashes[2]:
		if (checkHashes(2, $pageHash)) {
			setcookie(2, $hashes[2], time() + 3600 * 24 * 365);
			$pageNum = 2;
		} else {
			$flags = array(1 => true, 2 => false, 3 => false, 4 => false, 5 => false, 6 => false, 7 => false);
			$pageNum = 1;
		}
		break;

	case $hashes[3]:
		if (checkHashes(3, $pageHash)) {
			setcookie(3, $hashes[3], time() + 3600 * 24 * 365);
			$pageNum = 3;
		} else {
			$flags = array(1 => true, 2 => false, 3 => false, 4 => false, 5 => false, 6 => false, 7 => false);
			$pageNum = 1;
		}
		break;

	case $hashes[4]:
		if (checkHashes(4, $pageHash)) {
			setcookie(4, $hashes[4], time() + 3600 * 24 * 365);
			$pageNum = 4;
		} else {
			$flags = array(1 => true, 2 => false, 3 => false, 4 => false, 5 => false, 6 => false, 7 => false);
			$pageNum = 1;
		}
		break;

	case $hashes[5]:
		if (checkHashes(5, $pageHash)) {
			setcookie(5, $hashes[5], time() + 3600 * 24 * 365);
			$pageNum = 5;
		} else {
			$flags = array(1 => true, 2 => false, 3 => false, 4 => false, 5 => false, 6 => false, 7 => false);
			$pageNum = 1;
		}
		break;

	case $hashes[6]:
		if (checkHashes(6, $pageHash)) {
			setcookie(6, $hashes[6], time() + 3600 * 24 * 365);
			$pageNum = 6;
		} else {
			$flags = array(1 => true, 2 => false, 3 => false, 4 => false, 5 => false, 6 => false, 7 => false);
			$pageNum = 1;
		}
		break;

	case $hashes[7]:
		if (checkHashes(7, $pageHash)) {
			setcookie(7, $hashes[7], time() + 3600 * 24 * 365);
			$pageNum = 7;
			// ПОБЕДИТЕЛЬ
			if (isset($_POST['fio'])) {

				if (isset($_POST['secret']) && mb_strcasecmp($_POST['secret'], "феникс") == 0) {
					$to = 'tenedos@tut.by';
					$subject = 'Этюд в студенческих тонах (игра)';
					$message = 'Ура, у нас есть победитель!<br>ФИО: ' . $_POST['fio'] . '<br>Группа: ' . $_POST['group'];
					mail($to, $subject, $message);
					$info = "<p class='green'>Письмо отправлено Детективу на экспертизу.</p>";
				} else {
					$info = "<p class='red'>Введенная секретная фраза неверна. Попробуйте еще раз.</p>";
				}

			}
		} else {
			$flags = array(1 => true, 2 => false, 3 => false, 4 => false, 5 => false, 6 => false, 7 => false);
			$pageNum = 1;
		}
		break;

	default:
		$flags[1] = true;
		setcookie(1, $hashes[1], time() + 3600 * 24 * 365);
		$pageNum = 1;
		break;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$titles[$pageNum]?></title>
	<link rel="stylesheet" href="css/style.min.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<div id="header">
		<img src="images/sherlock.gif" width="180">
		<h1>Этюд<br> в студенческих тонах</h1>
	</div>
	<div id="menu">
		<ul>
<?php if ($flags[1]) {?><li><a href="<?=$hashes[1]?>">День 1</a></li><?}?><?php if ($flags[2]) {?><li><a href="<?=$hashes[2]?>">День 2</a></li><?}?><?php if ($flags[3]) {?><li><a href="<?=$hashes[3]?>">День 3</a></li><?}?><?php if ($flags[4]) {?><li><a href="<?=$hashes[4]?>">День 4</a></li><?}?><?php if ($flags[5]) {?><li><a href="<?=$hashes[5]?>">День 5</a></li><?}?><?php if ($flags[6]) {?><li><a href="<?=$hashes[6]?>">День 6</a></li><?}?><?php if ($flags[7]) {?><li><a href="<?=$hashes[7]?>">Финал</a></li><?}?>
</ul>
	</div>
	<div id="content">
<?=$info?>
<?=$texts[$pageNum]?>
	</div>
	<div id="footer">
		<center>
			<p>Факультет компьютерных систем и сетей, 2014<br>
12 ноября, 17:00, актовый зал БГУИР</p>
		</center>
	</div>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56424670-1', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>