
<!--Breadcrumbs -->
<div>
<!--Пример html-разметки BreadcrumbList в microdata-->
<ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a target="_blank" href="/" itemprop="item">
            <span itemprop="name">Nikolay Kozhevnikov</span>
        </a>
        <meta itemprop="position" content="1" />
    </li>
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" >
        <a target="_blank" href="/category/articles/" itemprop="item">
            <span itemprop="name">Статьи</span>
        </a>
        <meta itemprop="position" content="2" />
    </li>
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" >
        <a target="_blank" href="/articles/schema-snippets/" itemprop="item">
            <span itemprop="name">Schema Snippets</span>
        </a>
        <meta itemprop="position" content="3" />
    </li>
</ul>

<!--Пример json-разметки BreadcrumbList в JSON-LD-->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement":
        [
            {"@type": "ListItem",
                "position": 1,
                "item":
                {"@id": "https://nkozhevnikov.site/",
                    "name": "Kozhevnikov Site"}
            },
            {"@type": "ListItem",
                "position": 2,
                "item":
                {"@id": "https://nkozhevnikov.site/category/articles/",
                    "name": "Статьи"}
            },
            {"@type": "ListItem",
                "position": 3,
                "item":
                {"@id": "https://nkozhevnikov.site/articles/schema-snippets/",
                    "name": "Schema Snippets"}
            }
        ]
    }
</script>

<!--Пример php-разметки BreadcrumbList для конвертации в JSON-LD-->
<?php
$data = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem',
            'position' => '1',
            'item' => [
                '@id' => 'https://nkozhevnikov.site/',
                'name' => 'Kozhevnikov Site',
            ],
        ],
        ['@type' => 'ListItem',
            'position' => '2',
            'item' => [
                '@id' => 'https://nkozhevnikov.site/category/articles/',
                'name' => 'Articles',
            ],
        ],
        ['@type' => 'ListItem',
            'position' => '3',
            'item' => [
                '@id' => 'https://nkozhevnikov.site/articles/schema-snippets/',
                'name' => 'Schema Snippets',
            ],
        ],
    ],
];

$data = json_encode($data);

echo '<script type="application/ld+json">' . $data . '</script>';
?>
</div>

<!--Микроразметка для организации-->
<div>
<!--    Пример html-разметки Organization в microdata-->
    <div itemscope itemtype="https://schema.org/Organization">
        <span itemprop="name">ООО "Рога и копыта"</span>
        Адрес и телефон:
        <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
            <span itemprop="streetAddress">Большая Покровская, 17</span>
            <span itemprop="postalCode">106783</span>
            <span itemprop="addressLocality">Москва, Россия</span>
        </div>
        Телефон:<span itemprop="telephone">+7 (495) 111 11 11</span>,
        E-mail: <span itemprop="email">post@rogaikopyta.org</span>
    </div>

<!--    Пример json-разметки Organization в JSON-LD-->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Москва, Россия",
                "postalCode": "106783",
                "streetAddress": "Большая Покровская, 17"
            },
            "email": "post@rogaikopyta.org",
            "name": "Рога и копыта",
            "telephone": "+7 (495) 111 11 11"
        }
    </script>

<!--    Пример php-разметки Organization для конвертации в JSON-LD-->
    <?php
    $data = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'address' => [
            '@type' => 'PostalAddress',
            'addressLocality' => 'Москва, Россия',
            'postalCode' => '106783',
            'streetAddress' => 'Большая Покровская, 17',
        ],
        'email' => 'post@rogaikopyta.org',
        'name' => 'Рога и копыта',
        'telephone' => '+7 (495) 111 11 11',
    ];

    $data = json_encode($data);

    echo '<script type="application/ld+json">' . $data . '</script>';
    ?>

<!--    Чтобы передать данные о времени работы компании, гео-координаты и стоимость услуг используется более специфичная
 разметка LocalBusiness. Она позволяет передавать данные о компании в Google Maps автоматически, наравне с другими
 источниками.-->

<!--    Пример html-разметки LocalBusiness в microdata-->
    <div itemscope itemtype="https://schema.org/AutoRental">
        <img itemprop="image" src="/images/logo-square.png"/>
        <span itemprop="name">Абсолют Корона</span>
        <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
            <span itemprop="streetAddress">ул. Илимская, дом 1 Б</span>
            <span itemprop="addressLocality">Москва</span>
        </div>
        <div itemprop="geo" itemscope itemtype="https://schema.org/GeoCoordinates">
            <meta itemprop="latitude" content="55.8892300" />
            <meta itemprop="longitude" content="37.5731234" />
        </div>
        <span itemprop="telephone">8 (495) 783-70-83</span>
        <span itemprop="telephone">8 (916) 783-03-03</span>
        <a itemprop="url" href="https://www.absolutecrown.ru">www.absolutecrown.ru</a>
        Время работы:
        <meta itemprop="openingHours" content="Mo-Fr 10:00-21:00">Пн-Пт 10:00-21:00,
        <meta itemprop="openingHours" content="Sa-Su 10:00-18:00">Сб-Вс 10:00-18:00
        Цены: <span itemprop="priceRange">1100-4700 руб.</span>
    </div>

