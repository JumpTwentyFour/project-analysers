<?php

namespace JumpTwentyFour\ProjectAnalyzers\Analyzers\Consistency;

use Enlightn\Enlightn\Analyzers\Analyzer;

abstract class ConsistencyAnalyzer extends Analyzer
{
    /**
     * The category of the analyzer.
     *
     * @var string|null
     */
    public $category = 'Consistency';
}
