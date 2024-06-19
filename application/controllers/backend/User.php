<?php

class User extends MY_Controller
{
    public function profile($id = null)
    { {

            $notif = null;
            if ($id == null) {
                $user = \Orm\User::first();
            } else {
                $user = \Orm\User::find($id);
            }
            if ($this->input->post()) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');

                if ($username == '' || $password == '') {
                    $notif = "Username / Password tidak boleh kosong!!!";
                } else {
                    $user->username = $username;
                    $user->password = $password;
                    $user->save();

                    $notif = "Username / Password berhasil diganti";
                }
            }

            view('backend.User.profile', ['user' => $user, 'notif' => $notif]);
        }
    }
}