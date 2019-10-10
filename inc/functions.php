<?php

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
        "quote" => "Do. Or do not. There is no try.",
        "source" => "Yoda",
        "citation" => "Star wars Episode V: The Empire Strikes Back",
        "year" => "1980",
        "medium" => "Movie"
    ]
];

// Return a random element from $array
function getRandomQuote($array) {
    $randomIndex = rand(0, (count($array) - 1));
    return $array[$randomIndex];
}

// Print the completed HTML string of the selected quote  
function printQuote($array) {
    $quote = getRandomQuote($array);
    $quoteBox = "<div id='quote-box'>";
    $quoteBox .= "<p class='quote'>{$quote["quote"]}</p>";
    $quoteBox .= "<p class='source'>{$quote["source"]}";
    if (isset($quote["citation"])) {
        $quoteBox .= "<span class='citation'>{$quote["citation"]}</span>";
    }
    if (isset($quote["year"])) {
        $quoteBox .= "<span class='year'>{$quote["year"]}</span>";
    }
    if (isset($quote["medium"])) {
        $quoteBox .= "<span class='medium'>{$quote["medium"]}</span>";
    }
    $quoteBox .= "</p></div>";

    echo $quoteBox;
}