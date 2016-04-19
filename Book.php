<!DOCTYPE html>

<html>
    <head>
        <?php include("header.php") ?>
        <script type='text/javascript'>
            $(function () {
                $("#setContent").click(function () {

                    if (localStorage.getItem('content')) {
                        var content = localStorage.getItem('content') + $('#content').val() + '<br />';
                        localStorage.setItem('content', content);
                    } else {
                        localStorage.setItem("content", $("#content").val());
                    }

                    $(".content").html(localStorage.getItem("content"));

                });

                $('#removeContent').click(function () {
                    localStorage.removeItem('content');
                    $('.content').html('');
                });

                if (localStorage.getItem("content")) {
                    $(".content").html(localStorage.getItem("content"));
                }
            });
        </script>
    </head>


    <body class="scrollbar" id="GreenScroll">
        <?php
        // put your code here
        ?>
<div class="container">
        <div class="navbar navbar-default navbar-inverse" role="navigation">
             
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse" >
                    <div class="navbar-header">
                        <a class="navbar-brand" href="logout.php">Logout</a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#a" class="dropdown-toggle" role="button" id="dropdownMenu1" aria-expanded="true" data-toggle="dropdown">
                                Меню <span class="caret"></span> 
                            </a> 
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1"> 
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#Предястия">Предястия</a></li> 
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#Салати">Салати</a></li> 
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#Супи">Супи</a></li> 
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#Основни">Основни</a></li> 
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#Десерти">Десерти</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#Вегетариански">Вегетариански</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#Вегетариански">Чай</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" role="button" id="dropdownMenu1" aria-expanded="true" data-toggle="dropdown">
                                Здравословно хранене
                                <span class="caret"></span> </a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1"> 
                                <li role="presentation">
                                    <ul>
                                        <li class="dropdown-header">Начин на храненe:</li>
                                        <li><a href="http://www.bb-team.org/hranitelni-dobavki/statii/za/vitamini-i-minerali">Витамини</a></li>
                                        <li><a href="http://www.bb-team.org/zdrave/statii/za/zdravosloven-den">Диета</a></li>
                                        <li class="dropdown-header">Рецепти според:</li>
                                        <li><a href="http://www.bb-team.org/articles/910_otslabvane-s-ravnomerno-balansirana-dieta-rbd">Отслабване</a></li>
                                        <li><a href="http://www.bb-team.org/articles/911_forma-s-ravnomerno-balansirana-dieta-rbd">Поддържане на форма</a></li>
                                        <li><a href="http://www.bb-team.org/articles/908_ravnomerno-balansirana-dieta-rbd">Покачване на тегло</a></li>
                                    </ul>
                                </li> 
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" role="button" id="dropdownMenu1" aria-expanded="true" data-toggle="dropdown"> 
                                Контакти<span class="caret"></span> </a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1"> 
                                <li role="presentation">
                                    <ul>

                                        <li><a href="http://www.kulinarno-joana.com/">Кулинарно в кухнята с Йоана</a></li>
                                        <li><a href="http://www.zdravnitza.com/">Здравница</a></li>
                                        <li><a href="http://www.bb-team.org/">bb team</a></li>
                                        <li><a href="http://gotvach.bg/">Готвач.бг</a></li>
                                        <li><a href="http://www.24kitchen.bg/">24 Kitchen</a></li>
                                    </ul>
                                </li> 
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        

        <div class="jumbotron">
            <div class="container-fluid">
                <h1 class="text-center text-success">Бележник на любителя на храната</h1>
                <p class="text-center"> ...</p> 
                <button type="button" class="btn btn-default btn-success btn-lg btn-group-justified"> 
                    <span class="glyphicon glyphicon-plane">      
                    </span><a href="http://www.24kitchen.bg/cook-travel"> Пътешествие </a>
                </button>
                <button type="button" class="btn btn-default btn-info btn-lg btn-group-justified"> 
                    <span class="glyphicon glyphicon-globe">      
                    </span><a href="http://www.24kitchen.bg/afrika-kulinarno-prikluchenie"> Държави </a>
                </button>
            </div>
        </div>
    <div class="col-md-12 outside-div">
        <div class="col-md-3 outside-div" >
            <div class="panel  panel-primary" style="height:360px">
                <div class="panel-heading" >Oписание и Разпространение</div>
                <div class="panel-body scrollbar" id="BlueScroll" style="max-height:290px; overflow-y:scroll;">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#Глухарче" aria-controls="Глухарче" role="tab" data-toggle="tab">Глухарче</a></li>
                        <li role="presentation"><a href="#ГрадинскиЧай" aria-controls="ГрадинскиЧай" role="tab" data-toggle="tab">ГрадинскиЧай</a></li>
                        <li role="presentation"><a href="#Шипка" aria-controls="Шипка" role="tab" data-toggle="tab">Шипка</a></li>
                        <li role="presentation"><a href="#Мащерка" aria-controls="Мащерка" role="tab" data-toggle="tab">Мащерка</a></li>
                        <li role="presentation"><a href="#Розмарин" aria-controls="Розмарин" role="tab" data-toggle="tab">Розмарин</a></li>
                        <li role="presentation"><a href="#Коприва" aria-controls="Коприва" role="tab" data-toggle="tab">Коприва</a></li>
                    </ul>
                    <div class="tab-content  text-info">
                        <div role="tabpanel" class="tab-pane fade in active" id="Глухарче">
                            Описание:
                            Многогодишно тревисто растение високо до 30 см, чиято надземна част се състои от розетка от листа и цилиндрично, кухо стебло, на върха на което се намира една цветна кошничка. Листата са неправилно изрязана петура, с едри заострени дялове. Цветната кошничка е съставена от жълти, езичести цветове.
                            Плодът е елипсовиден. Растението развива късо коренище, преминаващо в дебел месест корен, дълъг до 20 см. Цъфти от ранна пролет до есент
                        </div>
                        <div role="tabpanel" class="tab-pane fade">
                            Полухраст със силно разклонени, гъсто облистени, четириръбести, сивозелени стъбла, високи 20-50 см. Листата са срещуположни, с дръжки. Цветовете са събрани по 6-10. Плодът е съставен от 4 тъмнокафяви или челни, почти кълбовидни орехчета. Цъфти юни-юли.
                            Разпространение:
                            Отглежда се често из градините като декоративно и лечебно растение. Произхожда от Средиземноморската област.
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Шипка">
                            Храст с прави или извити стъбла, стигащи на дължина до 3 м и покрити с твърди бодливи, сърповидно извити шипове. Цветоносните стъбла понякога са без шипове. Цветовете са розови или бели. Плодчетата са едносеменни орехчета, затворени в месесто цветно легло, което се разраства и образува яркочервен, яйцевиден до сферичен плод - шипка. Цъфти май-юли, а плодовете узряват през есента. 
                            Разпространение:
                            Расте из храсталаци и редки гори, край реките, по тревисти склонове и синури, в равнините и планините до 2000 м надморска височина. 
                            Употребяема част:
                            Използват се шипките. 
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Мащерка">
                            Многогодишно тревисто растение или полухраст с пълзящи или полегнали стъбла и възходящи цветоносни клонки, високи до 20 см. Цветовете са розови, лилави или бели, събрани в съцветия. Чашките и венчето са двуустни. Цъфти през юни-септември. 
                            Разпространение:
                            Има голям брой видове и форми, които трудно се различават. У нас са разпространени около 15 вида. Срещат се по тревисти и скалисти припечни места из горските поляни и пасища, а по-рядко в ливадите из цялата страна. Най-широко са разпространени в предпланинските и средно високите части на планината. 
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Розмарин">
                            Розмаринът е атрактивен вечнозелен храст от семейство Lamiaceae с листенца като иглички на бор. Среща се най-много по Черноморието, като подивяло, но се отглежда и в градините. 
                            Растението достига височина 60 см. и диаметър 1,5 - 2,5 метра. Храстът на розмарина трябва често да се окастря, за да бъде компактен. Розмаринът цъфти с множество светлосини цветове в края на пролетта и много рядко през есента.
                            Ботаническото име на растението произтича от латинския израз "роса от морето". Това се обяснява с морскосиния цвят, в който розмаринът цъфти и с характерното му местообитание - близо до морето.
                            Почвата за растението трябва да е добре отцеждаща се, а мястото - слънчево. 
                            Розмаринът е символ на приятелство. Често клонки от него се носят от младоженците на сватбата като знак за любов и вярност.
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Коприва">
                            Копривата принадлежи към най-добрите лечебни растения, които имаме.
                            Копривата е полезна като се започне от корена и се мине към стъблото и листата, та чак до цветовете.
                            Лечебно действие и приложение:
                            Листата притежават кръвоспиращо, диуретично, противоревматично действие; влияят благотворно върху обмяната на веществата, намаляват кръвната захар. Това действие се дължи на витамините, солите на желязото и други съединения.
                            Прилага се при вътрешни кръвоизливи (маточни, бъбречни, чернодробни) и като усилващо средство.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div  class="col-md-3 outside-div" style="height:380px; margin-top:20px">
            <div class="panel panel-default panel-success">
                <div class="panel-heading"><h3>Билкa</h3></div>
                <div class="panel-body" id="GreenScroll" style="max-height:276px; overflow-y:scroll; min-height:276px; overflow-y:scroll;">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="Глухарче">
                            <img alt="Глухарче" class="img-responsive" src="fonts/Билки/Глухарче.jpg" width="314" height="246">
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="ГрадинскиЧай">
                            <img alt="ГрадинскиЧай" class="img-responsive" src="fonts/Билки/ГрадинскиЧай.jpg" width="314" height="246">
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Шипка">
                            <img alt="Шипка" class="img-responsive" src="fonts/Билки/Шипка.jpg" width="314" height="246"> 
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Мащерка">
                            <img alt="Мащерка" class="img-responsive" src="fonts/Билки/Мащерка.jpg" width="314" height="246"> 
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Розмарин">
                            <img alt="Розмарин" class="img-responsive" src="fonts/Билки/Розмарин.jpg" width="314" height="246">
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Коприва">
                            <img alt="Коприва" class="img-responsive" src="fonts/Билки/Коприва.jpg" width="314" height="246">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div  class="col-md-3 outside-div" id="ЛечебноДействие" style="height:380px;  ">
            <div class="panel panel-default panel-warning">
                <div class="panel-heading"><h3>Лечебно действие</h3></div>
                <div class="panel-body" id="OrangeScroll" style="max-height:276px; overflow-y:scroll;">
                    <div class="tab-content  bg-warning">
                        <div role="tabpanel" class="tab-pane fade in active" id="Глухарче">
                            Надземната част с корените подобрява функциите на черния дроб, действа жлъчогонно, пикочогонно, противоглистно, възбужда апетита. Лечебният ефект се дължи на съдържащите се в растението горчиви вещества, органични киселини и гликозиди. Усилва действието на подстомашната жлеза - повишава отделянето на инсулин и намалява количеството на холестерола в кръвта.
                            Прилага се при чернодробни заболявания, болести на пикочните пътища, хемороиди, стомашни и чревни смущения, леки форми на захарен диабет.
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="ГрадинскиЧай">
                            Употребяема част:
                            Използват се листата и цялата надземна част за получаване на етерично масло.
                            Лечебно действие:
                            Градинският чай притежава противовъзпалително, дезинфекционно и противокашлично действие.
                            Прилага се при:
                            • гърлобол, ларингит, трахеобронхит, кашлица от различен произход, трахеобронхит
                            • при възпаление на стомаха и червата, стомашни болки, стомашна язва,
                            • при диария, чернодробни и жлъчни заболявания
                            Запарка за компреси външно: 
                            гнойни рани, бани при кожни обриви, гаргара при ангина, зъбобол, възпаления на устната лигавица
                            • етерично масло: за инхалация.
                            Начин на употреба: Запарка от 1 супена лъжица билка на 1/2 л вряща вода се използува за гаргара и за лечение на гнойни рани. За вътрешна употреба се приготвя запарка от 1 супена лъжица дрога и 250 г вряща вода.
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Шипка">
                            Подобрява окислително-редукционните процеси в клетките, уплътнява капилярите, действа диуретично. Шипката влияе благоприятно на функциите на костния мозък и обмяната на веществата. Лечебният ефект се дължи главно на витамините.
                            Приложения:
                            • при авитаминоза - скорбут и хиповитаминоза - пролетна умора 
                            • при състояния след тежко боледуване - засилва защитните сили на организма 
                            • повишава жизнения тонус и работоспособността и активира обмяната на веществата 
                            • при трескави състояния, кървене на венците, диария, жълтеница, 
                            • при хепатит и други чернодробни заболявания 
                            • при обилни маточни кръвотечения 
                            • диуретично и противовъзпалително средство при бъбречни и сърдечно-съдови заболявания
                            • при застойни течности в организма, пясък и камъни в отделителната система, кръвоизливи
                            • В българската народна медицина шипката се използва при болести на простатата, захарен диабет, трудно уриниране, албумин, лошо храносмилане, атеросклероза, за ободряване, при червен вятър, коклюш, високо кръвно налягане, главоболие, безсъние. 
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Мащерка">
                            Тя спокойно може да бъде наречена лек за всичко. Използват се цъфтящите й части. Поради богатото съдържание на етерично масло притежава отхрачващо, антисептично, противовъзпалително, спазмолитично и газогонно действие. Тя има и болкоуспокояващо действие.
                            Използва се като дезинфекциращо средство при хроничен бронхит коклюш, бронхиална астма, суха и спастична кашлица, при белодробни заболявания. Освен това има благотворно действие при хронични гастрити и язва на стомаха, колики, диарии, гнилостни процеси, чревни паразити. Идеална е за успокоение при нервна възбуда, безсъние, главоболие, малокръвие. Може да се използва за гаргара при зъбобол и възпаление на устната лигавица.
                            Добре действат бани с отвара от мащерка при ставни и нервно-мускулни заболявания, радикулит, неврит, миозит.  
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Розмарин">
                            В древността слагали клонки розмарин под възглавниците, за да предпазва от злите сили и кошмарните сънища. 
                            Използва се в изобилие в италианската кухня. Подходящ е за ястия от свинско и агнешко месо и картофи. Използва се при приготвянето на сосове и супи. Чаят, приготвен от изсушени листа на розмарин подобрява храносмилането.
                            Розмаринът в днешно време се използва широко освен в кулинарията, и в козметиката и парфюмерията. 
                            Розмаринът запазва голяма част от аромата си, и когато е изсушен.
                            Като билка се използва против мозъчно възпаление - менингит, пърхут, физическа умора и др.
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Коприва">
                            Външно приложение:
                            Прясна коприва се препоръчва за парене при ревматизъм и ставни болки, за бани при кожни обриви, за налагане на лапи при възпалени лимфни жлези, при подсичане, нараняване, отоци.
                            Пресни листа, киснати 20 дни в маслиново масло (1:10) се употребяват за мазане на рани, изгаряния, натъртвания.
                            Отвара от корените с оцет и вода (1:10:5) и варени 5 минути, се използва за фрикции против пърхот и за растеж на косата.

                            Вътрешно приложение:
                            2 суп.л. листа се слагат в 500 мл вода. Ври 5 мин. Пие се по 100 мл преди ядене, 4 пъти дневно.
                            Семената заедно с връхните части се препоръчват при захарен диабет (2 суп.л. в 1 кофичка кисело мляко, изяжда се на три пъти след ядене).
                            За усилване на сърдечния мускул се прилагат корените (по 1 суп.л. корени от коприва и кръвен здравец се слагат в 600 мл вода; ври 10 минути; изпива се на 4 пъти през деня преди ядене; добавя се и мед)
                        </div>
                    </div> 
                </div>
            </div>
        </div>

        <div  class="col-md-3 outside-div" style="margin-top:20px">
            <div class="panel panel-default  panel-info">
                <div class="panel-heading"><h3>Избрани ястия</h3></div>
                <div class="panel-body carousel" id="carousel" data-ride="carousel" style="height:281px">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                        </ol>

                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="fonts/Ястия/Бриам.jpg" alt="Бриам">
                                <div class="carousel-caption">
                                    Бриам
                                </div>
                            </div>
                            <div class="item">
                                <img src="fonts/Ястия/Вегетариански1.jpg" alt="Вегетариански1">
                                <div class="carousel-caption">
                                    Вегетариански
                                </div>
                            </div>
                            <div class="item">
                                <img src="fonts/Ястия/МорковенаТорта.jpg" alt="МорковенаТорта">
                                <div class="carousel-caption">
                                    Морковена Торта
                                </div>
                            </div>
                            <div class="item">
                                <img src="fonts/Ястия/Капоната.jpg" alt="Капоната">
                                <div class="carousel-caption">
                                    Капоната
                                </div>
                            </div>
                            <div class="item">
                                <img src="fonts/Ястия/КокосовиХапки.jpg" alt="КокосовиХапки">
                                <div class="carousel-caption">
                                    Кокосови Хапки
                                </div>
                            </div>
                            <div class="item">
                                <img src="fonts/Ястия/КремСупа.jpg" alt="КремСупа">
                                <div class="carousel-caption">
                                    Крем Супа
                                </div>
                            </div>
                            <div class="item">
                                <img src="fonts/Ястия/Кускус.jpg" alt="Кускус">
                                <div class="carousel-caption">
                                    Кус-кус
                                </div>
                            </div>
                            <div class="item">
                                <img src="fonts/Ястия/ПредястиеКиш.jpg" alt="ПредястиеКиш">
                                <div class="carousel-caption">
                                    Киш
                                </div>
                            </div>
                        </div>


                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="col-md-12 outside-div">
            <div class="panel panel-success">
                <div class="panel-heading" id="Галактически"><h3>Пътеводител</h3></div>
                <div class="panel-body inner-div">
                    <div class="col-md-6">
                        <div class="panel panel-success" style="height:322px">
                            <div class="panel-heading" id="Галактически" ><h3>Рейтингова система</h3></div>
                            <h4>Капоната</h4>
                            <div style="border-radius:0px;" class="progress progress-success">
                                <div class="bar progress-bar progress-bar-striped active" data-percentage="95"
                                     data-toggle="tooltip" data-placement="top" title="95%"  style=" width:95%; background-color:#E86458; float: left; width: 0%;"></div>
                            </div>
                            <h4>Кус-Кус</h4>
                            <div style="border-radius:0px;" class="progress progress-success">
                                <div class="bar progress-bar progress-bar-striped active" data-percentage="85"
                                     data-toggle="tooltip" data-placement="top" title="85%"  style="width:85%; background-color:#E86458; float: left; width: 0%;"></div>
                            </div>
                            <h4>Бриам</h4>
                            <div style="border-radius:0px;" class="progress progress-success">
                                <div class="bar progress-bar progress-bar-striped active" data-percentage="75"
                                     data-toggle="tooltip" data-placement="top" title="75%"  style="width:75%; background-color:#E86458; float: left; width: 0%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-success" >
                            <div class="panel-heading" id="Галактически"><h3>Мнение на клиента</h3></div>
                            <div  class="chat panel panel-success">

                                <div  id="chat" class="content panel panel-heading"></div>
                                <div class="panel panel-body">
                                    <input type="text" id="content"   />
                                    <input type="button" id="setContent" value='set' />
                                    <input type='button' id='removeContent' value='clear' />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 outside-div">
            <div class="panel panel-default panel-success">
                <div class="panel-heading" id="Предястия"><h3>Предястия</h3></div>
                <div class="panel-body inner-div">
                    <div class="col-md-6">
                        <a href="http://www.kulinarno-joana.com/2011/09/shocoladovi-prediastia/"
                           data-toggle="tooltip" data-placement="top" title="Шоколадови Предястия">
                            <img alt="ГрадинскиЧай" class="img-responsive" src="fonts/Ястия/ПредястиеШоколад.jpg">
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="http://www.kulinarno-joana.com/2009/02/smoked-salmon-sour-cream-caviar-mini-quiches/"
                           data-toggle="tooltip" data-placement="top" title="Мини киш с пушена сьомга, заквасена сметана и червен хайвер">
                            <img alt="ГрадинскиЧай" class="img-responsive" src="fonts/Ястия/ПредястиеКиш.jpg">
                        </a>  
                    </div>  
                </div>
            </div>
        </div>
        <div class="col-md-12 outside-div">
            <div class="panel panel-default panel-success">
                <div class="panel-heading" id="Салати"><h3>Салати</h3></div>
                <div class="panel-body inner-div">
                    <div class="col-md-6">
                        <a href="http://www.kulinarno-joana.com/2013/05/spanachena-salata-s-feta-i-kinoa/"
                           data-toggle="tooltip" data-placement="top" title="Спаначена салата с фета и киноа">
                            <img alt="ГрадинскиЧай" class="img-responsive" src="fonts/Ястия/СалатаСпанак.jpg">
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="http://www.kulinarno-joana.com/2014/01/salata-s-pechena-zemna-qbalka/"
                           data-toggle="tooltip" data-placement="top" title="Салата с печена земна ябълка">
                            <img alt="ГрадинскиЧай" class="img-responsive" src="fonts/Ястия/СалатаЗемнаЯбълка.jpg">
                        </a>  
                    </div> 
                </div>
            </div>
        </div>
        <div class="col-md-12 outside-div">
            <div class="panel panel-default panel-success">
                <div class="panel-heading" id="Супи"><h3>Супи</h3></div>
                <div class="panel-body inner-div">
                    <div class="col-md-6">
                        <a href="http://www.kulinarno-joana.com/2009/12/farmhouse-soup/"
                           data-toggle="tooltip" data-placement="top" title="Борш">
                            <img alt="ГрадинскиЧай" class="img-responsive" src="fonts/Ястия/СупаКореноплодни.jpg">
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="http://www.kulinarno-joana.com/2014/01/krem-supa-ot-zemna-iabalka-i-chesnovi-krutoni-s-masterka/"
                           data-toggle="tooltip" data-placement="top" title="Крем супа от земна ябълка и чеснови крутони с мащерка">
                            <img alt="ГрадинскиЧай" class="img-responsive" src="fonts/Ястия/КремСупа.jpg">
                        </a>  
                    </div>  
                </div>
            </div>
        </div>
        <div class="col-md-12 outside-div">
            <div class="panel panel-default panel-success">
                <div class="panel-heading" id="Основни"><h3>Основни</h3></div>
                <div class="panel-body inner-div">
                    <div class="col-md-6">
                        <a href="http://www.kulinarno-joana.com/2008/12/caponata/"
                           data-toggle="tooltip" data-placement="top" title="Капоната">
                            <img alt="ГрадинскиЧай" class="img-responsive" src="fonts/Ястия/Капоната.jpg">
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="http://www.kulinarno-joana.com/2009/10/briam/"
                           data-toggle="tooltip" data-placement="top" title="Брям – гръцки зеленчуков гювеч">
                            <img alt="ГрадинскиЧай" class="img-responsive" src="fonts/Ястия/Бриам.jpg">
                        </a>  
                    </div>  
                </div>
            </div>
        </div>
        <div class="col-md-12 outside-div">
            <div class="panel panel-default panel-success">
                <div class="panel-heading" id="Десерти"><h3>Десерти</h3></div>
                <div class="panel-body inner-div">
                    <div class="col-md-6">
                        <a href="http://www.kulinarno-joana.com/2011/03/carrot-cake-with-cream-cheese-frosting/"
                           data-toggle="tooltip" data-placement="top" title="Морковена торта">
                            <img alt="ГрадинскиЧай" class="img-responsive" src="fonts/Ястия/МорковенаТорта.jpg">
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="http://www.kulinarno-joana.com/2008/05/coco-bit/"
                           data-toggle="tooltip" data-placement="top" title="Кокосови хапки">
                            <img alt="ГрадинскиЧай" class="img-responsive" src="fonts/Ястия/КокосовиХапки.jpg">
                        </a>  
                    </div>  
                </div>
            </div>
        </div>
        <div class="col-md-12 outside-div">
            <div class="panel panel-default panel-success">
                <div class="panel-heading" id="Вегетариански"><h3>Вегетариански</h3></div>
                <div class="panel-body inner-div">
                    <div class="col-md-6">
                        <a href="http://www.kulinarno-joana.com/2009/12/5-gluten-free-vegetarian-recipes/"
                           data-toggle="tooltip" data-placement="top" title="5 безглутенови вегетариански рецепти">
                            <img alt="ГрадинскиЧай" class="img-responsive" src="fonts/Ястия/Вегетариански1.jpg">
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="http://www.kulinarno-joana.com/2008/11/vegetable-couscous/"
                           data-toggle="tooltip" data-placement="top" title="Вегетариански кус кус със зеленчуци">
                            <img alt="ГрадинскиЧай" class="img-responsive" src="fonts/Ястия/Кускус.jpg">
                        </a>  
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 hidden_divs outside-div">
            <div class="panel panel-default panel-success">
                <div class="panel-heading" id="Чай"><h3>Чай</h3></div>
                <div class="panel-body inner-div">
                    <div class="col-md-6">
                        <a href="http://gotvach.bg/n8-32892-%D0%93%D0%BB%D1%83%D1%85%D0%B0%D1%80%D1%87%D0%B5"
                           data-toggle="tooltip" data-placement="top" title="Глухарче">
                            <img alt="ГрадинскиЧай" class="img-responsive" src="fonts/Билки/ЧайГлухарче.jpg">
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="http://gotvach.bg/n5-44299-%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D0%BE%D1%81%D0%BB%D0%BE%D0%B2%D0%BD%D0%B8_%D0%BF%D0%BE%D0%BB%D0%B7%D0%B8_%D0%BE%D1%82_%D1%88%D0%B8%D0%BF%D0%BA%D0%B0"
                           data-toggle="tooltip" data-placement="top" title="Шипки">
                            <img alt="ГрадинскиЧай" class="img-responsive picture" src="fonts/Билки/ЧайШипки.jpg">
                        </a>  
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="back-to-top" style="display: inline;">
            <i class="glyphicon glyphicon-arrow-up"></i>
        </a>
</div>
    </body>

</html>
