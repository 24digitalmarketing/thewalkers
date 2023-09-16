<?php

namespace App\Http\Controllers;

use App\Models\MediaModel;
use App\Models\BlogComments;
use Illuminate\Http\Request;


class AjaxRequestController extends Controller
{
    public function ajaxRequest(Request $request)
    {
        if ($request->has('isset_get_modal_media')) {
            $page = $request->page;
            // Define the number of posts to load per page
            $perPage = 18;

            // Calculate the offset based on the page number
            $offset = ($page - 1) * $perPage;

            $mediaData =  MediaModel::orderBy('id', 'desc')
                ->offset($offset)
                ->limit($perPage)
                ->get();
            $data = [];

            if (count($mediaData) != 0) {
                foreach ($mediaData as $single_media) {
                    $url =  asset('mystorage/media/' . $single_media->img_name);
                    $id = $single_media->id;
                    array_push($data, ['id' => $id, 'url' => $url]);
                }
                return response()->json([
                    'status' => true,
                    'media' => $data
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'media' => $data
                ]);
            }
        }


        if ($request->has('isset_blog_comment_status')) {
            $comment_id = $request->comment_id;
            $commentData = BlogComments::where('id', '=', $comment_id)->get();
            if (count($commentData) != 0) {
                $status = $commentData[0]->status;
                if ($status == 0) {
                    $commentData[0]->status = 1;
                    $saveStatus = $commentData[0]->save();
                } else {
                    $commentData[0]->status = 0;
                    $saveStatus = $commentData[0]->save();
                }
                if ($saveStatus === true) {
                    return response()->json([
                        'status' => true,
                        'message' => 'Status Updated Successfully',
                        'redirect' => ''
                    ]);
                } else {
                    return response()->json([
                        'status' => false,
                        'message' => 'Failed to updated status',
                        'redirect' => ''
                    ]);
                }
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Failed to updated status',
                    'redirect' => ''
                ]);
            }
        }
    }
}
