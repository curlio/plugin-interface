<?php
namespace Plenty\Modules\Item\Search\Aggregations;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Processor\AggregationProcessor;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Processor\ProcessorInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\MutatorInterface;

/**
 * aggregation processor for item availabilities
 */
abstract class AvailabilityAggregationProcessor implements ProcessorInterface

{

	abstract public function process(
		array $data
	):array;

	abstract public function getName(
	);

	abstract public function getDependencies(
	):array;

	abstract public function addMutator(
		MutatorInterface $mutator
	):self;

}