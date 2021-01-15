<?php
$originFiles = [
    "index.ssghtml.php",
    "about.ssghtml.php",
    "pf.ssghtml.php",
];

foreach ( $originFiles as $index => $originFile ) {
    $distFileName = str_replace(".ssghtml.php", ".html", $originFile);
    $command = "c:\\xampp\\php\\php.exe {$originFile} > {$distFileName}";
    shell_exec($command);

    $newSource = file_get_contents($distFileName);
    $newSource = str_replace(".ssghtml.php", ".html", $newSource);
    file_put_contents($distFileName, $newSource);

    echo "{$index} : {$distFileName} 생성됨\n";
}
