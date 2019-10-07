<?php
// PHP - Random Quote Generator
// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

$quotes = [
    [
        "quote" => "The release of emotions, Mr. Spock, is what keeps us healthy-- emotionally healthy, that is.",
        "source" => "Dr. Leonard “Bones” McCoy",
        "citation" => "Star Trek - The Original Series",
        "year" => NULL,
        "episode" => "Plato's Stepchildren"
    ],
    [
        "quote" => "Life and death are seldom logical.",
        "source" => "Dr. Leonard “Bones” McCoy",
        "citation" => "Star Trek - The Original Series",
        "year" => NULL,
        "episode" => "The Galileo Seven"
    ],
    [
        "quote" => "Live long and prosper.",
        "source" => "Mr. Spock",
        "citation" => "Star Trek - The Original Series",
        "year" => NULL,
        "episode" => NULL
    ],
    [
        "quote" => "It is curious how often you humans manage to obtain that which you do not want.",
        "source" => "Mr. Spock",
        "citation" => "Star Trek - The Original Series",
        "year" => NULL,
        "episode" => "Errand of Mercy"
    ],
    [
        "quote" => "Things are only impossible until they're not.",
        "source" => "Captain Jean-Luc Picard",
        "citation" => "Star Trek - The Next Generation",
        "year" => NULL,
        "episode" => "When the Bough Breaks"
    ],
    [
        "quote" => "It is possible to commit no mistakes and still lose. That is not a weakness; that is life.",
        "source" => "Captain Jean-Luc Picard",
        "citation" => "Star Trek - The Next Generation",
        "year" => NULL,
        "episode" => "Peak Performance"
    ],
    [
        "quote" => "Intuition - however illogical, Mr. Spock - is recognized as a command prerogative.",
        "source" => "Captain James Kirk",
        "citation" => "Star Trek - The Original Series",
        "year" => NULL,
        "episode" => "Obsession"
    ],
    [
        "quote" => "Beam me up, Scotty!",
        "source" => "Captain James Kirk",
        "citation" => "Star Trek - The Original Series",
        "year" => NULL,
        "episode" => NULL
    ],
    [
        "quote" => "If you had an off switch, Doctor, would you not keep it secret?",
        "source" => "Data",
        "citation" => "Star Trek - The Next Generation",
        "year" => NULL,
        "episode" => "Datalore"
    ],
    [
        "quote" => "I am superior, sir, in many ways, but I would gladly give it up to be human.",
        "source" => "Data",
        "citation" => "Star Trek - The Next Generation",
        "year" => NULL,
        "episode" => "Encounter at Farpoint"
    ]
];

// Create the getRandomQuote function and name it getRandomQuote

function getRandomQuote($array) {
    $randomIndex = rand(0, (count($array) - 1));
    return $array[$randomIndex];
}

// Create the printQuote function and name it printQuote
function printQuote($quote) {
    $quoteBox = "<div id='quote-box'>";
    $quoteBox .= "<p class='quote'>{$quote["quote"]}</p>";
    $quoteBox .= "<p class='source'>{$quote["source"]}";
    if (isset($quote["citation"])) {
        $quoteBox .= "<span class='citation'>{$quote["citation"]}</span>";
    }
    if (isset($quote["episode"])) {
        $quoteBox .= "<span class='episode'>{$quote["episode"]}</span></p>";
    }
    if (isset($quote["year"])) {
        $quoteBox .= "<span class='year'>{$quote["year"]}</span></p>";
    }
    $quoteBox .= "</div>";

    return $quoteBox;
}

function defineBgColor($quote) {
    switch ($quote["source"]) {
        case 'Dr. Leonard “Bones” McCoy':
        case 'Mr. Spock':
            return "color2";
            break;
        case 'Captain Jean-Luc Picard':
            return "color3";
            break;
        case 'Captain James Kirk':
            return "color4";
            break;
        case 'Data':
            return "color1";
            break;
        default:
            return "";
            break;
    }
}

?>

