<?php

namespace App\Http\Controllers;

use App\Models\CategoryService;
use App\Models\Image;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {

        $services = Service::all();
        $categoreis =CategoryService::all();
        return view('backend.service.index', compact('services','categoreis'));
    }
    
    public function front() {
        $services = Service::all();
        $categoreis =CategoryService::all();
        return view('frontend.body', compact('services','categoreis'));
    }

    public function create()
    {
        $categoreis =CategoryService::all();
        return view('backend.service.create', compact('categoreis'));
    }

    public function store(Request $request)
    {
//         dd($request);

        $request->validate([
            'name_en' => 'required|string',
            'body' => 'required|string',
            'exp' => 'required|string',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // تحقق من جميع الصور المرسلة
        ]);

        // رفع الصورة الرئيسية
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('services'), $imageName);
        } else {
            $imageName = null;
        }

        // إنشاء خدمة جديدة
        $service = new Service();
        $service->name_en = $request->name_en;
        $service->body = $request->body;
        $service->exp = $request->exp;
        $service->category_id = $request->category_id;
        $service->image = $imageName;
        $service->save();

        // رفع الصور المرفقة
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imagefile) {
                if ($imagefile->isValid()) {
                    $imageNamee = time() . rand(1, 100) . '.' . $imagefile->extension();
                    $imagefile->move(public_path('serve'), $imageNamee);
                    $images = new Image();
                    $images->name = $imageNamee;
                    $images->service_id = $service->id;
                    $images->save();
                }
            }
            }

        return redirect()->route('Service.index')->with('success', 'تم إنشاء الخدمة بنجاح');
    }




    public function show($id)
    {
        $service = Service::with('images')->find($id);
        $servicees = Service::where('category_id',$service->category_id )->get();
        return view('frontend.pages.single_service', compact('service','servicees'));

    }


    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $categories =CategoryService::all();
        $images = Image::where('service_id', $id)->get();
        return view('backend.service.edit', compact('service', 'categories','images'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->validate([
            'name_en' => 'required|string',
            'exp' => 'required|string',
            'body' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('services'), $imageName);
            $service->image = $imageName;
        }else{
            $imageName = $service->image;
        }

        $service->update([
            'name_en' => $request->input('name_en'),
            'body' => $request->input('body'),
            'exp' => $request->input('exp'),
            'category_id' => $request->input('category_id'),
            'image' => $imageName,
        ]);
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imagefile) {
                if ($imagefile->isValid()) {
                    $imageNamee = time() . rand(1, 100) . '.' . $imagefile->extension();
                    $imagefile->move(public_path('serve'), $imageNamee);
                    $images = new Image();
                    $images->name = $imageNamee;
                    $images->service_id = $service->id;
                    $images->save();
                }
            }
        }

        return redirect()->route('Service.index')->with('success', 'Service updated successfully');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('Service.index')->with('success', 'Service deleted successfully');
    }
}
