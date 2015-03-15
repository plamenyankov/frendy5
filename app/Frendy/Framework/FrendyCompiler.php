<?php
/**
 * Created by PhpStorm.
 * User: vipbs
 * Date: 19/02/15
 * Time: 13:24
 */

namespace App\Frendy\Framework;

use Illuminate\View\Compilers\BladeCompiler;
class FrendyCompiler extends BladeCompiler{
    /**
     * Array of opening and closing tags for regular echos.
     *
     * @var array
     */
    protected $contentTags = array('<%', '%>');

    /**
     * Array of opening and closing tags for escaped echos.
     *
     * @var array
     */
    protected $escapedTags = array('<%%', '%%>');

} 