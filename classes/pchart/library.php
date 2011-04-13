<?php defined('SYSPATH') or die('No direct script access.');

class pChart_library {

	private final function __construct()
	{
		// This is a static class.
	}
	
	static public function barcode128()
	{
		return new pBarcode128();
	}
	
	static public function barcode39()
	{
		return new pBarcode39();
	}
	
	static public function cache()
	{
		return new pCache();
	}
	
	static public function data()
	{
		return new pData();
	}
	
	static public function draw()
	{
		return new pDraw();
	}
	
	static public function image()
	{
		return new pImage();
	}
	
	static public function pie()
	{
		return new pPie();
	}
	
	static public function radar()
	{
		return new pRadar();
	}
	
	static public function scatter()
	{
		return new pScatter();
	}
	
	static public function split()
	{
		return new pSplit();
	}
	
	static public function spring()
	{
		return new pSpring();
	}
	
	static public function stock()
	{
		return new pStock();
	}
	
	static public function surface()
	{
		return new pSurface();
	}

} // End pChart