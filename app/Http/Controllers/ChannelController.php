<?php

namespace App\Http\Controllers;

use App\Actions\Caption\CrupdateCaption;
use App\Http\Requests\CrupdateCaptionRequest;
use App\Video;
use App\VideoCaption;
use Common\Core\BaseController;
use Common\Database\Paginator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class CaptionController extends BaseController
{
   /**
    * @var VideoCaption
    */
   /**
    * @var Request
    */
   private $request;

   public function __construct(Request $request)
   {
      $this->request = $request;
   }

   public function index()
   {
      return 'channel';
   }

   /**
    * @param VideoCaption $caption
    * @return StreamedResponse
    */
   public function show(VideoCaption $caption)
   {
   }

   /**
    * @param CrupdateCaptionRequest $request
    * @return Response
    */
   public function store(Request $request)
   {
      $this->validate($request, [
         'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
         'name' => 'required|string',
         'description' => 'required|string',
         'video' => 'required|string',
      ]);

      if ($request->hasfile('logo')) {
         $image_banner = $request->file('logo');
         $filename_banner = $request->site_title . '-' . uniqid() . '.' . $image_banner->extension();
         $path = $request->file('logo')->storeAs('uploads/banner', $filename_banner, 'public_uploads');
      } else {
         $path_banner = null;
      }

      $channel = Channel::create([
         'logo' => $path,
         'name' => $request->name,
         'description' => $request->description,
         'video' => $request->video,
         'user_id' => auth()->user()->id,
      ]);

      return back()->with('success', 'New project has been uploaded successfully');
   }

   /**
    * @param VideoCaption $caption
    * @param CrupdateCaptionRequest $request
    * @return Response
    */
   public function update()
   {
   }

   /**
    * @param string $ids
    * @return Response
    */
   public function destroy()
   {
   }
}