<!--    Пример json-разметки LocalBusiness в JSON-LD-->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "additionalType": "AutoRental",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Москва",
                "streetAddress": "ул. Илимская, дом 1 Б"
            },
            "name": "Абсолют Корона",
            "email": "mail@absolutecrown.ru",
            "openingHours": [
                "Mo-Fr 10:00-21:00",
                "Sa-Su 10:00-18:00"
            ],
            "priceRange": "1100-4700RUB",
            "telephone": [
                "8 (495) 783-70-83",
                "8 (916) 783-03-03"
            ],
            "image": "/images/logo-square.png",
            "url": "https://www.absolutecrown.ru",
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "55.88923006884247",
                "longitude": "37.57312349999997"
            }
        }
    </script>

<!--    Пример php-разметки LocalBusiness для конвертации в JSON-LD-->
<?php
    $data = [
        '@context' => 'http://schema.org',
        '@type' => 'LocalBusiness',
        'additionalType' => 'AutoRental',
        'address' => [
            '@type' => 'PostalAddress',
            'addressLocality' => 'Москва',
            'streetAddress' => 'ул. Илимская, дом 1 Б',
        ],
        'name' => 'Абсолют Корона',
        'email' => 'mail@absolutecrown.ru',
        'openingHours' => [
            'Mo-Fr 10:00-21:00',
            'Sa-Su 10:00-18:00'
        ],
        'priceRange' => '1100-4700RUB',
        'telephone' => [
            '8 (495) 783-70-83',
            '8 (916) 783-03-03',
        ],
        'image' => '/images/logo-square.png',
        'url' => 'https://www.absolutecrown.ru',
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => '55.88923006884247',
            'longitude' => '37.57312349999997',
        ],
    ];

    $data = json_encode($data);

    echo '<script type="application/ld+json">' . $data . '</script>';
?>
</div>

<!--Микроразметка для статей-->
<div>
<!--    Пример html-разметки Article в microdata-->
    <section itemscope itemtype="https://schema.org/Article">
        <h2 itemprop="headline">Аквариумные рыбы лисицы</h2>
        <img itemprop="image" src="https://www.aqua-shop.ru/images/news/rybki.jpg">
        <div itemprop="description">
            Лисицы — весьма распространенные рыбы в морской аквариумистике.
            Принадлежат к одноимённому семейству Рыбы-лисицы.
            Встречаются в водах Индо-Пацифики и Средиземноморья.
        </div>
        <time itemprop="datePublished" datetime="2016-03-21"></time>
        <span itemprop="author">Аква Шоп</span>
        <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
            <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                <img itemprop="url" src="https://www.aqua-shop.ru/images/news/logo.jpg" />
            </div>
            <meta itemprop="name" content="aqua-shop.ru">
            <meta itemprop="url" content="https://www.aqua-shop.ru">
        </div>
        <meta itemprop="dateModified" content="2018-05-22" />
        <meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="https://www.aqua-shop.ru/articles/rybki_lisicy" />
    </section>

<!--    Пример json-разметки Article в JSON-LD-->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "Article",
            "headline": "Аквариумные рыбы лисицы",
            "image": "https://www.aqua-shop.ru/images/news/Siganus_vulpinus-Lo.jpg",
            "description": "Лисицы — весьма распространенные рыбы в морской аквариумистике. Принадлежат к одноимённому семейству Рыбы-лисицы. Встречаются в водах Индо-Пацифики и Средиземноморья.",
            "author": "Аква Шоп",
            "publisher": {
                "@type": "Organization",
                "name": "aqua-shop.ru",
                "url": "https://www.aqua-shop.ru",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://www.aqua-shop.ru/images/news/logo_Aqua-shop.jpg"
                }
            },
            "datepublished": "2016-03-21",
            "datemodified": "2018-05-22",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "https://www.aqua-shop.ru/articles/rybki_lisicy"
            }
        }
    </script>

