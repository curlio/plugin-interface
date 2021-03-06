<?php
namespace Plenty\Modules\Item\Variation\Models;


/**
 * Variation
 */
abstract class Variation 
{

	const MAX_ITEMS_PER_PAGE = 100;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$isMain;
	public		$mainVariationId;
	public		$itemId;
	public		$position;
	public		$isActive;
	public		$number;
	public		$model;
	public		$externalId;
	public		$availability;
	public		$estimatedAvailableAt;
	public		$purchasePrice;
	public		$movingAveragePrice;
	public		$createdAt;
	public		$updatedAt;
	public		$relatedUpdatedAt;
	public		$priceCalculationId;
	public		$picking;
	public		$stockLimitation;
	public		$isVisibleIfNetStockIsPositive;
	public		$isInvisibleIfNetStockIsNotPositive;
	public		$isAvailableIfNetStockIsPositive;
	public		$isUnavailableIfNetStockIsNotPositive;
	public		$mainWarehouseId;
	public		$maximumOrderQuantity;
	public		$minimumOrderQuantity;
	public		$intervalOrderQuantity;
	public		$availableUntil;
	public		$releasedAt;
	public		$name;
	public		$unitCombinationId;
	public		$weightG;
	public		$weightNetG;
	public		$widthMM;
	public		$lengthMM;
	public		$heightMM;
	public		$extraShippingCharge1;
	public		$extraShippingCharge2;
	public		$unitsContained;
	public		$palletTypeId;
	public		$packingUnits;
	public		$packingUnitTypeId;
	public		$transportationCosts;
	public		$storageCosts;
	public		$customs;
	public		$operatingCosts;
	public		$vatId;
	public		$bundleType;
	public		$automaticClientVisibility;
	public		$isHiddenInCategoryList;
	public		$defaultShippingCosts;
	public		$mayShowUnitPrice;
	public		$salesRank;
	public		$categoryVariationId;
	public		$marketVariationId;
	public		$clientVariationId;
	public		$salesPriceVariationId;
	public		$supplierVariationId;
	public		$warehouseVariationId;
	public		$propertyVariationId;
	public		$variationBarcodes;
	public		$variationBundleComponents;
	public		$variationComponentBundles;
	public		$variationProperties;
	public		$properties;
	public		$variationSalesPrices;
	public		$marketItemNumbers;
	public		$variationCategories;
	public		$variationClients;
	public		$variationMarkets;
	public		$variationDefaultCategory;
	public		$variationSuppliers;
	public		$itemTexts;
	public		$variationTexts;
	public		$variationWarehouses;
	public		$images;
	public		$itemImages;
	public		$variationAdditionalSkus;
	public		$variationSkus;
	public		$variationAttributeValues;
	public		$unit;
	public		$parent;
	public		$item;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}