<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductReviewModel;
use Yajra\DataTables\Facades\DataTables;

class AdminProductReviewController extends Controller
{
    public function showReview(Request $request)
    {

        if ($request->ajax()) {
            $data = ProductReviewModel::orderBy('id', 'desc')->get();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $id = $data->id;
                    if ($data->status == 0) {
                        $status = "  <a class='dropdown-item' href='#!'
                         onclick=verifyReview('$id','1')><i
                             class='fas fa-check text-success'></i>
                         Verify</a>";
                    } else {
                        $status = "  <a class='dropdown-item' href='#!'
                        onclick=verifyReview('$id','0')><i
                            class='fas fa-times text-danger'></i>
                        Un-verify</a>";
                    }
                    $btn = "
                    <div class='action-dropdown dropdown'>
                       <button class='btn text-600 btn-sm dropdown-toggle' type='button'
                        data-bs-toggle='dropdown'>
                        <span class='fas fa-ellipsis-h fs--1 text-primary'></span>
                       </button>

                     <div class='dropdown-menu border py-2'>
                      $status
                        <a class='dropdown-item' href='#!'
                            onclick=single_deleteConfirm('product_review',[$id],'false','','')><i
                                class='fas fa-trash text-danger'></i>
                            Delete</a>
                     </div>
                    </div>";

                    return $btn;
                })
                ->addColumn('checkbox', function ($data) {
                    $checkbox = $data->id;
                    return $checkbox;
                })
                ->editColumn('status', function ($data) {
                    if ($data->status == 0) {
                        return "<span class='badge text-bg-danger p-2 font-14'>Un-verified</span>";
                    } else {
                        return "<span class='badge text-bg-success p-2 font-14'>Verified</span>";
                    }
                })
                ->editColumn('product_id', function ($data) {
                    $product = getProductUsingProductId($data->product_id);
                    if (count($product) > 0) {
                        $slug = $product[0]->slug;
                        $url = route('frontend.productDetails', $slug);
                        return "<a href='$url' target = '_blank' class='text-primary'>View</a>";
                    } else {
                        return "<span class='badge text-bg-danger p-2 font-14'>Not Found</span>";
                    }
                })
                ->editColumn('created_at', function ($data) {
                    return showDateTime($data->created_at);
                })
                ->editColumn('updated_at', function ($data) {
                    return showDateTime($data->updated_at);
                })

                ->rawColumns(['action', 'checkbox', 'status', 'product_id'])
                ->toJson();
        }

        return view('admin.product-review');
    }
}
