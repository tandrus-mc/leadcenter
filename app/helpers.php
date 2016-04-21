<?php

use \League\Csv\Reader;
use \League\Csv\Writer;

function readerFromPath($path){
    return Reader::createFromPath($path);
}

function csvHeader(Reader $reader){
    return $reader->fetchOne(0);
}

function oneHundred(Reader $reader){
    for($i = 1; $i < 101; $i++){
        $hundie[] = $reader->fetchOne($i);
    }
    return $hundie;
}

function csvWriter($path){
    return Writer::createFromFileObject(new \SplFileObject($path, 'w+'))->setNewline("\r\n");
}