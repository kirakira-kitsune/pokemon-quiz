<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../keys.php';

use LearnositySdk\Request\Init;
use LearnositySdk\Utils\Uuid;

$domain = 'localhost';

$security = [
    'consumer_key' => $consumer_key,
    'domain' => $domain
];

$url_items = 'https://items.learnosity.com/?v2020.2.LTS';

$title = 'Pokemon quiz';
//simple api request object for Items API
$request = [
    'activity_id' => 'itemsactivitiesdemo',
    'name' => 'Items API demo - activities',
    'rendering_type' => 'assess',
    'type' => 'submit_practice',
    'session_id' => Uuid::generate(),
    'user_id' => 'Pokemaster',
    'config' => [
        'title' => $title,
        'subtitle' => 'Gotta answer \'em all!',
        'regions' => [
            "top-left" => [
                [
                    "type" => "title_element"
                ]
            ],
            "top-right" => [
                [
                    "type" => "next_button"
                ]
            ],
            "right" => [
            ],
            "items" => [
            ],
            "bottom-left" => [
            ]
        ],
        'navigation' => [
            'intro_item' => 'Pokemon_quiz_intro',
            'show_intro' => true
        ],
    ],
    'adaptive' => [
        'type' => 'itembranching',
        'steps' => [
            [
                'id' => 'difficulty-choice',
                'reference' => 'pokemon_difficulty_choice',
                'next'=> [
                    'incorrect' => 'easy-step-50',
                    'correct'=> 'hard-step-1'
                ]
            ],
            [
                'id' => 'hard-step-1',
                'reference' => 'pokemon_quiz_item9',
                'next' => 'hard-step-2',
            ],
            [
                'id' => 'hard-step-2',
                'reference' => 'pokemon_quiz_item6',
                'next' => 'hard-step-3'
            ],
            [
                'id' => 'hard-step-3',
                'reference' => 'pokemon_quiz_item8',
                'next' => 'hard-step-4'
            ],
            [
                'id' => 'hard-step-4',
                'reference' => 'pokemon_quiz_item11',
                'next' => 'hard-step-5'
            ],
            [
                'id' => 'hard-step-5',
                'reference' => 'pokemon_quiz_item16',
                'next' => 'hard-step-6'
            ],
            [
                'id' => 'hard-step-6',
                'reference' => 'pokemon_quiz_item20',
                'next' => 'hard-step-7'
            ],
            [
                'id' => 'hard-step-7',
                'reference' => 'pokemon_quiz_item21',
                'next' => 'hard-step-8',
            ],
            [
                'id' => 'hard-step-8',
                'reference' => 'pokemon_quiz_item2',
                'next' => 'hard-step-9',
            ],
            [
                'id' => 'hard-step-9',
                'reference' => 'pokemon_quiz_item25',
                'next' => 'hard-step-10',
            ],
            [
                'id' => 'hard-step-10',
                'reference' => 'pokemon_quiz_item27',
                'next' => 'hard-step-11',
            ],
            [
                'id' => 'hard-step-11',
                'reference' => 'pokemon_quiz_item30',
                'next' => 'hard-step-12',
            ],
            [
                'id' => 'hard-step-12',
                'reference' => 'pokemon_quiz_item28',
                'next' => 'hard-step-13',
            ],
            [
                'id' => 'hard-step-13',
                'reference' => 'pokemon_quiz_item32',
                'next' => 'hard-step-14',
            ],
            [
                'id' => 'hard-step-14',
                'reference' => 'pokemon_quiz_item26',
                'next' => 'hard-step-15',
            ],
            [
                'id' => 'hard-step-15',
                'reference' => 'pokemon_quiz_item35',
                'next' => 'hard-step-16',
            ],
            [
                'id' => 'hard-step-16',
                'reference' => 'pokemon_quiz_item36',
                'next' => 'hard-step-17',
            ],
            [
                'id' => 'hard-step-17',
                'reference' => 'pokemon_quiz_item37',
                'next' => 'hard-step-18',
            ],
            [
                'id' => 'hard-step-18',
                'reference' => 'pokemon_quiz_item17',
                'next' => 'hard-decision-1',
            ],
            [
                'id' => 'hard-decision-1',
                'type' => 'global-score',
                'percentage' => 20,
                '<' => 'hard-outro-1',
                '>=' => 'hard-decision-2',
            ],
            [
                'id' => 'hard-decision-2',
                'type' => 'global-score',
                'percentage' => 50,
                '<' => 'hard-outro-2',
                '>=' => 'hard-decision-3',

            ],
            [
                'id' => 'hard-decision-3',
                'type' => 'global-score',
                'percentage' => 70,
                '<' => 'hard-outro-3',
                '>=' => 'hard-decision-4',
            ],
            [
                'id' => 'hard-decision-4',
                'type' => 'global-score',
                'percentage' => 90,
                '<' => 'hard-outro-4',
                '>=' => 'hard-decision-5',
            ],
            [
                'id' => 'hard-decision-5',
                'type' => 'global-score',
                'percentage' => 98,
                '<' => 'hard-outro-4',
                '>=' => 'hard-outro-5',
            ],
            [
                'id' => 'hard-outro-1',
                'reference' => 'pokemon_quiz_outro-1',
                'next' => null,
            ],
            [
                'id' => 'hard-outro-2',
                'reference' => 'pokemon_quiz_outro-2',
                'next' => null,
            ],
            [
                'id' => 'hard-outro-3',
                'reference' => 'pokemon_quiz_outro-3',
                'next' => null,
            ],
            [
                'id' => 'hard-outro-4',
                'reference' => 'pokemon_quiz_outro-4',
                'next' => null,
            ],
            [
                'id' => 'hard-outro-5',
                'reference' => 'pokemon_quiz_outro-5',
                'next' => null,
            ],

            [
                'id' => 'easy-step-50',
                'reference' => 'pokemon_quiz_item1',
                'next' => 'easy-step-51',
            ],
            [
                'id' => 'easy-step-51',
                'reference' => 'pokemon_quiz_item4',
                'next' => 'easy-step-52'
            ],
            [
                'id' => 'easy-step-52',
                'reference' => 'pokemon_quiz_item12',
                'next' => 'easy-step-53'
            ],
            [
                'id' => 'easy-step-53',
                'reference' => 'pokemon_quiz_item23',
                'next' => 'easy-step-54'
            ],
            [
                'id' => 'easy-step-54',
                'reference' => 'pokemon_quiz_item13',
                'next' => 'easy-step-55'
            ],
            [
                'id' => 'easy-step-55',
                'reference' => 'pokemon_quiz_item34',
                'next' => 'easy-step-56'
            ],
            [
                'id' => 'easy-step-56',
                'reference' => 'pokemon_quiz_item24',
                'next' => 'easy-step-57',
            ],
            [
                'id' => 'easy-step-57',
                'reference' => 'pokemon_quiz_item19',
                'next' => 'easy-step-58',
            ],
            [
                'id' => 'easy-step-58',
                'reference' => 'pokemon_quiz_item3',
                'next' => 'easy-step-59',
            ],
            [
                'id' => 'easy-step-59',
                'reference' => 'pokemon_quiz_item7',
                'next' => 'easy-step-60',
            ],
            [
                'id' => 'easy-step-60',
                'reference' => 'pokemon_quiz_item31',
                'next' => 'easy-step-61',
            ],
            [
                'id' => 'easy-step-61',
                'reference' => 'pokemon_quiz_item29',
                'next' => 'easy-step-62',
            ],
            [
                'id' => 'easy-step-62',
                'reference' => 'pokemon_quiz_item14',
                'next' => 'easy-step-63',
            ],
            [
                'id' => 'easy-step-63',
                'reference' => 'pokemon_quiz_item15',
                'next' => 'easy-step-64',
            ],
            [
                'id' => 'easy-step-64',
                'reference' => 'pokemon_quiz_item33',
                'next' => 'easy-step-65',
            ],
            [
                'id' => 'easy-step-65',
                'reference' => 'pokemon_quiz_item22',
                'next' => 'easy-decision-6',
            ],
            [
                'id' => 'easy-decision-6',
                'type' => 'global-score',
                'percentage' => 20,
                '<' => 'easy-outro-6',
                '>=' => 'easy-decision-7',
            ],
            [
                'id' => 'easy-decision-7',
                'type' => 'global-score',
                'percentage' => 50,
                '<' => 'easy-outro-7',
                '>=' => 'easy-decision-8',

            ],
            [
                'id' => 'easy-decision-8',
                'type' => 'global-score',
                'percentage' => 70,
                '<' => 'easy-outro-8',
                '>=' => 'easy-decision-9',
            ],
            [
                'id' => 'easy-decision-9',
                'type' => 'global-score',
                'percentage' => 90,
                '<' => 'easy-outro-9',
                '>=' => 'easy-outro-10',
            ],
            [
                'id' => 'easy-outro-6',
                'reference' => 'pokemon_quiz_outro-6',
                'next' => null,
            ],
            [
                'id' => 'easy-outro-7',
                'reference' => 'pokemon_quiz_outro-7',
                'next' => null,
            ],
            [
                'id' => 'easy-outro-8',
                'reference' => 'pokemon_quiz_outro-8',
                'next' => null,
            ],
            [
                'id' => 'easy-outro-9',
                'reference' => 'pokemon_quiz_outro-9',
                'next' => null,
            ],
            [
                'id' => 'easy-outro-10',
                'reference' => 'pokemon_quiz_outro-10',
                'next' => null,
            ]
        ],
    ],
];

$Init = new Init('items', $security, $consumer_secret, $request);
$signedRequest = $Init->generate();


?>
<html lang="en-AU">
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
<!-- Container for the assess api to load into -->
<div id="learnosity_assess"></div>

<script src="<?php echo $url_items; ?>"></script>
<script>
    var initializationObject = <?php echo $signedRequest; ?>;

    //optional callbacks for ready
    var callbacks = {
        readyListener: function () {
            console.log("Items API has successfully initialized.");
        },
        errorListener: function (err) {
            console.log(err);
        }
    };

    var itemsApp = LearnosityItems.init(initializationObject, callbacks);
</script>
</body>
</html>