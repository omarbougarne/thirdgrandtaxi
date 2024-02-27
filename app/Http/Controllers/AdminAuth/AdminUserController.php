<?php 
// AdminUserController.php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    /**
     * Soft delete a user.
     */
    public function softDelete(User $user)
    {
        $user->delete();

        return redirect()->back()->with('success', 'User soft deleted successfully.');
    }
    public function restore($id){

        $data=User::withTrashed()->find($id);
        $data->restore();
        return redirect()->back();
    }
}