<!--    Пример php-разметки Article для конвертации в JSON-LD-->
    <?php
    $data = [
        '@context' => 'http://schema.org',
        '@type' => 'Article',
        'headline' => 'Аквариумные рыбы лисицы',
        'image' => 'https://www.aqua-shop.ru/images/news/Siganus_vulpinus-Lo.jpg',
        'description' => 'Лисицы — весьма распространенные рыбы в морской аквариумистике. Принадлежат к одноимённому семейству Рыбы-лисицы. Встречаются в водах Индо-Пацифики и Средиземноморья.',
        'author' => 'Аква Шоп',
        'publisher' => [
            '@type' => 'Organization',
            'name' => 'aqua-shop.ru',
            'url' => 'https://www.aqua-shop.ru',
            'logo' => [
                '@type' => 'ImageObject',
                'url' => 'https://www.aqua-shop.ru/images/news/logo_Aqua-shop.jpg',
            ]
        ],
        'datepublished' => '2016-03-21',
        'datemodified' => '2018-05-22',
        'mainEntityOfPage' => [
            '@type' => 'WebPage',
            '@id' => 'https://www.aqua-shop.ru/articles/rybki_lisicy',
        ],
    ];

    $data = json_encode($data);

    echo '<script type="application/ld+json">' . $data . '</script>';

    ?>

</div>

<!--Микроразметка для поисковой строки-->
<div>
<!--    Пример html-разметки поисковой строки в microdata-->
    <div itemscope itemtype="https://schema.org/WebSite">
        <meta itemprop="url" content="https://rider-skill.ru"/>
        <form itemprop="potentialAction" itemscope itemtype="https://schema.org/SearchAction">
            <meta itemprop="target" content="https://rider-skill.ru/search/?q={query}"/>
            <input itemprop="query-input" type="text" name="query" required/>
            <input type="submit"/>
        </form>
    </div>

<!--    Пример json-разметки поисковой строки в JSON-LD-->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "url": "https://rider-skill.ru/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://rider-skill.ru/?s={query}",
                "query-input": "required name=query"
            }
        }
    </script>

<!--    Пример php-разметки поисковой строки для конвертации в JSON-LD-->
    <?php
    $data = [
        '@context' => 'http://schema.org',
        '@type' => 'WebSite',
        'url' => 'https://rider-skill.ru/',
        'potentialAction' => [
            '@type' => 'SearchAction',
            'target' => 'https://rider-skill.ru/?s={query}',
            'query-input' => 'required name=query',
        ]
    ];

    $data = json_encode($data);

    echo '<script type="application/ld+json">' . $data . '</script>';
    ?>
</div>

<!--Микроразметка часто задаваемые вопросы (FAQ)-->
<div>
<!--    Пример html-разметки FAQpage в microdata-->
    <div itemscope itemtype="https://schema.org/FAQPage">
        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 itemprop="name">✅ Когда можно обратиться в офис?</h3>
            <div id="a1" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">Мы работаем без выходных и перерывов на обед. Время работы нашего офиса: пн, вт, ср, чт, пт – 10:00-20:00, сб, вс – 10:00-17:00.</div>
            </div>
        </div>
        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 itemprop="name">✅ Можно ли осмотреть Ваши автомашины? Как это сделать?</h3>
            <div id="a2" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">Осмотр автомобилей производится в нашем автопарке до заключения договора и оплаты. Типовой договор Вы можете найти <a href="/link">по ссылке</a></div>.
            </div>
        </div>
    </div>

<!--    Пример json-разметки FAQpage в JSON-LD-->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                "@type": "Question",
                "name": "✅ Когда можно обратиться в офис?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "@id":"a1",
                    "text": "Мы работаем без выходных и перерывов на обед. Время работы нашего офиса: пн, вт, ср, чт, пт – 10:00-20:00, сб, вс – 10:00-17:00."
                }
            }, {
                "@type": "Question",
                "name": "✅ Можно ли осмотреть Ваши автомашины и как это сделать?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "@id":"a2",
                    "text": "Осмотр автомобилей производится в нашем автопарке до заключения договора и оплаты. Типовой договор Вы можете найти <a href=\"/link\">по ссылке</a>."
                }
            }]
        }
    </script>

<!--    Пример php-разметки FAQpage в JSON-LD-->
    <?php
    $data = [
        '@context' => 'http://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => '✅ Когда можно обратиться в офис?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    '@id' => 'a1',
                    'text' => 'Мы работаем без выходных и перерывов на обед. Время работы нашего офиса: пн, вт, ср, чт, пт – 10:00-20:00, сб, вс – 10:00-17:00.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => '✅ Можно ли осмотреть Ваши автомашины и как это сделать?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    '@id' => 'a2',
                    'text' => 'Осмотр автомобилей производится в нашем автопарке до заключения договора и оплаты. Типовой договор Вы можете найти <a href=\"/link\">по ссылке</a>.',
                ],
            ],
        ],
    ];

    $data = json_encode($data);

    echo '<script type="application/ld+json">' . $data . '</script>';
    ?>
