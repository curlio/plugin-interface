<?php
namespace Plenty\Modules\Item\Variation\Contracts;

use Plenty\Modules\Item\Variation\Services\ExportPreloadValue\ExportPreloadValue;

/**
 * Enhances the loading speed.
 */
interface VariationExportServiceContract 
{

	const SUPPLIER = 'VariationSupplier';

	const STOCK = 'VariationStock';

	const WAREHOUSE = 'VariationWarehouse';

	const BARCODE = 'VariationBarcode';

	const STOCK_STORAGE_LOCATION = 'StockStorageLocation';

	const TAG = 'ItemTag';

	const MARKET_IDENT_NUMBER = 'VariationMarketIdentNumber';

	const COMMENT = 'VariationComment';

	const SALES_PRICE = 'VariationSalesPrice';

	const CATEGORY = 'VariationCategory';

	const PROPERTY = 'VariationEigenschaften';

	const CROSS_SELLING = 'ItemCrossSelling';

	const SHIPPING_PROFILE = 'ItemShippingProfile';

	public function addPreloadTypes(
		array $types
	);

	public function preload(
		array $values
	):array;

	public function getData(
		string $dataType, 
		int $variationId
	);

}