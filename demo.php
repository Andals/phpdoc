<?php
/**
* @file demo.php
* @brief demo for doc
* @author ligang
* @version 1.0
* @date 2015-06-29
 */

namespace Demo;

class DocDemo extends \DocBase implements \DocInterface
{/*{{{*/
    public function echoName()
    {/*{{{*/
        echo "This is $this->name\n";
    }/*}}}*/

    protected function getName()
    {/*{{{*/
        return "doc demo";
    }/*}}}*/
}/*}}}*/