</div>

<!--Микроразметка Вопросы и ответы (Q&A)-->
<div>
<!--    Пример html-разметки QApage в microdata-->
    <div itemscope itemtype="https://schema.org/QAPage">
        <div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question">
            <h2 itemprop="name">Как много пальцев у кошки?</h2>
            <div itemprop="upvoteCount">52</div>
            <div itemprop="text">Интересно, как много пальцев у кошек на лапках?</div>
            <div>спросили
                <time itemprop="dateCreated" datetime="2019-07-23">23 июля 2019</time>
            </div>
            <div itemprop="author" itemscope itemtype="https://schema.org/Person">
                <span itemprop="name">Ваня Иванов</span>
            </div>
            <div>
                <div><span itemprop="answerCount">2</span> ответа</div>
                <div><span itemprop="upvoteCount">26</span> оценок</div>
                <div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
                    <div itemprop="upvoteCount">1337</div>
                    <div itemprop="text">В норме у кошачьих 18 пальцев: по 5 на передних лапках и по 4 на задних. Но у кошек широко распространена полидактилия. У знаменитых кошек Хэмингуэя, живущих в его доме на Кубе, на передних лапах по 6 пальцев и больше.
                    </div>
                    <a itemprop="url" href="https://voprosy.com/question1#acceptedAnswer">
                        Ссылка на ответ</a>
                    <div>ответ
                        <time itemprop="dateCreated" datetime="2019-11-02">2 ноября 2019</time>
                    </div>
                    <div itemprop="author" itemscope itemtype="https://schema.org/Person">
                        <span itemprop="name">Алексей Котиков</span>
                    </div>
                </div>
                <div itemprop="suggestedAnswer" itemscope itemtype="https://schema.org/Answer">
                    <div itemprop="upvoteCount">42</div>
                    <div itemprop="text">Столько же, сколько у собак.</div>
                    <a itemprop="url" href="https://voprosy.com/question1#suggestedAnswer1">Ссылка на ответ</a>
                    <div>ответ
                        <time itemprop="dateCreated" datetime="2019-11-04">4 ноября 2019</time>
                    </div>
                    <div itemprop="author" itemscope itemtype="https://schema.org/Person">
                        <span itemprop="name">Михаил Собачкин</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--    Пример json-разметки QApage в JSON-LD-->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "QAPage",
            "mainEntity": {
                "@type": "Question",
                "name": "Как много пальцев у кошки?",
                "text": "Интересно, как много пальцев у кошек на лапках?",
                "answerCount": 3,
                "upvoteCount": 26,
                "dateCreated": "2019-07-23",
                "author": {
                    "@type": "Person",
                    "name": "Ваня Иванов"
                },
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "В норме у кошачьих 18 пальцев: по 5 на передних лапках и по 4 на задних. Но у кошек широко распространена полидактилия. У знаменитых кошек Хэмингуэя, живущих в его доме на Кубе, на передних лапах по 6 пальцев и больше.",
                    "dateCreated": "2019-11-02",
                    "upvoteCount": 1337,
                    "url": "https://voprosy.com/question1#acceptedAnswer",
                    "author": {
                        "@type": "Person",
                        "name": "Алексей Котиков"
                    }
                },
                "suggestedAnswer": [
                    {
                        "@type": "Answer",
                        "text": "Столько же, сколько у собак.",
                        "dateCreated": "2019-11-04",
                        "upvoteCount": 42,
                        "url": "https://voprosy.com/question1#suggestedAnswer1",
                        "author": {
                            "@type": "Person",
                            "name": "Михаил Собачкин"
                        }
                    }
                ]
            }
        }
    </script>

