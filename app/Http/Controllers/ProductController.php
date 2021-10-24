<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Image;
use App\Models\Menu;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::with(['category', 'country'])->paginate(20);

        return view('admin.products', ['products' => $products]);
    }

    public function shop()
    {
        $products = Product::with(['category', 'country'])->paginate(12);
        return view('shop.index', [
            'menu' => Menu::all(),
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all(['id', 'name'])->sortBy('name');
        $countries = Country::all(['id', 'name'])->sortBy('name');
        return view('admin.productCreate', [
            'categories' => $categories,
            'countries' => $countries
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'unique:products'],
            'intro_desc' => ['required', 'string'],
            'description' => ['required', 'string'],
            'categories_id' => ['required'],
            'country_id' => ['required', 'integer'],
            'price' => ['required', 'integer'],
            'published' => ['boolean'],
            'image' => ['nullable', 'file']
        ]);

        $data = $request->only('name', 'intro_desc', 'description', 'country_id', 'price', 'published');

        DB::beginTransaction();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = md5($file->getClientOriginalName() . time());
            $fileExt = $file->getClientOriginalExtension();
            $newFileName = $fileName . '.' . $fileExt;

            $dataImage['name'] = $file->storeAs('images', $newFileName, 'public');

            $image = Image::create($dataImage);
            if ($image) {
                $data['image_id'] = $image->id;
            }
        }

        $product = Product::create($data);

        if ($product) {
            $newProductId = $product->id;
            $insertData = [];
            foreach ($request->categories_id as $categoryId) {
                $insertData[] = ['category_id' => $categoryId, 'product_id' => $newProductId];
            }
            $insertResult = DB::table('product_categories')->insert($insertData);

            if ($insertResult === true) {
                Db::commit();
                return redirect()->route('products.index')->with('success', 'Товар успешно добавлен');
            }
        }

        DB::rollBack();
        return back()->with('fail', 'Ошибка добавления товара');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        if ($product) {
            $categories = $product->category;
            $country = $product->country;
            return view('shop.show', [
                'product' => $product,
                'categories' => $categories,
                'country' => $country,
                'menu' =>  Menu::all()
            ]);
        } else return view('404', [
            'menu' =>  Menu::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all(['id', 'name'])->sortBy('name');
        $countries = Country::all(['id', 'name'])->sortBy('name');

        $productCategories = [];
        foreach ($product->category as $category) {
            $productCategories[] = $category['id'];
        }

        return view('admin.productEdit', [
            'categories' => $categories,
            'productCategories' => $productCategories,
            'product' => $product,
            'countries' => $countries
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'intro_desc' => ['required', 'string'],
            'description' => ['required', 'string'],
            'categories_id' => ['required'],
            'country_id' => ['required', 'integer'],
            'price' => ['required', 'integer'],
            'published' => ['boolean']
        ]);

        $data = $request->only('name', 'intro_desc', 'description', 'country_id', 'price');
        $data['published'] = $request->published ?? 0;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = md5($file->getClientOriginalName() . time());
            $fileExt = $file->getClientOriginalExtension();
            $newFileName = $fileName . '.' . $fileExt;

            $dataImage['name'] = $file->storeAs('images', $newFileName, 'public');

            $image = Image::create($dataImage);
            if ($image) {
                $data['image_id'] = $image->id;
            }
        }

        $oldImageId = $product->image_id;
        $updateStatus = $product->fill($data)->save();

        if ($updateStatus) {
            $oldImage = Image::find($oldImageId);
            $oldImage->delete();

            $insertData = [];
            foreach ($request->categories_id as $categoryId) {
                $insertData[] = ['category_id' => $categoryId, 'product_id' => $product->id];
            }
            DB::table('product_categories')->insertOrIgnore($insertData);

            return redirect()->route('products.index')->with('success', 'Товар успешно изменен');
        }

        return back()->with('fail', 'Ошибка изменения товара');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try {
            DB::table('product_categories')->where('product_id', $product->id)->delete();
            $product->delete();
            return new JsonResponse([
                'message' => 'Товар удален',
                'success' => true
            ], 200);
        } catch (\Exception $ex) {
            return new JsonResponse([
                'message' => $ex->getMessage(),
                'errorCode' => $ex->getCode(),
                'success' => false
            ], 500);
        }
    }
}
