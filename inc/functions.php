<?php
// PHP - Random Quote Generator
// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

$quotes = array(
    array(
        "quote" => "The release of emotions, Mr. Spock, is what keeps us healthy-- emotionally healthy, that is.",
        "author" => "Dr. Leonard “Bones” McCoy",
        "serie" => "The Original Series",
        "episode" => "Plato's Stepchildren"
    ),
    array(
        "quote" => "Life and death are seldom logical.",
        "author" => "Dr. Leonard “Bones” McCoy",
        "serie" => "The Original Series",
        "episode" => "The Galileo Seven"
    ),
    array(
        "quote" => "Live long and prosper.",
        "author" => "Mr. Spock",
        "serie" => "The Original Series",
        "episode" => NULL
    ),
    array(
        "quote" => "It is curious how often you humans manage to obtain that which you do not want.",
        "author" => "Mr. Spock",
        "serie" => "The Original Series",
        "episode" => "Errand of Mercy"
    ),
    array(
        "quote" => "Things are only impossible until they're not.",
        "author" => "Captain Jean-Luc Picard",
        "serie" => "The Next Generation",
        "episode" => "When the Bough Breaks"
    ),
    array(
        "quote" => "It is possible to commit no mistakes and still lose. That is not a weakness; that is life.",
        "author" => "Captain Jean-Luc Picard",
        "serie" => "The Next Generation",
        "episode" => "Peak Performance"
    ),
    array(
        "quote" => "Intuition - however illogical, Mr. Spock - is recognized as a command prerogative.",
        "author" => "Captain James Kirk",
        "serie" => "The Original Series",
        "episode" => "Obsession"
    ),
    array(
        "quote" => "Beam me up, Scotty!",
        "author" => "Captain James Kirk",
        "serie" => "The Original Series",
        "episode" => NULL
    ),
    array(
        "quote" => "If you had an off switch, Doctor, would you not keep it secret?",
        "author" => "Data",
        "serie" => "The Next Generation",
        "episode" => "Datalore"
    ),
    array(
        "quote" => "I am superior, sir, in many ways, but I would gladly give it up to be human.",
        "author" => "Data",
        "serie" => "The Next Generation",
        "episode" => "Encounter at Farpoint"
    )
);


// Create the getRandomQuote function and name it getRandomQuote

function getRandomQuote($quotes) {
    $randomIndex = rand(0, 9);
    return $quotes[$randomIndex];
}

// Create the printQuote function and name it printQuote
function printQuote($quote) {
    $quoteBox = "";
    $quoteBox .= "<div id='quote-box'>";
    $quoteBox .= "<p class='quote'>{$quote["quote"]}</p>";
    $quoteBox .= "<p class='source'>{$quote["author"]}";
    $quoteBox .= "<span class='citation'>{$quote["serie"]}</span>";
    if (isset($quote["episode"])) {
        $quoteBox .= "<span class='year'>{$quote["episode"]}</span></p></div>";
    }
    
    return $quoteBox;
}

?>