<!--    Пример php-разметки QApage для конвертации в JSON-LD-->
    <?php
    $data = [
        '@context' => 'http://schema.org',
        '@type' => 'QAPage',
        'mainEntity' => [
            '@type' => 'Question',
            'name' => 'Как много пальцев у кошки?',
            'text' => 'Интересно, как много пальцев у кошек на лапках?',
            'answerCount' => 3,
            'upvoteCount' => 26,
            'dateCreated' => '2019-07-23',
            'author' => [
                '@type' => 'Person',
                'name' => 'Ваня Иванов',
            ],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'В норме у кошачьих 18 пальцев: по 5 на передних лапках и по 4 на задних. Но у кошек широко распространена полидактилия. У знаменитых кошек Хэмингуэя, живущих в его доме на Кубе, на передних лапах по 6 пальцев и больше.',
                'dateCreated' => '2019-11-02',
                'upvoteCount' => '1337',
                'url' => 'https://voprosy.com/question1#acceptedAnswer',
                'author' => [
                    '@type' => 'Person',
                    'name' => 'Алексей Котиков',
                ]
            ],
            'suggestedAnswer' => [
                [
                    '@type' => 'Answer',
                    'text' => 'Столько же, сколько у собак.',
                    'dateCreated' => '2019-11-04',
                    'upvoteCount' => '42',
                    'url' => 'https://voprosy.com/question1#suggestedAnswer1',
                    'author' => [
                        '@type' => 'Person',
                        'name' => 'Михаил Собачкин',
                    ]
                ],
            ],
        ],
    ];

    $data = json_encode($data);

    echo '<script type="application/ld+json">' . $data . '</script>';
    ?>
</div>

<!--Микроразметка для инструкции (HowTo)-->
<div>
<!--    Пример html-разметки HowTo в microdata-->
    <div itemscope itemtype="http://schema.org/HowTo">
        <h2 itemprop="name">Как отправить посылку за
            <span itemprop="totalTime" content="P1D">1 день</span></h2>
        <p itemprop="description">Отправляйте товары легко с нашей инструкцией.</p>
        <div id="step1" itemprop="step" itemscope itemtype="http://schema.org/HowToStep">
            <p itemprop="name">Шаг 1. Подготовьте посылку и документы. </p>
            <link itemprop="url" href="https://site.ru/posylka#step1" />
            <img itemprop="image" src="https://site.ru/photos/photo-step1.jpg" />
            <meta itemprop="position" content="1" />
            <div itemprop="itemListElement" itemscope itemtype="http://schema.org/HowToDirection">
                <p itemprop="text">Сложите отравление в коробку и аккуратно заклейте скотчем. Прикрепите бумаги к коробке. </p>
            </div>
        </div>
        <div id="step2" itemprop="step" itemscope itemtype="http://schema.org/HowToStep">
            <p itemprop="name">Шаг 2. Вызовите курьера. </p>
            <link itemprop="url" href="https://site.ru/posylka#step2" />
            <img itemprop="image" src="https://site.ru/photos/photo-step2.jpg" />
            <meta itemprop="position" content="2" />
            <div itemprop="itemListElement" itemscope itemtype="http://schema.org/HowToDirection">
                <p itemprop="text">Заполните заявку на <a href="/forma" rel="nofollow" target="_blank">сайте</a>.</p>
            </div>
        </div>
        <div id="step3" itemprop="step" itemscope itemtype="http://schema.org/HowToStep">
            <p itemprop="name">Шаг 3. Отдайте посылку курьеру.</p>
            <link itemprop="url" href="https://site.ru/posylka#step3" />
            <img itemprop="image" src="https://site.ru/photos/photo-step3.jpg" />
            <meta itemprop="position" content="3" />
            <div itemprop="itemListElement" itemscope itemtype="http://schema.org/HowToDirection">
                <p itemprop="text">Не забудьте записать номер накладной.</p>
            </div>
        </div>
    </div>

<!--    Пример json-разметки HowTo в JSON-LD-->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "HowTo",
            "name": "Как отправить посылку за 1 день",
            "description": "Отправляйте товары легко с нашей инструкцией.",
            "step": [
                {
                    "@type": "HowToStep",
                    "url": "https://site.ru/posylka#step1",
                    "name": "Шаг 1. Подготовьте посылку и документы.",
                    "itemListElement": {
                        "@type": "HowToDirection",
                        "text": "Сложите отравление в коробку и аккуратно заклейте скотчем. Прикрепите бумаги к коробке."
                    },
                    "image": {
                        "@type": "ImageObject",
                        "url": "https://site.ru/photos/photo-step1.jpg",
                        "height": "406",
                        "width": "305"
                    }
                }, {
                    "@type": "HowToStep",
                    "name": "Шаг 2. Вызовите курьера.",
                    "url": "https://site.ru/posylka#step2",
                    "itemListElement": {
                        "@type": "HowToDirection",
                        "text": "Заполните заявку на <a href=\"/forma\" rel=\"nofollow\" target=\"_blank\">сайте</a>."
                    },
                    "image": {
                        "@type": "ImageObject",
                        "url": "hhttps://site.ru/photos/photo-step2.jpg",
                        "height": "406",
                        "width": "305"
                    }
                }, {
                    "@type": "HowToStep",
                    "name": "Шаг 3. Отдайте посылку курьеру.",
                    "url": "https://site.ru/posylka#step3",
                    "itemListElement": {
                        "@type": "HowToDirection",
                        "text": "Не забудьте записать номер накладной."
                    },
                    "image": {
                        "@type": "ImageObject",
                        "url": "https://site.ru/photos/photo-step3.jpg",
                        "height": "406",
                        "width": "305"
                    }
                }
            ],
            "totalTime": "P1D"
        }
    </script>

