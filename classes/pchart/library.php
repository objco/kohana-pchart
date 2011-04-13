<?php defined('SYSPATH') or die('No direct script access.');

class pChart_library {

	private final function __construct()
	{
		// This is a static class.
	}
	
	static public function barcode128()
	{
		return new pBarcode128(Kohana::config('pchart.data_directory', ''));
	}
	
	static public function barcode39($EnableMOD43 = FALSE)
	{
		return new pBarcode39(Kohana::config('pchart.data_directory', ''), $EnableMOD43);
	}
	
	static public function cache()
	{
		return new pCache(Kohana::config('pchart.cache_settings'));
	}
	
	static public function data()
	{
		return new pData();
	}
	
	static public function draw()
	{
		return new pDraw();
	}
	
	static public function image($XSize, $YSize, $DataSet = NULL, $TransparentBackground = FALSE)
	{
		return new pImage($XSize, $YSize, $DataSet, $TransparentBackground);
	}
	
	static public function indicator($pChartObject)
	{
		return new pIndicator($pChartObject);
	}
	
	static public function pie($Object, $pDataObject)
	{
		return new pPie($Object, $pDataObject);
	}
	
	static public function radar()
	{
		return new pRadar();
	}
	
	static public function scatter($pChartObject, $pDataObject)
	{
		return new pScatter($pChartObject, $pDataObject);
	}
	
	static public function split()
	{
		return new pSplit();
	}
	
	static public function spring()
	{
		return new pSpring();
	}
	
	static public function stock($pChartObject, $pDataObject)
	{
		return new pStock($pChartObject, $pDataObject);
	}
	
	static public function surface($pChartObject)
	{
		return new pSurface($pChartObject);
	}

} // End pChart