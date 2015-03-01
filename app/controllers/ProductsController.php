<?php

class ProductsController extends \BaseController {

	public function index()
	{
		$products = Product::paginate(12);
		$text = "Todos los Productos";
		return View::make('pages.shop', compact('products','text'));
	}
	public function productsByType($id){

		$products = Product::where('types_id','=',$id)->paginate(12);
		$text = Type::find($id);
		$text =  $text->name;
		return View::make('pages.shop', compact('products','text'));
	}


	public function show()
	{
		if(Auth::user()->roles_id == 1)
		{
			return View::make('admin.main.products.list');
		}
		return Redirect::to('/');
	}

	public function getByType($id)
	{
		if(Auth::user()->roles_id == 1)
		{
			$products = Product::where('types_id','=',$id)->get();
			$text = Type::find($id);
			$text = $text->name;
			return View::make('admin.main.products.bytype',compact('products','text'));
		}
		return Redirect::to('/');
	}


	public function showCreate()
	{
		if(Auth::user()->roles_id == 1)
		{
			return View::make('admin.main.products.new');
		}
		return Redirect::to('/');
	}

	public function create()
	{
		if(Auth::user()->roles_id == 1)
		{
				$file = Input::file("img");
				$product = new Product();
				$product->code = Input::get("code");
				$product->weight = Input::get('weight');
				$product->size = Input::get('size');
				$product->name = Input::get('name');
				$product->price = Input::get('price');
				$product->reference = Input::get('reference');
				$product->types_id = Input::get('type');
				$product->img_path = Input::file("img")->getClientOriginalName();

				if($product->save())
				{
					$file->move("public/images/products/",$file->getClientOriginalName());

					return Redirect::to('/dashboard/products')->with(array('confirm' => 'Producto Creado Exitosamente'));
				}

		}
		return Redirect::to('/');
	}

	public function edit($id)
	{
		if(Auth::user()->roles_id == 1)
		{
			$product = Product::find($id);
			return View::make('admin.main.products.edit',compact('product'));
		}
		return Redirect::to('/');
	}

	public function save($id)
	{
		if(Auth::user()->roles_id == 1)
		{
			$file = Input::file("img");
			if($product = Product::find($id))
			{
				$product->code = Input::get("code");
				$product->weight = Input::get('weight');
				$product->size = Input::get('size');
				$product->name = Input::get('name');
				$product->price = Input::get('price');
				$product->reference = Input::get('reference');
				$product->types_id = Input::get('type');
				$product->img_path = Input::file("img")->getClientOriginalName();

				if($product->save())
				{
					$file->move("public/images/products/",$file->getClientOriginalName());

					return Redirect::to('/dashboard/products')->with(array('confirm' => 'Producto Actualizado Exitosamente'));
				}

			}

		}
		return Redirect::to('/');
	}


	public function delete($id)
	{
		if(Auth::user()->roles_id == 1)
		{
			$product = Product::find($id);

			$product->delete();

			return Redirect::to('/dashboard/products');
		}
		return Redirect::to('/');
	}


}