<!--    Пример php-разметки HowTo для конвертации в JSON-LD-->
    <?php
    $data = [
        '@context' => 'http://schema.org',
        '@type' => 'HowTo',
        'name' => 'Как отправить посылку за 1 день',
        'description' => 'Отправляйте товары легко с нашей инструкцией.',
        'step' => [
            [
                '@type' => 'HowToStep',
                'url' => 'https://site.ru/posylka#step1',
                'name' => 'Шаг 1. Подготовьте посылку и документы.',
                'itemListElement' => [
                    '@type' => 'HowToDirection',
                    'text' => 'Сложите отравление в коробку и аккуратно заклейте скотчем. Прикрепите бумаги к коробке.',
                ],
                'image' => [
                    '@type' => 'ImageObject',
                    'url' => 'https://site.ru/photos/photo-step1.jpg',
                    'height' => '406',
                    'width' => '305',
                ],
            ], [
                '@type' => 'HowToStep',
                'url' => 'https://site.ru/posylka#step2',
                'name' => 'Шаг 2. Вызовите курьера.',
                'itemListElement' => [
                    '@type' => 'HowToDirection',
                    'text' => 'Заполните заявку на <a href=\"/forma\" rel=\"nofollow\" target=\"_blank\">сайте</a>.',
                ],
                'image' => [
                    '@type' => 'ImageObject',
                    'url' => 'https://site.ru/photos/photo-step2.jpg',
                    'height' => '406',
                    'width' => '305',
                ],
            ], [
                '@type' => 'HowToStep',
                'url' => 'https://site.ru/posylka#step3',
                'name' => 'Шаг 3. Отдайте посылку курьеру.',
                'itemListElement' => [
                    '@type' => 'HowToDirection',
                    'text' => 'Не забудьте записать номер накладной.',
                ],
                'image' => [
                    '@type' => 'ImageObject',
                    'url' => 'https://site.ru/photos/photo-step3.jpg',
                    'height' => '406',
                    'width' => '305',
                ],
            ],
        ],
        'totalTime' => 'P1D',
    ];

    $data = json_encode($data);

    echo '<script type="application/ld+json">' . $data . '</script>';
    ?>
</div>

<!--Микроразметка для карточки товара (Product)-->
<div>
<!--    Пример html-разметки Product в microdata-->
    <div>
        <div itemtype="https://schema.org/Product" itemscope>
            <meta itemprop="name" content="Dorothy Perkins Свитер" />
            <link itemprop="image" href="https://shop.com/photos/16x9/photo.jpg" />
            <link itemprop="image" href="https://shop.com/photos/4x3/photo.jpg" />
            <meta itemprop="description" content="Теплый свитер синего цвета из 100% мериносовой шерсти." />
            <div itemprop="offers" itemtype="https://schema.org/Offer" itemscope>
                <link itemprop="url" href="https://shop.com/dp-sviter" />
                <meta itemprop="availability" content="https://schema.org/InStock" />
                <meta itemprop="priceCurrency" content="RUB" />
                <meta itemprop="itemCondition" content="https://schema.org/NewCondition" />
                <meta itemprop="price" content="2500" />
                <meta itemprop="priceValidUntil" content="2020-11-05" />
                <div itemprop="seller" itemtype="https://schema.org/Organization" itemscope>
                    <meta itemprop="name" content="Интернет-магазин Shop.com" />
                </div>
            </div>
            <div itemprop="aggregateRating" itemtype="https://schema.org/AggregateRating" itemscope>
                <meta itemprop="reviewCount" content="89" />
                <meta itemprop="ratingValue" content="4.4" />
            </div>
            <meta itemprop="sku" content="0446310786" />
            <div itemprop="brand" itemtype="https://schema.org/Thing" itemscope>
                <meta itemprop="name" content="Dorothy Perkins" />
            </div>
        </div>
    </div>

<!--    Пример json-разметки Product в JSON-LD-->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "Dorothy Perkins Свитер",
            "image": [
                "https://shop.com/photos/1x1/photo.jpg",
                "https://shop.com/photos/4x3/photo.jpg"
            ],
            "description": "Теплый свитер синего цвета из 100% мериносовой шерсти.",
            "sku": "0446310786",
            "brand": {
                "@type": "Thing",
                "name": "Dorothy Perkins"
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.4",
                "reviewCount": "89"
            },
            "offers": {
                "@type": "Offer",
                "url": "https://shop.com/dp-sviter",
                "priceCurrency": "RUB",
                "price": "2500",
                "priceValidUntil": "2020-11-05",
                "itemCondition": "https://schema.org/NewCondition",
                "availability": "https://schema.org/InStock",
                "seller": {
                    "@type": "Organization",
                    "name": "Интернет-магазин Shop.com"
                }
            }
        }
    </script>

