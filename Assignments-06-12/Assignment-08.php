<?php

echo "<pre>";

print_r(array(
    "FrontEnd" => array(
        "HTML",
        "CSS",
        "JS" => array(
            "Vuejs" => array(
                2 => "v2",
                3 => "v3"
            ),
            0 => "Reactjs",
            1 => "Svelte"
        )
    ),
    "BackEnd" => array(
        "PHP",
        "MySQL",
        "Security"
    ),
    "Git",
    "Github",
    "Testing" => array(
        "Unit Testing",
        "End To End",
        "Integration"
    )
));
echo "</pre>";