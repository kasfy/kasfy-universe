<?php

namespace Universe;

/***
    κ₯ ππΈππ½π 
    κ₯ πππ π½π£ππππ¨π π£π ππ π£ ππππ£π₯ πΉπππ-πΌππ 
    κ₯ πΈπ¦π₯ππ π£: πππ₯ππππ€ππ¦πππ£ π [ππ₯π₯π‘π€://πππ₯ππππ€π.ππ€.π π£π]
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
