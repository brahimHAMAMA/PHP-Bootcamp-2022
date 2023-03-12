<?php

$filter_var = filter_list();

foreach ($filter_var as $filter_name) :
    $filter_id[] = filter_id($filter_name);
endforeach;

echo "<pre>";
print_r(array_combine($filter_id, $filter_var));
echo "</pre>";