<!--    Пример php-разметки Product для конвертации в JSON-LD-->
    <?php
    $data = [
        '@context' => 'https://schema.org',
        '@type' => 'Product',
        'name' => 'Dorothy Perkins Свитер',
        'image' => [
            'https://shop.com/photos/1x1/photo.jpg',
            'https://shop.com/photos/4x3/photo.jpg'
        ],
        'description' => 'Теплый свитер синего цвета из 100% мериносовой шерсти.',
        'sku' => '0446310786',
        'brand' => [
            '@type' => 'Thing',
            'name' => 'Dorothy Perkins',
        ],
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '4.4',
            'reviewCount' => '89',
        ],
        'offers' => [
            '@type' => 'Offer',
            'url' => 'https://shop.com/dp-sviter',
            'priceCurrency' => 'RUB',
            'price' => '2500',
            'priceValidUntil' => '2020-11-05',
            'itemCondition' => 'https://schema.org/NewCondition',
            'availability' => 'https://schema.org/InStock',
            'seller' => [
                '@type' => 'Organization',
                'name' => 'Интернет-магазин Shop.com',
            ],
        ],
    ];

    $data = json_encode($data);

    echo '<script type="application/ld+json">' . $data . '</script>';
    ?>
</div>

<!--Микроразметка для товарного предложения (AggregateOffer)-->
<div>
<!--    Пример html-разметки AggregateOffer в microdata-->
    <div itemscope itemtype="https://schema.org/Product">
        <img itemprop="image" src="dell-30in-lcd.jpg" alt="A Dell UltraSharp monitor" />
        <span itemprop="name">Dell UltraSharp 30" Монитор LCD</span>
        от <span itemprop="brand">DELL</span>
        <div itemprop="description">Dell UltraSharp 30 с поддержкой технологии Premier Color — UP3017.</div>
        <div itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
            <span itemprop="ratingValue">8.2</span>
            из <span itemprop="bestRating">10</span>
            на основании <span itemprop="ratingCount">5</span> отзывов покупателей
        </div>
        <div itemprop="offers" itemscope itemtype="https://schema.org/AggregateOffer">
            <span itemprop="lowPrice">22000</span>
            до <span itemprop="highPrice">32000</span>
            <span itemprop="priceCurrency">рублей</span>
            от <span itemprop="offerCount">2</span> продавцов
            Предложения:
            <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                <a itemprop="url" href="save-a-lot-monitors.com/dell-30.html">Save A Lot Monitors — 32000</a>
            </div>
            <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                <a itemprop="url" href="jondoe-gadgets.com/dell-30.html">Jon Doe's Gadgets — 22000</a>
            </div>
        </div>
    </div>

<!--    Пример json-разметки AggregateOffer в JSON-LD-->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Product",
            "image": "dell-30in-lcd.jpg",
            "name": "Dell UltraSharp 30\"Монитор LCD" ,
            "description": "Dell UltraSharp 30 с поддержкой технологии Premier Color — UP3017.",
            "brand": "DELL",
            "aggregateRating": {
                "@type": "AggregateRating",
                "bestRating": "10",
                "ratingCount": "5",
                "ratingValue": "8.2"
            },
            "offers": {
                "@type": "AggregateOffer",
                "highPrice": "32000",
                "lowPrice": "22000",
                "priceCurrency": "RUB",
                "offerCount": "2",
                "offers": [
                    {
                        "@type": "Offer",
                        "url": "save-a-lot-monitors.com/dell-30.html"
                    },
                    {
                        "@type": "Offer",
                        "url": "jondoe-gadgets.com/dell-30.html"
                    }
                ]
            }
        }
    </script>

