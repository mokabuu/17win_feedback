<?php

$file = "list.csv";
if ( ( $handle = fopen ( $file, "r" ) ) !== FALSE ) {
    echo('<head><meta charset="UTF-8"><title>Feedback申請</title><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-pink.min.css" /><script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script><meta name="viewport" content="width=device-width,initial-scale=1"></head><body style="background:#EEE;">');
    echo '<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="margin:auto;margin-top:32px;">';
    echo '<tr><th>お名前</th><th>バンド名</th><th>メールアドレス</th><th>申請時刻</th><th>状況</th></tr>';
    while ( ( $data = fgetcsv ( $handle, 1000, ",", '"' ) ) !== FALSE ) {
        echo "\t<tr>\n";
        for ( $i = 0; $i < count( $data ); $i++ ) {
            if($i == 2){
                echo "\t\t<td>privacy masking</td>\n";
            }else{
                echo "\t\t<td>{$data[$i]}</td>\n";
            }
        }
        echo "\t</tr>\n";
    }
    echo "</table>\n";
    echo "</body></html>";
    fclose ( $handle );
}

?>