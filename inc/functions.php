<?php
// PHP - Random Quote Generator
// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

$quotes = [
    [
        "quote" => "All we have to decide is what to do with the time that is given us.",
        "source" => "J.R.R. Tolkein",
        "citation" => "The Fellowship of the Ring",
        "year" => "1954",
        "medium" => "Novel"
    ],
    [
        "quote" => "Real courage is when you know you’re licked before you begin, but you begin anyway and see it through no matter what.",
        "source" => "Harper Lee",
        "citation" => "To Kill a Mockingbird",
        "year" => "1960",
        "medium" => "Novel"
    ],
    [
        "quote" => "Live long and prosper.",
        "source" => "Mr. Spock",
        "citation" => "Star Trek - The Original Series",
        "year" => NULL,
        "medium" => "TV series"
    ],
    [
        "quote" => "The Answer to the ultimate question of Life, The Universe and Everything is…42!”",
        "source" => "Douglas Adams",
        "citation" => "The Hitchhiker’s Guide to the Galaxy",
        "year" => "1979",
        "medium" => "Novel"
    ],
    [
        "quote" => "Mama always said life was like a box of chocolates. You never know what you're gonna get.",
        "source" => "Forrest Gump",
        "citation" => "Forrest Gump",
        "year" => "1994",
        "medium" => "Movie"
    ],
    [
        "quote" => "To be a rock and not to roll.",
        "source" => "Led Zeppelin",
        "citation" => "Stairway to Heaven",
        "year" => "1971",
        "medium" => "Song"
    ],
    [
        "quote" => "The love for all living creatures is the most noble attribute of man.",
        "source" => "Charles Darwin",
        "citation" => NULL,
        "year" => "1871",
        "medium" => NULL
    ],
    [
        "quote" => "What greater gift than the love of a cat.",
        "source" => "Charles Dickens",
        "citation" => NULL,
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