<!--    Пример php-разметки AggregateOffer для конвертации в JSON-LD-->
    <?php
    $data = [
        '@context' => 'https://schema.org',
        '@type' => 'Product',
        'image' => 'dell-30in-lcd.jpg',
        'name' => 'Dell UltraSharp 30\"Монитор LCD',
        'description' => 'Dell UltraSharp 30 с поддержкой технологии Premier Color — UP3017.',
        'brand' => 'DELL',
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'bestRating' => '10',
            'reviewCount' => '5',
            'ratingValue' => '8.2',
        ],
        'offers' => [
            '@type' => 'Offer',
            'highPrice' => '32000',
            'lowPrice' => '22000',
            'priceCurrency' => 'RUB',
            'offerCount' => '2',
            'offers' => [
                [
                    '@type' => 'Offer',
                    'url' => 'save-a-lot-monitors.com/dell-30.html',
                ],
                [
                    '@type' => 'Offer',
                    'url' => 'jondoe-gadgets.com/dell-30.html',
                ],
            ],
        ],
    ];

    $data = json_encode($data);

    echo '<script type="application/ld+json">' . $data . '</script>';
    ?>
</div>

<!--Микроразметка для отзывов (Review)-->
<div>
<!--    Пример html-разметки Product в microdata-->
    <div itemtype="https://schema.org/Product" itemscope>
        <div itemprop="review" itemtype="https://schema.org/Review" itemscope>
            <div itemprop="author" itemtype="https://schema.org/Person" itemscope>
                <meta itemprop="name" content="Кирилл" />
            </div>
            <meta itemprop="datePublished" content="2018-09-07">7 сентября 2018
            <span itemprop="reviewBody">Очень вкусные булочки!</span>
            <div itemprop="reviewRating" itemtype="https://schema.org/Rating" itemscope>
                <meta itemprop="ratingValue" content="5" />
                <meta itemprop="bestRating" content="5" />
                <meta itemprop="worstRating" content="1" />
            </div>
        </div>
        <div itemprop="review" itemtype="https://schema.org/Review" itemscope>
            <div itemprop="author" itemtype="https://schema.org/Person" itemscope>
                <meta itemprop="name" content="Ангелина Иванова" />
            </div>
            <meta itemprop="datePublished" content="2020-09-07">7 сентября 2020
            <span itemprop="name">Пекарня уже не та...</span>
            <span itemprop="reviewBody">Маленький выбор вкусов, не хватает крема в булочке.</span>
            <div itemprop="reviewRating" itemtype="https://schema.org/Rating" itemscope>
                <meta itemprop="ratingValue" content="3" />
                <meta itemprop="bestRating" content="5" />
                <meta itemprop="worstRating" content="1" />
            </div>
        </div>
    </div>

<!--    Пример json-разметки Product в JSON-LD-->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Product",
            "review": [
                {
                    "@type": "Review",
                    "author": "Кирилл",
                    "datePublished": "2018-09-07",
                    "reviewBody": "Очень вкусные булочки!",
                    "reviewRating": {
                        "@type": "Rating",
                        "bestRating": 5,
                        "ratingValue": 5,
                        "worstRating": 1
                    }
                },
                {
                    "@type": "Review",
                    "author": {
                        "@type": "Person",
                        "name": "Ангелина Иванова"
                    }
                    "datePublished": "2020-09-07",
                    "reviewBody": "Маленький выбор вкусов, не хватает крема в булочке.",
                    "name": "Пекарня уже не та...",
                    "reviewRating": {
                        "@type": "Rating",
                        "bestRating": 5,
                        "ratingValue": 3,
                        "worstRating": 1
                    }
                }
            ]
        }
    </script>

<!--    Пример php-разметки Product для конвертации в JSON-LD-->
    <?php
    $data = [
        '@context' => 'https://schema.org',
        '@type' => 'Product',
        'review' => [
            [
                '@type' => 'Review',
                'author' => [
                    '@type' => 'Person',
                    'name' => 'Кирилл',
                ],
                'datePublished' => '2018-09-07',
                'reviewBody' => 'Очень вкусные булочки!',
                'reviewRating' => [
                    '@type' => 'Rating',
                    'bestRating' => '5',
                    'ratingValue' => '5',
                    'worstRating' => '1',
                ],
            ],
            [
                '@type' => 'Review',
                'author' => [
                    '@type' => 'Person',
                    'name' => 'Ангелина Иванова',
                ],
                'datePublished' => '2020-09-07',
                'reviewBody' => 'Маленький выбор вкусов, не хватает крема в булочке.',
                'name' => 'Пекарня уже не та...',
                'reviewRating' => [
                    '@type' => 'Rating',
                    'bestRating' => '5',
                    'ratingValue' => '3',
                    'worstRating' => '1',
                ],
            ],
        ],
    ];

    $data = json_encode($data);

    echo '<script type="application/ld+json">' . $data . '</script>';
    ?>
</div>


<!--Разметка образовательных курсов (Course)-->
<div>https://schema.org/Course</div>

<!--Разметка мероприятий (Event)-->
<div>https://schema.org/Event</div>

<!--Разметка рецептов (Recipe)-->
<div>https://schema.org/Recipe</div>




