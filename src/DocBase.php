<?php
/**
* @file base.php
* @brief doc base
* @author ligang
* @version 1.0
* @date 2015-06-29
 */

namespace Phpdoc;

abstract class DocBase
{/*{{{*/

    /**
        * Get name
        *
        * @return string
     */
    abstract public function getName();

    protected $name = '';

    public function __construct()
    {/*{{{*/
        $this->name = $this->getName();
    }/*}}}*/
}/*}}}*/
