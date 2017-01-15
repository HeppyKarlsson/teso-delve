<?php namespace App\Http\Controllers\Admin;

use App\Enum\BagType;
use App\Enum\ItemStyleChapter;
use App\Http\Controllers\Controller;
use App\Model\Item;
use App\Model\ItemStyle;
use App\Model\ItemStyleChapter as ItemStyleChapterModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class CraftingController extends Controller
{

    public function itemStyles() {
        $itemStyles = ItemStyle::all();
        $chapters = ItemStyleChapter::order();
        $motifs = Item::where('type', 8)->orderBy('name')->get();

        return view('admin.crafting.itemStyles', compact('itemStyles', 'chapters', 'motifs'));
    }

    public function itemStyle(ItemStyle $itemStyle) {
        $motifs = Item::where('type', 8)->orderBy('name')->get();
        $chapters = $itemStyle->chapters;
        return view('admin.crafting.itemStyle', compact('itemStyle', 'motifs', 'chapters'));
    }

    public function uploadImages(Request $request, ItemStyle $itemStyle) {
        $files = $request->files->all();

        foreach($files as $file) {
            /** @var $file UploadedFile */
            $dir = public_path('gfx/item-style/' . $itemStyle->id . "");
            if(!is_dir($dir)) {
                mkdir($dir);
            }

            move_uploaded_file($file->getRealPath(), $dir ."/". $file->getClientOriginalName());
        }

        return '';
    }

    public function updateItemStyle(Request $request, ItemStyle $itemStyle) {
        $data = $request->get('itemStyle');
        $itemStyle->name = $data['name'];
        $itemStyle->location = $data['location'];
        $itemStyle->isHidden = isset($data['isHidden']);
        $itemStyle->craftable = isset($data['craftable']);

        foreach($data['chapter'] as $chapterEnum => $itemId) {
            if(intval($itemId) === 0) {
                $itemStyle->chapters()->where('itemStyleChapterEnum', $chapterEnum)->where('itemStyleId', $itemStyle->id)->delete();
                continue;
            }

            $itemStyleChapter = $itemStyle->chapters->where('itemStyleChapterEnum', $chapterEnum)->first();
            if(is_null($itemStyleChapter)) {
                $itemStyleChapter = new ItemStyleChapterModel();
            }

            $itemStyleChapter->itemStyleChapterEnum = $chapterEnum;
            $itemStyleChapter->itemId = $itemId;
            $itemStyleChapter->itemStyleId = $itemStyle->id;
            $itemStyleChapter->save();
        }

        $itemStyle->save();


        return redirect()->route('admin.crafting.item-style.edit', [$itemStyle]);
    }

    public function updateStyles(Request $request) {
        $itemStyles = ItemStyle::all();
        foreach($request->get('itemStyle') as $id => $data) {
            /** @var ItemStyle $itemStyle */
            $itemStyle = $itemStyles->where('id', $id)->first();
            $itemStyle->name = $data['name'];
            $itemStyle->craftable = isset($data['craftable']);
            $itemStyle->save();
        }

        return redirect()->back();
    }


}
