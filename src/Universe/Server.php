<?php

namespace Universe;

/***
    ꗥ 𝕂𝔸𝕊𝔽𝕐 
    ꗥ 𝕋𝕙𝕖 𝔽𝕣𝕒𝕞𝕖𝕨𝕠𝕣𝕜 𝕗𝕠𝕣 𝕊𝕞𝕒𝕣𝕥 𝔹𝕒𝕔𝕜-𝔼𝕟𝕕 
    ꗥ 𝔸𝕦𝕥𝕙𝕠𝕣: 𝕂𝕒𝕥𝕙𝕖𝕖𝕤𝕜𝕦𝕞𝕒𝕣 𝕊 [𝕙𝕥𝕥𝕡𝕤://𝕜𝕒𝕥𝕙𝕖𝕖𝕤𝕙.𝕛𝕤.𝕠𝕣𝕘]
 ***/

class Server
{
    public function serve($servestring)
    {
        return shell_exec("php -S " . $servestring);
    }

    public static function dd(mixed $var, bool $pretty = true)
    {
        $backtrace = debug_backtrace();

        echo "<style>
            pre {
                background: dimgrey;
                border-left: 10px solid darkorange;
                color: whitesmoke;
                page-break-inside: avoid;
                font-family: monospace;
                font-size: 15px;
                line-height: 1.4;
                margin-bottom: 1.4em;
                max-width: 100%;
                overflow: auto;
                padding: 1em 1.4em;
                display: block;
                word-wrap: break-word;
            }
        </style>";
        echo "\n<pre>\n";
        if (isset($backtrace[0]['file'])) {
            echo "<i>" . $backtrace[0]['file'] . "</i>\n\n";
        }
        echo "<small>Type:</small> <strong>" . gettype($var) . "</strong>\n";
        echo "<small>Time: " . date('c') . "</small>\n";
        echo "--------------------------\n\n";
        ($pretty) ? print_r($var) : var_dump($var);
        echo "</pre>\n";
        die;
    }
}
