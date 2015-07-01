<?php
/**
* @file demo.php
* @brief demo for doc
* @author ligang
* @version 1.0
* @date 2015-06-29
 */

namespace Phpdoc;

class DocDemo extends \Phpdoc\DocBase implements \Phpdoc\DocInterface
{/*{{{*/
    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {/*{{{*/
        $this->name = $name;
    }/*}}}*/

    /**
        * {@inheritdoc}
     */
    public function getName()
    {/*{{{*/
        return "doc demo";
    }/*}}}*/

    /**
        * Output name
        *
        * @return 
     */
    public function echoName()
    {/*{{{*/
        $name = $this->getName();

        echo "This is $name\n";
    }/*}}}*/
}/*}}}*/
