<?php

echo 'name : ' ;
echo 'Jordy' ;

echo "name : ";
echo "jordy\t lorem\t ipsum\n";

echo 'name : ';
echo 'Jordy';
echo "\n";

echo "name : ";
echo "jordy\t lorem\t ipsum";

// heredoc
echo <<<teks

gini untuk contoh satu ini tuh bebas seberapa panjang asal peng awal dan peng awkhir itu sama
perhatiin yg <<< sama akhirnya ; lu liat itu lo punya mata pakai 
teks;

// nowdoc
echo <<<'teks'
gini untuk contoh satu ini tuh bebas seberapa panjang asal peng awal dan peng awkhir itu sama
perhatiin yg <<< sama akhirnya ; lu liat itu lo punya mata pakai. gw g tau bedanya apa sama yg atas
teks;
