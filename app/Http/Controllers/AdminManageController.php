<?php
namespace App\Http\Controllers;

use DB;
use Input;
use Illuminate\Http\Request;
use Validator;
use Hash;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;

class AdminManageController extends Controller
{

    public function Index()
    {
        $admins = DB::table('admin')->get();

        return view('back.manageAdmin.Index', ['admins' => $admins]);
    }

    public function Add(Request $request)
    {
        if ($request->isMethod('post')) {
            $messages = [
                'email.required' => 'Xin vui lòng nhập Email dự phòng !',
                'username.required' => 'Xin vui lòng nhập Tên đăng nhập !',
                'username.alpha_num' => 'Tên đăng nhập chỉ gồm chữ cái và chữ số !',
                'username.min' => 'Tên đăng nhập phải có ít nhất 5 kí tự !',
                'password.required' => 'Xin vui lòng nhập Mật khẩu !',
                'password.min' => 'Mật khẩu phải có ít nhất 6 kí tự !',
                'cpassword.same' => 'Mật khẩu và mật khẩu xác nhận không trùng nhau !',
                'cpassword.required' => 'Vui lòng xác nhận mật khẩu !'
            ];
            $validator = Validator::make($request->all(), [
                'username' => 'required|alpha_num|min:5|max:50',
                'email' => 'required|email',
                'password' => 'required|min:6',
                'cpassword' => 'required|same:password'],
                $messages);
            if ($validator->fails()) {
                return redirect('Admin/Add')
                    ->withErrors($validator)
                    ->withInput();
            }
            $adminCheck = Admin::where('username', $request->input('username'))->first();
            if ($adminCheck != null) {
                return redirect('Admin/Add')->with(array(
                    'message' => 'Tên đăng nhập đã tồn tại'))->withInput();
            } else {
                $passwordHash = hash('sha256', $request->input('password'));
                try {
                    DB::beginTransaction();
                    DB::table('admin')->insertGetId([
                        'username' => $request->input('username'),
                        'password' => $passwordHash,
                        'email_backup' => $request->input('email'),
                        'type' => $request->input('type')]);
                    DB::commit();
                    return redirect('Admin/Add')->with(array(
                        'message' => 'Tạo mới admin thành công'
                    ));
                } catch (QueryException $e) {
                    DB::rollback();
                    Log::error('Exception: ' . $e->getMessage());
                    return redirect('Admin/Manage')->with(array(
                        'message' => 'Đã có lỗi xảy ra, vui lòng thử lại sau !'
                    ));
                }
            }
        }
    }

    public function Edit(Request $request, $id = null)
    {
        if ($request->isMethod('get')) {
            $admin = Admin::where('id', $id)->first();
            if ($admin != null) {
                return view('back.manageAdmin.Edit')->with('admin', $admin->toArray());
            } else {
                return redirect('Admin/Manage');
            }
        } else {
            $messages = [
                'email.required' => 'Xin vui lòng nhập Email dự phòng !',
            ];
            $validator = Validator::make($request->all(), [
                'email' => 'required|email'],
                $messages);
            if ($validator->fails()) {
                $admin = array(
                    'id' => $id,
                    'username' => $request->input('username'),
                    'email_backup' => $request->input('email'),
                    'type' => $request->input('type')
                );
                return view('back.manageAdmin.Edit', [
                    'admin' => $admin,
                    'errors' => $validator->errors(),
                ]);
            } else {
                try {
                    DB::beginTransaction();
                    DB::table('admin')
                        ->where('id', $id)
                        ->update([
                            'email_backup' => $request->input('email'),
                            'type' => $request->input('type')
                        ]);
                    DB::commit();
                    return redirect('Admin/Edit/' . $id)->with(array(
                        'succMessage' => 'Cập nhật thành công !'
                    ));
                } catch (QueryException $e) {
                    return redirect('Admin/Edit/' . $id)->with(array(
                        'message' => 'Đã có lỗi xảy ra, vui lòng thử lại sau !'
                    ));
                }
            }
        }
    }

    public function Delete($id)
    {
        $admin = Admin::where('id', $id)->first();
        if ($admin != null) {
            $adminDel = Admin::find($id);
            $adminDel->delete();
            return redirect('Admin/Manage');
        } else {
            return redirect('Admin/Manage');
        }
    }

}