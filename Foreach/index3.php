<?php

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
$videotheque = array(
    array(
        'nom' => 'Independance day',
        'date' => 1996,
        'realisateur' => 'Roland Emmerich',
        'acteurs' => array(
            'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
        ),
    ),
    array(
        'nom' => 'Bienvenue a Gattaca',
        'date' => 1998,
        'realisateur' => 'Andrew Niccol',
        'acteurs' => array(
            'Ethan Hawke', 'Uma Thurman', 'Jude Law',
        ),
    ),
    array(
        'nom' => 'Forrest Gump',
        'date' => 1994,
        'realisateur' => 'Robert Zemeckis',
        'acteurs' => array(
            'Tom Hanks', 'Gary Sinise',
        ),
    ),
    array(
        'nom' => '12 hommes en colere',
        'date' => 1957,
        'realisateur' => 'Sidney Lumet',
        'acteurs' => array(
            'Henry Fonda', 'Martin Balsam', 'John Fiedler', 'Lee J. Cobb', 'E.G. Marshall',
        ),
    ),
);

echo '12.Mes films : <br>';
//ajoutez votre code ici
foreach ($videotheque as $movie) {
    foreach ($movie as $key => $values) {
        if ($key === 'acteurs') {
            echo "Acteurs ==> ".implode(", ",$values);
        }
        else{
            echo $key." ==> ".$values."<br>";
        }
    }
    echo "<br><br>";
}


//----------------------------------------
//Afficher toutes les informations de la vidéothèque
//reprenez le tableau ci-dessus, ajoutez-y 3 de vos films préférés avec les mêmes
//informations (nom, date, realisateur, acteurs) et en plus de ces informations
//rajoutez un synopsis

echo '13.Mes films : <br>';
//ajoutez votre code ici

$videotheque[] = [
    'nom' => 'film1',
    'date' => 2022,
    'realisateur' => 'Ah ça oui !',
    'acteurs' => array(
        'Ah', 'ça', 'oui',
    ),
    'synopsis' => "Je c pas coi mettre dans le synopsis donc ah ça oui !"
    ];

$videotheque[] = [
    'nom' => 'film2',
    'date' => 2023,
    'realisateur' => 'Ah ça oui 2!',
    'acteurs' => array(
        'Ah', 'ça', 'oui','2',
    ),
    'synopsis' => "Je c pas coi mettre dans le synopsis donc ah ça oui 2 !"
];

$videotheque[] = [
    'nom' => 'film2',
    'date' => 2024,
    'realisateur' => 'Ah ça oui 3!',
    'acteurs' => array(
        'Ah', 'ça', 'oui','3',
    ),
    'synopsis' => "Je c pas coi mettre dans le synopsis donc ah ça oui 3 !"
];


foreach ($videotheque as $movie) {
    foreach ($movie as $key => $values) {
        if ($key === 'acteurs') {
            echo "Acteurs ==> ".implode(", ",$values);
        }
        else{
            echo $key." ==> ".$values."<br>";
        }
    }
    echo "<br><br>";
}

